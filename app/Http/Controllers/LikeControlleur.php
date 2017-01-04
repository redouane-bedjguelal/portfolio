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
use App\metier\Aimer;
use Illuminate\Support\Facades\Session;
use Exception;

class EpisodeController extends Controller {

    // Fonction ajoutant un like
    public function addLike($login, $id){
        $like = new Aimer();
        $like->addLike($login, $id);
        $mesLikes = new Aimer();
        $mesLikes = $like->getLikeByUser($login);
        return view('pageUser', compact('login', 'mesLikes'));
    }

}
