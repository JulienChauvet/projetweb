<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function page() {

    	
    	if (auth()->guest()) {
    		flash("Vous devez être connecté pour consulter cette page.")->warning();
    		return redirect('/connexion');
    	}
		return view('homepage');		
    }

    public function disconnection() {
    	auth() -> logout();
    	flash("Vous avez bien été déconnecté.")->success();
    	return redirect('/connexion');
    }
}
