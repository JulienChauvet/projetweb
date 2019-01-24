<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $connection = 'mysql2';
	protected $table = "articles"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification
}
