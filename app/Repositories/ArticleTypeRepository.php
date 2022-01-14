<?php

namespace App\Repositories;

use App\Models\Xref\ArticleType;
use App\Repositories\BaseRepository;

/**
 * Class ArticleTypesRepository
 * @package App\Repositories
 * @version January 14, 2022, 6:01 pm UTC
*/

class ArticleTypeRepository extends BaseRepository
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
        return ArticleType::class;
    }
}
