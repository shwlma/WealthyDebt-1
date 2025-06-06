<?php

use App\Http\Controllers\AdminSparcController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/sparc', [AdminSparcController::class, 'index'])->name('admin.sparc');
    Route::post('/sparc/{id}/notes', [AdminSparcController::class, 'updateNotes'])->name('admin.sparc.notes');
    Route::get('/sparc/export', [AdminSparcController::class, 'export'])->name('admin.sparc.export');
});
