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
        .material-switch > input[type="checkbox"] {
            display: none;   
        }

        .material-switch > label {
            cursor: pointer;
            height: 0px;
            position: relative; 
            width: 40px;  
        }

        .material-switch > label::before {
            background: rgb(0, 0, 0);
            box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            content: '';
            height: 16px;
            margin-top: -8px;
            position:absolute;
            opacity: 0.3;
            transition: all 0.4s ease-in-out;
            width: 40px;
        }
        .material-switch > label::after {
            background: rgb(255, 255, 255);
            border-radius: 16px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            content: '';
            height: 24px;
            left: -4px;
            margin-top: -8px;
            position: absolute;
            top: -4px;
            transition: all 0.3s ease-in-out;
            width: 24px;
        }
        .material-switch > input[type="checkbox"]:checked + label::before {
            background: inherit;
            opacity: 0.5;
        }
        .material-switch > input[type="checkbox"]:checked + label::after {
            background: inherit;
            left: 20px;
        }
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
                         <div class="col-md-4 col-md-offset-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Envios Servientrega</h3>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Servientrega activo
                                        <div class="material-switch pull-right">
                                            <input id="servientrega" name="someSwitchOption001" type="checkbox"
                                                @if ($shop->fresh()->servientrega == 1)
                                                    checked 
                                                @endif
                                            />
                                            <label for="servientrega" class="label-success"></label>
                                        </div>
                                    </li>
                                    
                                </ul>
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
        <script type="text/javascript">
            $('#servientrega').change(function(){
                if ($(this).is(":checked")){
                   console.log('prendido');
                   updateServientrega(1);
                }else{
                   console.log('apagado');
                   updateServientrega(0);

                }



            });
            function updateServientrega(set){
                $.ajax({
                    url: '{{ url('admin/setting/servientrega') }}?client_secret='+client_secret+'&client_id='+client_id,
                    data : {
                        set: set
                    },
                    type : 'GET',
                    dataType : 'json',
                    success : function(response) {
                        if(set){
                            toastr["success"]("Envios con servientrega ha sido activado");
                        }else
                        {
                             toastr["success"]("Envios con servientrega ha sido desactivado");

                        }
                    },
                    error : function(xhr, status) {
                        toastr["success"]("No se pudo cambiar la configuracion servientrega");
                       
                    },
                    complete : function(xhr, status) {
                    
                    }
                });
            }

        </script>
    @stop