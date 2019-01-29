<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $connection = 'mysql2';
	protected $table = "orders"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification

	/* Valeurs possibles de status:
		-0 = dans le panier
		-1 = commande en cours
		2 = commande validée et passée
	*/

	public function get_OrdersByUserId($id_user, $status) {
		if ($status == 0) {
	        $ordersInCart = Orders::where('id', $id_user)->where('status', $status)->first(); // On récupère seulement la 1ère 
	    }
	    else{
	    	$ordersInCart = Orders::where('id', $id_user)->where('status', $status)->get();
	    }
        return $ordersInCart;
    }

    public function get_MostSoldArticlesId($returned) {
        $ordered_articles = Orders::join('ordered', 'id_Orders', '=', 'orders.id')->where('orders.status', 2)->orderBy('quantity', 'asc')->getQuery()->take($returned)->get();       
        return $ordered_articles;
    }
}
