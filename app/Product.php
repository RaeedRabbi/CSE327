<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //color relationship
    public function colors(){
        return $this->hasMany('App\Color');
    }

    //return a products color
    public function color(){
        return $this->colors()->pluck('color');
    }

    //category relationship
    public function categories(){
        return $this->belongsTo('App\Category');
        return $this->belongsTo('App\Category','category_id');
    }

    //subcategory relationship
    public function sub_categories(){
            return $this->belongsTo('App\SubCategory');
            return $this->belongsTo('App\SubCategory', 'sub_category_id');
    }

    //review relatioship
    public function reviews(){
        return $this->hasMany('App\Review');
    }

    //wish list relationship
    public function users(){
        return $this->belongsToMany('App\User');
    }

    //cart relationship
    public function cartsUsers(){
        return $this->belongsToMany('App\User');
    }

    //returns rating
    public function rating(){
        $totalRating=$this->reviews()->sum('rating');
        $rating=$totalRating/5;
        return $rating*100;
    }

    //returns num of comments
    public function reviewCount(){
        return $this->reviews()->count();
    }

    //returns comments
    public function comments(){
        return $this->reviews('comment');
    }


    //return you might like section's products
    public function scopeMightAlsoLike($query){
        return $query->inRandomOrder()->take(8);
    }

    //return featured products
    public function scopeFeaturedProduct($query){
        return $query->inRandomOrder()->take(6);
    }

    //format the price
    public function presentPrice(){
        return '$' . number_format($this->present_price, 2);
    }

    public function discountedPrice(){
        return '$' . number_format($this->discounted_price, 2);
    }
}
