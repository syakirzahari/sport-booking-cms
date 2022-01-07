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

Route::get('', fn() => redirect(route('login')));

Auth::routes();
// Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::resource('states', App\Http\Controllers\StateController::class);
    
    
    Route::resource('districts', App\Http\Controllers\DistrictController::class);
    
    
    Route::resource('sports', App\Http\Controllers\SportController::class);
    
    
    Route::resource('venues', App\Http\Controllers\VenueController::class);
    
    
    Route::resource('articles', App\Http\Controllers\ArticleController::class);
    
    Route::resource('users', App\Http\Controllers\UserController::class);
    
    
    Route::resource('sportVenues', App\Http\Controllers\SportVenueController::class);
    
    
    Route::resource('vendors', App\Http\Controllers\VendorController::class);
});


