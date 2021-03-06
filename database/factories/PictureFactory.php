<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Picture;
use Faker\Generator as Faker;

$factory->define(Picture::class, function (Faker $faker) {
    return [
        'name' => $faker->imageUrl($width = 640, $height = 480),
        'product_id' => rand('1','30'),
    ];
});
