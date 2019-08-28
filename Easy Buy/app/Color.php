<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
