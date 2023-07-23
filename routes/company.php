<?php

use App\Http\Controllers\Company\CompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyController::class, 'index'])->name('company.index');
Route::get('/create', [CompanyController::class, 'create'])->name('company.create');
