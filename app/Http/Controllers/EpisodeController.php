<?php

namespace App\Http\Controllers;

use Request;
use View;
use App\metier\Anime;
use App\metier\Genre;
use App\metier\Studio;
use App\metier\Episode;
use App\metier\Appartenance;
use App\metier\User;
use Illuminate\Support\Facades\Session;
use Exception;

class EpisodeController extends Controller {

    // Fonction récupérant tous les épisodes (+ pagination)
    public function getTousLesEpisodesPaginate() {
        // Appel de la méthode de la classe métier Episode
        $mesEpisodes = Episode::orderBy('DATEHEURE', 'DESC')->paginate(12);

        $unAnime = new Anime();
        // Appel de la méthode de la classe métier Episode
        $mesAnime = $unAnime->getAnime();

        // On affiche la liste
        return view('recentEpisodes', compact('mesEpisodes', 'mesAnime'));
    }

    // Fonction récupérant les informations d'un épisode et l'affichant
    public function showEpisode($idAnime, $idEpisode) {
        $unAnime = new Anime();
        $unEpisode = new Episode();
        $unEpisode2 = new Episode();
        $mesAnime = $unAnime->getAnime();
        $mesEpisodes = $unEpisode->getEpisodesByIdAnime($idAnime);
        $unEpisode2->getEpisodeByIds($idAnime, $idEpisode);
        return View::make('pageEpisode', [
            'idAnime' => $idAnime,
            'idEpisode' => $idEpisode,
            'mesAnime' => $mesAnime,
            'mesEpisodes' => $mesEpisodes
        ]);
    }
    
    // Fonction ajoutant un épisode
    public function addEpisode() {
        $idAnime=Request::input('idAnime');
        $idEpisode=Request::input('idEpisode');
        $nom=Request::input('nom');
        $idVideo=Request::input('idVideo');
        $episode = new Episode();
        $episode->addEpisode($idAnime, $idEpisode, $nom, $idVideo);
        return redirect('/recentEpisodes');
    }

    // Fonction d'affichage du formulaire d'ajout d'un épisode
    public function formEpisode(){
        // Déclaration des variables
        $unAnime = new Anime();
        
        // Appel des méthodes des classes métiers
        $mesAnime = $unAnime->getAnime();
        
        // Redirection vers la page formAnime avec passages des genres et des studios
        return view('formEpisode', compact('mesAnime'));
    }
}
