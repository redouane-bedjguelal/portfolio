<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnimeController extends Controller
{
    //
        public function anime(){
    //Requête récupérant tous les adhérents
    $mesAnime = \App\metier\Anime::orderBy('nomanime', 'asc')->get();
    return view ('anime', compact('mesAnime'));
    }
    //test
}
