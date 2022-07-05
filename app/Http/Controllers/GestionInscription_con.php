<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Apprenant;
use App\Models\Inscription;


class GestionInscription_con extends Controller
{
    public function afficher(){
        $inscriptions=Inscription::All();
        return view('inscription.inscription',compact('inscriptions'));
    }

    public function ajouter_inscription(){
        $formations = Formation::All();
        $apprenants = Apprenant::All();

        return view('inscription.ajouter_inscription',[
            'formations'=>formations,
            'apprenants'=>apprenants
        ]);
    }


    public function enregistrer_inscription(Request $r){
        $id_apprenant = $r->apprenant;
        $id_formation = $r->formation;

        $inscription = New Inscription;
        $formation = Formation::Where('id_formation',$id_formation)
        ->get();

        $apprenant = Apprenant::Where('id_apprenant',$id_apprenant)
        ->get();


        $inscription->nom_apprenant=$apprenant[0]->nom_apprenant;
        $inscription->nom_formation=$formation[0]->nom_formation;
        $inscription->id_formation_in=$id_formation;
        $inscription->id_apprenant_in=$id_apprenant;

        $creer = $module->save();

        if($creer){
            return redirect('/liste_inscription');
        }
    }

}
