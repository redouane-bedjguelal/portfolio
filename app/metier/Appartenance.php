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
    
    public function getAppartenance(){
        // Dialogue avec la BDD
        $lesAppartenances = DB::table('appartenir')
                ->select()
                ->get();
        return $lesAppartenances;
    }
    
    public function getUneAppartenance($idAnime, $idGenre){
        //Dialogue avec la BDD
        $uneAppartenance = DB::table('appartenir')
                ->where([['NUMANIME', $idAnime], ['NUMGENRE', $idGenre]])
                ->select()
                ->get();
        return $uneAppartenance;
    }
    
    public function addAppartenance($numanime, $numgenre){
        DB::table('appartenir')
                ->insert(['NUMANIME' => $numanime, 'NUMGENRE' => $numgenre]);
    }
    
    public function addAppartenanceNom($nomanime, $numgenre){
        $unAnime = new Anime();
        $idAnime = $unAnime->getIdAnimeNom($nomanime);
        $this->addAppartenance($idAnime, $numgenre);
    }
    
    public function editAppartenance($idAnime, $idGenre){
        DB::table('appartenir')
                ->where([['NUMANIME', $idAnime], ['NUMGENRE', $idGenre]])
                ->update(['NUMANIME' => $idAnime, 'NUMGENRE' => $idGenre]);
    }
}
