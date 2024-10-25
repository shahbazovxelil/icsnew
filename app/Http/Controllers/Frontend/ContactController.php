<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index():View
    {

//        $setting = Setting::whereHas('translations', function ($setting) {
//            $setting->where('locale', '=', app()->getLocale());
//        })
//            ->with('translations')
//            ->first();

        return view('frontend.pages.contact');
    }
}
