<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'process'])->name('login.process');

Route::get('/logout', [LogoutController::class, 'process'])->name('logout.process');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
