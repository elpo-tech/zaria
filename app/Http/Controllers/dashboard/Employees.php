<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Employees extends Controller
{
    public function employees()
    {
        return view('dashboard.empl');
    }
    //
}
