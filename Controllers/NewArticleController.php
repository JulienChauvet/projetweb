<?php

namespace App\Http\Controllers;


class NewArticleController extends Controller
{

	public function page(){
		$categories = new \App\Categories;
        $categories= $categories::select('Name')->get();
        return view('NewArticle',['categories'=>$categories]);
	}

    public function addArticle(){

    	request()->validate([
    		'Article' => ['required','string'],
    		'Description' => ['required','string'], 
    		'Prix' => ['required','numeric'],
    		'Image' => ['required','image']

    	]);
        
    	$path = request('Image')->store('Articles', 'public');

        $categories= new \App\Categories;
        $belongs = new \App\Belong;
    	$shop = new \App\Shop;

    	$shop->Name = request('Article');
    	$shop->Description = request('Description');
    	$shop->Price = request('Prix');
    	$shop->PictureLink = $path;
    	$shop->save();

        $belongs->id=$categories->get_idCategorie(request('Catégorie'));
        $belongs->id_Articles=$shop->get_LastArticleId();
        $belongs->save();

        flash("Article ajouté !")->success();
    	return back();
    }

}
