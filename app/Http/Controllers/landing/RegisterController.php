<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function bienvenida()
    {
        return view('landing.registro.bienvenda');
    }

    public function steps ()
    {
        return view('landing.registro.registro');
    }
}
