<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $all_slides = Slider::get();
        $all_feature = Feature::get();
        $all_testimonial = Testimonial::get();
        $all_posts = Post::without('content')->orderBy('id', 'desc')->limit(3)->get();
        return view('website.home', compact('all_slides', 'all_feature', 'all_testimonial', 'all_posts'));
    }
}
