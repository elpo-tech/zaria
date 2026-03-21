<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class Employees extends Controller
{
    public function staff()
    {
        return view('dashboard.users.empl');
    }

    public function man()
    {


        $gusers = User::where('role', '!=', 'Staff')->orWhere('role', '!=', 'Other')->get();


        return view('dashboard.users.man', compact('gusers'));
    }

    public function oth()
    {
        return view('dashboard.users.othuser');
    }

    public function user()
    {
        return view('dashboard.users.adduser');
    }


    public function view_user($id)
    {
        $user = User::findOrFail($id);

        return view('dashboard.users.view_user', compact('user'));
    }

    public function edituserdb(Request $request, $id)
    {



        // Update the user
        $user = User::findOrFail($id);
        $data = $request->all();


        try {
            $user->status = $data['status'];
        } catch (\Throwable $th) {
            //throw $th;
        }

        try {
            $user->role = $data['role'];
        } catch (\Throwable $th) {
            //throw $th;
        }

        try {
            $user->phone = $data['phone'];
        } catch (\Throwable $th) {
            //throw $th;
        }


        $user->fname = $data['fname'];
        $user->email = $data['email'];


        $user->update();

        Alert::success('User updated successfully!');
        return back()->with('success', 'User updated successfully!');
    }


    public function deleteuserdb($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Alert::success('User deleted successfully!');
        return back()->with('success', 'User deleted successfully!');
    }

    public function adduserdb(Request $request)
    {
        $request->validate([
            'uname' => 'required|unique:users,uname',
            'email' => 'required|email|unique:users,email',
        ]);

        // Create a new user

        $data = $request->all();


        $status = 'Active';
        $role = 'Staff';
        $phone = '0712345678';


        try {
            $status = $data['status'];
        } catch (\Throwable $th) {
            //throw $th;
        }

        try {
            $role = $data['role'];
        } catch (\Throwable $th) {
            //throw $th;
        }

        try {
            $phone = $data['phone'];
        } catch (\Throwable $th) {
            //throw $th;
        }

        User::create([
            'uname' => $data['uname'],
            'fname' => $data['fname'],
            'email' => $data['email'],
            'phone' => $phone,
            'status' => $status,
            'password' => Hash::make($phone),
            'role' => $role,
            'foth1' => '1.png',
        ]);



        Alert::success('User added successfully!');
        return back()->with('success', 'User added successfully!');
    }
}
