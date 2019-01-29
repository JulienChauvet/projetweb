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
Route::get('/évènements_futurs/inscription:{id}','EventsFutursController@registration');
Route::get('/évènements_futurs/désinscription:{id}','EventsFutursController@unregistration');

// EVENT PASTS CONTROLLER
Route::get('/évènements_passés','EventsPastsController@page');
Route::get('/évènements_passés/évènement:{id}','EventsPastsController@page_infos');

// SHOP CONTROLLER
Route::get('/boutique','ShopController@page');
Route::get('/boutique/categorie:{id}','ShopController@pageFilteredByCategory');
Route::get('/boutique/ajout_au_panier:{id}','ShopController@addToCart');

// ORDERS CONTROLLER
Route::get('/boutique/commandes','OrdersController@page');

// NEW CATEGORY CONTROLLER
Route::get('/boutique/nouvelle_catégorie','NewCategoryController@page');
Route::post('/boutique/nouvelle_catégorie','NewCategoryController@addCategory');

// NEW ARTICLE CONTROLLER
Route::get('/boutique/nouvel_article','NewArticleController@page');
Route::post('/boutique/nouvel_article','NewArticleController@addArticle');

// IDEA CONTROLLER 
Route::get('/boîte_à_idée','IdeaController@page');
Route::POST('/ajout_suggestion','IdeaController@add_idea');
Route::get('/boîte_à_idée/validation:{idevent}','IdeaController@page_validation');
Route::post('/boîte_à_idée/validation','IdeaController@validation');

// NEW IDEA CONTROLLER
Route::get('/boîte_à_idée/ajout_suggestion','NewEventController@page');
Route::post('/boîte_à_idée/ajout_suggestion','NewEventController@add_idea');

// ACCOUNT CONTROLLER 
Route::get('/compte','AccountController@page');
Route::get('/compte/retirer_du_panier:{id}','AccountController@removeFromCart');


Route::view('/mention_légale', 'legalNotice');
Route::view('/politique', 'politic');
