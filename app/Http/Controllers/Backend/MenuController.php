<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\MenuStoreRequest;
use App\Http\Requests\Backend\MenuUpdateRequest;
use App\Models\Menu;
use App\Models\MenuTranslation;
use App\Traits\Custom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class MenuController extends Controller
{
   use Custom;
    final public function index(): View
    {
        return view('backend.menus.index');
    }

    final public function create(): View
    {


        $menus = Menu::whereHas('translations', function ($mentors) {
            $mentors->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
        return view('backend.menus.create',compact('menus'));
    }

   final public function store(MenuStoreRequest $request): RedirectResponse
    {
        $menu = New Menu();
        $menu->status = 1;
        $menu->parent_id = $request->parent_id;
        $menu->save();
        $menu_translation = new MenuTranslation();
        $menu_translation->menu_id  = $menu->id;
        $menu_translation->name     = $request->name;
        $menu_translation->slug     = $request->slug;
        $menu_translation->locale   = app()->getLocale();
        $menu_translation->save();
        return redirect()->route('backend.menus.index')->withSuccess('Elave etdiniz');
    }


   final public function edit(string $id): View
    {
        $menu = Menu::find($id);
        $translation_languages = MenuTranslation::where('menu_id',$id)->get();
        $languages  = $this->trans_langs($translation_languages);
        return view('backend.menus.edit', compact('menu','languages'));
    }

    // Bu method tərcümələri etmək üçündür.
    final public function update(MenuUpdateRequest $request, string $id):RedirectResponse
    {
        $menu_translation = new MenuTranslation();
        $menu_translation->menu_id  = $id;
        $menu_translation->name     = $request->name;
        $menu_translation->slug     = $request->slug;
        $menu_translation->locale   = $request->language;
        $menu_translation->save();
        return redirect()->route('backend.menus.index')->withSuccess('yeniləmə etdiniz');
    }

    final public function translationEdit(string $id, string $lang): View
    {
        $menu = Menu::findOrFail($id);
        $translation = $menu->translations()->where('locale', $lang)->first();
        if ($translation) {
            return view('backend.menus.translation_edit', compact('translation','menu'));
        }
        else{
            return view('backend.menus.index')->withSuccess('tərcüməsi yoxdur');
        }
    }
    // Bu method tərcümələri update  etmək üçündür.

    final public function translationUpdate(int $menu_id,string $lang,Request $request): View
    {
        $menuTranslation = MenuTranslation::where('menu_id', $menu_id)
            ->where('locale', $lang)
            ->firstOrFail();
            $menu_trans = MenuTranslation::find($menuTranslation->id);
            $menu_trans->name = $request->name;
            $menu_trans->slug = $request->slug;
            $menu_trans->save();


        return view('backend.menus.index');
    }


   final public function destroy(Menu $menu): JsonResponse
   {
            $menu->delete();
            return response()->json(['success' => 1]);
    }
    // Bu method menunun statusunu aktiv və deaktiv etmək üçündür.
    final public function updateStatus($id): JsonResponse
    {
        $menu = Menu::findOrFail($id);
        $menu->status = request('status') ? 1 : 0;
        $menu->save();
        return response()->json(['success' => true]);
    }
}
