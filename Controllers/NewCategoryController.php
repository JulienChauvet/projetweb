<?php

namespace App\Http\Controllers;


class NewCategoryController extends Controller
{

	public function page(){
		return view('NewCategorie');
	}

    public function addCategory(){

    	request()->validate([
    		'Category' => ['required','string','unique:mysql2.categories,Name'],
        ]);

    	$Category = new \App\Categories;
    	$Category->Name = request('Category');
    	$Category->save();

        flash("Catégorie ajoutée !")->success();
        return back();

    }

}
