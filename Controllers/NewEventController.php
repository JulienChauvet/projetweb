<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewEventController extends Controller
{
    public function page() {
    	return view('NewEvent');
	} 

	public function add_idea(){

	    request()->validate([
			'Title' => ['required'],
			'Description' => ['required'],
			'Date' => ['required'],
			'Image' => ['required'],
			'Recurrent' => ['required'],
			
		] );

		$event = new \App\Events;
	    $suggest = new \App\Suggest;
	    
	    $path = request('Image')->store('Events','public');
	  
	    $event->Title = request('Title');
	    $event->Description = request('Description');
	    $event->DateEvent = request('Date');
		$event->PictureLink = $path;
	    $event->Recurrence = request('Recurrent');
	    $event->Suggest = 1;
	    $event->save();

	    $suggest->id = auth()->id();
	    $suggest->id_Events = $event->get_LastIdEvent();
	    $suggest->save();

	    flash("Évènement suggéré !")->success();
	    return redirect("/boîte_à_idée");
    }

}