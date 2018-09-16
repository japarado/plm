<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        //
        'name' => 'Course Name',
        'desc' => $faker->paragraph,
        'duration' => 4,
        'picture' => '/img/courses/img-1.jpg',
    ];
});
