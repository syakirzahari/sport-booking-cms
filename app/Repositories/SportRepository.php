<?php

namespace App\Repositories;

use App\Models\Xref\Sport;
use App\Repositories\BaseRepository;

/**
 * Class SportRepository
 * @package App\Repositories
 * @version January 2, 2022, 1:15 pm UTC
*/

class SportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Sport::class;
    }
}
