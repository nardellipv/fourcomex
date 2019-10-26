<?php

namespace App\Http\Controllers;

use App\Category;
use App\Images;
use App\Product;

class ProviderController extends Controller
{
    public function index($provider_id, $slug)
    {
        $categoryID  = Category::where('provider_id', $provider_id)
            ->where('slug', $slug)
            ->first();

        $categories  = Category::where('provider_id', $provider_id)
            ->orderBy('name', 'ASC')
            ->get();

        $products = Product::where('category_id', $categoryID->id)
            ->get();

        return view('web.parts.product._productIndex', compact('categories', 'categoryID', 'products'));
    }
}
