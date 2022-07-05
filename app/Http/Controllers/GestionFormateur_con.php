<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formateur;

class GestionFormateur_con extends Controller
{
    public function afficher(){
        $formateurs=Formateur::All();
        return view('formateur.formateur',compact('formateurs'));
    }

    public function ajouter_formateur(){
        return view('formateur.ajouter_formateur');
    }

    public function enregistrer_formateur(Request $r){
        $nom_formateur = $r->nom;
        $email_formateur = $r->email;
        $tel_formateur = $r->telephone;
        $adresse_formateur = $r->adresse;
        $qualification = $r->qualification;
        $contrat = $r->contrat;

        $formateur = New Formateur;

        $formateur->nom_formateur=$nom_formateur;
        $formateur->email_formateur=$email_formateur;
        $formateur->tel_formateur=$tel_formateur;
        $formateur->adresse_formateur=$adresse_formateur;
        $formateur->qualification=$qualification;
        $formateur->type_contrat=$contrat;
       
        $creer = $formateur->save();

        if($creer){
            return redirect('/liste_formateur');
        }
    }

    public function editer_formateur(Request $r){
        $ids = $r->ids;
        $formateur = Formateur::Where('id_formateur',$ids)
        ->get();

        return view('formateur.editer_formateur',compact('formateur'));
    }

    public function modifier_formateur(Request $r){
        $ids= $r->ids;
        $nom_formateur = $r->nom;
        $email_formateur = $r->email;
        $tel_formateur = $r->telephone;
        $adresse_formateur = $r->adresse;
        $qualification = $r->qualification;
        $contrat = $r->contrat;

        $formateur = Formateur::Where("id_formateur",$ids)
        ->first();

        $formateur->nom_formateur=$nom_formateur;
        $formateur->email_formateur=$email_formateur;
        $formateur->tel_formateur=$tel_formateur;
        $formateur->adresse_formateur=$adresse_formateur;
        $formateur->qualification=$qualification;
        $formateur->type_contrat=$contrat;
       
        $creer = $formateur->save();

        if($creer){
            return redirect('/liste_formateur');
        }

    }

    public function supprimer_formateur(Request $r){
        $ids=$r->ids;
        $formateur = Formateur::Where('id_formateur',$ids)
        ->delete();

        return redirect('/liste_formateur');
    }

}
