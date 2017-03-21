    @section('title')
    Envios y locales
    @stop
    @extends('layouts.administrator')
    @section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li class="active" style="color: orange;">Envios y locales</li>
                </ol>
            </div>
        </div>
    </div>
    <br>
    <div class="row" ng-app="appManual" ng-controller="shippingController">
        @include('admin.partials.conf.send.shipping')
        @include('admin.partials.conf.send.local')
        <div class="page-end-space"></div>
    </div>
    @endsection

    @section('scripts')
        <script src="{{ asset('administrator/angular/angular.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/pagination.js') }}"></script>
        <script src="{{ asset('administrator/angular/moduloManual.js') }}"></script>
    @stop