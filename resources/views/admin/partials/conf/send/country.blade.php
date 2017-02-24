<div class="panel panel-default" style="margin-left: 6%; margin-right: 6%" id="choose-base">
    <div class="panel-heading">
        <h4 class="panel-title">Configurar base de operaciones</h4>
    </div>
    <form method="post" action="{{ url('admin/setting/shipping/country') }}">
        <div style="margin:0;padding:0;display:inline">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        <div class="panel-heading"></div>
        <div class="panel-body">
            <p class="note">Elige desde que lugar har&aacute;s tus env&iacute;os.</p>
            <div class="m-bottom">
                @if(Auth('admins')->user()->shop->country->name != null)
                    <div class="col-md-5">
                        <label for="base-country">Pa&iacute;s</label>
                    {!! Form::select('country',$countries,$country->name,array('class' => 'form-control' ,'id' => 'base-country')) !!}
                    </div>
                @else

                    {!! Form::select('country',$countries,$country->name,array('class' => 'form-control' ,'id' => 'base-country')) !!}

                @endif
            </div>
                <div id="base-province-wrapper" class="m-bottom">
                    <div class="col-md-5">
                    <label for="base-province">Estado/Provincia</label>
                    <select id="base-province" name="province" class="form-control">
                    </select>
                    </div>
                </div>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
    </form>
</div>