<?php

namespace App\Models\SistemaITO;

use Illuminate\Database\Eloquent\Model;

class AlumnoModel extends Model
{
    //Declaramos el nombre de la tabla en la BD en MySQL.
    protected $table = 'alumno';

    //Declaramos la llave primaria de la tabla.
    protected $primarykey = 'id_alumno';

    //Declarar la variable timestamps solo acepta (True/False)
    public $timestamps = false;

    //filas o campos de la tabla
    protected $fillable = [
        'id_alumno','nombre','ap_p','ap_m','semestre','sexo','promedio'
    ];
}

?>
