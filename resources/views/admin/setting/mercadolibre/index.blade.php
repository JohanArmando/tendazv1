@extends('admin.template')
	@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('admin/css/custom_tendaz.css')}}">
<link rel="stylesheet" href="{{ asset('admin/css/mercadolibre.css') }}" media="screen"  charset="utf-8">
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
    <div class="content" ng-app="MyAppMercadoLibre">
        <div class="row" ng-controller="MercadoLController">
            @include('admin.partials.message')
            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="col-md-6">
                            <h5><strong>Mercadolibre & Tendaz</strong></h5>
                        </div>
                    </div>

<<<<<<< HEAD
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
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                            <div class="col-md-6">
                                <h5><strong>Asocia tu Mercadolibre</strong></h5>
                                </div>
                            </div>
                            
=======
                </div>
                <div class="panel-body mercadolibre">
                    <div class="col-md-12 text-center">
                        <div class="col-md-12">
                            <img src="{{asset('tendaz/img/mercadotendaz.png')}}" width="50%">
                            <h4 align="center"><strong>Hemos asociado tu tienda con tu cuenta en MercadoLibre</strong></h4>
                            <p>Ahora puedes importar los productos de dercadolibre o exportarlos directamente a tu tienda</p>
>>>>>>> 5af0b75e734e41f100d07d7fb77b0ef7df32ba39
                        </div>
                        <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-4">
                                <button data-href="{{ url('admin/mercadolibre/import')  }}" class="btn btn-primary mercadolibreButtom btn-block"><i class="fa fa-download icon-prev" aria-hidden="true"></i>&nbsp;Importar  a mi tienda.</button>
                            </div>
                            <div class="col-md-4">
                                <button style="margin-left: 10%"  class="btn btn-primary mercadolibreButtom btn-block" ng-click="exportar()"><i class="fa fa-upload icon-prev" aria-hidden="true"></i>&nbsp;Exportar a Mercadolibre.</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-12">
        <div class="container-fluid">
          <div class="row  nopad">
         
            <div class="col-md-8 col-md-offset-2 panel panel-default nopad">
             <label>
                <input type="text" class="form-control" ng-model="search.name" placeholder="Buscar">
            </label>
               <div class="row text-center">
             <button class="btn btn-primary  "  ng-click="sendToBack()">Exportar</button>
             <div class="col-md-12 divider_mercadolibre"></div>
             <button class="btn btn-danger " ng-click="cancelSend()" >Cancelar</button>
           </div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default colapsable_panel"  ng-repeat="producto in productos | filter:search:strict">
    <div class="panel-heading" role="tab"  id="heading@{{producto.id}}">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse@{{producto.id}}" aria-expanded="true" aria-controls="collapseOne">
          @{{producto.name}} | $@{{producto.price}}
        </a>
      </h4>
    </div>
    <div id="collapse@{{producto.id}}" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading@{{producto.id}}">
      <div class="panel-collapsebody">
       <div class="container-fluid">
         <div class="row">
           <div class="col-md-3">
             <img class="img-responsive img_mercado_libre" ng-src="@{{producto.image}}">
           </div>
           <div class="col-md-3">
             <h4>Descripción</h4>
             <p>@{{producto.description}}</p>
           </div>
           <div class="col-md-4 img_mercado_libre">
           <label class="row">
             <p class="col-md-6"><b>Precio</b></p>
             <p class="col-md-6">@{{producto.price}}</p>
           </label>
             <label class="row">
               <p class="col-md-6"><b>Promoción</b></p>
             <p class="col-md-6">@{{producto.promotion_price}}</p>
             </label>
             <label class="row">
               <p class="col-md-6" ><b>Stock</b></p>
               <p class="col-md-6" ng-show="edition"><input type="number" class="col-md-12" ng-model="productVal"  name=""></p>
             <p class="col-md-6" ng-show="nonEdition" ng-if="producto.stock > 0"> @{{producto.stock}}</p>
             <p class="col-md-6" ng-show="nonEdition" ng-if="producto.stock <= 0"> Infinito</p>
            <!--  <span class="col-md-12 " ng-if="producto.stock < 0 || producto.stock > 3 "><b>Plan: </b>(Gratuito)</span>
             <span class="col-md-12 " ng-if="producto.stock > 4 || producto.stock < 12" ><b>Plan: </b>(Bronce-Gratuito)</span> -->
              <span class="col-md-12 gratuito" ng-if="producto.stock <  5 "><b>Plan: </b>(Gratuito)</span>
             <span class="col-md-12 gratuito_bronce" ng-if="producto.stock > 5 " ><b>Plan: </b>(Bronce-Gratuito)</span>
             </label>
             <label class="row">
               <p class="col-md-12"><b>Finalización</b></p>
              <div class="col-md-12">17/11/2016</div> 
             </label>
             
             

           </div>
           <div class="col-md-2 img_mercado_libre">
           <div class="row">
             <button class="btn btn-primary boton_mercano_layer" ng-show="nonEdition" data-toggle="tooltip" data-placement="top" title="Agregar a lista de exportación de mercadolibre" ng-click="agregarALista(producto)">Agregar a lista</button>
              <button class="btn btn-primary boton_mercano_layer"  ng-show="edition" ng-click="aceptarEdicion()">Aceptar</button>
             <div class="col-md-12 divider_mercadolibre"></div>
             <button ng-click="editar(producto)" ng-show="nonEdition" class="btn btn-default col-md-12 boton_mercano_layer" data-toggle="tooltip" data-placement="top" title="Edita los datos antes de exportar">Editar</button>
              <button ng-click="cancelarEdicion(producto.stock)" ng-show="edition" class="btn btn-danger col-md-12 boton_mercano_layer" data-toggle="tooltip" data-placement="top" title="Cancelar edición">Cancelar</button>
           </div>
             
           </div>
         </div>
       </div>
      </div>
    </div>
  </div>
