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
	$('#crearForo').click(function(){
		$('#formularioForo').delay(800).fadeIn(FadeOutFOR('.FORtable'));
	})
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

//Crear formulario DOM
var formForo = $('<form>',{
    'method': 'POST',
    'name': 'formularioForo',
    'id': 'formularioForo',
    'class': 'FORtable collapse',
});

var divRowForo = $('<div>', {
    'class': 'row',
});

var divGeneralForo = $('<div>', {
    'class': 'col-md-12',
});

var divTituloForo = $('<div>', {
    'class': 'col-md-12',
}).append($('<input>',{
    'type': 'text',
    'name': 'tituloForo',
    'id': 'tituloForo',
    'placeholder': 'Titulo',
})); 

var divContenidoForo = $('<div>', {
        'class': 'col-md-12',
    }).append($('<label>').text('Contenido')).append(
        $('<br>')).append($('<textarea>', {
            'rows': '4',
            'cols': '40',
            'name': 'descForo',
            'id': 'descForo',
            'style': 'resize: none', 
        })); 

var inputEnvioForo = $('<input>', {
    'type' : 'button',
    'class': 'btn btn-success col-md-2',
    'onclick': 'enviarForo()',
    'value': 'Enviar',
});

var inputSelectForo = $('<select>', {
    'id':'categoriaForo',
    'name':'categoriaForo',
    'placeholder':'Categoria',
});

var optionOpinionForo = $('<option>',{
	'value':'opiniones'
}).text('Opinion');

var optionPreguntasForo = $('<option>',{
	'value':'preguntas'
}).text('Preguntas');

var optionMejorasForo = $('<option>',{
	'value':'mejoras'
}).text('Mejoras');

var selectForo =  inputSelectForo.append(optionOpinionForo).append(optionPreguntasForo).append(optionMejorasForo);

function crearFormulario(){
	$(function(){
        $(divGeneralForo).append(divTituloForo);
        $(divGeneralForo).append($('<br>'));
        $(divGeneralForo).append(divContenidoForo);
        $(divGeneralForo).append($('<br>'));
        $(divGeneralForo).append(selectForo);
        $(divGeneralForo).append($('<br>'));
        $(divGeneralForo).append($('<br>'));
        $(divGeneralForo).append(inputEnvioForo);
        $(divGeneralForo).append($('<br>'));
        $(divRowForo).append(divGeneralForo);
        $(formForo).append(divRowForo);
        $("#divBotones").after(formForo);
	});
}

//
function enviarForo(){
	var formData = new FormData(document.getElementById('formularioForo'));

	$.ajax({	
	    type: 'POST',
	    crossDomain: true,
	    url: 'api/setForo',
	    data: formData,
	    cache: false,
	    processData: false,
	    contentType: false
	}).fail(function( jqXHR, textStatus, errorThrown ) {
      console.log("setForo fail");
	  console.log(errorThrown);
  	}).done(function(){
  		console.log("setForo success");
  	})
}

function getForo(categoria){
	$.ajax({	
	    type: 'POST',
	    crossDomain: true,
	    url: 'api/getForo',
	    data: {'categoria':categoria},
	    cache: false,
	}).fail(function( jqXHR, textStatus, errorThrown ) {
      console.log("getForo fail");
	  console.log(errorThrown);
  	}).done(function(res){
  		console.log("getForo success");
  		console.log(res[0].titulo);
  		$('#FOR'+categoria+'Tab tbody tr td').eq(0).text(res[0].titulo);
  		$('#FOR'+categoria+'Tab tbody tr td').eq(1).text(res[0].contenido);
  		$('#FOR'+categoria+'Tab tbody tr td').eq(2).text(res[0].created_at);
  	})
}