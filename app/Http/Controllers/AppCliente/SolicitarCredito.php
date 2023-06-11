<?php

namespace App\Http\Controllers\AppCliente;

use App\Http\Controllers\Controller;
use App\Models\Credito;
use App\Models\Solicitud_Credito;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SolicitarCredito extends Controller
{
    /* Vista Solicitar Credito*/
    public function solicitar()
    {
        if(Credito::where('user_id',Auth::user()->id)->where('estado','<',2)->exists()){
            return view('appCliente.clienteSoliNueva',['estado'=>1]);
        }
        if(Solicitud_Credito::where('user_id',Auth::user()->id)->exists()){
            return view('appCliente.clienteSoliNueva',['estado'=>3]);
        }
        return view('appCliente.clienteSoliNueva');
    }
    /*Store de Vista Solicitar Credito*/
    public function store(Request $request){        
        $request->validate([
            'monto' => 'numeric|max:5000|required'
        ],
        [
            'monto.numeric' => 'El monto tiene que ser un numero.',
            'monto.max' => 'No se puede prestar mas de $5,000'            
        ]
        );
        if(Solicitud_Credito::where('user_id',Auth::user()->id)->exists() || Credito::where('user_id',Auth::user()->id)->where('estado','<',2)->exists()){
            return back();
        }else{
            Solicitud_Credito::create([
                'monto' => $request->monto,
                'user_id' => Auth::user()->id,
                'estado' => 0, 
                'fecha_solicitud' => Carbon::now()->format('Y-m-d')
            ]);
            session()->flash('success', 'Registro');
            return redirect()->route('solicitar-credito');
        }
    }
}
