<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class,'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

