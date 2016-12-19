@extends('layouts.administrator')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('administrator/css/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/pickerfont/css/fontselect.css')}}">
@stop
@section('content')
<div class="page-header page-header-block">
	<div class="page-header-section">
		<h4 class="title semibold"><img src="{{asset('administrator/image/smartphone.png')}}">&nbsp; App Mobile</h4>
	</div>
	<div class="page-header-section">
		<div class="toolbar">
			<ol class="breadcrumb breadcrumb-transparent nm">
				<li><a href="#" style="color: darkgrey;">Marketing</a></li>
				<li><a href="#" style="color: darkgrey;">App Mobile</a></li>
				<li class="active" style="color: orange;">Configuracion</li>
			</ol>
		</div>
	</div>
</div>
<div class="container">
	<div class="content">
		<div class="row">
			<div class="col-md-12" style="margin-top: 40px;">
				
				<div class="row">
					<div class="container-fluid">
						<!--IMG-->
						<div class="col-md-3">
							<img class="img-responsive" src="{{asset('administrator/image/phone.png')}}">
						</div>
						<!--FIM-->
						<div class="col-md-9">
							@include('admin.partials.marketing.app_mobile.wizard')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>
@stop	