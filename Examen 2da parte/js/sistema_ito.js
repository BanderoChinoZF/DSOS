
//Para hacer una seleccion de inicio
$(function (){

    $('#select_materia').on('change',funcion1);

    $('#sexo').on('change',listar_alumnos);

    $('#hombre').on('change',promedio_chido);

    //$('#hombres').on('change',promedio_chido);

    //El change en JavaScript es como una actualizacion en la pagina

});


function funcion1()
{
    //alert('si entro a la funcion 1');
    var materia = document.getElementById("select_materia").value;

    $.get('/Sistema/ver_boleta/' + materia + '',
        function (data){

            var arre = data;
            var calif = 0;

            for(var i=0; i<arre.length;i++)
            {
                calif = calif + arre[i].promedio;
            }

            var prom = calif/arre.length;

            $('#promedio').val(prom);

            var aprobados = 0;
            var reprobador = 0;

            for(var i=0; i<arre.length;i++)
            {
                if(arre[i].aprobado == 1)
                {
                    aprobados++;

                }else
                {
                    reprobador++;
                }
            }

            $('#aprobados').val(aprobados);
            $('#reprobados').val(reprobador);

        });
}

function listar_alumnos()
{
    $('#hombre').empty();

    //var materia = document.getElementById("select_materia").value;
    var genero = document.getElementById("sexo").value;

    $.get('/Sistema/ver_genero/' + genero + '',
        function (data){

            var arre = data;

            for(var i=0; i < arre.length; i++)
            {

               /* var option = document.createElement("option"); //Creas el elemento opción
                $(option).html(arre[i].nombre); //Escribes en él el nombre de la provincia
                $(option).appendTo("#hombre"); //Lo metes en el select con id provincias
                */

                $('#hombre').append('<option value='+ arre[i].nombre +'>'+ arre[i].nombre +'</option>');
            }

        });
}

function promedio_chido()
{
    //var materia = document.getElementById("select_materia").value;
    var alumno = document.getElementById("hombre").value;

    $.get('/Sistema/ver_nombre/' + alumno  + '',
    function (data){

        $('#prom_al').val(data['promedio']);

    });

}

/*
function subtotal()
{
    var costo_unitario = document.getElementById("Costo_unitario").value;
    var cantidad_salida = document.getElementById("cantidad").value;
    var subtotal = costo_unitario * cantidad_salida;

    $('#subtotal').val(subtotal);
}

function descuento ()
{
    var subtotal = document.getElementById("subtotal").value;
    var descuento = document.getElementById("descuento").value;
    var resta_descuento = subtotal * descuento;

    var total = subtotal - resta_descuento;

    $('#total').val(total);
}*/
