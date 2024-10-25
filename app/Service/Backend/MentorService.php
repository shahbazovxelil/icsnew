<?php

namespace App\Service\Backend;

use App\Helpers\UploadHelper;
use App\Models\Mentor;
use App\Models\MentorTranslation;
use Illuminate\Support\Facades\DB;

class  MentorService
{
    public function __construct(protected Mentor $mentor, protected MentorTranslation $mentorTranslation)
    {
    }

    public function getAllMentors()
    {

        return $this->mentor->whereHas('translations', function ($mentors) {
            $mentors->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
    }

    public function createMentor(array $data): void
    {
        DB::transaction(function () use ($data) {
            $image = UploadHelper::upload('image', $data['image'], 'uploads/mentors/' . time(), 'uploads/mentors/');

            $mentor = $this->mentor->create([
                'image' => $image ?: null,
                'experience_year' => $data['experience_year'],
            ]);

            $this->mentorTranslation->create([
                'mentor_id' => $mentor->id,
                'name' => $data['name'],
                'title' => $data['title'],
                'locale' => app()->getLocale(),
            ]);
        });
    }


    public function findMentor($id)
    {
        return  $this->mentor->find($id);
    }

    public function findMentorTransLang($id)
    {
        return  $this->mentorTranslation->where('mentor_id', $id)->get();
    }

    public function translateLanguage($data,$id)
    {
        $mentor = $this->mentor->where('id', '=', $id)->first();
        DB::transaction(function () use ($data, $mentor, $id) {
            $mentor->save();

            $this->mentorTranslation->create([
                'mentor_id' => $id,
                'name' => $data['name'],
                'title' => $data['title'],
                'locale' => $data['language'],
            ]);

        });
    }

    public function translateLanguageUpdate($mentor_id, $lang, $data)
    {
        $mentorTranslation = $this->mentorTranslation
            ->where(['mentor_id' => $mentor_id, 'locale' => $lang])
            ->firstOrFail();

        $mentor = $this->mentor->where('id', $mentor_id)->first();
        DB::transaction(function () use ($data, $mentor, $mentorTranslation) {

            if (isset($data['image'])) {
                $mentor->image = UploadHelper::update(public_path('/' . $mentor->image), $data['image'], 'uploads/mentors/');
                $mentor->save();
            }

            $mentor_trans = $this->mentorTranslation->find($mentorTranslation->id);
            $mentor_trans->update([
                'name' => $data['name'],
                'title' => $data['title']
            ]);
        });
    }


    final function deleteMentor($id,$mentor){
        $path = public_path('/'.$mentor->image);
        DB::transaction(function () use ($mentor,$path,$id) {
            $this->mentor->destroy($id);
            if ($path) UploadHelper::deleteFile($path);
        });
    }

}

