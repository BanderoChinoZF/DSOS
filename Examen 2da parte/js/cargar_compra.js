

//Para hacer una seleccion de inicio
$(function (){

    $('#selec_producto').on('change',funcion1);
    $('#cantidad').on('change',subtotal);

    $('#descuento').on('change',descuento);

    //El change en JavaScript es como una actualizacion en la pagina

});

function funcion1()
{
    //alert('si entro a la funcion 1');
    var tipo_producto = document.getElementById("selec_producto").value;
    //alert(tipo_producto);

    $.get('/Producto/Costo/' + tipo_producto + '',
        function (data){
            $('#Costo_unitario').val(data['costo']);
        });
}

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
}
