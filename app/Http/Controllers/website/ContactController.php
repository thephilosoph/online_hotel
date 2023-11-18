<?php

namespace App\Http\Controllers\website;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contact_data = Page::where('id', 1)->first();
        return view('website.contact', compact('contact_data'));
    }
}
