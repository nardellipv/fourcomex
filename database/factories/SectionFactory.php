<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Section;
use Faker\Generator as Faker;

$factory->define(Section::class, function (Faker $faker) {
    return [
        'title' =>  $faker->sentence($nbWords = 2, $variableNbWords = true),
        'text' =>  $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'section' => $faker->randomElement($array = array('SLIDER', 'ABOUT')),
    ];
});
