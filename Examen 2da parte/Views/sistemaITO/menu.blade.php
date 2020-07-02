<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> Menu Principal ::: My CRUD</title>

    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}

    {!! Html::script('assets/js/jquery.min.js') !!}

</head>
<body>

    <div class="container">

        <br>
        <br>

        <h1> Menu Principal </h1>

        <fieldset>

            <legend> Elige una opcion </legend>

            <a class="btn btn-success" href="/Sistema/registrarMateria" role="button">Nueva Materia</a>
            <br>
            <br>

            <a class="btn btn-success" href="/Sistema/tabla_materias" role="button">Ver Materias</a>
            <br>
            <br>

            <a class="btn btn-info" href="/Sistema/registrarAlumno" role="button">Registrar Alumno</a>

            <br>
            <br>
            <a class="btn btn-info" href="/Sistema/tabla_alumnos" role="button">Ver Alumnos</a>

            <br>
            <br>
            <a class="btn btn-warning" href="/Sistema/ver_materias" role="button">Practica JS</a>

        </fieldset>

    </div>

</body>
</html>
