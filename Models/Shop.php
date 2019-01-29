<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable; //renomme pour éviter les conflits avec la ligne d'avant

class Shop extends Model
{
	protected $connection = 'mysql2';
    protected $table = "articles"; // la table à utiliser
    public $timestamps = false; // ignore la date de création/modification

    public function get_LastArticleId(){
    	$idArticle=Shop::orderBy('id', 'DESC')->first()->id;
    	return $idArticle;
    }

    public function get_ArticlesById($articles_id) {
    	$articles = Array();
    	foreach ($articles_id as $article_id) {
    		array_push($articles, Shop::where('id', $article_id->id_Articles)->first()); 
    	}
    	return $articles;
    }

    public function get_ArticlesByOrdersId($ordered_articles) {
        $articles = Array();
        foreach ($ordered_articles as $ordered_article) {
            array_push($articles, Shop::where('id', $ordered_article->id)->first()); 
        }
        return $articles;
    }

}

