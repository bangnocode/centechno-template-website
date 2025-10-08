<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\SurveiController;
use App\Models\MenuAurumDining;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

// POST survei tanpa cache
Route::post('/survei', [SurveiController::class, 'store'])
    ->name('survei.store')
    ->middleware(['guest', 'throttle:3,1']);

// GET routes aman auto-refresh
Route::middleware(['throttle:batas_spam'])->group(function () { //'cache.response:300'

    Route::get('/app/buku-tamu', [BukuTamuController::class, 'index'])->name('buku.tamu.index');
    Route::get('/app/buku-tamu/login-admin', [BukuTamuController::class, 'showLogin'])->name('buku.tamu.login.index');
    Route::post('/app/buku-tamu/login-admin/store', [BukuTamuController::class, 'loginStore'])->name('buku.tamu.login.store');
    Route::middleware(['cekLogin.BukuTamu'])->group(function () {
        Route::get('/app/buku-tamu/dashboard', [BukuTamuController::class, 'dashboard'])->name('buku.tamu.dashboard.index');
        Route::get('/app/buku-tamu/dashboard/data', [BukuTamuController::class, 'getData'])->name('buku.tamu.dashboard.data');
        Route::delete('/app/buku-tamu/dashboard/destroy/{id}', [BukuTamuController::class, 'destroy'])->name('buku.tamu.dashboard.destroy');
        Route::post('/app/buku-tamu/store', [BukuTamuController::class, 'store'])->name('buku.tamu.store');
        Route::post('/app/buku-tamu/logout', [BukuTamuController::class, 'logout'])->name('buku.tamu.logout');
    });

    Route::get('/invoice/28354923', function () {
        return view('invoice');
    });

    // homepage
    Route::get('/', function () {
        // cache data saja, bukan view
        $data = Cache::remember('home_page_data', 300, function () {
            // jika homepage punya data lain, ambil di sini
            return [
                'title' => 'Homepage',
            ];
        });

        return view('index', $data);
    });

    // Aurum Dining
    Route::get('/template-ct/mp/1', function () {
        $menu_aurum_dining = Cache::remember('menu_aurum_dining_home', 300, function () {
            return MenuAurumDining::latest()->take(3)->get();
        });

        return view('multi_page.aurum-dining.aurum-dining', compact('menu_aurum_dining'));
    });

    Route::get('/template-ct/mp/1/menu', function () {
        $menu_aurum_dining = Cache::remember('menu_aurum_dining_all', 300, function () {
            return MenuAurumDining::all();
        });

        return view('multi_page.aurum-dining.menu', compact('menu_aurum_dining'));
    });

    Route::get('/template-ct/mp/1/galeri', function () {
        $menu_aurum_dining = Cache::remember('menu_aurum_dining_galeri', 300, function () {
            return MenuAurumDining::all();
        });

        return view('multi_page.aurum-dining.galeri', compact('menu_aurum_dining'));
    });

    // DA-Essemkasa
    Route::get('/da-esemkasa', fn() => view('multi_page.da-esemkasa.index'));
    Route::get('/da-esemkasa/kegiatan', fn() => view('multi_page.da-esemkasa.kegiatan'));
    Route::get('/da-esemkasa/berita', fn() => view('multi_page.da-esemkasa.berita'));
    Route::get('/da-esemkasa/galeri', fn() => view('multi_page.da-esemkasa.galeri'));
    Route::get('/da-esemkasa/berita/open-recruitmen-da-2025', fn() => view('multi_page.da-esemkasa.berita.open_recruitment_da_2025'));
    Route::get('/da-esemkasa/berita/PTA2025', fn() => view('multi_page.da-esemkasa.berita.PTA2025'));

    // Single Pages
    Route::get('/template-ct/sp/1', fn() => view('single_page.savana-digital'));
    Route::get('/template-ct/sp/2', fn() => view('single_page.usaha-kami'));
    Route::get('/template-ct/sp/3', fn() => view('single_page.noir-atelier'));
    Route::get('/template-ct/sp/4', fn() => view('single_page.bengkel-sejahtera'));
});
