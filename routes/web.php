<?php

use Illuminate\Support\Facades\Route;

// Menghubungkan URL utama ke halaman home
Route::get('/', function () {
    return view('home');
});

// Menghubungkan URL /service ke halaman service
Route::get('/service', function () {
    return view('service');
});

// Menghubungkan URL /about ke halaman about
Route::get('/about', function () {
    return view('about');
});

// Menghubungkan URL /contact ke halaman contact
Route::get('/contact', function () {
    return view('contact');
});
