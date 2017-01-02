<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Genre extends Model
{
    // On déclare la table genre
    
    protected $table = 'genre';
    
    protected $fillable = [
        'numgenre',
        'libellegenre'
    ];
    
    // Constructeur de genre
    public function __construct(){
        $this->numgenre = 0;
    }
    
    // Fonction récupérant tous les genres dans la base
    public function getGenre(){
        // Dialogue avec la BDD
        $lesGenres = DB::table('genre')
                ->select()
                ->get();
        return $lesGenres;
    }
    
    // Fonction récupérant un genre par son ID
    public function getLibelleGenreById($idGenre){
        // Dialogue avec la BDD
        $unGenre = DB::table('genre')
                ->where('NUMGENRE', $idGenre)
                ->value('LIBELLEGENRE');
        return $unGenre;
    }
    
    // Fonction récupérant tous les genre pour un anime
    public function getGenreByAnime($idAnime){
        $mesGenres = array('','','');
        $unGenre = new Genre();
        $mesAppartenances = new Appartenance();
        $nbApp = $mesAppartenances->getNombreAppartenancesById($idAnime)-1;
        $mesAppartenances = $mesAppartenances->getLesAppartenancesId($idAnime);
        for($i=0; $i <= $nbApp; $i++)
            {
            if($unGenre->getLibelleGenreById($mesAppartenances{$i}->NUMGENRE)!=null)
            $mesGenres[$i] = $unGenre->getLibelleGenreById($mesAppartenances{$i}->NUMGENRE);
            }
        return $mesGenres;
    }
}
