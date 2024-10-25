<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SocialStoreRequest;
use App\Http\Requests\Backend\SocialUpdateRequest;
use App\Service\Backend\SocialService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SocialController extends Controller
{
    public function __construct(protected SocialService $socialService){}

   final public function index(): View
    {
        $socials = $this->socialService->getAllSocials();
        return view('backend.socials.index',compact('socials'));
    }

    final public function create():View
    {
        return view('backend.socials.create');
    }

    final public function store(SocialStoreRequest $request): RedirectResponse
    {
        $this->socialService->createSocial($request->validated());
        return redirect()->route('backend.socials.index')->withSuccess('Əlavə edildi!');
    }

    final public function edit($id): View
    {
        $social = $this->socialService->findSocial($id);
        return view('backend.socials.edit', compact('social'));
    }

    final public function update(SocialUpdateRequest $request, $socialId): RedirectResponse
    {
        $this->socialService->updateSocial($request, $socialId);
        return redirect()->route('backend.socials.index')->withSuccess('added');
    }

    final  public function destroy(string $id): JsonResponse
    {
        $this->socialService->deleteSocial($id);
        return response()->json(['success' => '1'], 200);
    }
}
