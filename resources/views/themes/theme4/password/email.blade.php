@extends(Theme::current()->viewsPath.'.template')

<!-- Main Content -->
@section('content')
    <section class="content content-bg-1 fixed-bg">
        <div class="container">
            <h2 class="text-center text-uppercase title-under">Restablecer Contrase&ntilde;a</h2>
            <div class="row">
                <div class="slider-blog slick-arrow-bottom slick-initialized slick-slider">
                    <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 100%; " role="listbox">
                            <div class="link-hover-block slick-slide " style="width: 1200px;">
                                <div class="slider-blog__item">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                                <div class="panel-body">
                                                    @if (session('status'))
                                                        <div class="alert alert-success">
                                                            {{ session('status') }}
                                                        </div>
                                                    @endif

                                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                                        {{ csrf_field() }}

                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                            <label for="email" class="col-md-4 control-label">Digita el Correo:</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-4">
                                                                <button type="submit" class="btn btn--ys btn--xl btn-top">
                                                                    <i class="fa fa-send"></i>
                                                                    Restablecer Contrase&ntilde;a
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
@endsection
