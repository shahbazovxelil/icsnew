<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\MentorStoreRequest;
use App\Http\Requests\Backend\MentorUpdateRequest;
use App\Models\Mentor;
use App\Models\MentorExp;
use App\Models\MentorExpTranslation;
use App\Models\MentorTranslation;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MentorExperienceController extends Controller
{
    use Custom;

    public function index()
    {
        $mentor_experiences = MentorExp::whereHas('translations', function ($mentor_experiences) {
            $mentor_experiences->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.mentor_experiences.index', compact('mentor_experiences'));

    }

    public function create()
    {

        $mentors = Mentor::whereHas('translations', function ($mentors) {
            $mentors->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.mentor_experiences.create',compact('mentors'));

    }

    final public function store(Request $request): RedirectResponse
    {

        $data = $request->all();


        foreach ($data['name'] as $name) {

            $mentor_experience = new MentorExp();
            $mentor_experience->mentor_id = $request->mentor_id;
            $mentor_experience->save();

            $mentor_experience_translation = new MentorExpTranslation();
            $mentor_experience_translation->mentor_exp_id = $mentor_experience->id;
            $mentor_experience_translation->name = $name;
            $mentor_experience_translation->locale = app()->getLocale();
            $mentor_experience_translation->save();

        }
        return redirect()->route('backend.mentor_experiences.index')->withSuccess('added');
    }

    final public function edit(string $id): View
    {
        $mentor_experience = MentorExp::find($id);
        $translation_languages = MentorExpTranslation::where('mentor_exp_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.mentor_experiences.edit', compact('mentor_experience', 'languages'));
    }

    final public function update(Request $request, string $id): RedirectResponse
    {
        $mentor_experience = MentorExp::where('id', '=', $id)->first();
        DB::transaction(function () use ($request,$mentor_experience,$id) {
            $mentor_experience->save();
            $mentor_experience_translation = new MentorExpTranslation();
            $mentor_experience_translation->mentor_exp_id = $id;
            $mentor_experience_translation->name = $request->name;
            $mentor_experience_translation->locale = $request->language;
            $mentor_experience_translation->save();
        });
        return redirect()->route('backend.mentor_experiences.index')->withSuccess('yeniləmə etdiniz');
    }
    final public function translationEdit(string $id, string $lang): View
    {
        $mentor_experience = MentorExp::findOrFail($id);
        $translation = $mentor_experience->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.mentor_experiences.translation_edit', compact('translation', 'mentor_experience'));
        } else {
            return view('backend.mentor_experiences.index')->withSuccess('yeniləmə etdiniz');
        }
    }

    final public function translationUpdate(int $mentor_exp_id, string $lang, Request $request): RedirectResponse
    {

        $mentorExpTranslation = MentorExpTranslation::where('mentor_exp_id', $mentor_exp_id)
            ->where('locale', $lang)
            ->firstOrFail();
        $mentor_experience = MentorExp::where('id', $mentor_exp_id)->first();
        DB::transaction(function () use ($request,$mentor_experience,$mentorExpTranslation) {
            $mentor_experience->save();
            $mentor_experience_trans = MentorExpTranslation::find($mentorExpTranslation->id);
            $mentor_experience_trans->name = $request->name;
            $mentor_experience_trans->save();
        });

        return redirect()->route('backend.mentor_experiences.index')->withSuccess('update');

    }

    final  public function destroy(string $id): JsonResponse
    {
        DB::transaction(function () use ($id) {
            MentorExp::destroy($id);
        });
        return response()->json(['success'=>'1'],200);
    }
}
