<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::get();
        return view('admin.testimonial_view', compact('testimonial'));
    }

    public function creat()
    {
        return view('admin.testimonial_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
        $ext = $request->file('photo')->extension();
        $finalName = time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $finalName);
        $testimonial = new Testimonial();
        $testimonial->photo = $finalName;
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->comment = $request->comment;
        $testimonial->save();
        return redirect()->back()->with('success', 'testimonial have been added successfully');
    }


    public function edit($id)
    {
        $testimonial_data = Testimonial::where('id', $id)->first();
        return view('admin.testimonial_edit', compact('testimonial_data'));
    }


    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
                'name' => 'required',
                'designation' => 'required',
                'comment' => 'required'
            ]);
            unlink(public_path('uploads/' . $testimonial->photo));
            $ext = $request->file('photo')->extension();
            $finalName = time() . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $finalName);
            $testimonial->photo = $finalName;
        }
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->comment = $request->comment;
        $testimonial->update();
        return redirect()->back()->with('success', 'testimonial have been updated successfully');
    }



    public function delete($id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        unlink(public_path('uploads/' . $testimonial->photo));
        $testimonial->delete();
        return redirect()->back()->with('success', 'testimonial have been updated successfully');
    }
}
