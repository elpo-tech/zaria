<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Hash;
use Session;



class Dash extends Controller
{
    public function dash()
    {
        if (Auth::check()) {


            return view('dashboard.dash');
        }

        return redirect('/')->with('error', 'You must be logged in to access the dashboard.');
    }

    public function profile()
    {

        if (Auth::check()) {
            return view('dashboard.profile');
        }
        return redirect('/')->with('error', 'You must be logged in to access the profile page.');
    }


    public function update_pro(Request $request)
    {
        $guser = Auth::user();

        $user = User::findOrFail($guser->id);

        $data = $request->all();

        $file = $request->profile_image;

        $info = User::findOrFail($guser->id);
        if ($file) {

            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move(public_path('profiles'), $filename);


            $info->foth1 =  $filename;
            $user->fname = $data['fname'];
            $user->phone = $data['phone'];
            $user->email = $data['email'];

            $info->save();


            Alert::success('Profile and Picture Updated Successfully');
            return back()->with('success', 'Your Profile Picture Was Updated Successful!!!');
        }


        $user->fname = $data['fname'];
        $user->phone = $data['phone'];
        $user->email = $data['email'];

        $user->update();

        Alert::success('Success', 'Profile updated successfully!');
        return back();
    }


    public function update_pass(Request $request)
    {
        $guser = Auth::user();

        $user = User::findOrFail($guser->id);


        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user->password = bcrypt($request->input('password'));
        $user->save();

        Alert::success('Success', 'Password updated successfully!');
        return back();
    }
}
