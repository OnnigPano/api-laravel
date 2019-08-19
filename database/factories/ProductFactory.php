<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
            'name' => $faker->sentence(1, true),
            'price' => $faker->randomFloat(2, 100, 999999),
            'description' => $faker->realText(),
            'featured' => $faker->boolean(),
            'image' => $faker->image($filePath, 400, 300, null, false)
        ];
});
