<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ver Ventas </title>

    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}

</head>
<body>

    <div class="container">

        <h1> Tabla Ventas </h1>
        <br>
        <br>

        <div class="row">
            <table class="table">

                <thead class="thead-dark">

                    <!-- Nombres de las columnas de las tablas -->
                    <tr>
                        <th scope="col">Venta N°</th>
                        <th scope="col">Cliene</th>
                        <th scope="col">Prodcuto</th>
                        <!-- Este comando de &ntilde; hace que la letra "ñ" aparezca -->
                        <th scope="col">Total</th>
                        <th scope="col">Acciones</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($ventaTotales as $v)
                        <tr>

                            <th scope="row"> {{ $v->id_compra  }} </th>
                            <td> {{ $v->id_comprador  }} </td>
                            <td> {{ $v->producto  }} </td>
                            <td> {{ $v->total  }} </td>
                            <td>
                                <button type="button" class="btn btn-warning">Detalles</button>
                                <button type="button" class="btn btn-info">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>

</body>
</html>
