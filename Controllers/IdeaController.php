<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function page() {
    	$events = new \App\Events;
    	$events = $events->get_EventSuggested('>');
    	return view('idea', ['events' => $events]);
	}

}