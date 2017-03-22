@extends(Theme::current()->viewsPath.'.template')
    @section('css')
            <style type="text/css">
              .tags a{border:1px solid #DDD;display:inline-block;color:#717171;background:#FFF;-webkit-box-shadow:0 1px 1px 0 rgba(180,180,180,0.1);box-shadow:0 1px 1px 0 rgba(180,180,180,0.1);-webkit-transition:all .1s ease-in-out;-moz-transition:all .1s ease-in-out;-o-transition:all .1s ease-in-out;-ms-transition:all .1s ease-in-out;transition:all .1s ease-in-out;border-radius:2px;margin:0 3px 6px 0;padding:5px 10px}
        .tags a:hover{border-color:#08C;}
        .tags a.primary{color:#FFF;background-color:#428BCA;border-color:#357EBD}
        .tags a.success{color:#FFF;background-color:#5CB85C;border-color:#4CAE4C}
        .tags a.info{color:#FFF;background-color:#5BC0DE;border-color:#46B8DA}
        .tags a.warning{color:#FFF;background-color:#F0AD4E;border-color:#EEA236}
        .tags a.danger{color:#FFF;background-color:#D9534F;border-color:#D43F3A}
        .item{color: #337AB7}
            </style>
    @stop

    @section('content')
    <div style="margin-top: 10px;"></div>
       <div class="container" ng-controller="UserController">
        <div class="row">
        <!-- profile -->
          <div class="col-md-3 col-md-offset-4 col-sm-12 col-xs-2 text-center" >
            <div class="panel panel-default panel-content">
              <div style="margin-top: 10px;"></div>
                  <img src="http://placehold.it/150x150" alt="" class="hidden img-circle" />
                    <br>
                <h3><strong> <% user.personal_info.first_name %> <% user.personal_info.last_name %></strong></h3>
                <h5><span class="item">Email:</span> <span><% user.email %></span></h5>
                <h5><span class="item">Telefono:</span> <span><% user.personal_info.phone %></span></h5>
                <h5><span class="item">Identidicaci&oacute;n:</span> <span><% user.personal_info.identification %></span></h5>
                    <div style="margin-bottom: 20px;"></div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalActualizar"
                            style="color: white;">
                        <i class="fa fa-edit"></i> Editar perfil
                    </button>
                <div style="margin-bottom: 18px;"></div>
            </div>
          </div>

        <!-- adresss -->
            <div class="col-md-12 col-sm-12 col-xs-12" ng-controller="AddressController">
                @include('themes.default.partials.edit-dir')
                <div class="row panel panel-default panel-content">
                    <div style="margin: 15px 15px 15px 15px">
                    <div class="">
                        <h4>Direcciones</h4>
                        <hr>
                    </div>
                    <table class="table table-responsive panel-body">
                        <tbody>
                            <tr>
                                <th>Direccion</th>
                                <th>Complemento</th>
                                <th>Estado</th>
                                <th class="text-center">Principal</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                            <tr ng-repeat="address in addresses">
                                <td><% address.street %></td>
                                <td>
                                    <% address.complement %>
                                </td>
                                <td>
                                    <p align="justify">
                                        <% address.state.name %> - <% address.city.name %>
                                    </p>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-xs" ng-click="main( $index)" ng-class=" address.isPrimary ? 'btn-primary' : 'btn-default'" href="">
                                        <i class="fa" ng-class=" address.isPrimary ? 'fa-eye' : 'fa-eye-slash'"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <button type="button" data-target="#modalAddress" data-toggle="modal" class="btn btn-warning btn-xs" ng-click="edit( $index)">
                                        <i class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                    </tbody>
                    </table>
                    <div class="col-md-12">
                      <hr>
                      Al seleccionar <a class="btn btn-xs btn-primary" href=""><i class="fa fa-eye"></i></a>
                        dejaras esta direcci&oacute;n como direccion principal.
                    </div>
                    <div class="col-md-12">
                      <div class="pull-right" style="margin-bottom: 20px"><br>
                      <button  ng-click="created()" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddress">
                        <i class="fa fa-plus"></i> Agregar Nueva Direccion
                      </button>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
       </div>

       <div class="clearfix"></div>
       <div style="margin-bottom: 100px;"></div>
       <!--MODAL ACTUALIZAR DATOS CLIENTES-->
        <div id="modalActualizar" class="modal fade" tabindex="-1" role="dialog" ng-controller="UserController">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aira-label="Close">
                            <span aira-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><strong>Actualizacion de Datos</strong></h4>
                    </div>
                    <div class="modal-body">
                        <form name="profileForm" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal"
                              ng-submit="doUpdateProfile(profileForm)" novalidate>
                        <div class="alert alert-danger" ng-repeat="error in errors" ng-show="errors" class="error"><% error %></div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-6 form-group">
                                <label>Nombres</label>
                                <input type="text" class="form-control" name="name" ng-model="user.personal_info.first_name">
                            </div>
                            <div class="col-md-6 form-group" style="margin-left: 10px">
                                <label>Apellidos</label>
                                <input type="text" class="form-control"  name="last_name" ng-model="user.personal_info.last_name">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" name="phone" ng-model="user.personal_info.phone">
                            </div>
                            <div class="col-md-6 form-group" style="margin-left: 10px">
                                <label>Identificaci&oacute;n</label>
                                <input type="text" class="form-control" name="phone" ng-model="user.personal_info.identification">
                            </div>
                            <div class="hidden col-xs-6 form-group">
                                <style type="text/css">
                                    input[type="file"]{
                                        display: none;
                                    }
                                    .custom-file-upload{
                                        border: 1px solid #ccc;
                                        display: inline-block;
                                        padding: 6px  12px;
                                        cursor: pointer;
                                    }
                                </style>
                                <div class="clearfix"></div>
                                <div style="margin-top: 2px;"></div>
                                <label>Imagen de Perfil</label>
                                <div class="form-group">
                                    <label for="file-upload" class="custom-file-upload">
                                        <i class="fa fa-upload"></i> Carga foto de Perfil
                                    </label>
                                    <input id="file-upload" type="file"/>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary updateProfile"> <i class="fa fa-edit"></i> Guardar Cambios</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <!--FIN-->
        @endsection
    @section('script')
        <script>
        </script>
        @stop
