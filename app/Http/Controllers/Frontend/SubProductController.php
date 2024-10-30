<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\View\View;

class SubProductController extends Controller
{
    public function index():View
    {
        $courses= Course::whereHas('translations', function ($courses) {
            $courses->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();

        $categories = Category::whereHas('translations', function ($categories) {
            $categories->where('locale', '=', app()->getLocale());
        })
            ->with(['translations'])
            ->get();


        return view('frontend.pages.course',compact('courses','categories'));
    }
}
