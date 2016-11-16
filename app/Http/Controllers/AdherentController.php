<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdherentController extends Controller
{
    public function adherents(){
    //Requête récupérant tous les adhérents
    $mesAdherents = \App\metier\Adherent::orderBy('nom_adherent', 'asc')->get();
    return view ('adherents', compact('mesAdherents'));
    }
    
    public function modification($id){
        $unAdh = new Adherent();
        $unAdherent = $unAdh->getAdherent($id);
        $unNomAdherent = $unAdh->getNomAdherent($id);
        $unPrenomAdherent = $unAdh->getPrenomAdherent($id);
        $uneVilleAdherent = $unAdh->getVilleAdherent($id);
        
        return view('vues/formAdherentModif', compact('unAdherent','unNomAdherent','unPrenomAdherent','uneVilleAdherent'));
    }
}
