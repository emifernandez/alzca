<template>
    <div class="container">
        <!-- <div class="row justify-content-center"> -->
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Ubicación en tiempo real</h4>
                    </div>
                    <div class="card-body" style="height: 100%">
                        <div id="map" style="heigth: 100%; width: 100%">
                        </div>
                    </div>
                </div>
        <!-- </div> -->
    </div>
</template>
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 500px;
        width: 600px;
      }
</style>
<script>
    export default {
        data() {
            return {
                map: null,
                marker: null,
                center: {lat: -34.397, lng: 150.644},
                data: null,
                lineCoordinates: []
            }
        },
        methods: {
            mapInit() {
                this.map = new google.maps.Map(document.getElementById('map'), {
                    center: this.center,
                    zoom: 15
                });

                this.marker = new google.maps.Marker({
                    map: this.map,
                    position: this.center,
                    animation: 'bounce' 
                });
            },
            updateMap() {
                let newPosition = {lat: this.data.lat , lng: this.data.long};
                this.map.setCenter(newPosition);
                this.marker.setPosition(newPosition);

                this.lineCoordinates.push(new google.maps.LatLng(newPosition.lat, newPosition.lng));

                var lineCoordinatesPath = new google.maps.Polyline({
                    path: this.lineCoordinates,
                    geodesic: true,
                    map: this.map,
                    strokeColor: '#FF0000',
                    strokeOpacity: 1.0,
                    strokeWeight: 2

                });
            }
        },
        mounted() {
            console.log('Component mounted.');
            this.mapInit();
        },
        created() {
            Echo.channel('location')
                .listen('SendLocation', (e) => {
                    this.data = e.location;
                    this.updateMap();
                    console.log(e);
                })
        }
    }
</script>
