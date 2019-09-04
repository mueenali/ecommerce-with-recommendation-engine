<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Photo
 * @package App\Models
 * @version September 1, 2019, 9:32 am UTC
 *
 * @property string url
 * @property integer product_id
 */
class Photo extends Model
{
    use SoftDeletes;

    public $table = 'photos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'url',
        'product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'url' => 'string',
        'product_id' => 'integer'
    ];



    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'url' => 'required',
        'product_id' => 'required'
    ];


}
