<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageSliderRequest;
use App\Http\Requests\UpdateImageSliderRequest;
use App\Repositories\ImageSlidersRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Repositories\MediaRepository;
use App\Models\ImageSlider;
use Illuminate\Http\Request;
use Flash;
use Response;

class ImageSliderController extends AppBaseController
{
    /** @var  ImageSlidersRepository */
    private $imageSlidersRepository;

    public function __construct(ImageSlidersRepository $imageSlidersRepo)
    {
        $this->imageSlidersRepository = $imageSlidersRepo;
    }

    /**
     * Display a listing of the ImageSliders.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $imageSliders = ImageSlider::all();

        return view('image_sliders.index', compact('imageSliders'));
    }

    /**
     * Show the form for creating a new ImageSliders.
     *
     * @return Response
     */
    public function create()
    {
        return view('image_sliders.create');
    }

    /**
     * Store a newly created ImageSliders in storage.
     *
     * @param CreateImageSlidersRequest $request
     *
     * @return Response
     */
    public function store(CreateImageSliderRequest $request)
    {
        $input = $request->all();

        $imageSlider = ImageSlider::create($input);

        for ($i = 1; $i <= 10; $i++) {
            MediaRepository::store($request, $imageSlider, $i, 'ImageSlider', 'ImageSlider');
        }

        Flash::success('Image Sliders saved successfully.');

        return redirect(route('imageSliders.index'));
    }

    /**
     * Display the specified ImageSliders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $imageSliders = $this->imageSlidersRepository->find($id);

        if (empty($imageSliders)) {
            Flash::error('Image Sliders not found');

            return redirect(route('imageSliders.index'));
        }

        $media = $imageSliders
            ->media()
            ->where('collection_name', 'ImageSlider')
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();

        return view('image_sliders.show', compact('media', 'imageSliders'));
    }

    /**
     * Show the form for editing the specified ImageSliders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(ImageSlider $imageSlider)
    {
        if (empty($imageSlider)) {
            Flash::error('Image Sliders not found');

            return redirect(route('imageSliders.index'));
        }

        $media = $imageSlider
        ->media()
        ->where('collection_name', 'ImageSlider')
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();

        return view('image_sliders.edit', compact('imageSlider', 'media'));
    }

    /**
     * Update the specified ImageSliders in storage.
     *
     * @param int $id
     * @param UpdateImageSlidersRequest $request
     *
     * @return Response
     */
    public function update(ImageSlider $imageSlider, UpdateImageSliderRequest $request)
    {
        if (empty($imageSlider)) {
            Flash::error('Image Sliders not found');

            return redirect(route('imageSliders.index'));
        }
        $imageSlider->fill($request->all());

        for ($i = 1; $i <= 10; $i++) {
            MediaRepository::store($request, $imageSlider, $i, 'imageSlider', 'imageSlider');
        }
        
        $imageSlider->save();
    
        Flash::success('Image Sliders updated successfully.');

        return redirect(route('imageSliders.index'));
    }

    /**
     * Remove the specified ImageSliders from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $imageSliders = $this->imageSlidersRepository->find($id);

        if (empty($imageSliders)) {
            Flash::error('Image Sliders not found');

            return redirect(route('imageSliders.index'));
        }

        $this->imageSlidersRepository->delete($id);

        Flash::success('Image Sliders deleted successfully.');

        return redirect(route('imageSliders.index'));
    }
}
