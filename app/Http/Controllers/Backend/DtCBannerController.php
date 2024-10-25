<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\DTConsultingLanguageUpdateRequest;
use App\Http\Requests\Backend\DTConsultingTransUpdateRequest;
use App\Models\DbCBanner;
use App\Models\DbCBannerTranslation;
use App\Models\MainBanner;
use App\Traits\Custom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DtCBannerController extends Controller
{
    use Custom;

   final public function index()
    {
        $db_consulting_banner = DbCBanner::whereHas('translations', function ($db_consulting_banner) {
            $db_consulting_banner->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->first();

        $translation_languages = DbCBannerTranslation::where('db_c_banner_id', 1)->get();
        $languages = $this->trans_langs($translation_languages);
        $count = count($languages);

        return view('backend.dt_c_banners.index', compact('db_consulting_banner','count','languages'));


    }

    final public function edit(string $id): View
    {
        $dc_banner = DbCBanner::find($id);
        $translation_languages = DbCBannerTranslation::where('db_c_banner_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.dt_c_banners.edit', compact('dc_banner', 'languages'));
    }

    final public function update(DTConsultingTransUpdateRequest $request, string $id): RedirectResponse
    {
        $request = $request->validated();
        $db_consulting_banner = DbCBanner::where('id', '=', $id)->first();
        DB::transaction(function () use ($request,$db_consulting_banner,$id) {
            $db_consulting_banner->save();
            $db_consulting_banner_translation = new DbCBannerTranslation();

            $db_consulting_banner_translation->create([
                'db_c_banner_id' => $id,
                'title' => $request['title'],
                'short_description' => $request['short_description'],
                'long_description' => $request['long_description'],
                'item_one_text' => $request['item_one_text'],
                'item_two_text' => $request['item_two_text'],
                'item_three_text' => $request['item_three_text'],
                'service_title' => $request['service_title'],
                'service_description' => $request['service_description'],
                'middle_title' => $request['middle_title'],
                'middle_description' => $request['middle_description'],
                'middle_text_one' => $request['middle_text_one'],
                'middle_text_two' => $request['middle_text_two'],
                'middle_text_three' => $request['middle_text_three'],
                'locale' => $request['language'],
            ]);

        });
        return redirect()->route('backend.dt_c_banners.index')->withSuccess('yeniləmə etdiniz');
    }

    final public function translationEdit(string $id, string $lang): View
    {
        $db_consulting_banner = DbCBanner::findOrFail($id);
        $translation = $db_consulting_banner->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.dt_c_banners.translation_edit', compact('translation', 'db_consulting_banner'));
        } else {
            return view('backend.dt_c_banners.index')->withSuccess('tərcüməsi yoxdur');
        }
    }



    final public function translationUpdate(int $db_c_banner_id, string $lang, DTConsultingLanguageUpdateRequest $request): RedirectResponse
    {
        $request = $request->validated();
        $db_consulting_bannerTranslation = DbCBannerTranslation::where([
            'db_c_banner_id' => $db_c_banner_id,
            'locale' => $lang
        ])->firstOrFail();

        $db_consulting_banner = DbCBanner::findOrFail($db_c_banner_id);

        DB::transaction(function () use ($request, $db_consulting_banner, $db_consulting_bannerTranslation) {
            $image = $db_consulting_banner->image;
            if (isset($request['image'])) {
                $image = UploadHelper::update(public_path('/' . $image), $request['image'], 'uploads/dt_c_banners/');
            }

            $service_image = $db_consulting_banner->service_image;
            if (isset($request['service_image'])) {
                $service_image = UploadHelper::update(public_path('/' . $service_image), $request['service_image'], 'uploads/services/');
            }

            $db_consulting_banner->update([
                'image' => $image,
                'service_image' => $service_image,
                'item_one_count' => $request['item_one_count'],
                'item_two_count' => $request['item_two_count'],
                'item_three_count' => $request['item_three_count'],

                'middle_count_one' => $request['middle_count_one'],
                'middle_count_two' => $request['middle_count_two'],
                'middle_count_three' => $request['middle_count_three'],


            ]);

            $db_consulting_bannerTranslation->update([
                'title' => $request['title'],
                'short_description' => $request['short_description'],
                'long_description' => $request['long_description'],
                'item_one_text' => $request['item_one_text'],
                'item_two_text' => $request['item_two_text'],
                'item_three_text' => $request['item_three_text'],
                'service_title' => $request['service_title'],
                'service_description' => $request['service_description'],
                'middle_title' => $request['middle_title'],
                'middle_description' => $request['middle_description'],
                'middle_text_one' => $request['middle_text_one'],
                'middle_text_two' => $request['middle_text_two'],
                'middle_text_three' => $request['middle_text_three'],

            ]);
        });

        return redirect()->route('backend.dt_c_banners.index')->withSuccess('yeniləmə etdiniz');
    }











}
