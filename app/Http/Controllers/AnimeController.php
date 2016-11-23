<?php

namespace App\Http\Controllers;

use Request;
use App\metier\Anime;
use App\metier\Genre;
use App\metier\Studio;
use Illuminate\Support\Facades\Session;
use Exception;

class AnimeController extends Controller {

    // Fonction récupérant tous les anime
    public function getTousLesAnime() {
        $unAnime = new Anime();
        // Appel de la méthode de la classe métier Anime
        $mesAnime = $unAnime->getAnime();
        ;
        // On affiche la liste de ces frais
        return view('listerAnime', compact('mesAnime'));
    }
    
    // Fonction appelant le formulaire d'ajout d'anime
    public function addAnime() {
        
        // Déclaration des variables
        $unGenre = new Genre();
        $unStudio = new Studio();
        
        // Appel des méthodes des classes métiers
        $lesGenres = $unGenre->getGenre();
        $lesStudios = $unStudio->getStudio();
        
        // Redirection vers la page formAnime avec passages des genres et des studios
        return view('formAnime', compact('lesGenres', 'lesStudios'));
    }
    
    public function validateAnime(){
        $idAnime = Request::input('numAnime');
        $nomAnime = Request::input('nomAnime');
        $annee= Request::input('annee');
        $saison= Request::input('saison');
        $nbep = Request::input('nbEp');
        $fini = Request::input('fini');
        $studio = Request::input('studio');
        $resume = Request::input('resume');
        if ($idAnime > 0){}
        else{}
    }
}
