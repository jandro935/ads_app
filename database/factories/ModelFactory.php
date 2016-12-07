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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->randomNumber(9),
        'role' => $faker->randomElement(['user', 'editor']),
        'password' => bcrypt('user'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Ads::class, function (Faker\Generator $faker) use ($factory) {
    return [
        'title' => $faker->realText(100),
        'body' => $faker->realText(500),
        'user_id' => random_int(DB::table('users')->min('id'), DB::table('users')->max('id')),
    ];
});
