<?php

use App\Http\Controllers\AdminVipController;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/vip', [AdminVipController::class, 'index'])->name('admin.vip');
    Route::post('/vip/{id}/notes', [AdminVipController::class, 'updateNotes'])->name('admin.vip.notes');
    Route::get('/vip/export', [AdminVipController::class, 'export'])->name(name: 'admin.vip.export'); 
});
