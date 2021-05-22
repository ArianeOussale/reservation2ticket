<?php

namespace App\Http\Controllers;

use App\depart;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    function reservation(){

        $trajets=depart::all();
    return view('front.reservation',compact('trajets'));
    }
}
