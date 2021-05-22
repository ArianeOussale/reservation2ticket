<?php

namespace App\Http\Controllers;

use App\depart;
use Illuminate\Http\Request;

class trajetController extends Controller
{
    function trajet (Request $request){
        depart::create($request->all());
        return redirect('listetrajet');
    }


}
