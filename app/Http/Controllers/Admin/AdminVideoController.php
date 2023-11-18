<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminVideoController extends Controller
{
    public function index()
    {
        $videos = Video::get();
        return view('admin.video_view', compact('videos'));
    }

    public function creat()
    {
        return view('admin.video_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required',
            'video_id' => 'required'

        ]);

        $video = new Video();
        $video->video_id = $request->video_id;
        $video->caption = $request->caption;
        $video->save();
        return redirect()->back()->with('success', 'video have been added successfully');
    }

    public function edit($id)
    {
        $video_data = Video::where('id', $id)->first();
        return view('admin.video_edit', compact('video_data'));
    }


    public function update(Request $request, $id)
    {
        $video = Video::where('id', $id)->first();
        $request->validate([
            'video_id' => 'required',
            'caption' => 'required'

        ]);
        $video->video_id = $request->video_id;
        $video->caption = $request->caption;
        $video->update();
        return redirect()->back()->with('success', 'video have been updated successfully');
    }



    public function delete($id)
    {
        $video = Video::where('id', $id)->first();

        $video->delete();
        return redirect()->back()->with('success', 'video have been updated successfully');
    }
}
