<?php

use App\depart;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $trajets=depart::all();
    return view('front.accueil',compact('trajets'));
});
Route::get('inscription',"authController@inscriptionvue");
Route::post('inscription',"authController@inscription");

Route::get('connexion',"authController@connexionvue");
Route::post('connexion',"authController@connexion");

Route::get('deconnexion',"authController@deconnexion");

Route::get('reservation',"reservationController@reservation");

Route::get('admin',"adminController@admin");

Route::get('guichet',"adminController@guichet");

Route::get(' listereserve',"adminController@listereserve");

Route::get('listetrajet',"adminController@listetrajet");

Route::get('listeutilisateur',"adminController@listeutilisateur");

Route::get('modiftrajet',"adminController@modiftrajet");

Route::get('nvotrajet',"adminController@nvotrajet");

Route::get('utilisateur',"adminController@utilisateur");

Route::get('connect',"connexionController@connect");

Route::post('connectform',"connexionController@connectform");
Route::get('deconnect',"connexionController@deconnect");
Route::post('ajoututilisateur',"userController@ajoututilisateur");

Route::post('trajet',"trajetController@trajet");

Route::post('reserver',"reserverController@reserver");

Route::get('valider/{id}',"reserverController@valider");

Route::get('annuler/{id}',"reserverController@annuler");

Route::get('myreserve',"reservationController@myreserve");

Route::get('profil',"userController@profil");
Route::post('profil',"userController@profilform");

Route::get('supprimer/{id}',"userController@supprimer");
