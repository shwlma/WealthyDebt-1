<?php

use App\Http\Controllers\AdminConsultationController;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/consultation', [AdminConsultationController::class, 'index'])->name('admin.consult');
    Route::post('/consultation/{id}/notes', [AdminConsultationController::class, 'updateNotes'])->name('admin.consult.notes');
});
