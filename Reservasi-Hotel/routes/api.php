<?php

use App\Http\Controllers\ReservasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('reservasi',[ReservasiController::class, 'getReservasi']);
Route::post('reservasi',[ReservasiController::class, 'storeReservasi']);