<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('section', 'PRINCIPAL')
            ->where('available', 'YES')
            ->take(6)
            ->get();

        $lastPosts = Blog::orderBy('created_at', 'DESC')
            ->where('status', 'ACTIVE')
            ->take(6)
            ->get();

        return view('web.index', compact('products', 'lastPosts'));
    }
}
