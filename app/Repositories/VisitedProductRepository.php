<?php

namespace App\Repositories;

use App\Models\VisitedProduct;
use App\Repositories\BaseRepository;

/**
 * Class VisitedProductRepository
 * @package App\Repositories
 * @version September 24, 2019, 7:08 pm UTC
*/

class VisitedProductRepository extends BaseRepository
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
        return VisitedProduct::class;
    }
}
