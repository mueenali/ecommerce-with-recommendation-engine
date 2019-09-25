<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'score', 'visited_product_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

    public function visitedProduct() {
        return $this->belongsTo('App\Models\VisitedProduct');
    }
}
