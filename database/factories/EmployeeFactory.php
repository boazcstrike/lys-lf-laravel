<?php

use App\Employee;
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

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstname' => $faker->sentence(),
        'lastname' => $faker->sentence(),
        'email' => $faker->sentence(),
        'position' => $faker->sentence(),
        'phone_number' => $faker->sentence(),
        'employee_type_id' => rand(1, 10)
    ];
});
