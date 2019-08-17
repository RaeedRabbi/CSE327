<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //relationship with products
    public function products(){

        return $this->hasMany('App\Product');
    }

    //relationship with subcategory
    public function category(){

        return $this->belongsTo('App\Category', 'category_id');
    }
}
