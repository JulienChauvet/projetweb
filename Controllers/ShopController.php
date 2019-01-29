<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function page() {
    	$articles = \App\Shop::all();
    	$categories = \App\Categories::all();
        $role = auth()->user()->Role;

    	return view('shop', ['articles'=>$articles, 'categories'=>$categories, 'role'=>$role]);
	}

	public function pageFilteredByCategory() {
    	$articles_id = new \App\Belong;
    	$articles_id = $articles_id->get_ArticleIdByCategoryId(request('id'));

    	$articles = new \App\Shop;
    	$articles = $articles->get_ArticlesById($articles_id);

    	$categories = \App\Categories::all();
    	return view('shop', ['articles' => $articles, 'categories' => $categories]);

	}

    public function addToCart() {
        $id_user = auth()->id();
        $id_article = request('id');
        $quantity = request('quantity');

        $cart = new \App\Orders;
        $cart = $cart->get_OrdersByUserId($id_user, 0);

        if ($cart){
            $articles_alreadyInCart = new \App\Ordered;
            $articles_alreadyInCart = $articles_alreadyInCart->get_ArticlesIdByOrderId($cart->id);

            $alreadyIn = false;
            foreach ($articles_alreadyInCart as $article_alreadyInCart) {
                if ($article_alreadyInCart->id == $id_article) {
                    $alreadyIn = true;
                    break;
                }
            }

            if ($alreadyIn == false) {
                $article = new \App\Ordered;
                $article->quantity = $quantity;
                $article->id = $id_article;
                $article->id_Orders = $cart->id;
                $article->save(); 

                if ($quantity > 1){ 
                    flash("Articles ajoutés à votre panier !")->success();   
                } else {
                    flash("Article ajouté à votre panier !")->success();  
                }
            } else{
                flash("Article déjà dans votre panier")->warning();
            }

        } else{
            $article = new \App\Ordered;
            $article->quantity = 1;
            $article->id = $id_article;
            $article->id_Orders = $cart->id;
            $article->save();   
            flash("Article ajouté à votre panier !")->success();   
        }

        return back();
    }


}
