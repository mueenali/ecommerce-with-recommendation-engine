<?php

namespace App\Repositories;

use App\Models\SubCategory;
use App\Repositories\BaseRepository;

/**
 * Class SubCategoryRepository
 * @package App\Repositories
 * @version September 5, 2019, 3:40 pm UTC
*/

class SubCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return SubCategory::class;
    }
}
