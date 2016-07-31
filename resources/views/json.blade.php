@extends('layouts.app')

@section('content')
        <!DOCTYPE html>
<html>
<head>
    <style>
        #map {
            width: 100%;
            height: 400px;
        }
    </style>
</head>
<body>
<h3>My Google Maps Demo</h3>
<div id="map"></div>
<script>
    function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUC_1XOD1QBCbfHOXoFTZSNEY4HiZch-Y
&callback=initMap">
</script>
</body>
</html>
@endsection
