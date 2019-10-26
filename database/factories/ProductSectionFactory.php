<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductSection;
use Faker\Generator as Faker;

$factory->define(ProductSection::class, function (Faker $faker) {
    return [
        'product_id' => rand('1','30'),
        'section_id' => rand('1','30'),
    ];
});
