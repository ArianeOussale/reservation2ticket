<?php

namespace App\Http\Controllers;

use App\reservation;
use Illuminate\Http\Request;

class reserverController extends Controller
{
    function reserver(Request $request){
        reservation::create($request->all());
        return redirect('reservation');

    }
}
