<?php

namespace App\Http\Controllers\website;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $all_posts = Post::orderBy('id', 'desc')->paginate(3);
        return view('website.blog', compact('all_posts'));
    }

    public function post($id)
    {
        $post = Post::where('id', $id)->first();
        $post->total_view += 1;
        $post->update();
        return view('website.post', compact('post'));
    }
}
