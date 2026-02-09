<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Uniforms extends Controller
{
    public function uniforms()
    {
        return view('dashboard.uniforms');
    }
    //
}
