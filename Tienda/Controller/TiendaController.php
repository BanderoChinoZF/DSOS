<?php
namespace App\Http\Controllers\Tienda;

//Declaracion del uso del controlador.
use App\Http\Controllers\Controller;

//Habilitamos el modelo ah ocupar
use App\Models\Tienda\T_ProductoModel;

//Habilita el Request
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function _construct()
    {
    }

    //<------------------ ------------------------>
    public function ver_cobro()
    {
        //El pluck sirve para regresar valores de un selector
        $tipo = T_ProductoModel::pluck('nombre_p','id');


        return view('Tienda/cobro')
        ->with('tipo_p',$tipo);
    }



}
