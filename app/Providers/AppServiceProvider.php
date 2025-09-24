<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('batas_spam', function (Request $request) {
            // contoh lebih ketat: 10 request per 10 menit per IP
            return Limit::perMinutes(10, 10)->by($request->ip());
        });
    }
}
