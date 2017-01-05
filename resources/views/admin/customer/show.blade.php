@section('title')
Cliente {{ $customer->full_name }}
@stop
    @extends('layouts.administrator')
    @section('css')
    @stop
    @section('content')
         <div class="page-header page-header-block">
             <div class="page-header-section">
                 <h4 class="title semibold"><i class="ico-user"></i>&nbsp; Mis Clientes</h4>
             </div>
             <div class="page-header-section">
                 <div class="toolbar">
                     <ol class="breadcrumb breadcrumb-transparent nm">
                         <li><a href="{{ url('admin/customers') }}" style="color: orange;">Clientes</a></li>
                         <li class="active">{{ $customer->full_name }}</li>
                     </ol>
                 </div>
             </div>
         </div>
         <br>
          <div class="row">
             <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <div class="panel-title">
                             <h4><i class="fa fa-user"></i> {{ $customer->full_name }}</h4>
                         </div>
                     </div>
                    <div class="panel-body">
                        <br>
                        <ul class="list-unstyled">
                            <div class="col-md-12 text-center">
                                <p>
                                    @if(isset($customer->avatar) && !empty($customer->avatar))
                                        <img class="img-rounded img-bordered-inverse" src="{{ asset("profile/".$customer->avatar) }}" alt width="100px" height="100px">
                                    @else
                                        <img class="img-rounded img-bordered-inverse" src="{{ asset('administrator/image/avatar/avatar7.jpg') }}" alt width="100px" height="100px">
                                    @endif
                                </p>
                                <p>{{$customer->email}}</p>
                                <p>{{$customer->phone}}</p>
                                <p>
                                    <button data-target="#modalEditar" data-toggle="modal" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i>
                                        Editar Datos</button>
                                </p>
                                <p>
                                    <button data-target="#modalCorreo" data-toggle="modal" class="btn btn-primary" style="background-color: #3C3C3C; border-color: #3C3C3C">
                                        <i class="fa fa-envelope"></i>
                                        Enviar Correo</button>
                                </p>
                            </div>
                            <div class="col-md-12 col-md-offset-1">
                                <li class="text-left mb15">
                                    <a href="{{ url("admin/customers/".$customer->uuid."/edit") }}"><i class="fa fa-pencil"></i> Editar cliente</a>
                                    <h5><b>Correo: {{ $customer->email }}</b></h5>
                                    <h5>Direccion de envio:</h5>
                                    @if($address)
                                        <p class="text-muted">
                                                {{ $address->name }}<br>
                                                {{ $address->street }}<br>
                                                {{ $address->complement }}<br>
                                                {{ $address->state->name }}<br>
                                                {{ $address->city->name }}<br>
                                        </p>
                                    @endif
                                </li>
                            </div>
                             
                        </ul>
                    </div>
                </div>
                 <br>
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <div class="panel-title">
                             <h4><i class="fa fa-file-text"></i> Notas</h4>
                         </div>
                     </div>
                     <div class="panel-body">
                         @if(!empty($customer->notes))
                             <p>
                                 {{ $customer->notes }}
                             </p>
                         @else
                             <p>
                                 No hay notas para este cliente
                             </p>
                         @endif
                     </div>
                 </div>
             </div>
             <div class="col-md-8">
                 <div class="panel panel-default">
                     <div class="panel-body">
                         <table class="table table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th style="font-size: 18px !important;">$ {{ number_format($customer->total() , 2 , ',' , '.')  }}</th>
                                    <th style="font-size: 18px !important;">{{ $customer->totalOrder() }}</th>
                                    <th style="font-size: 18px !important;">{{ $customer->totalConsult() }}</th>
                                    <th style="font-size: 18px !important;">
                                        @if($customer->minOrder())
                                            {{ \Carbon\Carbon::parse($customer->minOrder())->format('d/m/Y') }}
                                        @else
                                            {{ \Carbon\Carbon::parse($customer->created_at)->format('d/m/Y') }}
                                        @endif
                                    </th>
                                </tr>
                            </thead>
                             <tbody>
                                <tr>
                                    <td  style="font-size: 18px !important;">Total Gastado</td>
                                    <td  style="font-size: 18px !important;">Ventas</td>
                                    <td  style="font-size: 18px !important;">Cosultas</td>
                                    <td  style="font-size: 18px !important;">Primera iteraccion</td>
                                </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <br>
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <div class="panel-title">
                             <h4>
                                 <i class="fa fa-shopping-cart"></i>
                                 &nbsp;
                                 Ventas
                             </h4>
                         </div>
                     </div>
                     <div class="panel-body">
                         <br>
                         @if($customer->orders)
                             <table class="table table-responsive table-hover">
                                 <thead>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Fecha</th>
                                        <th>Total</th>
                                        <th>Estado</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     @foreach($orders as $order)
                                        <tr>
                                            <td><a href="{{ url("admin/orders/$order->uuid")}}">#{{ $order->id }}</a></td>
                                            <td>{{ $order->created_at }}</td>
                                            <td><strong>${{ $order->total }}</strong></td>
                                            <td>
                                                <p class="text-muted">
                                                    {{ $order->status->description  }}
                                                </p>
                                            </td>
                                        </tr>
                                     @endforeach
                                 </tbody>
                             </table>

                             @else
                             <p style="color: grey;">A&uacute;n no hay ventas asociadas a este cliente.</p>
                         @endif
                     </div>
                     <center>{!! $orders->setPath('')->render() !!}</center>
                 </div>
                 <br>
             </div>
             <div class="col-md-8 ">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <div class="panel-title">
                             <h4>
                                 <i class="fa fa-shopping-cart"></i>
                                 &nbsp;
                                 Consultas
                             </h4>
                         </div>
                     </div>
                     <div class="panel-body">
                         <br>
                         @if(count($customer->consults) >= 1)
                             <table class="table table-responsive table-hover">
                                 <thead>
                                 <tr>
                                     <th>Fecha</th>
                                     <th>Consulta</th>
                                     <th>Producto</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($customer->consults as $consult)
                                        <tr>
                                            <th>{{ \Carbon\Carbon::parse($consult->created_at)->format('d/m/Y') }}</th>
                                            <th>{{ $consult->message }}</th>
                                            <th></th>
                                        </tr>
                                    @endforeach
                                 </tbody>
                             </table>
                         @else
                             <p style="color: grey;">A&uacute;n no hay consultas asociadas a este cliente.</p>
                         @endif
                     </div>
                 </div>
                 <br>
             </div>
          </div>
         <div class="page-end-space"></div>
         <div id="modalEditar" class="modal fade" tabindex="-1" role="dialog">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         @include('admin.partials.message')
                         <button type="button" class="close" data-dismiss="modal" aira-label="Close"><span aira-hidden="true">&times;</span></button>
                         <h4 class="modal-title">Editar datos del Cliente</h4>
                     </div>
                     <div class="modal-body">
                         {!! Form::open(['url' =>[ "admin/customers",$customer->uuid ],'method' => 'PUT','files' => true, 'data-toggle'=>'validator', 'role'=>'form']) !!}
                         <div class="row">
                             <div class="col-xs-6">
                                 <label>Nombres</label>
                                 <input type="text" class="form-control" name="name" value="{{$customer->name}}">
                             </div>
                             <div class="col-xs-6">
                                 <label>Apellidos</label>
                                 <input type="text" class="form-control"  name="last_name" value="{{$customer->last_name}}">
                             </div>
                             <div class="col-xs-6">
                                 <label>Telefono</label>
                                 <input type="text" class="form-control" name="phone" value="{{$customer->phone}}">
                             </div>
                             <div class="col-xs-6">
                                 <style type="text/css">
                                     input[type="file"]{
                                         display: none;
                                     }
                                     .custom-file-upload{
                                         border: 1px solid #ccc;
                                         display: inline-block;
                                         padding: 6px  12px;
                                         cursor: pointer;
                                     }
                                 </style>
                                 <div class="clearfix"></div>
                                 <div style="margin-top: 2px;"></div>
                                 <label>Imagen de Perfil</label>
                                 <div class="form-group">
                                     <label for="file-upload" class="custom-file-upload">
                                         <i class="fa fa-upload"></i> Selecciona foto de Perfil
                                     </label>
                                     <input id="file-upload" type="file" name="avatar" onchange="readURL(this);"/>
                                 </div>
                                 <img id="blah" src="#" alt="Image Select"/>
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <div class="text-center">
                             <button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> Guardar Cambios</button>
                             <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                         </div>
                     </div>
                     {!!Form::close()!!}
                 </div>
             </div>
         </div>
         <div id="modalCorreo" class="modal fade" tabindex="-1" role="dialog">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         @include('admin.partials.message')
                         <button type="button" class="close" data-dismiss="modal" aira-label="Close"><span aira-hidden="true">&times;</span></button>
                         <h4 class="modal-title">Enviar Correo al Cliente</h4>
                     </div>
                     <div class="modal-body">
                         {!! Form::open(['url' =>'client/email','method' => 'PUT','files' => true, 'data-toggle'=>'validator', 'role'=>'form']) !!}
                         <div class="row">
                             <div class="col-xs-12 hidden">
                                 <label>Email</label>
                                 <input type="text" class="form-control" name="email" value="{{$customer->email}}">
                             </div>
                             <div class="col-xs-12">
                                 <label>Asunto</label>
                                 <input type="text" class="form-control" name="subject">
                             </div>
                             <div class="col-xs-12">
                                 <label>Mensaje</label>
                                 <textarea class="form-control"  name="message"></textarea>
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <div class="text-center">
                             <button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> Enviar Correo</button>
                             <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                         </div>
                     </div>
                     {!!Form::close()!!}
                 </div>
             </div>
         </div>
    @endsection
    @section('scripts')
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result).width(50).height(50);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    @stop