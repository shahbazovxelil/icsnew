<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


        $flanguages = Language::where('status',1)->get();

        $setting = Setting::whereHas('translations', function ($setting) {
            $setting->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->first();




        $categories = Category::whereHas('translations', function ($courses) {
            $courses->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();

        $today = Carbon::now();
        $targetDate = Carbon::create(2025, 1, 2);

        $daysLeft = $today->diffInDays($targetDate);



        View::share([
            'flanguages' => $flanguages,
            'setting' => $setting,
            'categories' => $categories,
            'daysLeft' => $daysLeft,
        ]);





    }
}
