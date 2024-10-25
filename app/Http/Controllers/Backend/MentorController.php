<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\MentorLanguageUpdateRequest;
use App\Http\Requests\Backend\MentorStoreRequest;
use App\Http\Requests\Backend\MentorUpdateRequest;
use App\Service\Backend\MentorService;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MentorController extends Controller
{

    use Custom;
    public function __construct(protected MentorService $mentorService)
    {
    }

    public function index()
    {

        $mentors = $this->mentorService->getAllMentors();
        return view('backend.mentors.index', compact('mentors'));
    }

    public function create()
    {
        return view('backend.mentors.create');
    }

    final public function store(MentorStoreRequest $request): RedirectResponse
    {
        $this->mentorService->createMentor($request->validated());
        return redirect()->route('backend.mentors.index')->withSuccess('added');
    }

    ////Bu method   translate edit redirect ucundur
    final public function edit(string $id): View
    {
        $mentor = $this->mentorService->findMentor($id);
        $translation_languages = $this->mentorService->findMentorTransLang($id);
        $languages = $this->trans_langs($translation_languages);
        return view('backend.mentors.edit', compact('mentor', 'languages'));
    }


    //Bu method   translate ucundur
    final public function update(MentorUpdateRequest $request, string $id): RedirectResponse
    {
        $this->mentorService->translateLanguage($request->validated(), $id);

        return redirect()->route('backend.mentors.index')->withSuccess('yeniləmə etdiniz');
    }
    final public function translationEdit(string $id, string $lang): View
    {
        $mentor = $this->mentorService->findMentor($id);
        $translation = $mentor->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.mentors.translation_edit', compact('translation', 'mentor'));
        } else {
            return view('backend.mentors.index')->withSuccess('tərcüməsi yoxdur');
        }
    }

    final public function translationUpdate(int $mentor_id, string $lang, MentorLanguageUpdateRequest $request): RedirectResponse
    {
        $this->mentorService->translateLanguageUpdate($mentor_id,$lang,$request->validated());
        return redirect()->route('backend.mentors.index')->withSuccess('update');

    }

    final  public function destroy(string $id): JsonResponse
    {
        $mentor = $this->mentorService->findMentor($id);
        $this->mentorService->deleteMentor($id,$mentor);
        return response()->json(['success'=>'1'],200);
    }
}
