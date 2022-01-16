<?php

namespace App\Http\Controllers\API;

use App\Models\ImageSlider;
use App\Http\Repositories\MediaRepository;
use App\Libraries\ImageSliderDataPreparation;
use App\Http\Controllers\AppBaseController;
use Response;
use Flash;

class SliderAPIController extends AppBaseController
{
    /**
     * Display a listing of the Article.
     *
     * @param NewsDataTable $articleDataTable
     * @return Response
     */
    public function index()
    {
        $data = [];

        $slider = ImageSlider::where('is_active', 1)->get();

        foreach ($slider as $slider) {
            $data[] = ImageSliderDataPreparation::fetchSingle($slider);
        }

        return $this->sendResponse($data, 'Success');

    }
}
