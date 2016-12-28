<div class="order-history panel panel-default info-box">
    <div class="panel-heading">
        Notas de la orden
    </div>
    <div class="panel-body">
    @if(empty($orders->note))
        <div id="record"><h3>No tienes notas creadas para esta orden</h3></div>
    @else
        <div style="border-radius: 0px; padding: 15px;  display: block; background-color: rgb(251, 242, 197);" class="other">
        {{ $orders->note }}
        </div>
    @endif
    <br>
    <div style="border-radius: 0px; background-color: #FBF2C5;padding: 15px;" id="las-notas"></div>
    @if(empty($orders->note))
        <a style="margin-top: 10px" class="btn btn-default" href="#addnota" role="button" id="add" data-toggle="collapse" aira-expanded="false" aira-controls="collapseExample">Agregar nota</a>
    @else
        <a style="margin-top: 10px" class="btn btn-default" href="#addnota" role="button" id="add" data-toggle="collapse" aira-expanded="false" aira-controls="collapseExample">Editar nota</a>
    @endif
    <br>
    <div class="collapse" id="addnota">
        <br>
        <div class="panel-body">
            @if(empty($orders->note))
                <textarea name="note" id="note" style="width: 100%"></textarea>
            @else
                <textarea name="note"  id="note" style="width: 100%" >{{ $orders->note }}</textarea>
            @endif
        </div>
        <br>
        <p class="text-right">
            <a class="btn btn-primary"  id="guardar-nota">Guardar Nota</a>
            <a class="btn btn-default" onclick="$('#addnota').collapse('toggle');$('#record').show();$('#add').show();
        $('.other').show();">Cancelar</a>
        </p>
    </div>
</div>
</div>
