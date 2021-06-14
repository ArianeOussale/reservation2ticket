<?php

namespace App\Http\Controllers;

use App\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reserverController extends Controller
{
    function reserver(Request $request){
        $res=$request->all();
        $res["statut"]="en cours";
        $res["user_id"]=Auth::user()->id;
        reservation::create($res);
        return redirect('reservation');

    }
    function valider($id){
        $reserve=reservation::find($id);
        $reserve->update(["statut"=>"validée"]);
        return redirect('listereserve');
    }

    function annuler ($id){
        $reserve=reservation::find($id);
        $reserve->update(["statut"=>"annulée"]);
        return redirect('listereserve');
    }
}
