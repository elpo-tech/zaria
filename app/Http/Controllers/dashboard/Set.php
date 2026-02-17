<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Set extends Controller
{
    public function roles()
    {
        return view('dashboard.set.roles');
    }

    public function set()
    {
        return view('dashboard.set.set');
    }

    public function other()
    {
        return view('dashboard.set.other');
    }
}
