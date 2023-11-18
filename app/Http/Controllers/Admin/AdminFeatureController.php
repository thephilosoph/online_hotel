<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class AdminFeatureController extends Controller
{
    public function index()
    {
        $features = Feature::get();
        return view('admin.feature_view', compact('features'));
    }

    public function creat()
    {
        return view('admin.feature_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'heading' => 'required'
        ]);
        $feature = new Feature();
        $feature->icon = $request->icon;
        $feature->heading = $request->heading;
        $feature->text = $request->text;
        $feature->save();
        return redirect()->back()->with('success', 'feature have been added successfully');
    }


    public function edit($id)
    {
        $feature_data = Feature::where('id', $id)->first();
        return view('admin.feature_edit', compact('feature_data'));
    }


    public function update(Request $request, $id)
    {
        $feature = Feature::where('id', $id)->first();
        $feature->icon = $request->icon;
        $feature->heading = $request->heading;
        $feature->text = $request->text;
        $feature->update();
        return redirect()->back()->with('success', 'slide have been updated successfully');
    }



    public function delete($id)
    {
        $slider = Feature::where('id', $id)->first();
        $slider->delete();
        return redirect()->back()->with('success', 'slide have been updated successfully');
    }
}
