<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CourseMentorRequest;
use App\Models\Course;
use App\Models\CourseMentor;
use App\Models\Mentor;
use App\Service\Backend\CourseMentorService;
use Illuminate\View\View;

class CourseMentorController extends Controller
{
    public function __construct(protected CourseMentorService $courseMentorService){}


    final public function index(): View
    {
        $course_mentors = $this->courseMentorService->getCourseMentors();

        return view('backend.courses.course_mentor_index',compact('course_mentors'));
    }

    final public function create(): View
    {
        $courses = $this->courseMentorService->getCourses();
        $mentors = $this->courseMentorService->getMentors();

        return view('backend.courses.course_mentor_edit', compact('courses', 'mentors'));
    }

    public function store(CourseMentorRequest $request)
    {
        $course_mentor =  $this->courseMentorService->createOrUpdateCourseMentor($request->validated());

        if ($course_mentor) {
            return redirect()->route('backend.course_mentor.index')->withSuccess('Uğurlu');
        }

    }


}
