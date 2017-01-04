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
Route::get('/', function () {
    return view('pageMenu');
});

// Redirection vers le formulaire d'ajout d'un anime
Route::get('/ajouterAnime', 'AnimeController@addAnime');

// Redirection vers la liste des anime
Route::get('/animeListSimple', 'AnimeController@getTousLesAnime');

// Redirection vers le formulaire de modification d'un anime
Route::get('/modifierAnime/{id}', ['uses' => 'AnimeController@updateAnime']);

// Redirection vers la page de l'anime (avec l'id)
Route::get('/anime/{id}', ['uses' => 'AnimeController@showAnime']);

// Validation d'un ajout/modification et retour à la liste des anime
Route::post('/validerAnime', 'AnimeController@validateAnime');

// Redirection vers la page de l'épisode (avec les id anime/episode)
Route::get('/anime/{idAnime}/{idEpisode}', ['uses' => 'EpisodeController@showEpisode']);

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

// Redirection vers le formulaire d'ajout d'un anime
Route::get('/ajouterEpisode', 'EpisodeController@formEpisode');

// Liste anime  
Route::get('/animeList', 'AnimeController@getTousLesAnimePaginate');

// Lste anime par genre
Route::get('/animeList/{idGenre}', ['uses' => 'AnimeController@getTousLesAnimeParGenre']);


// Lste anime par genre
Route::get('/animeList/{idGenre}', ['uses' => 'AnimeController@getTousLesAnimeParGenre']);


// Liste genres
Route::get('/genreList', 'GenreController@getTousLesGenres');

// Liste episodes (du plus récent au plus ancien)
Route::get('/recentEpisodes', 'EpisodeController@getTousLesEpisodesPaginate');

// Connexion
Route::post('/login', 'UserController@signIn');

// Inscription
Route::post('/signUp', 'UserController@signUp');

// Déconnexion
Route::get('/signOut', 'UserController@signOut');

// Affichage de la page perso de l'utilisateur
Route::get('/userPage/{id}', ['uses' => 'UserController@showUser']);

// Appel de la fonction d'ajout un like
Route::get('/like/{login}/{id}', ['uses' => 'LikeController@addLike']);

// Ajout d'un épisode
Route::post('/validerEpisode', 'EpisodeController@addEpisode');
