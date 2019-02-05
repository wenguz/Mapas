<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
    <style type="text/css">
        #mymap {
            border:1px solid red;
            width: 800px;
            height: 500px;
        }
    </style>
</head>
<body>
<h1>Parqueos de La Paz gmaps.js</h1>
<div id="mymap"></div>
<script type="text/javascript">
    var locations = <?php print_r(json_encode($locations)) ?>;
    var mymap = new GMaps({
        el: '#mymap',
        lat: -16.5112520,
        lng: -68.12922518,
        zoom:6
    });
    $.each( locations, function( index, value ){
        mymap.addMarker({
            lat: value.lat,
            lng: value.lng,
            title: value.city,
            click: function(e) {
                alert('This is '+value.city+', gujarat from India.');
            }
        });
    });
</script>
</body>
</html>