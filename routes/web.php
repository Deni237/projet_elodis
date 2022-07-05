<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GestionApprenant_con;
use App\Http\Controllers\GestionFormateur_con;
use App\Http\Controllers\GestionFormation_con;
use App\Http\Controllers\GestionModule_con;
use App\Http\Controllers\GestionInscription_con;



Route::get('/',[LoginController::class,"index"]);
Route::post('/verifier',[LoginController::class,"verification"]);
Route::get('/login',[LoginController::class,"connexion"]);
Route::get('/bienvenue',[LoginController::class,"protection"]);
Route::get('/dashboard',[LoginController::class,"dashboard"]);


Route::get('/liste_apprenant',[GestionApprenant_con::class,"afficher"]);
Route::get('/ajouter_apprenant',[GestionApprenant_con::class,"ajouter_apprenant"]);
Route::post('/enregistrer_apprenant',[GestionApprenant_con::class,"enregistrer_apprenant"]);
Route::get('/editer_apprenant',[GestionApprenant_con::class,"editer_apprenant"]);
Route::post('/modifier_apprenant',[GestionApprenant_con::class,"modifier_apprenant"]);
Route::get('/supprimer_apprenant',[GestionApprenant_con::class,"supprimer_apprenant"]);



Route::get('/liste_formateur',[GestionFormateur_con::class,"afficher"]);
Route::get('/ajouter_formateur',[GestionFormateur_con::class,"ajouter_formateur"]);
Route::post('/enregistrer_formateur',[GestionFormateur_con::class,"enregistrer_formateur"]);
Route::get('/editer_formateur',[GestionFormateur_con::class,"editer_formateur"]);
Route::post('/modifier_formateur',[GestionFormateur_con::class,"modifier_formateur"]);
Route::get('/supprimer_formateur',[GestionFormateur_con::class,"supprimer_formateur"]);


Route::get('/liste_formation',[GestionFormation_con::class,"afficher"]);
Route::get('/ajouter_formation',[GestionFormation_con::class,"ajouter_formation"]);
Route::post('/enregistrer_formation',[GestionFormation_con::class,"enregistrer_formation"]);
Route::get('/editer_formation',[GestionFormation_con::class,"editer_formation"]);
Route::post('/modifier_formation',[GestionFormation_con::class,"modifier_formation"]);
Route::get('/supprimer_formation',[GestionFormation_con::class,"supprimer_formation"]);


Route::get('/liste_module',[GestionModule_con::class,"afficher"]);
Route::get('/ajouter_module',[GestionModule_con::class,"ajouter_module"]);
Route::post('/enregistrer_module',[GestionModule_con::class,"enregistrer_module"]);

Route::get('/liste_inscription',[GestionInscription_con::class,"afficher"]);
Route::get('/ajouter_inscription',[GestionInscription_con::class,"ajouter_inscription"]);
Route::post('/enregistrer_inscription',[GestionInscription_con::class,"enregistrer_inscription"]);