<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class GestionApprenant_con extends Controller
{
    public function afficher(){
        $apprenants=Apprenant::All();
        return view('apprenant.apprenant',compact('apprenants'));
    }

    public function ajouter_apprenant(){
        return view('apprenant.ajouter_apprenant');
    }

    public function enregistrer_apprenant(Request $r){
        $nom_apprenant = $r->nom;
        $email_apprenant = $r->email;
        $tel_apprenant = $r->telephone;
        $adresse_apprenant = $r->adresse;
        $langue_apprenant = $r->langue;
        $niveau_apprenant = $r->niveau;
        $situation_apprenant = $r->situation;

        $apprenant = New Apprenant;

        $apprenant->nom_apprenant=$nom_apprenant;
        $apprenant->email_apprenant=$email_apprenant;
        $apprenant->tel_apprenant=$tel_apprenant;
        $apprenant->adresse_apprenant=$adresse_apprenant;
        $apprenant->langues=$langue_apprenant;
        $apprenant->niveau_scolaire=$niveau_apprenant;
        $apprenant->situation=$situation_apprenant;
        $creer = $apprenant->save();

        if($creer){
            return redirect('/liste_apprenant');
        }
    }

    public function editer_apprenant(Request $r){
        $ids = $r->ids;
        $apprenant = Apprenant::Where('id_apprenant',$ids)
        ->get();

        return view('apprenant.editer_apprenant',compact('apprenant'));
    }

    public function modifier_apprenant(Request $r){
        $ids=$r->id_apprenant;
        $nom_apprenant = $r->nom;
        $email_apprenant = $r->email;
        $tel_apprenant = $r->telephone;
        $adresse_apprenant = $r->adresse;
        $langue_apprenant = $r->langue;
        $niveau_apprenant = $r->niveau;
        $situation_apprenant = $r->situation;

        $apprenant = Apprenant::Where('id_apprenant',$ids)
        ->first();

        $apprenant->nom_apprenant=$nom_apprenant;
        $apprenant->email_apprenant=$email_apprenant;
        $apprenant->tel_apprenant=$tel_apprenant;
        $apprenant->adresse_apprenant=$adresse_apprenant;
        $apprenant->langues=$langue_apprenant;
        $apprenant->niveau_scolaire=$niveau_apprenant;
        $apprenant->situation=$situation_apprenant;

        $creer = $apprenant->save();

        if($creer){
            return redirect('/liste_apprenant');
        }


    }

    public function supprimer_apprenant(Request $r){
        $ids=$r->ids;
        $apprenant = Apprenant::Where('id_apprenant',$ids)
        ->delete();

        return redirect('/liste_apprenant');


    }


}
