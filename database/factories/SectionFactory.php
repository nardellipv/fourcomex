<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Section;
use Faker\Generator as Faker;

$factory->define(Section::class, function (Faker $faker) {
    return [
//        'section' => $faker->randomElement($array = array('PRINCIPAL', 'SLIDER', 'OTHER')),
    ];
});
