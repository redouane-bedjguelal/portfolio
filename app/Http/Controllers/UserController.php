<?php

namespace App\Http\Controllers;

use Request;
use App\metier\Anime;
use App\metier\Genre;
use App\metier\Studio;
use App\metier\Episode;
use App\metier\Appartenance;
use App\metier\User;
use Illuminate\Support\Facades\Session;
use Exception;

class UserController extends Controller
{
    public function user(){
    //Requête récupérant tous les adhérents
    $mesUtilisateurs = \App\metier\Utilisateur::orderBy('IDUSER', 'asc')->get();
    return $mesUtilisateurs;
    }
    
    // Fonction de connexion
    public function signIn(){
        $login = Request::input('login');
        $pwd = Request::input('password');
        $user = new User();
        $connected = $user->login($login, $pwd);
        if($connected){
            return view('welcome');
        }
        else{
            
        }
    }
    
    // Fonction de modification d'un utilisateur
    public function modification($loginUser){
        $unUser = new User();
        $unUser = $unUser->getAdherent($id);
        $unNomAdherent = $unAdh->getNomAdherent($id);
        $unPrenomAdherent = $unAdh->getPrenomAdherent($id);
        $uneVilleAdherent = $unAdh->getVilleAdherent($id);
        
        return view('vues/formAdherentModif', compact('unAdherent','unNomAdherent','unPrenomAdherent','uneVilleAdherent'));
    }
}
