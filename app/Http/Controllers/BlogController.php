<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::orderBy('created_at', 'DESC')
            ->paginate(5);

        $lastPosts = Blog::orderBy('created_at', 'DESC')
            ->take(3)
            ->get();

        return view('web.parts.blog._index', compact('posts', 'lastPosts'));
    }

    public function post($slug)
    {
        $post = Blog::where('slug', $slug)
            ->first();

        $lastPosts = Blog::orderBy('created_at', 'DESC')
            ->take(2)
            ->get();

        return view('web.parts.blog._post', compact('post', 'lastPosts'));
    }
}
