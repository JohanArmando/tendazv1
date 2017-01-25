<!DOCTYPE html>
<html class="backend csstransforms3d">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-param" content="csrf_token" />
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>
        @yield('title') | Administrador
    </title>
    <meta name="author" content="Maxcorp .Inc">
    <meta name="description" content="dministrador General de las tiendas en Tendaz">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://use.fontawesome.com/fa4440098a.js"></script>

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
    
    <link rel="manifest" href="/manifest.json">
    

    <!--Inicio de los Estilos-->
    <link rel="stylesheet" href="{{ asset('administrator/plugins/summernote/css/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('components/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('components/css/toastr.min.css') }}">


    <!--Estilos Opcionales-->
    <link rel="stylesheet" href="{{asset('administrator/plugins/selectize/css/selectize.css')}}">
    
    <!-- fin de los estilos opcionales-->

    <!--Estilo importantes del Dash-->
    <link rel="stylesheet" href="{{asset('administrator/css/bootstrap.css')}}" media="screen"  charset="utf-8">
    <link rel="stylesheet" href="{{asset('administrator/css/layout.css')}}" media="screen"     charset="utf-8">
    <link rel="stylesheet" href="{{asset('administrator/css/uielement.css')}}" media="screen"  charset="utf-8">
    <!--Fin-->
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/select2/css/select2.css')}}">
    <!--Normalize-->
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/normalize.css')}}">
    <!--fin-->

    <!--Tema del dashboard-->
    <link rel="stylesheet" href="{{asset('administrator/css/themes/theme.css')}}" media="screen" charset="utf-8">
    <!--Fin-->
    <!--Fin de los Estilos-->

    <!--Unico javascript en la cabecera-->
    <!-- <script type="text/javascript" src="{{asset('administrator/plugins/modernizr/js/modernizr.js')}}"></script> -->
    <!--Fin-->

    <!--Estilo del editor inline-->
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/editable-inline.css')}}">
    <!--Fin-->

    <!--x-editable inline-->
<!--     <link rel="stylesheet" href="{{asset('administrator/plugins/xeditable/css/xeditable.css')}}">
    <link rel="stylesheet" href="{{asset('administrator/plugins/xeditable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css')}}"> -->
    <!--Fin-->

    <link rel="stylesheet" href="{{ asset('administrator/angular/css/angular-ui-tree.min.css') }}">
    <link href="{{ asset('administrator/css/dropify.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/colorpicker/css/bootstrap-colorpicker.css')}}">

    <!--Mi css para fixed-->
    <link rel="stylesheet" href="{{asset('administrator/css/fixed-sidebar.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('administrator/css/xeditable.min.css')}}"> -->
    <!--Fin-->
    @if(View::hasSection('css'))
        @yield('css')
    @endif
    <script>
        var client_secret = "{{ $shop->uuid }}";
        var client_id      = "{{ $shop->id }}";
    </script>
    <style>
        .p-fixed.bottom {
            bottom: 0;
            top: auto;
            z-index: 999;
        }
        .fixed-panel {
            max-height: 57px;
            width: 100%;
            background: #3c3c3c !important;
            opacity: 0.8;
            filter: alpha(opacity=80); /* For IE8 and earlier */
        }
        .p-fixed {
            position: fixed;
        }
        .footer {
            position: relative;
            z-index: 10;
            font-size: 12pt;
            clear: left;
            background: #333;
            padding: 20px 0;
        }
        .affix {
            position: fixed;
        }
        .small{
            margin-left: -30%;
            margin-top: -0.5%;
        }
        .small > a{
            color: #F26522;
            font-weight: bold;
            margin-left: 0.5%;
        }
        .small > a:hover{
            color: #FFFFFF;
            text-decoration: underline;
        }
    </style>

</head>
<body>
@include('admin.partials.menu')
<div class="clearfix"></div>
@include('admin.partials.menu-izquierda')
<section id="main" role="main">
    <section id="main" role="main">
        <!--NO TOCAR -->
        <div class="container-fluid">

            @yield('content')
        </div>
        <!--NO TOCAR-->
    </section>
