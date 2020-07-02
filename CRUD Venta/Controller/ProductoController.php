<?php
namespace App\Http\Controllers\Productos;

//Declaracion del uso del controlador.
use App\Http\Controllers\Controller;

//Habilitamos el modelo ah ocupar
use App\Models\Productos\ProductoModel;

//Habilita el Request
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function _construct()
    {
    }

    //<------- FUNCION PARA MOSTRAR LA VISTA DE REGISTRO DE UNA VENTA ------->
    public function ver_registro(Request $request)
    {
        return view('Productos/registrar');
    }

    //<------- FUNCION PARA REGISTRAR LA VENTA EN LA BD ------->
    public function registrar_producto(Request $request)
    {
        //Utilizaremos eloquent para la insercion de datos en la BD.
        //Guardamos en varibales lo que viene de nuestra vista con formato blade.
        $id_comprador = $request->id_comprador;
        $producto = $request->producto;
        $costo_unitario = $request->costo_unitario;
        $cantidad = $request->cantidad;
        $subtotal = $request->subtotal;
        $descuento_10 = $request->descuento_10;
        $total = $request->total;

        //Ocupando al Modelo.
        ProductoModel::create([
            'id_comprador' => $id_comprador,
            'producto' => $producto,
            'costo_unitario' => $costo_unitario,
            'cantidad' => $cantidad,
            'subtotal' => $subtotal,
            'descuento_10' => $descuento_10,
            'total' => $total]);

        return redirect()->to('Productos/nuevo_producto');
    }

    public function ver_ventas()
    {
        $ventasTotales = ProductoModel::
        select('id_compra','id_comprador','producto','total')->get();


        return view('Productos/ver_productos')->with('ventaTotales',$ventasTotales);
        //return $ventasTotales;
    }

    public function editar_ventas()
    {
        return view('Productos/editar');
    }

}
