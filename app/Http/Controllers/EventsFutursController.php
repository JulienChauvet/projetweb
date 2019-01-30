<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsFutursController extends Controller
{
    public function page() {

        $role = auth()->user()->Role;

            // CARROUSEL  //
        $carrousel_events = new \App\Events;
        $carrousel_events = $carrousel_events->get_EventsForCaroussel();

    	$events = new \App\Events;
    	$events = $events->get_EventsByDate('>');

    	return view('eventsFuturs', ['carrousel_events'=>$carrousel_events, 'events' => $events, 'role'=>$role]);
	}

	public function page_infos() {
        $id_event = request('id');
        $id_user = auth()->id();

    	$event = new \App\Events;
    	$event = $event->get_EventById($id_event);

        $user_participations = new \App\Participate;
        $user_participations = $user_participations->get_ParticipationByUserId($id_user);

        $registered = false;
        foreach ($user_participations as $user_participation) {
            if ($user_participation->id == $id_event) {
                $registered = true;
                break;
            }
        }

        $role = auth()->user()->Role;

    	return view('eventFuturInfos', ['event' => $event, 'registered'=>$registered, 'role' => $role]);
	}

    public function registration() {
        $id_event = request('id');
        $id_user = auth()->id();
        
        $registration = new \App\Participate;
        $registration->id = $id_event;
        $registration->id_Users = $id_user;
        $registration->save();
        flash("Vous êtes maintenant inscrit !")->success();
        return back();
    }

    public function unregistration() {
        $id_event = request('id');
        $id_user = auth()->id();
        
        $registration = new \App\Participate;
        $registration = $registration->get_ParticipationByEventAndUserId($id_user, $id_event);
        $registration->delete();

        flash("Vous n'êtes plus inscrit.")->success();
        return back();
    }
}
