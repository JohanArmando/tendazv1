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

        </div>
        <div class="panel-body mercadolibre">
          <div class="col-md-12 text-center">
            <div class="col-md-12">
              <img src="{{asset('tendaz/img/mercadotendaz.png')}}" width="50%">
              <h4 align="center"><strong>Hemos asociado tu tienda con tu cuenta en MercadoLibre</strong></h4>
              <p>Ahora puedes importar los productos de dercadolibre o exportarlos directamente a tu tienda</p>
            </div>
            <div class="row">
              <div class="col-md-2">

              </div>
              <div class="col-md-4">
                <button data-href="{{ url('admin/mercadolibre/import')  }}" class="btn btn-primary mercadolibreButtom btn-block"><i class="fa fa-download icon-prev" aria-hidden="true"></i>&nbsp;Importar  a mi tienda.</button>
              </div>
              <div class="col-md-4">
                <button style="margin-left: 10%"  class="btn btn-primary mercadolibreButtom btn-block" ng-click="mostrarExportar()"><i class="fa fa-upload icon-prev" aria-hidden="true"></i>&nbsp;Exportar a Mercadolibre.</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END-->

    <div class="col-md-12" >
      <div class="container-fluid">
        <div class="row  nopad">

          <div class="col-md-10 col-md-offset-1 panel panel-default nopad" ng-show="exportShow">
           <label>
            <input type="text" class="form-control medcadolibre_search_bar" ng-model="search.name" placeholder="Buscar">
          </label>
          <div class="container-fluid" >
            <div class="row">
              <div class="col-md-12 header_mercadolibre_list">
               <div class="col-lg-4 left_bar_header_mercadolibre orange ">
                 <span>Elige los productos para exportar</span>
                 <div></div>
               </div>
               <div class="col-lg-8  R_bar_header_mercadolibre" >
                 <span>Editar productos para publicar en mercado libre</span>
               </div>
             </div>
           </div>
         </div>
         <div class="container-fluid">
           <div class="row">
             <div class="col-md-12 bottom_border selectedProduct-@{{producto.visible}}" ng-repeat="(key,producto) in productos | filter:search:strict">
               <div class="container-fluid">
                 <div class="row ">
                   <div class="col-lg-4  right_border">
                     <div class="container-fluid nopad">
                       <div class="row nopad">
                         <div class="col-md-7 nopad container_image_mercado visible-@{{producto.visible}}" ng-click="seleccionado(producto)"  >
                          <img  class="img-responsive img_mercado_libre" ng-src="@{{producto.image}}">
                          <div class="img_mercadi_libre_selecc" >
                           <div class="boton_mercadolibre_selecc" ng-show="visibleSelecctionado"><span>Producto listo</span></div>
                           <div class="boton_mercadolibre_nonselecc" ><span>Preparar</span></div>
                         </div>
                       </div>
                       <div class="col-md-5 max_h_mercado_producto" >
                        <h3 class="text_title">@{{producto.name}}</h3>
                        <p class="text_description">@{{producto.description}}</p>
                        <div class="col-md-12">
                         <div class="container-fluid nopad">
                           <div class="row nopad">
                             <div class="col-md-12 nopad text-left price_title">
                               <p class="price_title_absolute">Precio</p>
                             </div>
                             <div class="col-md-12 price nopad">
                               <p>
                                 $@{{producto.price}}
                               </p>
                             </div>
                             <div class="col-md-12 price nopad new_price">
                               <p>
                                 $@{{producto.promotion_price}}
                               </p>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>

                   </div>
                 </div>
               </div>
               <div class=" col-lg-8 container_r_nine" ng-if="producto.visible == true">
                 <div class="container-fluid">
                   <div class="row">
                     <div class="col-md-12">
                       <div class="container-fluid">
                         <div class="row">
                           <div class="col-md-12 ">
                             <div class="container-fluid">
                               <div class="row">
                               
                               
                                 <button class="col-lg-3 contenedor_boton_seleccionar"
                                 ng-click="enviarSeleccion(producto)">Agregar</button>
                                <button class="col-lg-1 contenedor_boton_seleccionar contenedor_boton_cancelar" ng-click="cancelarSeleccion(producto)">X</button>
                              <div class="col-lg-5 validator_messages"></div>
                                 <button class="col-lg-2 container_button"  ng-show="avisosComplete == key">
                                   <img class="" src="{{ url('') }}/images/mercadolibre/aprobar.png">
                                 </button>
                                 <div class="col-lg-1">
                                 <div ng-show="pinner_loading" class="spinner_loading">
