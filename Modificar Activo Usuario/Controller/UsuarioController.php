<?php

//Declaramos el controlador.
namespace App\Http\Controllers\Usuarios;

//Declaracion del uso del controlador.
use App\Http\Controllers\Controller;

//Habilitamos el modelo ah ocupar
use App\Models\Usuarios\UsuarioModel;

//Habilita el Request
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function _construct()
    {

    }

    public function index(Request $request)
    {
        return view('Usuarios/Altas');
    }

    //Creamos una nueva funcion la cual se encargara de la insercion de datos.
    public function Alta_usuario(Request $request)
    {
        //Utilizaremos eloquent para la insercion de datos en la BD.
        //Guardamos en varibales lo que viene de nuestro HMTL.
        $usuario = $request->usuario;
        $pass = $request->pass;
        $tipo_usuario = $request->tipo_usuario;
        $fecha_alta = $request->fecha_registro;

        //Ocupando al Modelo.
        UsuarioModel::create([
            'nombre_usuario' => $usuario,
            'password' => $pass,
            'tipo_usuario' => $tipo_usuario,
            'fecha_alta' => $fecha_alta]);

        return redirect()->to('Usuario/Altas');

    }

    //Metodo para mostrar la informacion de la tabla.
    public function ver_datos()
    {
        //select id,nombre_usuario,tipo_usuario from usuarios;
        $practica1 = UsuarioModel::
        select('id_usuario','nombre_usuario','tipo_usuario')->get();

        /*
        *   select('id_usuario','nombre_usuario','tipo_usuario')->all(); //Traemos todos los datos de la tabla.
        *   select('id_usuario','nombre_usuario','tipo_usuario')->get(); //Uno o muchos registros.
        *   select('id_usuario','nombre_usuario','tipo_usuario')->get(); //Solo consultamos el primer registro.
        *
        *   Con el constructor de consultas de laravel podemos crear consultas mas rapido
        *   UserDB::select('nombre','edad','sexo')
        *   -> where('id','2');
        *
        *   -> first(); //tener encuente que es first o get para despues consumir.
        *
        */

        //OPCIONAL PARA CONSULTAR LO QUE TE TRAE LA CONSULTA
        return $practica1;

        //return view('Usuarios\Consulta_Usuarios')->with('usuarios',$practica1);


    }

    public function ver_usuario()
    {
        //$ver_usuario = UsuarioModel::all();
        //Select * from usuarios;

        $ver_usuario1 = UsuarioModel::
        select('nombre_usuario','password','tipo_usuario','fecha_alta')->
        where('id_usuario','5')->first();
        //Select nombre_usuario,pasword,tipo_usuario,fecha_alta where id=1;

        return view('Usuarios/actualizar_Usuario')->
        with('usuario',$ver_usuario1);
    }

    public function actualizar_usuario(Request $request)
    {
        $usuario = $request->usuario;
        $pass = $request->pass;
        $tipo_usuario = $request->tipo_usuario;
        $fecha_alta = $request->fecha_registro;

        //Ocupando al Modelo.
        $ver_usuario1 = UsuarioModel::where('id_usuario','5')->update([
            'nombre_usuario' => $usuario,
            'password' => $pass,
            'tipo_usuario' => $tipo_usuario,
            'fecha_alta' => $fecha_alta]);

        return redirect()->to('Usuario/Altas');

    }

    //Metodo para eliminar registros
    public function ver_usuario_eli()
    {
        //$ver_usuario = UsuarioModel::all();
        //Select * from usuarios;

        $ver_usuario1 = UsuarioModel::
        select('nombre_usuario','password','tipo_usuario','fecha_alta')->
        where('id_usuario','4')->first();
        //Select nombre_usuario,pasword,tipo_usuario,fecha_alta where id=1;

        return view('Usuarios/Eliminar')->
        with('usuario',$ver_usuario1);
    }

    public function eliminar_usuario(Request $request)
    {
        $usuario = $request->usuario;
        $pass = $request->pass;
        $tipo_usuario = $request->tipo_usuario;
        $fecha_alta = $request->fecha_registro;

        //Ocupando al Modelo.
        $ver_usuario1 = UsuarioModel::where('id_usuario','4')->delete();

        return redirect()->to('Usuario/Altas');

    }

    //Eliminar Usuarios con Banderas.
    public function ver_usuario_bandera()
    {
        //$ver_usuario = UsuarioModel::all();
        //Select * from usuarios;

        $ver_usuario1 = UsuarioModel::
        select('nombre_usuario','password','tipo_usuario','fecha_alta')->
        where('id_usuario','4')->first();
        //Select nombre_usuario,pasword,tipo_usuario,fecha_alta where id=1;

        return view('Usuarios/ver_bandera')->
        with('usuario',$ver_usuario1);
    }

    public function actualizar_usuario_bandera(Request $request)
    {

        //Ocupando al Modelo.
        $ver_usuario1 = UsuarioModel::where('id_usuario','4')
        ->update(['activo' => '0']);

        return redirect()->to('Usuario/Altas');

    }

    public function ver_tabla()
    {
        //Para tablas cortas o pequeñas se recomienda all();
        $ver_tabla = UsuarioModel::select('id_usuario','nombre_usuario','password',
        'tipo_usuario','fecha_alta','Activo')->get();

        return view('Usuarios\principal')->with('tabla',$ver_tabla);


    }
}
