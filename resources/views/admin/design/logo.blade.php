@section('title')
Elige tu logo
@stop
@extends('layouts.administrator')
@section('content')
    @include('admin.partials.message')
    <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/paint-brush.png')}}">&nbsp; Elige el logo de tu tienda
                </h4>
        </div>
            <div class="page-header-section">
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: darkgrey;"> Inicio</a></li>
                        <li><a href="#" style="color: darkgrey;">Dise&ntilde;o</a></li>
                        <li class="active"><a href="#" style="color: orange;">Logo</a></li>
                    </ol>
                </div>
            </div>
        </div>  
        <br>
        <br>
        <div class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5><strong>Agregar un logo</strong></h5>
                            </div>

                        </div>
                        <div class="panel-body">
                             {!! Form::model($shop , ['url' => "admin/design/logo/".$shop->uuid , 'method' => 'PUT','files' => true]) !!}
                            <br>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <input type="file" name="path" class="dropify" data-default-file="{{ asset("logos/".$shop->id."/".$shop->logo) }}" />
                                    </div>
                                </div>

                            <div class="panel-footer">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Guardar Cambios</button>
                                    &nbsp;
                                    <a href="{{url('/admin/home')}}" style="background-color: black;border: hidden; color: white" class="btn btn-default"> <i class="fa fa-times"></i> Cancelar</a>
                                </div>
                            </div>
                          {!! Form::close() !!}
                       </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5><strong>Agregar Imagenes Slider</strong></h5>
                            </div>

                        </div>
                        <div class="panel-body">
                            {!! Form::model($logo , ['url' => "admin/design/sliders/".$logo->uuid , 'method' => 'PUT','files' => true]) !!}
                            <div class="col-md-12">
                                <p>Para que tus imagenes se adapten bien en los templates, se recomienda con tama&ntilde;o de 1200x600.</p>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <input type="file" name="slider1" class="dropify" data-default-file="{{ asset("sliders/".$logo->id."/".$logo->slider1) }}" />
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="slider2" class="dropify" data-default-file="{{ asset("sliders/".$logo->id."/".$logo->slider2) }}" />
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="slider3" class="dropify" data-default-file="{{ asset("sliders/".$logo->id."/".$logo->slider3) }}" />
                                </div>
                            </div>

                            <div class="panel-footer">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Guardar Cambios</button>
                                    &nbsp;
                                    <a href="{{url('/admin/home')}}" style="background-color: black;border: hidden; color: white" class="btn btn-default"> <i class="fa fa-times"></i> Cancelar</a>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="col-md-12" style="height: 100px">

            </div>
        </div>
@endsection
@section('scripts')
<script type="text/javascript">
    $('.dropify').dropify();
    $('.select2').select2();
</script>
@stop