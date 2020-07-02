<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Siempre que queramos mostrar una vista simepre utilizaremos *GET*
//Y para el registro de datos utilizaremos POST

//Creacion de ruta del formulario *Ruta Amigable*
Route::GET('/Usuario/Altas','Usuarios\UsuarioController@index');
Route::GET('/Usuario/Altas_blade','usuarios_Practica\practicaController@ver_practica');

//Ruta a donde se rediccionará el formulario de registro d eusuario.
Route::POST('/Usuario/Registro','Usuarios\UsuarioController@Alta_usuario');

//Ruta para ver los usuarios
Route::GET('/Usuario/Detalles','Usuarios\UsuarioController@ver_datos');

//Ruta para consultar un registro
Route::GET('/Usuario/Ver_Usuario','Usuarios\UsuarioController@ver_usuario');
Route::POST('/Usuario/Actualizar','Usuarios\UsuarioController@actualizar_usuario');


//RUTAS PARA ELIMAR REGISTROS
Route::GET('/Usuario/Eliminar','Usuarios\UsuarioController@ver_usuario_eli');
/*
Route::GET('/Usuario/Eliminar/{id}','Usuarios\UsuarioController@ver_usuario_eli');
modificacmos en el controlador donde la funcion va a recibir un parametro id
*/
Route::POST('/Usuario/Baja','Usuarios\UsuarioController@eliminar_usuario');

//RUTAS PARA ELIMAR REGISTROS POR BANDERA
Route::GET('/Usuario/ver_bandera','Usuarios\UsuarioController@ver_usuario_bandera');
Route::POST('/Usuario/Baja_Bandera','Usuarios\UsuarioController@actualizar_usuario_bandera');

Route::GET('/Usuario/Principal','Usuarios\UsuarioController@ver_tabla');


//<-------------------------------------------------------------------------------------------------------->
//Rutas para el CRUD de productos.
Route::GET('/Productos/nuevo_producto','Productos\ProductoController@ver_registro');
Route::POST('/Producto/registrar_producto','Productos\ProductoController@registrar_producto');

Route::GET('/Productos/ver_ventas','Productos\ProductoController@ver_ventas');

Route::GET('/Productos/editar_ventas','Productos\ProductoController@editar_ventas');

//<---------------------------------------------------------------------------------------------------------->
Route::GET('/Tienda/ver_cobro','Tienda\TiendaController@ver_cobro');

//Datos del costo por producto
Route::GET('/Producto/Costo/{id}','Tienda\TiendaController@ver_precio_producto');




//<------------------------------------------------------------------------------------------------------------->
//RUTAS PARA EL SISTEMA DE MATERIAS
Route::GET('/Sistema/ver_materias','sistemaITO\controllerITO@ver_materia');

Route::GET('/Sistema/ver_boleta/{id}','sistemaITO\controllerITO@ver_boleta');

Route::GET('/Sistema/ver_genero/{sexo}','sistemaITO\controllerITO@ver_genero');

Route::GET('/Sistema/ver_nombre/{nombre}','sistemaITO\controllerITO@ver_nombre');

//<---------------------------------------------------------------------------------------------------------------------->
//RUTAS PARA EL CRUD DE ALUMNOS Y MATERIAS.
Route::GET('/Sistema/principal','sistemaITO\controllerITO@principal');

Route::GET('/Sistema/registrarAlumno','sistemaITO\controllerITO@form_alumno');
Route::GET('/Sistema/registrarMateria','sistemaITO\controllerITO@form_materia');

Route::POST('/Sistema/alta_alumno','sistemaITO\controllerITO@alta_alumno');
Route::POST('/Sistema/alta_materia','sistemaITO\controllerITO@alta_materia');

Route::GET('/Sistema/tabla_materias','sistemaITO\controllerITO@tabla_materias');
Route::GET('/Sistema/tabla_alumnos','sistemaITO\controllerITO@tabla_alumnos');

Route::GET('/Sistema/edit_materia/{id}','sistemaITO\controllerITO@actualizar_materia');
Route::POST('/Sistema/act_materia/{id}','sistemaITO\controllerITO@act_materia');

Route::GET('/Sistema/eliminar_materia/{id}','sistemaITO\controllerITO@eliminarMateria');
Route::GET('/Sistema/eliminar_alumno/{id}','sistemaITO\controllerITO@eliminarAlumno');

Route::GET('/Sistema/edit_alumno/{id}','sistemaITO\controllerITO@actualizar_alumno');



