<?php

namespace App\Http\Controllers;

use Request;
use App\metier\Anime;
use App\metier\Genre;
use App\metier\Studio;
use App\metier\Episode;
use App\metier\Appartenance;
use Illuminate\Support\Facades\Session;
use Exception;

class EpisodeController extends Controller {

    // Fonction récupérant tous les épisodes (+ pagination)
    public function getTousLesEpisodesPaginate() {
        $unEpisode = new Episode();
        // Appel de la méthode de la classe métier Episode
        $mesEpisodes = Episode::orderBy('DATEHEURE','DESC')->paginate(12);
        
        $unAnime = new Anime();
        // Appel de la méthode de la classe métier Episode
        $mesAnime = $unAnime->getAnime();
        
        // On affiche la liste
        return view('recentEpisodes', compact('mesEpisodes', 'mesAnime'));
    }
}
