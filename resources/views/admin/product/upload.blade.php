@extends('layouts.administrator')
@section('css')
@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class=""></i>&nbsp; Importat / Exportar Productos</h4>
        </div>
        <div class="page-header-section">
            <!--Toolbar-->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin/home')}}" style="color: darkgrey;">Inicio</a></li>
                    <li class="active"><a href="#" style="color: orange;">importar/exportar productos</a></li>
                </ol>
            </div>
        </div>
    </div>
    <br>
    <h4><strong>Columnas del archivo</strong></h4>
    <p>Indica como debemos interpretar  las columnas del archivo que subiste.</p>
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <form action="{{ url('admin/products/import/commit') }}" method="POST">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <table class="table table-responsive table-hover table-striped" style="width: 70%;">
                    <tbody>
                    <?php $i = 0; ?>
                    <?php $k = 0; ?>
                    @foreach($reader as $key => $c)
                        <tr>
                            <td><label>{{ $key }}</label></td>
                            <input type="hidden" value="{{ $key }}" name="columna[{{$k++}}]">
                            <td>
                                <select name="map[{{$i++}}]" id="col0" class="form-control">
                                    <option value="ignore">Ignorar esta columna</option>
                                    <option value="slug">Identificador de URL</option>
                                    <option value="name">Nombre</option>
                                    <option value="categories">Categor&iacute;as</option>
                                    <option value="option_name_1">Nombre de propiedad 1</option>
                                    <option value="option_value_1">Valor de propiedad 1</option>
                                    <option value="option_name_2">Nombre de propiedad 2</option>
                                    <option value="option_value_2">Valor de propiedad 2</option>
                                    <option value="option_name_3">Nombre de propiedad 3</option>
                                    <option value="option_value_3">Valor de propiedad 3</option>
                                    <option value="price">Precio</option>
                                    <option value="price_promotion_amount">Precio promocional</option>
                                    <option value="weight">Peso</option>
                                    <option value="stock">Stock</option>
                                    <option value="sku">SKU</option>
                                    <option value="publish">Mostrar en tienda</option>
                                    <option value="shipping_free">Env&oacute;o sin cargo</option>
                                    <option value="description">Descripci&oacute;n</option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <input type="hidden" name="file" value="{{ $fileName }}">
                <div class="text-left">
                    <button type="submit" class="btn btn-primary">Importar productos</button>
                    <button type="button" class="btn btn-default">Cancelar</button>
                </div>
            </form>
        </div>

    </div>
    <br>
    <br>
@endsection
@section('scripts')
@stop