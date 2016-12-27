@extends('layouts.administrator')
    @section('css')
        <link rel="stylesheet" href="{{ asset('admin/css/order-detail.css') }}">
    @stop
    @section('content')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title semibold">
                    <i class="ico-user"></i>&nbsp;
                    <a href="{{ url('/admin/orders') }}">Mis ventas</a> / Orden # {{ ($orders->id)+100 }}
                </h4>
            </div>
            @include('admin.partials.message')
            <div class="page-header-section">
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{ url('admin/orders') }}">Ordenes</a></li>
                        <li class="active">Orden de Pedido</li>
                    </ol>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><i class="fa fa-money"></i>&nbsp; Orden de Pedido.</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <br>
                        <div class="text-left">
                            <p style="float: right !important;">
                                <?php  setlocale(LC_TIME, 'ES'); $dt = \Carbon\Carbon::parse($orders->created_at) ?>
                               <strong>Fecha de solicitud&nbsp;</strong><input class="form-control" type="text" value="{{ $dt->formatLocalized('%A %d %B %Y') }}" width="150px;" disabled>                        </p>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title" style="height: 50px">
                                        <a href='javascript:window.print(); void 0;' class="btn btn-success" ><i class="fa fa-print"></i>&nbsp;Imprimir Orden</a>
                                        &nbsp;&nbsp;
                                        @if($orders->status->name == 'marcar' )
                                            {!! Form::open(['url' => ['admin/orders',$orders->id],'method'=> 'PUT','style'=>'display:inline']) !!}
                                                     <button type="submit" class="btn btn-warning"><i class="fa fa-lock"></i>&nbsp; Archivar </button>
                                                    <input type="hidden" name="status[name]" value="archivada">
                                            {!! Form::close() !!}
                                        @elseif($orders->status->name == 'Re abrir')
                                            {!! Form::open(['url' => ['admin/orders',$orders->id],'method'=> 'PUT','style'=>'display:inline']) !!}
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i>&nbsp; Archivar</button>
                                                <input type="hidden" name="status[name]" value="archivada">
                                            {!! Form::close() !!}
                                        @endif
                                        @if($orders->status->name == 'archivada' || $orders->status->name == 'Cancelar' )
                                            {!! Form::open(['url' => ['admin/orders',$orders->id],'method'=> 'PUT','style'=>'display:inline']) !!}
                                            <button type="submit" class="btn btn-warning"><i class="fa fa-unlock"></i>&nbsp; Re abrir </button>
                                            <input type="hidden" name="status[name]" value="Re abrir">
                                            {!! Form::close() !!}
                                        @endif
                                        &nbsp;&nbsp;
                                        @if($orders->status->name != 'Cancelar')
                                            {!! Form::open(['url' => ['admin/orders',$orders->id],'method'=> 'PUT','style'=>'display:inline']) !!}
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-ban"></i>&nbsp; Cancelar Orden</button>
                                            <input type="hidden" name="status[name]" value="Cancelar">
                                            {!! Form::close() !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="col-md-12">
                            <br>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h5><i class="fa fa-list-alt"></i>&nbsp; <strong>Detalles de la Orden.</strong></h5>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-8">
                                        <table class="table table hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 150px;"></th>
                                                    <th style="width: 100px;">Producto</th>
                                                    <th style="width: 100px;">Precio</th>
                                                    <th style="width: 50px; text-align: center;">Cantidad</th>
                                                    <th style="width: 150px;">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sub = 0;?>
                                                <?php $total = 0;?>
                                                @foreach($orders->products as $producto)
                                                    <tr>
                                                        <td>
                                                            <img src="{{ $producto->product->mainImage() }}" width="50px"  height="50px" class="thumbnail" alt="">
                                                        </td>
                                                        <td>

                                                        </td>
                                                        @if($producto->product->collection->promotion)
                                                            <td>$ {{ number_format($producto->promotional_price,2,',','.') }}</td>
                                                            <td style="text-align: center !important;">{{ $producto->pivot->quantity }}</td>
                                                            <td>{{ $t = number_format(($producto->pivot->quantity * $producto->promotional_price),2,',','.')  }}</td>

                                                        @else
                                                            <td>{{ number_format($producto->price , 2 ,',' , '.') }}</td>
                                                            <td style="text-align: center !important;">{{ $producto->pivot->quantity }}</td>
                                                            <td>{{ $t = number_format(($producto->pivot->quantity * $producto->price),2,',','.')  }}</td>

                                                        @endif
                                                    </tr>
                                                @endforeach

                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>Sub:</strong></td>
                                                    <td><strong>$ {{ number_format($orders->total_products,2,',','.') }}</strong></td>
                                                </tr><tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>Envio:</strong></td>
                                                    <td><strong>$ {{ number_format($orders->total_shipping,2,',','.') }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>Total:</strong></td>
                                                    <td><strong>$ {{ number_format($orders->total , 2 , ',' , '.') }}</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        @include('admin.partials.orders.order-detail-accion')
                                    </div>
                                    <div class="col-md-4">
                                        <div class="widget panel">
                                            <div class="panel-body">
                                                <ul class="list-unstyled">
                                                    <li class="text-center">
                                                        @if(isset($orders->user->path) && !empty($orders->user->path))
                                                            <img class="img-rounded img-bordered-primary" src="{{ asset("users/images/$orders->user->path") }}" alt width="100px" height="100px">
                                                        @else
                                                            <img class="img-rounded img-bordered-primary" src="{{ asset('administrator/image/avatar/avatar7.jpg') }}" alt width="100px" height="100px">
                                                        @endif
                                                    </li>
                                                    <li class="text-center">

                                                        <h4 class="semibold ellipsis">
                                                            <a href="{{asset("admin/customers/").'/'.$orders->user->id}}">
                                                                {{ $orders->user->name }}
                                                            </a>
                                                        </h4>

                                                        <h4 class="semibold ellipsis"><a href="{{asset('admin/resumenCliente')}}">{{ $orders->full_name }}</a></h4>

                                                    </li>
                                                    <li class="text-left">
                                                        <p class="text-left">
                                                            <strong><a href="#">@if(empty($orders->user->email))
                                                                    @else {{ $orders->user->email }} @endif</a></strong>
                                                            <br>
                                                            <strong>Identificacion:</strong> @if(empty($orders->user->cedula))N.N
                                                            @else {{ $orders->user->cedula }} @endif
                                                            <br>
                                                            <strong>Telefono:</strong>
                                                            @if(empty($orders->user->phone))
                                                                @else
                                                                {{$orders->user->phone}}
                                                            @endif
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br>
                                        </div>
                                        @include('admin.partials.orders.order-detail-history')
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('admin.partials.orders.order-detail-note')
                        <input type="hidden" value="{{ url('admin/orders/update/note') }}" id="note-route">
                        <input type="hidden" value="{{ $orders->id }}" id="id-order">
                        <input type="hidden" value="{{ csrf_token()  }}" id="note-token">
                    </div>
                </div>
            </div>
        </div>
        <div class="page-end-space"></div>
       </div>
    @endsection

    @section('scripts')
        <script src="{{ asset('admin/js/order-detail-note.js') }}"></script>
    @stop