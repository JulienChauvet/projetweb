<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    protected $connection = 'mysql2';
	protected $table = "pictures"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification

	public function get_PicturesForEventId($id) {
    	$pictures = Pictures::where('id_Events',$id)->get();
        return $pictures;
    }

}
