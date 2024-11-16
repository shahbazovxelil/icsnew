<?php

use App\Http\Controllers\Backend\BenefitController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CoItBannerController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\CourseMentorController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DataTableController;
use App\Http\Controllers\Backend\DtCBannerController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\MainBannerController;
use App\Http\Controllers\Backend\MentorController;
use App\Http\Controllers\Backend\SubProductController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SocialController;
use App\Http\Controllers\Backend\StructureController;
use App\Http\Controllers\Backend\WhatLearnController;
use App\Http\Controllers\Frontend\DtConsultingController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('loginView');
    Route::post('/login', [LoginController::class, 'login'])->name('loginPost');
});

Route::middleware('auth')->prefix('admin')->name('backend.')->group(function () {

    Route::get('', DashboardController::class)->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::resource('menus', MenuController::class)->except('show');
    Route::resource('categories', CategoryController::class)->except('show');
    Route::resource('settings', SettingController::class)->except('show', 'create', 'store', 'destroy');
    Route::resource('dt_c_banners', DtCBannerController::class)->except('show', 'create', 'store', 'destroy');
    Route::resource('co_it_banners', CoItBannerController::class)->except('show');
    Route::resource('main_banners', MainBannerController::class)->except('show', 'create', 'store', 'destroy');
    Route::resource('services', ServiceController::class)->except('show');
    Route::resource('products', ProductController::class)->except('show');
    Route::resource('benefits', BenefitController::class)->except('show');
    Route::resource('socials', SocialController::class)->except('show');
    Route::resource('courses', CourseController::class)->except('show');
    Route::resource('mentors', MentorController::class)->except('show');
    Route::resource('sub-products', SubProductController::class)->except('show');
    Route::resource('what_learns', WhatLearnController::class)->except('show');
    Route::resource('structures', StructureController::class)->except('show');
    Route::resource('course_mentor', CourseMentorController::class)->except('show');

    Route::get('menus/translation-edit/{id}/{lang}', [MenuController::class, 'translationEdit'])->name('menus.translation.edit');
    Route::put('menus/{menu_id}/{lang}/translation-update', [MenuController::class, 'translationUpdate'])->name('menus.translation.update');
    Route::post('menus/update-status/{id}', [MenuController::class, 'updateStatus'])->name('menus.status.update');

    Route::get('categories/translation-edit/{id}/{lang}', [CategoryController::class, 'translationEdit'])->name('categories.translation.edit');
    Route::put('categories/{category_id}/{lang}/translation-update', [CategoryController::class, 'translationUpdate'])->name('categories.translation.update');
    Route::post('categories/update-status/{id}', [CategoryController::class, 'updateStatus'])->name('categories.status.update');

    Route::get('settings/translation-edit/{id}/{lang}', [SettingController::class, 'translationEdit'])->name('settings.translation.edit');
    Route::put('settings/{setting_id}/{lang}/translation-update', [SettingController::class, 'translationUpdate'])->name('settings.translation.update');

    Route::get('dt_c_banners/translation-edit/{id}/{lang}', [DtCBannerController::class, 'translationEdit'])->name('dt_c_banners.translation.edit');
    Route::put('dt_c_banners/{dt_c_banner_id}/{lang}/translation-update', [DtCBannerController::class, 'translationUpdate'])->name('dt_c_banners.translation.update');


    Route::get('main_banners/translation-edit/{id}/{lang}', [MainBannerController::class, 'translationEdit'])->name('main_banners.translation.edit');
    Route::put('main_banners/{main_banner_id}/{lang}/translation-update', [MainBannerController::class, 'translationUpdate'])->name('main_banners.translation.update');

    Route::get('courses/translation-edit/{id}/{lang}', [CourseController::class, 'translationEdit'])->name('courses.translation.edit');
    Route::put('courses/{course_id}/{lang}/translation-update', [CourseController::class, 'translationUpdate'])->name('courses.translation.update');

    Route::get('mentors/translation-edit/{id}/{lang}', [MentorController::class, 'translationEdit'])->name('mentors.translation.edit');
    Route::put('mentors/{mentor_id}/{lang}/translation-update', [MentorController::class, 'translationUpdate'])->name('mentors.translation.update');

    Route::get('services/translation-edit/{id}/{lang}', [ServiceController::class, 'translationEdit'])->name('services.translation.edit');
    Route::put('services/{service_id}/{lang}/translation-update', [ServiceController::class, 'translationUpdate'])->name('services.translation.update');

    Route::get('products/translation-edit/{id}/{lang}', [ProductController::class, 'translationEdit'])->name('products.translation.edit');
    Route::put('products/{product_id}/{lang}/translation-update', [ProductController::class, 'translationUpdate'])->name('products.translation.update');


    Route::get('benefits/translation-edit/{id}/{lang}', [BenefitController::class, 'translationEdit'])->name('benefits.translation.edit');
    Route::put('benefits/{benefit_id}/{lang}/translation-update', [BenefitController::class, 'translationUpdate'])->name('benefits.translation.update');

    Route::get('co_it_banners/translation-edit/{id}/{lang}', [CoItBannerController::class, 'translationEdit'])->name('co_it_banners.translation.edit');
    Route::put('co_it_banners/{co_it_banner_id}/{lang}/translation-update', [CoItBannerController::class, 'translationUpdate'])->name('co_it_banners.translation.update');

    Route::get('sub-products/translation-edit/{id}/{lang}', [SubProductController::class, 'translationEdit'])->name('sub-products.translation.edit');
    Route::put('sub-products/{sub_product_id}/{lang}/translation-update', [SubProductController::class, 'translationUpdate'])->name('sub-products.translation.update');

    Route::get('what_learns/translation-edit/{id}/{lang}', [WhatLearnController::class, 'translationEdit'])->name('what_learns.translation.edit');
    Route::put('what_learns/{what_learn_id}/{lang}/translation-update', [WhatLearnController::class, 'translationUpdate'])->name('what_learns.translation.update');

    Route::get('structures/translation-edit/{id}/{lang}', [StructureController::class, 'translationEdit'])->name('structures.translation.edit');
    Route::put('structures/{structure_id}/{lang}/translation-update', [StructureController::class, 'translationUpdate'])->name('structures.translation.update');


    Route::prefix('fetch')->name('fetch.')->controller(DataTableController::class)->group(function () {
        Route::get('menus', 'fetchMenus')->name('menus');
        Route::get('categories', 'fetchCategories')->name('categories');
    });

});


