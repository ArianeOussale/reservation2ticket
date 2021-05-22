<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
 function connexionvue(){
     return view('front.connexion');
 }
 function inscriptionvue(){
     return view('front.inscription');
 }

 function connexion(Request $request){
     if(Auth::attempt($request->except('_token'))){
        return redirect('/');
     }else{
        return redirect('connexion');
     }
 }

 function inscription(Request $request){
    $data=$request->except('confirm_password');
    $data["password"]=Hash::make($data["password"]);
    $data["role_id"]=3;
    User::create($data);
    return redirect('connexion');
 }

 function deconnexion(){
    Auth::logout();
    return redirect('/');
 }
 
}

