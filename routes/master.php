<?php

use App\Http\Controllers\Master\MasterOpdController;
use App\Http\Controllers\Master\Penilaian\DampakController;
use App\Http\Controllers\Master\Penilaian\KeberlanjutanController;
use App\Http\Controllers\Master\Penilaian\KeterkaitanController;
use App\Http\Controllers\Master\Penilaian\NominalController;
use App\Http\Controllers\Master\Perusahaan\BentukPerusahaanController;
use App\Http\Controllers\Master\Perusahaan\KbliController;
use App\Http\Controllers\Master\Perusahaan\SectorKbliController;
use App\Http\Controllers\Master\Perusahaan\SubSectorKbliController;
use App\Http\Controllers\Master\PrioritasPembangunanDaerah\ArahKebijakanController;
use App\Http\Controllers\Master\PrioritasPembangunanDaerah\PrioritasPembangunanController;
use App\Http\Controllers\Master\PrioritasPembangunanDaerah\ProgramPmdnController;
use App\Http\Controllers\Master\ProgramCsr\MasterBidangController;
use App\Http\Controllers\Master\ProgramCsr\MasterProgramController;
use App\Http\Controllers\Master\ProgramCsr\MasterSubBidangController;
use Illuminate\Support\Facades\Route;

Route::prefix('/master-opd')->group(function() {
    Route::get('/', [MasterOpdController::class, 'index'])->name('master-opd.index');
    Route::get('/detail', [MasterOpdController::class, 'detail'])->name('master-opd.detail');
    Route::get('/create', [MasterOpdController::class, 'create'])->name('master-opd.create');
    Route::get('/edit', [MasterOpdController::class, 'edit'])->name('master-opd.edit');
});

Route::prefix('/program-csr')->group(function() {
    Route::prefix('/master-bidang')->group(function() {
        Route::get('/', [MasterBidangController::class, 'index'])->name('master-bidang.index');
        Route::get('/detail', [MasterBidangController::class, 'detail'])->name('master-bidang.detail');
        Route::get('/create', [MasterBidangController::class, 'create'])->name('master-bidang.create');
        Route::get('/edit', [MasterBidangController::class, 'edit'])->name('master-bidang.edit');
    });

    Route::prefix('/master-sub-bidang')->group(function() {
        Route::get('/', [MasterSubBidangController::class, 'index'])->name('master-sub-bidang.index');
        Route::get('/detail', [MasterSubBidangController::class, 'detail'])->name('master-sub-bidang.detail');
        Route::get('/create', [MasterSubBidangController::class, 'create'])->name('master-sub-bidang.create');
        Route::get('/edit', [MasterSubBidangController::class, 'edit'])->name('master-sub-bidang.edit');
    });

    Route::prefix('/master-program')->group(function() {
        Route::get('/', [MasterProgramController::class, 'index'])->name('master-program.index');
        Route::get('/detail', [MasterProgramController::class, 'detail'])->name('master-program.detail');
        Route::get('/create', [MasterProgramController::class, 'create'])->name('master-program.create');
        Route::get('/edit', [MasterProgramController::class, 'edit'])->name('master-program.edit');
    });
});

Route::prefix('prioritas-pembangunan-daerah')->group(function() {
        Route::prefix('/prioritas-pembangunan')->group(function() {
            Route::get('/', [PrioritasPembangunanController::class, 'index'])->name('master-prioritas-pembangunan.index');
            Route::get('/detail', [PrioritasPembangunanController::class, 'detail'])->name('master-prioritas-pembangunan.detail');
            Route::get('/create', [PrioritasPembangunanController::class, 'create'])->name('master-prioritas-pembangunan.create');
            Route::get('/edit', [PrioritasPembangunanController::class, 'edit'])->name('master-prioritas-pembangunan.edit');
        });

        Route::prefix('arah-kebijakan')->group(function() {
            Route::get('/', [ArahKebijakanController::class, 'index'])->name('master-arah-kebijakan.index');
            Route::get('/detail', [ArahKebijakanController::class, 'detail'])->name('master-arah-kebijakan.detail');
            Route::get('/create', [ArahKebijakanController::class, 'create'])->name('master-arah-kebijakan.create');
            Route::get('/edit', [ArahKebijakanController::class, 'edit'])->name('master-arah-kebijakan.edit');
        });

        Route::prefix('program-pmdn')->group(function() {
            Route::get('/', [ProgramPmdnController::class, 'index'])->name('master-program-pmdn.index');
            Route::get('/detail', [ProgramPmdnController::class, 'detail'])->name('master-program-pmdn.detail');
            Route::get('/create', [ProgramPmdnController::class, 'create'])->name('master-program-pmdn.create');
            Route::get('/edit', [ProgramPmdnController::class, 'edit'])->name('master-program-pmdn.edit');
        });

});

Route::prefix('penilaian')->group(function() {
    Route::prefix('/nominal')->group(function() {
        Route::get('/', [NominalController::class, 'index'])->name('penilaian-nominal.index');
    });

    Route::prefix('/dampak')->group(function() {
        Route::get('/', [DampakController::class, 'index'])->name('penilaian-dampak.index');
    });

    Route::prefix('/keterkaitan')->group(function() {
        Route::get('/', [KeterkaitanController::class, 'index'])->name('penilaian-keterkaitan.index');
    });

    Route::prefix('/keberlanjutan')->group(function() {
        Route::get('/', [KeberlanjutanController::class, 'index'])->name('penilaian-keberlanjutan.index');
    });

});

Route::prefix('/company')->group(function() {
    Route::prefix('/bentuk-perusahaan')->group(function() {
        Route::get('/', [BentukPerusahaanController::class, 'index'])->name('master-bentuk-perusahaan.index');
        Route::get('/detail', [BentukPerusahaanController::class, 'detail'])->name('master-bentuk-perusahaan.detail');
        Route::get('/create', [BentukPerusahaanController::class, 'create'])->name('master-bentuk-perusahaan.create');
        Route::get('/edit', [BentukPerusahaanController::class, 'edit'])->name('master-bentuk-perusahaan.edit');
    });

    Route::prefix('/kbli')->group(function() {
        Route::get('/', [KbliController::class, 'index'])->name('master-kbli.index');
        Route::get('/detail', [KbliController::class, 'detail'])->name('master-kbli.detail');
        Route::get('/create', [KbliController::class, 'create'])->name('master-kbli.create');
        Route::get('/edit', [KbliController::class, 'edit'])->name('master-kbli.edit');

        Route::prefix('/sector')->group(function() {
            Route::get('/', [SectorKbliController::class, 'index'])->name('master-sector-kbli.index');
            Route::get('/detail', [SectorKbliController::class, 'detail'])->name('master-sector-kbli.detail');
            Route::get('/create', [SectorKbliController::class, 'create'])->name('master-sector-kbli.create');
            Route::get('/edit', [SectorKbliController::class, 'edit'])->name('master-sector-kbli.edit');
        });

        Route::prefix('/sub-sector')->group(function() {
            Route::get('/', [SubSectorKbliController::class, 'index'])->name('master-sub-sector-kbli.index');
            Route::get('/detail', [SubSectorKbliController::class, 'detail'])->name('master-sub-sector-kbli.detail');
            Route::get('/create', [SubSectorKbliController::class, 'create'])->name('master-sub-sector-kbli.create');
            Route::get('/edit', [SubSectorKbliController::class, 'edit'])->name('master-sub-sector-kbli.edit');
        });

    });
});

