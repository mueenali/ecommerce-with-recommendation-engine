<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrderItem
 * @package App\Models
 * @version September 23, 2019, 3:01 pm UTC
 *
 */
class OrderItem extends Model
{
    use SoftDeletes;

    public $table = 'order_items';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_id',
        'order_id',
        'quantity',
        'total_price'
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

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }
    public function order() {
        return $this->belongsTo('App\Models\Order');
    }
}
