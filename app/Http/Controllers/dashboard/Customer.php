<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Customer extends Controller
{
    public function custo()
    {
        return view('dashboard.customer');
    }
}
