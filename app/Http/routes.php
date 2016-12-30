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
Route::get('/listerAnime', 'AnimeController@getTousLesAnime');

// Redirection vers le formulaire de modification d'un anime
Route::get('/modifierAnime/{id}', ['uses' => 'AnimeController@updateAnime']);

// Validation d'un ajout/modification et retour à la liste des anime
Route::post('/validerAnime', 'AnimeController@validateAnime');

Route::get('/pageMenu', function() {
    return view('pageMenu');
});

Route::get('/accueil', function() {
    return view('accueilDC');
});

Route::get('/aboutus', function() {
    return view('aboutus');
});

// Accueil LOG
Route::get('/welcome', function() {
    return view('accueilLOG');
});

// Page anime
Route::get('/animeQCQ', function() {
    return view('pageAnime');
});

// Liste anime
Route::get('/animeList', 'AnimeController@getTousLesAnimePaginate');

// Liste episodes (du plus récent au plus ancien)
Route::get('/recentEpisodes', 'EpisodeController@getTousLesEpisodesPaginate');