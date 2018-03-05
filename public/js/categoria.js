function category(){
    var categoria = $('#category').val();
    console.log(categoria);
    $.ajax({
        type: 'POST',
        crossDomain: true,
        url: 'api/ajaxCategorias',
        data: {'categoria' : categoria },
        cache: false
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
          console.log( textStatus + errorThrown);
      }
    )
    .done( function(res) {
                        console.log("consigue categoria");
                        $('.row1').empty();
                        $('.row2').empty();
                        for(var k in res) {
                            if(res[k].importante == 0){
                                var div1 = $('<div>',{'class':"card",'style': "width: 18rem; float:left; margin: 5px ; height: 300px"});
                                var img = $('<img>',{'class': "d-block",
                                                    'style': "width: 80%; padding-left: 20%;",
                                                    'src': res[k].imagen,
                                                    'alt': "Imagen no disponible",
                                                    });
                                var div2 = $('<div>',{'class':'card-body'});
                                var h5 = $('<h5>',{'class':'card-title'});
                                var p = $('<p>',{'class':'card-text'});

                                h5.text(res[k].titulo);
                                p.text(res[k].desc);

                                div2.append(h5);
                                div2.append(p);

                                div1.append(img);
                                div1.append(div2);

                                $('.row2').append(div1);

                            }else if(res[k].importante == 1){
                                var div1 = $('<div>',{'class':"card", 'style':"width: 18rem; float:left; margin: 5px ; height: 300px"});
                                var img = $('<img>',{'class': "d-block",
                                                    'style': "width: 80%; padding-left: 20%;",
                                                    'src': res[k].imagen,
                                                    'alt': "Imagen no disponible",
                                                    });
                                var div2 = $('<div>',{'class':'card-body'});
                                var h5 = $('<h5>',{'class':'card-title'});
                                var p = $('<p>',{'class':'card-text'});

                                h5.text(res[k].titulo);
                                p.text(res[k].desc);

                                div2.append(h5);
                                div2.append(p);

                                div1.append(img);
                                div1.append(div2);

                                $('.row1').append(div1);


                            }else{
                                $('.row1').text('No hay noticias IMPORTANTES de esta categoria');
                                $('.row2').text('No hay noticias de esta categoria');
                            }
                        }
                        
                    }
    );

}


