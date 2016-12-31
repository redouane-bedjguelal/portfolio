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

class GenreController extends Controller {

    // Fonction récupérant tous les genres
    public function getTousLesGenres() {
        $unGenre = new Genre();
        // Appel de la méthode de la classe métier Genre
        $mesGenres = $unGenre->getGenres();
        
        // On affiche la liste
        return view('genreList', compact('mesGenres'));
    }
}
