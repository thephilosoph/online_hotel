<?php

namespace App\Http\Controllers\website;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermsController extends Controller
{
    public function index()
    {
        $terms_data = Page::where('id', 1)->first();
        return view('website.terms', compact('terms_data'));
    }
}
