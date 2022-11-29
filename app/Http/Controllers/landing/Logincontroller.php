<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function index(){
        return view('landing.sesion.signin');
    }
    public function store(Request $request){
        $credenciales = request()->only('email', 'password');       
        if(Auth::attempt($credenciales)){
            request()->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return redirect('login')->with('status', 'Credenciales Incorrectas');
    }
}
