<?php

namespace App\Models\Usuarios;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    //Declaramos el nombre de la tabla en la BD en MySQL.
    protected $table = 'usuarios';

    //Declaramos la llave primaria de la tabla.
    protected $primarykey = 'id_usuario';

    //Declarar la variable timestamps solo acepta (True/False)
    public $timestamps = false;

    //filas o campos de la tabla
    protected $fillable = [
        'id_usuario','nombre_usuario','password','tipo_usuario','fecha_alta'
    ];
}

?>
