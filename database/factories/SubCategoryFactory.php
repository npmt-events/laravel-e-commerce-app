<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SubCategory;
use App\Category;
use Faker\Generator as Faker;

$factory->define(SubCategory::class, function (Faker $faker) {
    return [
        "name"	=>	$faker->name,
        "category_id"	=> rand(1, count(Category::all()))
    ];
});
