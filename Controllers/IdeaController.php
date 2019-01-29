<?php
namespace App\Http\Controllers;
use Request;
use App\Events;


class IdeaController extends Controller
{
    public function page() {
    	$events = new \App\Events;
    	$events = $events->get_EventSuggested();
    	$role = auth()->user()->Role;

    	return view('idea', ['events' => $events,
    						 'role' => $role

    	]);
	}

	public function page_validation() {
		$events = new \App\Events;

		$idevent = request('idevent');
		$events = $events->find($idevent);

		return view('ValidateIdea', ['events' => $events]);
	}

	public function validation(){

		$event = new \App\Events;
		$events = Events::find(request('ID'));
		$events->update(['Title' => request('Title'),
						'Description' => request('Description'),
			 			'DateEvent' => request('Date'),
						'Recurrence' => request('Recurrent'),
						'Suggest' => '0',
		]);
		
 		flash("Évènement validé")->success();
 		return redirect("/boîte_à_idée");
	}
}

		