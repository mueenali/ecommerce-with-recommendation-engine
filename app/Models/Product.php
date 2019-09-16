<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version September 1, 2019, 9:21 am UTC
 *
 * @property string name
 * @property string description
 * @property integer price
 * @property integer quantity
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'availability',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo('App/Models/SubCategory');
    }

    public function photos() {
        return $this->hasMany('App/Models/Photo');
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'price' => 'double',
        'quantity' => 'integer',
        'availability' =>'string',
        'category_id' =>'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'brand' => 'required',
        'category_id' => 'required'
    ];


}
