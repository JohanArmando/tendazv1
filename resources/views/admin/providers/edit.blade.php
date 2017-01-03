@section('title')
Mis provedores
@stop
@extends('layouts.administrator')
@section('css')

@endsection
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/provider.png')}}">&nbsp; Mis provedores
            </h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="{{url('admin/orders')}}" style="color: orange;">Ventas</a></li>
                    <li class="active" style="color: orange;">Editar Provedor</li>
                </ol>
            </div>
        </div>
    </div>
    <br>
    <form action="{{url('admin/providers/'.$provider->uuid)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Editar Provedor</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nombre:</label>
                            <input type="text" name="name" value="{{$provider->name}}" class="form-control" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Apellido:</label>
                                <input type="text" name="last_name" value="{{$provider->last_name}}" class="form-control" >
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Correo:</label>
                                     <input name="email" type="email" value="{{$provider->email}}" class="form-control" data-parsley-trigger="change" data-parsley-type="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telefono:</label>
                                    <input type="text" name="phone" value="{{$provider->phone}}" class="form-control" data-mask="999-9999-999" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Departamento:</label>
                                    <select name="state_id" class="form-control">
                                        @foreach($departments as $department)
                                            @if($department->id == $provider->state_id )
                                                <option value="{{$department->id}}" selected>{{$department->name}}</option>
                                            @endif
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ciudad:</label>
                                    <select name="city_id" class="form-control">
                                        @foreach($cities as $city)
                                            @if($city->id == $provider->city_id )
                                                <option value="{{$city->id}}" selected>{{$city->name}}</option>
                                            @endif
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('administrator/plugins/inputmask/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('administrator/plugins/parsley/js/parsley.js')}}"></script>
    <script type="text/javascript" src="{{asset('administrator/js/backend/forms/validation.js')}}"></script>
@stop