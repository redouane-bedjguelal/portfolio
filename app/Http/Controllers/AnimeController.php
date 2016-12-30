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

class AnimeController extends Controller {

    // Fonction récupérant tous les anime
    public function getTousLesAnime() {
        $unAnime = new Anime();
        // Appel de la méthode de la classe métier Anime
        $mesAnime = $unAnime->getAnime();

        // On affiche la liste
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

    // A FINIR
    public function validateAnime() {
        $idAnime = Request::input('numAnime');
        $nomAnime = Request::input('nomAnime');
        $annee = Request::input('annee');
        $saison = Request::input('saison');
        $nbep = Request::input('nbEp');
        $fini = Request::input('fini');
        $studio = Request::input('studio');
        $resume = Request::input('resume');
        $genre1 = Request::input('genre1');
        $genre2 = Request::input('genre2');
        $genre3 = Request::input('genre3');
        $unAnime = new Anime();
        $uneAppartenance = new Appartenance();
        // Modification d'un anime
        if ($idAnime > 0) {
            $unAnime->editAnime($idAnime, $studio, $nomAnime, $annee, $saison, $nbep, $fini, $resume);
            // Modification de l'appartenance => TO DO
            if ($uneAppartenance->getUneAppartenance($idAnime, $genre1) != null) {
                $uneAppartenance->editAppartenance($idAnime, $genre1);
            }
            // Ajout d'une appartenance
            else {
                $uneAppartenance->addAppartenance($idAnime, $genre1);
            }

            // Si genre 2 défini et différent de genre 1
            if ($genre2 > 0 && $genre2 != $genre1) {
                // Modification de l'appartenance => TO DO
                if ($uneAppartenance->getUneAppartenance($idAnime, $genre2) != null) {
                    $uneAppartenance->editAppartenance($idAnime, $genre2);
                }
                // Ajout d'une appartenance
                else {
                    $uneAppartenance->addAppartenance($idAnime, $genre2);
                }
            }
            // Si genre 3 définit et différent des genres 1 et 2
            if ($genre3 > 0 && $genre3 != $genre2 && $genre3 != $genre1) {
                // Modification de l'appartenance => TO DO
                if ($uneAppartenance->getUneAppartenance($idAnime, $genre3) != null) {
                    $uneAppartenance->editAppartenance($idAnime, $genre3);
                }
                // Ajout d'une appartenance
                else {
                    $uneAppartenance->addAppartenance($idAnime, $genre3);
                }
            }

            // Ajout d'un anime
            else {
                $unAnime->addAnime($nomAnime, $annee, $saison, $nbep, $fini, $studio, $resume);
                $uneAppartenance->addAppartenanceNom($nomAnime, $genre1);
                // Création d'une appartenance si le genre 2 est défini et différent du genre 1
                if ($genre2 > 0 && $genre2 != $genre1) {
                    $uneAppartenance->addAppartenanceNom($nomAnime, $genre2);
                }
                // Création d'une appartenance si le genre 3 est défini et différent des genres 2 et 3
                if ($genre3 > 0 && $genre3 != $genre2 && $genre3 != $genre1) {
                    $uneAppartenance->addAppartenanceNom($nomAnime, $genre3);
                }
            }
            return redirect('/listerAnime');
        }
    }

    // Modification d'un anime
    public function updateAnime($idAnime) {
        // Création et instanciation des variables
        $unAnime = new Anime();
        $appartenance1 = new Appartenance();
        $appartenance2 = new Appartenance();
        $appartenance3 = new Appartenance();
        $unGenre = new Genre();
        $unStudio = new Studio();

        // Récupération des données de l'anime/appartenances/genre/studio
        $unAnime = $unAnime->getAnimeById($idAnime);
        $mesGenres = $unGenre->getGenre();
        $mesStudios = $unStudio->getStudio();

        return view('formAnime', compact('unAnime', 'mesAppartenances', 'mesGenres', 'mesStudios'));
    }
    
    // Fonction récupérant tous les anime (+ pagination)
    public function getTousLesAnimePaginate() {
        // Appel de la méthode de la classe métier Anime
        $mesAnime = Anime::orderBy('NOMANIME')->paginate(12);
        
        $unGenre = new Genre();
        // Appel de la méthode de la classe métier Anime
        $mesGenres = $unGenre->getGenres();
        
        // On affiche la liste
        return view('animeList', compact('mesAnime', 'mesGenres'));
    }
}
