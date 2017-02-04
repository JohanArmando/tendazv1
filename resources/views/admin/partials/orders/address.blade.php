<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <h5><i class="fa fa-truck"></i>&nbsp;<strong>Direcci&oacute;n de Envio de la orden #{{ ($order->id)}}.</strong></h5>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-responsive">
                        <tr>
                            <td><strong>Nombre: </strong></td> <td>{{ $address->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Direcci&oacute;n: </strong></td><td>{{ $address->street }}</td>
                        </tr>
                        <tr>
                            <td><strong>Barrio: </strong></td><td>{{ $address->neighborhood }}</td>
                        </tr>
                        <tr>
                            <td><strong>Departamento: </strong></td><td>{{ $address->state->name }}</td>
                        <tr>
                        <tr>
                            <td><strong>Ciudad: </strong></td><td>{{  $address->city->name}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
