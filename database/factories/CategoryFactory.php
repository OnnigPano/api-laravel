<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([
			'Tecnología',
			'Perifericos',
			'Monitores',
			'Mouse',
			'Auriculares',
			'Router',
			'Juegos',
			'Teclados',
			'Parlantes',
			'Laptops',
			])
    ];
});
