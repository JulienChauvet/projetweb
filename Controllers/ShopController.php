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

	public function pageFilteredByCategory() {

    	$articles_id = new \App\Belong;
    	$articles_id = $articles_id->get_ArticleIdByCategoryId(request('id'));

    	$articles = new \App\Shop;
    	$articles = $articles->get_ArticlesById($articles_id);

    	$categories = \App\Categories::all();
    	return view('shop', ['articles' => $articles, 'categories' => $categories]);
	}
}
