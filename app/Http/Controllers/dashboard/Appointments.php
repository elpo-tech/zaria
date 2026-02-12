<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Appointments extends Controller
{
    public function appointments()
    {
        return view('dashboard.appointments');
    }
 
//
}
