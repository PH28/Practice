<?php

use Faker\Generator as Faker;
use App\Breed;

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


$factory->define(App\Cat::class, function (Faker $faker) {

	$breedIds= Breed::pluck('id');
	// dd($breedIds);

    return [
        'name' => $faker->name,
        'breed_id' => $faker->randomElement($breedIds)
    ];
});