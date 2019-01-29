<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $connection = 'mysql2';
	protected $table = "categories"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification

	public function get_idCategorie($categorie_name){
	    $idCategorie = Categories::where('Name',$categorie_name)->first()->id;

	    return $idCategorie;
	}
}
