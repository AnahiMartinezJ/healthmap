var map;
var latitud;
var longitud;

$(document).ready(function() {
    localizame(); /*Cuando cargue la página, cargamos nuestra posición*/   
});

function localizame() {
    if (navigator.geolocation) { /* Si el navegador tiene geolocalizacion */
        navigator.geolocation.getCurrentPosition(coordenadas, errores);
    }else{
        alert('Tu navegador no soporta geolocalización. Utiliza Google Chrome o Firefox');
    }
}

function coordenadas(position) {
    latitud = position.coords.latitude; /*Guardamos nuestra latitud*/
    longitud = position.coords.longitude; /*Guardamos nuestra longitud*/
    init_map();
}

function errores(err) {
    /*Controlamos los posibles errores */
    if (err.code == 0) {
      alert("Oops! Algo ha salido mal");
    }
    if (err.code == 1) {
      alert("Oops! No has aceptado compartir tu posición");
    }
    if (err.code == 2) {
      alert("Oops! No se puede obtener la posición actual");
    }
    if (err.code == 3) {
      alert("Oops! Hemos superado el tiempo de espera");
    }
    latitud = 25.80;
    longitud = -80.30;
    mapNotUbic();
}


function init_map() {
		var var_location = new google.maps.LatLng(latitud,longitud);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Mi ubicación"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
function mapNotUbic() {
		var var_location = new google.maps.LatLng(latitud,longitud);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 4
        };
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
      }
      //google.maps.event.addDomListener(window, 'load', init_map);