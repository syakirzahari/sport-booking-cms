<?php

namespace App\Repositories;

use App\Models\Venue;
use App\Repositories\BaseRepository;

/**
 * Class VenueRepository
 * @package App\Repositories
 * @version January 2, 2022, 1:19 pm UTC
*/

class VenueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'district_id',
        'state_id',
        'lat',
        'lng',
        'owner_id'
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
        return Venue::class;
    }
}
