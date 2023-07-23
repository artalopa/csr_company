<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Intro\IntroController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/intro', [IntroController::class, 'index'])->name('intro');
