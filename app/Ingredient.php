<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
