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


Route::get('/', [Zaria::class, 'index'])->name('index');
Route::get('/dashboard', [Dash::class, 'dash'])->name('home');
Route::get('/customer', [Customer::class, 'custo'])->name('customer');
Route::get('/housemanager', [Housem::class, 'manager'])->name('housemanager');
Route::get('/profile', [Dash::class, 'profile'])->name('profile');
Route::get('/roles', [Roles::class, 'roles'])->name('roles');
Route::get('/employees',[Employees::class,'empl'])->name('employees');

