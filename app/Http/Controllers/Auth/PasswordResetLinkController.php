<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        /* if(is_numeric($request->campo)){

            $request->validate(
                [
                    'campo' => ['digits:10','required'],
                ],
                [
                    'campo.digits' => 'El telefono de contacto debe tener 10 digitos',
                    'campo.required' => 'El telefono de contacto es requerido'
                ]);       

            $consulta = DB::select("SELECT * FROM users WHERE telefono_contacto= ?", [$request->campo]);
            if(!$consulta){
                return redirect()->route('recover1')->with('danger', 'Telefono no encontrado D:!!');
            }else{
                $email = $consulta[0]->email;
                $correo = ['email' => $email];
                
                $status = Password::sendResetLink(
                    $correo
                );
        
                return $status == Password::RESET_LINK_SENT
                            ? back()->with('status', __($status))
                            : back()->withInput($correo)
                                    ->withErrors(['email' => __($status)]);
                
                
            }
            
        }else{ */
            $request->validate(
                [
                    'campo' => ['email','required'],
                    
                ],
                [
                    'campo.email' => 'El correo electronico no es valido',
                    'campo.required' => 'El correo electronico  requerido'
                ]
            );
            $consulta = DB::select("SELECT * FROM users WHERE email= ?", [$request->campo]);
            $correo = ['email' => $consulta];
            if(!$consulta){
                return redirect()->route('recover1')->with('danger', 'Correo no encontrado D:');
            }else{
                $email = $consulta[0]->email;
                $correo = ['email' => $email];
                $status = Password::sendResetLink(
                    $correo
                );
        
                return $status == Password::RESET_LINK_SENT
                            ? back()->with('status', 'Correo Enviado!, sigue las instrucciones para recuperar tu contraseña.')
                            : back()->withInput($correo)
                                    ->withErrors(['email' => __($status)]);
                
                
           /*  } */
        }
        /*
        */
    }
}
