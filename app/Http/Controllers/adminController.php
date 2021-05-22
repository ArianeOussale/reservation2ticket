<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function admin(){
        return view('back-end.admin');
    }
    function guichet(){
        return view('back-end.guichet');
    }
    function listereserve(){
        return view('back-end.listereservation');
    }
    function listetrajet(){
        return view('back-end.listetrajet');
    }
    function listeutilisateur(){
        return view('back-end.listeutilisateur');
    }
    function modiftrajet(){
        return view('back-end.modifiertrajet');
    }
    function nvotrajet(){
        return view('back-end.nouveautrajet');
    }
    function utilisateur(){
        return view('back-end.nouveauutilisateur');

    }


}
