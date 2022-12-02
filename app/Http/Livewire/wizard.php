<?php
  
namespace App\Http\Livewire;

use App\Mail\landing\RegistroMail;
use App\Models\Calculadora;
use App\Models\Empresas;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Mail;

use Livewire\Component;
use Livewire\WithFileUploads;

use Intervention\Image\Facades\Image;

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
    /*Mensajes de error o exito*/
    public $successMessage = '';
    public $errorMessage = '';
    
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
            'banco_nomina'=> 'required|min:3|max:30',
            'curp' => 'required|min:18|max:18'
            
            
       ]);    
        $consulta = DB::select("SELECT * FROM calculadoras WHERE nombre= ?",[$this->nombre]);

        if($consulta){
           $this->currentStep = 2;
        
        }else{
            $this->errorMessage = "No has llenado la calculadora previamente o tus datos son erroneos.";
        }
        
        
        
    }

    public function secondStepSubmit()
    {
        $this->errorMessage= '';
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
            'ine_frente' => 'mimes:jpg,png,jpeg,gif,svg|max:2048',
            'ine_reverso' => 'mimes:jpg,png,jpeg,gif,svg|max:2048',
            'comp_dom' => 'mimes:jpg,png,jpeg,gif,svg|max:2048',
            'foto_cine' => 'mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $ruta_file ="/posts/".$this->nombre;
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
            $consulta = DB::select("SELECT * FROM calculadoras WHERE nombre= ?",[$this->nombre]);
            User::create([
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
                'prestamo' => $consulta[0]->prestamo,
                'tiempo' => $consulta[0]->tiempo,
                'trabajo' => $consulta[0]->trabajo,
                'ingreso' => $consulta[0]->ingreso,
                'nomina' => $consulta[0]->nomina,
                'credito' => $consulta[0]->credito
            ]);
            
            $this->successMessage = 'Registro Completo';
  
            $credenciales = [
                'email' => $this->email,
                'password' => $this->password
            ];
            if(Auth::attempt($credenciales)){
                $datos = ['email' => $this->email, 'password'=> $this->password];
                $correo = new RegistroMail($datos);
                $email = Auth::user()->email;
                Mail::to($email)->send($correo);
                return redirect()->route('dashboard');
            }
            
       
                 
       
        
        

        
        
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