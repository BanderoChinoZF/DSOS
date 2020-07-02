<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumno ::: CRUD Alumno</title>
</head>
<body>

 <a href="{{ url('/Sistema/registrarAlumno') }}">Altas</a>

    <br>
    <br>

    <table border="1">

        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <!-- Este comando de &ntilde; hace que la letra "ñ" aparezca
            <td>Contrase&ntilde;a</td> -->
            <td>Primer Apellido</td>
            <td>Segundo Apellido</td>
            <td>Semestre</td>
            <td>Sexo</td>
            <td>Promedio</td>
            <td>Acciones</td>
        </tr>

        <tr>

            @foreach ($tabla as $t)

                <tr>
                    <td>{{ $t->id_alumno  }}</td>
                    <td>{{ $t->nombre }}</td>
                    <td>{{ $t->ap_p }}</td>
                    <td>{{ $t->ap_m }}</td>
                    <td>{{ $t->semestre }}</td>
                    <td>{{ $t->sexo }}</td>
                    <td>{{ $t->promedio }}</td>
                    <td>
                        <a href="edit_alumno\{{ $t->id_alumno }}">Editar</a>
                        <a href="eliminar_alumno\{{ $t->id_alumno }}">Eliminar</a>
                    </td>
                </tr>

            @endforeach

        </tr>

    </table>

</body>
</html>
