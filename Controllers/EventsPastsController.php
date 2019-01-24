<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsPastsController extends Controller
{
    public function page() {
    	$events = new \App\Events;
    	$events = $events->get_EventsByDate('<');
    	
    	return view('eventsPasts', ['events' => $events]);
	}

}