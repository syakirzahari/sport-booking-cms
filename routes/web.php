<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('states', App\Http\Controllers\StateController::class);


Route::resource('districts', App\Http\Controllers\DistrictController::class);


Route::resource('sports', App\Http\Controllers\SportController::class);


Route::resource('venues', App\Http\Controllers\VenueController::class);
