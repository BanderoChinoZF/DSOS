<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro ::: Formato Blade</title>
</head>
<body>

    <h1>Registrar Venta</h1>
    <br>

    {!! Form::open(['url' => 'Usuario/Registro', 'method'=>'POST']) !!}

        {!! Form::label('Usuario: ') !!}
        {!! Form::text('usuario') !!}

        {!! Form::label('Password: ') !!}
        {!! Form::password('pass') !!}

        {!! Form::label('Costo Unitario: ') !!}
        {!! Form::text('costo_unitario') !!}

        <br>
        <br>

        {!! Form::label('Tipo Usuario: ') !!}
        {!! Form::select('tipo_usuario',
            ['0' => 'Administrador',
             '1' => 'Temporal'],null,
            ['placeholder'=>'Seleccione Tipo Usuario']) !!}


        {!! Form::label('Fecha de ingreso: ') !!}
        {!! Form::text('fecha_ingreso') !!}

        <br>
        <br>

        {!! Form::submit('Enviar') !!}

    {!! Form::close() !!}

</body>
</html>
