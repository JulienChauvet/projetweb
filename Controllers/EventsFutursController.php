<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsFutursController extends Controller
{
    public function page() {

            // CARROUSEL  //
        $carrousel_events = new \App\Events;
        $carrousel_events = $carrousel_events->get_EventsForCaroussel();

    	$events = new \App\Events;
    	$events = $events->get_EventsByDate('>');

        

    	return view('eventsFuturs', ['carrousel_events'=>$carrousel_events, 'events' => $events]);
	}

	public function page_infos() {
    	$event = new \App\Events;
    	$event = $event->get_EventById(request('id'));

    	return view('eventFuturInfos', ['event' => $event]);
	}
}