</div>
            </div>
          

          </div>
        </div>
</div>          <div class="col-md-8 col-md-offset-2 sample-show-hide" ng-show="showProducts">
          	<div class="container-fluid">
          		<div class="row">
          			<div class="col-md-12">
          				<table class="table"> <caption></caption> 
          				<thead>
          				 <tr> 
          				  <th class="text-center">Imagen</th> 
          				  <th class="text-center">Producto</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Precio promocional</th>
          				   <th class="text-center">Stock</th>          				   
          				   <th class="text-center">Fecha de fianlizacion</th>
          				   <th class="text-center">Condicion</th>
  <th class="text-center">categoria tendaz</th>
          				    </tr> 
          				    </thead>
          				     <tbody>
          				      <tr> 
          				       <td><img class="img-list_responsive img-responsive" src="tema5/images/custom/banner-07.jpg"/></td> 
          				       <td><a href="#">producto</a></td>
          				        <td>stock</td>
          				        <td>stock</td>
          				        <td>stock</td>
          				        <td>stock</td>
          				        <td>
                          <select  name="mySelect" id="mySelect"
      ng-options="categoria.name for categoria in categories track by categoria.id"
      ng-change="printdata()" ng-model="data.category"></select>
                         
</td>

          				         </tr>
          				         
          				         
          				         
          				             
          				                   </tbody>
          				                    </table>
          			</div>
          		</div>
          	</div>
          </div>
        </div>
    </div>
		@endsection
	@section('scripts')
  <script src="http://a248.e.akamai.net/secure.mlstatic.com/org-img/sdk/mercadolibre-1.0.4.js">
  </script>
<script type="text/javascript" src="{{ asset('admin/angular/latest1/angular.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/angular/moduloMercadoLibre.js') }}"></script>
<script type="text/javascript">
// A $( document ).ready() block.
$( document ).ready(function() {
   $('[data-toggle="tooltip"]').tooltip();
});
</script>
		@stop