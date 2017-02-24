@extends('admin.template')
@section('css')
@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><img width="20" height="20" src="{{asset('admin/image/icons/icons-nav/mercadolibre.png')}}"> Mi Mercadolibre</h4>
        </div>
        <div class="page-header-section">
            <!--Toolbar-->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin/home')}}" style="color: darkgrey;"><i class="fa fa-home"></i> Inicio</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            @include('admin.partials.message')
            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="col-md-6">
                            <h5><strong>Mercadolibre & Tendaz</strong></h5>
                        </div>
                    </div>

                </div>
                <div class="panel-body mercadolibre">
                    <div class="col-md-12 text-center">
                        <div class="col-md-12">
                            <img src="{{asset('tendaz/img/mercadotendaz.png')}}" width="50%">
                            <h4 align="center"><strong>Hemos asociado tu tienda con tu cuenta en MercadoLibre</strong></h4>
                            <p>Importa tus productos a MercadoLibre o traelos a tu tienda.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-4">
                                <button data-href="{{ url('admin/mercadolibre/import')  }}" class="btn btn-primary mercadolibreButtom btn-block"><i class="fa fa-download icon-prev" aria-hidden="true"></i>&nbsp;Importar  a mi tienda.</button>
                            </div>
                            <div class="col-md-4">
                                <button style="margin-left: 10%" data-href="{{ url('admin/mercadolibre/export') }}" class="btn btn-primary mercadolibreButtom btn-block"><i class="fa fa-upload icon-prev" aria-hidden="true"></i>&nbsp;Exportar a Mercadolibre.</button>
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
    <script>
        $(document).on('ready' , function () {
            $('.mercadolibreButtom').on('click' , function () {
                $(this).attr('disabled' , true);
                var href = $(this).data('href');
                window.location.href = href;
                $(this).text('Descargando Productos');
                $(this).html("Conectando...&nbsp;<i class='fa fa-spinner fa-pulse fa-fw'></i>");
                $(this).find('.icon-prev').hide();
                var form = $(this).closest('form');
                var otherButtom = $(this).closest('.col-md-4').siblings().last().find('.mercadolibreButtom');
                otherButtom.attr('disabled' , true);
                form.submit();
            });
        });
    </script>
@stop