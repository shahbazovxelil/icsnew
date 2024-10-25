<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        Session::put('locale', $locale);
        return Redirect::back();
    }

}
