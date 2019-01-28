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
        $events = Events::where('DateEvent',$signe,Carbon::now()->toDateTimeString())->where('Suggest', 0)->get();
        return $events;
    }

    public function get_EventById($id) {
    	$events = Events::where('id',$id)->first();
        return $events;
    }

    public function get_EventsByParticipation($participations) {
        $events = Array();
        foreach ($participations as $participation) {
            array_push($events, Events::where('id',$participation->id)->where('DateEvent','>',Carbon::now()->toDateTimeString())->first());
        }
        return $events;
    }

    public function get_EventSuggested() {
        $events = Events::where('Suggest',1)->get();
        return $events;
    }

    public function get_EventsForCaroussel() { // < = Pasts events   |   > = Futurs events
        $events = Events::where('DateEvent','>',Carbon::now()->toDateTimeString())->where('Suggest', 0)->orderBy('id', 'asc')->take(3)->get();
        return $events;
    }
}
