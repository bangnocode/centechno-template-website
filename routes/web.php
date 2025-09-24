<?php

use App\Http\Controllers\SurveiController;
use App\Models\MenuAurumDining;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

// POST survei dikeluarkan agar tidak kena cache.response
Route::post('/survei', [SurveiController::class, 'store'])
    ->name('survei.store')
    ->middleware(['guest', 'throttle:3,1']);

// Semua GET di-throttle + cache
Route::middleware(['throttle:25,1', 'cache.response'])->group(function () {
    Route::get('/', fn() => view('index'));

    // MULTIPAGE
    Route::get('/aurum-dining', function () {
        $menu_aurum_dining = Cache::remember(
            'menu_aurum_dining_home',
            60,
            fn() =>
            MenuAurumDining::latest()->take(3)->get()
        );
        return view('multi_page.aurum-dining.aurum-dining', compact('menu_aurum_dining'));
    });
    Route::get('/aurum-dining/menu', function () {
        $menu_aurum_dining = Cache::remember(
            'menu_aurum_dining_all',
            60,
            fn() =>
            MenuAurumDining::all()
        );
        return view('multi_page.aurum-dining.menu', compact('menu_aurum_dining'));
    });
    Route::get('/aurum-dining/galeri', function () {
        $menu_aurum_dining = Cache::remember(
            'menu_aurum_dining_galeri',
            60,
            fn() =>
            MenuAurumDining::all()
        );
        return view('multi_page.aurum-dining.galeri', compact('menu_aurum_dining'));
    });

    Route::get('/da-esemkasa', fn() => view('multi_page.da-esemkasa.index'));
    Route::get('/da-esemkasa/kegiatan', fn() => view('multi_page.da-esemkasa.kegiatan'));
    Route::get('/da-esemkasa/berita', fn() => view('multi_page.da-esemkasa.berita'));
    Route::get('/da-esemkasa/galeri', fn() => view('multi_page.da-esemkasa.galeri'));
    Route::get('/da-esemkasa/berita/open-recruitmen-da-2025', fn() => view('multi_page.da-esemkasa.berita.open_recruitment_da_2025'));
    Route::get('/da-esemkasa/berita/PTA2025', fn() => view('multi_page.da-esemkasa.berita.PTA2025'));

    // SINGLE PAGE
    Route::get('/savana-digital', fn() => view('single_page.savana-digital'));
    Route::get('/usaha-kami', fn() => view('single_page.usaha-kami'));
    Route::get('/noir-atelier', fn() => view('single_page.noir-atelier'));
    Route::get('/bengkel-sejahtera', fn() => view('single_page.bengkel-sejahtera'));
});
