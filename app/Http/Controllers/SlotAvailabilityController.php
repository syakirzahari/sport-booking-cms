<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSlotAvailabilityRequest;
use App\Http\Requests\UpdateSlotAvailabilityRequest;
use App\Repositories\SlotAvailabilityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\SlotAvailability;
use App\Models\Slot;
use Flash;
use Response;

class SlotAvailabilityController extends AppBaseController
{
    /** @var  SlotAvailabilityRepository */
    private $slotAvailabilityRepository;

    public function __construct(SlotAvailabilityRepository $slotAvailabilityRepo)
    {
        $this->slotAvailabilityRepository = $slotAvailabilityRepo;
    }

    /**
     * Display a listing of the Slot_Availability.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $slotAvailabilities = SlotAvailability::where('venue_slot_id', request()->venue_slot_id)->get();

        if($request->ajax())
    	{
    		// $data = Event::whereDate('start', '>=', $request->start)
            //            ->whereDate('end',   '<=', $request->end)
            //            ->get(['id', 'title', 'start', 'end']);
            // return response()->json($data);
    	}

        $details = Slot::where('id', request()->venue_slot_id)->first();

        return view('slot_availabilities.index', compact('slotAvailabilities', 'details'));
    }

    /**
     * Show the form for creating a new Slot_Availability.
     *
     * @return Response
     */
    public function create()
    {
        $venue_slot_id = request()->venue_slot_id ?? '';

        return view('slot_availabilities.create', compact('venue_slot_id'));
    }

    /**
     * Store a newly created Slot_Availability in storage.
     *
     * @param CreateSlot_AvailabilityRequest $request
     *
     * @return Response
     */
    public function store(CreateSlotAvailabilityRequest $request)
    {
        $input = $request->all();
        $input['is_available'] = 1;

        if ($input['venue_slot_id'] == 'null') {
            unset($input['venue_slot_id']);
        }

        $slotAvailability = $this->slotAvailabilityRepository->create($input);

        Flash::success('Slot Availability saved successfully.');

        return redirect(route('slotAvailabilities.index', ['venue_slot_id' => $slotAvailability->venue_slot_id]));
    }

    /**
     * Display the specified Slot_Availability.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slotAvailability = $this->slotAvailabilityRepository->find($id);

        if (empty($slotAvailability)) {
            Flash::error('Slot Availability not found');

            return redirect(route('slotAvailabilities.index'));
        }

        return view('slot_availabilities.show')->with('slotAvailability', $slotAvailability);
    }

    /**
     * Show the form for editing the specified Slot_Availability.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $venue_slot_id = request()->venue_slot_id ?? '';

        $slotAvailability = $this->slotAvailabilityRepository->find($id);

        if (empty($slotAvailability)) {
            Flash::error('Slot Availability not found');

            return redirect(route('slotAvailabilities.index'));
        }

        return view('slot_availabilities.edit')->with('slotAvailability', $slotAvailability);
    }

    /**
     * Update the specified Slot_Availability in storage.
     *
     * @param int $id
     * @param UpdateSlotAvailabilityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSlotAvailabilityRequest $request)
    {
        $slotAvailability = $this->slotAvailabilityRepository->find($id);

        if (empty($slotAvailability)) {
            Flash::error('Slot Availability not found');

            return redirect(route('slotAvailabilities.index'));
        }

        $slotAvailability = $this->slotAvailabilityRepository->update($request->all(), $id);

        Flash::success('Slot Availability updated successfully.');

        return redirect(route('slotAvailabilities.index'));
    }

    /**
     * Remove the specified Slot_Availability from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slotAvailability = $this->slotAvailabilityRepository->find($id);

        if (empty($slotAvailability)) {
            Flash::error('Slot Availability not found');

            return redirect(route('slotAvailabilities.index'));
        }

        $this->slotAvailabilityRepository->delete($id);

        Flash::success('Slot Availability deleted successfully.');

        return redirect(route('slotAvailabilities.index'));
    }
}
