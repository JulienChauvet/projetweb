<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function page() {
    	$articles = \App\Shop::all();
    	$categories = \App\Categories::all();


    	return view('shop', ['articles' => $articles, 'categories' => $categories]);
	}
}
