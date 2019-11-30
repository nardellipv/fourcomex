<?php

namespace App\Http\Controllers\Admin;

use App\Section;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Image;

class SectionController extends Controller
{
    public function sliderView()
    {
        $sliders = Section::where('section','SLIDER')
            ->get();

        return view('admin.parts.section._sliderView', compact('sliders'));
    }

    public function addSlider(Request $request)
    {
        $slider = Section::create([
            'title' => $request['title'],
            'picture' => '0',
        ]);

        if ($request->photo) {
            $path = 'images/section/';
            $image = $request->file('photo');
            $input['photo235'] = '235x176-' . $image->getClientOriginalName();
            $input['photo118'] = '118x88-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(235, 176)->save($path . $input['photo235']);
            $img->fit(118, 88)->save($path . $input['photo118']);

            $slider->picture = Str::after($input['photo235'], '-');
        }
        $slider->save();

        Toastr::success('Slider agregado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function editSlider($id)
    {
        $slider = Section::find($id);

        return view('admin.parts.section._sliderEdit', compact('slider'));
    }

    public function updateSlider(Request $request, $id)
    {
        $slider = Section::find($id);
        $slider->title = $request['title'];
        $slider->save();

        if ($request->photo) {
            $path = 'images/section/';
            $image = $request->file('photo');
            $input['photo235'] = '235x176-' . $image->getClientOriginalName();
            $input['photo118'] = '118x88-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(235, 176)->save($path . $input['photo235']);
            $img->fit(118, 88)->save($path . $input['photo118']);

            $slider->picture = Str::after($input['photo235'], '-');
        }
        $slider->save();

        Toastr::success('Slider modificado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function deleteSlider($id)
    {
        $slider = Section::find($id);
        $slider->delete();

        Toastr::success('Slider eliminado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function viewAbout()
    {
        $views = Section::where('section', 'ABOUT')
            ->get();

        return view('admin.parts.section._aboutView', compact('views'));
    }

    public function addAbout(Request $request)
    {

        $about = new Section();
        $about->title= $request['title'];
        $about->text= $request['text'];
        $about->section = 'ABOUT';

        if ($request->photo) {
            $path = 'images/section/';
            $image = $request->file('photo');
            $input['photo600'] = '600x316-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(600, 400)->save($path . $input['photo600']);

            $about->picture = Str::after($input['photo600'], '-');
        }
        $about->save();

        Toastr::success('Sobre Nostros agregado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function editAbout($id)
    {
        $about = Section::find($id);

        return view('admin.parts.section._aboutEdit', compact('about'));
    }

    public function updateAbout(Request $request, $id)
    {
        $about = Section::find($id);
        $about->title = $request['title'];
        $about->text = $request['text'];
        $about->save();

        if ($request->photo) {
            $path = 'images/section/';
            $image = $request->file('photo');
            $input['photo600'] = '600x316-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(600, 400)->save($path . $input['photo600']);

            $about->picture = Str::after($input['photo600'], '-');
        }
        $about->save();

        Toastr::success('Sobre Nosotros modificado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function deleteAbout($id)
    {
        $about = Section::find($id);
        $about->delete();

        Toastr::success('Sobre Nosotros eliminado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
