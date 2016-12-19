
<div class="col-md-12" id="international-send">
     <div class="panel panel-default" style="margin-left: 6%; margin-right: 6%">
            <div class="panel-heading" >
                <h4 class="panel-title">Configurar locales</h4>
                <div class="panel-toolbar text-right">
                    <div class="option">
                        <a href="#" style="color: white;" class="btn demo" data-toggle="modal" data-target="#nuevo_local"
                           onclick="$('#modificar').hide();$('#agregar').show();" ng-click="local = {}; showEditLocal = false">
                         <i class="fa fa-plus" style="color: white;"></i> Agregar nuevo local</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Nombre del local</th>
                        <th class="text-center">Detalle del local</th>
                        <th class="text-center">Eliminar</th>
                        <th class="text-center">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center" pagination-id="local"  dir-paginate="local in locals | filter:search | itemsPerPage: 10 ">
                        <td>@{{ local.name }}</td>
                        <td>@{{ local.description }}</td>
                        <td>
                            <button type="submit" class="btn btn-danger" ng-click="deleteLocal(local)">
                                <i class="fa fa-trash"></i></button>
                        </td>
                        <td>
                            <button  class="btn btn-primary"  ng-click='editLocal(local)' data-toggle="modal" data-target="#nuevo_local">
                                <i class="fa fa-pencil"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>

                @include('admin.partials.local.modal')
            </div>
         <center>
             <dir-pagination-controls boundary-links="true" pagination-id="local" on-page-change="pageChangeHandler(newPageNumber)" >
             </dir-pagination-controls>
         </center>
        </div>
    </div>