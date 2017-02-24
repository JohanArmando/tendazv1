<div class="order-history panel panel-default info-box">
        <div class="panel-heading">
            Historial de la orden
        </div>
        <div class="panel-body">
            <div class="row">
                <ul class="p-none pull-left l-nostyle">
                    @foreach($histories as $date => $history)
                        <li class="history-step pull-left m-bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="order-history-date">
                                <i class="fa fa-circle"></i>
                                <p class="history-date pull-left">{{ \Tendaz\components\DateGenerator::dateGenerate($date) }}</p>
                            </div>
                            <br><br>
                            @foreach($history as $his)
                                <div class="order-history-entry m-half-bottom">
                                    <p class="history-hour">{{ \Carbon\Carbon::parse($his['created_at'])->hour }} :
                                        @if( \Carbon\Carbon::parse($his['created_at'])->minute < 10)
                                            0{{ \Carbon\Carbon::parse($his['created_at'])->minute }}
                                        @else
                                            {{ \Carbon\Carbon::parse($his['created_at'])->minute }}
                                        @endif
                                    </p>
                                    <p class="history-text">
                                      Marco la orden como {{-- $his['status']--}}
                                    </p>
                                </div>
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
</div>
