<?php

//Declaramos el controlador.
namespace App\Http\Controllers\usuarios_Practica;

//Declaracion del uso del controlador.
use App\Http\Controllers\Controller;


//Habilita el Request
use Illuminate\Http\Request;

class practicaController extends Controller
{
    public function _construct()
    {

    }

    public function ver_practica()
    {
        return view('usuarios_Practica/altas_p');
    }
}
