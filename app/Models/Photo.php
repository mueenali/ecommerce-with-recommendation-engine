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
        'path',
        'product_id',
        'size',
        'filename'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'path' => 'string',
        'product_id' => 'integer'
    ];

    public function product(){
        return $this->belongsTo('App/Models/Product');
    }
}
