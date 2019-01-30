<?php
namespace App\Http\Controllers;
use Request;
use App\Events;
use App\Suggest;
use App\Users;
use App\Mail\Notifications;
use Mail;

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

		$id_event = request('id');

		if(request('MonthEvent') == 'check')
        {
            $event = new \App\Events;
            $event->where('MonthEvent','1')->update(['MonthEvent'=>'0']);
            $events = Events::find($id_event);
            $events->update(['MonthEvent' => '1']);

                
        }

		$event = new \App\Events;
		$events = Events::find($id_event);
		$events->update(['Title' => request('Title'),
						'Description' => request('Description'),
			 			'DateEvent' => request('Date'),
						'Recurrence' => request('Recurrent'),
						'Suggest' => '0',
		]);
		
		$id_user = Suggest::where('id_Events',$id_event)->value('id');
        $user = new \App\Users;
        $user = $user->get_UserById($id_user);
        Mail::to($user->Email)->send(New Notifications($user));


 		flash("Évènement validé")->success();
 		return redirect("/boîte_à_idée");
	}
}

		