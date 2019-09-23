<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Review
 * @package App\Models
 * @version September 23, 2019, 7:15 pm UTC
 *
 */
class Review extends Model
{
    use SoftDeletes;

    public $table = 'reviews';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'product_id',
        'review',
        'rating'
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

}
