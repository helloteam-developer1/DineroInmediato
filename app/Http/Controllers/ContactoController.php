<?php

namespace App\Http\Controllers;

use App\Mail\Contacto\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'comentario' => 'required|max:255|min:10'
        ]);
        $correo = new ContactoMail($request->all());
        Mail::to('helloteam.developer1@gmail.com')->send($correo);
        return back()->with('estado','Correo enviado con exito');
    }
}
