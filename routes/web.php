<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "HomeController@home");

Route::get('/products', function () {
	return view('pages.products');
});

Route::get('/category/{id}', function($id) {
	$cat = \App\Category::where(['id' => $id])->first();
	$products = \App\Product::where(['category_id' => $id])->paginate(9);
	return view('pages.product-by-category')->with([
		"products" => $products,
		"cat"		=>	$cat
	]);
});

Route::get('/sub-category/{id}', function($id) {
	$cat = \App\SubCategory::where(['id' => $id])->first();
	$products = \App\Product::where(['sub_category_id' => $id])->get();
	return view('pages.product-by-sub-category')->with([
		"products" => $products,
		"cat"		=>	$cat
	]);
});