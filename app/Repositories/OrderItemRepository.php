<?php

namespace App\Repositories;

use App\Models\OrderItem;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class OrderItemRepository
 * @package App\Repositories
 * @version September 23, 2019, 3:03 pm UTC
*/

class OrderItemRepository extends BaseRepository
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
        return OrderItem::class;
    }

    public function createOrderItem($user, $order) {
        $cartItems = $user->cart->cartItems;
        foreach ($cartItems as $cartItem) {
            $this->create(['product_id' => $cartItem->product->id,
                'order_id' => $order->id, 'quantity' => $cartItem->quantity, 'total_price' => $cartItem->price]);
        }
    }
}
