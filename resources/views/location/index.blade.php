<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8' />
    <title>Add custom markers in Mapbox GL JS </title>
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
    </style>
</head>
<body>

<div id='map'></div>

<script>
const loc=JSON.parse('{!!$location!!}');
console.log(loc)

 

mapboxgl.accessToken = `{{ env('MAPBOX_ACCESS_TOKEN') }}`;

const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [loc.longitude,loc.latitude],

  zoom: 13
});

var marker = new mapboxgl.Marker({
            
            color: "royalblue"
        })
        marker.setLngLat({
                lng: loc.longitude,
                lat: 
                loc.latitude,
            })
            .addTo(map);

// code from the next step will go here!

</script>

</body>
</html>