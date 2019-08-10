var x = document.getElementById("demo");
        
function getLocation() {
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(updateLocation);
    } else { 
    x.innerHTML = "El navegador no soporta Geolocalizacion";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}

function updateLocation(position) {
    let posicion = {
        lat: position.coords.latitude,
        long: position.coords.longitude
    };
    axios.post('/api/map', posicion).then(response => {
        console.log(response);
    })
}