<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
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
    use Sluggable;

    public $table = 'products';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'brand',
        'sub_category_id'
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
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

    /**
     * Set the user's availability.
     *
     * @return void
     */
}
