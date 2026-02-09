<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Interviews extends Controller
{
    public function interviews()
    {
        return view ('dashboard.interviews');
    }
    //
}
