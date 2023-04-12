<?php

namespace App\Http\Livewire\AppCliente;

use App\Models\InformacionPago;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DatosBancarios extends Component
{
    public $titular;
    public $num_cuenta;
    public $banco;
    public $clave_inter;
    public $num_tarjeta;
    public $fecha_mm;
    public $fecha_yy;
    public $cvv;
    public $terminos;
    public $politicas;
    public $cargo_dom;

    ///Mensajes para el usuario
    public $mensaje;
    public $fail;

    protected $listeners = ['emit'=> 'render'];
    public function render()
    {
        $empresas = DB::table('empresas')->get();
        $forma = InformacionPago::where('user_id','=',Auth::user()->id);
        return view('livewire.app-cliente.datos-bancarios',['bancos'=> $empresas]);
    }

    public function save(){
        $fecha = (Carbon::now()->year)-2000;
        $validatedata = $this->validate([
            'titular' => 'required|regex:/^[\pL\s\-]+$/u|between:20,40',
            'num_cuenta' => 'required|numeric|digits_between:20,20|unique:informacion_de_pago',
            'banco' => 'required|regex:/^[\pL\s\-]+$/u',
            'clave_inter' => 'required|numeric|digits_between:18,18|unique:informacion_de_pago',
            'num_tarjeta' => 'required|numeric|digits_between:16,16|unique:informacion_de_pago',
            'fecha_mm' => 'required|numeric|digits_between:2,2|between:01,12',
            'fecha_yy' => 'required|numeric|digits_between:2,2|min:'.$fecha,
            'cvv' => 'required|numeric|digits_between:3,3',
            'terminos' => 'accepted',
            'politicas' => 'accepted',
            'cargo_dom' => 'accepted'
        ],
        [
            'num_cuenta.digits_between' => 'El numero de cuenta debe tener 20 digitos.',
            'clave_inter.digits_between' => 'La clave intervancaria debe tener 18 digitos.',
            'num_tarjeta.digits_between' => 'El numero de tarjeta debe tener 16 digitos.',
            'cvv.digits_between' => 'El CVV debe tener 3 digitos.',
            'fecha_mm.digits_between' => 'El Mes debe tener 2 digitos.',
            'fecha_yy.digits_between' => 'El Año debe tener 2 digitos.',
            'num_tarjeta.unique' => 'El numero de tarjeta ya esta registrado.',
            'num_cuenta.unique' => 'El numero de cuenta ya esta registrado.',
            'clave_inter' => 'La clave intervancaria ya esta registrada.',
        ]
        );
        
            $registro = InformacionPago::create([
                'titular' => $this->titular,
                'num_cuenta' => $this->num_cuenta,
                'banco' => $this->banco,
                'clave_inter' => $this->clave_inter,
                'num_tarjeta' => $this->num_tarjeta,
                'fecha_mm' => $this->fecha_mm,
                'fecha_yy' => $this->fecha_yy,
                'user_id' => Auth::user()->id,
            ]);
            if($registro){
                $this->mensaje = "Registro con Exito";
                $this->fail = null;
                $this->emit('registro');
            }else{
                $this->mensaje = "Por el momento no podemos registrar tu datos, intentalo mas tarde.";
            }
            
        

        //$this->emit('emit');
    }
}
