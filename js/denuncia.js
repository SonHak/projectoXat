$(function(){
	$('#DBotonNuevo').click(function(){
		$('#denunciaForm').delay(800).fadeIn(FadeOutTab('#myCarousel'));
	})
	
	$('#DBotonVolver').click(function(){
		$('#myCarousel').delay(800).fadeIn(FadeOutTab('#denunciaForm'));
	})
})





function FadeInTab(elemento){
	$(elemento).fadeIn(1000);
}

function FadeOutTab(elemento){
	$(elemento).fadeOut(1000);
}


function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(41.4, 2.1), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
