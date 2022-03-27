<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\SlotAvailability;

class SlotAvailabilityAPIController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];

        $data = SlotAvailability::with('venueSlot', 'venueSlot.venue')
                ->whereHas('venueSlot', function ($q) use ($request) {
                    $q->where('sport_id', $request->sport_id)
                       ->where('venue_id', $request->venue_id);
                })
                ->where('date', $request->date)
                ->where('is_available', 1)
                ->get();

        return $this->sendResponse($data, 'Slot venue retrieved successfully.');
    }
}