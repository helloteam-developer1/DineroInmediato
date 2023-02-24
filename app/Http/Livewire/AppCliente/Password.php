<?php

namespace App\Http\Livewire\AppCliente;

use App\Mail\AppCliente\PasswordReset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class Password extends Component
{
    public $opcion = 0;
    public $mensaje = '' ;
    public $password;
    public $password_confirmation;
    public $actual;
    public function render()
    {
        return view('livewire.app-cliente.password');
    }
    
    public function mount(){
        
    }

    public function cambiar(){
        $validatedata = $this->validate([
                'actual' => 'required| min:8',
                'password' => [
                    'required',
                    'max:20',
                    'min:8',
                    'regex:/^[A-Za-z0-9]+$/u',
                    'confirmed',
                ],
            ],
            ['password.required' => 'El campo Nueva contraseña es requerido.',]
        );
        //Si la contraseña es correcta cambiamos el password y enviamos el correo.
        $op = Hash::check($this->actual,Auth::user()->password);
        if($op==1) {
            //consulto si existe un registro
            $consulta = DB::table('password_resets')->where('email','=',Auth::user()->email)->first();
            if($consulta==null){
                //si no existe un registro le paso 1 para que cree el registro
                $this->enviaremail(1);                   
            }else{
                $this->enviaremail(2);
            }
            
            
            $newpass = Hash::make($this->password);
            User::where('id','=',Auth::user()->id)->update(['password'=>$newpass]);
            $this->opcion = 1;
            $this->mensaje = "Cambio con Exito!";
            $this->cleardata();
        }else{
            $this->mensaje = "Error, contraseña actual incorrecta.";
            $this->opcion = 2;
        }
    
    }

    public function enviaremail($opcion){
        $email = Auth::user()->email;
        //creo token
        $token = Str::random(60);
        $encriptado = Crypt::encryptString($token);
        $encriptadobase = Hash::make($token);
        //url modificada para el email con token encriptado
        $url = $encriptado.'?email='.$email;
        //registro el token en password_reset encriptado
        if($opcion==1){
            //si la opcion es 1 registro si es diferente solo actualizo el token
            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $encriptadobase,
                'created_at' => Carbon::now()
            ]); 
        }else{
            DB::table('password_resets')->where('email','=',$email)->update(['token'=>$encriptado]);
        }   
        
        //envio email con url.
        $correo = new PasswordReset($url);
        Mail::to($email)->send($correo);
      
    }

    public function cleardata(){
        $this->actual = '';
        $this->password = '';
        $this->password_confirmation  = '';
    }
}
