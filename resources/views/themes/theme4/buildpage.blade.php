@extends(Theme::current()->viewsPath.'.template') 
    @section('css') 
        @stop 
    @section('content')
<div style="margin-top: 100px;"></div>
<div class="container">
    <div class="row text-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <div class="clearfix"></div>
        <div class="title-box">
            <h1 class="text-center text-uppercase title-under">{{$shop->name}}</h1>
        </div>
        <img class="img-responsive" src="{{asset('logos/'.$shop->id.'/'.$shop->logo)}}" style="max-height: 300px; margin-left: 20px">
        <div class="clearfix"></div><br>
        <h2>{{$shop->store->message}}</h2>
        <div style="margin-bottom: 30px;"></div>
        <div class="text-center">
            <a href="http://www.google.com" class="btn btn--ys btn--xl"><i class="fa fa-arrow-left"></i> Salir de la tienda</a>
            <div class="clearfix"></div>
        </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div style="margin-bottom: 30px;"></div>
@endsection 
@section('script') 
@stop