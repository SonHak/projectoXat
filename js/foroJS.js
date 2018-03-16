/*
* Creador Moises Ortega
*Javascript para el apartado "FORO"
*/

// Funciones generales de uso vario
function FadeInFOR(elemento, tiempo){
	$(elemento).fadeIn(tiempo);
}

function FadeOutFOR(elemento, tiempo){
	$(elemento).fadeOut(tiempo);
}

// Funciones JQuery
$(function(){
	$('#FORopiniones').click(function(){
		$('#FORopinionesTab').delay(800).fadeIn(FadeOutFOR('.FORtable'));
	})
});

$(function(){
	$('#FORpreguntas').click(function(){
		$('#FORpreguntasTab').delay(800).fadeIn(FadeOutFOR('.FORtable'));
	})
});

$(function(){
	$('#Formejoras').click(function(){
		$('#FORmejorasTab').delay(800).fadeIn(FadeOutFOR('.FORtable'));
	})
});

$(function(){
	$('#crearOpinion').delay(800).fadeIn(FadeOutFOR())
});

$(document).ready(function () {
	(function ($) {
		$('#filtrar').keyup(function () {
			var rex = new RegExp($(this).val(), 'i');
			$('.buscar tr').hide();
			$('.buscar tr').filter(function () {
				return rex.test($(this).text());
			}).show();
		})
	}(jQuery));
});

function crearFormulario(){
	alert("Entra correctamente");
	$(function(){
		alert("Entra dentro");
        /*$(divGeneral).append(divTitulo);
        $(divGeneral).append($('<br>'));
        $(divGeneral).append(inputCategoria);
        $(divGeneral).append($('<br>'));
        $(divGeneral).append(divContenido);
        $(divGeneral).append($('<br>'));
        $(divGeneral).append(span);
        $(divGeneral).append($('<br>'));
        $(divGeneral).append(inputEnvio);
        $(divGeneral).append();
        $(divRow).append(divGeneral);
        $(form).append(divRow);
        $("h2#tituloChatPrueba").after(form);*/
	});
}

//Crear formulario DOM
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

    var divContenido = $('<div>', {
            'class': 'col-md-12',
        }).append($('<label>').text('Contenido')).append(
            $('<br>')).append($('<textarea>', {
                'rows': '4',
                'cols': '40',
                'name': 'desc',
                'id': 'desc',
                'style': 'resize: none', 
            })); 

    var inputEnvio = $('<input>', {
        'type' : 'button',
        'class': 'btn btn-success col-md-2',
        'onclick': 'enviarForo()',
        'value': 'Enviar',
    });

    var inputSelect = $('<select>', {
        'id':'categoria',
        'name':'categoria',
        'placeholder':'Categoria',
    });

    var optionOpinion = $('<option>',{
    	'value':'Opinion'
    });

    var optionPreguntas = $('<option>',{
    	'value':'Preguntas'
    });

    var optionMejoras = $('<option>',{
    	'value':'Mejoras'
    });

    var select =  inputSelect.append(optionOpinion).append(optionPreguntas).append(optionMejoras);
