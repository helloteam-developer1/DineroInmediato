<?php

namespace App\Http\Controllers\AppCliente;
use App\Http\Controllers\Controller;

use App\Models\Credito;

use App\Models\Notificaciones;
use App\Models\Solicitud_Credito;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AppClienteController extends Controller
{

    /*Cerrar Session */
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /* Dashboard Documentación e información*/
    public function index(){
    
        $num_cliente = Auth::user()->num_cliente;
        $id_user = Auth::user()->id;
        $mensaje = null;
        $estado = null;
        $opcion = null;
        $documentacion = null;
        if($num_cliente!=null){
            $credito= Credito::where('user_id', '=' , $id_user)->orderBy('estado','ASC')->first();
            if($credito->estado == 2){
                return view('appCliente.clienteDocuInfor',['estado'=> null, 'mensaje' => null, 'opcion' => null,'documentacion'=>null]);
            }
            if($credito->estado==1){
                $estado = $credito->estado();
                $opcion = 4;
            }else{
                $estado = $credito->estado();
                $opcion = 3;
            }
            $documentacion = 1;
        }else{
            $solicitud = Solicitud_Credito::where('user_id', '=', $id_user)->get();
            if(count($solicitud)>=1){
                $estado = $solicitud[0]->estado();
                $opcion = $solicitud[0]->estado;
                $mensaje = $solicitud[0]->mensaje;
                $documentacion = $solicitud[0]->documentacion;
            }
        }
        /*
        0 Credito en revisión
        1 Falta Información que completar o es incorrecta
        2 Linea de credito rechazada
        3 Linea de credito aprobada
        4 Credito vencido o impago
        */
        return view('appCliente.clienteDocuInfor',['estado'=> $estado, 'mensaje' => $mensaje, 'opcion' => $opcion,'documentacion'=>$documentacion]);
    }
    /*Vista mi prestamo */
    public function miprestamo(){
        $credito = Credito::where('user_id', Auth::user()->id)->where('estado','=',0)->orderby('created_at','desc')->first();
        return view('appCliente.miPrestamo', ['credito' => $credito]);
    }

    public function ajustescontacto(){
        return view('appCliente.clienteMenuAjustesContacto');
    }

    public function notificaciones($id){

        $notificaciones = Notificaciones::where('user_id', Auth::user()->id)->get();

        if($id>0){
            Notificaciones::where('user_id', '=', Auth::user()->id)->update(['estado' => 1]);
            return view('appCliente.clienteNotificaciones',['notificaciones'=>$notificaciones,'id'=>$id]);
        }else{
            Notificaciones::where('user_id', '=', Auth::user()->id)->update(['estado' => 1]);
            return view('appCliente.clienteNotificaciones',['notificaciones'=>$notificaciones,'id'=>null]);
        }
    }
    //eliminar notificaciones
    public function destroy($id){

        $notificaciones = Notificaciones::where('id_notf',$id)->get();
        if($notificaciones->count()){
            $delete = Notificaciones::where('id_notf',$id)->delete();
            return redirect()->route('cliente-notificaciones',0)->with('notificacion','Notificación Eliminada');
        }else{
            return redirect()->back()->withErrors(['mensaje' => 'Error al eliminar.']);
        }

    }

    public function miperfil(){
        return view('appCliente.miperfil');
    }

    public function campassword(){
        return view('appCliente.cambio-password');
    }

    public function password(Request $request){
        return view('appCliente.forgot-password',['request'=>$request]);
    }

    public function changepassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email|exists:password_resets,email',
            'token' => 'required',
            'password' => ['required', 'confirmed', 'max:20', 'min:8','regex:/^[A-Za-z0-9]+$/u']
            ],
            [
            'email.exists' => 'Token invalido'
            ]
        );
        if(DB::table('password_resets')->where('email','=',$request->email))
        {
            $consulta = DB::table('password_resets')->where('email','=',$request->email)->value('token');
            $desencriptada = Crypt::decryptString($request->token);
            if(Hash::check($desencriptada,$consulta)){
                $password = Hash::make($request->password);
                $usuario = User::where('email','=',$request->email)->update(['password'=>$password]);
                if(DB::table('password_resets')->where('email','=',$request->email)->delete()){
                    return redirect()->route('login');
                }
            }else{
                return back()->with('status','Error, Token no valido');
            }
        }else{
            return back()->with('status','Error, Token no valido');
        }


    }
    public function contacto(){
        return view('appCliente.contacto');
    }
}
/*
    0'Crédito en revisión',
    1'Falta información que completar o es incorrecta',
    2'Línea de crédito rechazada',
    3'Línea de crédito aprobada',
    4'Crédito vencido o impago'
*/
