<?php

use Illuminate\Http\Request;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [App\Http\Controllers\API\Auth\RegisterAPIController::class, 'register']);
Route::post('login', [App\Http\Controllers\API\Auth\LoginAPIController::class, 'login']);
     
Route::middleware('auth:sanctum')->group( function () {
    Route::resource('football-venues', FootballVenueAPIController::class)->only(['index']);
    Route::resource('futsal-venues', FutsalVenueAPIController::class)->only(['index']);
    Route::resource('badminton-venues',BadmintonVenueAPIController::class)->only(['index']);
});
