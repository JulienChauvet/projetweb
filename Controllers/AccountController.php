<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function page() {
     	$id_user = auth()->id(); // Récupère l'id du user connecté

     	// Récupère l'utilisateur //
     	$user = new \App\Users;
     	$user = $user->get_UserById($id_user);

     		//* PANIER *//
     	// Récupère ses différentes commandes //
     	$cart = new \App\Orders;
     	$cart = $cart->get_CartByUserId($id_user);

     	$total_price = 0;
     	// Récupère les articles, la quantité de chacun et le prix total du panier //
     	if ($cart) {
     		$ordered_articles = new \App\Ordered; // Cette variable contient également la quantité
	     	$ordered_articles = $ordered_articles->get_ArticlesIdByOrderId($cart->id);

	     	$articles = new \App\Shop;
	     	$articles = $articles->get_ArticlesByOrdersId($ordered_articles);	

	     	foreach ($articles as $article) {
	     		foreach ($ordered_articles as $ordered_article) {
	     			if ($article->id == $ordered_article->id) {
	     				$total_price += ($article->Price*$ordered_article->quantity);
	     			}
	     		}
	     	}
     	} else{
     		$ordered_articles = Array(); // vide
	     	$articles = Array();
     	}

     		//* INSCRIPTIONS *//
     	$participations = new \App\Participate;
     	$participations = $participations->get_ParticipationByUserId($id_user);

     	$events = new \App\Events;
     	$events = $events->get_EventsByParticipation($participations);

    	return view('account', ['user'=>$user, 'articles'=>$articles, 'ordered_articles'=>$ordered_articles, 'total_price'=>$total_price, 'events'=>$events]);
	}

    public function removeFromCart() {
        $id_user = auth()->id();
        $id_article = request('id');

        $cart = new \App\Orders;
        $cart = $cart->get_CartByUserId($id_user);

        $article = new \App\Ordered;
        $article = $article->remove_SingleArticleByOrderId($cart->id, $id_article);

        flash("Article supprimé")->success();
        return back();
     }

    public function placeAnOrder() {
        $id_user = auth()->id();

        $order = new \App\Orders;
        $order = $order->get_CartByUserId($id_user);
        $order->update(['status'=>1]);

        flash("Commande passée !")->success();
        return back();

    }

}
