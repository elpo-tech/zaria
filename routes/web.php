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
Route::POST('/login_validate', [Zaria::class, 'login'])->name('lvalidate');
Route::get('/logout', [Zaria::class, 'logout'])->name('logout');
Route::get('/dashboard', [Dash::class, 'dash'])->name('home');
Route::POST('/update_profile', [Dash::class, 'update_pro'])->name('profile.update');
Route::POST('/update_password', [Dash::class, 'update_pass'])->name('password.update');
Route::get('/clients', [Customer::class, 'custo'])->name('clients');
Route::get('/housemanager', [Housem::class, 'manager'])->name('housemanager');
Route::get('/profile', [Dash::class, 'profile'])->name('profile');
Route::POST("/addhousem", [Housem::class, "addhousemdb"])->name("add.housemanager");

Route::get('/staff', [Employees::class, 'staff'])->name('staffs');
Route::get('/managers', [Employees::class, 'man'])->name('managers');
Route::get('/Others', [Employees::class, 'oth'])->name('others');
Route::get('/add_user', [Employees::class, 'user'])->name('add_user');
Route::POST("/adduser", [Employees::class, "adduserdb"])->name("add.user");
Route::get('/view_user/{id}', [Employees::class, 'view_user'])->name('view_user');
Route::POST("/edit_user/{id}", [Employees::class, "edituserdb"])->name("edit.user");
Route::get("/delete_user/{id}", [Employees::class, "deleteuserdb"])->name("delete.user");

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
