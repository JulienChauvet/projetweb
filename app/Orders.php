<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $connection = 'mysql2';
	protected $table = "orders"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification
	protected $fillable = ['status'];

	/* Valeurs possibles de status:
		-0 = dans le panier
		-1 = commande en cours
		-2 = commande validée et passée
	*/

	public function get_CartByUserId($id_user) {
	    $ordersInCart = Orders::where('id_Users', $id_user)->where('status', 0)->first(); // On récupère seulement la 1ère 
        return $ordersInCart;
    }

    public function get_OrdersByStatus($status) {
		$ordersInCart = Orders::where('status', $status)->get();
        return $ordersInCart;
    }

    public function get_MostSoldArticlesId($howMany) {
        $ordered_articles = Orders::join('ordered', 'id_Orders', '=', 'orders.id')->where('orders.status', 2)->orderBy('quantity', 'asc')->getQuery()->take($howMany)->get();       
        return $ordered_articles;
    }

    public function get_OrderById($id) {
    	$order = Orders::find($id);
    	return $order;
    }

    
}
