<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LeadController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/AdminLogin', [LoginController::class, 'login'])->name('AdminLogin');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
     Route::get('/dashboard', [LeadController::class, 'Admin_dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth'])->prefix('user')->group(function () {
      Route::get('/dashboard', [LeadController::class, 'User_dashboard'])->name('user.dashboard');
});