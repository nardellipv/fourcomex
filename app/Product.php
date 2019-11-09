<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name', 'description', 'cod', 'available', 'photo', 'link', 'slug', 'category_id'
    ];

    public function Images()
    {
        return $this->hasMany(Images::class);
    }

    public function ProductSection()
    {
        return $this->hasMany(ProductSection::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
