<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\DbCBanner;
use App\Models\MainBanner;
use App\Models\Mentor;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index():View
    {
        $main_banner = MainBanner::whereHas('translations', function ($main_banner) {
            $main_banner->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->first();

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

        $services = Service::whereHas('translations', function ($services) {
            $services->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();

        $mentors = Mentor::whereHas('translations', function ($mentors) {
            $mentors->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();

        $dt_c_banners = DbCBanner::whereHas('translations', function ($dt_c_banners) {
            $dt_c_banners->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->first();



        return view('frontend.pages.home',
            compact('main_banner','categories','courses','services','mentors','dt_c_banners'));
    }

    public function sendmail(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        Mail::send('frontend.email.sendEmail', ['name' => $name, 'phone' => $phone, 'email' => $email], function ($message) use ($email) {
            $message->to('shahbazovxelil13@gmail.com')->subject("aaa");
        });
        return redirect()->back();

    }

}
