<?php
namespace App\Http\Controllers\sistemaITO;

//Declaracion del uso del controlador.
use App\Http\Controllers\Controller;

//Habilitamos el modelo ah ocupar
use App\Models\SistemaITO\MateriaModel;
use App\Models\SistemaITO\BoletaModel;
use App\Models\SistemaITO\AlumnoModel;

//Habilita el Request
use Illuminate\Http\Request;

class controllerITO extends Controller
{
    public function _construct()
    {
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
        $alumno = AlumnoModel::select('id_alumno','nombre','ap_p','ap_m','sexo')
        ->where('id_alumno',$id_alumno)->first();

        //Retornamos el valor de la consulta a la base de datos.
        return $alumno;
    }

    public function ver_genero($sexo)
    {
        $alumnos = ALumnoModel::select('id_alumno','nombre','ap_p','ap_m','sexo')
        ->where('sexo',$sexo)->get();

        return $alumnos;
    }

}

