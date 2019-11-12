<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddNewsRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function listNews()
    {
        $posts = Blog::all();

        return view('admin.parts.news._list', compact('posts'));
    }

    public function editNews($id)
    {
        $post = Blog::find($id);

        return view('admin.parts.news._edit', compact('post'));
    }

    public function addNews(AddNewsRequest $request)
    {
//        dd($request->all());
        $post = Blog::create([
            'title' => $request['title'],
            'body' => $request['body'],
            'photo' => 0,
            'status' => 'ACTIVE',
            'slug' => Str::slug($request['title']),
            'user_id' => Auth::user()->id,
        ]);

        if ($request->photo) {
            $path = 'images/blog/';
            $image = $request->file('photo');
            $input['photo770'] = '770x578-' . $image->getClientOriginalName();
            $input['photo570'] = '570x428-' . $image->getClientOriginalName();
            $input['photo370'] = '370x278-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(770, 578)->save($path . $input['photo770']);
            $img->fit(570, 428)->save($path . $input['photo570']);
            $img->fit(370, 278)->save($path . $input['photo370']);

            $post->photo = Str::after($input['photo770'], '-');
        }
        $post->save();

        Toastr::success('News creada correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function updateNews(Request $request, $id)
    {
        $post = Blog::find($id);
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->status = 'ACTIVE';
        $post->slug = Str::slug($request['title']);

        if ($request->photo) {
            $path = 'images/blog/';
            $image = $request->file('photo');
            $input['photo770'] = '770x578-' . $image->getClientOriginalName();
            $input['photo570'] = '570x428-' . $image->getClientOriginalName();
            $input['photo370'] = '370x278-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(770, 578)->save($path . $input['photo770']);
            $img->fit(570, 428)->save($path . $input['photo570']);
            $img->fit(370, 278)->save($path . $input['photo370']);

            $post->photo = Str::after($input['photo770'], '-');
        }
        $post->save();

        Toastr::success('News modificada
         correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function desactiveNews($id)
    {
        $post = Blog::find($id);
        $post->status = 'DESACTIVE';
        $post->save();

        Toastr::success('News desactivada correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function activeNews($id)
    {
        $post = Blog::find($id);
        $post->status = 'ACTIVE';
        $post->save();

        Toastr::success('News activada correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function destroyNews($id)
    {
        $post = Blog::find($id);
        $post->delete();

        Toastr::success('News eliminada correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
