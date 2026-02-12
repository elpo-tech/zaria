<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Placements extends Controller
{
    public function placements()
    {
        return view('dashboard.placements');
    }
    //
}
