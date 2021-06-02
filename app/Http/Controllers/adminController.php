<?php

namespace App\Http\Controllers;

use App\depart;
use App\reservation;
use App\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function __construct()
    {
        $this->middleware("authM");
    }
    function admin(){
        return view('back-end.admin');
    }
    function guichet(){
        return view('back-end.guichet');
    }
    function listereserve(){
        $reservation=reservation::all();
        return view('back-end.listereservation',compact('reservation'));
    }
    function listetrajet(){
        $trajets=depart::all();
        return view('back-end.listetrajet',compact('trajets'));
    }
    function listeutilisateur(){
        $user=User::all();
        return view('back-end.listeutilisateur',compact('user'));
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
