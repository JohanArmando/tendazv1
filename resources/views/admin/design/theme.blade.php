@section('title')
Cambiar tema
@stop
@extends('layouts.administrator')
@section('css')
<link rel="stylesheet" href="{{asset('administrator/plugins/pinterest/style_pinterest.css')}}">
<link rel="stylesheet" href="{{asset('administrator/plugins/toggle_button/bootstrap_toogle.css')}}">
<link rel="stylesheet" href="{{asset('components/admin/css/trumbowyg.min.css')}}">
@stop
@section('content')
<div class="page-header page-header-block">
    <div class="page-header-section">
        <h4 class="title">
            <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/theme.png')}}">&nbsp; Elige tu diseño
        </h4>
    </div>
    <div class="page-header-section">
        <div class="toolbar">
            <ol class="breadcrumb breadcrumb-transparent nm">
                <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                <li><a href="#" style="color: darkgrey;">Dise&ntilde;o</a></li>
                <li class="active" style="color: orange;">Selecci&oacute;n del tema</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <section id="demo">
            @foreach($themes as $theme)
                <article class="white-panel">
                    <div class="col-md-12 text-left" style="border-bottom: 1px solid #c1c1c1">
                        <h4>{{ $theme->name }} <span style="color: #6b6b6b; font-size: 12px"> - Gratis</span></h4>
                    </div>
                    <div class="text-center">
                        <img class="img-responsive" src="{{ asset("administrator/image/templates/$theme->path") }}" />
                        @if($current->name == $theme->name)
                            <div class="display-container-active">
                                <div class="white-panel-bottom-back">
                                </div>
                                <div class="white-panel-text text-center">
                                    <i class="fa fa-smile-o" aria-hidden="true" ></i>
                                    <p>Este diseño ya esta activo en tu tienda.</p>
                                </div>
                            </div>
                        @else
                            <div class="display-container">
                                <div class="white-panel-bottom-back">
                                </div>
                                <div class="white-panel-bottom">
                                    {!! Form::open(['url' => 'admin/design/theme/change' , 'method' => 'POST']) !!}
                                    <input type="hidden" name="id" value="{{ $theme->id }}" >
                                    <input type="hidden" name="name"  value="{{ $theme->name }}">
                                    <input type="hidden" name="store_id" value="{{ $current->name }}">
                                    <div class="btn btn-primary" style="background-color: #4f8ecc; color: white; border: 1px solid #4f8ecc;">
                                        <i class="fa fa-hand-pointer-o" aria-hidden="true" ></i>
                                        <input type="submit" value="Elegir diseño" style="background-color: unset; border: 0px" >
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </article>
            @endforeach
        </section>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 text-center">  
        <strong>¿Necesitas otro template para tu tienda?</strong>
        <p class="col-md-12">
            <div class="text-center">
                <a href="{{url('admin/help')}}" class="btn btn-primary" >
                    <i class="fa fa-envelope"></i>&nbsp;Contactanos.
                </a>
            </div>
        </p>
    </div>
</div>
<div class="page-end-space"></div>
@endsection
@section('scripts')
<script src="{{asset('administrator/plugins/pinterest/pinterest_grid.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#demo').pinterest_grid({
            no_columns: 3,
            padding_x: 30,
            padding_y: 20,
            margin_bottom: 50,
            single_column_breakpoint: 700
        });
    });
</script>
<script type="text/javascript" src="{{asset('administrator/plugins/toggle_button/bootstrap-toggle.js')}}"></script>
<script type="text/javascript" src="{{asset('components/admin/js/trumbowyg.min.js')}}"></script>
@stop
