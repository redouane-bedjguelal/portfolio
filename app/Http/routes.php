<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Redirection vers la page d'accueil
Route::get('/', function () { return view('pageMenu'); });

// Redirection vers le formulaire d'ajout d'un anime
Route::get('/ajouterAnime', 'AnimeController@addAnime');

// Redirection vers la liste des anime
Route::get('/listerAnime', 'AnimeController@getTouslesAnime');

// Validation d'un ajout/modification et retour à la liste des anime
Route::post('/validerAnime', 'AnimeController@validateAnime');

Route::get('/pageMenu', function() {
    return view('pageMenu');
});

Route::get('/pageMenu1', function() {
    return view('pageMenu1');
});