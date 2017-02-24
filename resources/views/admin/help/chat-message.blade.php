@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" href="{{asset('administrator/css/statsAdvanced.css')}}">
@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title">Ticket</h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="#" style="color: darkgrey;">Herramientas y ayuda</a></li>
                    <li class="active" style="color: orange;">Ticket</li>
                </ol>
            </div>
        </div>
    </div>
    <!--FIN HEADER-->
    <div class="container">
        <div class="row">
            <div class="clearfix"></div>
            <div style="margin-top: 30px;"></div>
            <div class="main_section">
                <div class="container">
                    <div class="col-md-8 col-md-offset-2">
                    <ul class="nav nav-tabs" style="background-color: transparent;">
                        <li id="link_tab" style="z-index: 0">
                            <a class="active" data-toggle="tab" aria-expanded="false">
                                <p class="letter"> ID: {{$ticket->id}}</p>
                                <p class="letter"> ESTADO:
                                        @if($ticket->state == 'open' )<strong>Creado</strong>
                                        @endif
                                        @if($ticket->state == 'close' )<strong>Resuelto</strong>
                                        @endif
                                        @if($ticket->state == 'paused' )<strong>Pausado</strong>
                                        @endif</p>
                                <p class="letter"> FECHA: {{($ticket->created_at->toDateString())}}</p>
                            </a>
                        </li>
                        <li class="triangle-big hidden-xs">
                            <div class="triangle-small"></div>
                        </li>
                        <li class="adviser">
                            <p style="margin-top: -10px">Asesor Tecnico Tendaz.com</p>
                        </li>
                    </ul>
                        <div id="tab" class="chats">
                            <div class="row">
                                <div class="banner-messages">
                                    <div class="row">
                                    <div class="col-md-12"><br>
                                        <div class="col-md-2"><strong style="color: #f26522">Asunto:</strong></div>
                                        <div class="col-md-10">{{$ticket->subject}}</div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-2"><strong style="color: #f26522">Descripci&oacute;n:</strong></div>
                                        <div class="col-md-10">{{$ticket->description}}</div>
                                    </div>
                                    </div>
                                </div>
                                <div class="content-messages">
                                @foreach($comments as $comment)
                                    @if($comment->user_id == auth('admins')->user()->id)
                                        <div class="col-md-12">
                                            <div class="col-md-1" style="margin-top: 20px">
                                                <i class="fa fa-chevron-right" style="color: #f26522"></i>
                                            </div>
                                            <div class="col-md-7" style="margin-left: 0">
                                                <div class="chatUser">
                                                    {{$comment->content}}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                        </div>
                                    @endif
                                    @if($comment->user_id != auth('admins')->user()->id)
                                        <div class="col-md-12">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-7" style="margin-left: 0">
                                                <div class="chatUser" style="border-color: #3c3c3c">
                                                    {{$comment->content}}
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 20px">
                                                <i class="fa fa-chevron-left" style="color: #3c3c3c"></i>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                </div>
                                <div class="col-md-12 footer-chat">
                                    <form action="{{url('admin/help/comments')}}" method="get">
                                    <div class="col-md-11">
                                        <input type="hidden" name="uuid" class="form-control" value="{{$ticket->uuid}}">
                                        <input type="text" name="message" class="form-control" required>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="submit" class="btn-circle"><i class="fa fa-send" style="font-size: 18px"></i></button>
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
@endsection
@section('scripts')
@stop