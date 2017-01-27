@section('title')
Estadisticas basicas
@stop
@extends('layouts.administrator')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/flot/css/flot.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/datatables/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('administrator/css/custom_tendaz.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('administrator/css/styleDatabase.css')}}">
<style>
    thead{display: none}
</style>
@stop

@section('content')
	<div class="page-header page-header-block">
		<div class="page-header-section">
        <h4 class="title">
            <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/bar-chart.png')}}">&nbsp; Estadisticas basicas  
        </h4>
    </div>
		<div class="page-header-section">
 			<div class="toolbar">
				<ol class="breadcrumb breadcrumb-transparent nm">
					<li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
					<li><a href="{{url('#')}}" style="color: orange;">Estadísticas Basicas</a></li>
				</ol>
			</div>
		</div>
	</div>
    <div class="row">
        <div class="col-md-12">
            <div class="widget panel text-center">
                <blockquote>
                  <p style="margin-top: 10px">Estadisticas del Ultimo Mes</p>
                </blockquote>
            </div>
        </div>
    </div>
	<div class="row">
            <div class="col-lg-4">
                 <div class="widget panel" style="background-color: #85ab2a;color: white">
                     <div class="panel-body">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="text-center">
                                     <p class="semibold" style="font-size: 20px;margin-top: 10px">Ventas</p>
                                     <h1 class="semibold"><span class="">${{ number_format($sold , 0) }}</span></h1>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <img src="{{asset('administrator/image/statsBasic/dinero.png')}}" class="img-responsive" style="margin-top: 15px; max-height:120px " alt="">
                             </div>
                         </div>
                    </div>
                 </div>
             </div>

            <div class="col-lg-4">
                 <div class="widget panel bgcolor-tendaz">
                     <div class="panel-body" >
                         <div class="row">
                             <div class="col-md-6">
                                <div class="text-center">
                                    <p class="semibold" style="font-size: 20px;margin-top: 10px">Ordenes</p>
                                    <h1 class="semibold"><span class="">{{ number_format($ordersTotal , 0) }}</span></h1>
                                </div>
                             </div>
                             <div class="col-md-6">
                                 <img src="{{asset('administrator/image/statsBasic/ordenes.png')}}" class="img-responsive" style="margin-top: 2px; max-height:120px " alt="">
                             </div>
                         </div>
                    </div>
                 </div>
             </div>
            <div class="col-lg-4">
                 <div class="widget panel" style="background-color: #2a85ab;color: white">
                     <div class="panel-body" >
                         <div class="row">
                             <div class="col-md-6">
                                <div class="text-center">
                                    <p class="semibold" style="font-size: 20px;margin-top: 10px">Facturaci&oacute;n</p>
                                    <h1 class="semibold"><span class="">${{ number_format($average , 0) }}</span></h1>
                                </div>
                             </div>
                             <div class="col-md-6">
                                 <img src="{{asset('administrator/image/statsBasic/factura.png')}}" class="img-responsive" style="margin-top: 8px; max-height:120px;margin-left: 15px" alt="">
                             </div>
                    </div>
                 </div>
             </div>
         </div>
    </div>

         <div class="row">
         	        <div class="col-lg-6">
                        <div class="widget panel">
                            <div class="panel-body">
                                <ul class="list-table">
                                    <li style="width: 75%"><h4 class="semibold nm text-left">Productos con mayor facturaci&oacute;n</h4></li>
                                </ul>
                            </div>
                            <div class="panel-footer">
                                <table class="table-responsive list-table table-products" id="statics-products">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($higherBilling as $higher)
                                        <tr>
                                            <td><b>{{ ucfirst(strtolower($higher['name'])) }}</b></td>
                                            <td class="text-tendaz-green">$ {{ number_format(($higher['total'] * $higher['count'] ),2,',','.') }}</td>
                                            <td align="center">
                                                @foreach($images as $image)
                                                    @if($image->variant_id == $higher->variant_id)
                                                    <img class="img-circle" src="{{$image->url}}" width="50px" height="50px" alt="">
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    </hr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="widget panel">
                             <div class="panel-body">
                                <ul class="list-table">
                                    <li style="width: 75%"><h4 class="semibold nm text-left">Productos m&aacute;s vendidos</h4></li>
                                </ul>
                             </div>
                             <div class="panel-footer">
                               <table class="table-responsive list-table table-products" id="statics-products-2" >
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($higherSell as $mas)
                                        <tr>
                                            <td><b>{{ ucfirst(strtolower($mas['name'])) }}</b></td>
                                            <td>{{ $mas['total'] }} Ventas</td>
                                            <td align="center">
                                                @foreach($images as $image)
                                                    @if($image->variant_id == $mas->variant_id)
                                                        <img class="img-circle" src="{{$image->url}}" width="50px" height="50px" alt="">
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                         </div>
                    </div>
        </div>
        <div class="clearfix"></div>
        <div class="page-end-space"></div>
       </div>

@endsection
@section('scripts')
<script src="{{asset('administrator/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript">
 $(document).ready(function() {
     $('#statics-products').dataTable({
                 "pageLength": 5,
                 "order": [],
                 "language": {
                            "search": "Buscar: ",
                            "lengthMenu":     "Mostrar _MENU_ resultados",
                            "info":           "Mostrando _START_ a _END_ de _TOTAL_ Productos",
                            "infoEmpty":      "Mostrando 0 a 0 de 0 Resultados",
                            "paginate": {
                                "first":      "Primero",
                                "last":       "Ultimo",
                                "next":       "Siguiente",
                                "previous":   "Anterior",
                                
                            }
                        }
              });
});

 
</script>
<script type="text/javascript">
$(document).ready(function() 
{
     $('#statics-products-2').dataTable({
                 "pageLength": 5,
                 "order": [],
                 "language": {
                            "search": "Buscar: ",
                            "lengthMenu":     "Mostrar _MENU_ resultados",
                            "info":           "Mostrando _START_ a _END_ de _TOTAL_ productos",
                            "infoEmpty":      "Mostrando 0 a 0 de 0 resultados",
                            "paginate": {
                                "first":      "Primero",
                                "last":       "Ultimo",
                                "next":       "Siguiente",
                                "previous":   "Anterior",
                                
                            }
                        }
              });
});
</script>
@stop