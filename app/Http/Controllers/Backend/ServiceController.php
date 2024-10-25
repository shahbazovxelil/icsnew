<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ServiceLanguageUpdateRequest;
use App\Http\Requests\Backend\ServicesStoreRequest;
use App\Http\Requests\Backend\ServiceUpdateRequest;
use App\Models\Service;
use App\Models\ServiceTranslation;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ServiceController extends Controller
{
    use Custom;

    public function index()
    {

        $services = Service::whereHas('translations', function ($services) {
            $services->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.services.index', compact('services'));

    }

    public function create()
    {
        return view('backend.services.create');

    }

    final public function store(ServicesStoreRequest $request): RedirectResponse
    {
                $service = New Service();
                $image = UploadHelper::upload('image', $request->file('image'), 'uploads/services/' . time(), 'uploads/services/');
                if ($image) {
                    $service->image = $image;
                }
                $service->save();

                $service_translation = new ServiceTranslation();
                $service_translation->service_id = $service->id;
                $service_translation->title = $request->title;
                $service_translation->description = $request->description;
                $service_translation->locale = app()->getLocale();
                $service_translation->save();
        return redirect()->route('backend.services.index')->withSuccess('added');
    }

    final public function edit(string $id): View
    {
        $service = Service::find($id);
        $translation_languages = ServiceTranslation::where('service_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.services.edit', compact('service', 'languages'));
    }

    final public function update(ServiceUpdateRequest $request, string $id): RedirectResponse
    {
        $service = Service::where('id', '=', $id)->first();
        DB::transaction(function () use ($request,$service,$id) {
            $service->save();
            $service_translation = new ServiceTranslation();
            $service_translation->service_id = $id;
            $service_translation->title = $request->title;
            $service_translation->description = $request->description;
            $service_translation->locale = $request->language;
            $service_translation->save();
        });
        return redirect()->route('backend.services.index')->withSuccess('yeniləmə etdiniz');
    }
    final public function translationEdit(string $id, string $lang): View
    {
        $service = Service::findOrFail($id);
        $translation = $service->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.services.translation_edit', compact('translation', 'service'));
        } else {
            return view('backend.services.index')->withSuccess('tərcüməsi yoxdur');
        }
    }

    final public function translationUpdate(int $service_id, string $lang, ServiceLanguageUpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $serviceTranslation = ServiceTranslation::where('service_id', $service_id)
            ->where('locale', $lang)
            ->firstOrFail();
        $service = Service::where('id', $service_id)->first();
        DB::transaction(function () use ($request,$service,$serviceTranslation,$data) {

            $image = $service->image;
            if (isset($data['image'])) {
                $image = UploadHelper::update(public_path('/' . $service->image), $request->file('image'), 'uploads/services/');
            }
            $service->update(['image' => $image]);
            $service_trans = ServiceTranslation::find($serviceTranslation->id);
            $service_trans->update(['title' => $data['title'], 'description' => $data['description']]);

        });

        return redirect()->route('backend.services.index')->withSuccess('update');

    }


    final  public function destroy(string $id): JsonResponse
    {
        DB::transaction(function () use ($id) {
            Service::destroy($id);
        });
        return response()->json(['success'=>'1'],200);
    }
}
