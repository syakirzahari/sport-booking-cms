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

class BookingAPIController extends AppBaseController
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['booked_by'] = auth()->user()->id;

        $booking = Booking::create($input);

        return $this->sendResponse($booking->toArray(), 'success', 'Booking save successfully.');
    }
}
