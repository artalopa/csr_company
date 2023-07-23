<?php

use App\Http\Controllers\Csr\ProgramImplementation\DPA\Dp4Controller;
use App\Http\Controllers\Csr\ProgramImplementation\DPA\DukpdController;
use App\Http\Controllers\Csr\ProgramImplementation\DpaController;
use App\Http\Controllers\Csr\ProgramRka\ProgramRkaController;
use App\Http\Controllers\Csr\UsulanProgram\UsulanProgramController;
use Illuminate\Support\Facades\Route;

Route::prefix('/usulan-program')->group(function () {
    Route::get('/', [UsulanProgramController::class, 'index'])->name('csr-usulan-program.index');
    Route::get('/create_usulan_opd', [UsulanProgramController::class, 'create_usulan_opd'])->name('csr-usulan-program.create-usulan-opd');
    Route::get('/create_usulan_perusahaan', [UsulanProgramController::class, 'create_usulan_perusahaan'])->name('csr-usulan-program.create-usulan-perusahaan');
    Route::post('/post', [UsulanProgramController::class, 'store'])->name('csr-usulan-program.post');
});

Route::prefix('/program-rka')->group(function () {
    Route::get('/', [ProgramRkaController::class, 'index'])->name('csr-program-rka.index');
    Route::get('/join', [ProgramRkaController::class, 'join'])->name('csr-program-rka.join');
});

Route::prefix('/dpa')->group(function () {
    Route::get('/', [DpaController::class, 'index'])->name('dpa.index');

    Route::prefix('/dp4')->group(function () {
        Route::get('/', [Dp4Controller::class, 'index'])->name('dpa-dp4.index');
        Route::get('/detail', [Dp4Controller::class, 'detail'])->name('dpa-dp4.detail');
        Route::get('/validation', [Dp4Controller::class, 'validation'])->name('dpa-dp4.validation');
    });

    Route::prefix('/dukpd')->group(function () {
        Route::get('/', [DukpdController::class, 'index'])->name('dpa-dukpd.index');
    });
});
