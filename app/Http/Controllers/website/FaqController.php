<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $all_faqs = Faq::get();
        return view('website.faq', compact('all_faqs'));
    }
}
