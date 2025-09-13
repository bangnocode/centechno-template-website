<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


// MULTIPAGE
Route::get('/aurum-dining', function () {
    return view('multi_page.aurum-dining.aurum-dining');
});
Route::get('/aurum-dining/menu', function () {
    return view('multi_page.aurum-dining.menu');
});
Route::get('/aurum-dining/galeri', function () {
    return view('multi_page.aurum-dining.galeri');
});

// SINGLE PAGE
Route::get('/savana-digital', function () {
    return view('single_page.savana-digital');
});
Route::get('/usaha-kami', function () {
    return view('single_page.usaha-kami');
});
Route::get('/noir-atelier', function () {
    return view('single_page.noir-atelier');
});
Route::get('/bengkel-sejahtera', function () {
    return view('single_page.bengkel-sejahtera');
});
