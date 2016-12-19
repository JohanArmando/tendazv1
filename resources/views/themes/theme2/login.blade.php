@extends(Theme::current()->viewsPath.'.template')
    @section('css')
      <style type="text/css">
        .btn span.fa {         
        opacity: 0;       
      }
      .btn.active span.fa {        
        opacity: 1;       
      }
      </style>
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        @stop
    @section('content')
            <div class="container">
                <div class="col-md-6">
                    <div class="box" style="display: inline-block">
                        <h2>Registrate</h2>
                        <hr>
                        <form action="{{ url('auth/register') }}" role="form" method="post" data-toggle="validator">
                            {!! csrf_field() !!}
                            <div class="form-group col-md-6">
                                <label for="name">Nombres</label>
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Apellidos</label>
                                <input type="text" class="form-control" value="{{ old('last_name') }}" name="last_name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="{{ old('email') }}" name="email" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passwordInput">Contrase&ntilde;a</label>
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Contrase&ntilde;a" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passwordConfirmInput">Confirmar Contrase&ntilde;a</label>
                                <input type="password" class="form-control"  name="password_confirmation" data-match-error="Upz, Contrase&ntilde;as no son iguales"
                                       id="inputPasswordConfirm" data-match="#inputPassword" placeholder="Repetir Contrase&ntilde;a" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="text-center col-md-12">
                                <button type="submit" class="btn btn-primary">Registrarme</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                   <div class="box">
                       <h2>Inicio de sesion</h2>
                       <hr>
                       <form role="form" action="{{url('auth/login')}}" method="post" data-toggle="validator">
                           {!! csrf_field() !!}
                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="email" class="form-control" value="{{ old('email') }}" name="email" required>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="form-group">
                               <label for="password">Constrase&ntilde;a</label>
                               <input type="password" class="form-control" id="password" name="password" required>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default btn-xs">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="fa fa-check fa2x" style="color: green;"></span>
                                </label> &nbsp; Recordarme
                           </div>

                           <div class="text-center">
                               <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                           </div>
                           @if(!empty($socialData->client_id_facebook) || !empty($socialData->client_id_google))
                               <div class="text-center col-md-12">
                                <span class="title"><strong>Iniciar con</strong></span>
                               </div>
                           @endif
                           <div class="text-center">
                               @if(!empty($socialData->client_id_facebook) && !empty($socialData->client_secret_facebook))
                                   <div class="text-center" style="display: inline-block">
                                       <a href="{{ url('auth/facebook') }}" class="sb-facebook" style="cursor: pointer">
                                           <img src="{{asset('tema2/img/facebook.png')}}" width="27" alt="">
                                       </a>
                                   </div>
                               @endif
                               @if(!empty($socialData->client_id_google) && !empty($socialData->client_secret_google))
                                   <div class="text-center" style="display: inline-block">
                                       <a href="{{ url('auth/google') }}" class="sb-twitter" style="cursor: pointer">
                                           <img src="{{asset('tema2/img/google-plus.png')}}" width="27" alt="">
                                       </a>
                                   </div>
                               @endif
                           </div>
                       </form>
                   </div>
                </div>
            </div>
          @endsection
    @section('script')
        @stop