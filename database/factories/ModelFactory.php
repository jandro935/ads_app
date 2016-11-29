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

use Illuminate\Support\Facades\DB;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role' => $faker->randomElement(['user', 'editor'])
    ];
});

$factory->define(App\Ads::class, function (Faker\Generator $faker) use ($factory) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
//        'user_id' => $factory->create(App\User::class)->id
        'user_id' => random_int(DB::table('users')->min('id'), DB::table('users')->max('id'))
    ];
});
