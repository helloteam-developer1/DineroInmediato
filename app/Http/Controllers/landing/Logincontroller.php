<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    
    public function index(){
        return view('landing.sesion.signin');
    }

    public function store(Request $request){
        /*
            telefono de contacto
            if(is_numeric($request->credencial)){
                $request->validate(
                    [
                    'credencial' => 'required|digits:10',
                    'password' => 'required|min:8'
                    ]
                );
                $consulta = DB::select("SELECT * FROM users WHERE telefono_contacto= ?",[$request->credencial]);
                if($consulta){
                    $correo = $consulta[0]->email;
                    $credenciales = ['email'=> $correo, 'password'=>$request->password];
                    if(Auth::attempt($credenciales)){
                        request()->session()->regenerate();
                        if(auth()->user()->rol == '1'){
                            return redirect()->route('dashboard.backoffice');
                        }else{
                            return redirect('dashboard');
                        }
                    }
                }
                return back()->with('status', 'Credenciales Incorrectas');
            } 
            correo electronico
            else{
        */
            $request->validate([
                'credencial' => 'required|email',
                'password' => 'required|min:8',
            ],
            [
                'credencial.required' => 'El correo es un campo obligatorio.',
                'credencial.email' => 'El correo no tiene el formato correcto.',
                'password.required' => 'La contraseña es un campo obligatorio.',
                'password.min' => 'La contraseña debe tener mas de 8 caracteres.'
            ]);
            
            $credenciales = ['email'=> $request->credencial, 'password'=>$request->password];
            if(Auth::attempt($credenciales)){
                request()->session()->regenerate();
                if(auth()->user()->rol == '1'){
                    return redirect()->route('dashboard.backoffice');
                }else{
                    return redirect('dashboard');
                }
            }else{
                return redirect()->route('login')->with('status', 'Credenciales Incorrectas');
            }
            
        //}
    
       
    }

  
}
