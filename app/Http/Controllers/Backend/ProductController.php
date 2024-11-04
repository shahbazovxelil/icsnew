<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProductLanguageUpdateRequest;
use App\Http\Requests\Backend\ProductStoreRequest;
use App\Http\Requests\Backend\ProductUpdateRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTranslation;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    use Custom;

    private readonly string $pages;
    private readonly string $page;

    public function __construct(
        private readonly Product            $model,
        private readonly ProductTranslation $translation,
        string                              $pages = 'products',
        string                              $page = 'product'
    )
    {
        $this->pages = $pages;
        $this->page = $page;
    }

    public function index()
    {

        $languages = $this->model->with('translations')
            ->get()
            ->pluck('translations.*.locale')
            ->flatten()
            ->unique();

        $queries = $this->model->whereHas('translations', function ($q) {
            $q->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.' . $this->pages . '.index', compact('queries', 'languages'));

    }

    public function create()
    {
        return view('backend.' . $this->pages . '.create');

    }


    final public function store(ProductStoreRequest $request): RedirectResponse
    {
        $imagePath = UploadHelper::upload('main_image', $request->file('main_image'), 'uploads/' . $this->pages . '/' . time(), 'uploads/' . $this->pages . '/');

        $imagePaths = UploadHelper::uploads('images', $request->file('images'), 'uploads/' . $this->pages . '/' . time(), 'uploads/' . $this->pages . '/');

        $newModel = $this->model->create([
            'image' => $imagePath,
        ]);
        foreach ($imagePaths as $imagePat) {
            ProductImage::create([
                'product_id' => $newModel->id,
                'image' => $imagePat,
            ]);
        }
        $this->translation->create([
            '' . $this->page . '_id' => $newModel->id,
            'title' => $request->title,
            'description' => $request->description,
            'locale' => app()->getLocale(),
        ]);

        return redirect()->route('backend.' . $this->pages . '.index')->withSuccess('added');
    }


    final public function edit(string $id): View
    {
        $query = $this->model->find($id);
        $translationLanguages = $this->translation->where('' . $this->page . '_id', $id)->get();
        $languages = $this->trans_langs($translationLanguages);
        return view('backend.' . $this->pages . '.edit', compact('query', 'languages'));
    }


    final public function update(ProductUpdateRequest $request, string $id): RedirectResponse
    {

        $data = $this->model->findOrFail($id);

        DB::transaction(function () use ($request, $data) {
//            $data->update($request->validated());

            $this->translation->create([
                $this->page . '_id' => $data->id,
                'description' => $request->description,
                'title' => $request->title,
                'locale' => $request->language,
            ]);
        });

        return redirect()->route('backend.' . $this->pages . '.index')->withSuccess('Yeniləmə etdiniz');
    }


    final public function translationEdit(string $id, string $lang): View
    {
        $query = $this->model->findOrFail($id);
        $translation = $query->translations()->where('locale', $lang)->first();

        if ($translation) {
            return view('backend.' . $this->pages . '.translation_edit', compact('translation', 'query'));
        } else {
            return view('backend.' . $this->pages . '.index')->withSuccess('tərcüməsi yoxdur');
        }
    }


    final public function translationUpdate(int $modelId, string $lang, ProductLanguageUpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $translation = $this->translation
            ->where("{$this->page}_id", $modelId)
            ->where('locale', $lang)
            ->firstOrFail();

        $query = $this->model->findOrFail($modelId);

        DB::transaction(function () use ($request, $query, $translation, $data) {
            if (isset($data['image'])) {
                $imagePath = UploadHelper::update(
                    public_path($query->image),
                    $request->file('image'),
                    'uploads/' . $this->pages . '/'
                );
                $query->update(['image' => $imagePath]);
            }

            $translation->update([
                'title' => $data['title'],
                'description' => $data['description']
            ]);
        });

        return redirect()->route('backend.' . $this->pages . '.index')->withSuccess('Update successful');
    }


    final  public function destroy(string $id): JsonResponse
    {
        DB::transaction(function () use ($id) {
            $this->model->destroy($id);
        });
        return response()->json(['success' => '1'], 200);
    }
}
