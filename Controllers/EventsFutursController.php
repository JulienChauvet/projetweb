<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsFutursController extends Controller
{
    public function page() {
    	$events = new \App\Events;
    	$events = $events->get_EventsByDate('>');
    	return view('eventsFuturs', ['events' => $events]);
	}

	public function page_infos() {
    	$event = new \App\Events;
    	$event = $event->get_EventById(request('id'));

    	return view('eventFuturInfos', ['event' => $event]);
	}
}
