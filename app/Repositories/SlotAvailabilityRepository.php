<?php

namespace App\Repositories;

use App\Models\SlotAvailability;
use App\Repositories\BaseRepository;

/**
 * Class Slot_AvailabilityRepository
 * @package App\Repositories
 * @version February 20, 2022, 3:50 pm UTC
*/

class SlotAvailabilityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date',
        'time_from',
        'time_to',
        'rate'
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
        return SlotAvailability::class;
    }
}
