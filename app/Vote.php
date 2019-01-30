<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
     protected $connection = 'mysql2';
	protected $table = "vote"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification

	public function get_MostVotedEvents(){
		$events = Vote::select('id')->Vote::raw('count(id_Events) as counts')->orderBy('id')->get();

		// SELECT id_Events, Count(id_Events) AS Nb FROM vote GROUP BY id_Events ORDER BY Nb DESC
		// select count(`counts`) as aggregate from `vote`
        return $events;
	}
}
