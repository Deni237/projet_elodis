<?php

namespace App\Http\Controllers;
use App\Models\Utilisateur;
use App\Models\Formation;
use App\Models\Apprenant;
use App\Models\Formateur;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $r){
        if($r->session()->get('user_id')==""){
            return redirect('/login');
        }else {
            $username=$r->session()->get('user_nom');
            $capsule = array(
                "username"=>$username
            );

            return redirect('/dashboard')->with($capsule);
        }
        
    }

    public function connexion($value=''){
        return view('login');
    }

    public function verification(Request $r){
        $email=$r->email;
        $pass=$r->pass;
        $session = Utilisateur::where('email_user',$email)->where('pass_user',$pass)->get();

        if(count($session)>0){
            
            $r->session()->put('user_id',$session[0]->id_user);
            $r->session()->put('user_nom',$session[0]->nom_user);
            $r->session()->save();

            return redirect('/dashboard');

        } else{
            return redirect('/login')->with('msg','identifiant incorrect');
        }
    }

    public function protection(Request $r){

        if($r->session()->get('user_id')==""){

            return view('login');
        }else {
            $username=$r->session()->get('user_nom');
            $capsule = array(
                "username"=>$username
            );

            return redirect('/dashboard')->with($capsule);
        }
    }

    public function dashboard(){
        $apprenant = Apprenant::All()->Count();
        $formateur = Formateur::All()->Count();
        $formation = Formation::All()->Count();

        return view('dashboard',[
            'apprenants'=>$apprenant,
            'formateurs'=>$formateur,
            'formations'=>$formation
        ]);
    }
}
