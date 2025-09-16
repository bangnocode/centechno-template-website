<?php

use App\Http\Controllers\SurveiController;
use App\Models\MenuAurumDining;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/survei', [SurveiController::class, 'store'])->name('survei.store');
Route::put('/survei/{id}', [SurveiController::class, 'update'])->name('survei.update');

// MULTIPAGE
Route::get('/aurum-dining', function () {
    $menu_aurum_dining = MenuAurumDining::latest()->take(3)->get();
    return view('multi_page.aurum-dining.aurum-dining', compact('menu_aurum_dining'));
});
Route::get('/aurum-dining/menu', function () {
    $menu_aurum_dining = MenuAurumDining::all();
    return view('multi_page.aurum-dining.menu', compact('menu_aurum_dining'));
});
Route::get('/aurum-dining/galeri', function () {
    $menu_aurum_dining = MenuAurumDining::all();
    return view('multi_page.aurum-dining.galeri', compact('menu_aurum_dining'));
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
