<?php


namespace App\Helpers;


use App\Models\CartItem;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class Helper
{

    public static function current_user () {
        return Auth::user();
    }

    public static function getCategories() {
       return Category::all();
    }

    public static function getWishListsCount () {
        if(!self::current_user()) {
            return null;
        }
        return Wishlist::where('user_id', self::current_user()->id)->count();
    }

    public static function getCartItemsCount() {
        if(!self::current_user()) {
            return null;
        }
        if(!self::current_user()->cart) {
            return 0;
        }
        return CartItem::where('cart_id',self::current_user()->cart->id )->count();
    }
}
