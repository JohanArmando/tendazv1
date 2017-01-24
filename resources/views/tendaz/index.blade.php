@extends('layouts.tendaz')
@section('css')
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('administrator/css/index.css')}}">
    <style type="text/css">
        .big_container-two:after{
            background-image: url('{{asset('tendaz/images/bground.png')}}');
            background-size: cover;
            position: absolute;
            content: " ";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            z-index: -1;
            filter: blur(5px);
        }
    </style>
    <div class="row">
        <div class="big_container-two">
            <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                                <h1 class="w3ls">Crea Tu Tienda Virtual</h1>
                                <div class="col-md-offset-4 col-md-4 col-xs-12 col-sm-12">
                                    {!! Form::open(['url' => url('auth/register') , 'method' => 'POST' , 'name' => "form-register" , 'data-toggle'=> "validator" , 'role'=>"form"]) !!}
                                    <div class="form-group">
                                        <div class="input-group">
                                               <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                               </span>
                                            <input class="form-control" placeholder="Correo electronico" autocomplete="off" required name="email"  value="{{ old('email') }}" type="email">
                                        </div>
                                        <div class="help-block">{{ $errors->default->first('email') }}</div>
                                        <div class="help-block with-errors errorForm"></div>
                                    </div>
                                    <input type="hidden" name="plan" value="{{ isset($_GET['plan']) ? $_GET['plan'] : '' }}">
                                    <div class="form-group">
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa  fa-bars"></i>
                                                </span>
                                            <input style="height: 38px" class="form-control" placeholder="Nombre de tu tienda" autocomplete="off" value="{{ old('storename') }}" required="required" name="storename" type="text">
                                        </div>
                                        <div class="help-block">{{ $errors->default->first('storename') }}</div>
                                        <div class="help-block with-errors errorForm"></div>
                                    </div>
                                    <div class="name_store"></div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <input class="form-control" placeholder="Password" autocomplete="off" required="required" name="password" type="password" value="">
                                        </div>
                                        <div class="help-block">{{ $errors->default->first('password') }}</div>
                                        <div class="help-block with-errors errorForm"></div>
                                    </div>
                                    <div class="form-group">
                                        <span data-toggle="buttons">
                                                <label class="btn btn-xs btn-conditions">
                                                    <input type="checkbox" name="term" autocomplete="off" required>
                                                    <span class="fa fa-check" style="color: white;"></span>
                                                </label>
                                        </span>
                                        <a class="conditions" href="{{asset('tendaz/TERMINOSYCONDICIONES.pdf')}}" target="_black"> &nbsp; Acepto Termino y Condiciones</a>

                                        <div class="help-block with-errors errorForm"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary createShop"  >
                                            <i class="fa fa-shopping-cart"></i> Crear tienda
                                        </button>
                                    </div>
                                    <input type="hidden" value="1" name="remember">
                                    {!! Form::close() !!}
                                </div>
                            </div>
                </div>
                <div class="col-md-12">
                    <ul class="cust-agileits cl-effect-21">
                        <li><a href="#">Incrementa Tus Ingresos</a></li>
                        <li><a href="#">Quienes Somos?</a></li>
                        <li><a href="#">Casos de Exito</a></li>
                        <li><a href="#">Nuestros Asociados</a></li>
                    </ul>
                    <span class="cust-agileinfo1"></span>
                    <span class="cust-agileinfo2"></span>
                </div>
            </div>
            </div>
        </div>
        <div class="big_container hidden">
            <div class="row">
                <div class="col-md-10 col-md-offset-2" >
                    <div class="col-md-3 hidden-xs hidden-sm" style="margin-top:5%">
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('login')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/money.svg')}}" ><br>
                                    <h5>Incrementa tus ingresos</h5>
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('/login')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/welcome.svg')}}" ><br>
                                    <h5>Registrate</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-offset-0 hidden-xs hidden-sm" style="margin-top:5%">
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('login')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/building.svg')}}" ><br>
                                    <h5>Quienes somos?</h5>
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('login')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/success.svg')}}" ><br>
                                    <h5>Casos de exito</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="text-center">
                                <img src="{{elixir('tendaz/img/etiqueta-tendaz-home.gif')}}" class="img-responsive"
                                     style="max-height: 180px; margin-top: -9px;padding-left: 10%">
                            </div>
                            <div class="panel-body">
                            </div>

                            <div class="panel-body">
                                @if(count($errors) > 0)
                                    <div class="alert alert-info">
                                        <h5>Tienes {{ count($errors) }} error{{ count($errors) == 1 ? '' :'es' }}</h5>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                                        @include('tendaz.partials.register')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="hidden container-orange" >
    <div class="row">
        <div class="col-md-4 col-md-offset-2" style="margin-top: 3%; margin-left: 18%">
        <h1  style="color: #FFFFFF;
        font-weight: bold;
        margin-bottom: 6%;font-size: 20px">
        No te abandonamos!
        </h1>
        <p  style="color: #FFFFFF; font-size: 18px;">
        Con nuestros video tutoriales, eBook's y capacitaciones en directo aprenderas a vender de manera rapida y efectiva tus productos con tu Tenda.
        </p>
        <br>
        <p  style="color: #FFFFFF; font-size: 18px;">
        Ademas, tendras el asesoramiento de todo el personal de , quienes estaran disponibles para tu negocio dia a dia.
        </p>
        </div>
        <div  class="col-md-5 " style="margin-left: 1%;">
        <div class="text-center">

        <a href="#"><img src="{{elixir('tendaz/img/iconoEbook.gif')}}" style="width: 200px; ">
                <p style="color: #FFFFFF;"> &nbsp; E-BOOK's</p></a>
            <a href="#"><img src="{{elixir('tendaz/img/iconostutorial.gif')}}" style="width: 200px; ">
                <p style="color: #FFFFFF;">&nbsp; TUTORIALES</p></a>

        </div>
        </div>
    </div>
</div>

    <div class="container-home">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1 class="text-center">
                    En tan solo 3 pasos...
                </h1>
                <p class="text-center" style="font-size: 18px; margin-bottom: 3%">Crear una tienda es tan facil que te sorprenderas!.</p>
            </div>
            <div class="col-md-10 col-md-offset-2">
                <div class="col-md-3">
                    <div class="label-tendaz">
                        <div class="label-point"></div>
                        <div class="label-tendaz-header text-center">1</div>
                        <img width="100px" class="img-responsive" src="{{elixir('tendaz/images/icons/store.svg')}}" >
                        <span>Crea tu tienda</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="label-tendaz">
                        <div class="label-point"></div>
                        <div class="label-tendaz-header">2</div>
                        <img width="100px" class="img-responsive" src="{{elixir('tendaz/images/icons/product.svg')}}" >
                        <span>Sube tus productos</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="label-tendaz">
                        <div class="label-point"></div>
                        <div class="label-tendaz-header text-center">3</div>
                        <img width="100px" class="img-responsive" src="{{elixir('tendaz/images/icons/sell.svg')}}" >
                        <span>Comienza a vender!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection