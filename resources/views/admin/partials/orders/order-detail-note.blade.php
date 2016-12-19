 <div class="col-md-4"></div>
<div class="col-md-4 text-center">
    @if(empty($orders->notas))
        <div id="record"><h3>No tienes notas creadas para esta orden</h3></div>
    @else
        <div style="border-radius: 0px; padding: 15px;  display: block; background-color: rgb(251, 242, 197);" class="other">
        {{ $orders->notas }}
        </div>
    @endif
    <br>
    <div style="border-radius: 0px; background-color: #FBF2C5;padding: 15px;" id="las-notas"></div>
    @if(empty($orders->notas))
        <a class="btn btn-default" href="#addnota" role="button" id="add" data-toggle="collapse" aira-expanded="false" aira-controls="collapseExample">Agregar nota</a>
    @else
        <a class="btn btn-default" href="#addnota" role="button" id="add" data-toggle="collapse" aira-expanded="false" aira-controls="collapseExample">Editar nota</a>
    @endif
    <br>
    <div class="collapse" id="addnota">
        <br>
        <div class="panel-body">
            @if(empty($orders->notas))
                <textarea name="notas" id="note" cols="80" rows="10" ></textarea>
            @else
                <textarea name="notas"  id="note" cols="80" rows="10" >{{ $orders->notas }}</textarea>
            @endif
        </div>
        <br>
        <p class="text-right">
            <a class="btn btn-primary" id="guardar-nota">Guardar Nota</a>
            <a class="btn btn-default" onclick="$('#addnota').collapse('toggle');$('#record').show();$('#add').show();
        $('.other').show();">Cancelar</a>
        </p>
    </div>
</div>
