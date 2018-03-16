
//Creador Moises Ortega
//Javascript para el apartado "FORO"

// Funciones generales de uso vario

/**
* @method FadeInFOR
* @param elemento {String} | tiempo {int}
*/
function FadeInFOR(elemento, tiempo){
	$(elemento).fadeIn(tiempo);
}

/**
* @method FadeInFOR
* @param elemento {String} | tiempo {int}
 */
function FadeOutFOR(elemento, tiempo){
	$(elemento).fadeOut(tiempo);
}

// Funciones JQuery

/** 
*@method function click '#FORpreguntas'
*/
$(function(){
	$('#FORopiniones').click(function(){
		$('#FORopinionesTab').delay(800).fadeIn(FadeOutFOR('.FORtable'));
	})
});

/**
*@method function click '#FORpreguntas'
 */
$(function(){
	$('#FORpreguntas').click(function(){
		$('#FORpreguntasTab').delay(800).fadeIn(FadeOutFOR('.FORtable'));
	})
});

/**
*@method function click '#Formejoras'
 */
$(function(){
	$('#Formejoras').click(function(){
		$('#FORmejorasTab').delay(800).fadeIn(FadeOutFOR('.FORtable'));
	})
});

/**
*@method function click '#crearForo'
 */
$(function(){
	$('#crearForo').click(function(){
		$('#formularioForo').delay(800).fadeIn(FadeOutFOR('.FORtable'));
	})
});

/**
* Buscador del Foro
*@method keyup
 */
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

/**
*@method formForo
*/
var formForo = $('<form>',{
    'method': 'POST',
    'name': 'formularioForo',
    'id': 'formularioForo',
    'class': 'FORtable collapse',
});

/**
*@method divRowForo
*/
var divRowForo = $('<div>', {
    'class': 'row',
});

/**
*@method divGeneralForo
*/
var divGeneralForo = $('<div>', {
    'class': 'col-md-12',
});

/**
*@method divTituloForo
*/
var divTituloForo = $('<div>', {
    'class': 'col-md-12',
}).append($('<input>',{
    'type': 'text',
    'name': 'tituloForo',
    'id': 'tituloForo',
    'placeholder': 'Titulo',
})); 

/**
*@method divContenidoForo
*/
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

/**
*@method inputEnvioForo
*/
var inputEnvioForo = $('<input>', {
    'type' : 'button',
    'class': 'btn btn-success col-md-2',
    'onclick': 'enviarForo()',
    'value': 'Enviar',
});

/**
*@method inputSelectForo
*/
var inputSelectForo = $('<select>', {
    'id':'categoriaForo',
    'name':'categoriaForo',
    'placeholder':'Categoria',
});

/**
*@method optionOpinionForo
*/
var optionOpinionForo = $('<option>',{
	'value':'opiniones'
}).text('Opinion');

/**
*@method optionPreguntasForo
*/
var optionPreguntasForo = $('<option>',{
	'value':'preguntas'
}).text('Preguntas');

/**
*method optionMejorasForo
*/
var optionMejorasForo = $('<option>',{
	'value':'mejoras'
}).text('Mejoras');

/**
*@method selectForo
*/
var selectForo =  inputSelectForo.append(optionOpinionForo).append(optionPreguntasForo).append(optionMejorasForo);

/**
*@method crearFormulario
*@param divGeneralForo
*/
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

/**
*@method enviarForo
*/
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
  		$('#tituloForo').val("");
  		$('#descForo').val("");
  		$('').delay(800).fadeIn(FadeOutFOR('.FORtable'));
  	})
}

/**
*@method getForo
*@param categoria {String}
*/
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
  		for (var k in res) {
  			var titulo = $("<td>").text(res[k].titulo);
  			var contenido = $("<td>").text(res[k].contenido);
  			var fecha = $("<td>").text(res[k].created_at);
  			var tr = $("<tr>").append(titulo);
  			var tr2 = tr.append(contenido);
  			var trFin = tr2.append(fecha);
  			$('#FOR'+categoria+'Tab tbody').append(trFin);
  		}
  	})
}