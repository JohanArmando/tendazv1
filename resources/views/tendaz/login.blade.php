@extends('layouts.tendaz')
    @section('css')
    @stop
    @section('content')
        <div class="prealoader hidden"></div>
        <div class="preloader hidden">
            <div class="preloader_image">
                <div class="col-md-12">
                    <p class="preloader_p">Redirigiendo a tu tienda</p>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <img src="{{ elixir('tendaz/img/login.gif') }}" width="100%">
                </div>
            </div>
        </div>
        <div class="container" style="width: 100%; background-color: #f7f7f7;color: #1f2836;">
            <div class="row" style="margin: 5% 0 5% 0">
                <div class="text-center" style="margin-bottom: 2%">
                    <img src="{{ elixir('tendaz/images/icons/login.png')}}" alt="Tendaz.com" style="width: 100px; height:auto; ">
                </div>
                <div class="col-sm-1 col-lg-1"></div>
                <div class="col-sm-5 col-sm-offset-1 col-lg-4 col-lg-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center" style="background-color: #fff">
                            <span class="panel-title">Ingresa a tu tienda</span>
                        </div>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="account-box login-box login-with-help">
                                <div style="color: palevioletred; font-size: 1.1em" id="error-div" ></div>
                                @include('tendaz.partials.login')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center" style="background-color: #fff">
                            <span class="panel-title "><i class="fa fa-thumbs-o-up"></i> Cuentale a tus amigos</span>
                        </div>
                        <div class="panel-body">
                            <div class="login-copytext">
                                <div class="col-md-12">

                                    <p align="justify">Comparte con tus amigos Tendaz y enseñales que tan facil es comenzár a vender por internet.</p>
                                </div>
                                <div class="col-md-3">
                                    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FTendaz-1007603429285331&width=93&layout=box_count&action=like&size=large&show_faces=true&share=true&height=65&appId=1111594842195185" width="93" height="100" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                </div>
                                <div class="col-md-3 col-md-offset-1">
                                    <a href="https://twitter.com/TendazCom" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @TendazCom</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('tendaz.partials.forgotPassword')
        @include('admin.partials.message')
    @endsection
    @section('script')
    @stop