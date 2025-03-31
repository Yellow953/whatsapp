<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::post('/create', [HomeController::class, 'create']);
Route::get('/', [HomeController::class, 'index']);
