<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use DBProject\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'user_id'=> factory('DBProject\User')->make()->id,
        'title'=> $faker->title,
        'content'=>$faker->paragraph,
        'date'=>$faker->dateTime(),
    ];
});
