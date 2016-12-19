@section('title')
Cliente {{ $user->full_name }}
@stop
    @extends('admin.template')
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
                         <li class="active">{{ $user->full_name }}</li>
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
                             <h4><i class="fa fa-user"></i> {{ $user->full_name }}</h4>
                         </div>
                     </div>
                    <div class="panel-body">
                        <br>
                        <ul class="list-unstyled">
                            <div class="col-md-12 text-center">
                                <p>
                                    <img class="img-rounded img-bordered-primary" width="100px;" height="100px;" alt src="{{asset('admin/image/avatar/avatar7.jpg')}}">
                                </p>
                                <p>{{$user->email}}</p>
                                <p>{{$user->phone}}</p>
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
                                 @if(count($user->adresses) >= 1)

                                <a href="{{ url("admin/customers/edit",$user->id) }}"><i class="fa fa-pencil"></i> Editar cliente</a>
                                <h5><b>Correo: {{ $user->email }}</b></h5>
                                <h5>Direccion de envio:</h5>
                                    <p class="text-muted">
                                            {{ $user->adresses[0]->address_name }}<br>
                                            {{ $user->adresses[0]->address_location }}<br>
                                            {{ $user->adresses[0]->city }}<br>
                                            {{ $user->adresses[0]->state }}<br>
                                            {{ $user->adresses[0]->country }}<br>
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
                         @if(!empty($user->notes))
                             <p>
                                 {{ $user->notes }}
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
                                    <th style="font-size: 18px !important;">$ {{ number_format($user->orders()->sum('total'),2,',','.') }}</th>
                                    <th style="font-size: 18px !important;">{{ $user->orders()->count() }}</th>
                                    <th style="font-size: 18px !important;">{{ $user->consults->count() }}</th>
                                    <th style="font-size: 18px !important;">
                                        @if($user->orders()->min('created_at'))
                                            {{ \Carbon\Carbon::parse($user->orders()->min('created_at'))->format('d/m/Y') }}
                                        @else
                                            {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}
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
                         @if(count($orders) >= 1)
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
                                            <td><a href="{{ url("admin/orders/$order->id")}}">#{{ ($order->id)+100 }}</a></td>
                                            <td>{{ $order->created_at->format('m/d/Y') }}</td>
                                            <td><strong>${{ number_format($order->total,2,',','.') }}</strong></td>
                                            <td>
                                                <p class="text-muted">
                                                    @if($order->status == 'wait')
                                                        Esperando confirmacion de pago.
                                                    @endif
                                                    @if($order->status == 'pagada')
                                                        Esperando para empacar la orden.
                                                    @endif
                                                    @if($order->status == 'empaquetar')
                                                        Esperando a que el cliente retire el pedido.
                                                    @endif
                                                    @if($order->status == 'retirado')
                                                        Paga y enviada.
                                                    @endif
                                                    @if($order->status == 'archivada')
                                                        Paga y enviada.
                                                    @endif
                                                    @if($order->status == 're-abrir')
                                                        Paga y enviada.
                                                    @endif
                                                    @if($order->status == 'cancelar')
                                                        Cancelar
                                                    @endif
                                                </p>
                                            </td>
                                        </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                            <center>{!!  $orders->setPath('')->render() !!}</center>
                             @else
                             <p style="color: grey;">A&uacute;n no hay ventas asociadas a este cliente.</p>
                         @endif
                     </div>
                 </div>
                 <br>
             </div>
             <div class="col-md-8 col-md-offset-4">
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
                         @if(count($user->consults) >= 1)
                             <table class="table table-responsive table-hover">
                                 <thead>
                                 <tr>
                                     <th>Fecha</th>
                                     <th>Consulta</th>
                                     <th>Producto</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($user->consults as $consult)
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
                         {!! Form::open(['url' =>[ "myProfile",$user->id ],'method' => 'PUT','files' => true, 'data-toggle'=>'validator', 'role'=>'form']) !!}
                         <div class="row">
                             <div class="col-xs-6">
                                 <label>Nombres</label>
                                 <input type="text" class="form-control" name="name" value="{{$user->name}}">
                             </div>
                             <div class="col-xs-6">
                                 <label>Apellidos</label>
                                 <input type="text" class="form-control"  name="last_name" value="{{$user->last_name}}">
                             </div>
                             <div class="col-xs-6">
                                 <label>Telefono</label>
                                 <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
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
                                         <i class="fa fa-upload"></i> Carga foto de Perfil
                                     </label>
                                     <input id="file-upload" type="file"/>
                                 </div>
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
                                 <input type="text" class="form-control" name="email" value="{{$user->email}}">
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
    @stop