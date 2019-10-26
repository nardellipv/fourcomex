<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' =>  $faker->paragraph($nbSentences = 20, $variableNbSentences = true),
        'available' => $faker->randomElement($array = array('YES', 'NO')),
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'category_id' => rand('1','18'),
    ];
});
