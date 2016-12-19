
<div class="col-md-12" id="international-send">
    <div class="panel panel-default" style="margin-left: 6%; margin-right: 6%">
        <div class="panel-heading">
            <h4 class="panel-title">Configurar envios para el resto del mundo</h4>
            <div class="panel-toolbar text-right">
                <div class="option">
                    <a href="#" class="btn demo" data-toggle="modal" data-target="#envios_resto_del_mundo"
                    onclick="$('#modificar-manual').hide();$('#agregar-manual').show();" ng-click="limpiarEnvios()" style="color: white;">
                    <i class="fa fa-plus" style="color: white;"></i> Agregar nuevo costo envio internacional</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-responsive table-bordered">
                <thead>
                <tr>
                    <th class="text-center">Nombre de la opcion</th>
                    <th>Rango de peso de la compra</th>
                    <th>Rango de precio de la compra</th>
                    <th>Costo del envio</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($sends as $send)
                    <tr class="text-center">
                        <td>{{ $send->name }}</td>
                        <td>
                            @if($send->min_weight != '' && $send->max_weight != '')
                                {{ number_format($send->min_weight,2,',','.') }} Kg - {{ number_format($send->max_weight,2,',','.') }}Kg
                            @elseif($send->min_weight != '' && $send->max_weight == '')
                                Desde {{ number_format($send->min_weight,2,',','.') }} Kg
                            @elseif($send->min_weight == '' && $send->max_weight != '')
                                Hasta {{ number_format($send->max_weight,2,',','.') }} Kg
                            @else
                                Siempre
                        @endif
                        <td>
                            @if($send->min_price != '' && $send->max_price != '')
                                {{ number_format($send->min_price,2,',','.') }} COP - {{ number_format($send->max_price,2,',','.') }} COP
                            @elseif($send->min_price != '' && $send->max_price == '')
                                Desde {{ number_format($send->min_price,2,',','.') }} COP
                            @elseif($send->min_price == '' && $send->max_price != '')
                                Hasta {{ number_format($send->max_price,2,',','.') }} COP
                            @else
                                Siempre
                            @endif
                            </td>
                        <td>$ {{ number_format($send->cost,2,',','.') }}</td>
                         <td>
                            <div>
                                {!! Form::open(['url' => ['admin/shipping/send',$send->id],'method' => 'DELETE' ]) !!}
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Deseas eliminar este envio?')"><i class="fa fa-trash"></i></button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                        <td>
                        <button class="btn btn-primary" ng-click='modificarWord("{{ $send->id }}")'><i class="fa fa-pencil"></i></button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-5">
                 <!--<div class="panel-title" style="margin-left: -10px">
                     <a data-toggle="modal" data-target="#envios_resto_del_mundo"
                         onclick="$('#modificar-word').hide();$('#agregar-word').show();" ng-click="limpiarEnvios()">
                      <i class="fa fa-plus"></i> Agregar un nuevo costo de envio Intercional</a>
                 </div>-->
            </div>
            <center>{!! $sends->setPath('')->render() !!}</center>
        </div>
        @include('admin.partials.local.modal-send')
    </div>
</div>