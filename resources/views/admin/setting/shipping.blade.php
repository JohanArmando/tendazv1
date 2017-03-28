    @section('title')
    Envios y locales
    @stop
    @section('css')
    <style type="text/css">
        .tab1 {  border-radius: 20px 0 0 0 !important;  }
        .tab3 {  border-radius: 0 20px 0 0 !important;  }
        .nav-tabs.nav-justified {  background-color: transparent;  }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {background-color: #f26522; color: white}
        .nav-tabs > li > a, .nav-tabs > li > a:hover, .nav-tabs > li > a:focus {background-color: #9b9b9b; color: white}
        .nav-tabs.nav-justified > li > a {  border-bottom: 1px solid #f26522;  }
        .tab-content {border-radius: 0 0 20px 20px}
        /*.border-content {background-color: #3C3C3C; padding: 5px 5px 10px 5px;border-radius: 20px 20px 20px 20px}*/
    </style>
    <link rel="stylesheet" href="{{asset('administrator/css/categories.css')}}">
@stop
    @extends('layouts.administrator')
    @section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li class="active" style="color: orange;">Envios y locales</li>
                </ol>
            </div>
        </div>
    </div>
    <br>
    <div class="row" ng-app="appManual" ng-controller="shippingController">
        <div class="col-md-12">
            <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs  nav-justified" role="tablist">
                <li role="presentation" class="active">
                    <a href="#Servientrega" class="link_tab tab1"  aria-controls="Servientrega" role="tab" data-toggle="tab">Servientrega</a>
                </li>
                <li role="presentation">
                    <a href="#Envios-personalizados" class="link_tab tab3"  aria-controls="Envios-personalizados" role="tab" data-toggle="tab">Envios personalizados</a>
                </li>
            </ul>
        
            <!-- Tab panes -->
            <div class="tab-content panel">
                <div role="tabpanel" class="tab-pane active" id="Servientrega">
                    <div class="row">
                         <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Envios Servientrega</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="" method="POST" role="form">
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox" @if ($shop->servientrega)
                                                  checked="" 
                                              @endif> Activar servientrega
                                            </label>
                                        </div>
                                    </form>
                                </div>  
                            </div>
                        </div> 
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="Envios-personalizados">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @include('admin.partials.conf.send.shipping')
                        @include('admin.partials.conf.send.local')
                   </div>
                </div>

                </div>
            </div>
        </div>
        </div>
        


        <div class="page-end-space"></div>
    </div>
    @endsection

    @section('scripts')
        <script src="{{ asset('administrator/angular/angular.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/pagination.js') }}"></script>
        <script src="{{ asset('administrator/angular/moduloManual.js') }}"></script>
    @stop