<i class="glyphicon glyphicon-refresh"></i></div>
                               </div>
                                 <!-- <button class="col-lg-2 container_button" ng-show="avisosWarning(key)">
                                   <img class="" src="{{ url('') }}/images/mercadolibre/faltantes.png">
                                 </button> -->


                               </div>
                             </div>

                           </div>
                         </div>
                       </div>
                     </div>
                   </div>

                 </div>
                 <div class="container-fluid">
                   <div class="row text-center row_1">
                     <div class="col-md-4">
                     <!-- <button ng-click="prueba(key)">Clickeame</button> -->
                       <input id="new_input_text" class="form-control" type="text" name="" placeholder="STOK">
                     </div>
                     <div class="col-md-4">
                       <input id="new_input_text" class="form-control" type="text" name="" placeholder="STOK">
                     </div>
                     <div class="col-md-4 public_text_cost">
                       <span class="">Costo por publicación</span>
                     </div>
                   </div>
                   <div class="row text-center  row_2" >
                     <div class="col-md-3">
<<<<<<< HEAD
                       <select ng-disabled="principal" class="form-control select_supercat" ng-change="selectCat(categoria,producto)" ng-init="categoria = categories[1]" 
=======
                       <select ng-disabled="principal" class="form-control select_supercat" ng-change="selectCat(categoria)" ng-init="categoria = categories[1]" 
>>>>>>> 1b073c0dc83dfa11c62433d50e0d6cb5e6ddc41b
                       ng-model="categoria" 
                       ng-options="option.name for option in categories">
                     </select>
 <span class="pointer" ng-click="clearCat()" ng-show="editPrincipal">editar</span>

                   </div>
                   <div class="col-md-3" ng-if="SelectCategories " ng-repeat="(key,subcat) in SelectCategories" >
                   <select class="form-control select_supercat" ng-change="selectCatSucat(categoria,key)" ng-init="categoria = sel[$index]" 
                    ng-model="categoria" 
                    ng-options="option.name for option in subcat.children_categories" >
                    <option value="">--Seleccione una--</option>
                  </select>
                  <i class="glyphicon glyphicon-ok" ng-class="checkedItem" ng-if="$last"></i>
                  </br>
                  
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
</div>
</div>       


   <div class="col-md-10 col-md-offset-1 sample-show-hide" ng-show="showProducts">
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


<!-- Modal view invoice-->
<div id="modal_invoice" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3" style="border: 1px solid; color: red;">
            <div style="margin-bottom: 80px;"></div>
          </div>
        </div>
        <div class="clearfix"></div>
        <br>
        <div style="border-bottom: 2px solid; color: grey;"></div>
        <div class="clearfix"></div>
        <br>
        <div class="row">
          <div class="col-sm-6">

            <p>Nombre del Cliente</p>
            <p>Fecha: 12/12/12</p>
            <p align="justify">Direccion:
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </p>
          </div>
          <div class="col-sm-6">
            <p align="right">
              Nº de Factura: 1121232435467890
            </p>
          </div>
        </div>
        <div style="border-bottom: 2px solid; color: grey;"></div>
        <br>
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-responsive tbl_invoice" style=" height: 300px;">
              <thead>
                <tr>
                  <th style="width: 10%;"><strong>Cant.</strong></th>
                  <th style="width: 80%;"><strong>Descripcion</strong></th>
                  <th style="width: 20%;"><strong>Importe </strong></th>
                </tr>
              </thead>
              <tbody style="overflow-y: scroll; height: 200px; width: 97%; position: absolute;">
                <tr style="width: 100%; display: inline-table;">
                  <td>1</td>
                  <td>
                    <p align="justify">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </td>
                  <td>
                    <strong>$123.456</strong>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>
                    <p align="justify">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </td>
                  <td>
                    <strong>$123.456</strong>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>
                    <p align="justify">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </td>
                  <td>
                    <strong>$123.456</strong>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>
                    <p align="justify">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </td>
                  <td>
                    <strong>$123.456</strong>
                  </td>
                </tr>
              </tbody>
            </table>
            <p align="right">
              <strong>Total</strong>
              $123.456
            </p>
          </div>
          <div id="line_horizontal"></div>
          <div>
            <div class="text-center">
              <button id="btn-invoices" type="button" class="btn btn-primary"><i class="fa fa-download"></i> Exportar en PDF</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END-->


<script type="text/ng-template" id="/ui-tree-select.html">   
  <ui-select
  ng-model="model.$selected"
  ui-select-focuser
  theme="selectize">
  <ui-select-match placeholder="Select a group">
    @{{ $select.selected.title }}
  </ui-select-match>

  <ui-select-choices repeat="group in groups | filter: $select.search">
    <div>
      <span ng-bind-html="group.title | highlight: $select.search"></span>
      <span ng-bind-html="'('+group.size+' users)'"></span>
      <a href
      ng-show="group.parent"
      class="goto-child-group"
      ng-click="loadChildGroupsOf(group, $select)">
      <i class="fa fa-angle-right"></i>
    </a>
  </div>
</ui-select-choices>
</ui-select>
</script>

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