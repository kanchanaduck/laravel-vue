<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function products_types() {
        return $this->belongsTo('App\Product_Type');
    }
}
