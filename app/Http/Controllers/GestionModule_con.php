<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Formation;


class GestionModule_con extends Controller
{
    public function afficher(){

        $modules=Module::All();
        return view('module.module',compact('modules'));
    }

    public function ajouter_module(){

        $formations = Formation::All();
        return view('module.ajouter_module',compact('formations'));
    }


    public function enregistrer_module(Request $r){
        $nom_module = $r->nom;
        $description_module = $r->description;
        $id_formation = $r->formation;

        $module = New module;
        $formation = Formation::Where('id_formation',$id_formation)
        ->get();

        $module->nom_module=$nom_module;
        $module->description_module=$description_module;
        $module->nom_formation_mo=$formation[0]->nom_formation;
        $module->id_formation_mo=$id_formation;

        $creer = $module->save();

        if($creer){
            return redirect('/liste_module');
        }
    }


}
