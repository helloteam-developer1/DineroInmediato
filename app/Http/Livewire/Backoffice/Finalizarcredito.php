<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Amortizacion;
use App\Models\ClientesAceptados;
use App\Models\Credito;
use App\Models\CreditoFinalizado;
use App\Models\CreditoVencido;
use App\Models\Pagos;
use App\Models\User;
use Livewire\Component;

class Finalizarcredito extends Component
{
    public $user_id,$consulta,$credito_num;
    public function render()
    {
        return view('livewire.backoffice.finalizarcredito');
    }
    public function mount($user_id,$credito_num ){
        $this->user_id = $user_id;
        $this->credito_num = $credito_num;
    }
    
    public function finalizar($num_credito){
        $pagos = Pagos::where('num_credito','=',$num_credito)->count();
        $amortizacion = Amortizacion::where('num_credito','=',$num_credito)->count();
        
        if($pagos==0 || $amortizacion==0){
            $this->addError('contador','No se puede finalizar el credito, no tiene parcialidades o no tiene pagos realizados.');
        }else{
            if($pagos==$amortizacion){
                //Consulto si el usuario ya tiene un credito finalizado
                $num_creditos = CreditoFinalizado::where('user_id','=',$this->user_id)->count();
                if($num_creditos>0){
                    //Si se encuentra al menos 1 o mas registros se actualiza el campo num_credito_finalizados incrementando 1;
                    CreditoFinalizado::where('user_id','=',$this->user_id)->update(['num_creditos_fin' => $num_creditos+1,'credito_actual'=>0]);
                }else{
                    //Consulto el nombre del usuario 
                    $nombre = User::where('id','=',$this->user_id)->value('nombre');
                    //Si no se encuentran registros creo el registro con los datos necesarios
                    CreditoFinalizado::create([
                        'user_id' => $this->user_id,
                        'nombre' => $nombre,
                        'num_creditos_fin' => 1,
                        'credito_actual' => 0
                    ]);
                }
                Credito::where('num_credito','=',$num_credito)->update(['estado' =>2]);
                ClientesAceptados::where('user_id','=',$this->user_id)->where('credito_num','=',$num_credito)->delete();
                $this->emit('alert');
            }else{
                $this->addError('contador','El número de pagos no es igual al número de parcialidades.');
            }
        }
    }
}
