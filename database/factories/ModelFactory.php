<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Feedback::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->paragraph,
        'image' => '',
        'name_client' => $faker->name,
        'company' => $faker->name,
    ];
});
$factory->define(App\Models\Technology::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->paragraph,
        'image' => 'no-image.jpg',
        'link' => $faker->name,
    ];
});