    @section('title')
    Envios y locales
    @stop
    @section('css')
    <style type="text/css">

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
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            <div class="row" ng-app="appManual" ng-controller="shippingController">
        <div class="col-md-12">
            <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified " role="tablist">
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
                                        <div class="row">
                                          <div class="col-md-4">
                                            <img src="{{ url('servientrega/image/logo.png') }}" class="img-responsive " style="margin-top: 28px;">
                                          </div>
                                          <div class="col-md-8">
                                              <h4><strong>Servientrega</strong></h4>
                                              <p>Activando servientrega generara una guia automatica con la que enviara el producto de manera facil</p>
                                              <div>
                                                      <strong>Servientrega activo</strong>
                                                      <div class="material-switch pull-right">
                                                          <input id="servientrega" name="someSwitchOption001" type="checkbox"
                                                              @if ($shop->fresh()->servientrega == 1)
                                                                  checked 
                                                              @endif
                                                          />
                                                          <label for="servientrega" class="label-success"></label>
                                                      </div>
                                              </div>
                                          </div>
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
        </div>
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