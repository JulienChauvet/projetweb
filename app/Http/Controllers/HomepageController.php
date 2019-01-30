<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function page() {

        $monthEvent = new \App\Events;
        $monthEvent = $monthEvent->get_MonthEvent();
            // CARROUSEL  //
        $carrousel_events = new \App\Events;
        $carrousel_events = $carrousel_events->get_EventsForCaroussel();


            // MEILLEURS VENTES //
        $ordered = new \App\Orders;
        $ordered = $ordered->get_MostSoldArticlesId(3);

        $mostSoldArticles = new \App\Shop;
        $mostSoldArticles = $mostSoldArticles->get_ArticlesByOrdersId($ordered);

            // IDEE LES PLUS VOTES //
       /* $mostVotedEvents = new \App\Vote;
        $mostVotedEvents = $mostVotedEvents->get_MostVotedEvents();
        var_dump($mostVotedEvents); */


		return view('homepage', ['monthEvent'=>$monthEvent, 'carrousel_events'=>$carrousel_events, 'mostSoldArticles'=>$mostSoldArticles]);
    }

    public function disconnection() {
    	auth() -> logout();
    	flash("Vous avez bien été déconnecté.")->success();
    	return redirect('/connexion');
    }
}
