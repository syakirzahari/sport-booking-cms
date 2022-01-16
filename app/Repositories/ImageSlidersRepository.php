<?php

namespace App\Repositories;

use App\Models\ImageSlider;
use App\Repositories\BaseRepository;

/**
 * Class ImageSlidersRepository
 * @package App\Repositories
 * @version January 16, 2022, 10:31 am UTC
*/

class ImageSlidersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'is_active'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ImageSlider::class;
    }
}
