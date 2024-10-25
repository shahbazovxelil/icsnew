<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SettingUpdateRequest;
use App\Models\Setting;
use App\Models\SettingTranslation;
use App\Traits\Custom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SettingController extends Controller
{
    use Custom;

   final public function index()
    {
        $setting = Setting::whereHas('translations', function ($setting) {
            $setting->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->first();

        $translation_languages = SettingTranslation::where('setting_id', 1)->get();
        $languages = $this->trans_langs($translation_languages);
        $count = count($languages);

        return view('backend.settings.index', compact('setting','count','languages'));


    }

    final public function edit(string $id): View
    {
        $setting = Setting::find($id);
        $translation_languages = SettingTranslation::where('setting_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.settings.edit', compact('setting', 'languages'));
    }

    final public function update(SettingUpdateRequest $request, string $id): RedirectResponse
    {

        $setting = Setting::where('id', '=', $id)->first();
        DB::transaction(function () use ($request,$setting,$id) {
            $setting->save();
            $setting_translation = new SettingTranslation();
            $setting_translation->setting_id = $id;
            $setting_translation->address = $request->address;
            $setting_translation->description = $request->description;
            $setting_translation->locale = $request->language;
            $setting_translation->save();
        });
        return redirect()->route('backend.settings.index')->withSuccess('yeniləmə etdiniz');
    }

    final public function translationEdit(string $id, string $lang): View
    {
        $setting = Setting::findOrFail($id);
        $translation = $setting->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.settings.translation_edit', compact('translation', 'setting'));
        } else {
            return view('backend.settings.index')->withSuccess('tərcüməsi yoxdur');
        }
    }

    final public function translationUpdate(int $setting_id, string $lang, Request $request): RedirectResponse
    {
        $settingTranslation = SettingTranslation::where('setting_id', $setting_id)
            ->where('locale', $lang)
            ->firstOrFail();
        $setting = Setting::where('id', $setting_id)->first();
        DB::transaction(function () use ($request,$setting,$settingTranslation) {

            if ($request->logo) {
                $setting->logo = UploadHelper::update(public_path('/' . $setting->logo), $request->file('logo'), 'uploads/setting/');
            }
            $setting->email = $request->email;
            $setting->phone = $request->phone;
            $setting->phone_other = $request->phone_other;
            $setting->iframe = $request->iframe;
            $setting->facebook_link = $request->facebook_link;
            $setting->instagram_link = $request->instagram_link;
            $setting->youtube_link = $request->youtube_link;
            $setting->linkedin_link = $request->linkedin_link;
            $setting->telegram_link = $request->telegram_link;
            $setting->save();

            $setting_trans = SettingTranslation::find($settingTranslation->id);
            $setting_trans->address = $request->address;
            $setting_trans->description = $request->description;
            $setting_trans->save();
        });

//        return view('backend.settings.index');
        return redirect()->route('backend.settings.index')->withSuccess('yeniləmə etdiniz');

    }
}
