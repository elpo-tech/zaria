<?php

use App\Http\Controllers\dashboard\Dash;
use App\Http\Controllers\Zaria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\dashboard\Customer;
use App\Http\Controllers\dashboard\Housem;
use App\Http\Controllers\HousemanagerController;
use App\Http\Controllers\dashboard\Roles;
use App\Http\Controllers\dashboard\Employees;
use APP\Http\Controllers\dashboard\Appointments;
use App\Http\Controllers\dashboard\Appointments as DashboardAppointments;
use App\Http\Controllers\dashboard\Paymentsc;
use App\Http\Controllers\dashboard\Interviews;
use App\Http\Controllers\dashboard\Placements;
use App\Http\Controllers\dashboard\Replacements;
use App\Http\Controllers\dashboard\Report;
use App\Http\Controllers\dashboard\Set;
use App\Http\Controllers\dashboard\uniforms;

Route::get('/', [Zaria::class, 'index'])->name('index');
Route::get('/dashboard', [Dash::class, 'dash'])->name('home');
Route::get('/clients', [Customer::class, 'custo'])->name('clients');
Route::get('/housemanager', [Housem::class, 'manager'])->name('housemanager');
Route::get('/profile', [Dash::class, 'profile'])->name('profile');

Route::get('/staff', [Employees::class, 'staff'])->name('staffs');
Route::get('/managers', [Employees::class, 'man'])->name('managers');
Route::get('/Others', [Employees::class, 'oth'])->name('others');

ROUTE::get('/appointments', [DashboardAppointments::class, 'app'])->name('appointments');

ROUTE::get('/payments', [Paymentsc::class, 'allpay'])->name('payments');
ROUTE::get('/girls_payments', [Paymentsc::class, 'paymc'])->name('girls_payments');
ROUTE::get('/client_payments', [Paymentsc::class, 'paycl'])->name('client_payments');
ROUTE::get('/uniform_payments', [Paymentsc::class, 'payun'])->name('uniform_payments');



ROUTE::get('/interviews', [Interviews::class, 'interviews'])->name('interviews');
ROUTE::get('/placements', [Placements::class, 'placements'])->name('placements');
ROUTE::get('/replacements', [Replacements::class, 'replacements'])->name('replacements');

ROUTE::get('/uniforms', [Uniforms::class, 'uniforms'])->name('uniforms');
ROUTE::get('/uniforms_sales', [Uniforms::class, 'sale'])->name('sales');

Route::get('/roles', [Set::class, 'roles'])->name('roles');
Route::get('/settings', [Set::class, 'set'])->name('settings');
Route::get('/other_settings', [Set::class, 'other'])->name('other_settings');

Route::get('/general_report', [Report::class, 'gen'])->name('general_report');
Route::get('/payment_report', [Report::class, 'pay'])->name('payment_report');
Route::get('/girls_report', [Report::class, 'girls'])->name('girls_report');
