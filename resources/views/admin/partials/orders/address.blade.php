<div class="order-history panel panel-default info-box">
    <div class="panel-heading">
        Direcci&oacute;n de Envio
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Direcci&oacute;n</td>
                            <td>Barrio</td>
                            <td>Departamento</td>
                            <td>Ciudad</td>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $address->name }}</td>
                                <td>{{ $address->street }}</td>
                                <td>{{ $address->neighborhood }}</td>
                                <td>{{ $address->state->name }}</td>
                                <td>{{  $address->city->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
