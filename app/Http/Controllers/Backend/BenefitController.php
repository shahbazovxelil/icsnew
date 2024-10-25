<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BenefitLanguageUpdateRequest;
use App\Http\Requests\Backend\benefitstoreRequest;
use App\Http\Requests\Backend\BenefitUpdateRequest;
use App\Models\Benefit;
use App\Models\BenefitTranslation;
use App\Models\Course;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BenefitController extends Controller
{
    use Custom;

    public function index()
    {

        $benefits = Benefit::whereHas('translations', function ($benefits) {
            $benefits->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.benefits.index', compact('benefits'));

    }

    public function create()
    {
        $courses = Course::whereHas('translations', function ($courses) {
            $courses->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.benefits.create',compact('courses'));

    }

    final public function store(benefitstoreRequest $request): RedirectResponse
    {
                $benefit = New Benefit();
                $image = UploadHelper::upload('image', $request->file('image'), 'uploads/benefits/' . time(), 'uploads/benefits/');
                if ($image) {
                    $benefit->image = $image;
                }
                $benefit->course_id = $request->course_id;
                $benefit->save();

                $benefit_translation = new BenefitTranslation();
                $benefit_translation->benefit_id = $benefit->id;
                $benefit_translation->title = $request->title;
                $benefit_translation->description = $request->description;
                $benefit_translation->locale = app()->getLocale();
                $benefit_translation->save();
        return redirect()->route('backend.benefits.index')->withSuccess('added');
    }

    final public function edit(string $id): View
    {
        $benefit = Benefit::find($id);
        $translation_languages = BenefitTranslation::where('benefit_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.benefits.edit', compact('benefit', 'languages'));
    }

    final public function update(BenefitUpdateRequest $request, string $id): RedirectResponse
    {
        $benefit = Benefit::where('id', '=', $id)->first();
        DB::transaction(function () use ($request,$benefit,$id) {
            $benefit->save();
            $benefit_translation = new BenefitTranslation();
            $benefit_translation->benefit_id = $id;
            $benefit_translation->title = $request->title;
            $benefit_translation->description = $request->description;
            $benefit_translation->locale = $request->language;
            $benefit_translation->save();
        });
        return redirect()->route('backend.benefits.index')->withSuccess('yeniləmə etdiniz');
    }
    final public function translationEdit(string $id, string $lang): View
    {
        $benefit = Benefit::findOrFail($id);
        $translation = $benefit->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.benefits.translation_edit', compact('translation', 'benefit'));
        } else {
            return view('backend.benefits.index')->withSuccess('tərcüməsi yoxdur');
        }
    }

    final public function translationUpdate(int $benefit_id, string $lang, BenefitLanguageUpdateRequest $request): RedirectResponse
    {

        $data = $request->validated();
        $benefitTranslation = BenefitTranslation::where('benefit_id', $benefit_id)
            ->where('locale', $lang)
            ->firstOrFail();
        $benefit = Benefit::where('id', $benefit_id)->first();
        DB::transaction(function () use ($request, $benefit, $benefitTranslation, $data) {
            $image = $benefit->image;
            if (isset($data['image'])) {
                $image = UploadHelper::update(public_path('/' . $benefit->image), $request->file('image'), 'uploads/benefits/');
            }
            $benefit->update(['image' => $image]);
            $benefit_trans = BenefitTranslation::find($benefitTranslation->id);
            $benefit_trans->update(['title' => $data['title'], 'description' => $data['description']]);

        });

        return redirect()->route('backend.benefits.index')->withSuccess('update');

    }


    final  public function destroy(string $id): JsonResponse
    {
        DB::transaction(function () use ($id) {
            Benefit::destroy($id);
        });
        return response()->json(['success'=>'1'],200);
    }
}
