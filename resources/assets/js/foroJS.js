/*
* Creador Moises Ortega
*Javascript para el apartado "FORO"
*/

/********* Funciones generales de uso vario **********/
function FadeInFOR(elemento, tiempo){
	$(elemento).fadeIn(tiempo);
}

function FadeOutFOR(elemento, tiempo){
	$(elemento).fadeOut(tiempo);
}

/********* Funciones JQuery **********/
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
	$('#FORgeneral').click(function(){
		$('#FORgeneralTab').delay(800).fadeIn(FadeOutFOR('.FORtable'));
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