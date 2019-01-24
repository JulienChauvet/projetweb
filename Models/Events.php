<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Events extends Model
{
    protected $connection = 'mysql2';
	protected $table = "events"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification

	public function get_EventsByDate($signe) { // < = Pasts events   |   > = Futurs events
        $events = Events::where('DateEvent',$signe,Carbon::now()->toDateTimeString())->get();
        return $events;
    }

    public function get_EventById($id) {
    	$events = Events::where('id',$id)->first();
        return $events;
    }
}
