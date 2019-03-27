<?php

use Faker\Generator as Faker;
use App\Models\Category;
use App\Models\Product;
$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'title' => $faker->text(100),
        'description' => $faker->realText(),
        'price' => random_int(100,1000),
        'sale_price' => random_int(10,1000)
    ];
});
