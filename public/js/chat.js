

function mostrar() {
    $('#btnChat').hide();
    $('#boxChat').show();
    $('#boxChat').slideDown(1600);
}


function ajaxChat(id){

    $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'api/ajaxRequest',
        data: $('#chatRoom').serialize(),
        cache: false
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
          console.log( textStatus + errorThrown);
      }
    )
    .done( function() {
            console.log("consigue insertar");
            mensajes();
        }
    );

}



function mensajes(){

    $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'api/recibirMensajes',
        data: {},
        cache: false,
        dataType: "json"
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
          console.log("no recibe nada");
      }
    )
    .done( function(res) {
            console.log(res);
        }
    );

}