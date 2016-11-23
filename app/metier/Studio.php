<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Studio extends Model
{
    // On déclare la table studio
    
    protected $table = 'studio';
    
    protected $fillable = [
        'numstudio',
        'nomstudio'
    ];
    
    // Constructeur de studio
    public function __construct(){
        $this->numstudio = 0;
    }
    
    // Fonction récupérant tous les studios
    public function getStudio(){
        // Dialogue avec la BDD
        $lesStudios = DB::table('studio')
                ->select()
                ->get();
        return $lesStudios;
    }
}
