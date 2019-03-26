<?php

use Faker\Generator as Faker;
use App\Models\Category;
use App\Models\Product;
$factory->define(Model::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'title' => $faker->jobTitle,
        'description' => $faker->realText(),
        'price' => random_int(100,1000)
    ];
});
