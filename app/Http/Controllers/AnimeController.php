<?php

namespace App\Http\Controllers;


use Request;
use App\metier\Anime;
use Illuminate\Support\Facades\Session;
use Exception;

class AnimeController extends Controller
{
    //
    public function anime(){
    //Requête récupérant tous les anime
    $mesAnime = \App\metier\Anime::orderBy('nomanime', 'asc')->get();
    return view ('listerAnime', compact('mesAnime'));
    }
    
    public function getTousLesAnime(){
        $unAnime = new Anime();
        $mesAnime= $unAnime->getAnime();;
        // On affiche la liste de ces frais
        return view('listeFrais', compact('mesFrais', 'erreur'));
    }
}
