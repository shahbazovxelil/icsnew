<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CategoryStoreRequest;
use App\Http\Requests\Backend\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class CategoryController extends Controller
{
   use Custom;
    final public function index(): View
    {
        return view('backend.categories.index');
    }

    final public function create(): View
    {
        return view('backend.categories.create');
    }

   final public function store(CategoryStoreRequest $request): RedirectResponse
    {
        $category = New Category();
        $category->status = 1;
        $category->save();
        $category_translation = new CategoryTranslation();
        $category_translation->category_id  = $category->id;
        $category_translation->name     = $request->name;
        $category_translation->slug     = $request->slug;
        $category_translation->locale   = app()->getLocale();
        $category_translation->save();
        return redirect()->route('backend.categories.index')->withSuccess('Elave etdiniz');
    }


   final public function edit(string $id): View
    {
        $category = Category::find($id);
        $translation_languages = CategoryTranslation::where('category_id',$id)->get();
        $languages  = $this->trans_langs($translation_languages);
        return view('backend.categories.edit', compact('category','languages'));
    }

    // Bu method tərcümələri etmək üçündür.
    final public function update(CategoryUpdateRequest $request, string $id):RedirectResponse
    {
        $category_translation = new CategoryTranslation();
        $category_translation->category_id  = $id;
        $category_translation->name     = $request->name;
        $category_translation->slug     = $request->slug;
        $category_translation->locale   = $request->language;
        $category_translation->save();
        return redirect()->route('backend.categories.index')->withSuccess('yeniləmə etdiniz');
    }

    final public function translationEdit(string $id, string $lang): View
    {
        $category = Category::findOrFail($id);
        $translation = $category->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.categories.translation_edit', compact('translation','category'));
        }
        else{
            return view('backend.categories.index')->withSuccess('tərcüməsi yoxdur');
        }
    }
    // Bu method tərcümələri update  etmək üçündür.

    final public function translationUpdate(int $category_id,string $lang,Request $request): View
    {
        $categoryTranslation = CategoryTranslation::where('category_id', $category_id)
            ->where('locale', $lang)
            ->firstOrFail();
            $category_trans = CategoryTranslation::find($categoryTranslation->id);
            $category_trans->name = $request->name;
            $category_trans->slug = $request->slug;
            $category_trans->save();


        return view('backend.categories.index');
    }


   final public function destroy(Category $category): JsonResponse
   {
       $category->delete();
            return response()->json(['success' => 1]);
    }
    // Bu method categoriyanin statusunu aktiv və deaktiv etmək üçündür.
    final public function updateStatus($id): JsonResponse
    {
        $category = Category::findOrFail($id);
        $category->status = request('status') ? 1 : 0;
        $category->save();
        return response()->json(['success' => true]);
    }
}
