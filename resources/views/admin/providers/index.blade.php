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
                    <li class="active" style="color: orange;">Mis Provedores</li>
                </ol>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title" style="margin-right: 20px;">
                        <a data-toggle="modal" data-target="#provider" href="{{asset('admin/export/orders')}}" ><i class="fa fa-plus"></i>&nbsp; Crear Provedor</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <h3 class="panel-title">Provedores</h3>
                </div>
                <div class="panel-body">
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Celular</th>
                                <th>Ubicaci&oacute;n</th>
                                <th class="text-center">Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($providers as $provider)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    <a href="">{{$provider->full_name}}</a>
                                </td>
                                <td>
                                    {{$provider->email}}
                                </td>
                                <td>
                                    {{$provider->phone}}
                                </td>
                                <td>
                                    ({{$provider->department_id}}-{{$provider->country_id}})
                                </td>
                                <td class="text-center">
                                    <form action="{{url('admin/providers/'.$provider->uuid)}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="page-end-space"></div>
        </div>
    </div>
    <div class="page-end-space"></div>

    <!-- Modal -->
    <div class="modal fade" id="provider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear Provedor</h4>
                </div>
                <form action="{{url('admin/providers')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nombre:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Apellido:</label>
                                <input type="text" name="last_name" class="form-control" >
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Correo:</label>
                                     <input name="email" type="email" class="form-control" data-parsley-trigger="change" data-parsley-type="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telefono:</label>
                                    <input type="text" name="phone" class="form-control" data-mask="999-9999-999" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Departamento:</label>
                                    <select name="department_id" class="form-control" >
                                        @foreach($departments as $departament)
                                        <option value="{{$departament->id}}">{{$departament->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ciudad:</label>
                                    {!! Form::select('country_id' , $countries , null ,['class' =>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('administrator/plugins/inputmask/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('administrator/plugins/parsley/js/parsley.js')}}"></script>
    <script type="text/javascript" src="{{asset('administrator/js/backend/forms/validation.js')}}"></script>
@stop