<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addition extends Model
{
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
