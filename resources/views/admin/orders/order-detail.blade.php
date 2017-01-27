@section('title')
    Orden #{{ ($order->id)}}
@stop
@extends('layouts.administrator')
    @section('css')
        <link rel="stylesheet" href="{{ asset('administrator/css/order-detail.css') }}">
    @stop
    @section('content')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/rich.png')}}">&nbsp; Mis ventas
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
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5><i class="fa fa-list-alt"></i>&nbsp;
                                <strong>Detalles de la Orden  #{{ ($order->id)}}.</strong></h5>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <div class="widget">
                                <div class="panel-body">
                                    <br>
                                    <div class="text-left">
                                        <p style="float: left !important;">
                                            <?php  setlocale(LC_TIME, 'ES'); $dt = \Carbon\Carbon::parse($order->created_at) ?>
                                            <strong>Fecha de solicitud&nbsp;</strong><input class="form-control" type="text"
                                                                                            value="{{ $dt->formatLocalized('%A %d %B %Y') }}" width="150px;" disabled>
                                        </p>
                                    </div>
                                    <br>
                                    <table id="print" class="table table hover">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Producto</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sub = 0;?>
                                            <?php $total = 0;?>
                                            @foreach($order->products as $producto)
                                                    <tr>
                                                        <td>
                                                            <img src="{{ $producto->product->mainImage() }}" width="50px"  height="50px" class="thumbnail" alt="">
                                                        </td>
                                                        <td>
                                                            {{ $producto->product->name }}
                                                            @if(!empty($producto->option_name_1))
                                                                ({{ $producto->option_value_1 }})
                                                            @endif

                                                            @if(!empty($producto->option_name_2))
                                                                /({{ $producto->option_value_2 }})
                                                            @endif

                                                            @if(!empty($producto->option_name_3))
                                                                /({{ $producto->option_value_3 }})
                                                            @endif
                                                        </td>
                                                        @if($producto->product->collection->promotion)
                                                            <td>${{ number_format($producto->promotional_price,0,',','.') }}</td>
                                                            <td style="text-align: center !important;">{{ $producto->pivot->quantity }}</td>
                                                            <td>${{ $t = number_format(($producto->pivot->quantity * $producto->promotional_price),0,',','.')  }}</td>

                                                        @else
                                                            <td>$ {{ number_format($producto->price , 0 ,',' , '.') }}</td>
                                                            <td style="text-align: center !important;">{{ $producto->pivot->quantity }}</td>
                                                            <td>${{ $t = number_format(($producto->pivot->quantity * $producto->price),0,',','.')  }}</td>

                                                        @endif
                                                    </tr>
                                            @endforeach
                                                    <tr>
                                                        <td colspan="3"></td>
                                                        <td><strong>Sub:</strong></td>
                                                        <td>${{ number_format($order->total_products,0,',','.') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"></td>
                                                        <td><strong>Envio:</strong></td>
                                                        <td>${{ number_format($order->total_shipping,0,',','.') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"></td>
                                                        <td><strong>Descuento:</strong></td>
                                                        <td>${{ number_format($order->total_shipping,0,',','.') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"></td>
                                                        <td><strong>Total:</strong></td>
                                                        <td>${{ number_format($order->total , 0 , ',' , '.') }}</td>
                                                    </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <div class="panel-body">
                                    <ul class="list-unstyled">
                                            <li class="text-center">
                                                @if(isset($customer->avatar) && !empty($customer->avatar))
                                                    <img class="img-rounded img-bordered-inverse" src="{{ asset("profile/".$customer->avatar) }}" alt width="100px" height="100px">
                                                @else
                                                    <img class="img-rounded img-bordered-inverse" src="{{ asset('administrator/image/avatar/avatar7.jpg') }}" alt width="100px" height="100px">
                                                @endif
                                            </li>
                                            <li class="text-center">
                                                <h4 class="semibold ellipsis">
                                                    @if(empty($customer->uuid))
                                                        @else
                                                        <a href="{{asset("admin/customers/".$customer->uuid)}}">
                                                            @if(empty($customer->name))@else{{ $customer->name }}@endif
                                                        </a>
                                                    @endif
                                                </h4>
                                            </li>
                                            <li class="text-center">
                                            <p class="text-center">
                                                <strong>Correo:</strong>
                                                @if(empty($customer->email))
                                                        @else {{ $customer->email }}
                                                @endif
                                                <br>
                                                <strong>Identificaci&oacute;n:</strong>
                                                @if(empty($customer->identification))Sin Identificaci&oacute;n
                                                @else {{ $customer->identification }}
                                                @endif
                                                <br>
                                                <strong>Telefono:</strong>
                                                @if(empty($customer->phone))
                                                    Sin Telefono
                                                    @else
                                                    {{$customer->phone}}
                                                @endif
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <br>
                            </div>
                            <!--notes -->
                                @include('admin.partials.orders.order-detail-note')
                            <!-- end notes-->
                        </div>
                        <div class="col-md-6">
                            @include('admin.partials.orders.order-detail-history')
                        </div>
                        <div class="col-md-6">
                            <div class="order-history panel panel-default info-box">
                                <div class="panel-heading">
                                    Direcci&oacute;n de Envio
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <td>Nombre</td>
                                                        <td>Direcci&oacute;n</td>
                                                        <td>Barrio</td>
                                                        <td>Departamento</td>
                                                        <td>Ciudad</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$address->name}}</td>
                                                        <td>{{$address->street}}</td>
                                                        <td>{{$address->complement}}</td>
                                                        <td>{{$address->state->name}}</td>
                                                        <td>{{$address->city->name}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{url('admin/orders/print/'.$order->id)}}" class="btn btn-success pull-right" >
                                <i class="fa fa-print"></i>&nbsp;ver Formato Para Imprimir Orden
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="page-end-space"></div>
    @endsection

    @section('scripts')

    @stop