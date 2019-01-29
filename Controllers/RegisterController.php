<?php

namespace App\Http\Controllers;


class RegisterController extends Controller
{

	public function page(){
		return view('register');
	}

    public function treatment(){

	    request()->validate([
			'Firstname' => ['required', 'alpha'],
			'Lastname' => ['required', 'alpha'],
			'Localisation' => ['required', 'alpha'],
			'Email' => ['required', 'email', 'unique:_users'],
			'Password' => ['required', 'confirmed', 'min:6'],
			'Password_confirmation' => ['required'],
		], [ 'Password.min'=>'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères minimun.',
			'Email.unique' => 'Cette adresse e-mail est déjà utilisée.'
		]);

	    	// Rempli la bdd nationale avec les infos de l'utilisateur //
	    $user = new \App\Users;
	    $user->Firstname = request('Firstname');
	    $user->Lastname = request('Lastname');
	    $user->Email = request('Email');
	    $user->Localisation = request('Localisation');
	    $user->Password = bcrypt(request('Password'));
	    $user->Role = "Etudiant";
	    $user->save();

	    	// Rempli la bdd locale avec l'id de l'utilisateur //
	    $userLoc = new \App\UsersLoc;
	    $userLoc->id = $user->get_id($user->Email);
	    $userLoc->save();

	    return redirect('/connexion');
    }

}
