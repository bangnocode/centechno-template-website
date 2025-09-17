<?php

use App\Http\Controllers\SurveiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/survei', [SurveiController::class, 'index']);