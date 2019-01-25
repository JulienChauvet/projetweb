<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
     public function page() {
     	$user = new \App\Users;
     	$user = $user->get_UserById(auth()->id());
     	
    	return view('account', ['user'=>$user]);
	}
}
