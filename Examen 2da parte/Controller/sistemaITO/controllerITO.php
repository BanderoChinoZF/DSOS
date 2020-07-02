<?php
namespace App\Http\Controllers\sistemaITO;

//Declaracion del uso del controlador.
use App\Http\Controllers\Controller;

//Habilitamos el modelo ah ocupar
use App\Models\SistemaITO\MateriaModel;
use App\Models\SistemaITO\AlumnoModel;

//Habilita el Request
use Illuminate\Http\Request;

class controllerITO extends Controller
{
    public function _construct()
    {
    }

    //<-------------------------------------------------------------------------------------->
    //Funcion para traer la vista, donde encontramos el menu principal
    public function principal()
    {
        return view('sistemaITO/menu');

    }

    //<------------------ ------------------------>
    public function ver_materia()
    {
        //El pluck sirve para regresar valores de un selector
        $materia = MateriaModel::pluck('nombre','id_materia');


        return view('sistemaITO/materias')
        ->with('materias',$materia);

    }

    //<------------------ ------------------------------>
    //Consultamos a la tabla de boleta.
    public function ver_boleta($id_materia)
    {
        $boleta = BoletaModel::select('id_materia','id_alumno','promedio','aprobado')
        ->where('id_materia',$id_materia)->get();

        return $boleta;
    }

    public function ver_alumnos($id_alumno)
    {
        $alumno = AlumnoModel::select('id_alumno','nombre','ap_p','ap_m','sexo','promedio')
        ->where('id_alumno',$id_alumno)->first();

        //Retornamos el valor de la consulta a la base de datos.
        return $alumno;
    }

    public function ver_genero($sexo)
    {
        $alumnos = ALumnoModel::select('id_alumno','nombre','ap_p','ap_m','sexo','promedio')
        ->where('sexo',$sexo)->get();

        return $alumnos;
    }

    public function ver_nombre($nombre)
    {
        $alumnos = ALumnoModel::select('id_alumno','nombre','ap_p','ap_m','sexo','promedio')
        ->where('nombre',$nombre)->first();

        return $alumnos;
    }


    //<------------------------------------------------------------------------------------------------------------------------------>

    public function form_materia()
    {
        return view('sistemaITO/materia');
    }

    //FUNCION PARA REGISTRAR UNA MATERIA EN LA BD
    //Creamos una nueva funcion la cual se encargara de la insercion de datos.
    public function alta_materia(Request $request)
    {
        //Utilizaremos eloquent para la insercion de datos en la BD.
        //Guardamos en varibales lo que viene de nuestro HMTL.
        $nombre = $request->nombre;
        $clave = $request->clave;
        $semestre = $request->semestre;
        $aprobados = $request->aprobados;
        $reprobados = $request->reprobados;

        //Ocupando al Modelo.
        MateriaModel::create([
            'nombre' => $nombre,
            'clave' => $clave,
            'semestre' => $semestre,
            'aprobados' => $aprobados,
            'reprobados'=>$reprobados]);

        return redirect()->to('/Sistema/registrarMateria');

    }

    public function tabla_materias()
    {
        //Para tablas cortas o pequeñas se recomienda all();
        $ver_tabla = MateriaModel::select('id_materia','nombre','clave','semestre','aprobados','reprobados')->get();

        return view('sistemaITO/verMateria')->with('tabla',$ver_tabla);
    }

    public function actualizar_materia($id)
    {
        $materia = MateriaModel::select('id_materia','nombre','clave','semestre','aprobados','reprobados')
        ->where('id_materia',$id)->first();

        //return $materia;
        return view('sistemaITO/editarMateria')->with('materia',$materia);
    }

    public function act_materia(Request $request, $id_materia)
    {

        $nombre = $request->nombre;
        $clave = $request->clave;
        $semestre = $request->semestre;
        $aprobados = $request->aprobados;
        $reprobados = $request->reprobados;

        //Ocupando al Modelo.
        MateriaModel::where('id_materia',$id_materia)->update([
            'nombre' => $nombre,
            'clave' => $clave,
            'semestre' => $semestre,
            'aprobados' => $aprobados,
            'reprobados'=>$reprobados]);

        return redirect()->to('/Sistema/tabla_materias');
    }

    public function eliminarMateria($id_materia)
    {
       //Ocupando al Modelo.
       $materia = MateriaModel::where('id_materia',$id_materia)->delete();

        return redirect()->to('/Sistema/tabla_materias');
    }


    //<----------------------------------------------------------------------------------------------------------->
    //FUNCIONES PARA LE CRUD DE LOS ALUMNOS
    public function form_alumno()
    {
        return view('sistemaITO/alumno');
    }

    //FUNCION PARA REGISTRA A UN ALUMNO EN LA BD.
    //Creamos una nueva funcion la cual se encargara de la insercion de datos.
    public function alta_alumno(Request $request)
    {
        //Utilizaremos eloquent para la insercion de datos en la BD.
        //Guardamos en varibales lo que viene de nuestro HMTL.
        $nombre = $request->nombre;
        $ap_p = $request->ap_p;
        $ap_m = $request->ap_m;
        $semestre = $request->semestre;
        $sexo = $request->sexo;
        $promedio = $request->promedio;
        //Ocupando al Modelo.
        AlumnoModel::create([
            'nombre' => $nombre,
            'ap_p' => $ap_p,
            'ap_m' => $ap_m,
            'semestre' => $semestre,
            'sexo'=>$sexo,
            'promedio'=>$promedio]);

            return redirect()->to('/Sistema/registrarAlumno');
    }

    //FUNCION PARA VISUALIZAR A TODOS LOS ALUMNOS EN UNA TABLA
    public function tabla_alumnos()
    {
        //Para tablas cortas o pequeñas se recomienda all();
        $ver_tabla = AlumnoModel::select('id_alumno','nombre','ap_p','ap_m','semestre','sexo','promedio')->get();

        return view('sistemaITO/verAlumnos')->with('tabla',$ver_tabla);
    }

    public function eliminarAlumno($id_alumno)
    {
       //Ocupando al Modelo.
       $alumno = AlumnoModel::where('id_alumno',$id_alumno)->delete();

        return redirect()->to('/Sistema/tabla_alumnos');
    }

    public function actualizar_alumno($id)
    {
        $alumno = AlumnoModel::select('id_alumno','nombre','ap_p','ap_m','semestre','sexo','promedio')
        ->where('id_alumno',$id)->first();

        //return $materia;
        return view('sistemaITO/editarMateria')->with('alumno',$alumno);
    }

}

