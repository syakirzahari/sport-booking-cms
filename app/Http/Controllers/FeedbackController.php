<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Repositories\FeedbackRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FeedbackController extends AppBaseController
{
    /** @var  FeedbackRepository */
    private $feedbackRepository;

    public function __construct(FeedbackRepository $feedbackRepo)
    {
        $this->feedbackRepository = $feedbackRepo;
    }

    /**
     * Display a listing of the Feedback.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $feedback = $this->feedbackRepository->all();

        return view('feedbacks.index')
            ->with('feedback', $feedback);
    }

    /**
     * Show the form for creating a new Feedback.
     *
     * @return Response
     */
    public function create()
    {
        return view('feedbacks.create');
    }

    /**
     * Store a newly created Feedback in storage.
     *
     * @param CreateFeedbackRequest $request
     *
     * @return Response
     */
    public function store(CreateFeedbackRequest $request)
    {
        $input = $request->all();

        $feedback = $this->feedbackRepository->create($input);

        Flash::success('Feedback saved successfully.');

        return redirect(route('feedbacks.index'));
    }

    /**
     * Display the specified Feedback.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $feedback = $this->feedbackRepository->find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedbacks.index'));
        }

        return view('feedbacks.show')->with('feedback', $feedback);
    }

    /**
     * Show the form for editing the specified Feedback.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $feedback = $this->feedbackRepository->find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedbacks.index'));
        }

        return view('feedbacks.edit')->with('feedback', $feedback);
    }

    /**
     * Update the specified Feedback in storage.
     *
     * @param int $id
     * @param UpdateFeedbackRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeedbackRequest $request)
    {
        $feedback = $this->feedbackRepository->find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedbacks.index'));
        }

        $feedback = $this->feedbackRepository->update($request->all(), $id);

        Flash::success('Feedback updated successfully.');

        return redirect(route('feedbacks.index'));
    }

    /**
     * Remove the specified Feedback from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $feedback = $this->feedbackRepository->find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedbacks.index'));
        }

        $this->feedbackRepository->delete($id);

        Flash::success('Feedback deleted successfully.');

        return redirect(route('feedbacks.index'));
    }
}
