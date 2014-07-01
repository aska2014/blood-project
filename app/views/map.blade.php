@include('template')
<style>
    #map_canvas {
        width: 1000px;
        height: 800px;
        margin:0px auto;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    var map;
    function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
            center: new google.maps.LatLng(31.2592424,32.2963274),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(map_canvas, map_options);

        addMarker(new google.maps.LatLng(31.2592424,32.2963274));
        addMarker(new google.maps.LatLng(31.265057, 32.279204));
    }

    function addMarker(latlng) {

        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div>
<h1 style="margin:0px auto; text-align: center; font-size:30px;">List of all blood banks</h1>
</div><BR/>

<div class="clear"></div>
<div id="map_canvas"></div>