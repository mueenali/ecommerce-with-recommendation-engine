<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WishlistItem
 * @package App\Models
 * @version September 16, 2019, 8:43 pm UTC
 *
 * @property integer wishlist_id
 * @property integer product_id
 */
class WishlistItem extends Model
{
    use SoftDeletes;

    public $table = 'wishlist_items';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'wishlist_id',
        'product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'wishlist_id' => 'integer',
        'product_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'wishlist_id' => 'required',
        'product_id' => 'required'
    ];

    
}
