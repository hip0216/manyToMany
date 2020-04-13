<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posttag;
use Faker\Generator as Faker;

$factory->define(Posttag::class, function (Faker $faker) {
    return [
        'post_id'=>$faker->numberBetween($min = 1, $max = 20),
        'tag_id'=>$faker->numberBetween($min = 1, $max = 20),
        'created_at'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'=>$faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
