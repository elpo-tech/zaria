<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Housem extends Controller
{
    public function manager()
    {
        return view('dashboard.manager');
    }
}
