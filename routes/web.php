<?php

use App\Http\Controllers\dashboard\Dash;
use App\Http\Controllers\Zaria;
use Illuminate\Support\Facades\Route;



Route::get('/', [Zaria::class, 'index'])->name('index');
Route::get('/dashboard', [Dash::class, 'dash'])->name('home');
