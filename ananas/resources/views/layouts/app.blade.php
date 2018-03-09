<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>

    </head>
    <body>
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
    </body>
</html>
