<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'body'=>$faker->realText($maxNbChars = 200, $indexSize = 2),
        'created_at'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'=>$faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
