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

        $role = auth()->user()->Role;

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

    	return view('eventPastInfos', ['event' => $event, 'pictures' => $pictures, 'comments' => $comments, 'authors' => $authors, 'likes' => $likes, 'role'=>$role]);
	}


    public function Add_photo(){

        request()->validate([
                'AddPicure' => ['required','image'],
            ]);

        $path = request('AddPicure')->store('PastEventsPictures','public');

        $idevent = request('event');
         
        $pictures = new \App\Pictures;
        $pictures->Link = $path;
        $pictures->id_Users = auth()->id();
        $pictures->id_Events = $idevent;
        $pictures->save();

        return back();
    }

    public function Add_commentary(){
        request()->validate([
                'Commentary' =>['required'],
            ]);

        $comments = new \App\Comments;

        $pictures = request('picture');
        
        $comments->Content = request('Commentary');
        $comments->id_users = auth()->id();
        $comments->id_Pictures = $pictures;
        $comments->save();

        return back();
    }

    public function remove_comment(){
        $id_comment = request('id');

        $comment = new \App\Comments;
        $comment = $comment->get_CommentById($id_comment);
        $comment->delete();

        flash('Commentaire supprimé !')->success();
        return back();
    }

}