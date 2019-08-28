<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function products(){

        return $this->belongsTo('App\Product');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
}
