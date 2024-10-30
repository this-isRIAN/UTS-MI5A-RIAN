<?php

use App\Http\Controllers\ReservasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('reservasi',ReservasiController::class);
