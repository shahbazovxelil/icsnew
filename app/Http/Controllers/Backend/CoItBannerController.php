<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CoItBannerTransUpdateRequest;
use App\Http\Requests\Backend\CourseItemBannerStoredRequest;
use App\Http\Requests\Backend\CourseItemBannerUpdateRequest;
use App\Models\CoItBanner;
use App\Models\CoItBannerTranslation;
use App\Models\Course;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CoItBannerController extends Controller
{
    use Custom;

    public function index()
    {

        $banners = CoItBanner::whereHas('translations', function ($benefits) {
            $benefits->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.co_it_banners.index', compact('banners'));

    }

    public function create()
    {
        $courses = Course::whereHas('translations', function ($courses) {
            $courses->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.co_it_banners.create',compact('courses'));

    }

    final public function store(CourseItemBannerStoredRequest $request): RedirectResponse
    {

        $data = $request->validated();
        $banner = new CoItBanner();

        $image = UploadHelper::upload('image', $data['image'], 'uploads/course_item_banners/' . time(), 'uploads/course_item_banners/');


        $banner = $banner->create([
            'course_id' => $data['course_id'],
            'image' => $image,
        ]);


        $banner_translation = new CoItBannerTranslation();
        $banner_translation->create([
            'co_it_banner_id' => $banner->id,
            'title' => $data['title'],
            'long_description' => $data['long_description'],
            'item_one' => $data['item_one'],
            'item_two' => $data['item_two'],
            'item_three' => $data['item_three'],
            'item_four' => $data['item_four'],
            'locale' => app()->getLocale(),
        ]);

        return redirect()->route('backend.co_it_banners.index')->withSuccess('added');
    }

    final public function edit(string $id): View
    {
        $banner = CoItBanner::find($id);
        $translation_languages = CoItBannerTranslation::where('co_it_banner_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.co_it_banners.edit', compact('banner', 'languages'));
    }

    final public function update(CourseItemBannerUpdateRequest $request, string $id): RedirectResponse
    {
        $data = $request->validated();
        $banner = CoItBanner::where('id', '=', $id)->first();
        DB::transaction(function () use ($request, $banner, $data, $id) {
            $banner->save();
            $banner_translation = new CoItBannerTranslation();


            $banner_translation->create([
                'co_it_banner_id' => $id,
                'title' => $data['title'],
                'long_description' => $data['long_description'],
                'item_one' => $data['item_one'],
                'item_two' => $data['item_two'],
                'item_three' => $data['item_three'],
                'item_four' => $data['item_four'],
                'locale' => $data['language'],
            ]);


        });
        return redirect()->route('backend.co_it_banners.index')->withSuccess('yeniləmə etdiniz');
    }

    final public function translationEdit(string $id, string $lang): View
    {
        $banner = CoItBanner::findOrFail($id);
        $translation = $banner->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.co_it_banners.translation_edit', compact('translation', 'banner'));
        } else {
            return view('backend.co_it_banners.index')->withSuccess('tərcüməsi yoxdur');
        }
    }

    final public function translationUpdate(int $co_it_banner_id, string $lang, CoItBannerTransUpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $bannerTranslation = CoItBannerTranslation::where('co_it_banner_id', $co_it_banner_id)
            ->where('locale', $lang)
            ->firstOrFail();
        $banner = CoItBanner::where('id', $co_it_banner_id)->first();
        DB::transaction(function () use ($request, $banner, $bannerTranslation, $data) {

            $image = $banner->image;
            if (isset($data['image'])) {
                $image = UploadHelper::update(public_path('/' . $banner->image), $data['image'], 'uploads/course_item_banners/');

            }
            $banner->update(['image' => $image]);

            $banner_trans = CoItBannerTranslation::find($bannerTranslation->id);
            $banner_trans->update([
                'title' => $data['title'],
                'long_description' => $data['long_description'],
                'item_one' => $data['item_one'],
                'item_two' => $data['item_two'],
                'item_three' => $data['item_three'],
                'item_four' => $data['item_four'],
            ]);
        });

        return redirect()->route('backend.co_it_banners.index')->withSuccess('update');

    }


    final  public function destroy(string $id): JsonResponse
    {
        DB::transaction(function () use ($id) {
            CoItBanner::destroy($id);
        });
        return response()->json(['success' => '1'], 200);
    }
}
