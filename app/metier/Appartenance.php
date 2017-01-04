<?php

namespace App\metier;
use DB;

use Illuminate\Database\Eloquent\Model;

class Appartenance extends Model
{
    // On déclare la table Appartenance (Lien Anime-Genre)
    
    protected $table = 'appartenance';
    
    protected $fillable = [
        'numanime',
        'numgenre'
    ];
    
    public function __construct(){
        $this->numanime = 0;
    }
    // Fonction récupérant toutes les appartenances
    public function getAppartenance(){
        // Dialogue avec la BDD
        $lesAppartenances = DB::table('appartenir')
                ->select()
                ->get();
        return $lesAppartenances;
    }
    
    // Fonction récupérant une appartenance
    public function getUneAppartenance($idAnime, $idGenre){
        //Dialogue avec la BDD
        $uneAppartenance = DB::table('appartenir')
                ->where([['NUMANIME', $idAnime], ['NUMGENRE', $idGenre]])
                ->select()
                ->get();
        return $uneAppartenance;
    }
    
    // Fonction renvoyant toutes les appartenances pour un anime
    public function getLesAppartenancesId($idAnime){
        // Dialogue avec la BDD
        $mesAppartenances = DB::table('appartenir')
                ->where('NUMANIME', $idAnime)
                ->select()
                ->get();
        return $mesAppartenances;
    }
    
    // Fonction renvoyant toutes les appartenances pour un genre
    public function getLesAppartenancesGenre($idGenre){
        // Dialogue avec la BDD
        $mesAppartenances = DB::table('appartenir')
                ->where('NUMGENRE', $idGenre)
                ->select()
                ->get();
        return $mesAppartenances;
    }
    
    // Fonction ajoutant une appartenance à la base de données
    public function addAppartenance($numanime, $numgenre){
        DB::table('appartenir')
                ->insert(['NUMANIME' => $numanime, 'NUMGENRE' => $numgenre]);
    }
    
    // Fonction ajoutant une appartenance à la base de données via le nom de l'anime
    public function addAppartenanceNom($nomanime, $numgenre){
        $unAnime = new Anime();
        $idAnime = $unAnime->getIdAnimeNom($nomanime);
        $this->addAppartenance($idAnime, $numgenre);
    }
    
    // Fonction modifiant une appartenance
    public function editAppartenance($idAnime, $idGenre){
        DB::table('appartenir')
                ->where([['NUMANIME', $idAnime], ['NUMGENRE', $idGenre]])
                ->update(['NUMANIME' => $idAnime, 'NUMGENRE' => $idGenre]);
    }
    
    // Fonction récupérant le nombre d'appartenances d'un anime
    public function getNombreAppartenancesById($idAnime){
        // Dialogue avec la BDD
        $nbApp = DB::table('appartenir')
                ->groupBy('NUMANIME')
                ->having('NUMANIME', '=', $idAnime)
                ->count();
        return $nbApp;
    }
}
