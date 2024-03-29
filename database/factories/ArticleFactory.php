<?php

use App\Article;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'subtitle' => $faker->sentence(),
        'content' => $faker->realText(),
        'background_url' => $faker->sentence(),
        'user_id' => rand(1, 10),
        'category_id' => rand(1, 10)
    ];
});
