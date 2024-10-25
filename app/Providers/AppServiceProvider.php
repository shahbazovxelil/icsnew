<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Setting;
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
        View::share([
            'flanguages' => $flanguages,
            'setting' => $setting,
            'categories' => $categories,
        ]);

    }
}
