
var timer = null;

function mostrar() {


    $('#boxChat').fadeIn(1600);

    if( timer ){
        clearInterval(timer);
    }

    timer = setInterval('mensajes()',2000);
}

//ENVIA EL MENSAJE A LA BBDD
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
            $('#texto').val(" ");
            mensajes();
        }
    );

}


//ESTA FUNCION RECOGE Y MUESTRA
function mensajes(){

    var idchat = $('#idChat').val();

    $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'api/recibirMensajes',
        cache: false,
        data: {"idchat" : idchat},
        dataType: "json"
    }).fail(function( jqXHR, textStatus, errorThrown ) {
          console.log("no recibe nada");
      }
    ).done(function(res) {
            var user = $('#usuario').val();
            for(var k in res) {
                if($('#idMensaje'+k).length == 0 || $('#idMensaje'+k).length == null){
                    if(res[k].id_user == user){
                        $('#content-mensajes').append($('<div>',
                                                         {'class':'bubble right',
                                                          'id':'idMensaje'+k
                                                        }).append($('<p>').text(res[k].mensaje))
                                                    );
                    }else{
                        $('#content-mensajes').append($('<div>',
                                                        {'class':'bubble left',
                                                         'idMensaje':'idMensaje'+k,
                                                         'style':'background-color:red'
                                                        }).append($('<p>').text(res[k].mensaje))
                                                    );
                    }
                }
                
            }
        }
    );
}



function cambiarChat( id ){

    if($('#idChat').val() == 0){
        $('#idChat').attr({'value':id , 'data-active':'y'});
    }else{
        $('#content-mensajes').empty();
        $('#idChat').attr({'value':id , 'data-active':'y'});

    }
    mostrar();  
}


function salirChat(){
    $('#boxChat').fadeOut(1600);
    if( timer ){
        clearInterval(timer);
    }
}