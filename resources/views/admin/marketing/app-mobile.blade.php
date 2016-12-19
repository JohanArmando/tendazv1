@section('title') 
    Tu app mobil 
@stop 
@extends('layouts.administrator') 
    @section('css')
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/app-mobile-font.css')}}"> 
    @stop 

@section('content')
<div class="page-header page-header-block">
    <div class="page-header-section">
        <h4 class="title"><img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/app.png')}}">&nbsp; App Mobile 	</h4>
    </div>
    <div class="page-header-section">
        <!-- Toolbar -->
        <div class="toolbar">
            <ol class="breadcrumb breadcrumb-transparent nm">
                <li><a href="#" style="color: darkgrey;">Marketing</a></li>
                <li class="active" style="color: orange;">App Mobile</li>
            </ol>
        </div>
        <!--/ Toolbar -->
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="content">
        <div class="row" style="margin-top: 30px !important;margin-bottom: 70px !important;">
            <div class="col-md-8 col-md-offset-2" style="background: white;">
                <div class="col-md-4" style="margin-left: 94px; margin-top: 20px;">
                    <div class="text-center">
                        <img class="img-responsive" src="{{asset('administrator/image/phone.png')}}">
                    </div>
                    <div style="margin-bottom: 20px;"></div>
                </div>
                <div class="col-md-4" style="margin-left: 30px; height: 280px; margin-top: 125px;  width: 300px; border-right: 3px solid #FF4E00;">
                    <p align="center">
                        DESCARGA <strong>TU TIENDA</strong>
                    </p>
                    <div class="text-center">
                        <a href="{{url('admin/marketing/config-app')}}" class="btn btn-default" style="border-radius: 0px !important; background: #FF4E00; color: white; width: 56%; font-size: 17px !important;">AHORA</a>
                    </div>
                    <div class="clearfix"></div>
                    <div style="margin-bottom: 20px;"></div>
                    <p align="justify" class="text-muted" style="font-size: 15px; margin-right: 18px !important;">
                        Disfruta del APP de Tendaz.com te facilitaremos tu comodidad Disfruta del APP de Tendaz.com. Disfruta del APP de Tendaz.com te facilitaremos tu comodidad Disfruta del APP de Tendaz.com. Disfruta del APP de Tendaz.com te facilitaremos tu comodidad Disfruta del APP de Tendaz.com.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection 
    @section('scripts') 
        @stop