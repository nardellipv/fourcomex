<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description','slug','photo','provider_id'
    ];

    public function Provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
