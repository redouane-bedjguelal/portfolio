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
    
    // Fonction récupérant l'ID d'un anime via son nom
    public function getIdAnimeNom($nomanime){
        // Dialogue avec la BDD
        $idAnime = DB::table('anime')
                ->where('NOMANIME', $nomanime)
                ->value('NUMANIME');
        return $idAnime;
    }
    
    public function getAnimeById($idAnime){
        // Dialogue avec la BDD
        $unAnime = DB::table('anime')
                ->where('NUMANIME', $idAnime)
                ->first();
        return $unAnime;
    }
    
    // Fonction d'ajout d'un anime dans la base
    public function addAnime($nomAnime, $annee, $saison, $nbep, $fini, $studio, $resume){
        // Dialogue avec la BDD
        DB::table('anime')
                ->insert(['NOMANIME' => $nomAnime, 'NUMSTUDIO' => $studio, 'SAISONANIME' => $saison, 'ANNEEANIME' => $annee, 'NBEPISODES' => $nbep, 'RESUME' => $resume, 'ESTFINI' => $fini]);
    }
    
    // Fonction de modification d'un anime dans la BDD
    public function editAnime($idAnime, $studio, $nomAnime, $annee, $saison, $nbep, $fini, $resume){
        // Dialogue avec la BDD
        DB::table('anime')
                ->where('NUMANIME', $idAnime)
                ->update(['NOMANIME' => $nomAnime, 'NUMSTUDIO' => $studio, 'SAISONANIME' => $saison, 'ANNEEANIME' => $annee, 'NBEPISODES' => $nbep, 'RESUME' => $resume, 'ESTFINI' => $fini]);
    }
}
