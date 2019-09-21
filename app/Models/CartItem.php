<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CartItem
 * @package App\Models
 * @version September 20, 2019, 10:56 pm UTC
 *
 * @property integer cart_id
 * @property integer product_id
 * @property integer quantity
 * @property number price
 */
class CartItem extends Model
{
    use SoftDeletes;

    public $table = 'cart_items';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cart_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer',
        'price' => 'double'
    ];

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

    public function cart() {
        return $this->belongsTo('App\Models\Cart');
    }

}
