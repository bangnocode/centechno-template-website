<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/product', function () {
    return response()->json([
        'status' => 'success',
        'data' => 'opo ae bi bi',
    ], 200);
});