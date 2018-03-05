
var timer = null;

function mostrar() {

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
            mostrar();
        }
    );

}


//ESTA FUNCION RECOGE Y MUESTRA
function mensajes(){

    var idchat = $('#idChat').val();
    var user = $('#usuario').val();

    $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'api/recibirMensajes',
        cache: false,
        data: {"idchat" : idchat, "usuario" : user},
        dataType: "json"
    }).fail(function( jqXHR, textStatus, errorThrown ) {
          console.log("no recibe nada");
      }
    ).done(function(res) {
            //console.log(res);
            console.log("Done del ajax");
            for(var k in res) {

                if($('#idMensaje'+k).length == 0 || $('#idMensaje'+k).length == "" && k == 0){
                    //console.log("Entra primer if: Check longitud mensajes");
                    if(res[k].id_user == user){
                        //console.log("Es igual al user");
                        $('#content-mensajes').append($('<div>',
                                                         {'class':'bubble right',
                                                          'id':'idMensaje'+k
                                                        }).append($('<span>',{'style': 'margin-left: -83%; font-size: 25px','class':'fa fa-user'}).text(res[k].usuario.name)).append($('<p>').text(res[k].mensaje))
                                                    );
                    }else{
                        //console.log("No es igual al user");
                        $('#content-mensajes').append($('<div>',
                                                        {'class':'bubble left',
                                                         'id':'idMensaje'+k,
                                                         'style':'background-color:red'
                                                        }).append($('<span>',{'style': 'margin-left: 83%; font-size: 25px','class':'fa fa-user'}).text(res[k].usuario.name)).append($('<p>').text(res[k].mensaje))
                                                    );
                    }
                }
                    //console.log("Esto no se sabe bien bien que es WTF?");
                
            }
        }
    );
}



function cambiarChat( id ){

    var sala = $('#'+id).val();
    
    $('#tituloSala').attr('class', 'fa fa-group');
    $('#tituloSala').text(sala);

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