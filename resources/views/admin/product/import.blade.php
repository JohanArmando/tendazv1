@section('title')
Exportar e importar productos
@stop
@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/selectize/css/selectize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/select2/css/select2.css')}}">
@stop
@section('content')
<div class="page-header page-header-block">
    <div class="page-header-section">
            <h4 class="title">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/import.png')}}">&nbsp; Importar / Exportar
            </h4>
    </div>
    <div class="page-header-section">
        <!--Toolbar-->
        <div class="toolbar">
            <ol class="breadcrumb breadcrumb-transparent nm">
                <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                <li><a href="{{url('admin/products')}}" style="color: orange;">Productos</a></li>
                <li style="color: orange;">Importar-Exportar</li>
            </ol>
        </div>
    </div>
</div>
<!-- START row -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="ico-file-download"></i> Exportar productos</h3>
            </div>               
            <div class="panel-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="control-label">Descargaras un .csv con todos los productos en tu tienda al cual podras agregar nuevos productos e importar de manera masiva.<span class="text-danger">*</span></label>
                            <div style="margin-bottom: 10px;"></div>
                            <!--Select multiple de categories-->
                                <select name="multiple_categorias" id="categorias"  class="form-control" placeholder="selecciona tu categorias" multiple>
                                    <option value="all"><strong>Todas las Categorias</strong></option>
                                        @foreach($categories as $key => $category)
                                            <option value="{{$key }}">{{ $category }}</option>
                                        @endforeach
                                </select>
                            <!--Fin-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div style="margin-left: 4%" id="gif-download"><i class="fa fa-cog fa-spin fa-4x"></i></div>
                <a  class="btn btn-primary" id="export"><i class="fa fa-download"></i> Descargar</a>
            </div>
        </div>

        <form class="panel panel-default" action="{{ url('admin/products/import/upload') }}" method="POST" enctype="multipart/form-data">
         <input type="hidden" value="{{ csrf_token() }}" name="_token">
         <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-upload"></i>  Importar productos</h3>
        </div>               
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <p align="justify">
                            Sube el archivo Excel (.csv) del paso anterior con los nuevos productos y/o la actualización de los mismos, para importarlos en tu tienda.
                        </p>
                        <!--<label class="control-label">Sube el archivo Excel (.csv) del paso anterior con los nuevos productos y/o la actualización de los mismos, para importarlos en tu tienda.<span class="text-danger">*</span></label>-->
                        <div style="margin-bottom: 15px;"></div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="file" name="import_file" id="input01" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Importar</button>
        </div>
    </form>
</div>

<div class="col-md-6">
    <!-- START panel -->
    <div class="panel panel-default">
        <!-- panel heading/header -->
        <div class="panel-heading">
            <h3 class="panel-title">Description</h3>
            <!-- panel toolbar -->
            <div class="panel-toolbar text-right">
                <!-- option -->
                <div class="option">
                    <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                    <button class="btn" data-toggle="panelremove" data-parent=".col-md-6"><i class="remove"></i></button>
                </div>
                <!--/ option -->
            </div>
            <!--/ panel toolbar -->
        </div>
        <!--/ panel heading/header -->
        <!-- panel body with collapse capabale -->
        <div class="panel-collapse pull out">
            <div class="panel-body">
                <dl>
                   <dt>¿Puede esto borrar mis productos actuales?</dt>
                   <p align="justify">La carga masiva nunca borrará productos existentes. Tampoco actualizará tus productos actuales a menos que explícitamente elijas la opción "Actualizar productos existentes".</p>

                   <dt>¿Cómo debo comenzar?</dt>
                   <p align="justify">
                    Primero debes descargar productos.csv. Esto proveerá el punto de partida para cargar tus propios productos. Descargué productos.csv.
                </p>

                <dt>¿Cómo continúo?</dt>
                <p align="justify">
                    En productos.csv debes ingresar tus productos (siguiendo el ejemplo) o actualizar tus productos actuales. Debes guardarlo en el mismo tipo de archivo (.csv) y luego importarlo en el segundo paso de esta pantalla. En productos.csv hay una columna llamada Identificador de URL.
                </p>
                <dt>¿Qué significa?</dt>
                <p align="justify">
                    Este campo es el que utilizamos para identificar a cada producto. Podrás modificar el Nombre del producto y mientras no se modifique su Identificador de URL sabremos que se trata del mismo producto.

                    También este identificador será la dirección (url) del producto en tu tienda y por eso este campo no debe contener  caracteres extraños ni espacios. Por ejemplo, un producto con Identificador de URL camisa-azul tendrá la dirección marioan.mitiendanube.com/productos/camisa-azul.

                    Este campo no debe ser modificado en productos existentes. Si encontramos un Identificador nuevo que antes no existía, lo trataremos como un nuevo producto y guardaremos toda esa linea de productos.csv como nuevo producto.
                </p>

                <dt>¿Cuál es el límite máximo de productos nuevos que puedo ingresar?</dt>

                <p align="justify">Esto depende de tu plan actual.</p>

                <dt>¿Me notifican si la carga y/o actualización fue exitosa?</dt>
                <p align="justify">
                    Finalizado el segundo paso, te enviaremos un email. En el mismo se detallará si el proceso fue exitoso, y en caso de haber sucedido algún inconveniente explicaremos en qué lugar de productos.csv encontramos el error para que puedas corregirlo.
                </p>

                <dt>¿Y las imagenes?</dt>

                <p align="justify">
                    Para cargar imagénes de forma masiva, primero debes cargar tus productos y luego puedes utilizar nuestra integración con Dropbox.
                </p>
            </dl>
        </div>
    </div>
    <!--/ panel body with collapse capabale -->
</div>
<!--/ END panel -->
</div>
</div>
<!--/ END row -->
<div class="page-end-space"></div>
</div>
<input type="hidden" id="download-excel" value="{{ url(('admin/products/export?client_secret='.$shop->uuid.'&client_id='.$shop->id )) }}">
<input type="hidden" id="import-excel" value="{{ url(('admin/load/excel')) }}">
<input type="hidden" value="{{ csrf_token() }}" id="token">
<!--/ END row -->
@endsection
@section('scripts')
<script type="text/javascript" src="{{asset('administrator/plugins/selectize/js/selectize.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/plugins/jquery-ui/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/plugins/select2/js/select2.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/plugins/jquery-ui/js/addon/timepicker/
jquery-ui-timepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/plugins/filestyle/js/bootstrap-filestyle.js')}}"></script>
<!-- <script type="text/javascript" src="{{asset('administrator/js/backend/forms/element.js')}}"></script> -->

<script>
    $('#gif-download').hide();
    $('#export').on('click', function (e) {
        e.preventDefault();
        var categoria = $('#categorias').val(); //hize este cambio para probar
        console.log(categoria);
        $.ajax({
            url : $('#download-excel').val(),
            type : 'POST',
            dataType : 'json',
            headers : {
                'X-CSRF-TOKEN' : $('#token').val() ,
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            data : {'categoria' : categoria},
            beforeSend: function () {
              $('#gif-download').show();
              $('#export').hide();
          },
          success : function (response) {
            $('#gif-download').hide();
            $('#export').show();
            var path = response.path;
            location.href = path;
            console.log(response);
        }
    });
    });
</script>

<script type="text/javascript">
   $('select[name=multiple_categorias]').selectize();
</script>

<script type="text/javascript">
    $('#input01').filestyle({
        'placeholder' : 'Solo archivos con extension .xls, csv, xlsx',
        'buttonText' : 'Cargar',
        'buttonName' : 'btn btn-primary',
        'iconName' : 'fa fa-upload'
    });
</script>
@stop
