<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Address
 * @package App\Models
 * @version September 22, 2019, 12:03 pm UTC
 *
 * @property string country
 * @property integer street_address
 * @property string city
 * @property integer postcode
 */
class Address extends Model
{
    use SoftDeletes;

    public $table = 'addresses';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'country',
        'street_address',
        'city',
        'state',
        'postcode',
        'default'
    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'country' => 'string',
        'street_address' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postcode' => 'integer'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function order() {
        return $this->hasOne('App\Models\Order');
    }
}
