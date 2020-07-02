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
            <div class="row">
                <div class="col-lg-8">

                    <div class="well">

                            {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}

                            <br>
                            <br>

                            <fieldset>

                                <legend>Editar Venta N°: </legend>

                                <!-- ID DEL COMPRADOR -->
                                <div class="form-group">
                                    {!! Form::label('id_comprador', 'Comprador: ', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('id_comprador', $value = null, ['class' => 'form-control', 'placeholder' => 'ID Comprador']) !!}
                                    </div>
                                </div>

                                <!-- PRODUCTO QUE SE ESTA VENDIENDO -->
                                <div class="form-group">
                                    {!! Form::label('producto', 'Producto: ', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('producto', $value = null, ['class' => 'form-control', 'placeholder' => 'Ingrese Producto']) !!}
                                    </div>
                                </div>

                                <!-- COSTO UNITARIO DEL PRODUCTO -->
                                <div class="form-group">
                                    {!! Form::label('costo_unitario', 'Costo Unitario: ', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('costo_unitario', $value = null, ['class' => 'form-control', 'placeholder' => 'Costo Unitario']) !!}
                                    </div>
                                </div>

                                <!-- CANTIDAD DE PRODUCTO VENDIDO -->
                                <div class="form-group">
                                    {!! Form::label('cantidad', 'Cantidad: ', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('cantidad', $value = null, ['class' => 'form-control', 'placeholder' => 'Cantidad De Productos']) !!}
                                    </div>
                                </div>

                                <!-- SUBTOTAL DE LA VENTA -->
                                <div class="form-group">
                                    {!! Form::label('subtotal', 'Subtotal: ', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('subtotal', $value = null, ['class' => 'form-control', 'placeholder' => 'Subtotal']) !!}
                                    </div>
                                </div>

                                <!-- DESCUENTO SOBRE LA VENTA REALIZADA -->
                                <div class="form-group">
                                    {!! Form::label('descuento_10', 'Descuento 10%: ', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('descuento_10', $value = null, ['class' => 'form-control', 'placeholder' => 'Descuento ']) !!}
                                    </div>
                                </div>

                                <!-- CANTIDAD TOTAL DE LA VENTA -->
                                <div class="form-group">
                                    {!! Form::label('total', 'Cantidad Total:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('total', $value = null, ['class' => 'form-control', 'placeholder' => 'Ingrese Producto']) !!}
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                                    </div>
                                </div>

                            </fieldset>

                            {!! Form::close()  !!}

                        </div>
                </div>
            </div>
        </div>

</body>
</html>
