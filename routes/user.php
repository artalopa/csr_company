<?php

use App\Http\Controllers\User\AdminBapedaController;
use App\Http\Controllers\User\AdminCompanyController;
use App\Http\Controllers\User\AdminOpdController;
use App\Http\Controllers\User\AdminPengawasController;
use App\Http\Controllers\User\AdminPerekonomianController;
use App\Http\Controllers\User\AdminPusatController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin-pusat')->group(function() {
    Route::get('/', [AdminPusatController::class, 'index'])->name('admin-pusat.index');
    Route::get('/detail', [AdminPusatController::class, 'detail'])->name('admin-pusat.detail');
    Route::get('/create', [AdminPusatController::class, 'create'])->name('admin-pusat.create');
    Route::get('/edit', [AdminPusatController::class, 'edit'])->name('admin-pusat.edit');
});

Route::prefix('/admin-perekonomian')->group(function() {
    Route::get('/', [AdminPerekonomianController::class, 'index'])->name('admin-perekonomian.index');
    Route::get('/detail', [AdminPerekonomianController::class, 'detail'])->name('admin-perekonomian.detail');
    Route::get('/create', [AdminPerekonomianController::class, 'create'])->name('admin-perekonomian.create');
    Route::get('/edit', [AdminPerekonomianController::class, 'edit'])->name('admin-perekonomian.edit');
});

Route::prefix('/bapeda-opd')->group(function() {
    Route::prefix('bapeda')->group(function() {
        Route::get('/', [AdminBapedaController::class, 'index'])->name('admin-bapeda.index');
        Route::get('/create', [AdminBapedaController::class, 'create'])->name('admin-bapeda.create');
        Route::get('/detail', [AdminBapedaController::class, 'detail'])->name('admin-bapeda.detail');
        Route::get('/edit', [AdminBapedaController::class, 'edit'])->name('admin-bapeda.edit');
    });

    Route::prefix('opd')->group(function() {
        Route::get('/', [AdminOpdController::class, 'index'])->name('admin-opd.index');
        Route::get('/create', [AdminOpdController::class, 'create'])->name('admin-opd.create');
        Route::get('/detail', [AdminOpdController::class, 'detail'])->name('admin-opd.detail');
        Route::get('/edit', [AdminOpdController::class, 'edit'])->name('admin-opd.edit');
    });
});

Route::prefix('/admin-pengawas')->group(function() {
    Route::get('/', [AdminPengawasController::class, 'index'])->name('admin-pengawas.index');
    Route::get('/detail', [AdminPengawasController::class, 'detail'])->name('admin-pengawas.detail');
    Route::get('/create', [AdminPengawasController::class, 'create'])->name('admin-pengawas.create');
    Route::get('/edit', [AdminPengawasController::class, 'edit'])->name('admin-pengawas.edit');
});

Route::prefix('/admin-company')->group(function() {
    Route::get('/', [AdminCompanyController::class, 'index'])->name('admin-company.index');
    Route::get('/detail', [AdminCompanyController::class, 'detail'])->name('admin-company.detail');
    Route::get('/create', [AdminCompanyController::class, 'create'])->name('admin-company.create');
    Route::get('/edit', [AdminCompanyController::class, 'edit'])->name('admin-company.edit');
});
