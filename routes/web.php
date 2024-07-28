<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyediaanController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'process'])->name('login.process');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LogoutController::class, 'process'])->name('logout.process');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('/peminjam')->group(function () {
        Route::get('/', [PeminjamController::class, 'index'])->name('peminjam.index');
        Route::post('/', [PeminjamController::class, 'store'])->name('peminjam.store');
    });

    Route::prefix('/pasien')->group(function () {
        Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
        Route::post('/', [PasienController::class, 'store'])->name('pasien.store');
    });

    Route::prefix('/penyediaan')->group(function () {
        Route::get('/', [PenyediaanController::class, 'index'])->name('penyediaan.index');
    });
});
