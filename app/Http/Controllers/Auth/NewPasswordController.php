<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $password =  User::where('email','=',$request->email)->value('password');

        if(Hash::check($request->password,$password)){
            return back()->withErrors(['password' => 'El password no ha sufrido cambios.']);
        }else{
            $request->validate([
                'token' => ['required'],
                'email' => ['required', 'email'],
                'password' => [ 'required',
                'confirmed',
                'max:20',
                'min:8',
                'regex:/^[A-Za-z0-9]+$/u'],
            ],
            [  
                'password.required' => 'Todos los campos son obligatorios',
                'token.required' => 'El token ya fue utilizado por favor solicita uno nuevo',
                'password.confirmed' => 'Las contraseñas no coinciden favor de volver a intenterlo',

            ]
        );
    
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user) use ($request) {
                    $user->forceFill([
                        'password' => Hash::make($request->password),
                        'remember_token' => Str::random(60),
                    ])->save();
    
                    event(new PasswordReset($user));
                }
            );
    
            // If the password was successfully reset, we will redirect the user back to
            // the application's home authenticated view. If there is an error we can
            // redirect them back to where they came from with their error message.
            return $status == Password::PASSWORD_RESET
                        ? redirect()->route('cambio_password')->with('status', 'Se ha creado tu nueva contraseña con éxito, ya puedes ingresar nuevamente a nuestra aplicación.')
                        : back()->withInput($request->only('email'))
                                ->withErrors(['email' => __($status)]);
        }
        

    }
}
