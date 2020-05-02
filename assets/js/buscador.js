$(buscar_vuelos());

function buscar_vuelos(consulta){
    $.ajax({
        url: 'buscar.php',
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

$(document).on('click','#idbotonbusqueda', function(){ //mirar click
    var valor = (this).val();
    if(valor != ""){
        buscar_vuelos(valor);
    }
})

