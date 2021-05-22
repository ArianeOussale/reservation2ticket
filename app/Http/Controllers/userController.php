<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    function ajoututilisateur(Request $request){
        $don=$request->all();
        $don['password']=Hash::make( $don['password']);
        User::create($don);
        return redirect('listeutilisateur');
    }
}
