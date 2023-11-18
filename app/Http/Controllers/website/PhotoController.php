<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $all_photos = Photo::orderBy('id', 'desc')->paginate(3);
        return view('website.photo_gallery', compact('all_photos'));
    }
}
