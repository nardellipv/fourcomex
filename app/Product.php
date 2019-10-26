<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Images()
    {
        return $this->hasMany(Images::class);
    }

    public function ProductSection()
    {
        return $this->hasMany(ProductSection::class);
    }
}
