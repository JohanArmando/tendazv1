@extends('tema2.template')
	@section('css')
	<style type="text/css">
      .tags a{border:1px solid #DDD;display:inline-block;color:#717171;background:#FFF;-webkit-box-shadow:0 1px 1px 0 rgba(180,180,180,0.1);box-shadow:0 1px 1px 0 rgba(180,180,180,0.1);-webkit-transition:all .1s ease-in-out;-moz-transition:all .1s ease-in-out;-o-transition:all .1s ease-in-out;-ms-transition:all .1s ease-in-out;transition:all .1s ease-in-out;border-radius:2px;margin:0 3px 6px 0;padding:5px 10px}
.tags a:hover{border-color:#08C;}
.tags a.primary{color:#FFF;background-color:#428BCA;border-color:#357EBD}
.tags a.success{color:#FFF;background-color:#5CB85C;border-color:#4CAE4C}
.tags a.info{color:#FFF;background-color:#5BC0DE;border-color:#46B8DA}
.tags a.warning{color:#FFF;background-color:#F0AD4E;border-color:#EEA236}
.tags a.danger{color:#FFF;background-color:#D9534F;border-color:#D43F3A}
    </style>
		@stop
	@section('content')
		<div class="content">
			<div class="container">
				<div class="row">
        	<div class="col-md-12 panel panel-default panel-content">
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
                               <td><a href="{{url('order/id')}}">#001</a></td>
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
               <div style="margin-bottom: 30px;"></div>
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
					</div>
				</div>
			</div>
		</div>
		<div style="margin-bottom: 59px;"></div>
		@endsection
	@section('script')
		@stop