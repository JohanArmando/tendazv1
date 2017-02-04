@extends('layouts.administrator')
    @section('title')
        Planes
    @endsection
    @section('css')
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/plans-account2.css')}}">
    @stop
    @section('content')

        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title semibold"><i class="fa fa-credit-card"></i>&nbsp; Planes</h4>
            </div>
            <div class="page-header-section">
                <!-- Toolbar -->
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: grey;">Inicio</a></li>
                        <li class="active" style="color: orange;">Planes</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Plan 1 -->
                    @foreach($plans as $plan)
                        <div class="col-md-4 {{ $plan->plan->main ? 'active_plan':'' }} text-center " style="padding-left: 0px !important;padding-right: 0px !important;">
                            <div id="plan-1" class="panel-pricing {{ $plan->plan->main ? 'shadow_plan':'' }}"  >
                                <div class="panel-heading">
                                    <div class="panel-body text-center" style="font-size: 18px">

                                        <h3><img src="{{asset('tendaz/img/icon-plans.png')}}" style="max-height: 32px; margin-top: -2%" > {{ $plan->plan->name }}
                                        </h3>
                                        <h1>$ {{ $plan->getPrice() }} USD</h1> Por mes
                                        <br>
                                        <br>

                                        @if($plan->plan->active)
                                            {!! Form::open(['url' => ['admin/account/plans/swap' , $plan->id] , 'method' => 'POST']) !!}
                                                <button type="submit" class="btn btn-{{ $shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'success' : 'info' }}" >
                                                    {{ $shop->subscription()->plan->plan_id <  $plan->plan->id ? 'Subir Plan' : ($shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'Plan actual' :'Bajar Plan')     }}
                                                </button>
                                            {!! Form::close() !!}
                                        @else
                                            <a class="btn btn-default" disabled="disabled" style="background-color: #337ab7; color: white;">
                                                Proximamente
                                            </a>
                                        @endif
                                    </div>
                                    <br>
                                    <br>
                                    <ul class="text-left">
                                        <br>
                                        <br>
                                        @foreach($plan->plan->features as $feature)
                                            <li class="">
                                                <i class="fa fa-angle-right" style="font-size: 15px"></i>
                                                {{ $feature->description }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-12"><br></div>
                </div>
            </div>
        </div>
        @include('admin.partials.message')

    @endsection
    @section('scripts')
    @stop