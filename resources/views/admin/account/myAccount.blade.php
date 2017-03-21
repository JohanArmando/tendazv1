@extends('layouts.administrator') @section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('components/admin/css/trumbowyg.min.css')}}"> @stop @section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class="ico-user"></i>&nbsp; Mi Cuenta</h4>
        </div>
        <div class="page-header-section">
            <!--Toolbar-->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin/home')}}" style="color: grey;">Inicio</a></li>
                    <li class="active"><a href="#" style="color: orange;">Mi cuenta</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div style="margin-bottom: 20px;"></div>
    @include('admin.partials.message')
    <div class="row" id="app">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h5><i class="fa fa-gears"></i>&nbsp; Mi cuenta</h5>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                      {!! Form::model($store,['url' => url("admin/account/preferences/$store->id") , 'method'=> 'put']) !!}
                           <div class="col-md-12">
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-sm-2">
                                         <label class="control-label">Telefono</label>
                                         {!! Form::select('phone_type',['mobile' => 'Celular', 'home' => 'Casa', 'work' => 'Trabajo', 'fax' => 'Fax'],$shop->phone_type,['class' => 'form-control']) !!}
                                     </div>
                                     <div class="col-sm-2">
                                         <label class="control-label">COD</label>
                                         <input class="form-control" value="{{$store->code_country}}" type="text" name="code_country" />
                                     </div>
                                     <div class="col-sm-2">
                                         <label class="control-label">Telefono</label>
                                         {!! Form::text('number_phone',$shop->phone_nummber,['class' => 'form-control', 'placeholder' => 'Telefono ', 'data-mask' => '999-999-9999']) !!}
                                     </div>
                                     <div class="col-sm-3">
                                         <label class="control-label">Estado</label>
                                         <select class="form-control" name="state" v-model="selected_state" v-on:change="getState()">
                                             <option v-for="state in states" v-bind:value="state.id" >@{{ state.name }}</option>
                                         </select>
                                     </div>
                                     <div class="col-sm-3">
                                         <label class="control-label">Ciudad</label>
                                         <select class="form-control" v-model="selected_city" name="city_id">
                                             <option v-for="city in cities" v-bind:value="city.id" >@{{ city.name }}</option>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <hr/>
                           </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="" class="control-label">Nombre de tu tienda</label>
                                            {!! Form::text('name',null,['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="col-sm-12control-label">Descripcion de tu negocio</label>
                                            {!! Form::textarea('message',null,['id' => 'editor', 'class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                          <span class="checkbox custom-checkbox custom-checkbox-inverse">
                                              @if($shop->use == 1)
                                                  <input type="checkbox" name="use" id="use"  checked>
                                              @else
                                                  <input type="checkbox" name="use" id="use" >
                                              @endif
                                              <label for="use">&nbsp;&nbsp;<strong>Usar el nombre y la descripsion del negocio para el SEO de su tienda.</strong></label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="control-label">¿Por que decisdiste probar Tendaz ?</label>
                                        {!! Form::select('why', [ '' => 'Elige una opcion...', 'curioso' => 'Por curioso. Estoy viendo y probnado como es el servicio', 'comenzando' => 'Estoy comenzando un negocio nuevo y quiero vender online', 'tengoUnNegocio' => 'Tengo un negocio fucionando y quiero empezar a vender online' , 'vendoOnline' => 'Ya vendo de manera onlien en otra tienda y quiero cambiar', 'probarTendaz' => 'Ya tengo un e-comerce propio y quiero probrar Tendaz' ] ,$shop->why, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="control-label">¿Cual es el actividad comercial de tu negocio ?</label>
                                        {!! Form::select('which', [ "" => 'Elige una opcion...', "indumentaria" => "Indumentaria", "accesorios" => "Accesorios de indumentaria", "salud" => "Salud y Belleza", "casa" => "Casa y jardin", "regalos" => "Regalos", "comidas" => "Comida y Bebida", "electronica" => "Electronia/IT/Computacion", "antiguedades" => "Antiguedades", "arte" => "Arte", "automoviles" => "Automoviles", "construccion" => "Construccion/Industria", "deportes" => "Deportes/Recreacion", "digital" => "Digital/Bienes digitales", "educacion" =>"Educaion", "insumo" => "Insumo de oficinas", "joyas" => "Joyas/Relojes", "juguetes" => "Juguetes/Jugos/Hobbies", "libros" => "Libros/Revistas", "mascotas" =>"Mascotas", "musica" => "Musica/Peliculas", "servicios" => "Servicios", "viajes" => "Vieajes", "eroticas" => "Eroticas", "libreria" => "Libreria/Grafica", "equipamiento" => "Equipamiento/Maquinaria", "otros" => "Otros" ] ,$shop->which, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="control-label">Cuentanos sobre tu empresa</label>
                                        {!! Form::select('say', [ "" => "Eligen una opcion...", "no-principal" =>"Es un emprendimiento, pero no es mi principal actividad comercial", "full" => "Es un emprendimiento, al cual nos dedicamos full time", "pequeña" => "Es una empresa pequeña, somos entre 5 y 15 personas aproximadamente", "mediana" => "Es una empresa mediana de mas de 15 empleados" ] ,$shop->say, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="{{ url('admin') }}" type="reset" class="btn btn-default"><i class="fa fa-times"></i> Cancelar</a>
                                <button type="submit" class="btn btn-primary"> Guardar Cambios</button>
                            </div>
                        </div>
                      {!! Form::close() !!}
                      <div class="col-md-12">
                          <div class="text-center" style="margin-top: 100px">
                              <small><strong>Al cancelar tu cuenta, tu tienda será cerrada y no recibirás más notificaciones de Tendaz.</strong></small>
                          </div>
                          <div style="margin-bottom: 20px;"></div>
                          {!! Form::open(['url' => "admin/account/preferences/$store->id" ]) !!}
                          <input type="hidden" value="DELETE" name="_method">
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary" onclick="return confirm('Seguro que quieres cancelar tu tienda?')">
                                  <i class="fa fa-exclamation-triangle"></i> Cerrar tienda
                              </button>
                          </div>
                          {!! Form::close() !!}
                      </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
<div class="page-end-space"></div>

@endsection
    @section('scripts')
    <script type="text/javascript" src="{{asset('administrator/plugins/inputmask/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('administrator/js/trumbowyg.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>
    <script type="text/javascript">
        $('#editor').trumbowyg({
            fullscreenable: false
        });
        var pre = @if (App::environment('local'))
          'http://';
        @else
          'https://';
        @endif
        var Api_Url = pre+"{{ env('APP_API_URL') }}";
        var Base_Url = "{{ url('') }}";
        Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf_token"]').attr('content');
        Vue.http.headers.common['Accept'] = 'application/json';
        Vue.http.headers.common['Content-Type'] = 'application/json';
        var app = new Vue({
        el: '#app',
          data: {
            states: [],
            cities: [],
            selected_state_aux: '',
            selected_state: '',
            selected_city: '',
            selected_city_aux: ''

          },
          mounted: function () {
            this.getMyCity();
          },
          methods: {
            loadStates: function () {
              this.$http.get(Api_Url+'/states?client_secret='+client_secret+'&client_id='+client_id,this.variant_new).
              then((response) => {
                  var data = response.body;
                  //$('#btn-store-variant').button('reset');
                  this.states = data.states;
                  this.selected_state = this.selected_state_aux;
                  this.loadCities(this.selected_state);

                  console.log(data);
              }, (response) => {
              // error callback
                  alert('error to load states');

              })
            },
            getState: function () {

               this.loadCities(this.selected_state);

            },
            loadCities: function (id) {
              this.$http.get(Api_Url+'/cities/'+id+'?client_secret='+client_secret+'&client_id='+client_id,this.variant_new).
              then((response) => {
                  var data = response.body;
                  this.cities = data.cities;
                  this.selected_city = this.selected_city_aux;

              }, (response) => {
              // error callback
                  alert('error to load cities');

              })
            },
            getMyCity: function () {
              this.$http.get(Base_Url+'/admin/account/preferences/self?client_secret='+client_secret+'&client_id='+client_id).
              then((response) => {
                  var data = response.body;
                  this.selected_city_aux = data.city_id;
                  this.selected_state_aux = data.state_id;
                  this.loadStates();

              }, (response) => {
              // error callback
                  alert('error to load states');

              })

            }


          },
        })
    </script>
@stop
