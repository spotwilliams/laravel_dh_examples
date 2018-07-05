<?php

use Faker\Generator as Faker;


$factory->define(\App\Models\Director::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'awards'     => rand(1, 10),
    ];
});