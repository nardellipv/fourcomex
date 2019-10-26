<?php

namespace App\Http\Controllers;

use App\Images;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function item($id)
    {
        $product = Product::find($id);

        $images = Images::where('product_id', $product->id)
            ->get();

        return view('web.parts.product._product', compact('product','images'));
    }
}
