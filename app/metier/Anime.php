<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;

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
    
    public function __construct(){
        $this->numanime = 0;
    }
}
