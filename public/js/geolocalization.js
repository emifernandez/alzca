var x = document.getElementById("demo");

// function getLocation() {
//     if (navigator.geolocation) {
//     navigator.geolocation.getCurrentPosition(updateLocation);
//     } else {
//     x.innerHTML = "El navegador no soporta Geolocalizacion";
//     }
// }

// function showPosition(position) {
//     x.innerHTML = "Latitude: " + position.coords.latitude +
//     "<br>Longitude: " + position.coords.longitude;
// }

function updateLocation(position) {
    let posicion = {
        lat: position.coords.latitude,
        long: position.coords.longitude
    };
    axios.post('/api/map', posicion).then(response => {
        console.log(response);
    })
}

var apiGeolocationSuccess = function(position) {
    //alert("API geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);
    updateLocation(position);
};

var tryAPIGeolocation = function() {
	jQuery.post( "https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyDCa1LUe1vOczX1hO_iGYgyo8p_jYuGOPU", function(success) {
		apiGeolocationSuccess({coords: {latitude: success.location.lat, longitude: success.location.lng}});
  })
  .fail(function(err) {
    alert("API Geolocation error! \n\n"+err.toSource());
  });
};

var browserGeolocationSuccess = function(position) {
   // alert("Browser geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);
    updateLocation(position);
};

var browserGeolocationFail = function(error) {
  switch (error.code) {
    case error.TIMEOUT:
      alert("Browser geolocation error !\n\nTimeout.");
      break;
    case error.PERMISSION_DENIED:
      if(error.message.indexOf("Only secure origins are allowed") == 0) {
        tryAPIGeolocation();
      }
      break;
    case error.POSITION_UNAVAILABLE:
      alert("Browser geolocation error !\n\nPosition unavailable.");
      break;
  }
};

var tryGeolocation = function() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
    	browserGeolocationSuccess,
      browserGeolocationFail,
      {maximumAge: 50000, timeout: 20000, enableHighAccuracy: true});
  }
};

// tryGeolocation();
