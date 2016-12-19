<!doctype html>
<html lang="en" ng-app="tendaz" >
<head>
    <meta charset="UTF-8">
    <title>Tendaz</title>
    <script>
        var theme = "{{ Theme::get() }}";
        var baseUrl = "{{ url('/') }}";
    </script>
    <link rel="stylesheet" href="{{ asset("templates/".Theme::get()."/assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("templates/".Theme::get()."/assets/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("templates/".Theme::get()."/assets/css/style.css") }}">
</head>
<body>
    
    <div ui-view="header" data-spy="affix" data-offset-top="60" data-offset-bottom="200"></div>
    
    <div ui-view="content" class="ui-view-container container-fluid"></div>
    <script src="{{ asset("templates/".Theme::get()."/assets/lib/angular/angular.js") }}"></script>
    <script src="{{ asset("templates/".Theme::get()."/assets/js/jquery.js") }}"></script>
    <script src="{{ asset("templates/".Theme::get()."/assets/js/bootstrap.js") }}"></script>
    <script src="{{ asset("templates/".Theme::get()."/assets/lib/angular-ui-router/release/angular-ui-router.js") }}"></script>
    <script src="{{ asset("templates/".Theme::get()."/assets/js/main.js") }}"></script>
    <!-- GET THE MODULES -->
    <script src="{{ asset("templates/".Theme::get()."/app/engine/app-module.js") }}"></script>
    <!-- GET THe ROUTES -->
    <script src="{{ asset("templates/".Theme::get()."/app/engine/app-routes.js") }}"></script>
</body>
</html>