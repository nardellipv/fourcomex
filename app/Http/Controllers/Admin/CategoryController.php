<?php

namespace App\Http\Controllers\Admin;

use App\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Image;

class CategoryController extends Controller
{
    public function listCategory()
    {
        $categories = Category::all();

        return view('admin.parts.category._listCategory', compact('categories'));
    }

    public function addCategory()
    {
        $providers = Provider::all();

        return view('admin.parts.category._addCategory', compact('providers'));
    }

    public function storeCategory(Request $request)
    {
//        dd($request->all());
        $category = Category::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'slug' => Str::slug($request['name']),
            'photo' => '0',
            'provider_id' => $request['provider_id'],
        ]);

        if ($request->photo) {
            $path = 'images/category/';
            $image = $request->file('photo');
            $input['photo170'] = '170x140-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(170, 140)->save($path . $input['photo170']);

            $category->photo = Str::after($input['photo170'], '-');
        }
        $category->save();

        Toastr::success('Categoría agregada correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function editCategory($id)
    {
        $content = Category::find($id);

        return view('admin.parts.category._editCategory',compact('content'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request['name'];
        $category->description = $request['description'];
        $category->provider_id = $request['provider_id'];

        if ($request->photo) {
            $path = 'images/category/';
            $image = $request->file('photo');
            $input['photo170'] = '170x140-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(170, 140)->save($path . $input['photo170']);

            $category->photo = Str::after($input['photo170'], '-');
        }
        $category->save();

        Toastr::success('Categoría actualizada correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        Toastr::success('Categoría eliminada correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
