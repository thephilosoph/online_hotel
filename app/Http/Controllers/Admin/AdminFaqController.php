<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::get();
        return view('admin.faq_view', compact('faqs'));
    }

    public function creat()
    {
        return view('admin.faq_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->back()->with('success', 'faq have been added successfully');
    }


    public function edit($id)
    {
        $faq_data = Faq::where('id', $id)->first();
        return view('admin.faq_edit', compact('faq_data'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
        $faq = Faq::where('id', $id)->first();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->update();
        return redirect()->back()->with('success', 'faq have been updated successfully');
    }



    public function delete($id)
    {
        $faq = Faq::where('id', $id)->first();
        $faq->delete();
        return redirect()->back()->with('success', 'Faq have been updated successfully');
    }
}
