<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $timestamps = false;

    public function ProductSection()
    {
        return $this->hasMany(ProductSection::class);
    }
}
