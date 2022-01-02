<?php

namespace App\Repositories;

use App\Models\SportVenue;
use App\Repositories\BaseRepository;

/**
 * Class SportVenueRepository
 * @package App\Repositories
 * @version January 2, 2022, 2:56 pm UTC
*/

class SportVenueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sport_id',
        'venue_id',
        'time_from',
        'time_to',
        'creator_id'
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
        return SportVenue::class;
    }
}
