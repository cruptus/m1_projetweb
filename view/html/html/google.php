<div id="map" style="margin-top: 30px; width: 100%; height: 400px; border: 1px solid black;"></div>
<script type="text/javascript">

    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 42.2991991, lng: 9.1532461},
            zoom: 15
        });
    }

</script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVlx4mgku55gecwFCQFIZ6dlFItVKgqeA&callback=initMap">
</script>