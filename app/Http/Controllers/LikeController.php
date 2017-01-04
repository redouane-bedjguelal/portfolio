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

class LikeController extends Controller {

    // Fonction ajoutant un like
    public function addLike($login, $id) {
        $unLike = new Aimer();
        $unLike->addLike($login, $id);
        return redirect('/welcome');
    }

}
