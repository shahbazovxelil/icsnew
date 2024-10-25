<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DbCBanner;
use App\Models\Menu;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DtConsultingController extends Controller
{
    public function index(): View
    {

        $dt_c_banners = DbCBanner::whereHas('translations', function ($dt_c_banners) {
            $dt_c_banners->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->first();


        $services = Service::whereHas('translations', function ($services) {
            $services->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();

        return view('frontend.pages.services', compact('services'));
    }



    public function productDetail()
    {
        return view('frontend.pages.product-detail2');

    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function contactUs()
    {
        return view('frontend.pages.contact-us');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function news()
    {
        return view('frontend.pages.news');
    }
    public function newsDetail()
    {
        return view('frontend.pages.news-detail');
    }
    public function products()
    {

        return view('frontend.pages.products');

    }


}
