<?php

namespace App\Http\Livewire\AppCliente;

use App\Models\Credito;
use App\Models\Solicitud_Credito;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;
use Livewire\WithFileUploads;


class Documentacion extends Component
{
    use WithFileUploads;
    public $ine_frente;
    public $ine_reverso;
    public $comp_dom;
    public $foto_cine;
    public $successMessage = '';
    public $info = '';
    
    public function render()
    {
        
        if(Auth::user()->num_cliente!=null){
            return view('livewire.app-cliente.documentacion',['documentacion'=>1]);
        }else{
            $solicitud = Solicitud_Credito::where('user_id','=',Auth::user()->id)->value('documentacion');
            if($solicitud==null){
                return view('livewire.app-cliente.documentacion',['documentacion'=>5]);
            }else{
                return view('livewire.app-cliente.documentacion',['documentacion'=>$solicitud]);
            }
            
        } 
        
    }

    public function subirIMG(){
        $nombre = Auth::user()->nombre;
        $id = Auth::user()->id;
        
    
        if($this->ine_frente==null && $this->ine_reverso==null && $this->comp_dom==null && $this->foto_cine==null){
            $this->addError('img', 'Tienes que adjuntar uno o mas archivos para subir.');
        }else{
            if($this->ine_frente){
                $validatedData = $this->validate([
                    'ine_frente' => 'mimes:jpg,png,jpeg|max:2000',
                ],
                [
                    'ine_frente.mimes' => 'La foto INE FRETE debe ser jpg,png,jpeg' , 
                    'ine_frente.max' => 'La foto INE FRETE no debe pesar mas de 2MB' ,
                ]
                );
    
                if(Auth::user()->ine_frente!=null){
                    $file = Auth::user()->ine_frente;
                    if(Storage::disk('public_posts')->exists($file)){
                        Storage::disk('public_posts')->delete($file);
                    }
                    
                }            
                    //valido que sea img y que no pese mas de 2MB
               
                //Extraigo el nombre de la img
                $nombreIne_f = $this->ine_frente->getClientOriginalName();
                //Le doy un nuevo nombre a la img
                $nombre_ine_frente = 'INE_FRENTE-'.Str::slug($nombre).'-'.$nombreIne_f;
                //guardo en public y traigo la ruta
                $ruta1= $this->ine_frente->storeAs("posts/",$nombre_ine_frente,'public_posts',0644);
                //modifico al usuario con la ruta de la img 
                $cambio = User::where('id','=',$id)->update(['ine_frente'=>$ruta1]);
                if(!empty($cambio)){
                    
                }else{
                    $this->addError('img','Error al subir INE Frente, intentelo mas tarde.');
                }
                
            }
            sleep(2);
            
            if($this->ine_reverso){
                $validatedData = $this->validate([            
                    'ine_reverso' => 'mimes:jpg,png,jpeg|max:2000',   
                ],
                [
                    'ine_reverso.mimes' => 'La foto INE REVERSO debe ser jpg,png,jpeg', 
                    'ine_reverso.max' => 'La foto INE REVERSO no debe pesar mas de 2MB', 
                ]);
                if(Auth::user()->ine_frente!=null){
                    $file = Auth::user()->ine_reverso;
                    if(Storage::disk('public_posts')->exists($file)){
                        Storage::disk('public_posts')->delete($file);
                    }
                    
                }
               
                $nombreIne_r = $this->ine_reverso->getClientOriginalName();
                $nombre_ine_reverso = 'INE_REVERSO-'.Str::slug($nombre).'-'.$nombreIne_r;
                $ruta2= $this->ine_reverso->storeAs("posts/",$nombre_ine_reverso,'public_posts',0644);
                $cambio = User::where('id','=',$id)->update(['ine_reverso'=>$ruta2]);
                if(!empty($cambio)){
                    
                }else{
                    $this->addError('img','Error al subir INE Reverso, intentelo mas tarde.');
                }
    
            }
            sleep(2);
            if($this->comp_dom){
                $validatedData = $this->validate([            
                    'comp_dom' => 'mimes:jpg,png,jpeg|max:2000',
                ],
                [
                    'comp_dom.mimes' => 'El COMPROBANTE DE DOMICILIO debe ser jpg,png,jpeg',
                    'comp_dom.max' => 'El COMPROBANTE DE DOMICILIO no debe pesar mas de 2MB'
                ]);
                if(Auth::user()->ine_frente!=null){
                    $file = Auth::user()->comp_dom;
                    if(Storage::disk('public_posts')->exists($file)){
                        Storage::disk('public_posts')->delete($file);
                    }
                    
                }
                $nombreComp = $this->comp_dom->getClientOriginalName();
                $nombre_comp_dom = 'COMP_COM-'.Str::slug($nombre).'-'.$nombreComp;
                $ruta3= $this->comp_dom->storeAs("posts/",$nombre_comp_dom,'public_posts',0644);
                $cambio = User::where('id','=',$id)->update(['comp_dom'=>$ruta3]);
                if(!empty($cambio)){
                    
                }else{
                    $this->addError('img','Error al subir Comprobante de Domicilio, intentelo mas tarde.');
                }
            }
            sleep(2);
            if($this->foto_cine){
                $validatedData = $this->validate([            
                    'foto_cine' => 'mimes:jpg,png,jpeg|max:2000',
                ],
                [   
                    'foto_cine.mimes' => 'La foto FOTO CON INE debe ser jpg,png,jpeg',
                    'foto_cine.max' => 'La foto FOTO CON INE no debe pesar mas de 2MB',
                ]);
                if(Auth::user()->ine_frente!=null){
                    $file = Auth::user()->foto_cine;
                    if(Storage::disk('public_posts')->exists($file)){
                      Storage::disk('public_posts')->delete($file);
                    }
                    
                }
               
                $nombrefoto_cine = $this->foto_cine->getClientOriginalName();
                $nombre_foto_cine = 'FOTO_CON_INE-'.Str::slug($nombre).'-'.$nombrefoto_cine;
                $ruta4= $this->foto_cine->storeAs("posts/",$nombre_foto_cine,'public_posts',0644);
                $cambio = User::where('id','=',$id)->update(['foto_cine'=>$ruta4]);
                if(!empty($cambio)){
                    
                }else{
                    $this->addError('img','Error al subir Foto con INE, intentelo mas tarde.');
                }
            }
            sleep(2);
            $this->emit('img');
        }

    }
    
}
