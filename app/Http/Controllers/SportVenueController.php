<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSportVenueRequest;
use App\Http\Requests\UpdateSportVenueRequest;
use App\Repositories\SportVenueRepository;
use App\Models\Venue;
use App\Models\Xref\Sport;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SportVenueController extends AppBaseController
{
    /** @var  SportVenueRepository */
    private $sportVenueRepository;

    public function __construct(SportVenueRepository $sportVenueRepo)
    {
        $this->sportVenueRepository = $sportVenueRepo;
    }

    /**
     * Display a listing of the SportVenue.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sportVenues = $this->sportVenueRepository->all();

        return view('sport_venues.index')
            ->with('sportVenues', $sportVenues);
    }

    /**
     * Show the form for creating a new SportVenue.
     *
     * @return Response
     */
    public function create()
    {
        $sports = Sport::pluck('name', 'id')->prepend('Select Sports');
        $venues = Venue::pluck('name', 'id')->prepend('Select Venue');

        return view('sport_venues.create', compact('sports', 'venues'));
    }

    /**
     * Store a newly created SportVenue in storage.
     *
     * @param CreateSportVenueRequest $request
     *
     * @return Response
     */
    public function store(CreateSportVenueRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->user()->id;

        $sportVenue = $this->sportVenueRepository->create($input);

        Flash::success('Sport Venue saved successfully.');

        return redirect(route('sportVenues.index'));
    }

    /**
     * Display the specified SportVenue.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sportVenue = $this->sportVenueRepository->find($id);

        if (empty($sportVenue)) {
            Flash::error('Sport Venue not found');

            return redirect(route('sportVenues.index'));
        }

        return view('sport_venues.show')->with('sportVenue', $sportVenue);
    }

    /**
     * Show the form for editing the specified SportVenue.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sportVenue = $this->sportVenueRepository->find($id);
        $sports = Sport::pluck('name', 'id')->prepend('Select Sports');
        $venues = Venue::pluck('name', 'id')->prepend('Select Venue');

        if (empty($sportVenue)) {
            Flash::error('Sport Venue not found');

            return redirect(route('sportVenues.index'));
        }

        return view('sport_venues.edit', compact('sportVenue', 'sports', 'venues'));
    }

    /**
     * Update the specified SportVenue in storage.
     *
     * @param int $id
     * @param UpdateSportVenueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSportVenueRequest $request)
    {
        $sportVenue = $this->sportVenueRepository->find($id);

        if (empty($sportVenue)) {
            Flash::error('Sport Venue not found');

            return redirect(route('sportVenues.index'));
        }

        $sportVenue = $this->sportVenueRepository->update($request->all(), $id);

        Flash::success('Sport Venue updated successfully.');

        return redirect(route('sportVenues.index'));
    }

    /**
     * Remove the specified SportVenue from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sportVenue = $this->sportVenueRepository->find($id);

        if (empty($sportVenue)) {
            Flash::error('Sport Venue not found');

            return redirect(route('sportVenues.index'));
        }

        $this->sportVenueRepository->delete($id);

        Flash::success('Sport Venue deleted successfully.');

        return redirect(route('sportVenues.index'));
    }
}
