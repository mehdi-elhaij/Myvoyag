<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Myvoyag</title>

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>
        @include('layouts.header')
        
        @yield('body')
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>