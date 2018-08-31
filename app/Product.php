<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function ingredient()
    {
        return $this->belongsToMany(Ingredient::class, 'product_ingredient');
    }

    public function type()
    {
        return $this->belongsToMany(Type::class, 'product_type');
    }


}
