<?php

namespace App\Repositories;

use App\Models\Address;
use App\Models\CartItem;
use App\Models\Order;
use App\Repositories\BaseRepository;

/**
 * Class OrderRepository
 * @package App\Repositories
 * @version September 23, 2019, 3:03 pm UTC
*/

class OrderRepository extends BaseRepository
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



    public function createOrder($user) {
        $itemCount = CartItem::where('cart_id', $user->cart->id)->count();
        $address = Address::where('user_id', $user->id)->where('default', true)->first();
        $order = $this->create(['user_id' => $user->id, 'status' => 'Processing','total' => $user->cart->total, 'items' => $itemCount
        , 'address_id' => $address->id]);
        return $order;
    }

    public function model()
    {
        return Order::class;
    }
}
