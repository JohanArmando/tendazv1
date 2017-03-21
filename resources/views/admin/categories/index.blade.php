@section('css')
    <link rel="stylesheet" href="{{asset('administrator/css/categories.css')}}">
    <style type="text/css">

        .item {
          cursor: pointer;
        }
        .bold {
          font-weight: bold;
        }
        ul {
          padding-left: 1em;
          line-height: 1.5em;
          list-style-type: dot;
        }
    </style>
@stop
@section('title')
Crear categorias
@stop
@extends('layouts.administrator')
    @section('content')
        <div ng-app="MyApp">
            <div class="page-header page-header-block">
                <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/category.png')}}">
                    &nbsp; Categorias
                </h4>
                </div>
                <div class="page-header-section">
                    <div class="toolbar">
                        <ol class="breadcrumb breadcrumb-transparent nm">
                            <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                            <li class="active" style="color: orange;">Categorias</li>
                        </ol>
                    </div>
                </div>
            </div>

            @include('admin.partials.message')
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Organiza las categorias de tu tienda dependiendo de los productos que vayas a publicar.</strong></h3>
                            </div>

                            <div class="panel-body">
                            <form>
                                <br>
                                <div id="container_lista" ng-controller="Categorias" ng-init="mostrar = 0; msj.title = 'Guardar cambios'; msj.disabled = 0">
                                    @include('admin.partials.edit-category')
                                    <script type="text/ng-template" id="nodes_renderer2.html">
                                        <div class="tree-node">
                                            <div data-tooltip="Modificar Posicion" class="pull-left tree-handle" ui-tree-handle style="margin-left: 15%">
                                                <span class="fa fa-list fa-2x" style="margin-top: 30%" ng-click="cambiar()"></span>
                                            </div>
                                            <div class="tree-node-content">
                                                <div class="row" style="margin: 2% 10% 2% 15%">
                                                    <div class="col-md-1">
                                                        <a data-tooltip="Minimizar Categoria" class="btn-category btn btn-primary btn-lg" data-nodrag ng-click="toggle(this)">
                                                            <span class="glyphicon" ng-class="{
                                                                    'glyphicon-chevron-right': collapsed,
                                                                    'glyphicon-chevron-down': !collapsed
                                                             }">
                                                            </span>
                                                        </a>
                                                    </div>
                                                       <div class="col-md-6">
                                                                 <input type="text" ng-change="cambiar()" ng-model="node.name" class="form-control"
                                                                  style="height: 42px; width: 117%;margin-left: 10px" required>
                                                       </div>
                                                    <div class="col-md-4">
                                                        <a data-tooltip="Agregar Subcategoria" class="pull-right btn btn-edit-category btn-primary btn-lg"  data-nodrag ng-click="newSubItem(this)">
                                                            <span class="fa fa-plus" title="Agregar SubCategorias"></span>
                                                        </a>
                                                        <a data-tooltip="Editar Categoria" class="pull-right btn btn-subcategory btn-primary btn-lg"  data-nodrag ng-click="actualizar(this)"
                                                           data-toggle="modal" data-target="#editModalCategory">
                                                            <span class="fa fa-pencil" title="Editar"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ol ui-tree-nodes="" ng-model="node.children" ng-class="{hidden: collapsed}">
                                            <li ng-repeat="node in node.children" ui-tree-node ng-include="'nodes_renderer2.html'">
                                            </li>
                                        </ol>
                                    </script>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <h3></h3>
                                                </div>
                                                <div class="col-md-3 col-md-offset-2" style="margin-top: 2%" ng-if="mostrar == 1">
                                                    <a class="btn btn-default btn-block" style="background-color: #4f8ecc; color: white; border: 1px solid #4f8ecc;" ng-click="guardar()" ng-disabled="msj.disabled">
                                                        <i class="fa f12a-save" style="margin-right: 5%"></i>@{{ msj.title }}</a>
                                                </div>
                                            </div>
                                            <div ui-tree id="tree2-root" data-clone-enabled="true" ng-if="mensaje.show == 1">
                                                <ol ui-tree-nodes="" ng-model="tree2">
                                                    <li ng-repeat="node in tree2" ui-tree-node ng-include="'nodes_renderer2.html'"></li>
                                                </ol>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-offset-3">
                                                    <h3 style="color: orange;">
                                                        <strong>@{{ mensaje.title }}</strong>
                                                    </h3>
                                                </div>
                                                <div class="col-md-offset-0">
                                                    <div class="col-md-3 col-md-offset-4">
                                                        <a ng-click="nueva()" class="btn btn-block btn-primary">
                                                            <i class="fa fa-plus"></i> Crear categoria
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                    </div>
                </div>
              {{-- <div class="col-md-6">
                      <div class="panel panel-default" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><strong>Organiza las categorias de tu tienda dependiendo de los productos que vayas a publicar.</strong></h3>
                          </div>

                          <div class="panel-body">
                              <p>(You can double click on an item to turn it into a folder.)</p>

                              <!-- the demo root element -->
                              <ul id="demo">
                                <item
                                  class="item"
                                  :model="treeData">
                                </item>
                              </ul>

                          </div>
                      </div>
                    </div>
                    
                  </div>--}}


        <div class="page-end-space"></div>
        </div>
    @endsection
    @section('scripts')
        <script src="{{ asset('administrator/angular/angular.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/angular-ui-tree.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/confirm-click.js') }}"></script>
        <script src="{{ asset('administrator/angular/moduloCategorias.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>
        <script type="text/x-template" id="item-template">
          <li>
            <ul class="list-group"
                v-show="!isRoot"
                style="text-align: left; margin-bottom: 3px;"
                >
                <li class="list-group-item list-group-item-info">
                  <span v-if="open" class="bold" @click="toggle" title="Modificar categoria"><i class="fa fa-angle-down" aria-hidden="true"></i> @{{ model.name }}</span>
                  <span v-else class="bold" @click="toggle" title="Modificar categoria"><i class="fa fa-angle-right" aria-hidden="true"></i> @{{ model.name }}</span>

                  <span class="badge" @click="changeType"><i class="fa fa-remove"></i></span>
                  <span class="badge"><i  class="fa fa-edit"></i></span>
                  <span class="badge" @click="create = true"><i  class="fa fa-plus"></i></span>
                </li>
            </ul>

            <ul class="" v-show="open">
              <item

                v-for="model in model.children"
                :model="model">
              </item>
              <li v-if="create"

                  style="text-align: left; margin-top: 3px; margin-bottom: 20px;">
                  <form action="" method="POST" class="form-inline" role="form">

                    <div class="form-group">
                      <label class="sr-only" for="">label</label>
                      <input  v-model="new_name" type="email" class="form-control" id="" placeholder="Nueva categoria">
                    </div>



                    <a href="#" @click="addChild" class="btn btn-primary">Guardar</a>
                    <a href="#" @click="create = false" class="btn btn-default">cancelar</a>
                  </form>
              </li>

            </ul>
          </li>
        </script>
        <script type="text/javascript">
            var Base_Url = "{{ url('') }}";
            Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf_token"]').attr('content');


            // define the item component
            Vue.component('item', {
              template: '#item-template',
              props: {
                model: Object
              },
              data: function () {
                return {
                  open: true,
                  new_name: '',
                  create: false
                }
              },
              computed: {
                isFolder: function () {
                  return this.model.children
                },
                isRoot: function(){
                  if(this.name == ''){
                    return true;
                  }else{
                    return false;
                  }
                }
              },
              methods: {
                toggle: function () {
                  if (this.isFolder) {
                    this.open = !this.open
                  }
                },
                changeType: function () {
                  if (!this.isFolder) {
                    Vue.set(this.model, 'children', [])
                    this.model.children = [];
                    this.open = true
                  }
                },
                addChild: function () {
                  this.model.children.push({
                    name: this.new_name,
                    children: []
                  });
                  this.new_name = '';
                  this.create = false;

                }
              }
            })

            // boot up the demo
            var demo = new Vue({
              el: '#demo',
              data: {
                treeData: {
                  name: 'Categorias',
                  children: []
                }
              },
              mounted() {
                  console.log('Component mounted 2.');
                  this.fetchCategories();

              },
              methods: {
                fetchCategories: function () {
                  this.$http.get(Base_Url+'/admin/categories?client_secret=' + client_secret + '&client_id=' + client_id).
                  then((response) => {
                      var data = response.body;
                      this.treeData.children = data[0];
                      ///console.log(data);
                  }, (response) => {
                  // error callback

                  })
                }
              }
            })

        </script>
    @stop
