<html>
    <head>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="{{ asset('public/js/materialize.min.js') }}"></script>

        <link href="{{ asset('public/css/materialize.min.css') }}" rel="stylesheet">
        
        <title>Prueba</title>
    </head>
    <body>
       

    <div class="container">

             
            @yield('content')

            
        </div>
    </body>
</html>