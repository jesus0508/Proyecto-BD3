<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use DBProject\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'names' => $faker->name,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'phone' => $faker->phone, 
        'birthday' => $faker->dateTime('2014-02-25 08:37:17'),
        'user_id'=> factory('DBProject\User')->create()->id
    ];
});
