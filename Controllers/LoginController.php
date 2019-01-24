<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function page(){
    	return view('login');

    }

    public function treatment(){

    	request()->validate([
			'Email' => ['required', 'email'],
			'Password' => ['required'],
		]);

		$result = auth()->attempt([
			'Email' => request('Email'),
			'password' => request('Password') // password - keyword pour laravel
		]);

		if ($result) {
			return redirect('/accueil');	
		}

    	return back()->withInput()->withErrors([
    		'Password' => 'Adresse e-mail ou mot de passe incorrect.']);
    }

}
