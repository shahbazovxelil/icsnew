<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SubProduct;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function products(): View
    {
        $products = Product::whereHas('translations', function ($products) {
            $products->where('locale', '=', app()->getLocale());
        })
            ->with('translations')
            ->get();

        return view('frontend.pages.products', compact('products'));
    }

    public function subProducts(int $id): View
    {
        $subProducts = SubProduct::whereHas('translations', function ($products) use ($id) {
            $products->where([
                'locale' => app()->getLocale(),
                'product_id' => $id
            ]);
        })
            ->with('translations')
            ->get();

        return view('frontend.pages.product-detail2', compact('subProducts'));
    }
}
