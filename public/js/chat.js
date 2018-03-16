/**
*@class carga una animación y muestra un chat con sus mensajes
*@author Adrián Cárdenas Lara (ACL)
*update 13/03/2018
*/


/**
*Variable global que determinará el tiempo
* @property timer
* @type int
* @default null
*/
var timer = null;


/**
 * @method mostrar
 * inicializa el timer, hace el efecto correspondiente y muestra los mensajes por chat
 */
function mostrar() {

    if( timer ){
        clearInterval(timer);
    }

    /**
     * @method setTimeout
     * ejecuta la funcion durante el tiempo especificado
     * @param efectoVisual {función} | timer {int}
     */
    setTimeout(efectoVisual,100);
    
    /**
     * @method setTimeout
     * ejecuta la funcion durante el tiempo especificado
     * @param function {función} | timer {int}
     */
    setTimeout(function(){
        esconderLogo();
        $('#boxChat').toggle("fast");
    },3000);

    /**
     * @method setInterval
     * ejecuta la funcion durante el tiempo especificado
     * @param mensajes {función} | timer {int}
     */
    timer = setInterval(mensajes,2000);

}


/**
 * @method ajaxChat
 * Recoge el mensaje que se acaba de mandar y el id del usuario que lo hizo
 * @param id 
 * @type int
*/

//ENVIA EL MENSAJE A LA BBDD
function ajaxChat(id){

     /**
      * funcion ajax que llama a una api y recoge el mensaje enviado
      * @property Ajax
      * @type API
     */
    $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'api/ajaxRequest',
        data: $('#chatRoom').serialize(),
        cache: false
    })
    .fail(
        /**
         * @method function
         * Devuelve un error si ha ido mal
         */
          function( jqXHR, textStatus, errorThrown ) {
          console.log( textStatus + errorThrown);
      }
    )
    .done( 
        /**
             * @method function
             * Executa la siguiente función si todo funciona
             */
        function() {
            console.log("consigue insertar");
            $('#texto').val(" ");
            mostrar();
        }
    );

}


 /**
 * @method mensajes
 * Recoge los mensajes por AJAX y los muestra 
 */
function mensajes(){

    /**
    *Variable que almacena el id del chat en el que se encuentra el usuario
    * @property idchat
    * @type int
    */
    var idchat = $('#idChat').val();

    /**
    *Variable que almacena el nombre del usuario
    * @property user
    * @type string 
    */
    var user = $('#usuario').val();



    $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'api/recibirMensajes',
        cache: false,
        data: {"idchat" : idchat, "usuario" : user},
        dataType: "json"
    }).fail(
          function( jqXHR, textStatus, errorThrown ) {
          console.log("no recibe nada");
      }
    ).done(
            /**
             * @method function
             * Executa la siguiente función si todo funciona
             * @param res {JSON}
             */
            function(res) {
            //console.log(res);
            console.log("Done del ajax");

            /**
            *Variable que contiene array con todos los mensajes
            * @property k
            * @type JSON
            */
            for(var k in res) {


                //Determina si un mensaje es TU usuario o de otro y crea la burbuja de mensaje en la dirección correspondiente
                
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
    });
}



 /**
 * @method cambiarChat
 * Cambia el de chat
 * @param  id 
 * @type int
 */
function cambiarChat( id ){
    
  
    // esconde el chat 
    
    $('#boxChat').hide("fast");

    
    //muestra el dibujo que hace la animación

    $('#svgAttributes').toggle("fast");



    /**
    * variable que recoge el id del barrio/chat al que entra
    * @property sala
    * @type string
    */
    var sala = $('#'+id).val();


    
    //Crea un elemento JQuery con el texto de la variable anterior
    
    $('#tituloSala').attr('class', 'fa fa-group');
    $('#tituloSala').text(sala);

    
    // Si es el primer chat que se crea
    
    if($('#idChat').val() == 0){
        $('#idChat').attr({'value':id , 'data-active':'y'});
    }else{
    
    //o si ya existe, vacia el div 
    
        $('#content-mensajes').empty();
        $('#idChat').attr({'value':id , 'data-active':'y'});

    }


    mostrar();  
}



/**
* @method salirChat
* Hace un efecto de fadeOut en el chat y resetea el timer a 0
*/
function salirChat(){
    $('#boxChat').fadeOut(1600);
    if( timer ){
        clearInterval(timer);
    }
}


 /**
 * @method efectoVisual
 * Hace un efecto visual
 */
function efectoVisual(){
    /**
     * Variable que ejecuta la animación
     * @property svgAttributes
     * @type anime
    */
    var svgAttributes = anime({
    //a quien afecta
      targets: '#svgAttributes polygon',
    //extender el SVG en esos puntos
      points: '64 128 8.574 96 8.574 32 64 0 119.426 32 119.426 96',
    //el efecto que realiza
      easing: 'easeInOutExpo',
    // realizar el mismo efecto pero a la inversa
      direction: 'alternate',
    //la duración de la animación
      duration: 1050,
    //si se repite o no 
      loop: true
    });
}



 /**
 * @method esconderLogo
 * ESconde el SVG
 */
function esconderLogo(){
    $('#svgAttributes').hide("fast");
}

