<!DOCTYPE html>
<html>

<head>

    <title>Simple Map</title>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />

</head>

<body>
<div id='map' style='width: 400px; height: 300px;'></div>
    <script>
        // TO MAKE THE MAP APPEAR YOU MUST
        // ADD YOUR ACCESS TOKEN FROM
        // https://account.mapbox.com
        mapboxgl.accessToken = 'pk.eyJ1IjoiZnJpb3NsIiwiYSI6ImNraDZmZ3ZpcTBkNWEyem56a3prZTBhaHYifQ.IUjIA16brdxFQiqkGTIUaw';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
            center: [-74.5, 40], // starting position [lng, lat]
            zoom: 9 // starting zoom
        });
    </script>
</body>

</html>