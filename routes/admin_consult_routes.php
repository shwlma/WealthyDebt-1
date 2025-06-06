<?php

use App\Http\Controllers\AdminConsultationController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/consultation', [AdminConsultationController::class, 'index'])->name('admin.consult');
    Route::post('/consultation/{id}/notes', [AdminConsultationController::class, 'updateNotes'])->name('admin.consult.notes');
    Route::get('/consultations/export', [AdminConsultationController::class, 'export'])->name('admin.consultations.export');
});
