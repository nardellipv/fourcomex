<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->sentence($nbWords = 4, $variableNbWords = true);
    return [
        'name' => $name,
        'description' =>  $faker->paragraph($nbSentences = 20, $variableNbSentences = true),
        'cod' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'available' => $faker->randomElement($array = array('YES', 'NO')),
        'photo' => $faker->imageUrl($width = 640, $height = 480,'abstract'),
        'slug' => Str::slug($name),
        'category_id' => rand('1','19'),
    ];
});
