<?php

namespace App\Repositories;

use App\Helpers\Helper;
use App\Models\Cart;
use App\Repositories\BaseRepository;

/**
 * Class CartRepository
 * @package App\Repositories
 * @version September 20, 2019, 11:26 pm UTC
*/

class CartRepository extends BaseRepository
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

    public function hasCart() {
        $userId = Helper::current_user()->id;
        $cart = $this->model->newQuery()->where('user_id',$userId )->firstOrCreate(['user_id' => $userId]);
        return $cart;
    }
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cart::class;
    }
}
