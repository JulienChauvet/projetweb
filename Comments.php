<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $connection = 'mysql2';
	protected $table = "comments"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification

	public function get_CommentsForPicturesId($pictures) {
		$comments = array();
		foreach ($pictures as $picture) {
			array_push($comments, Comments::where('id_Pictures',$picture->id)->get());
		}
        return $comments;
    }
}
