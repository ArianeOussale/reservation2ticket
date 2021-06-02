<?php

namespace App\Http\Controllers;

use App\depart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reservationController extends Controller
{
    function reservation(){
    $trajets=depart::all();
    return view('front.reservation',compact('trajets'));
    }

    function myreserve (){
        $utilisateur=Auth::user();
        $reservations=$utilisateur->user_reservations;
        dd( $reservations);
        return view('front.myreserve',compact("reservations"));
    }

}
