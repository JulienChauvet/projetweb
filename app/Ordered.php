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

    public function get_ArticlesIdByOrdersId($orders) {
        $ordered_articles = Array();
        foreach ($orders as $order) {
            array_push($ordered_articles, Ordered::where('id_Orders', $order->id)->get());
        }
        return $ordered_articles;
    }

    public function remove_SingleArticleByOrderId($id_order, $id_article) {
    	$ordered_articles = Ordered::where('id_Orders', $id_order)->where('id', $id_article)->first(); 
    	$ordered_articles->delete();
    }

    public function get_Articles($orders){
        $articles = Array();
        foreach ($orders as $order) {
            array_push($articles, Ordered::join('articles', 'articles.id', '=', 'ordered.id')->where('ordered.id_Orders', $order->id)->get()); 
        }      
        return $articles;
    }

}
