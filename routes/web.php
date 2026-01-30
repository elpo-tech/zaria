<?php

use App\Http\Controllers\dashboard\Dash;
use App\Http\Controllers\Zaria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HousemanagerController;

Route::get('/', [Zaria::class, 'index'])->name('index');
Route::get('/dashboard', [Dash::class, 'dash'])->name('home');
Route::get('/ customer' ,[CustomerController::class, 'index'])->name('index');
Route::get('/Housemanager',[HousemanagerController::class,'index'])->name('index');