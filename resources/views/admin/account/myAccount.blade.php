@extends('layouts.administrator') @section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('components/admin/css/trumbowyg.min.css')}}"> @stop @section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class="ico-user"></i>&nbsp; Mi Cuenta</h4>
        </div>
        <div class="page-header-section">
            <!--Toolbar-->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin/home')}}" style="color: grey;">Inicio</a></li>
                    <li class="active"><a href="#" style="color: orange;">Mi cuenta</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div style="margin-bottom: 20px;"></div>
    @include('admin.partials.message')
    <div class="row">
        <div class="col-md-1 col-md-offset-2"></div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h5><i class="fa fa-gears"></i>&nbsp; Mi cuenta</h5>
                    </div>
                </div>
                <div class="panel-body">
                    {!! Form::model($store,['url' => url("admin/account/preferences/$store->id") , 'method'=> 'put']) !!}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="control-label">Telefono</label>
                                {!! Form::select('phone_type',['mobile' => 'Celular', 'home' => 'Casa', 'work' => 'Trabajo', 'fax' => 'Fax'],$shop->phone_type,['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-1">
                                <label class="control-label">Pais</label>
                                {{--
                                <input type="text" style="min-width: 40px !important;" class="form-control" @if($country[ 'country']=='CO' ) value="57" @endif @if($country[ 'country']=='PE' ) value="51" @endif @if($country[ 'country']=='ES' ) value="34" @endif @if(empty($country[ 'country'])) value="{{ Auth('admins')->user()->shop->phone_country }}" @endif name="phone_country" /> --}}
                            </div>

                            <div class="col-sm-2">
                                <label class="control-label">COD</label>
                                <input class="form-control" value="{{$store->code_country}}" type="text" name="code_country" />
                            </div>

                            <div class="col-sm-5">
                                <label class="control-label">Telefono</label>
                                {!! Form::text('number_phone',$shop->phone_nummber,['class' => 'form-control', 'placeholder' => 'Telefono ', 'data-mask' => '999-999-9999']) !!}
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="" class="control-label">Nombre de tu tienda</label>
                                {!! Form::text('name',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-12control-label">Descripcion de tu negocio</label>
                                {!! Form::textarea('message',null,['id' => 'editor', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                            <span class="checkbox custom-checkbox custom-checkbox-inverse">
                             @if($shop->use == 1)
                                    <input type="checkbox" name="use" id="use"  checked>
                                @else
                                    <input type="checkbox" name="use" id="use" >
                                @endif
                                <label for="use">&nbsp;&nbsp;<strong>Usar el nombre y la descripsion del negocio para el SEO de su tienda.</strong></label>
                            </span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="control-label">¿Por que decisdiste probar Tendaz ?</label>
                                {!! Form::select('why', [ '' => 'Elige una opcion...', 'curioso' => 'Por curioso. Estoy viendo y probnado como es el servicio', 'comenzando' => 'Estoy comenzando un negocio nuevo y quiero vender online', 'tengoUnNegocio' => 'Tengo un negocio fucionando y quiero empezar a vender online' , 'vendoOnline' => 'Ya vendo de manera onlien en otra tienda y quiero cambiar', 'probarTendaz' => 'Ya tengo un e-comerce propio y quiero probrar Tendaz' ] ,$shop->why, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="control-label">¿Cual es el actividad comercial de tu negocio ?</label>
                                {!! Form::select('which', [ "" => 'Elige una opcion...', "indumentaria" => "Indumentaria", "accesorios" => "Accesorios de indumentaria", "salud" => "Salud y Belleza", "casa" => "Casa y jardin", "regalos" => "Regalos", "comidas" => "Comida y Bebida", "electronica" => "Electronia/IT/Computacion", "antiguedades" => "Antiguedades", "arte" => "Arte", "automoviles" => "Automoviles", "construccion" => "Construccion/Industria", "deportes" => "Deportes/Recreacion", "digital" => "Digital/Bienes digitales", "educacion" =>"Educaion", "insumo" => "Insumo de oficinas", "joyas" => "Joyas/Relojes", "juguetes" => "Juguetes/Jugos/Hobbies", "libros" => "Libros/Revistas", "mascotas" =>"Mascotas", "musica" => "Musica/Peliculas", "servicios" => "Servicios", "viajes" => "Vieajes", "eroticas" => "Eroticas", "libreria" => "Libreria/Grafica", "equipamiento" => "Equipamiento/Maquinaria", "otros" => "Otros" ] ,$shop->which, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="control-label">Cuentanos sobre tu empresa</label>
                                {!! Form::select('say', [ "" => "Eligen una opcion...", "no-principal" =>"Es un emprendimiento, pero no es mi principal actividad comercial", "full" => "Es un emprendimiento, al cual nos dedicamos full time", "pequeña" => "Es una empresa pequeña, somos entre 5 y 15 personas aproximadamente", "mediana" => "Es una empresa mediana de mas de 15 empleados" ] ,$shop->say, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="control-label">Estado/Provincia</label>
                                {!! Form::text('state',$shop->state,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-center">
                    <a href="{{ url('admin') }}" type="reset" class="btn btn-default"><i class="fa fa-times"></i> Cancelar</a>
                    <button type="submit" class="btn btn-primary"> Guardar Cambios</button>
                </div>
                {!! Form::close() !!}
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <small><strong>Al cancelar tu cuenta, tu tienda será cerrada y no recibirás más notificaciones de Tendaz.</strong></small>
                    </div>
                    <div style="margin-bottom: 20px;"></div>
                    {!! Form::open(['url' => "admin/account/preferences/$store->id" ]) !!}
                    <input type="hidden" value="DELETE" name="_method">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Seguro que quieres cancelar tu tienda?')">
                            <i class="fa fa-exclamation-triangle"></i> Cerrar tienda
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="page-end-space"></div>
@endsection 
    @section('scripts')
    <script type="text/javascript" src="{{asset('administrator/plugins/inputmask/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('administrator/js/trumbowyg.min.js')}}"></script>
    <script type="text/javascript">
        $('#editor').trumbowyg({
            fullscreenable: false
        });
    </script>
@stop