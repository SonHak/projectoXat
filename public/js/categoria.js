
/**
 *@class recoge las noticias con la categoria especificada y hace una animación 
 *@author Adrián Cárdenas Lara (ACL)
 *update  12/03/2018 
 *

*/




/**
 * @method animation
 * Recoge los divs y hace una animación
*/
function animation(){

    /**
     * Variable que ejecuta la animación
     * @property functionBasedDelay
     * @type anime
    */
    var functionBasedDelay = anime(
     {
      targets: '.line',
      translateX: 900,
      direction: 'alternate',
      loop: false,
      delay: function(el, i, l) {
        return i * 500;
      }
    });
}



/**
 * @method categoroy
 * Crea los divs con las noticias que contengan la categoria selecionada
*/
function category(){

    /**
     * Variable que recoge el nombre de la categoria
     * @property categoria
     * @type String
    */
    var categoria = $('#category').val();

    console.log(categoria);
    
    /**
     *funcion ajax para recoger las noticias según la categoria
     * @property Ajax
     * @type API
    */
    $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'api/ajaxCategorias',
        data: {'categoria' : categoria },
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
             * @param res {JSON}
             */
            function(res) {
                        /**
                         * @method console.log
                         * @default "consigue categoria"
                        */
                        console.log("consigue categoria");

                        // utilizando JQuery creamos los divs 
                        $('.row1').empty();
                        $('.row2').empty();

                        /**
                         * [VARIABLE K] contiene una array de las Noticias
                         * @property k {JSON}
                        */
                        for(var k in res) {
                            if(res[k].importante == 0){
                                /**
                                 * crea un div que será el padre 
                                 * @property div1
                                 * @type Object
                                */
                                var div1 = $('<div>',{'class':"card noticias",'style': "float:left; width: 10rem;  margin: 5px ; height: 200px"});
                                

                                /**
                                 * crea un elemento dom IMG que tendrá la imagen de la noticia 
                                 * @property img
                                 * @type Object
                                */
                                var img = $('<img>',{
                                                    'style': "width: 80%; padding-left: 20%;",
                                                    'src': res[k].imagen,
                                                    'alt': "Imagen no disponible",
                                                    });
                                
                                /**
                                 * crea otro div 
                                 * @property div2
                                 * @type Object
                                */
                                var div2 = $('<div>',);

                                /**
                                 * crea un elemento dom H5 que será el titulo de la noticia
                                 * @property h5
                                 * @type Object
                                */
                                var h5 = $('<h5>',);



                                /**
                                 * crea un elemento dom P que contendrá la descripcion de la noticia
                                 * @property p
                                 * @type Object
                                */
                                var p = $('<p>',{'style':'margin-top: -30px'});


                                h5.text(res[k].titulo);
                                p.text(res[k].desc);

                                div2.append(h5);
                                div2.append(p);

                                div1.append(img);
                                div1.append(div2);

                                
                                var divLine = $('<div>',{'class':'line',});
                                divLine.append(div1);

                                $('.row2').append(divLine);

                            }else if(res[k].importante == 1){
                                var div1 = $('<div>',{'class':"card noticias", 'style':"float:left; width: 10rem; margin: 5px ; height: 200px"});
                                var img = $('<img>',{
                                                    'style': "width: 80%; padding-left: 20px;",
                                                    'src': res[k].imagen,
                                                    'alt': "Imagen no disponible",
                                                    });
                                var div2 = $('<div>',);
                                var h5 = $('<h5>',);
                                var p = $('<p>',{'style':'margin-top: -30px'});

                                h5.text(res[k].titulo);
                                p.text(res[k].desc);

                                div2.append(h5);
                                div2.append(p);

                                div1.append(img);
                                div1.append(div2);

                               
                                var divLine = $('<div>',{'class':'line'});
                                divLine.append(div1);

                                $('.row1').append(divLine);


                            }else{
                                $('.row1').text('No hay noticias IMPORTANTES de esta categoria');
                                $('.row2').text('No hay noticias de esta categoria');
                            }
                        }
                        
                    }
    );
    

    /**
     * @method setTimeout
     * Determina el tiempo que tarda en ejecutarse la función
     * @type Function
     * @param animation {función} | time {int}
     */
    setTimeout(animation,100);
    //console.log('acaba animation');
}

