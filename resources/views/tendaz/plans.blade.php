@extends('layouts.tendaz')
@section('css')
@stop
@section('content')
<div class="container" style="width: 100%; background-color: #f7f7f7;">
    <section class="text-center heading-description">
        <h1>Nuestros planes</h1>
        <p class="MainByline">
            Sin obligaciones. Cambia de plan en cualquier momento. Incrementa tus ganancias!
        </p>
    </section>
    <section id="plans">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    @foreach($plans as $plan)
                    <div class="col-md-4 text-center" style="padding-left: 0px !important;
padding-right: 0px !important;">
                        <div  id="plan-{{ $plan->id }}" class="panel-pricing">
                            <div class="panel-heading">
                                <div class="panel-body text-center" style="font-size: 18px">
                                     <h3>
                                         <img src="" style="max-height: 32px; margin-top: -2%" >
                                         {{$plan->name}}
                                     </h3>
                                     <h1>${{ number_format($plan->price ) }} USD</h1>
                                      Por mes
                                      <br>
                                      <br>
                                      <a  class="btn btn-primary" href="{{ url("/crea-tu-tienda?plan=$plan->id") }}">
                                            Probar Plan
                                      </a>
                                 </div>
                                <br>
                                <br>
                                <ul class="text-left">
                                    <br>
                                    <br>
                                    @foreach(explode('***', $plan->description ) AS $keyplan)
                                      <li>{!!$keyplan!!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        document.getElementById("plan-2").className += " selected";
    </script>
@endsection


