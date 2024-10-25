<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Structure;
use App\Models\StructureTranslation;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class StructureController extends Controller
{
    use Custom;

    public function index()
    {
        $structures = Structure::whereHas('translations', function ($structures) {
            $structures->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.structures.index', compact('structures'));

    }

    public function create()
    {
        $courses = Course::whereHas('translations', function ($courses) {
            $courses->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.structures.create',compact('courses'));

    }

    final public function store(Request $request): RedirectResponse
    {

        $data = $request->all();
        foreach ($data['title'] as $key => $title) {

            $structure = new Structure();
            $structure->course_id = $request->course_id;
            $structure->save();

            $structure_translation = new StructureTranslation();
            $structure_translation->structure_id = $structure->id;
            $structure_translation->title = $title;
            $structure_translation->description = $data['description'][$key];
            $structure_translation->locale = app()->getLocale();
            $structure_translation->save();

        }
        return redirect()->route('backend.structures.index')->withSuccess('added');
    }

    final public function edit(string $id): View
    {
        $structure = Structure::find($id);
        $translation_languages = StructureTranslation::where('structure_id', $id)->get();
        $languages = $this->trans_langs($translation_languages);
        return view('backend.structures.edit', compact('structure', 'languages'));
    }

    final public function update(Request $request, string $id): RedirectResponse
    {
        $structure = Structure::where('id', '=', $id)->first();
        DB::transaction(function () use ($request,$structure,$id) {
            $structure->save();
            $structure_translation = new StructureTranslation();
            $structure_translation->structure_id = $id;
            $structure_translation->title = $request->title;
            $structure_translation->description = $request->description;
            $structure_translation->locale = $request->language;
            $structure_translation->save();
        });
        return redirect()->route('backend.structures.index')->withSuccess('yeniləmə etdiniz');
    }
    final public function translationEdit(string $id, string $lang): View
    {
        $structure = Structure::findOrFail($id);
        $translation = $structure->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.structures.translation_edit', compact('translation', 'structure'));
        } else {
            return view('backend.structures.index')->withSuccess('yeniləmə etdiniz');
        }
    }

    final public function translationUpdate(int $structure_id, string $lang, Request $request): RedirectResponse
    {

        $structureTranslation = StructureTranslation::where('structure_id', $structure_id)
            ->where('locale', $lang)
            ->firstOrFail();
        $structure = Structure::where('id', $structure_id)->first();
        DB::transaction(function () use ($request,$structure,$structureTranslation) {
            $structure->save();
            $structure_trans = StructureTranslation::find($structureTranslation->id);
            $structure_trans->title = $request->title;
            $structure_trans->description = $request->description;
            $structure_trans->save();
        });

        return redirect()->route('backend.structures.index')->withSuccess('update');

    }

    final  public function destroy(string $id): JsonResponse
    {
        DB::transaction(function () use ($id) {
            Structure::destroy($id);
        });
        return response()->json(['success'=>'1'],200);
    }
}
