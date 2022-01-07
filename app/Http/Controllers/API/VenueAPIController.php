<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Venue;
use App\Libraries\SportMenuDataPreparation;
use Validator;
   
class VenueAPIController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sport_id = $request->sport_id;
        $data = [];

        $venues = Venue::select('*')
                    ->join('sport_venues', 'sport_venues.venue_id', '=', 'venues.id')
                    ->where('sport_venues.sport_id', $sport_id)
                    ->get();
    
        foreach ($venues as $venues) {
            $data[] = SportMenuDataPreparation::fetchSingle($venues);
        }

        return $this->sendResponse($data, 'Venues retrieved successfully.');
    }
}