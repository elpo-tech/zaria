<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Report extends Controller
{
    public function gen()
    {
        return view('dashboard.report.gen');
    }

    public function pay()
    {
        return view('dashboard.report.pay');
    }

    public function girls()
    {
        return view('dashboard.report.girl');
    }
}
