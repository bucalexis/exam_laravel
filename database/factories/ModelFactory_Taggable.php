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

$factory->define(App\Taggable::class, function (Faker\Generator $faker) {

    $tags=DB::table('tags')->lists('id');
    $posts=DB::table('posts')->lists('id');

    return [
        'tag_id' => $faker->randomElement($tags),
        'taggable_id' => $faker->randomElement($posts),
        'taggable_type' => 'App\Post',
    ];
});
