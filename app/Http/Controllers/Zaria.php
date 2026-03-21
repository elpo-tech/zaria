<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class Zaria extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'name' =>  'required',
            'password'  =>  'required'
        ]);

        $login = $request->input('name');
        $type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : (is_numeric($login) ? 'phone' : 'uname');
        $request->merge([
            $type => $login,
            'password' => $request->password
        ]);

        $credentials = $request->only($type, 'password');


        $user = User::where($type, $login)->first();

        if ($user && $user->status != 'Active') {
            return redirect('/')
                ->with('error', 'Your account has been suspended. Contact support.');
        }

        if (Auth::attempt($credentials)) {
            $user = Auth::User();


            return redirect('/dashboard')->with('success', 'Login Successful!!');
        }

        return redirect('/')->with('error', 'Login details are not valid');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logout Successful!!');
    }
}
