<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use App\Section;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Section::where('section', 'SLIDER')
            ->get();

        $productsPrincipal = Product::where('available', 'YES')
            ->take(6)
            ->get();

        $lastPosts = Blog::orderBy('created_at', 'DESC')
            ->where('status', 'ACTIVE')
            ->take(6)
            ->get();

        return view('web.index', compact('sliders', 'productsPrincipal', 'lastPosts'));
    }

    public function about()
    {
        $about = Section::where('section', 'ABOUT')
            ->first();

        return view('web.parts.about._about', compact('about'));
    }
}
