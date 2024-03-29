<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    protected $table='users';
    protected $primaryKey='id';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    //review relation
    public function reviews(){
        return $this->hasMany('App\Review');
    }

    //wishlist relation
    public function products(){
        return $this->belongsToMany('App\Product','wish_lists','user_id','product_id');
    }

    //cart relation
    public function cartProducts(){
        return $this->belongsToMany('App\Product','carts','user_id','product_id')
                    ->withPivot('id','price', 'total_price', 'quatity', 'created_at', 'updated_at');;
     }

    
}
