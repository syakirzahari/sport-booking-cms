<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Booking;
use Carbon\Carbon;

class UpcomingBookingAPIController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $upcoming = Booking::where('booked_by', auth()->user()->id)->with('slot', 'venue', 'slotAvailability')
                        ->whereHas('slotAvailability', function ($q) {
                            return $q->whereDate('date', '>=', Carbon::today()->toDateString());
                        })
                        ->get();


      return $this->sendResponse($upcoming, 'Upcoming Booking retrieved successfully.');

    }
}