<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordered extends Model
{
	protected $connection = 'mysql2';
    protected $table = "ordered"; // la table à utiliser
    public $timestamps = false; // ignore la date de création/modification

 	public function get_ArticlesIdByOrderId($id_order) {
        $ordered_articles = Ordered::where('id_Orders', $id_order)->get();       
        return $ordered_articles;
    }

    public function remove_SingleArticleByOrderId($id_order, $id_article) {
    	$ordered_articles = Ordered::where('id_Orders', $id_order)->where('id', $id_article)->first(); 
    	$ordered_articles->delete();
    }

}
