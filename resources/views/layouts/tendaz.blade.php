<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tendaz.com | Tu tienda virtual</title>
         <link rel="icon" type="image/ico" href="{{ elixir('tendaz/img/icon.ico')}}" />

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tendaz | tu tienda virtual online">
        <meta name="author" content="Maxcorp Inc.">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('tendaz/css/tendaz.css')}}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/administrator/image/icons/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/administrator/image/icons/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/administrator/image/icons/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/administrator/image/icons/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/administrator/image/icons/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/administrator/image/icons/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/administrator/image/icons/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/administrator/image/icons/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/administrator/image/icons/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('/administrator/image/icons/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/administrator/image/icons/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/administrator/image/icons/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/administrator/image/icons/favicon/favicon-16x16.png')}}">
        @yield('css')
        <script>
            var BASEURL = "{{ url('/') }}";
        </script>
        </head>
        <body>
        @include('tendaz.partials.nav')
            @yield('content')
        @include('tendaz.partials.footer')
        <script type="text/javascript" src="{{elixir('tendaz/js/tendaz.js')}}"></script>

        @yield('script')
        @if(count($errors) >  0)
            $('div.with-errors').remove();
        @endif
    </body>
</html>