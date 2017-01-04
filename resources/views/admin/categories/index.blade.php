@section('css')
    <link rel="stylesheet" href="{{asset('administrator/css/categories.css')}}">
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
                                                    <a data-tooltip="Editar Categoria" class="pull-right btn btn-edit-category btn-primary btn-lg"  data-nodrag ng-click="newSubItem(this)">
                                                        <span class="fa fa-plus" title="Agregar SubCategorias"></span>
                                                    </a>
                                                    <a data-tooltip="Agregar Subcategoria" class="pull-right btn btn-subcategory btn-primary btn-lg"  data-nodrag ng-click="actualizar(this)"
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
                                                    <i class="fa fa-save" style="margin-right: 5%"></i>@{{ msj.title }}</a>
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
        </div>
        <div class="page-end-space"></div>
        </div>
    @endsection
    @section('scripts')
        <script src="{{ asset('administrator/angular/angular.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/angular-ui-tree.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/confirm-click.js') }}"></script>
        <script src="{{ asset('administrator/angular/moduloCategorias.js') }}"></script>
    @stop