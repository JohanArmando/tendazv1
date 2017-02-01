<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <h5><i class="fa fa-eye"></i>&nbsp;<strong>Historia de la orden #{{ ($order->id)}}.</strong></h5>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    @foreach($histories as $key => $history)
                        <p>{{ $key}}</p>
                        <ul>
                            @foreach($history as $event)
                                <li>
                                    {{ $event->created_at_hour }} - {{ $event->order_status }}
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
