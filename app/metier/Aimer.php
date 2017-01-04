<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Aimer extends Model
{
    // On déclare la table studio
    
    protected $table = 'aimer';
    
    protected $fillable = [
        'numanime',
        'loginuser'
    ];
    
    // Constructeur de studio
    public function __construct(){
        $this->numanime = 0;
    }
    
    // Fonction récupérant toutes les lignes de la table
    public function getLike(){
        // Dialogue avec la BDD
        $lesLikes = DB::table('aimer')
                ->select()
                ->get();
        return $lesLikes;
    }
    
    // Fonction récupérant les likes d'un utilisateur
    public function getLikeByUser($loginUser){
        // Dialogue avec la BDD
        $mesLikes = DB::table('aimer')
                ->where('LOGINUSER', $loginUser)
                ->first();
        return $mesLikes;
    }
    
    // Fonction d'ajout d'un like dans la BDD
    public function addLike($login, $anime){
        // Dialogue avec la BDD
        DB::table('aimer')
                ->insert(['LOGINUSER' => $login, 'NUMANIME' => $anime]);
    }
}
