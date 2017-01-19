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
            <div class="col-md-7 col-sm-12 col-xs-12 hidden">
                <div class="row panel panel-default panel-content">
                    <div style="margin: 15px 15px 15px 15px">
                    <div class="">
                        <h4>Direcciones</h4>
                        <hr>
                    </div>
                    <table class="table table-responsive panel-body">
                        <tbody>
                            <tr>
                              <th>Id</th>
                              <th>Nombre</th>
                                <th>Direcci&oacute;n</th>
                              <th>Telefono</th>
                              <th class="text-center">Principal</th>
                              <th class="text-center">Acciones</th>
                            </tr>
                                <tr>
                                    <td>
                                      <a href="">#1</a>
                                    </td>
                                  <td>
                                      <p align="justify">
                                          NAME
                                      </p>
                                  </td>
                                    <td>
                                        DIRECTION
                                    </td>
                                    <td> PHONE</td>
                                  <td class="text-center">
                                        <a class="btn btn-xs btn-primary" id="si">
                                            <i class="fa fa-eye" id="siFa"></i>
                                        </a>
                                        <a class="btn btn-xs btn-default" href="#" id="no">
                                            <i class="fa fa-eye-slash" id="noFa"></i>
                                        </a>
                                  </td>
                                  <td class="text-center">
                                    <button type="button" class="btn btn-xs btn-warning" data-toggle="modal"
                                            data-target="#modalEditarDireccion">
                                      <i class="fa fa-edit"></i>
                                    </button>
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
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregardireccion">
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

        <!-- orders -->
        <div style="margin-bottom: 10px;"></div>
           <div class="row panel panel-default panel-content">
               <div class="col-md-12">
                   <h2>Mis Ordenes</h2>
                   <div class="row">
                       <div class="col-md-3">
                         <div class="pull-left">
                                <p><strong><i class="fa fa-filter" aria-hidden="true"></i> Filtrar por:</strong></p>
                                <select class="form-control" style="width: 300px;">
                                    <option>Seleccione...</option>
                                    <option>Por Orden</option>
                                    <option>Por Estado</option>
                                    <option>Por Precio</option>
                                </select>
                            </div>
                       </div>
                       <div class="col-md-4 col-md-offset-5 pull-rigth">
                           <p align="rigth"><strong><i class="fa fa-search" aria-hidden="true"></i> Buscar:</strong></p> <input type="text" class="form-control" autofocus>
                       </div>
                   </div>
                   <div style="margin-bottom: 15px;"></div>
                 <table class="table table-responsive table-striped table-hover table-bordered" cellpadding="0" width="100%">
                    <thead>
                           <tr>
                               <th>Orden</th>
                               <th>Fecha</th>
                               <th>Estado</th>
                               <th>Pago</th>
                               <th>Envio</th>
                               <th>Total</th>                               
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td><a href="{{url('order/id')}}" style="color: blue;">#001</a></td>
                               <td>12/10/2016</td>
                               <td><p class="text-success">Entregado</p></td>
                               <td>
                                 <div class="text-center">
                                   efectivo, tarjeta, contraentrega
                                 </div>
                               </td>
                               <td>
                                 <div class="tags text-center">
                                   <a class="success">Entregrado</a>
                                   <a class="warning">En Esperas</a>
                                   <a class="danger">Cancelado</a>
                                 </div>

                               </td>
                               <td>COP $ 123.456</td>
                           </tr>
                           
                       </tbody>   
                   </table>
               </div>

               <div class="text-center">
                    <div class="page-nation">
                        <ul class="pagination pagination-large">
                            <li class="disabled"> <span> Previo </span> </li>
                            <li class="active"> <span>1</span> </li>
                            <li> <span>2</span> </li>
                            <li> <span>3</span> </li>
                            <li> <span>4</span> </li>
                            <li> <span>Siguiente</span> </li>
                        </ul>
                    </div>
                </div>
           </div>
       <div class="clearfix"></div>
       <div style="margin-bottom: 100px;"></div>
        @include('themes.default.partials.createAddress')
        @include('themes.default.partials.edit-dir')
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
           /* if($('#si')) {
                $('#si').on('click', function () {
                    $('#si').removeClass('btn-primary');
                    $('#si').addClass('btn-default');
                    $('#siFa').removeClass('fa-eye');
                    $('#siFa').addClass('fa-eye-slash');
                    $('#si').attr('id', 'no');
                    $('#siFa').attr('id', 'noFa');

                });
            }
            if($('#no')) {
            $('#no').on('click',function(){
                $('#no').removeClass('btn-default');
                $('#no').addClass('btn-primary');
                $('#noFa').removeClass('fa-eye-slash');
                $('#noFa').addClass('fa-eye');
                $('#no').attr('id','si');
                $('#noFa').attr('id','siFa');
            });}*/
        </script>
        @stop