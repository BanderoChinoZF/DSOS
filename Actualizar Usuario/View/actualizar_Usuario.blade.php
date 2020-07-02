<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Usuarios ::: CRUD</title>
</head>
<body>

    <h2>Actualizar Usuario</h2>

    <form action="{{ url('/Usuario/Actualizar') }}" method="POST">
        <!-- INDICA QUE SE HARA UN INSERCION DE DATOS E INCRIPTA LOS MISMOS -->
        @csrf

         <!-- Comparacion entre el formato blade de laravel, y el HTML5 que se utiliza -->
        <label for="">Usuario</label>

        <!-- Laravel toma por defecto el nombre de variable que asignamos entre parentesis -->
        <input type="text" value="{{ $usuario->nombre_usuario }}" name="usuario">

        <label for="">Password </label>
        <input type="password" name="pass" id="" value="{{ $usuario->password }}">

        <label for="">Tipo de Usuario</label>
        <select name="tipo_usuario" id="">
            <option value="">Elija Usuario</option>
            <option value="0"
                @if ($usuario->tipo_usuario == 0)
                    {{ 'selected' }}
                @endif
            >Administrador</option>
            <option value="1"
                @if ($usuario->tipo_usuario == 1)

                    {{ 'selected' }}
                @endif
            >Temporal</option>
        </select>

        <label for="">Fecha de ingreso</label>
        <input type="date" name="fecha_registro" value="{{ $usuario->fecha_alta }}"></input>

        <input type="submit" name="enviar" value="Enviar">

    </form>

</body>
</html>
