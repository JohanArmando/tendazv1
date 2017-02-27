<div style="padding: 5%; ">
    <div class="row" style="color: orange !important;">
        <div id="s" class="tab-pane " role="tabpanel">
            <div id="variants" class="padding ">
                <input type="hidden" name="product[option_amount]" id="option_amount-input" value="1"/>
                <div id="option-name-container" class="option-names">
                    @for($i = 1 ; $i <= 3 ; $i++)
                        <div id="option_name_{{ $i }}-edit" class="{{ $i == 1 ? 'first' : '' }} option-name" data-option-index="{{ $i }}" style="{{ $i> 1 ? 'display:none;' : ''}} margin-top: 5%;">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <h4 class="variant-title" style="color: grey;">Propiedad</h4>
                                    <select name="option_name_$i" id="" class="form-control option-name-select dirty-ignore">
                                        @foreach($options as $option)
                                            <option
                                                      data-i18n="true"
                                                      data-name_es_ar="{{ $option->name }}"
                                                      data-name_pt_br="{{ $option->name }}"
                                                      value="{{ $option->name }}">
                                                {{ $option->name }}
                                            </option>
                                        @endforeach
                                        <option value="__custom"
                                                data-i18n="true"
                                                data-name_es_ar=""
                                                data-name_pt_br=""
                                                data-name_en_us="">Nueva...
                                        </option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <div class="option-name-tab" style="display:none;">
                                        <h4 class="new-variant-title">Nombre de la nueva propiedad</h4>
                                        <div class="clearfix ">
                                            <input id="option_name_{{ $i  }}-es_AR" class="form-control option-name-edit invalidates-variants option_name_{{ $i }}-edit" name="product[i18n][es_AR][option_name_{{ $i }}]" type="text" size="30" tabindex="1301" value="" data-lang="es_ar"/>
                                        </div>
                                    </div>
                                    <h4 class="variant-title" style="color:grey !important;">Valores de la propiedad</h4>
                                    <div class="snipplet_colors">
                                        @foreach($options as $option)
                                            @if($option->name == 'Color')
                                                @foreach($option->values as $value)
                                                    <div class="ck-button">
                                                        <label>
                                                            <div class="check-box"><input type="checkbox" class="check" value="{{ $value->name }}"></div>
                                                            <div class="color-box" style="background-color: {{ $value->attribute }};"></div>
                                                            <div class="name-box">{{ $value->name }}</div>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="snipplet_size">
                                        @foreach($options as $option)
                                            @if($option->name == 'Talla')
                                                @foreach($option->values->groupBy('attribute')->toArray() as $key => $value)
                                                    <div style="clear: both;">
                                                        <h4>{{ $key }}</h4>
                                                        @foreach($value as $v)
                                                            <div class="ck-button">
                                                                <label>
                                                                    <div class="check-box"><input type="checkbox" value="{{  $v['name'] }}"></div>
                                                                    <div class="name-box">{{ $v['name'] }}</div>
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div id="custom_variant_option" class="col-xs-12 p-right">
                                            <input type="text" tabindex="1399" class="option_values-edit"  style="width: 85% !important;"/>
                                            <span class="input-helper" >Escribe el valor (ej: negro, blanco..etc.) y luego aprieta enter, así con cada uno.</span>
                                        </div>
                                    </div>
                                </div> <!-- /col -->
                            </div> <!-- /row -->
                        </div> <!-- /option_name_1 -->
                    @endfor
                </div> <!-- /option-name-container -->
            </div> <!-- /#variants -->

            <div id="add-option-name" class="fl" >
                <a href="#" tabindex="1600" class="btn btn-primary" >Agregar nueva propiedad</a>
            </div>
            <div id="repeated-property-error-msg" class="m-top alert alert-danger hidden" data-alert="nothing">
                <a id="repeated-property-error-msg-close" class="close" href="#">x</a>
                <p>No puedes tener dos veces la misma propiedad en un producto.</p>
            </div>
            <div id="empty-property-error-msg" class="m-top alert alert-danger hidden" data-alert="nothing">
                <a id="empty-property-error-msg-close" class="close" href="#">x</a>
                <p>Debes escribir el nombre de cada propiedad.</p>
            </div>
            <div id="variant-list" class="m-top  table-property-edit" style="display: none;">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="w-5"></th>
                        <th class="w-25" colspan="3">Variante</th>
                        <th class="w-15">Stock</th>
                        <th class="w-15">Precio</th>
                        <th class="w-15">Peso</th>
                        <th class="w-10"></th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div id="modal-images" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3>Selecciona una imagen para <span></span></h3>
                        </div>
                        <div class="modal-body m-left oh">
                            <div class="row">
                                <div class="warning col-xs-12">
                                    Debes subir una imagen
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /yes-variant -->
    </div> <!-- /simple-prop-container -->
    <script>var option_amount_old = 0;</script>

    <div id="repeated-variant-error-msg" class="alert alert-danger hidden" data-alert="nothing">
        <a id="repeated-variant-error-msg-close" class="close" href="#">x</a>
        <p>Hay dos variantes con los mismos valores para las propiedades. Por favor, elimina una de ellas.</p>
    </div>

</div>
