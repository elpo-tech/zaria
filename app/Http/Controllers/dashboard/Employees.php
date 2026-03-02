<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Employees extends Controller
{
    public function staff()
    {
        return view('dashboard.users.empl');
    }

    public function man()
    {
        return view('dashboard.users.man');
    }

    public function oth()
    {
        return view('dashboard.users.othuser');
    }

    public function user()
    {
        return view('dashboard.users.adduser');
    }
}
