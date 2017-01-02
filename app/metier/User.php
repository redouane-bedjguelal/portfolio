<?php

namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
    // On déclare la table utilisateur
    
    protected $table = 'user';
    
    protected $fillable = [
        'loginuser',
        'pwduser',
        'iduser',
        'avataruser',
        'statutuser'
    ];
    
    // Constructeur d'utilisateur
    public function __construct(){
        $this->iduser = 0;
    }
    
    // Fonction de connexion
    public function login($login, $pwd){
        $connected = false;
        $user = DB::table('utilisateur')
                ->select()
                ->where('LOGINUSER', '=', $login)
                ->first();
        if($user){
            if($user->PWDUSER == $pwd){
                Session::put('id', $user->LOGINUSER);
                $connected = true;
            }
        }
        return $connected;
    }
    
    // Fonction de déconnexion
    public function logout(){
        Session::put('id', 0);
    }

    // Fonction de modification d'un utilisateur TO DO
    public function editUser($loginUser){
        
    }
    
    // Fonction de récupération des données utilisateur via le login
    public function getUserByName($loginUser){
        // Dialogue avec la BDD
        $user = DB::table('utilisateur')
                ->where('LOGINUSER', $loginUser)
                ->first();
        return $user;
    }
    
    // Fonction vérifiant la disponibilité du login
    public function checkLogin($loginUser){
        $dispo = true;
        //Dialogue avec la BDD
        $user = DB::table('utilisateur')
                ->where('LOGINUSER', $loginUser)
                ->first();
        if($user){
            $dispo = false;
        }
        return $dispo;
    }
    
    // Fonction ajoutant un utilisateur dans la base de données
    public function addUser($login, $pwd){
        //Dialogue avec la BDD
        DB::table('utilisateur')
                ->insert(['LOGINUSER' => $login, 'PWDUSER' =>$pwd]);
    }
}
