<?php

namespace App\Models\SistemaITO;

use Illuminate\Database\Eloquent\Model;

class BoletaModel extends Model
{
    //Declaramos el nombre de la tabla en la BD en MySQL.
    protected $table = 'boleta';

    //Declaramos la llave primaria de la tabla.
    protected $primarykey = 'id_boleta';

    //Declarar la variable timestamps solo acepta (True/False)
    public $timestamps = false;

    //filas o campos de la tabla
    protected $fillable = [
        'id_boleta','id_materia','id_alumno','nombre',
        'cal_1','cal_2','cal_3','cal_4','cal_5','aprobado'
    ];
}

?>
