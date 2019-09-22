<?php

namespace App\Repositories;

use App\Helpers\Helper;
use App\Models\CartItem;
use App\Models\Product;

/**
 * Class CartItemRepository
 * @package App\Repositories
 * @version September 20, 2019, 11:26 pm UTC
*/

class CartItemRepository extends BaseRepository
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

    private function getCartItemByProductId($productId) {
        $query = $this->model->newQuery();
        return $query->where('product_id', $productId)->first();

    }
    public function deleteCartItem($id) {
        $cartItem = $this->find($id);
        $cart = Helper::current_user()->cart;
        $cart->total -= $cartItem->price;
        $cart->save();
        return $cartItem->delete();
    }

    public function updateCartItem($id, $quantity, $productId) {
        $cartItem = $this->find($id);
        $cart = Helper::current_user()->cart;
        $product = Product::find($productId);
        if($quantity > $product->quantity) {
            return false;
        }
        $cartItem->quantity = $quantity;
        $cart->total -= $cartItem->price;
        $cartItem->price = $quantity * $product->price;
        $cartItem->save();
        $cart->total += $quantity * $product->price;
        $cart->save();
        return true;
    }

    public function addCartItem($cart, $product_id, $quantity) {
        $product = Product::findOrFail($product_id);
        $cartItem = $this->getCartItemByProductId($product_id);
        if($cartItem != null){
            $totalItemQuantity = $cartItem->quantity + $quantity;
            if($totalItemQuantity > 10) {
                return 'More than 10';
            }
            if($totalItemQuantity > $product->quantity){
                return 'Not enough';
            }
            $cartItem->quantity = $totalItemQuantity;
            $cartItem->price = $product->price * $totalItemQuantity;
            $cartItem->save();
            $cart->total += $quantity * $product->price;
            $cart->save();
            return 'Success';
        }
        if($quantity > $product->quantity) {
            return 'Not enough';
        }
        $price = $product->price * $quantity;
        $data = ['cart_id' => $cart->id, 'product_id' => $product->id, 'quantity' => $quantity, 'price' => $price];
        $this->create($data);
        $cart->total += $price;
        $cart->save();
        return 'Success';
    }
    /**
     * Configure the Model
     **/
    public function model()
    {
        return CartItem::class;
    }
}
