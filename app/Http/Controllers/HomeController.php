<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;

class HomeController extends Controller
{
    /**
     * Home Page
     *
     */
    public function home() {
    	$random_products = Product::with(['category','subCategory'])
    						->inRandomOrder()
    						->take(6)
    						->get();
    	$offer_products = Product::with(['category', 'subCategory'])
    						->where('sale',">","50")
    						->inRandomOrder()
    						->take(6)
    						->get();
    	return view('pages.home')->with([
    		'randomProducts'	=>	$random_products,
    		'offerProducts'		=>	$offer_products
    	]);
    }
}
