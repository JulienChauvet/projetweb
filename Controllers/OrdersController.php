<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderMeeting;
use Mail;

class OrdersController extends Controller
{
    public function page() {

    	$orders = new \App\Orders; 
    	$orders = $orders->get_OrdersByStatus(1); // commandes en cours

    	if ($orders){
    		$users = new \App\Users; 
    		$users = $users->get_UsersbyOrders($orders);


	     	$articles = new \App\Ordered;
	     	$articles = $articles->get_Articles($orders);	

	     	$total_price = Array();
	     	$price = 0;
	     	foreach ($orders as $key => $order) {
	     		foreach ($articles as $articlesArray) {
	     			foreach ($articlesArray as $article) {
	     				if ($article->id_Orders == $order->id) {
		     				$price = $price + ($article->Price * $article->quantity); // Total price for each orders
			     		}
		     		}
		     	}
		     	array_push($total_price, $price);
		     	$price = 0;
	     	} 
	    }
     	else{
	     	$articles = Array();
	     	$users = Array();
     	}

		return view('orders', ['orders'=>$orders, 'users'=>$users, 'articles'=>$articles, 'total_price'=>$total_price]);
	}

	public function orderMeeting() {
		$id_order = request('id');
		$date = request('dateMeeting');
		$localisation = request('localisation');

		request()->validate([
			'dateMeeting' => ['required', 'after_or_equal:now'],
			'localisation' => ['required']
		], ['dateMeeting.after_or_equal'=>'La date doit être supérieur ou correspondre à la date du jour.'
		]);

		$id_user = \App\Orders::find($id_order)->id_Users;

		$user = new \App\Users;
		$user = $user->get_UserById($id_user);

		Mail::to($user->Email)->send(New OrderMeeting($user, $date, $localisation));

		flash("Rendez-vous proposé !")->success();
		return back();
	}

	public function orderValidation() {
		$id_order = request('id');

		$order = new \App\Orders;
		$order = $order->get_OrderById($id_order);
		$order->update(['status' => 2]);

		flash("Commande terminée !")->success();
 		return back();
	}
}
