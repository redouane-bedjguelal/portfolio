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



Route::get('/', function () { return view('pageMenu'); });

Route::get('/ajouterManga','MangaController@ajoutManga');

Route::get('/listerAnime', 'AnimeController@getTouslesAnime');

Route::get('/pageMenu', function() {
    return view('pageMenu');
});

Route::get('/pageMenu1', function() {
    return view('pageMenu1');
});