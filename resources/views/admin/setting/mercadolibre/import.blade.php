@extends('admin.template')
@section('css')
@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><img width="20" height="20" src="{{asset('admin/image/icons/icons-nav/mercadolibre.png')}}"> Mi Mercadolibre</h4>
        </div>
        <div class="page-header-section">
            <!--Toolbar-->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin/home')}}" style="color: darkgrey;"><i class="fa fa-home"></i> Inicio</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            @include('admin.partials.message')
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="col-md-12">
                                <h5><strong>Productos de MercadoLibre</strong></h5>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body mercadolibre">
                        @if(count($items) > 0)
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="table-responsive">
                                            <p class="text-left"><strong>A continuacion traemos tu productos de mercadolibre {{ session(Auth::client()->get()->id.'profile')->nickname }} marca los que desees cargar a tendaz, y elige una cateogria de tendaz si asi lo deseas.</strong></p>
                                            <table class="table table-striped" id="product-table" >
                                                <thead>
                                                    <th>
                                                        <div class="checkbox custom-checkbox pull-left"
                                                             data-original-title="Seleccionar todos"
                                                             data-toggle="tooltip"
                                                             data-placement="right">
                                                            <input id="all-products"  type="checkbox"  >
                                                            <label for="all-products"></label>
                                                        </div>
                                                    </th>
                                                    <th>&nbsp;</th>
                                                    <th>Producto</th>
                                                    <th>Stock</th>
                                                    <th>Precio Original</th>
                                                    <th>Fecha de fianlizacion</th>
                                                    <th>Condicion</th>
                                                    <th>Categoria tendaz</th>
                                                </thead>
                                                <tbody>
                                                {!! Form::open(['url' => url('admin/mercadolibre/import') , 'method' => 'POST' , 'id' => 'form-import-to-tendaz']) !!}
                                                @foreach($items as $key => $item)
                                                    <tr class="text-left">
                                                        <td>
                                                            <div class="checkbox custom-checkbox pull-left check" data-placement="right">
                                                                <input id="product_id{{ $item->id }}" type="checkbox" name="products[{{$key}}][download]">
                                                                <label for="product_id{{ $item->id }}"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label>
                                                                <img src="{{ $item->thumbnail }}" alt="" title=""class="img-thumbnail">
                                                                <input type="hidden" name="products[{{$key}}][meli_id]" value="{{ $item->id }}">
                                                                <input type="hidden" name="products[{{$key}}][picture]" value="{{ $item->thumbnail }}">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <a href="">{{ $item->title }}</a>
                                                                    <input type="hidden" name="products[{{$key}}][name]" value="{{ $item->title }}">
                                                            </span>
                                                        </td>
                                                        <td>
                                                            {{ $item->available_quantity }}
                                                            <input type="hidden" name="products[{{$key}}][stock]" value="{{ $item->available_quantity }}">
                                                        </td>
                                                        <td>
                                                            {{ number_format($item->price , 0 , '.' , ',') }}
                                                            <input type="hidden" name="products[{{$key}}][price]" value="{{ $item->price }}">
                                                        </td>
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($item->stop_time)->format('Y-m-d') }}
                                                            <input type="hidden" name="products[{{$key}}][meli_ends_at]" value="{{ $item->stop_time }}">
                                                        </td>
                                                        <td>{{ $item->condition == 'new' ? 'Nuevo' : 'Usado' }}</td>
                                                        <td>
                                                            @if(count($categories) > 0)
                                                                <div class="form-group media border-dotted">
                                                                    {!! Form::select("products[$key][categories][]",$categories,null,['style' => 'width:100%',
                                                                    'class' => 'select2' , 'multiple' => 'multiple', 'id' => 'selectCategory']) !!}
                                                                </div>
                                                            @else
                                                                No hay categorias en tu tienda
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                {!! Form::close() !!}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <div class="col-md-offset-6 col-md-6 pull-right" style="margin-top: 2%">
                                    <button class="btn btn-primary import">
                                        <i class="fa fa-random  icon-prev" aria-hidden="true"></i>&nbsp;Transferir a Tendaz</button>
                                </div>
                            </div>
                        @else
                            <h3 class="text-center text-info">Upps! No tienes productos asociados a tu cuenta de mercadolibre.</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).on('ready' , function () {
            $('.import').on('click' , function () {
                $(this).html("Importando a tu tienda...&nbsp;<i class='fa fa-spinner fa-pulse fa-fw'></i>");
                $(this).find('.icon-prev').hide();
                $(this).attr('disabled' , true);
                $('#form-import-to-tendaz').submit();
            });
        });
    </script>
@stop