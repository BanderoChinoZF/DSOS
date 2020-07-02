<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> Sistema ITO ::: Materia </title>

    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}

    {!! Html::script('assets/js/jquery.min.js') !!}
    {!! Html::script('assets/js/sistema_ito.js') !!}

</head>
<body>

    <div class="container">

        {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}

        <br>
        <br>

        <fieldset>

            <legend>Materia</legend>


            <div class="form-group">
                {!! Form::label('lbl_selec_m', 'Materias Aprobadas: ', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::select('materia',$materias,null,
                    ['id'=>'select_materia','placeholder'=>'Seleccione una materia ..']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('lbl_promedio', 'Promedio general: ', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('promedio', $value = null, ['id'=>'promedio','placeholder'=>'Promedio General...']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('lbl_aprobados', 'Alumnos Aprobados: ', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('aprobados', $value = null, ['id'=>'aprobados','placeholder'=>'Alumnos Aprobados ...']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('lbl_reprobados', 'Alumnos Reprobados: ', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('reprobados', $value = null, ['id'=>'reprobados','placeholder'=>'Alumnos Reprobados...']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('lbl_genero', 'Seleccione Genero: ', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::select('sexo',
                    ['M' => 'Masculino', 'F' => 'Femenino'], null,
                    ['id'=>'sexo','placeholder' => 'Seleccione un genero ...']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('lbl_g', 'Alumnos: ', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::select('hombre',[],null, ['id'=>'hombre','placeholder' => 'Seleccione un alumno ...']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('lbl_prom', 'Promedio Alumno: ', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('prom_a', $value = null, ['id'=>'prom_al','placeholder'=>'Promedio...']) !!}
                </div>
            </div>

        </fieldset>

        {!! Form::close()  !!}
    </div>

</body>
</html>
