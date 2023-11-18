<?php

namespace App\Http\Controllers\website;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy_data = Page::where('id', 1)->first();
        return view('website.privacy', compact('privacy_data'));
    }
}
