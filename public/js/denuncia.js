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
            });
            var infoWindow = new google.maps.InfoWindow({map: map});

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(posicionamiento,error);
            } else {
              // Browser doesn't support Geolocation
              handleLocationError(false, infoWindow, map.getCenter());
            }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?'Error: The Geolocation service failed.' : 'Error: Your browser doesn\'t support geolocation.');
}

function posicionamiento(position){
    var pos = {
      lat: position.coords.latitude,
      lng: position.coords.longitude
    };
    infoWindow.setPosition(pos);
    infoWindow.setContent('Location found.');
    //map.setCenter(pos);
    map.LatLng(pos);
    map.setZoom(10);

}

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
};
