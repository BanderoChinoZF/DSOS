<?php

namespace App\Models\Tienda;

use Illuminate\Database\Eloquent\Model;

class T_ProductoModel extends Model
{
    //Declaramos el nombre de la tabla en la BD en MySQL.
    protected $table = 'tipo_producto';

    //Declaramos la llave primaria de la tabla.
    protected $primarykey = 'id';

    //Declarar la variable timestamps solo acepta (True/False)
    public $timestamps = false;

    //filas o campos de la tabla
    protected $fillable = [
        'id','nombre_p','tipo','costo','stock','fecha','hora','usuario'
    ];
}

?>
