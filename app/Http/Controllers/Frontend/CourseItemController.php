<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseItemController extends Controller
{
    public function index(Request $request):View
    {

        $course_slug = $request->route('slug');
        $course = Course::where('slug', $course_slug)->first();
        $course_id = $course['id'];
        $course = Course::where('id', $course_id)
            ->with(['mentors', 'mentors.mentor_experiences', 'structures', 'what_learns', 'benefits','course_item_banner'])
            ->first();



        return view('frontend.pages.course-item',compact('course'));
    }
}
