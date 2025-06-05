<?php

use App\Http\Controllers\AdminSpeakingController;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/speaking', [AdminSpeakingController::class, 'index'])->name('admin.speaking');
    Route::post('/speaking/{id}/notes', [AdminSpeakingController::class, 'updateNotes'])->name('admin.speaking.notes');
});
