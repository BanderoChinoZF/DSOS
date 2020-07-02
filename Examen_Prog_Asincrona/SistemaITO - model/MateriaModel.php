<?php

namespace App\Models\SistemaITO;

use Illuminate\Database\Eloquent\Model;

class MateriaModel extends Model
{
    //Declaramos el nombre de la tabla en la BD en MySQL.
    protected $table = 'materias';

    //Declaramos la llave primaria de la tabla.
    protected $primarykey = 'id_materia';

    //Declarar la variable timestamps solo acepta (True/False)
    public $timestamps = false;

    //filas o campos de la tabla
    protected $fillable = [
        'id_materia','nombre','clave','semestre'
    ];
}

?>
