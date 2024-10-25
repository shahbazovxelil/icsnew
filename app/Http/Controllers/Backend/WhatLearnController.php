<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\WhatLearn;
use App\Models\WhatLearnTranslation;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class WhatLearnController extends Controller
{
    use Custom;

    public function index()
    {
        $what_learns = WhatLearn::whereHas('translations', function ($what_learns) {
            $what_learns->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.what_learns.index', compact('what_learns'));

    }

    public function create()
    {
        $courses = Course::whereHas('translations', function ($courses) {
            $courses->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.what_learns.create',compact('courses'));

    }

    final public function store(Request $request): RedirectResponse
    {

        $data = $request->all();
        foreach ($data['title'] as $key => $title) {

            $what_learn = new WhatLearn();
            $what_learn->course_id = $request->course_id;
            $what_learn->save();

            $what_learn_translation = new WhatLearnTranslation();
            $what_learn_translation->what_learn_id = $what_learn->id;
            $what_learn_translation->title = $title;
            $what_learn_translation->description = $data['description'][$key];
            $what_learn_translation->locale = app()->getLocale();
            $what_learn_translation->save();

        }
        return redirect()->route('backend.what_learns.index')->withSuccess('added');
    }

    final public function edit(string $id): View
    {
        $what_learn = WhatLearn::find($id);
        $translation_languages = WhatLearnTranslation::where('what_learn_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.what_learns.edit', compact('what_learn', 'languages'));
    }

    final public function update(Request $request, string $id): RedirectResponse
    {
        $what_learn = WhatLearn::where('id', '=', $id)->first();
        DB::transaction(function () use ($request,$what_learn,$id) {
            $what_learn->save();
            $what_learn_translation = new WhatLearnTranslation();
            $what_learn_translation->what_learn_id = $id;
            $what_learn_translation->title = $request->title;
            $what_learn_translation->description = $request->description;
            $what_learn_translation->locale = $request->language;
            $what_learn_translation->save();
        });
        return redirect()->route('backend.what_learns.index')->withSuccess('yeniləmə etdiniz');
    }
    final public function translationEdit(string $id, string $lang): View
    {
        $what_learn = WhatLearn::findOrFail($id);
        $translation = $what_learn->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.what_learns.translation_edit', compact('translation', 'what_learn'));
        } else {
            return view('backend.what_learns.index')->withSuccess('yeniləmə etdiniz');
        }
    }

    final public function translationUpdate(int $what_learn_id, string $lang, Request $request): RedirectResponse
    {

        $whatLearnTranslation = WhatLearnTranslation::where('what_learn_id', $what_learn_id)
            ->where('locale', $lang)
            ->firstOrFail();
        $what_learn = WhatLearn::where('id', $what_learn_id)->first();
        DB::transaction(function () use ($request,$what_learn,$whatLearnTranslation) {
            $what_learn->save();
            $what_learn_trans = WhatLearnTranslation::find($whatLearnTranslation->id);
            $what_learn_trans->title = $request->title;
            $what_learn_trans->description = $request->description;
            $what_learn_trans->save();
        });

        return redirect()->route('backend.what_learns.index')->withSuccess('update');

    }

    final  public function destroy(string $id): JsonResponse
    {
        DB::transaction(function () use ($id) {
            WhatLearn::destroy($id);
        });
        return response()->json(['success'=>'1'],200);
    }
}
