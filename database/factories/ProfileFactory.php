<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'desc' => $faker->paragraph,
        'dob' => $faker->date($max = 'now'),
        'region' => $faker->state,
        'city' => $faker->city,
        'street_address' => $faker->streetAddress,
        'contact_number' => $faker->phoneNumber,
        //
    ];
});
