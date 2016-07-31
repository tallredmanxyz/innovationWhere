<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Innovation Where?</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">




    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    @yield('head')

    <style>
        body {
            font-family: 'Lato';
        }
        #map {
            width: 100%;
            height: 400px;
        }
        .fa-btn {
            margin-right: 6px;
        }

        @yield('style')

    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Innovation Where?
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">

            </ul>
        </div>
    </div>
</nav>






    <script>
        function getData() {
//                alert('here');
$('#loader').show();
            var myAddress = '/formdata';
            var search_value = $('#searchForThis').val();
            //alert(CSRF_TOKEN);

            $.ajax({
                url: myAddress,
                type: 'post',
                contentType: 'application/json; charset=utf-8',
                data: JSON.stringify({"searchQuery":search_value}),
                dataType: 'json',
                success: function (data) {
                    //console.log(JSON.stringify(data));
       //             alert('here');
                    processData(data);
                },
                error: function (err) {
                    console.log(err);
$('#loader').hide();
                }
            });

        }
        function processData(data) {
      //      alert(' in pd here');
            var mapOptions = {
                center: new google.maps.LatLng(-23, 126),
                zoom: 4,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var mapDiv = document.getElementById('map_canvas');
            var map = new google.maps.Map(mapDiv, mapOptions);
  //         alert(JSON.stringify(data));
            //lon / lat / cleanname
                $.each(data, function(i, value) {
                   var myLatLng = new google.maps.LatLng(value.lon, value.lat);
            //       alert(myLatLng);
                    var marker = new google.maps.Marker({
                       position: myLatLng,
                        map: map,
                        title: value.cleanname
                    });
                });
$('#loader').hide();
        }
    </script>
<script>
    function initMap() {
        var mapDiv = document.getElementById('map_canvas');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: -23, lng: 126},
            zoom: 4
        });
    }
</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=ENTER_KEY_HERE=initMap">
</script>
<div class="row">
<div class="col-md-4">
    <form action="/search" method="get" id="formid">
        {{csrf_field()}}
	<div class="row">
        <div class="col-sm-8 col-sm-offset-4 text-center">

<p class="centered"><img src="img/innovation_where.png" style="width:150px;"></p>
            <input type="text" class="form-control" style="width:220px" placeholder="Enter Trademark Keywords..." name="searchQuery" id="searchForThis">
            <button  type="button" class="btn btn-dark btn-lg" onClick="getData()" >Submit</button>
		<img src="img/loading.svg" id="loader">
        </div>
	</div>
    </form>
    </p>
    <br>
</div>
<div class="col-md-8">
    <div id="map_canvas" style="width:100%; height: 500px">

    </div>
</div>
</div>
 <!--   <iframe id="map_canvas"
            width="100%"
            height="500"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCUC_1XOD1QBCbfHOXoFTZSNEY4HiZch-Y
    &q=Space+Needle,Seattle+WA" allowfullscreen>
    </iframe> -->

        <!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script type="text/javascript">
$("#formid").on('submit', function(e){e.preventDefault();getData();});
$(function(){$('#loader').hide()});
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>



