<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class AdminSliderController extends Controller
{
    public function index()
    {
        $slides = Slider::get();
        return view('admin.slider_view', compact('slides'));
    }

    public function creat()
    {
        return view('admin.slider_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
        $ext = $request->file('photo')->extension();
        $finalName = time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $finalName);
        $slider = new Slider();
        $slider->photo = $finalName;
        $slider->heading = $request->heading;
        $slider->text = $request->text;
        $slider->button_text = $request->button_text;
        $slider->button_url = $request->button_url;
        $slider->save();
        return redirect()->back()->with('success', 'slide have been added successfully');
    }

    public function edit($id)
    {
        $slide_data = Slider::where('id', $id)->first();
        return view('admin.slider_edit', compact('slide_data'));
    }


    public function update(Request $request, $id)
    {
        $slider = Slider::where('id', $id)->first();
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/' . $slider->photo));
            $ext = $request->file('photo')->extension();
            $finalName = time() . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $finalName);
            $slider->photo = $finalName;
        }
        $slider->heading = $request->heading;
        $slider->text = $request->text;
        $slider->button_text = $request->button_text;
        $slider->button_url = $request->button_url;
        $slider->update();
        return redirect()->back()->with('success', 'slide have been updated successfully');
    }



    public function delete($id)
    {
        $slider = Slider::where('id', $id)->first();
        unlink(public_path('uploads/' . $slider->photo));
        $slider->delete();
        return redirect()->back()->with('success', 'slide have been updated successfully');
    }
}
