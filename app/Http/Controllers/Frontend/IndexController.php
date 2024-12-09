<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\DbCBanner;
use App\Models\MainBanner;
use App\Models\Mentor;
use App\Models\Service;
use Carbon\Carbon;
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


    public function comingSoon(){
        return view('frontend.pages.coming-soon');
    }

    public function sendmail1(Request $request)
    {
//
//        $name = $request->name;
//        $email = $request->email;
//        $phone = $request->phone;
//        Mail::send('frontend.email.sendEmail', ['name' => $name, 'phone' => $phone, 'email' => $email], function ($message) use ($email) {
//            $message->to('shahbazovxelil13@gmail.com')->subject("aaa");
//        });
       $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);


//        $details = [
//            'name' => $request->name,
//            'email' => $request->email,
//            'subject' => $request->subject,
//            'phone' => $request->phone,
//            'message' => $request->message,
//        ];

        $email = $request->email;
        $message = $request->message;

//      $aa =   Mail::send('frontend.email.sendEmail', $details, function($message) use ($details) {
//            $message->to('shahbazovxelil13@gmail.com')
//            ->subject($details['subject']);
//        });

 $dd  = Mail::send('frontend.email.sendEmail', ['name' => $request->name, 'phone' => $request->phone, 'email' => $email], function ($message) use ($email) {
            $message->to('shahbazovxelil13@gmail.com')->subject("aaa");
        });


        return redirect()->back();

    }

    public function sendmail(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        Mail::send('frontend.email.sendEmail', ['name' => $name, 'phone' => $phone, 'email' => $email], function ($message) use ($email) {
            $message->to('elman.taghiyev@icskimya.az')->subject("aaa");
        });
        return redirect()->back();

    }

    public function getDaysUntil()
    {
        $today = Carbon::now(); // Bugünkü tarix
        $targetDate = Carbon::create(2025, 1, 1); // 2025-ci il Yanvarın 1-i

        $daysLeft = $today->diffInDays($targetDate); // Gün fərqi

      return view('frontend.pages.coming-soon', compact('daysLeft'));
    }

}
