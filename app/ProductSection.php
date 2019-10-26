<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSection extends Model
{
    public $timestamps = false;

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function Section()
    {
        return $this->belongsTo(Section::class);
    }
}
