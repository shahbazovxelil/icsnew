<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Models\MainBanner;
use App\Models\MainBannerTranslation;
use App\Traits\Custom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MainBannerController extends Controller
{
    use Custom;

   final public function index()
    {
        $main_banner = MainBanner::whereHas('translations', function ($main_banner) {
            $main_banner->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->first();

        $translation_languages = MainBannerTranslation::where('main_banner_id', 1)->get();
        $languages = $this->trans_langs($translation_languages);
        $count = count($languages);

        return view('backend.main_banners.index', compact('main_banner','count','languages'));


    }

    final public function edit(string $id): View
    {
        $main_banner = MainBanner::find($id);
        $translation_languages = MainBannerTranslation::where('main_banner_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.main_banners.edit', compact('main_banner', 'languages'));
    }

    final public function update(Request $request, string $id): RedirectResponse
    {

        $main_banner = MainBanner::where('id', '=', $id)->first();
        DB::transaction(function () use ($request,$main_banner,$id) {
            $main_banner->save();
            $main_banner_translation = new MainBannerTranslation();
            $main_banner_translation->main_banner_id = $id;
            $main_banner_translation->title = $request->title;
            $main_banner_translation->description = $request->description;
            $main_banner_translation->locale = $request->language;
            $main_banner_translation->save();
        });
        return redirect()->route('backend.main_banners.index')->withSuccess('yeniləmə etdiniz');
    }

    final public function translationEdit(string $id, string $lang): View
    {
        $main_banner = MainBanner::findOrFail($id);
        $translation = $main_banner->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.main_banners.translation_edit', compact('translation', 'main_banner'));
        } else {
            return view('backend.main_banners.index')->withSuccess('tərcüməsi yoxdur');
        }
    }

    final public function translationUpdate(int $main_banner_id, string $lang, Request $request): RedirectResponse
    {
        $main_bannerTranslation = MainBannerTranslation::where('main_banner_id', $main_banner_id)
            ->where('locale', $lang)
            ->firstOrFail();
        $main_banner = MainBanner::where('id', $main_banner_id)->first();
        DB::transaction(function () use ($request,$main_banner,$main_bannerTranslation) {

            if ($request->image) {
                $main_banner->image = UploadHelper::update(public_path('/' . $main_banner->image), $request->file('image'), 'uploads/main_banners/');
            }
            $main_banner->save();

            $main_banner_trans = MainBannerTranslation::find($main_bannerTranslation->id);
            $main_banner_trans->title = $request->title;
            $main_banner_trans->description = $request->description;
            $main_banner_trans->save();
        });

        return redirect()->route('backend.main_banners.index')->withSuccess('yeniləmə etdiniz');

    }
}
