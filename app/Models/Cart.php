<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cart
 * @package App\Models
 * @version September 20, 2019, 10:50 pm UTC
 *
 * @property integer user_id
 * @property number total
 */
class Cart extends Model
{
    use SoftDeletes;

    public $table = 'carts';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'total' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function cartItems() {
        return $this->hasMany('App\Models\CartItem');
    }


}
