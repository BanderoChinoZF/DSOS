<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Materias ::: CRUD Materias</title>
</head>
<body>

    <br>
    <br>

    <table border="1">

        <tr>
            <td>ID</td>
            <td>Materia</td>
            <!-- Este comando de &ntilde; hace que la letra "ñ" aparezca
            <td>Contrase&ntilde;a</td> -->
            <td>Clave</td>
            <td>Semestre</td>
            <td>Aprobados</td>
            <td>Reprobados</td>
            <td>Acciones</td>
        </tr>

        <tr>

            @foreach ($tabla as $t)

                <tr>
                    <td>{{ $t->id_materia  }}</td>
                    <td>{{ $t->nombre }}</td>
                    <td>{{ $t->clave  }}</td>
                    <td>{{ $t->semestre }}</td>
                    <td>{{ $t->aprobados }}</td>
                    <td>{{ $t->reprobados }}</td>
                    <td>
                        <a href="edit_materia\{{ $t->id_materia }}">Editar</a>
                        <a href="eliminar_materia\{{ $t ->id_materia }}">Eliminar</a>
                    </td>
                </tr>

            @endforeach

        </tr>

    </table>

</body>
</html>
