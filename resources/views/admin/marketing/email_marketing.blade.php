@extends('admin.template')
    @section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/dataTables.min.css')}}">
        @stop
    @section('content')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title semibold"><i class="fa fa-envelope"></i>&nbsp; Marketing</h4>
            </div>
            <div class="page-header-section">
                <!-- Toolbar -->
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="#" style="color: darkgrey;">Marketing</a></li>
                        <li class="active" style="color: orange;">Email Marketing</li>
                    </ol>
                </div>
                <!--/ Toolbar -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <a class="btn btn-default" href="#">Ver instructivo <i class="fa fa-question"></i>&nbsp;</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div style="margin-bottom: 20px;"></div>
         <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>
                            <i class="fa fa-envelope"></i> &nbsp;
                            Selecciona los productos que deseas que salgan en el mail
                        </h4>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="tbl_marketing" class="table table-responsive table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th style="text-align: center;">
                                    Nombre
                                </th>
                                <th style="text-align: center;">
                                    Descripcion
                                </th>
                                <th style="text-align: center;">
                                    Destacado
                                </th>
                                <th style="text-align: center;">
                                    Mostrar
                                </th>
                                <th style="text-align: center;">
                                    Eliminar
                                </th>
                                <th style="text-align: center;">
                                    Publicar
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">01</td>
                                <td style="text-align: center;" >Lo que sea</td>
                                <td style="text-align: center;">Lo que sea</td>
                                <td style="text-align: center;">
                                    <span class="checkbox custom-checkbox custom-checkbox-inverse">
                                        <input type="checkbox" name="customcheckbox1" id="customcheckbox1">
                                        <label for="customcheckbox1"></label>
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <span class="checkbox custom-checkbox">
                                        <input type="checkbox" name="customcheckbox2" id="customcheckbox2">
                                        <label for="customcheckbox2"></label>
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <a class="btn btn-danger btn-xs" href="#" title=""><i class="fa fa-times"></i></a>
                                </td>
                                <td style="text-align: center;">
                                    <a class="btn btn-success btn-xs" href="" title=""><i class="fa fa-check"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endsection
        @section('scripts')
        <script type="text/javascript" src="{{asset('admin/js/dataTables.min.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('#tbl_marketing').DataTable({
                    'searching': false
                 });
            });
        </script>
        @stop