</section>

<script>
    var apiUrl = "{{ App::environment('local') ? 'http://'.env('APP_API_URL').env('APP_API_PORT') : 'https://'.env('APP_API_URL').env('APP_API_PORT') }}";
    var BASEURL = "{{ url('/') }}";
    var store = "{{ auth('admins')->user()->shop->id }}";
    var STRIPE_PUBLIC_KEY = "{{ env('STRIPE_PUBLIC_KEY' , 'sk_live_G1Y1j4Vx7M8HgMu4ozdBNyer') }}";
</script>
<!--Script del Template-->
<script type="text/javascript" src="{{asset('components/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('components/js/validator/validator.js')}}"></script>
<script type="text/javascript" src="{{asset('components/js/validator/validator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/js/vendor.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/js/core.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/js/backend/app.js')}}"></script>
<script type="text/javascript" src="{{asset('/components/js/dropzone.js')}}"></script>
<script type="text/javascript" src="{{asset('components/js/toastr.min.js') }}"></script>
<script type="text/javascript" src="{{asset('components/js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{asset('administrator/js/dropify.min.js') }}"></script>
<script type="text/javascript" src="{{asset('administrator/js/pace.min.js') }}"></script>
<script type="text/javascript" src="{{asset('administrator/plugins/colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('administrator/js/backend/forms/validation.js') }}"></script>
<script type="text/javascript" src="{{ asset('administrator/js/formatDate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('administrator/js/jquery-validate.min.js') }}"></script>
<script type="text/javascript"  src="{{ asset('administrator/js/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('administrator/js/moment-lang.js') }}"></script>


<script type="text/javascript" src="{{asset('administrator/plugins/pickerfont/js/jquery.fontselect.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/plugins/jquery-cookies/jquery.cookie.js')}}"></script>
@yield('scripts')
<!-- <script type="text/javascript" src="{{asset('administrator/js/xeditable.min.js')}}"></script> -->
<script>

function check_nav(){
    var esediv  =   $('.navbar-brand').width();
    $.removeCookie('NavSize', { path: '/' });
    if (esediv >    100) {
        document.getElementById("LittleLogo").style.visibility = "visible";
        $.cookie('NavSize', 'Mini', { expires: 7, path: '/' });
    }   else {
        document.getElementById("LittleLogo").style.visibility = "hidden";
        $.cookie('NavSize', 'Wide', { expires: 7, path: '/' });
    }
}

$(document).on('ready', function () {
    $.removeCookie('NavSize', { path: '/admin/customers' });
    var cookie_nav  =   $.cookie('NavSize');
    if (cookie_nav=='Mini') {
        $('.sidebar-minimize').trigger( "click" );
    }
    
});
</script>
<script type="text/javascript">
    $('.dropify').dropify();
</script>
<!--<script type="text/javascript">
    new Card({
        form: document.querySelector('form'),
        container: '.card-wrapper'
    });
</script>-->

<script type="text/javascript">
    $(document).on('ready', function () {
        var btn = $('#close-alert');
        btn.on('click' , function () {
            $('.fixed-panel').hide("slow" , function(){

            });
        });
    });
</script>
<!--testingd-->
<!--<script type="text/javascript">
    $('#selectize-tagging').selectize({
        delimiter: ',',
        persist: false,
        create: function (input){
            return {
                value: input,
                text: input
            };
        }
    });
</script>-->

<!--<script>
    $(function() {
        $('#cpicker-esquema').colorpicker();
    });
</script>
<script type="text/javascript">
    $(function (){
        $('#cpicker-boton').colorpicker();
    });
</script>

<script type="text/javascript">
    $(function (){
        $('#cpicker-font').colorpicker();
    });
</script>-->

@include('admin.partials.message')
<style>.totop {  background-color: #F26522 !important;  }
</style>
<a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn"
   data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
</body>
</html>