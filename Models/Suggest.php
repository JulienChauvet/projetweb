<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Suggest extends Model {

    protected $connection = 'mysql2';
	protected $table = "suggest"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification

	}