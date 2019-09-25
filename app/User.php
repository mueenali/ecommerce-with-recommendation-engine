<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    public $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    public function addresses() {
        return $this->hasMany('App\Models\Address');
    }
    public function wishLists() {
        return $this->hasMany('App\Models\Wishlist');
    }
    public function cart() {
        return $this->hasOne('App\Models\Cart');
    }
    public function orders() {
        return $this->hasMany('App\Models\Order');
    }

    public function role() {
        return $this->belongsTo('App\Models\Role');
    }
    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }

    public function visitedProducts() {
    return $this->hasMany('App\Models\VisitedProduct');
    }

    public function recommendation() {
        return $this->hasMany('App\Models\Recommendation');
    }
}
