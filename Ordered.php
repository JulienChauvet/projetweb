<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordered extends Model
{
	protected $connection = 'mysql2';
    protected $table = "ordered"; // la table à utiliser
    public $timestamps = false; // ignore la date de création/modification

 	public function get_ArticlesIdByOrderId($order) {
        $ordered_articles = Ordered::where('id_Orders', $order->id)->get();       
        return $ordered_articles;
    }
}
