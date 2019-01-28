<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomepageController@page'); // arrivée sur le site

// HOMEPAGE CONTROLLER //
Route::get('/accueil', 'HomepageController@page');
Route::get('/deconnexion', 'HomepageController@disconnection');

// REGISTER CONTROLLER //
Route::get('/inscription','RegisterController@page');
Route::post('/inscription','RegisterController@treatment');

// LOGIN CONTROLLER
Route::get('/connexion','LoginController@page');
Route::post('/connexion','LoginController@treatment');

// EVENT FUTURS CONTROLLER
Route::get('/évènements_futurs','EventsFutursController@page');
Route::get('/évènements_futurs/évènement:{id}','EventsFutursController@page_infos');

// EVENT PASTS CONTROLLER
Route::get('/évènements_passés','EventsPastsController@page');
Route::get('/évènements_passés/évènement:{id}','EventsPastsController@page_infos');

// SHOP CONTROLLER
Route::get('/boutique','ShopController@page');
Route::get('/boutique/categorie:{id}','ShopController@pageFilteredByCategory');

// NEW CATEGORY CONTROLLER
Route::get('/nouvelle_catégorie','NewCategoryController@page');
Route::post('/nouvelle_catégorie','NewCategoryController@addCategory');

// NEW ARTICLE CONTROLLER
Route::get('/nouvel_article','NewArticleController@page');
Route::post('/nouvel_article','NewArticleController@addArticle');

// IDEA CONTROLLER 
Route::get('/boîte_à_idée','IdeaController@page');
Route::POST('/ajout_suggestion','IdeaController@add_idea');

// NEW IDEA CONTROLLER
Route::get('/ajout_suggestion','NewEventController@page');
Route::post('/ajout_suggestion','NewEventController@add_idea');

// ACCOUNT CONTROLLER 
Route::get('/compte','AccountController@page');

Route::view('/mention_légale', 'legalNotice');
Route::view('/politique', 'politic');
