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
}
