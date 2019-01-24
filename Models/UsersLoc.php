<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersLoc extends Model
{
    protected $connection = 'mysql2';
	protected $table = "users"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification

}
