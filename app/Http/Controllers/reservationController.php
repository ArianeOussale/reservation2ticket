<?php

namespace App\Http\Controllers;

use App\depart;
use App\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reservationController extends Controller
{
    function reservation(){
    $trajets=depart::all();
    return view('front.reservation',compact('trajets'));
    }

    function myreserve (){
        $reservations=reservation::where("user_id","=",Auth::user()->id)->get();
        return view('front.myreserve',compact("reservations"));
    }

}
