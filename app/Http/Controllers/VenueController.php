<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVenueRequest;
use App\Http\Requests\UpdateVenueRequest;
use App\Repositories\VenueRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Repositories\MediaRepository;
use App\Models\User;
use App\Models\Xref\Vendor;
use App\Models\Xref\District;
use App\Models\Xref\State;
use Illuminate\Http\Request;
use Flash;
use Response;

class VenueController extends AppBaseController
{
    /** @var  VenueRepository */
    private $venueRepository;

    public function __construct(VenueRepository $venueRepo)
    {
        $this->venueRepository = $venueRepo;
    }

    /**
     * Display a listing of the Venue.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $venues = $this->venueRepository->all();

        return view('venues.index')
            ->with('venues', $venues);
    }

    /**
     * Show the form for creating a new Venue.
     *
     * @return Response
     */
    public function create()
    {
        $owner = User::pluck('name', 'id')->prepend('Select Owner');
        $districts = District::pluck('name', 'id')->prepend('Select District');
        $states = State::pluck('name', 'id')->prepend('Select State');
        $vendors = Vendor::pluck('name', 'id')->prepend('Select Vendor');

        return view('venues.create', compact('owner', 'districts', 'states', 'vendors'));
    }

    /**
     * Store a newly created Venue in storage.
     *
     * @param CreateVenueRequest $request
     *
     * @return Response
     */
    public function store(CreateVenueRequest $request)
    {
        $input = $request->all();

        $venue = $this->venueRepository->create($input);

        for ($i = 1; $i <= 10; $i++) {
            MediaRepository::store($request, $venue, $i, 'venue', 'venue');
        }

        Flash::success('Venue saved successfully.');

        return redirect(route('venues.index'));
    }

    /**
     * Display the specified Venue.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $venue = $this->venueRepository->find($id);

         // $this->authorize('update');
         $media = $venue
         ->media()
         ->where('collection_name', 'venue')
         ->orderBy('created_at', 'desc')
         ->limit(1)
         ->get();
 
 

        if (empty($venue)) {
            Flash::error('Venue not found');

            return redirect(route('venues.index'));
        }

        return view('venues.show', compact('venue', 'media'));
    }

    /**
     * Show the form for editing the specified Venue.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $venue = $this->venueRepository->find($id);
        $owner = User::pluck('name', 'id')->all();
        $districts = District::pluck('name', 'id')->all();
        $states = State::pluck('name', 'id')->all();
        $vendors = Vendor::pluck('name', 'id')->all();

        if (empty($venue)) {
            Flash::error('Venue not found');

            return redirect(route('venues.index'));
        }

        return view('venues.edit', compact('owner', 'venue', 'districts', 'states', 'vendors'));
    }

    /**
     * Update the specified Venue in storage.
     *
     * @param int $id
     * @param UpdateVenueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVenueRequest $request)
    {
        $venue = $this->venueRepository->find($id);

        if (empty($venue)) {
            Flash::error('Venue not found');

            return redirect(route('venues.index'));
        }

        for ($i = 1; $i <= 10; $i++) {
            MediaRepository::store($request, $venue, $i, 'venue', 'venue');
        }

        $venue = $this->venueRepository->update($request->all(), $id);

        $toDeleteIds = $request->mediaTodelete;
        // dd($toDeleteIds);
        if($request->has('mediaTodelete')){
            $mediaTodelete = \App\Models\Media::where('id', $toDeleteIds)->delete();
        }


        Flash::success('Venue updated successfully.');

        return redirect(route('venues.index'));
    }

    /**
     * Remove the specified Venue from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $venue = $this->venueRepository->find($id);

        if (empty($venue)) {
            Flash::error('Venue not found');

            return redirect(route('venues.index'));
        }

        $this->venueRepository->delete($id);

        Flash::success('Venue deleted successfully.');

        return redirect(route('venues.index'));
    }
}
