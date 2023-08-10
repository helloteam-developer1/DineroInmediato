<?php

namespace App\View\Components;

use App\Models\Credito;
use App\Models\Solicitud_Credito;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use PDO;

class ModalEstadoSolicitud extends Component
{
    public $estado=null; 
    public $opcion=null; 
    public $mensaje = null; 
    public $dias=null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if(Solicitud_Credito::where('user_id',Auth::user()->id)->exists()){
            $consulta = Solicitud_Credito::select(['estado','mensaje','fecha_solicitud'])->where('user_id',Auth::user()->id)->orderBy('id_solicitud','desc')->first();
            $this->estado = $consulta->estado();
            $this->opcion = $consulta->estado;
            $this->mensaje = $consulta->mensaje;
            if($consulta->estado==2){
                $fecha1 = date_create($consulta->fecha_solicitud);
                $fecha2 = date_create(Carbon::now()->format('Y-m-d'));
                $dias = date_diff($fecha1,$fecha2)->format('%R%a');
                $dias = (int)$dias;
                if($dias==0){
                    $this->dias = '30';
                    return view('components.modal-estado-solicitud');
                }
                if($dias<29 && $dias!=0){
                    $this->dias = 30-$dias;
                    return view('components.modal-estado-solicitud');
                }
                if($dias>30 || $dias==30){
                    $this->eliminar();
                }
            }else{
                return view('components.modal-estado-solicitud');
            }
        }
        if(Credito::where('user_id','=',Auth::user()->id)->where('estado','<',2)->exists()){
            $credito = Credito::select(['estado'])->where('user_id','=',Auth::user()->id)->orderBy('estado')->first();
            if($credito->estado==0){
                $this->opcion = 3;
                $this->estado = $credito->estado();
            }
            if($credito->estado==1){
                $this->opcion = 4;
                $this->estado = $credito->estado();
            }
            return view('components.modal-estado-solicitud'); 
        }
    }    

    public function eliminar(){
        Solicitud_Credito::where('user_id','=',Auth::user()->id)->where('estado','=',2)->delete();
        $this->opcion = null;
        $this->estado = null;
    }
    
}

