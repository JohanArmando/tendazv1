<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('administrator/css/bootsIframe.css') }}">
    <style type="text/css">
        * { margin:0; padding:0;}
        img { border:0;}
        body {
            color:white; font-family:"Lucida Grande", "arial", "sans-serif";
            font-size:11px;
            overflow:hidden;
            background-color: transparent;
        }
        html {
            background:#333;
        }
        .btn .info{
            background-color: orange !important;

        }
        a {
            color: #fff; text-decoration: none; text-shadow: 0px 1px 0.5px black; margin-right:10px;
        }
        a:hover {
            color:#eee;cursor:pointer;
        }
        ul { float:left;}
        ul li { float:left;}
        ul, ol {margin: 0;}

        #store-bar {
            border-bottom:1px solid rgba(0,0,0,0.9);
            padding:5px 0;
            min-width:1000px;
            position: relative;
            background:#333;
            height: 22px;
        }

        #store-bar-actions {
            position:absolute;
            right:10px;
            top:5px;
            list-style:none;
            margin:0;
            padding:0;
            z-index:1500;
        }
        #store-bar-actions li {
            float:left;
            margin-left:1px;
        }

        #close-store-bar {
                background: url("https://d26lpennugtm8s.cloudfront.net/assets/common/img/icons/store-bar-actions.png") no-repeat 6px 5px;                  height:15px;
                width:15px;
                margin-right:0px;
                display:block;
                text-indent:-99999px;
                top:6px;
            padding:4px;
        }
        #close-store-bar:hover {
            background-position: -19px 5px;
            cursor:pointer;
        }

        #store-bar-minimized  {
            position:absolute;
            right:0;
            top:0;
        }
        #store-bar-minimized a {
                background: url("https://d26lpennugtm8s.cloudfront.net/assets/common/img/icons/store-bar-toggle.png") no-repeat left -53px;                height:32px;
                width:32px;
                margin-right:0px;
                display:block;
                text-indent:-99999px;
        }
        #store-bar-minimized a:hover {
            cursor:pointer;
            background: url("https://d26lpennugtm8s.cloudfront.net/assets/common/img/icons/store-bar-toggle.png") no-repeat left top;
        }

        #our-logo {
            float:left;
        }
        #our-logo {
            position: relative;
            margin-right: 15px;
            z-index: 30;
            height: 27px;
            width: 100px;
        }
        #our-logo img{
            max-width: 100%;
        }
        #visit_your_store {height: 10px; line-height: 10px;}
        #pay_your_store {margin-left: 10px; height: 10px; line-height: 10px;}
        #admin-bar a.btn { padding-left: 4px; padding-right: 4px; }

        #store-bar-wrapper { width:960px; margin:0 auto; }
        .store-bar-right-side  { float:right;}
        .store-bar-right-side li { float:left; list-style-type:none; margin-right:20px;}
        .store-bar-right-side li:last-child { margin-right:0;}
        a.link-theme { text-decoration: none; font-size: 13px;padding-top: 14px;margin-right: 15px; color: #eee}
        a:hover.link-theme { text-decoration: none; color: orange;}
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
<div id="store-bar" >
    <div id="store-bar-wrapper">
        <div id="admin-bar" >
            <a id="our-logo" href="{{ url('admin') }}">
                <img  src="{{ asset('components/logo_tienda.png') }}" alt="Tendaz" title = "Tendaz" class="img-responsive" />
            </a>
            <a id="visit_your_store" href="{{ url('admin') }}" class="btn info disabled">Ir al administrador de mi tienda</a>

        </div>
    </div>
    <ul id="store-bar-actions">
        <li><a id="close-store-bar" href="#" class="no-bar-redirect" title="Esconder">Esconder</a></li>
    </ul>
</div>

<div id="store-bar-minimized" class="hidden">
    <a id="show-store-bar" href="#" class="no-bar-redirect" title="Mostrar">Mostrar</a>
</div><!-- #store-bar-minimized -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js" ></script>

<script type="text/javascript">
    <!--
    $(document).ready(function(){
        //esta funcion pone el taro cuando apse encima del boton
        $("#visit_your_store, #pay_your_store").on('mouseenter mouseleave', function () {
            $(this).toggleClass('disabled');
        });
        //esta funcion redirige la pagiana y no el iframe
        $('a:not(.no-bar-redirect)').click(function(e) {
            e.preventDefault();
            window.top.location = $(this).attr('href');
        });
        function setCookie(c_name, value, exdays) {
            var exdate=new Date();
            exdate.setDate(exdate.getDate() + exdays);
            var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString()+";path=/admin");
            document.cookie=c_name + "=" + c_value;
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length,c.length);
                }
            }
            return "";
        }
        $("#show-store-bar").click(function(e){
            e.preventDefault();
            $('#admin-bar').show();
            $("#store-bar").fadeIn("fast");
            $("#store-bar-minimized").fadeOut("fast");
            window.setTimeout(function() {
                window.top.postMessage("1", "{{ url('/') }}"); }, 0);
                setCookie("_bar", "1", 730);
        });
        if(getCookie('_bar') == '0'){
            $("#store-bar").hide();
            $("#store-bar-minimized").fadeIn("fast");
            $("html").css("background","transparent");
        }
        if(getCookie('_bar') == '1'){
            $('#admin-bar').show();
            $("#store-bar").fadeIn("fast");
            $("#store-bar-minimized").fadeOut("fast");
        }
        $("#close-store-bar").click(function(e){
            e.preventDefault();
            $("#store-bar").hide();
            $("#store-bar-minimized").fadeIn("fast");
            $("html").css("background","transparent");
            window.setTimeout(function() { window.top.postMessage("0", "{{ url('/') }}"); }, 0);
            setCookie("_bar", "0", 730);
        });
    });
    //-->
</script>
</body>
</html>