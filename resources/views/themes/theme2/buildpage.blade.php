@extends(Theme::current()->viewsPath.'.template') 
    @section('css') 
        @stop 
            @section('content')
                <div style="margin-top: 100px;"></div>
                <div class="container">
                    <div class="row">
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="text-center" style="margin-left: 250px;">
                                <img class="img-responsive" src="{{asset('themes_tendaz/default/images/buildpage.png')}}">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div style="margin-bottom: 30px;"></div>
                        <div class="text-center">
                            <a href="http://www.google.com" class="btn btn-primary btn-lg"><i class="fa fa-arrow-left"></i> Salir de la tienda</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div style="margin-bottom: 30px;"></div>
            @endsection 
        @section('script') 
            @stop