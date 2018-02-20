
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').remove();
                $('#contenedorFoto').append($('<img>').attr('id','blah'));

                $('#blah')
                    .attr('src', e.target.result)
                    .width('50%')
                    .height('50%');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    var form = $('<form>',{
        'method': 'POST',
        'name': 'formulario',
        'id': 'formulario',
    });

    var divRow = $('<div>', {
        'class': 'row',
    });

    var divGeneral = $('<div>', {
        'class': 'col-md-12',
    });

    var divTitulo = $('<div>', {
        'class': 'col-md-12',
    }).append($('<input>',{
        'type': 'text',
        'name': 'titulo',
        'id': 'titulo',
        'placeholder': 'Titulo',
    })); 

    var divCheckbox = $('<div>', {
            'class': 'col-md-12',
        }).append($('<input>',{
            'type': 'checkbox',
            'id': 'importante',
            'name': 'importante',
        })).append($('<label>').text('Noticia importante'));

    var divDescripcion = $('<div>', {
            'class': 'col-md-12',
        }).append($('<label>').text('Descripcion')).append(
            $('<br>')).append($('<textarea>', {
                'rows': '4',
                'cols': '40',
                'name': 'desc',
                'id': 'desc',
                'style': 'resize: none', 
            })); 

    var inputFile = $('<input>',{
        'type': 'file',
        'id': 'foto',
        'name': 'foto',
        'onchange': 'readURL(this)',
    });

    var span = $('<span>',{
        'id': 'contenedorFoto',
    });

    var inputEnvio = $('<input>', {
        'type' : 'button',
        'class': 'btn btn-success col-md-2',
        'onclick': 'enviarNoticias()',
        'value': 'Enviar',
    });

    $(function() {
        $(divGeneral).append(divTitulo);
        $(divGeneral).append($('<br>'));
        $(divGeneral).append(divCheckbox);
        $(divGeneral).append(divDescripcion);
        $(divGeneral).append($('<br>'));
        $(divGeneral).append(inputFile);
        $(divGeneral).append($('<br>'));
        $(divGeneral).append(span);
        $(divGeneral).append($('<br>'));
        $(divGeneral).append(inputEnvio);
        $(divGeneral).append();
        $(divRow).append(divGeneral);
        $(form).append(divRow);
        $("h2#tituloChatPrueba").after(form);

    });


    function enviarNoticias(){
    	var formData = new FormData(document.getElementById('formulario'));

    	$.ajax({	
        type: 'POST',
        crossDomain: true,
        url: 'api/noticiasRequest',
        data: formData,
        cache: false,
        processData: false,
        contentType: false
   		}).fail(function( jqXHR, textStatus, errorThrown ) {
          console.log( textStatus + errorThrown);
      	}).done(function(){
      		location.reload(true);
      	})

    }
</script>


<h2 id="tituloChatPrueba">CHAT</h2>
<!--<form>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 form-group">
                <input type="text" placeholder="Titulo">
            </div>
            <div class="col-md-12">
                <input type="checkbox">
                <label>
                    Noticia importante
                </label>
            </div>
            <div class="col-md-12">
                <label>Descripcion</label><br>
                <textarea rows="6" cols="40" style="resize: none;"></textarea>
            </div>
            <br>
            <input type="file" onchange="readURL(this);"/>
            <br>
            <span id="contenedorFoto"></span>
            <br>
            <input type="button" onclick="crearSelect()" class="btn btn-success col-md-2" value="Enviar"/>
        </div>
    </div>
</form>-->         
