<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    //Declaramos el nombre de la tabla en la BD en MySQL.
    protected $table = 'ventas';

    //Declaramos la llave primaria de la tabla.
    protected $primarykey = 'id_compra';

    //Declarar la variable timestamps solo acepta (True/False)
    public $timestamps = false;

    //filas o campos de la tabla
    protected $fillable = [
        'id_comprador','producto','costo_unitario','cantidad','subtotal','descuento_10','total'
    ];
}

?>
