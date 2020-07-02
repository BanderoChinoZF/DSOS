<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Registrar Alumno ::: CRUD Alumno </title>

    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}

</head>
<body>

        <div class="container">

                {!! Form::open(['url' => '/Sistema/alta_alumno', 'class' => 'form-horizontal']) !!}

                <br>
                <br>

                <fieldset>

                    <legend>Alumno</legend>


                    <div class="form-group">
                        {!! Form::label('lbl_nombre', 'Nombre: ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('nombre', $value = null, ['class' => 'col-lg-4 control-label','placeholder'=>'Nombre del Alumno']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lbl_ap_p', 'Primer Apellido: ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('ap_p', $value = null, ['class' => 'col-lg-4 control-label','placeholder'=>'Primer Apellido']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lbl_ap_m', 'Segundo Apellido: ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('ap_m', $value = null, ['class' => 'col-lg-4 control-label','placeholder'=>'Segundo Apellido']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lbl_semestre', 'Semestre: ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('semestre', $value = null, ['class' => 'col-lg-4 control-label','placeholder'=>'Semestre']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lbl_sexo', 'Sexo: ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::select('sexo',
                                    ['H' => 'Hombre', 'M' => 'Mujer'], null,
                                    ['placeholder' => 'Seleccione Sexo...']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lbl_prom', 'Promedio: ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('promedio', $value = null, ['class' => 'col-lg-4 control-label','placeholder'=>'Promedio']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Registrar Alumno', ['class' => 'btn btn-outline-danger']) !!}
                    </div>



                </fieldset>

                {!! Form::close()  !!}
            </div>



</body>
</html>
