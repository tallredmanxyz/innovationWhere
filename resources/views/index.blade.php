<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wax River</title>

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

            .fa-btn {
                margin-right: 6px;
            }

            @yield('style')

        </style>
    </head>
    <body>


        <div class="col-md-4">
            <table class="table">
                <thead>
                <tr>
                    <th>Aus App Number</th>
                    <th>Status</th>
                    <th>Application Year</th>
                    <th>Country</th>
                    <th>Patent Type</th>


                </tr>
                </thead>
                <tbody>
                @foreach($records as $record)

                    <tr >
                        <td>{{$record->AUSTRALIAN_APPL_NO}}</td>
                        <td>{{$record->STATUS}}</td>
                        <td>{{$record->APPLICATION_YEAR}}</td>
                        <td>{{$record->COUNTRY}}</td>
                        <td>{{$record->PATENT_TYPE}}</td>
                    </tr>
                @endforeach
                <tbody>
            </table>
            {{$records->links()}}
        </div>
        <div class="col-md-8">
            <iframe
                    width="100%"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCUC_1XOD1QBCbfHOXoFTZSNEY4HiZch-Y
    &q=Space+Needle,Seattle+WA" allowfullscreen>
            </iframe>
        </div>
    </body>
</html>