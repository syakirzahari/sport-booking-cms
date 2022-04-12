<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Booking;
   
class PastBookingAPIController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $past = Booking::where('booked_by', auth()->user()->id)->with('slot', 'venue', 'slotAvailability')
                ->whereHas('slotAvailability', function ($q) {
                    return $q->whereDate('date', '<', Carbon::today()->toDateString());
                })
                ->get();


        return $this->sendResponse($past, 'Past Booking retrieved successfully.'); 
    }
}