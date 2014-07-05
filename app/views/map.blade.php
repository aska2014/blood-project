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
            zoom: 6,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(map_canvas, map_options);

        $.ajax('/web-services/bank/needed?key=IGJFDGXCV34', {
            success: function(response) {

                for (var i = response.length - 1; i >= 0; i--) {
                    addMarker(new google.maps.LatLng(response[i].gps_latitude, response[i].gps_longitude));
                };
            }
        });
    }

    function addMarker(latlng, title) {

        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: title
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div>
<h1 style="margin:0px auto; text-align: center; font-size:30px;">List of all blood banks</h1>
</div><BR/>

<div class="clear"></div>
<div id="map_canvas"></div>