<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Wishlist
 * @package App\Models
 * @version September 16, 2019, 7:51 pm UTC
 *
 * @property integer user_id
 */
class Wishlist extends Model
{
    use SoftDeletes;

    public $table = 'wishlists';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer'
        ,'product_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'product_id' => 'required'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

}
