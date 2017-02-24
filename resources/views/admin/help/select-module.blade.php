@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" href="{{asset('administrator/css/statsAdvanced.css')}}">
@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title"><img src="{{asset('administrator/image/icons/icons-nav/computer.png')}}">&nbsp;Video Tutoriales</h4>
        </div>
        <div class="page-header-section">
            <!-- Toolbar -->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="#" style="color: darkgrey;">Dise&ntilde;o</a></li>
                    <li class="active" style="color: orange;">Video Tutoriales</li>
                </ol>
            </div>
            <!--/ Toolbar -->
        </div>
    </div>
    <div class="clearfix"></div>
    <div style="margin-top: 40px;"></div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" style="background-color: transparent;">
                        <li id="link_tab">
                            <a class="active" href="#tab" data-toggle="tab" aria-expanded="false">
                                <i class="fa fa-video-camera"> <span> Video Tutoriales</span></i>
                            </a>
                        </li>
                        <li class="triangle"></li>
                    </ul>
                    <div class="panel panel-default">
                        <div class="clearfix"></div>
                        <div style="margin-bottom: 20px;"></div>
                        <div class="panel-body">
                            <div class="panel-content">
                                <div class="panel-container">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <!-- INICIO -->
                                                <div class="module col-md-2 text-center">
                                                    <div class="moduleCircle">
                                                        <a data-toggle="modal" data-target="#myModal">
                                                            <img src="{{asset('administrator/image/support/dashboard.png')}}">
                                                        </a>
                                                    </div>
                                                    <p>INICIO</p>
                                                </div>
                                                <!-- ESTADISTICAS -->
                                                <div class="module col-md-2 text-center">
                                                    <div class="moduleCircle">
                                                        <a data-toggle="modal" data-target="#myModal">
                                                            <img src="{{asset('administrator/image/support/stats.png')}}">
                                                        </a>
                                                    </div>
                                                    <p>ESTADISTICAS</p>
                                                </div>
                                                <!-- PRODUCTOS -->
                                                <div class="module col-md-2 text-center">
                                                    <div class="moduleCircle">
                                                        <a data-toggle="modal" data-target="#myModal">
                                                            <img src="{{asset('administrator/image/support/products.png')}}">
                                                        </a>
                                                    </div>
                                                    <p>PRODUCTOS</p>
                                                </div>
                                                <!-- VENTAS -->
                                                <div class="module col-md-2 text-center">
                                                    <div class="moduleCircle">
                                                        <a data-toggle="modal" data-target="#myModal">
                                                            <img src="{{asset('administrator/image/support/orders.png')}}">
                                                        </a>
                                                    </div>
                                                    <p>VENTAS</p>
                                                </div>
                                                <!-- CLIENTE -->
                                                <div class="module col-md-2 text-center">
                                                    <div class="moduleCircle">
                                                        <a data-toggle="modal" data-target="#myModal">
                                                            <img src="{{asset('administrator/image/support/clients.png')}}">
                                                        </a>
                                                    </div>
                                                    <p>CLIENTE</p>
                                                </div>
                                            </div>
                                            <div class="item ">
                                                <!-- MARKETING -->
                                                <div class="module col-md-2 text-center">
                                                    <div class="moduleCircle">
                                                        <a data-toggle="modal" data-target="#myModal">
                                                            <img src="{{asset('administrator/image/support/marketing.png')}}">
                                                        </a>
                                                    </div>
                                                    <p>MARKETING</p>
                                                </div>
                                                <!-- DISE&Ntilde;O -->
                                                <div class="module col-md-2 text-center">
                                                    <div class="moduleCircle">
                                                        <a data-toggle="modal" data-target="#myModal">
                                                            <img src="{{asset('administrator/image/support/design.png')}}">
                                                        </a>
                                                    </div>
                                                    <p>DISE&Ntilde;O</p>
                                                </div>
                                                <!-- CONFIGURACION -->
                                                <div class="module col-md-2 text-center">
                                                    <div class="moduleCircle">
                                                        <a data-toggle="modal" data-target="#myModal">
                                                            <img src="{{asset('administrator/image/support/settings.png')}}">
                                                        </a>
                                                    </div>
                                                    <p>CONFIGURACION</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span style="color: black" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span style="color: black" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div style="margin-bottom: 30px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- MODALS ----------------------------------------------------------------------------------------------------------->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <ul class="nav nav-tabs" style="background-color: transparent;">
                <li id="link_tab">
                    <a class="active" href="#tab" data-toggle="tab" aria-expanded="false">
                        <i class="fa fa-home"> <span> Inicio</span></i>
                    </a>
                </li>
                <li class="triangle" style="height: 10%"></li>
            </ul>
            <div class="modal-content">

                <div class="modal-body" style="max-height: 400px; overflow-y: scroll">
                    <ul>
                        <li class="selectVideo">
                            <hr><a href="{{url('#')}}">
                                <p>
                                    <i class="fa fa-2x fa-video-camera"></i>
                                    <span class="selectSpan"> Estadisticas Avanzadas</span>
                                    <i class="fa fa-3x fa-play-circle-o"></i>
                                </p>
                            </a><hr>
                        </li>
                        <li class="selectVideo">
                            <hr><a href="{{url('#')}}">
                                <p>
                                    <i class="fa fa-2x fa-video-camera"></i>
                                    <span class="selectSpan"> Estadisticas Avanzadas</span>
                                    <i class="fa fa-2x fa-play-circle-o"></i>
                                </p>
                            </a><hr>
                        </li>
                        <li class="selectVideo">
                            <hr><a href="{{url('#')}}">
                                <p>
                                    <i class="fa fa-2x fa-video-camera"></i>
                                    <span class="selectSpan"> Estadisticas Avanzadas</span>
                                    <i class="fa fa-2x fa-play-circle-o"></i>
                                </p>
                            </a><hr>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@stop