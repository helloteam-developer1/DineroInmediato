<?php
  
namespace App\Http\Livewire;

use App\Models\Empresas;
use Livewire\Component;
use App\Models\Product;
use App\Models\Usuarios;
use Illuminate\Validation\Rules\Password as RulesPassword;

class Wizard extends Component
{
    public $currentStep = 1;

    /*first step */
    public $nombre, $curp , $fecha_nacimiento, $empresa_trabajo, $antiguedad,$rama_empresa, $banco_nomina;
    /*Second step */
    public $telefono, $email, $contrasena;
    /*Three step*/
    public $ine_frente, $ine_reverso, $comp_dom, $foto_cine;

    public $successMessage = '';
  
    public function render()
    {
        $empresas = Empresas::get();
        return view('livewire.registroJCST.wizard', compact('empresas'));
    }
  
    public function firstStepSubmit()
    {
        
        $validatedData = $this->validate([
             /*'nombre' => 'required|min:15|max:30|regex:/^[\pL\s\-]+$/u',
             'curp' => 'required|min:18|max:18|alpha_num', 
             'fecha_nacimiento' => 'required|numeric',
             'empresa_trabajo' => 'required',
             'antiguedad' => 'required|',
             'rama_empresa'=> 'required|min:30|max:90|alpha|regex:/^[\pL\s\-]+$/u',
             'banco_nomina'=> 'required|min:3|max:22|alpha'
             */
            'nombre' => 'required',
             'curp' => 'required', 
             'fecha_nacimiento' => 'required',
             'empresa_trabajo' => 'required',
             'antiguedad' => 'required',
             'rama_empresa'=> 'required',
             'banco_nomina'=> 'required'
        ]);
        
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        
        /*Datos de Inicio de sesión
        Telefono, email, contraseña,
        */ 
        $validatedData = $this->validate([
            
            'telefono' => 'required',
            'email' => 'required',
            'contrasena' => [
                'required'
                ]
    


            /*'telefono' => 'required|numeric|digits_between:8,10',
            'email' => 'email:rfc,dns',
            'contrasena' => [
                'required',
                RulesPassword::min(8) // Debe tener por lo menos 12 caracteres
                ->mixedCase() // Debe tener mayúsculas + minúsculas
                ->letters() // Debe incluir letras
                ->numbers() // Debe incluir números
                ->symbols(), //Debe incluir símolos
                ]
    
            */

        ]);
  
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        Usuarios::create([
            'ine_frente' => 'required', 
            'ine_reverso'=> 'required',
            'comp_dom' => 'required',
            'foto_cine' => 'max:10240|mimes:jpeg,jpg,png'
        ]);
  
        $this->successMessage = 'Registro Completo';
  
        $this->clearForm();
  
        $this->currentStep = 3;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->nombre=''; 
        $this->curp=''; 
        $this->fecha_nacimiento='';  
        $this->empresa_trabajo='';  
        $this->rama_empresa=''; 
        $this->banco_nomina=''; 
        $this->telefono_contac='';  
        $this->email='';  
        $this->contrasena=''; 
        
    }
}