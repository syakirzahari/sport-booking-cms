<?php

namespace App\Repositories;

use App\Models\Feedback;
use App\Repositories\BaseRepository;

/**
 * Class FeedbackRepository
 * @package App\Repositories
 * @version January 14, 2022, 5:26 pm UTC
*/

class FeedbackRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'created_by',
        'is_replied'
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
        return Feedback::class;
    }
}
