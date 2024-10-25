<?php

namespace App\Service\Backend;

use App\Helpers\UploadHelper;
use App\Models\Social;
use Illuminate\Support\Facades\DB;

class  SocialService
{
    public function __construct(protected Social $model)
    {
    }


    public function getAllSocials(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->all();
    }

    public function createSocial(array $data): void
    {
        DB::transaction(function () use ($data) {
            $icon = UploadHelper::upload('icon', $data['icon'], 'uploads/socials/' . time(), 'uploads/socials/');

            if ($icon) {
                $this->model->create([
                    'icon' => $icon,
                    'name' => $data['name'],
                ]);
            }
        });

    }

    public function findSocial($id)
    {
        return $this->model->find($id);
    }

    public function updateSocial($request, $socialId): void
    {
        $social = $this->model->findOrFail($socialId);
        DB::transaction(function () use ($request, $social) {
            $icon = UploadHelper::update(public_path('/' . $social->icon), $request->file('icon'), 'uploads/socials/');
            if ($icon) {
                $social->icon = $icon;
            }
            $social->update([
                'name' => $request->name,
            ]);
        });
    }

    final function deleteSocial($id): void
    {
        $social =  $this->model->find($id);
        $path = public_path('/' . $social->icon);
        DB::transaction(function () use ($social, $path, $id) {
            Social::destroy($id);
            if ($path) UploadHelper::deleteFile($path);
        });
    }

}

