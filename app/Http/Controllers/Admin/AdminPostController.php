<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        $post = Post::get();
        return view('admin.post_view', compact('post'));
    }

    public function creat()
    {
        return view('admin.post_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
            'short_content' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
        $ext = $request->file('photo')->extension();
        $finalName = time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $finalName);
        $post = new Post();
        $post->photo = $finalName;
        $post->heading = $request->heading;
        $post->content = $request->content;
        $post->short_content = $request->short_content;
        $post->total_view = 1;
        $post->save();
        return redirect()->back()->with('success', 'post have been added successfully');
    }


    public function edit($id)
    {
        $post_data = Post::where('id', $id)->first();
        return view('admin.post_edit', compact('post_data'));
    }


    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        if ($request->hasFile('photo')) {
            $request->validate([
                'heading' => 'required',
                'content' => 'required',
                'short_content' => 'required',
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/' . $post->photo));
            $ext = $request->file('photo')->extension();
            $finalName = time() . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $finalName);
            $post->photo = $finalName;
        }
        $post->heading = $request->heading;
        $post->content = $request->content;
        $post->short_content = $request->short_content;
        $post->update();
        return redirect()->back()->with('success', 'post have been updated successfully');
    }



    public function delete($id)
    {
        $post = Post::where('id', $id)->first();
        unlink(public_path('uploads/' . $post->photo));
        $post->delete();
        return redirect()->back()->with('success', 'post have been updated successfully');
    }
}
