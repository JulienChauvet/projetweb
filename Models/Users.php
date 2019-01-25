<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable; //renomme pour éviter les conflits avec la ligne d'avant

class Users extends Model implements Authenticatable {

    protected $connection = 'mysql';
	protected $table = "_users"; // la table à utiliser
	public $timestamps = false; // ignore la date de création/modification

	 protected $fillable = ['Email', 'Password'];

    use BasicAuthenticatable;

    public function getAuthPassword() {
        return $this->Password;
    }

    public function getRememberTokenName(){
    	return '';
    }

    public function get_id($email) {
        $id = Users::where('Email', $email)->first()->id;
        return $id;
    }

    public function get_UsersForCommentsId($comments) {
        $users = array();
        foreach ($comments as $commentArray) {
            foreach ($commentArray as $comment) {
                array_push($users, Users::where('id',$comment->id_users)->get());
            }
        }
        return $users;
    }

}