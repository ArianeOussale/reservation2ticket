<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class connexionController extends Controller
{
    function connect(){
        return view('back-end.connexion');
    }
    function connectform(Request $request){

            if(Auth::attempt($request->except('_token'))){
               return redirect('admin');
            }else{
               return redirect('connect');
            }

        }
}
