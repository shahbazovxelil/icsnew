<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SubProductLanguageUpdateRequest;
use App\Http\Requests\Backend\SubProductRequest;
use App\Http\Requests\Backend\SubProductUpdateRequest;
use App\Models\Product;
use App\Models\SubProduct;
use App\Models\SubProductTranslation;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SubProductController extends Controller
{
    use Custom;

    private readonly string $pages;
    private readonly string $page;

    public function __construct(
        private readonly SubProduct            $model,
        private readonly SubProductTranslation $translation,
        string                                 $pages = 'sub_products',
        string                                 $page = 'sub_product',
        string                                 $route = 'sub-products',
    )
    {
        $this->pages = $pages;
        $this->page = $page;
        $this->route = $route;
    }

    public function index()
    {
        $subProducts = SubProduct::whereHas('translations', function ($subProducts) {
            $subProducts->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.sub_products.index', compact('subProducts'));

    }

    public function create()
    {

        $products = Product::whereHas('translations', function ($products) {
            $products->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.sub_products.create', compact('products'));

    }

    final public function store(SubProductRequest $request): RedirectResponse
    {

        $validatedData = $request->validated();


        foreach ($validatedData['name'] as $index => $name) {
            $subProduct = new SubProduct();
            $subProduct->product_id = $validatedData['product_id'];
            $subProduct->name = $name;
            $subProduct->msds_text = $validatedData['msds_text'][$index] ?? null;
            $subProduct->tds_text = $validatedData['tds_text'][$index] ?? null;

            if ($request->hasFile('msds_image.' . $index)) {
                $msdsImagePath = $request->file('msds_image.' . $index)->store('uploads/msds_images', 'public');
                $subProduct->msds_image = $msdsImagePath;
            }

            if ($request->hasFile('tds_image.' . $index)) {
                $tdsImagePath = $request->file('tds_image.' . $index)->store('uploads/tds_images', 'public');
                $subProduct->tds_image = $tdsImagePath;
            }

            $subProduct->save();
        }
        return redirect()->route('backend.sub-products.index')->withSuccess('added');
    }

    final public function edit(string $id): View
    {
        $query = $this->model->find($id);
        $translationLanguages = $this->translation->where('' . $this->page . '_id', $id)->get();
        $languages = $this->trans_langs($translationLanguages);
        return view('backend.' . $this->pages . '.edit', compact('query', 'languages'));
    }

    final public function update(SubProductUpdateRequest $request, string $id): RedirectResponse
    {
        $data = $this->model->findOrFail($id);

        DB::transaction(function () use ($request, $data) {
            $data->update($request->validated());

            $this->translation->updateOrCreate(
                ['' . $this->page . '_id' => $data->id, 'locale' => $request->language],
                [
                    'name' => $request->name,
                    'description' => $request->description
                ]
            );
        });

        return redirect()->route('backend.' . $this->route . '.index')->withSuccess('Yeniləmə etdiniz');
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

    final public function translationUpdate(int $modelId, string $lang, SubProductLanguageUpdateRequest $request): RedirectResponse
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
                'name' => $data['name'],
            ]);
        });

        return redirect()->route('backend.' . $this->route . '.index')->withSuccess('Update successful');
    }

    final  public function destroy(string $id): JsonResponse
    {
        DB::transaction(function () use ($id) {
            $this->model->destroy($id);
        });
        return response()->json(['success' => '1'], 200);
    }
}
