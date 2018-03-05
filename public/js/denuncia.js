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
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 41.357394, lng:2.070522},
    zoom: 8
  });
  map.addListener('click', function(e) {
    placeMarkerAndPanTo(e.latLng, map);
  });
}

function placeMarkerAndPanTo(latLng, map) {
  $('.gmnoprint').remove();
  var marker = new google.maps.Marker({
    position: latLng,
    map: map
  });
  map.panTo(latLng);
}

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
};
