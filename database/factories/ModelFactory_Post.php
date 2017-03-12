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

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    $users = DB::table('users')->lists('id');
    $title = $faker->name;

    return [
        'user_id' => $faker->randomElement($users),
        'title' => $title,
        'slug' =>str_slug($title, '-'),
        'content' => $faker->text
    ];
});
