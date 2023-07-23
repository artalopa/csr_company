<?php

use App\Http\Controllers\Opd\OpdController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OpdController::class, 'index'])->name('opd.index');
ROute::get('/create', [OpdController::class, 'create'])->name('opd.create');
