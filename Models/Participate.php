<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participate extends Model
{
    protected $connection = 'mysql2';
	protected $table = "participe"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification


	public function get_ParticipationByUserId($id_user) {
	    $participations = Participate::where('id_Users', $id_user)->get();
        return $participations;
    }

    public function get_ParticipationByEventAndUserId($id_user, $id_event) {
	    $participation = Participate::where('id_Users', $id_user)->where('id', $id_event)->first();
        return $participation;
    }
}
