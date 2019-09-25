<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitedProduct extends Model
{
    protected $fillable = [
        'product_id', 'user_id', 'recommended'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

    public function recommendation() {
        return $this->hasMany('App\Models\Recommendation');
    }
}
