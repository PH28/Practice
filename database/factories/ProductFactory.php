<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(App\Product::class, function (Faker $faker) {

	$categoryIds= Category::pluck('id');

    return [
        'name' => $faker->name,
        // 'category_id' => $faker->randomElement($categoryIds),
        'price' => rand(1000, 10000),
        'quantity' => rand(1,10)
    ];
});
