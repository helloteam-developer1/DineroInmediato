<?php
  
namespace App\Http\Livewire;

use App\Models\Empresas;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class Wizard extends Component
{
    use WithFileUploads;
    public $currentStep = 1;

    /*first step */
    public $nombre, $curp , $fecha_nacimiento, $empresa_trabajo, $antiguedad,$rama_empresa, $banco_nomina;
    /*Second step */
    public $telefono_contacto, $email, $password, $password_confirmation, $confirmacion;
    /*Three step*/
    public $ine_frente; 
    public $ine_reverso; 
    public $comp_dom; 
    public $foto_cine;

    public $successMessage = '';
  
    public function render()
    {
        $empresas = Empresas::get();
        return view('livewire.registroJCST.wizard', compact('empresas'));
    }
  
    public function firstStepSubmit()
    {
        
        $validatedData = $this->validate([
             'nombre' => 'required|min:15|max:30|regex:/^[\pL\s\-]+$/u',
             'fecha_nacimiento' => 'required|after:1932-12-30|before:2022-11-25',
             'empresa_trabajo' => 'required|min:5|max:30',
             'antiguedad' => 'required|',
             'rama_empresa'=> 'required|min:25|max:600',
             'banco_nomina'=> 'required|min:3|max:22|alpha',
             'curp' => 'required|min:18|max:18'
             
             
        ]);
        
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        
        /*Datos de Inicio de sesión
        Telefono, email, contraseña,
        */ 
        $validatedData = $this->validate([
            'telefono_contacto' => 'required|numeric|digits_between:8,10',
            'email' => 'email:rfc,dns',
            'password' => [
                'required',
                'confirmed',
                'max:40',
                Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()  
            ]
        ]);
  
        $this->currentStep = 3;
    }
    public function submitForm()
    {
        $validatedData = $this->validate([
            'ine_frente' => 'image|max:2048',
            'ine_reverso' => 'image|max:2048',
            'comp_dom' => 'image|max:2048',
            'foto_cine' => 'image|max:2048',
        ]);
        /* Creo la carpeta donde se almacenara las img*/
        mkdir(public_path('posts/'.$this->nombre),0777);
        /*extraigo el nombre de la img*/
        $nombre_ine_frente = $this->ine_frente->getClientOriginalName();
        $nombre_ine_reverso = $this->ine_reverso->getClientOriginalName();
        $nombre_comp_dom = $this->comp_dom->getClientOriginalName();
        $nombre_foto_cine = $this->foto_cine->getClientOriginalName();
        /*Genero la ruta de public/posts/nombredelusuarioregistrado para almacenar las img*/
        $ruta_ine_frente = public_path('posts/'.$this->nombre.'/'.$nombre_ine_frente);
        $ruta_ine_reverso = public_path('posts/'.$this->nombre.'/'.$nombre_ine_reverso);
        $ruta_comp_dom = public_path('posts/'.$this->nombre.'/'.$nombre_comp_dom);
        $ruta_foto_cine = public_path('posts/'.$this->nombre.'/'.$nombre_foto_cine);
        /*Creo la nueva img pasandole la img del formulario, la redimenciono y la guardo en la ruta espc. */
        Image::make($this->ine_frente)->resize(1200,null,function($constraint){
            $constraint->aspectRatio();
        })->save($ruta_ine_frente);
        Image::make($this->ine_reverso)->resize(1200,null,function($constraint){
            $constraint->aspectRatio();
        })->save($ruta_ine_reverso);
        Image::make($this->comp_dom)->resize(1200,null,function($constraint){
            $constraint->aspectRatio();
        })->save($ruta_comp_dom);
        Image::make($this->foto_cine)->resize(1200,null,function($constraint){
            $constraint->aspectRatio();
        })->save($ruta_foto_cine);
        
        $password = Hash::make($this->password);
        Usuarios::create([
            'nombre' => $this->nombre,
            'curp' => $this->curp,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'empresa_trabajo' => $this->empresa_trabajo,
            'antiguedad' => $this->antiguedad,
            'rama_empresa' => $this->rama_empresa,
            'banco_nomina' => $this->banco_nomina,
            'telefono_contacto' => $this->telefono_contacto,
            'email' => $this->email,
            'password' => $password,
            'ine_frente' => $ruta_ine_frente,
            'ine_reverso' =>$ruta_ine_reverso,
            'comp_dom' => $ruta_comp_dom,
            'foto_cine' => $ruta_foto_cine,
        ]);
        
        $this->successMessage = 'Registro Completo';
  
        $this->clearForm();

        return redirect()->route('home');
     
        
        
        

        
        
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