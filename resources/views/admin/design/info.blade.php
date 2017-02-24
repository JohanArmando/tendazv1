@section('title')
Informacion de contacto
@stop
@extends('layouts.administrator')
@section('css')
@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/business-cards.png')}}">&nbsp; Informacion de contacto
            </h4>
        </div>
        <div class="page-header-section">
            <!-- Toolbar -->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="#" style="color: darkgrey;">Dise&ntilde;o</a></li>
                    <li class="active" style="color: orange;">informacion de contacto</li>
                </ol>
            </div>
            <!--/ Toolbar -->
        </div>
    </div>
    @include('admin.partials.message')
    <div class="row">
        <div class="col-md-1">
        </div>
        
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-map-marker"></i> <strong>Datos para el contacto</strong></h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($store , ['url' => ['admin/design/info/'] , 'method' => 'PUT', 'role'=> 'form'
                    , 'data-toggle'=>'validator']) !!}
                        <div class="form-group">
                            <label for="email">Email de contacto de tu tienda.</label>
                            {!! Form::email('address_1' ,$store->address_1 ,['class' => 'form-control' , 'placeholder' => 'Ejemplo: email@email.com']) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Direccion de tu local</label>
                            {!! Form::text('address_2' ,$store->address_2 ,['class' => 'form-control' , 'placeholder' => '' ,'style' => 'height:50px']) !!}
                        </div>
                        <div class="form-group">
                            <label for="telf">Telefono de tu local</label>
                            {!! Form::number('number_phone' ,$store->number_phone ,['class' => 'form-control',
                            'onkeypress'=>'return justNumbers(event);'])!!}
                        </div>
                        <div class="form-group">
                            <label for="text_informativo">Terminos y Condiciones</label>
                            {!! Form::textarea('conditions' ,$store->conditions ,['class' => 'form-control' , 'placeholder' => '' , 'style' => 'height:50px']) !!}
                        </div>
                        <div class="panel-footer">
                            <div class="text-center">
                                 <button type="submit" class="btn btn-primary" ><i class="fa fa-floppy-o"></i> Guardar cambios</button>
                                <a class="btn btn-default" href="{{ url('admin/home') }}"><i class="fa fa-times"></i> Cancelar</a>

                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="col-md-1">         
        </div>
    </div>
    <div class="page-end-space"></div>
</div>
    @endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('administrator/plugins/inputmask/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('administrator/js/nicEdit-latest.js')}}"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
    @stop
