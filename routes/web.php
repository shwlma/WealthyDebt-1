<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeadController;

Route::group(['prefix' => ''], function () {
    Route::get('/', fn() => view('index'))->name('home');
    Route::get('/about', fn() => view('tabs.about'))->name('about');
    Route::get('/services', fn() => view('tabs.services'))->name('services');
    Route::get('/contact', fn() => view('tabs.contact'))->name('contact');
});

Route::group(['prefix'=> ''], function () {
    Route::get('/sparc', fn() => view('pages.sparc'))->name( 'sparc');
    Route::get('/downloads', fn() => view('pages.downloads'))->name( 'downloads');
});

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Temporary placeholder route
Route::get('/placeholder/{context}', function ($context) {
    return view('temp_placeholder', ['context' => ucfirst($context)]);
})->name('temp');


// Route::post('/lead-capture', [LeadController::class, 'store']);
// Route::get('/dashboard', [LeadController::class, 'dashboard']);