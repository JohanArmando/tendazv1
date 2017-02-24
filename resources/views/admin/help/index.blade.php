@section('title')
Herramientas y ayuda
@stop
@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" href="{{asset('administrator/css/help.css')}}">
@stop 
@section('content')
<div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/settings.png')}}">&nbsp;Herramientas y ayuda 
                </h4>
            </div>
            <div class="page-header-section">
                <!-- Toolbar -->
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                        <li class="active"><a href="#" style="color: #FEA500;">Herramientas y ayuda</a></li>
                    </ol>
                </div>
                <!--/ Toolbar -->
            </div>
        </div>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="clearfix"></div>
            <div style="margin-top: 11px !important;"></div>
            <!-- para col-md y col-lg -->
            <div class="col-md-6 col-md-offset-2 hidden-xs hidden-sm">
                <!-- ONE -->
                <div class="col-md-6 help one">
                    <div class="text-center">
                        <div class="circle">
                            <a href="#" data-toggle="modal" data-target="#modal_contactenos">
                                <img src="{{asset('administrator/image/icono_contactenos.png')}}" style="width: 64px; margin-top: 20px;">
                            </a>
                            <p style="margin-top: 20px">Contactanos</p>
                        </div>
                    </div>
                </div>
                <!-- TWO -->
                <div class="col-md-6 helpRight two">
                    <div class="text-center">
                        <div class="circle" style="margin-left: 40px">
                            <a href="{{--url('admin/help/video')--}}" data-toggle="modal" data-target="#myModal">
                            <img src="{{asset('administrator/image/icono_video_tutorial.png')}}" style="width: 64px; margin-top: 20px;">
                            </a>
                            <p style="margin-top: 20px">Video Tutoriales</p>
                        </div>
                    </div>
                </div>

                <!-- THREE -->
                <div class="col-md-6 help three">
                        <div class="text-center">
                        <div class="circle" style="margin-top: 70px !important;">
                            <a href="{{url('admin/help/tickets')}}">
                                <img src="{{asset('administrator/image/icono_ticket.png')}}" style="width: 64px; margin-top: 20px;">
                            </a>
                            <p style="margin-top: 20px">Tickets</p>
                        </div>
                    </div>
                </div>
                <!-- FOUR -->
                <div class="col-md-6 helpRight four">
                        <div class="text-center">
                            <div class="circle" style="margin-top: 70px !important; margin-left: 40px !important;">
                                <a href="{{--url('admin/help/chat')--}}" data-toggle="modal" data-target="#myModal">
                                    <img src="{{asset('administrator/image/chat-support.png')}}" style="width: 64px; margin-top: 20px;">
                                </a>
                                <p style="margin-top: 20px">Chat</p>
                            </div>
                        </div>
                </div>
            </div>
            <!-- para responsive -->
            <div class="col-md-12 col-md-offset-3 hidden-md hidden-lg">
                <!-- ONE -->
                <div class="col-md-12" style="margin-bottom:10px">
                    <div class="text-center" style="background-color: #f26522;padding: 10px">
                        <a href="#" data-toggle="modal" data-target="#modal_contactenos">
                            <img src="{{asset('administrator/image/icono_contactenos.png')}}">
                        </a>
                        <h3 style="margin-top: 20px;color: white">Contactanos</h3>
                    </div>
                </div>
                <!-- TWO -->
                <div class="col-md-12" style="margin-bottom:10px">
                        <div class="text-center" style="background-color: #f26522;padding: 10px">
                            <a href="{{--url('admin/help/video')--}}" data-toggle="modal" data-target="#myModal">
                                <img src="{{asset('administrator/image/icono_video_tutorial.png')}}">
                            </a>
                            <h3 style="margin-top: 20px;color: white">Video Tutoriales</h3>
                        </div>
                </div>

                <!-- THREE -->
                <div class="col-md-12" style="margin-bottom:10px">
                    <div class="text-center">
                        <div class="text-center" style="background-color: #f26522;padding: 10px">
                            <a href="{{url('admin/help/tickets')}}">
                                <img src="{{asset('administrator/image/icono_ticket.png')}}">
                            </a>
                            <h3 style="margin-top: 20px;color: white">Tickets</h3>
                        </div>
                    </div>
                </div>
                <!-- FOUR -->
                <div class="col-md-12" style="margin-bottom:10px">
                    <div class="text-center">
                        <div class="text-center" style="background-color: #f26522;padding: 10px">
                            <a href="{{--url('admin/help/chat')--}}" data-toggle="modal" data-target="#myModal">
                                <img src="{{asset('administrator/image/chat-support.png')}}">
                            </a>
                            <h3 style="margin-top: 20px;color: white">Chat</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="height: 30px"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_contactenos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Modal de contactenos-->
            <div class="modal-body"  style="background-color: white !important;">
                <div>
                        <i class="puul-right fa fa-times" data-dismiss="modal">
                        </i>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                        <div style="width: 559px !important;">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" style="background: transparent;">
                                <li class="nav-item" style="float: right !important;">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" style="background-color: #FF6800;color: white;">
                                        <img src="{{asset('administrator/image/icono_contactenos.png')}}" style="width: 20px;
                    height: 20px;"></a>
                                </li>
                                <li class="triangulo_izq"></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" style="border: 1px solid #dddddd; ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="clearfix"></div>
                                            <br>
                                            <div class="col-sm-3 col-sm-offset-1" style="/* color: red; */margin-left: 34px;width: 167px !important;">
                                                <p align="justify">
                                                    <i class="fa fa-check" style="color: #f26522;"></i> <strong class="marginLeft"><a href="mailto:info@tendaz.com">info@tendaz.com</a></strong>
                                                    <div style="margin-bottom: 20px;"></div>
                                                    <i class="fa fa-check" style="color: #f26522;"></i> <strong class="marginLeft">8555858585</strong>
                                                    <div style="margin-bottom: 20px;"></div>
                                                    <i class="fa fa-check" style="color: #f26522;"></i> <strong class="marginLeft">Calle # 58 138-47</strong>
                                                </p>

                                            </div>
                                            <div class="col-sm-2" style="/* color: red; *//* margin: auto; */margin-left: 15px;height: 88px;width: 315px;">
                                                <div style="margin-top: 30px;"></div>
                                                <div class="col-sm-12 col-sm-offset-6">
                                                    <img class="marginLeft" src="{{asset('administrator/image/blogger.png')}}" style="width: 40px; margin-left: -15px;">
                                                    <a href="https://www.facebook.com/Tendaz-1007603429285331/?fref=ts" target="_blank"><img class="marginLeft" src="{{asset('administrator/image/facebook.png')}}" style="width: 40px;"></a>
                                                    <a href="https://twitter.com" target="_blank">
                                                        <img class="marginLeft" src="{{asset('administrator/image/twitter.png')}}" style="width: 40px;">
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div style="margin-bottom: 20px;"></div>
                        <div style=" width: 48%;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14873.659292265744!2d-74.05644496542392!3d4.732599067632901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8519cdb74d95%3A0x1e93f927808e0567!2sDroguer%C3%ADa+COLINA+CAMPESTRE+-+Calle+138%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1479571843057" width="557" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <!--END-->
        </div>
    </div>
</div>
<!-- Modal PROXIMAMENTE-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Anuncio</h4>
            </div>
            <div class="modal-body">
                Esta opcion estara habilitada proximamente!.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal END PROXIMAMENTE-->
@endsection 
@section('scripts')
@stop