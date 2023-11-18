<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class AdminPhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::get();
        return view('admin.photo_view', compact('photos'));
    }

    public function creat()
    {
        return view('admin.photo_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
        $ext = $request->file('photo')->extension();
        $finalName = time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $finalName);
        $photo = new Photo();
        $photo->photo = $finalName;
        $photo->caption = $request->caption;
        $photo->save();
        return redirect()->back()->with('success', 'photo have been added successfully');
    }

    public function edit($id)
    {
        $photo_data = Photo::where('id', $id)->first();
        return view('admin.photo_edit', compact('photo_data'));
    }


    public function update(Request $request, $id)
    {
        $photo = Photo::where('id', $id)->first();
        if ($request->hasFile('photo')) {
            $request->validate([
                'caption' => 'required',
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/' . $photo->photo));
            $ext = $request->file('photo')->extension();
            $finalName = time() . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $finalName);
            $photo->photo = $finalName;
        }
        $photo->caption = $request->caption;
        $photo->update();
        return redirect()->back()->with('success', 'photo have been updated successfully');
    }



    public function delete($id)
    {
        $photo = Photo::where('id', $id)->first();
        unlink(public_path('uploads/' . $photo->photo));
        $photo->delete();
        return redirect()->back()->with('success', 'photo have been updated successfully');
    }
}
