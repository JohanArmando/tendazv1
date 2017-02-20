
    <div class="media border-dotted" id="app-vue">
        <div class="row">
          <span class="media-body box">
            <div class="col-md-9 col-simple">
              <div class="form-group">
                <div class="row">
                    <label class="control-label" style="font-size: 1.2em; color: black;">Caracteristicas adicionales del producto
                        <small style="color: darkgray">(Opcional)</small>
                    </label>
                    <div id="variants" class="padding ">
                        <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <h4 class="variant-title" style="color: grey;">Propiedad</h4>
                                    <select v-model="option_selected" class="form-control" v-on:change="freshValues()">
                                      <option v-for="option in options" v-bind:value="option.id">
                                        @{{ option.name }}
                                      </option>
                                      <option value="-1">
                                        Nueva...
                                      </option>
                                    </select>
                                    <div v-show="nueva_propiedad">
                                        <h4 class="variant-title" style="color: grey;">Nueva propiedad</h4>
                                        <div class="form-group">
                                            <input type="text" v-model="option_new" class="form-control" id="" placeholder="nombre">
                                        </div>
                                        <button type="button" id="btn-store-options" v-on:click="storeOptions()" data-loading-text="procesando" class="btn btn-primary btn-block">Agregar nueva propiedad</button>
                                    </div>
                                    

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <div class="option-name-tab" style="display:none;">
                                        <h4 class="new-variant-title">Nombre de la nueva propiedad</h4>
                                        <div class="clearfix ">
                                            <input id="" class="form-control option-name-edit" name="" type="text" size="30" tabindex="1301" value="" data-lang="es_ar"/>
                                        </div>
                                    </div>
                                    <h4 class="variant-title" style="color:grey !important;">Valores de la propiedad</h4>
                                    
                                    <div class="row">
                                        <div  v-for="value in values" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                            <button v-if="!selectedValue(value)" type="button" v-on:click="addValue(value)" class="btn btn-block btn-default" style="margin-bottom: 5px;">@{{ value.name }}</button>
                                            <button v-else type="button" v-on:click="removeValue(value)" class="btn btn-block btn-primary" style="margin-bottom: 5px;">@{{ value.name }}</button>
                                        </div>
                                        <div  v-if="!nuevo_valor" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <h5 class="variant-title" style="color:grey !important;">Agregar nuevo valor de la propiedad</h5>

                                            <div class="row">
                                                <div class="col-md-4" >
                                                    <input type="text" v-model="value_new.name" class="form-control" id="" placeholder="Nombre">
                                                </div>
                                                <div class="col-md-4" >
                                                    <input type="text"  v-model="value_new.attribute" class="form-control" id="" placeholder="Atributo">
                                                </div>
                                                <div class="col-md-4" >
                                                    <button v-on:click="storeValues()" id="btn-store-values" data-loading-text="procesando" type="button" class="btn btn-primary btn-block">Agregar nuevo valor</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div> <!-- /col -->
                                <input type="hidden" v-model="ids_selected" name="values">
                                @{{ ids_selected }}
                        </div> <!-- /row -->
                        <hr>
                        <h4 class="variant-title" style="color:grey !important;">Propiedades que tiene el producto</h4>
                        <h5 style="color:grey !important;">@{{ text_selected_value }}</h5>
                    </div> <!-- /option-name-container -->

                </div>
              </div>
            </div>
          </span>
        </div>
    </div>
    <script>var option_amount_old = 0;</script>

