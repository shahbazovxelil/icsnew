<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('frontend.includes.menu', function ($view) {
            $locale = app()->getLocale();
            $menus = Menu::with(['translations' => function ($query) use ($locale) {
                $query->where('locale', $locale);
            }])->where('parent_id', null)->orderBy('order')->get();

            $view->with('menus', $menus);
        });
    }
}
