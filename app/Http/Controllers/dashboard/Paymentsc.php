<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paymentsc extends Controller
{
    public function allpay()
    {
        return view('dashboard.payments.all');
    }

    public function paycl()
    {
        return view('dashboard.payments.client');
    }

    public function paymc()
    {
        return view('dashboard.payments.girls');
    }

    public function payun()
    {
        return view('dashboard.payments.uniform');
    }
}
