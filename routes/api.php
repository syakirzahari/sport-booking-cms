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
Route::resource('privacy-policy', PrivacyAPIController::class)->only(['index']);
Route::resource('about-us', AboutUsAPIController::class)->only(['index']);

Route::get('sport_types', function () {
    return App\Models\Xref\Sport::select('id', 'name')->get();
});  
   
Route::middleware('auth:sanctum')->group( function () {
    Route::resource('venues', VenueAPIController::class)->only(['index']);
    Route::resource('football-venues', FootballVenueAPIController::class)->only(['index']);
    Route::resource('futsal-venues', FutsalVenueAPIController::class)->only(['index']);
    Route::resource('badminton-venues',BadmintonVenueAPIController::class)->only(['index']);
    Route::resource('users',UserProfileAPIController::class)->only(['index']);
    Route::resource('contact_us', ContactAPIController::class)->only(['store']);
    Route::resource('update_password', Auth\ResetPasswordAPIController::class)->only(['store']);
    Route::get('image-sliders', [App\Http\Controllers\API\SliderAPIController::class, 'index'])->name('api.slider.index');
    Route::post('feedback', [App\Http\Controllers\API\FeedbackAPIController::class, 'store'])->name('api.feedback.store');
    Route::post('slot-availability', [App\Http\Controllers\API\SlotAvailabilityAPIController::class, 'store']);
    Route::post('booking', [App\Http\Controllers\API\BookingAPIController::class, 'store'])->name('booking.store');
    Route::get('upcoming-booking', [App\Http\Controllers\API\UpcomingBookingAPIController::class, 'index'])->name('upcoming_booking.index');
    Route::get('past-booking', [App\Http\Controllers\API\PastBookingAPIController::class, 'index'])->name('past_booking.index');
    Route::get('find-opponent', [App\Http\Controllers\API\FindOpponentAPIController::class, 'index'])->name('find_opponent.index');
});







