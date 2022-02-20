<?php

namespace App\Repositories;

use App\Models\Slot;
use App\Repositories\BaseRepository;

/**
 * Class SlotsRepository
 * @package App\Repositories
 * @version February 20, 2022, 4:36 am UTC
*/

class SlotsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sport_id',
        'venue_id',
        'court_name'
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
        return Slot::class;
    }
}
