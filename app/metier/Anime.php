<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Anime extends Model
{
    //On déclare la table Anime
    
    protected $table = 'anime';
    
    protected $fillable = [
        'numanime',
        'numstudio',
        'nomanime',
        'saisonanime',
        'anneeanime',
        'nbepisodes',
        'resume',
        'estfini'
    ];
    
    // Constructeur d'anime
    public function __construct(){
        $this->numanime = 0;
    }
    
    // Fonction récupérant tous les anime dans la base
    public function getAnime() {
        // Dialogue avec la BDD
        $lesAnime= DB::table('anime')
                ->Select()
                ->get();
        return $lesAnime;
    }
}
