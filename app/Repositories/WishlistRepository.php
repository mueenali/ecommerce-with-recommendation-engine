<?php

namespace App\Repositories;

use App\Models\Wishlist;
use App\Repositories\BaseRepository;

/**
 * Class WishlistRepository
 * @package App\Repositories
 * @version September 18, 2019, 4:24 am UTC
*/

class WishlistRepository extends BaseRepository
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
        return Wishlist::class;
    }
}
