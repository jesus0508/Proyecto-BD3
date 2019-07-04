<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use DBProject\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'autor'=> factory('DBProject\User')->make()->id,
        'contenido'=>$faker->realText(50),
        'fecha'=>$faker->dateTime(),
    ];
});
