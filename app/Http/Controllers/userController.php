<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    function ajoututilisateur(Request $request){
        $don=$request->all();
        $don['password']=Hash::make( $don['password']);
        User::create($don);
        return redirect('listeutilisateur');
    }
    function profil(){
        return view('back-end.profil');
    }
    function profilform(Request $request){
        $use=User::find(Auth::user()->id);
        $use->update($request->all());
        return redirect('profil');
    }

    function supprimer($id){
        $us=User::find($id);
        $us->delete();
        return redirect('listeutilisateur');
    }

}
