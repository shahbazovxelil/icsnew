<?php

namespace App\Service\Backend;

use App\Models\Course;
use App\Models\CourseMentor;
use App\Models\Mentor;

class  CourseMentorService
{
    public function __construct(
        protected CourseMentor $courseMentor,
        protected Course       $course,
        protected Mentor       $mentor,
    )
    {
    }


    public function getCourseMentors()
    {
        return $this->courseMentor->with(['course','mentor'])->get();

    }
    public function getCourses()
    {
        return $this->course->whereHas('translations', function ($courses) {
            $courses->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();


    }
    public function getMentors()
    {
        return $this->mentor->whereHas('translations', function ($mentors) {
            $mentors->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();
    }

    public function createOrUpdateCourseMentor(array $data)
    {
        return $this->courseMentor->updateOrCreate($data);
    }


}

