<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Category;
use App\SubCategory;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "name" 				=> 	$faker->words(3, true),
        "price"				=>	$faker->numberBetween(30, 75000),
        "stock"				=>	$faker->numberBetween(0,1000),
        "colors" 			=>	json_encode(["red"=>true,"blue"=>true]),
        "desc"				=>	$faker->paragraphs(3,true),
        "thumb"				=>	"products/basic.jpg",
        "brand"				=>	$faker->word,
        "sale"				=>	rand(0,100),
        "category_id"		=> 	rand(1,count(Category::all())),
        "sub_category_id"	=>	rand(1,count(SubCategory::all()))		
    ];
});
