$(function(){
	$('#FORopciones').click(function(){
		$('#FORopcionesTab').delay(800).fadeIn(FadeOutTab('.FORtable'));
	})
});

$(function(){
	$('#FORpreguntas').click(function(){
		$('#FORpreguntasTab').delay(800).fadeIn(FadeOutTab('.FORtable'));
	})
});

$(function(){
	$('#Formejoras').click(function(){
		$('#FORmejorasTab').delay(800).fadeIn(FadeOutTab('.FORtable'));
	})
});

$(function(){
	$('#FORgeneral').click(function(){
		$('#FORgeneralTab').delay(800).fadeIn(FadeOutTab('.FORtable'));
	})
});

function FadeInTab(elemento, tiempo){
	$(elemento).fadeIn(tiempo);
}

function FadeOutTab(elemento, tiempo){
	$(elemento).fadeOut(tiempo);
}

//fadeout mas tiempo fadein menos