<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use App\Section;

class HomeController extends Controller
{
    public function index()
    {
        $productsSlider = Product::take(3)
            ->get();

        $productsPrincipal = Product::where('available', 'YES')
            ->take(6)
            ->get();

        $productsOther = Product::all();

        $lastPosts = Blog::orderBy('created_at', 'DESC')
            ->where('status', 'ACTIVE')
            ->take(6)
            ->get();

        return view('web.index', compact('productsSlider', 'productsOther', 'productsPrincipal', 'lastPosts'));
    }
}
