<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Employees extends Controller
{
    public function staff()
    {
        return view('dashboard.empl');
    }

    public function man()
    {
        return view('dashboard.man');
    }

    public function oth()
    {
        return view('dashboard.othuser');
    }
}
