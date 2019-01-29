<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsPastsController extends Controller
{
    public function page() {
    	$events = new \App\Events;
    	$events = $events->get_EventsByDate('<');

    	return view('eventsPasts', ['events' => $events]);
	}

	public function page_infos() {
    	$event = new \App\Events;
    	$event = $event->get_EventById(request('id'));

    	$pictures = new \App\Pictures;
    	$pictures = $pictures->get_PicturesForEventId(request('id'));

    	if ($pictures == NULL){
	    	$comments = NULL;
	    	$likes = NULL;
    	}
    	else{
    		$comments = new \App\Comments;
    		$comments = $comments->get_CommentsForPicturesId($pictures);

    		$authors = new \App\Users;
    		$authors = $authors->get_UsersForCommentsId($pictures, $comments);

	    	$likes = new \App\Likes;
    	}

    	return view('eventPastInfos', ['event' => $event, 'pictures' => $pictures, 'comments' => $comments, 'authors' => $authors, 'likes' => $likes]);
	}

}