<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSportRequest;
use App\Http\Requests\UpdateSportRequest;
use App\Repositories\SportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SportController extends AppBaseController
{
    /** @var  SportRepository */
    private $sportRepository;

    public function __construct(SportRepository $sportRepo)
    {
        $this->sportRepository = $sportRepo;
    }

    /**
     * Display a listing of the Sport.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sports = $this->sportRepository->all();

        return view('sports.index')
            ->with('sports', $sports);
    }

    /**
     * Show the form for creating a new Sport.
     *
     * @return Response
     */
    public function create()
    {
        return view('sports.create');
    }

    /**
     * Store a newly created Sport in storage.
     *
     * @param CreateSportRequest $request
     *
     * @return Response
     */
    public function store(CreateSportRequest $request)
    {
        $input = $request->all();

        $sport = $this->sportRepository->create($input);

        Flash::success('Sport saved successfully.');

        return redirect(route('sports.index'));
    }

    /**
     * Display the specified Sport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sport = $this->sportRepository->find($id);

        if (empty($sport)) {
            Flash::error('Sport not found');

            return redirect(route('sports.index'));
        }

        return view('sports.show')->with('sport', $sport);
    }

    /**
     * Show the form for editing the specified Sport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sport = $this->sportRepository->find($id);

        if (empty($sport)) {
            Flash::error('Sport not found');

            return redirect(route('sports.index'));
        }

        return view('sports.edit')->with('sport', $sport);
    }

    /**
     * Update the specified Sport in storage.
     *
     * @param int $id
     * @param UpdateSportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSportRequest $request)
    {
        $sport = $this->sportRepository->find($id);

        if (empty($sport)) {
            Flash::error('Sport not found');

            return redirect(route('sports.index'));
        }

        $sport = $this->sportRepository->update($request->all(), $id);

        Flash::success('Sport updated successfully.');

        return redirect(route('sports.index'));
    }

    /**
     * Remove the specified Sport from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sport = $this->sportRepository->find($id);

        if (empty($sport)) {
            Flash::error('Sport not found');

            return redirect(route('sports.index'));
        }

        $this->sportRepository->delete($id);

        Flash::success('Sport deleted successfully.');

        return redirect(route('sports.index'));
    }
}
