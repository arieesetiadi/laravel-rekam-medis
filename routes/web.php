<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyediaanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'process'])->name('login.process');

Route::get('/logout', [LogoutController::class, 'process'])->name('logout.process');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::prefix('/peminjaman')->group(function () {
    Route::get('/', [PeminjamanController::class, 'index'])->name('peminjaman.index');
});

Route::prefix('/penyediaan')->group(function () {
    Route::get('/', [PenyediaanController::class, 'index'])->name('penyediaan.index');
});
