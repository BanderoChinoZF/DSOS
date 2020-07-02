<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Registrar Prductos :: CRUD Productos  </title>
</head>
<body>

    <h1>Registrar Venta</h1>
    <br>

    {!! Form::open(['url' => 'Producto/registrar_producto', 'method'=>'POST']) !!}

        {!! Form::label('Comprador N°: ') !!}
        {!! Form::text('id_comprador') !!}

        {!! Form::label('Producto: ') !!}
        {!! Form::text('producto') !!}

        {!! Form::label('Costo Unitario: ') !!}
        {!! Form::text('costo_unitario') !!}

        <br>
        <br>

        {!! Form::label('Cantidad: ') !!}
        {!! Form::text('cantidad') !!}

        {!! Form::label('Subtotal: ') !!}
        {!! Form::text('subtotal') !!}

        {!! Form::label('Descuento 10%') !!}
        {!! Form::text('descuento_10') !!}

        <br>
        <br>

        {!! Form::label('Total comprado:') !!}
        {!! Form::text('total') !!}

        {!! Form::submit('Registrar Venta') !!}

    {!! Form::close() !!}


</body>
</html>
