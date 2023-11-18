<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile');
    }

    public function profile_submit(Request $request)
    {

        $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        if ($request->password != '') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password',
            ]);


            if ($request->hasFile('photo')) {
                $request->validate([
                    'photo' => 'image|mimes:jpg,jpeg,png,gif'
                ]);
                unlink(public_path('uploads/' . $admin->photo));

                $ext = $request->file('photo')->extension();
                $final_name = 'admin' . '.' . $ext;

                $request->file('photo')->move(public_path('uploads/'), $final_name);

                $admin->photo = $final_name;
            }
            $admin->password = Hash::make($request->password);
        }



        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->update();
        return redirect()->back()->with('success', 'profile is saved successfully');
    }
}
