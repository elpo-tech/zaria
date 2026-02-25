<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Roles extends Controller
{
    public function roles()
    {
        return view('dashboard.roles');
    }
    //
}
