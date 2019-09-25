<?php

namespace App\Repositories;

use App\Models\Recommendation;
use App\Repositories\BaseRepository;

/**
 * Class RecommendationRepository
 * @package App\Repositories
 * @version September 24, 2019, 7:08 pm UTC
*/

class RecommendationRepository extends BaseRepository
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
        return Recommendation::class;
    }
}
