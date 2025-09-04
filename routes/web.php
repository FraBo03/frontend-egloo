<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WinehouseController;

Route::get('/winehouses', [WinehouseController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
