<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\AddProductRequest;
use App\Picture;
use App\Product;
use App\Section;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Image;


class ProductController extends Controller
{
    public function listProduct()
    {
        $products = Product::all();

        return view('admin.parts.product._listProduct', compact('products'));
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $sections = Section::all();

        return view('admin.parts.product._editProduct', compact('product', 'categories', 'sections'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->cod = $request['cod'];
        if ($product->available == 'on') {
            $product->available = 'YES';
        } else {
            $product->available = 'NO';
        }
        $product->link = $request['link'];
        $product->slug = Str::slug($request['name']);
        $product->category_id = $request['category_id'];
        $product->save();

        if ($request->photo) {
            $path = 'images/product/';
            $image = $request->file('photo');
            $input['photo470'] = '470x353-' . $image->getClientOriginalName();
            $input['photo370'] = '370x277-' . $image->getClientOriginalName();
            $input['photo163'] = '163x122-' . $image->getClientOriginalName();
            $input['photo150'] = '150x113-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(470, 353)->save($path . $input['photo470']);
            $img->fit(370, 277)->save($path . $input['photo370']);
            $img->fit(163, 122)->save($path . $input['photo163']);
            $img->fit(150, 113)->save($path . $input['photo150']);

            $product->photo = Str::after($input['photo470'], '-');
            $product->photo = Str::after($input['photo370'], '-');
            $product->photo = Str::after($input['photo163'], '-');
            $product->photo = Str::after($input['photo150'], '-');
        }
        $product->save();

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $picture = Picture::firstOrNew([
                    'name' => $file->getClientOriginalName(),
                    'product_id' => $id,
                ]);

                $path = 'images/product/';
                $input['photo150'] = '150x113-' . $file->getClientOriginalName();

                $img = Image::make($file->getRealPath());
                $img->fit(150, 113)->save($path . $input['photo150']);

                $picture->name = Str::after($input['photo150'], '-');

                $picture->save();
            }
        }

        Toastr::success('Producto actualizado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function addProduct()
    {
        $categories = Category::all();

        return view('admin.parts.product._addProduct', compact('categories'));
    }

    public function storeProduct(AddProductRequest $request)
    {

        if ($request->available == 'on') {
            $available = 'YES';
        } else {
            $available = 'NO';
        }

        $product = Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'cod' => $request['cod'],
            'available' => $available,
            'link' => $request['link'],
            'slug' => Str::slug($request['name']),
            'category_id' => $request['category_id'],
        ]);

        if ($request->photo) {
            $path = 'images/product/';
            $image = $request->file('photo');
            $input['photo470'] = '470x353-' . $image->getClientOriginalName();
            $input['photo370'] = '370x277-' . $image->getClientOriginalName();
            $input['photo163'] = '163x122-' . $image->getClientOriginalName();
            $input['photo150'] = '150x113-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(470, 353)->save($path . $input['photo470']);
            $img->fit(370, 277)->save($path . $input['photo370']);
            $img->fit(163, 122)->save($path . $input['photo163']);
            $img->fit(150, 113)->save($path . $input['photo150']);

            $product->photo = Str::after($input['photo470'], '-');
            $product->photo = Str::after($input['photo370'], '-');
            $product->photo = Str::after($input['photo163'], '-');
            $product->photo = Str::after($input['photo150'], '-');
        }
        $product->save();

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $picture = Picture::firstOrNew([
                    'name' => $file->getClientOriginalName(),
                    'product_id' => $product->id,
                ]);

                $path = 'images/product/';
                $input['photo150'] = '150x113-' . $file->getClientOriginalName();

                $img = Image::make($file->getRealPath());
                $img->fit(150, 113)->save($path . $input['photo150']);

                $picture->name = Str::after($input['photo150'], '-');

                $picture->save();
            }
        }

        Toastr::success('Producto agregado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();

        Toastr::success('Producto eliminado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

}
