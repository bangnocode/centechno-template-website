<?php

use App\Http\Controllers\SurveiController;
use App\Models\MenuAurumDining;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

// POST survei tanpa cache
Route::post('/survei', [SurveiController::class, 'store'])
    ->name('survei.store')
    ->middleware(['guest', 'throttle:3,1']);

// GET routes aman auto-refresh
Route::middleware(['throttle:batas_spam'])->group(function () {

    // homepage
    Route::get('/', function () {
        return Cache::remember('home_page', 300, fn() => view('index'));
    });

    // Aurum Dining
    Route::get('/aurum-dining', function () {
        return Cache::remember('menu_aurum_dining_home', 300, function () {
            $menu_aurum_dining = MenuAurumDining::latest()->take(3)->get();
            return view('multi_page.aurum-dining.aurum-dining', compact('menu_aurum_dining'));
        });
    });

    Route::get('/aurum-dining/menu', function () {
        return Cache::remember('menu_aurum_dining_all', 300, function () {
            $menu_aurum_dining = MenuAurumDining::all();
            return view('multi_page.aurum-dining.menu', compact('menu_aurum_dining'));
        });
    });

    Route::get('/aurum-dining/galeri', function () {
        return Cache::remember('menu_aurum_dining_galeri', 300, function () {
            $menu_aurum_dining = MenuAurumDining::all();
            return view('multi_page.aurum-dining.galeri', compact('menu_aurum_dining'));
        });
    });

    // DA-Essemkasa
    Route::get('/da-esemkasa', fn() => view('multi_page.da-esemkasa.index'));
    Route::get('/da-esemkasa/kegiatan', fn() => view('multi_page.da-esemkasa.kegiatan'));
    Route::get('/da-esemkasa/berita', fn() => view('multi_page.da-esemkasa.berita'));
    Route::get('/da-esemkasa/galeri', fn() => view('multi_page.da-esemkasa.galeri'));
    Route::get('/da-esemkasa/berita/open-recruitmen-da-2025', fn() => view('multi_page.da-esemkasa.berita.open_recruitment_da_2025'));
    Route::get('/da-esemkasa/berita/PTA2025', fn() => view('multi_page.da-esemkasa.berita.PTA2025'));

    // Single Pages
    Route::get('/savana-digital', fn() => view('single_page.savana-digital'));
    Route::get('/usaha-kami', fn() => view('single_page.usaha-kami'));
    Route::get('/noir-atelier', fn() => view('single_page.noir-atelier'));
    Route::get('/bengkel-sejahtera', fn() => view('single_page.bengkel-sejahtera'));
});
