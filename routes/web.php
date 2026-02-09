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
use App\Http\Controllers\dashboard\Paymentsc;
use App\Http\Controllers\dashboard\Interviews;
use App\Http\Controllers\dashboard\Placements;
use App\Http\Controllers\dashboard\Replacements;
use App\Http\Controllers\dashboard\uniforms;

Route::get('/', [Zaria::class, 'index'])->name('index');
Route::get('/dashboard', [Dash::class, 'dash'])->name('home');
Route::get('/customer', [Customer::class, 'custo'])->name('customer');
Route::get('/housemanager', [Housem::class, 'manager'])->name('housemanager');
Route::get('/profile', [Dash::class, 'profile'])->name('profile');
Route::get('/roles', [Roles::class, 'roles'])->name('roles');
Route::get('/employees',[Employees::class,'empl'])->name('employees');
ROUTE::get('/appointments',[Appointments::class,'app'])->name('appointments');
ROUTE::get('/paymentsc', [Paymentsc::class,'paymc'])->name('paymentsc');
ROUTE::get('/interviews',[Interviews::class,'interviews'])->name('interviews');
ROUTE::get('/placements',[Placements::class,'placements'])->name('placements');
ROUTE::get('/replacements',[Replacements::class,'replacements'])->name('replacements');
ROUTE::get('/uniforms' ,[Uniforms::class,'uniforms'])->name('uniforms');





