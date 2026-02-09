<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Replacements extends Controller
{
    public function replacements()
    {
        return view ('dashboard.replacements');
    }
    //
}
