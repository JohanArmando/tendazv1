@extends('admin.template')
@section('css')

@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title"><img src="{{asset('admin/image/icons/icons-nav/worker.png')}}">&nbsp;Crear Ticket</h4>
        </div>
        <div class="page-header-section">
            <!-- Toolbar -->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="#" style="color: darkgrey;">Dise&ntilde;o</a></li>
                    <li class="active" style="color: orange;">Crear Ticket</li>
                </ol>
            </div>
            <!--/ Toolbar -->
        </div>
    </div>
    <div class="clearfix"></div>
    <div style="margin-top: 40px;"></div>
    <div class="container-fluid">
        <article class="panel overflow-hidden">
            <!-- Content -->
            <section class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Crear Ticket</h2>
                    <hr>
                    </div>
                    <form method="post" action="{{url('admin/create/ticket')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="user_id" value="{{Auth::client()->get()->id}}">
                        <div class="form-group col-md-6">
                            <label for="">Nombre</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Telefono</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Asunto</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Mensaje</label>
                            <input type="text" name="content" class="form-control" required>
                            <hr>
                        </div>
                        <div class="form-group col-md-12">
                            <button style="margin-left: 15px" type="submit" class="btn btn-primary">Crear Ticket</button>
                        </div>
                    </form>
                </div>
            </section>
            <!--/ Content -->
        </article>
    </div>
@endsection
