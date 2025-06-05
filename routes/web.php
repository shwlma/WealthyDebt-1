<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeadController;

require __DIR__.'/admin_consult_routes.php';
require __DIR__.'/admin_sparc_routes.php';
require __DIR__.'/admin_groupvip_routes.php';
require __DIR__.'/admin_speaking_routes.php';
require __DIR__.'/admin_vip_routes.php';
require __DIR__.'/authentication_routes.php';
require __DIR__.'/frontpage_routes.php';


Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Temporary placeholder route
Route::get('/placeholder/{context}', function ($context) {
    return view('temp_placeholder', ['context' => ucfirst($context)]);
})->name('temp');

