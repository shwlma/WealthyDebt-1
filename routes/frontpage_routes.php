<?php

Route::group(['prefix' => ''], function () {
    Route::get('/', fn() => view('index'))->name('home');
    Route::get('/about', fn() => view('tabs.about'))->name('about');
    Route::get('/services', fn() => view('tabs.services'))->name('services');
    Route::get('/contact', fn() => view('tabs.contact'))->name('contact');
    Route::get('/login', fn() => view('auth.login'))->name('login');  
    Route::get('/book', fn() => view('tabs.book'))->name('book');
    Route::get('/coaching', fn() => view('tabs.coaching'))->name('coaching');
    Route::get('/sparcservices', fn() => view('tabs.sparc'))->name('sparcservices');
    Route::get('/vip', fn() => view('tabs.vip'))->name('vip'); 
});
 
Route::group(['prefix' => ''], function () {
    Route::get('/sparc', fn() => view('pages.sparc'))->name('sparc');
    Route::get('/downloads', fn() => view('pages.downloads'))->name('downloads');
});
