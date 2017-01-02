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
        $erreur = "";
        $login = Request::input('login');
        $pwd = Request::input('password');
        $user = new User();
        $connected = $user->login($login, $pwd);
        if($connected){
            return view('accueilLOG');
        }
        else{
            $erreur = "Unknown username or password !";
            return view('accueilDC', compact('erreur'));
        }
    }
    
    // Fonction de déconnexion
    public function signOut(){
        $user = new User();
        $user->logout();
        return redirect('/accueil');
    }
    
    // Fonction d'inscription
    public function signUp(){
        $user = new User();
        $erreur = "";
        $login = Request::input('login');
        $pwd = Request::input('password');
        if($user->checkLogin($login)){
            $user->addUser($login, $pwd);
            $erreur = "Account created successfully !";
        }
        else{
            $erreur = "Username already in use.";
        }
        return view('accueilDC', compact('erreur'));
    }
    
    // Fonction de modification d'un utilisateur TO DO
    public function modification($loginUser){
        $unUser = new User();
        $unUser = $unUser->getAdherent($id);
        $unNomAdherent = $unAdh->getNomAdherent($id);
        $unPrenomAdherent = $unAdh->getPrenomAdherent($id);
        $uneVilleAdherent = $unAdh->getVilleAdherent($id);
        
        return view('vues/formAdherentModif', compact('unAdherent','unNomAdherent','unPrenomAdherent','uneVilleAdherent'));
    }
    
    // Fonction récupérant les informations d'un utilisateur
    public function showUser($idUser){
        $user = new User();
        $user = $user->getUserByName($idUser);
        return view('pageUser.id', compact('user'));
    }
    
    // Fonction récupérant l'ID d'un utilisateur via la session
    public function getCurrentUser(){
        $id = Auth::user()->name;
        return view('pageUser', compact('id'));
    }
}
