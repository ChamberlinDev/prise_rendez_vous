<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{           
    public function registreView(){
        return view('security.registre');
    }

    public function registre(Request $request){
        $user=$request->validate([
            'name'=>'required',
            'firstname'=>'required',
            'role'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $user['password']=Hash::make($request->password);
        User::create($user);

         return redirect()->route('login')->with('success', 'inscription reussite! Connectez-vous maintenant');

    }

    public function loginView(){
        return view('security.login');
    }


    public function login(Request $request){

        $dat = [
            'email'=>  $request->email,
            'password'=> $request->password,
        ];
        if (Auth::attempt($dat)) {
            $user = Auth::user(); // Récupère l'utilisateur authentifié
    
            if ($user->role === 'medecin') {
                return redirect()->route('welcome'); 
            } else {
                return redirect()->route('registre'); 
            }
    
        } else {
            return redirect()->back()->with('error', 'Mot de passe ou email incorrect');
        }
        
    }

    public function logoutUser(){

        Auth::logout();

        return redirect()->route('login');

    }

}
