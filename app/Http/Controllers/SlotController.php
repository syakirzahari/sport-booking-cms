<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSlotRequest;
use App\Http\Requests\UpdateSlotRequest;
use App\Repositories\SlotsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Slot;
use App\Models\SportVenue;
use Flash;
use Response;

class SlotController extends AppBaseController
{
    /** @var  SlotsRepository */
    private $slotsRepository;

    public function __construct(SlotsRepository $slotsRepo)
    {
        $this->slotsRepository = $slotsRepo;
    }

    /**
     * Display a listing of the Slots.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $slots = Slot::where('venue_id', request()->venue_id)
                ->where('sport_id', request()->sport_id)
                ->get();

        $details = SportVenue::where('venue_id', request()->venue_id)->first();

        return view('slots.index', compact('slots', 'details'));
    }

    /**
     * Show the form for creating a new Slots.
     *
     * @return Response
     */
    public function create()
    {
        $venue_id = request()->venue_id ?? '';
        $sport_id = request()->sport_id ?? '';

        return view('slots.create', compact('venue_id', 'sport_id'));
    }

    /**
     * Store a newly created Slots in storage.
     *
     * @param CreateSlotsRequest $request
     *
     * @return Response
     */
    public function store(CreateSlotRequest $request)
    {
        $input = $request->all();
                
        if ($input['venue_id'] == 'null' && $input['sport_id'] == 'null') {
            unset($input['venue_id']);
            unset($input['sport_id']);
        }

        $slots = $this->slotsRepository->create($input);

        Flash::success('Slots saved successfully.');

        return redirect(route('slots.index', ['venue_id' => $slots->venue_id, 'sport_id' => $slots->sport_id]));
    }

    /**
     * Display the specified Slots.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slots = $this->slotsRepository->find($id);

        if (empty($slots)) {
            Flash::error('Slots not found');

            return redirect(route('slots.index'));
        }

        return view('slots.show')->with('slots', $slots);
    }

    /**
     * Show the form for editing the specified Slots.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slots = $this->slotsRepository->find($id);

        if (empty($slots)) {
            Flash::error('Slots not found');

            return redirect(route('slots.index'));
        }

        return view('slots.edit')->with('slots', $slots);
    }

    /**
     * Update the specified Slots in storage.
     *
     * @param int $id
     * @param UpdateSlotsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSlotRequest $request)
    {
        $slots = $this->slotsRepository->find($id);

        if (empty($slots)) {
            Flash::error('Slots not found');

            return redirect(route('slots.index'));
        }

        $slots = $this->slotsRepository->update($request->all(), $id);

        Flash::success('Slots updated successfully.');

        return redirect(route('slots.index'));
    }

    /**
     * Remove the specified Slots from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slots = $this->slotsRepository->find($id);

        if (empty($slots)) {
            Flash::error('Slots not found');

            return redirect(route('slots.index'));
        }

        $this->slotsRepository->delete($id);

        Flash::success('Slots deleted successfully.');

        return redirect(route('slots.index'));
    }
}
