<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Editar Materia ::: CRUD Materias </title>

    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}

</head>
<body>

        <div class="container">

                {!! Form::open(['url' => ['/Sistema/act_materia', $materia->id_materia], 'class' => 'form-horizontal','method'=>'POST']) !!}

                <br>
                <br>

                <fieldset>

                    <legend>Materia</legend>


                    <div class="form-group">
                        {!! Form::label('lbl_nombre', 'Nombre De La Materia: ', ['class' => 'col-lg-4 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('nombre', $materia->nombre,
                                ['class' => 'col-lg-4 control-label','placeholder'=>'Nombre de la Materia']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lbl_clave', 'Clave: ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('clave', $materia->clave, ['class' => 'col-lg-4 control-label','placeholder'=>'Clave']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lbl_clave', 'Semestre: ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('semestre', $materia->semestre, ['class' => 'col-lg-4 control-label','placeholder'=>'Semestre']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lbl_aprobados', 'Aprobados ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('aprobados', $materia->aprobados, ['class' => 'col-lg-4 control-label','placeholder'=>'Aprobados']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('lbl_reprobados', 'Reprobados: ', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                                {!! Form::text('reprobados', $materia->reprobados, ['class' => 'col-lg-4 control-label','placeholder'=>'Reprobados']) !!}
                        </div>
                    </div>

                    <!-- -->
                    <div class="form-group">
                        {!! Form::submit('Actualizar Datos', ['class' => 'btn btn-outline-success']) !!}
                    </div>



                </fieldset>

                {!! Form::close()  !!}
            </div>



</body>
</html>
