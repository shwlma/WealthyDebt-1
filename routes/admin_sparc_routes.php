<?php

use App\Http\Controllers\AdminSparcController;

Route::middleware(['auth', 'can:admin'])->prefix('admin')->group(function () {
    Route::get('/sparc', [AdminSparcController::class, 'index'])->name('admin.sparc');
    Route::post('/sparc/{id}/notes', [AdminSparcController::class, 'updateNotes'])->name('admin.sparc.notes');
});
