<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Report;
use Mail;

class ReportController extends Controller
{
    public function report(){
    	$id = request('id');

    	Mail::to("felix.dufay@viacesi.fr")->send(New Report);

    	flash("Signalement effectué !")->success();
    	return back();
    }
}
