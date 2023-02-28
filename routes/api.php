<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('trips', [\App\Http\Controllers\Api\TripController::class, 'index']);
Route::get('/trips/available-seats', [\App\Http\Controllers\Api\TripController::class, 'availableSeats']);
