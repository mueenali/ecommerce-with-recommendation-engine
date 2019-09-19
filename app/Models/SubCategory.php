<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SubCategory
 * @package App\Models
 * @version September 5, 2019, 3:20 pm UTC
 *
 * @property string name
 * @property integer category_id
 */
class SubCategory extends Model
{
    use SoftDeletes;

    public $table = 'sub_categories';


    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'category_id' => 'integer'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

}
