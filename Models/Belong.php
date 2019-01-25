<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belong extends Model
{
    protected $connection = 'mysql2';
	protected $table = "belongs"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification


	public function get_ArticleIdByCategoryId($category_id) {
    	$articles_id = Belong::where('id', $category_id)->get();
    	return $articles_id;
    }
}
