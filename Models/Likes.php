<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $connection = 'mysql2';
	protected $table = "likepicture"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification
}
