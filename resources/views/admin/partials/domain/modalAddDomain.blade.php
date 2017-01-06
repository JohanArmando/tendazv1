<div id="bs-modal-add" class="modal fade" tabindex="-1" aira-hidden="true" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background: #FF4E00 !important; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: white !important;">&times;</button>
                <h4 class="modal-title text-center">AGREGAR TU DOMINIO EXISTENTE</h4>
            </div>
            <div class="modal-body">
                <p align="justify"></p>
                <div class="alert alert-danger hidden" id="error-domain">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-ban fa-5x"></i>
                        </div>
                        <div class="col-md-10" style="color: black">
                            <h4><strong></strong></h4>
                            <ul>

                            </ul>
                        </div>
                    </div>
                </div>
                <form role="form" action="{{ url('admin/setting/domain/create') }}" data-token="{{ csrf_token() }}" name="add_domain" >
                    <div class="from-group">
                        <!-- <label>Ingresa tu nombre de Donimio Existente</label> -->
                        <div class="input-group">
                            <span class="input-group-addon" style="background: #3C3C3C; color: white;">http://</span>
                            <input type="text" class="form-control" name="domain" style="background-color:#D1D2D4; color: white; font-size: 16px;">
                        </div>
                    </div>
                    <br>
                    <a href="#">Leer mas informacion sobre dominios</a>
                    <br>
                    <div class="text-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="background: #3C3C3C; border-radius: 0px !important;"><i class="fa fa-times" style="color: white;"></i></button>
                        <button type="submit" class="btn btn-primary" id="add-domain" style="border-radius: 0px !important"><i style="color: white;" class="fa fa-check"></i></button>
                    </div>
                </form>
                <br>
            </div>

        </div>
    </div>
</div>