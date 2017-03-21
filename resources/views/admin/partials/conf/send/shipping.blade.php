<div class="col-md-12" id="local-send">
    <div class="panel panel-default" >
        <div class="panel-heading">
            <h4 class="panel-title">Configuracion de envios para <strong>Colombia </strong> <!--<img src="{{-- asset('flag/'.$country->image) --}}" alt="" title="">-->.</h4>
            <div class="panel-toolbar text-right">
                <div class="option">
                    <a href="#" class="btn demo" data-toggle="modal" data-target="#shppingMethod" ng-click="shipping = {}; showEdit=false" style="color: white;">
                    <i class="fa fa-plus" style="color: white;"></i> Agregar <span class="hidden-xs">Envio Local</span></a>
                </div>
            </div>
        </div>
        <div class="panel-body ng-cloak">
            <div class="table-responsive">
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Nombre de la opcion</th>
                            <th class="text-center">Rango de peso de la compra</th>
                            <th class="text-center">Rango de precio de la compra</th>
                            <th class="text-center">Costo del envio</th>
                            <th>Eliminar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center"   pagination-id="method"  dir-paginate="method in shippingMethods
                                        | filter:search
                                        | itemsPerPage: 10
                                   ">
                            <td>
                               @{{ method.name  }}
                            </td>
                            <td>
                                @{{ method.weight  }}
                            </td>
                            <td>
                                @{{ method.price  }}
                            </td>
                            <td>
                                 $@{{ method.cost | number:0 }}
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger" ng-click="delete(method)">
                                    <strong><i class="fa fa-trash"></i></strong></button>
                            </td>
                            <td>
                                <button  class="btn btn-primary" data-toggle="modal" data-target="#shppingMethod" ng-click='edit(method)'><i class="fa fa-pencil"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <center>
            <dir-pagination-controls boundary-links="true"  pagination-id="method" on-page-change="pageChangeHandler(newPageNumber)" >
            </dir-pagination-controls>
        </center>
    </div>
    @include('admin.partials.conf.shipping.create')
</div>