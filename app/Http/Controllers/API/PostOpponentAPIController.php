<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBookingAPIRequest;
use App\Http\Requests\API\UpdateBookingAPIRequest;
use App\Models\Booking;
use App\Repositories\BookingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\BookingResource;
use Response;

/**
 * Class BookingController
 * @package App\Http\Controllers\API
 */

class PostOpponentAPIController extends AppBaseController
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $booking = Booking::find($input['booking_id']);

        $booking->locked_by = auth()->user()->id;
        $booking->opponent_Team_name = $input['opponent_team_name'];
        $booking->save();

        return $this->sendResponse($booking->toArray(), 'success', 'Opponent save successfully.');
    }
}
