<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $all_videos = Video::orderBy('id', 'desc')->paginate(3);
        return view('website.video_gallery', compact('all_videos'));
    }
}
