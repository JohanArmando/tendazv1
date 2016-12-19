<div id="bs-modal-delete" class="modal fade" aire-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-left">Eliminiar dominio <strong class="delete-domain-name">dominio.com</strong> ?</h3>
            </div>
            {!! Form::open(['method' => 'DELETE' , 'class' => 'hidden' , 'name' => 'delete']) !!}
                {!! csrf_field() !!}
            {!! Form::close() !!}
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <p align="justify">
                            Realmente estas seguro de eliminar <strong class="delete-domain-name"></strong>?, Esta operacion no se puede restroceder.
                        </p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="text-right">
                    <button class="btn btn-default closeDomain" data-dismiss="modal">Cerrar</button>
                    <a id="delete-domain-submit" class="btn btn-danger"><i class="fa fa-times"></i> Eliminar dominio</a>
                </div>
            </div>
        </div>
    </div>
</div>