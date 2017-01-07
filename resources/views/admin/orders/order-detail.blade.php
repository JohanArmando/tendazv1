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
                                                        <td></td><td></td><td></td>
                                                        <td><strong>Sub:</strong></td>
                                                        <td><strong>$ {{ number_format($order->total_products,2,',','.') }}</strong></td>
                                                    </tr><tr>
                                                        <td></td><td></td><td></td>
                                                        <td><strong>Envio:</strong></td>
                                                        <td><strong>$ {{ number_format($order->total_shipping,2,',','.') }}</strong></td>
                                                    </tr>
                                                    <tr>
                                                    <td></td><td></td><td></td>
                                                    <td><strong>Total:</strong></td>
                                                    <td><strong>$ {{ number_format($order->total , 2 , ',' , '.') }}</strong></td>
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
                                                    <a href="{{asset("admin/customers/").'/'.$order->user->uuid}}">
                                                        {{ $customer->name }}
                                                    </a>
                                                </h4>
                                                <h4 class="semibold ellipsis"><a href="{{asset('admin/resumenCliente')}}">{{ $order->full_name }}</a></h4>
                                            </li>
                                            <li class="text-center">
                                            <p class="text-center">
                                                <strong>Correo:</strong>
                                                @if(empty($customer->email))
                                                        @else {{ $customer->email }}
                                                @endif
                                                <br>
                                                <strong>Identificaci&oacute;n:</strong>
                                                @if(empty($customer->identification))N.N
                                                @else {{ $customer->identification }}
                                                @endif
                                                <br>
                                                <strong>Telefono:</strong>
                                                @if(empty($customer->phone))
                                                    @else
                                                    {{$customer->phone}}
                                                @endif
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @include('admin.partials.orders.order-detail-history')
                        </div>
                        <div class="col-md-6">
                            @include('admin.partials.orders.order-detail-note')
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a style="margin-left: 10px" href="{{url('admin/orders/print/'.$order->id)}}" class="btn btn-success pull-right" >
                                <i class="fa fa-print"></i>&nbsp;ver Formato Para Imprimir Orden</a>
                            &nbsp;&nbsp;
                            @if($order->status->name == 'marcar' )
                                {!! Form::open(['url' => ['admin/orders',$order->id],'method'=> 'PUT','style'=>'display:inline']) !!}
                                <button type="submit" class="btn btn-warning  pull-right"><i class="fa fa-lock"></i>&nbsp; Archivar </button>
                                <input type="hidden" name="status[name]" value="archivada">
                                {!! Form::close() !!}
                            @elseif($order->status->name == 'Re abrir')
                                {!! Form::open(['url' => ['admin/orders',$order->id],'method'=> 'PUT','style'=>'display:inline']) !!}
                                <button type="submit" class="btn btn-primary  pull-right"><i class="fa fa-lock"></i>&nbsp; Archivar</button>
                                <input type="hidden" name="status[name]" value="archivada">
                                {!! Form::close() !!}
                            @endif
                            @if($order->status->name == 'archivada' || $order->status->name == 'Cancelar' )
                                {!! Form::open(['url' => ['admin/orders',$order->id],'method'=> 'PUT','style'=>'display:inline']) !!}
                                <button type="submit" class="btn btn-warning  pull-right"><i class="fa fa-unlock"></i>&nbsp; Re abrir </button>
                                <input type="hidden" name="status[name]" value="Re abrir">
                                {!! Form::close() !!}
                            @endif
                            &nbsp;&nbsp;
                            @if($order->status->name != 'Cancelar')
                                {!! Form::open(['url' => ['admin/orders',$order->id],'method'=> 'PUT','style'=>'display:inline']) !!}
                                <button type="submit" class="btn btn-danger  pull-right"><i class="fa fa-ban"></i>&nbsp; Cancelar Orden</button>
                                <input type="hidden" name="status[name]" value="Cancelar">
                                {!! Form::close() !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <input type="hidden" value="{{ url('admin/orders/update/note') }}" id="note-route">
            <input type="hidden" value="{{ $order->id }}" id="id-order">
            <input type="hidden" value="{{ csrf_token()  }}" id="note-token">

        </div>
        <div class="page-end-space"></div>
    @endsection

    @section('scripts')
        <script src="{{ asset('administrator/js/order-detail-note.js') }}"></script>
    @stop