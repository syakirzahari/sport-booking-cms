<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Booking;
use Carbon\Carbon;

class FindOpponentAPIController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $oppo = Booking::with('slot', 'venue', 'slotAvailability', 'bookedBy')
                        ->where('is_no_opponent', 1)
                        ->whereHas('slotAvailability', function ($q) {
                            return $q->whereDate('date', '>=', Carbon::today()->toDateString());
                        })
                        ->get();


      return $this->sendResponse($oppo, 'Find Opponent retrieved successfully.');

    }
}