<?php

namespace App\Repositories;

use App\Helpers\Helper;
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

    public function updateQuantity ($user) {
        $cartItems = $user->cart->cartItems;
        foreach ($cartItems as $cartItem) {
            $product = $cartItem->product;
            $product->quantity -= $cartItem->quantity;
            $product->times_bought += 1;
            $product->save();
        }
    }
}
