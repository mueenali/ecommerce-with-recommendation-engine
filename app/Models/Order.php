<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package App\Models
 * @version September 23, 2019, 2:50 pm UTC
 *
 */
class Order extends Model
{
    use SoftDeletes;

    public $table = 'orders';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'total',
        'status',
        'items',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function orderItems() {
        return $this->hasMany('App\Models\OrderItem');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
