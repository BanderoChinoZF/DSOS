<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Modulo Cobro ::: Tienda </title>

    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}

    {!! Html::script('assets/js/jquery.min.js') !!}
    {!! Html::script('assets/js/cargar_compra.js') !!}

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

                        <legend>Registrar Cobro</legend>

                        <!-- Ticket de compra -->
                        <div class="form-group">
                            {!! Form::label('lbl_ticket', 'Num. de Ticket de compra: ', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('ticket', $value = null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <!-- ID del usuario -->
                        <div class="form-group">
                            {!! Form::label('lbl_usuario', 'ID Usuario: ', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('ticket', $value = null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <!-- Seleccionar el tipo de producto -->
                        <!-- <div class="form-group">
                             //Form::label('lbl_selec_p', 'Seleccionar tipo de producto: ', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                { //Form::select('tipo',$variable=null,null,
                                //['id'=>'select_producto','class' => 'form-control', 'placeholder' => 'Seleccione uno']) !!}
                            </div>
                        </div> -->

                        <div class="form-group">
                            {!! Form::label('lbl_selec_p', 'Seleccionar tipo de producto: ', ['class' => 'col-lg-2 control-label']) !!}
                           <div class="col-lg-10">
                               {!! Form::select('tipo',$tipo_p,null,
                               ['id'=>'selec_producto','placeholder'=>'Selecciones ..']) !!}
                           </div>
                       </div>

                        <!-- Costo Unitario -->
                        <div class="form-group">
                            {!! Form::label('lbl_costo_u', 'Costo Unitario: ', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('costo_unitario', $value = null, ['class' => 'form-control','id'=>'costo_unitario']) !!}
                            </div>
                        </div>

                        <!-- Costo Total de la compra -->
                        <div class="form-group">
                            {!! Form::label('lbl_cantidad', 'Cantidad de salida: ', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('cantidad', $value = null, ['class' => 'form-control', 'id'=>'cantidad']) !!}
                            </div>
                        </div>

                         <!-- Subtotal de la compra -->
                         <div class="form-group">
                            {!! Form::label('lbl_subtotal', 'Subtotal: ', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('subtotal', $value = null, ['class' => 'form-control', 'id'=>'subtotal']) !!}
                            </div>
                        </div>

                        <!-- Descuento de la compra -->
                        <div class="form-group">
                            {!! Form::label('lbl_descuento', 'Descuento: ', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('descuento', $value = null, ['class' => 'form-control', 'id'=>'descuento']) !!}
                            </div>
                        </div>

                         <!-- Descuento de la compra -->
                         <div class="form-group">
                            {!! Form::label('lbl_total', 'Total: ', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('total', $value = null, ['class' => 'form-control', 'id'=>'total']) !!}
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
