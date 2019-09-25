<?php

use App\Models\CartItem;
use App\Models\Category;
use App\Models\Recommendation;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;


 function current_user() {
        return Auth::user();
 }
    function getCategories() {
       return Category::all();
    }
    function getWishListsCount() {
        if(!current_user()) {
            return null;
        }
        return Wishlist::where('user_id', current_user()->id)->count();
    }
    function getCartItemsCount() {
        if(!current_user()) {
            return null;
        }
        if(!current_user()->cart) {
            return 0;
        }
        return CartItem::where('cart_id', current_user()->cart->id )->count();
    }
    function getRecommendations() {
        $recommendations = Recommendation::where('user_id', current_user()->id)->limit(8)->orderBy('created_at', 'desc')->get();
        return $recommendations;
    }

