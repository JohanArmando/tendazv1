<div class="order-history info-box">
    <div class="panel-body">
        <h3>Notas de la orden</h3>
    @if(empty($order->note))
        <div id="record"><h3>No tienes notas creadas para esta orden</h3></div>
    @else
        <div style="border-radius: 0px; padding: 15px;  display: block; background-color: rgb(251, 242, 197);" class="other">
        {{ $order->note }}
        </div>
    @endif
    <br>
    @if(empty($order->note))
        <a style="margin-top: 10px" class="btn btn-default" href="#addnota" role="button" id="add" data-toggle="collapse"
           aira-expanded="false" aira-controls="collapseExample">Agregar nota</a>
    @else
        <a style="margin-top: 10px" class="btn btn-default" href="#addnota" role="button" id="add" data-toggle="collapse"
           aira-expanded="false" aira-controls="collapseExample">Editar nota</a>
    @endif
    <br>
    <div class="collapse" id="addnota">
        <br>
        <form action="{{url('admin/orders/update/note/'.$order->uuid)}}" method="post">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="panel-body">
                @if(empty($order->note))
                    <textarea name="note" id="note" style="width: 100%"></textarea>
                @else
                    <textarea name="note"  id="note" style="width: 100%" >{{ $order->note }}</textarea>
                @endif
            </div>
            <br>
            <p class="text-right">
                <a class="btn btn-default" onclick="$('#addnota').collapse('toggle');$('#record').show();$('#add').show();
        $('.other').show();">Cancelar</a>
            <button type="submit" class="btn btn-primary"  id="guardar-nota">Guardar Nota</button>
            </p>
        </form>
    </div>
</div>
</div>
