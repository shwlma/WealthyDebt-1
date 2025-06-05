<?php

use App\Http\Controllers\AdminGroupVipController;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/group-vip', [AdminGroupVipController::class, 'index'])->name('admin.groupvip');
    Route::post('/group-vip/{id}/notes', [AdminGroupVipController::class, 'updateNotes'])->name('admin.groupvip.notes');
});
