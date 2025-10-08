<?php

namespace App\Http\Middleware\appMiddleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CekLoginBukuTamu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('buku.tamu.login.index')->with('error', 'Silakan login terlebih dahulu.');
        }
        return $next($request);
    }
}
