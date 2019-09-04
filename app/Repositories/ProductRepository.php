<?php

namespace App\Repositories;

use App\Helper\Helper;
use App\Models\Photo;
use App\Models\Product;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version September 1, 2019, 9:38 am UTC
*/

class ProductRepository extends BaseRepository
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

    public function createPhotosForProduct($product, $photos){
        foreach ($photos as $photo){
            $path = Helper::upload($photo, 'images');
            $product->photos()->create(['url' => $path]);
        }
        return $product;
    }

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
