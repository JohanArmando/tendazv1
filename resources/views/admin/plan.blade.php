@extends('admin.template')
@section('css')
@stop
@section('content')
	<div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class="fa fa-credit-card"></i>&nbsp; Planes y pagos</h4>
        </div>
        <div class="page-header-section">
            <!-- Toolbar -->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin/home')}}">Home</a></li>
                    <li class="active">Planes y pagos</li>
                </ol>
            </div>
            <!--/ Toolbar -->
        </div>
</div>
<br>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-credit-card"></i> Detalles del pago.</h3>
			</div>
			<div class="panel-body">
				<p align="justify" style="font-size: 20px;" >
					Plan: <strong>Vender a gran escala</strong>.
					 <br>
				</p>
				<p align="">
					<a href="{{url('admin/plans')}}" class="btn btn-default">Cambiar de plan.</a>
				</p>
				<hr>
				<p align="" style="font-size: 18px;">Valor total mes: <strong>$120.000 COP</strong></p>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Seleccione el tipo y el tiempo de facturacion.</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse in pull out">
                                <div class="panel-body">
                                <h5 class="text-primary semibold mt0">Mercado pago.</h5>
                                <div class="list-group">
                                	<a href="javascript:void(0);" class="list-group-item">
                                		<h4 class="list-group-item-heading"><input type="radio" id="plan1">&nbsp;<strong>Mensual</strong></h4>
                                        <p class="list-group-item-text"> &nbsp; &nbsp; &nbsp; En un pago de <strong>$120.000</strong></p>
                                    </a>
                                    <br>
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <h4 class="list-group-item-heading"><input type="radio" id="plan2">&nbsp;<strong>Trimestral</strong></h4>
                                        <p class="list-group-item-text"> &nbsp; &nbsp; &nbsp;Ahorras $36.000
                                        <br>
                                        &nbsp; &nbsp; &nbsp;En un pago de $ 324.000, <strong>Descuento 10%</strong>
                                        </p>
                                    </a>
                                    <br>
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <h4 class="list-group-item-heading"><input type="radio" id="plan3"> &nbsp;<strong>Anual</strong></h4>
                                        <p class="list-group-item-text"> &nbsp; &nbsp; &nbsp; Ahorro $288.000
                                        <br>
                                        &nbsp; &nbsp; &nbsp; En un pago de $1.152.000 <strong>Descuento 20%</strong>
                                        </p>
                                    </a>
                                    <br>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                            <div class="panel-footer text-center">
                            	<button type="button" class="btn btn-default"><i class="fa fa-credit-card"></i>&nbsp; Adquirir plan</button>
                            </div>
                        </div>
	               </div>
    </div>
@endsection
@section('scripts')
@stop