<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsType extends Model
{
    function products() {
        return $this->hasMany('App\Product');
    }
}
