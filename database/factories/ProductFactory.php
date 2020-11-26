<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'category_id' => random_int(1, 10),
        'brand_id' => random_int(1, 10),
        'admin_id' => random_int(1, 5),
        'is_featured' => $faker->boolean,
        'offer_price' => random_int(100, 150),
        'price' => random_int(200, 300),
        'slug' => $faker->slug,
        'description' => $faker->paragraph,
        'title' => $faker->name
    ];
});
