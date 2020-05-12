$(buscar_vuelos());

function buscar_vuelos(consulta){
    $.ajax({
        url: './assets/conf/buscar.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta){
       $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    })
}

$(document).on('keyup','#origen', function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_vuelos(valor);
    }
    else{
        buscar_vuelos();
    }
});



