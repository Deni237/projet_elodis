<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Module;



class GestionFormation_con extends Controller
{
    public function afficher(){
        $formations=Formation::All();
        return view('formation.formation',compact('formations'));
    }

    public function ajouter_formation(){
        return view('formation.ajouter_formation');
    }

    public function enregistrer_formation(Request $r){
        $nom_formation = $r->nom;
        $prix_formation = $r->prix;
        $description_formation = $r->description;
        $prerequis_formation = $r->prerequis;

        $formation = New formation;

        $formation->nom_formation=$nom_formation;
        $formation->prix_formation=$prix_formation;
        $formation->description=$description_formation;
        $formation->prerequis=$prerequis_formation;
        
       
        $creer = $formation->save();

        if($creer){
            return redirect('/liste_formation');
        }
    }

    public function editer_formation(Request $r){
        $ids = $r->ids;
        $formation = Formation::Where('id_formation',$ids)
        ->get();

        return view('formation.editer_formation',compact('formation'));
    }

    public function modifier_formation(Request $r){
        $ids = $r->ids;
        $nom_formation = $r->nom;
        $prix_formation = $r->prix;
        $description_formation = $r->description;
        $prerequis_formation = $r->prerequis;

        $formation = Formation::Where('id_formation',$ids)
        ->first();

        $formation->nom_formation=$nom_formation;
        $formation->prix_formation=$prix_formation;
        $formation->description=$description_formation;
        $formation->prerequis=$prerequis_formation;
        
       
        $creer = $formation->save();

        if($creer){
            return redirect('/liste_formation');
        }


    }

    public function supprimer_formation(Request $r){
        $ids=$r->ids;
        $module = Module::where('id_formation_mo',$ids)
        ->delete();

        $formation = Formation::Where('id_formation',$ids)
        ->delete();

        return redirect('/liste_formation');

    }





}
