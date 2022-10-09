<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\stock;
use Faker\Generator as Faker;

$factory->define(stock::class, function (Faker $faker) {
    return [
        'code' => $faker->numberBetween(1000000000000, 9999999999999),
        'name' => $faker->word(),
        'price' => $faker->numberBetween(10 , 100000),
        'stock' => $faker->numberBetween(0, 999),
        'brand' => $faker->word()
    ];
});
