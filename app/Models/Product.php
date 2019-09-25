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
 * @property string brand
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
        'brand',
        'sub_category_id',
        'times_bought'
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function subCategory(){
        return $this->belongsTo('App\Models\SubCategory');
    }

    public function photos() {
        return $this->hasMany('App\Models\Photo');
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
        'brand' => 'string',
        'sub_category_id' =>'integer',
    ];

    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }

    public function visitedProducts() {
        return $this->hasMany('App\Models\VisitedProduct');
    }

    public function recommendation() {
        return $this->hasMany('App\Models\Recommendation');
    }

    /**
     * Set the user's availability.
     *
     * @return void
     */
}