Route::name('frontend.')->group(function ($locale) {

    Route::get('', [IndexController::class, 'comingSoon'])->name('coming-soon');
    Route::get('aG9tZQ==', [IndexController::class, 'index'])->name('index');
    Route::get('/course', [CourseController::class, 'index'])->name('course');
    Route::get('/service', [DtConsultingController::class, 'index'])->name('service');
    Route::get('/service-detail/{id}', [DtConsultingController::class, 'serviceDetail'])->name('service-detail');
    Route::get('/products', [\App\Http\Controllers\Frontend\ProductController::class, 'products'])->name('products');
    Route::get('/product-detail/{id}', [\App\Http\Controllers\Frontend\ProductController::class, 'subProducts'])->name('product-detail');
    Route::get('/faq', [DtConsultingController::class, 'faq'])->name('faq');
    Route::get('/contact-us', [DtConsultingController::class, 'contactUs'])->name('contact-us');
    Route::get('/about', [DtConsultingController::class, 'about'])->name('about');
    Route::get('/news-detail', [DtConsultingController::class, 'newsDetail'])->name('news-detail');
    Route::get('/news', [DtConsultingController::class, 'news'])->name('news');

    Route::get('/menu/{locale}', [DtConsultingController::class, 'getMenu'])->name('menu');


    Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');

    Route::get('/course/item/{slug}', [\App\Http\Controllers\Frontend\CourseItemController::class, 'index'])->name('course.item');
    Route::get('switch-language/{locale}', [\App\Http\Controllers\Frontend\LanguageController::class, 'switchLanguage'])->name('switchLanguage');
    Route::post('contact', [IndexController::class, 'sendmail'])->name('send-mail');


});



