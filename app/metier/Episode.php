<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Episode extends Model
{
    // On déclare la table genre
    
    protected $table = 'episode';
    
    protected $fillable = [
        'numanime',
        'numepisode',
        'nomepisode'
    ];
    
    // Constructeur de genre
    public function __construct(){
        $this->numgenre = 0;
    }
    
    // Fonction récupérant tous les épisodes dans la base
    public function getEpisode(){
        // Dialogue avec la BDD
        $lesGenres = DB::table('episode')
                ->select()
                ->get();
        return $lesEpisodes;
    }
}
