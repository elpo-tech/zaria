<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dash extends Controller
{
    public function dash()
    {
        return view('dashboard.dash');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }
}
