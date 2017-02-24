@extends('admin.template')
@section('css')
    <style>
        .cover-container {
            width: 100%;
            white-space: nowrap;
            overflow-x: scroll;
            overflow-y: hidden;
        }
        .cover-item {
            position: relative;
            display: inline-block;
            margin: 8px 8px;
            vertical-align: bottom;
            border: 1px solid #ccc;
            padding: 15px;
            width: 260px;
            margin-right: 10px;
            margin-top: 0;
            border-radius: 5px;
            white-space: nowrap;
            height: 350px;
        }
        select{
            border: none;
            width: 100%;
            overflow-y: auto;
            vertical-align: top;
            height: 255px;
            outline: none;
            color: blue;
        }
        .checking{
            background-color: green;
            color: white;
            border-radius: 50%;
        }
        .ready{
            font-size: 1.5em;
            padding: 4% 0 4% 0;
        }
        .last-step{
            padding-top: 8%;
        }
        .loading{
            padding: 60% 0  60% 0;
            vertical-align: middle;
        }
    </style>
@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><img width="20" height="20" src="{{asset('admin/image/icons/icons-nav/mercadolibre.png')}}"> Mi Mercadolibre</h4>
        </div>
        <div class="page-header-section">
            <!--Toolbar-->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin/home')}}" style="color: darkgrey;"><i class="fa fa-home"></i> Inicio</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="col-md-12">
                                <h5><strong>Productos de Tendaz</strong></h5>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body mercadolibre">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <p class="text-left"><strong>Selecciona los productos que deseas transferir a MercadoLibre, recuerda que si tienen variantes, se enviara la primera variante.Ademas que debes elegir el tipo de publicacion y el tipo de publicacion.</strong></p>
                                    <table class="table table-striped" id="product-table" >
                                        <thead>
                                        <th>
                                            <div class="checkbox custom-checkbox pull-left"
                                                 data-original-title="Seleccionar todos"
                                                 data-toggle="tooltip"
                                                 data-placement="right">
                                                <input id="all-products"  type="checkbox"  >
                                                <label for="all-products"></label>
                                            </div>
                                        </th>
                                        <th>&nbsp;</th>
                                        <th>Producto</th>
                                        <th>Stock</th>
                                        <th>Precio Original</th>
                                        <th>Precio Promocional</th>
                                        <th>Categoria</th>
                                        <th>Variante</th>
                                        </thead>

                                        <tbody>
                                            @foreach($items as $item)
                                                <tr class="text-left">
                                                    <td>
                                                        <div class="checkbox custom-checkbox pull-left check" data-placement="right">
                                                            <input id="product_id_{{ $item->id }}" type="checkbox" >
                                                            <label for="product_id_{{ $item->id }}"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            @if(count($item->images) > 0)
                                                                <img src="{{ asset('uploads-products/').'/'.Auth::client()->get()->shop->id.'/'.$item->images->first()->path }}" alt="" title="" width="50"  height="50" class="img-circle">
                                                            @else
                                                                <img src="{{ asset('uploads-products/default.png') }}" alt="" title="" width="50"  height="50" class="img-circle">
                                                            @endif
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <a href="">{{ $item->name }}</a>
                                                        </span>
                                                    </td>
                                                    <td>{{ $item->stock }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->price_promotion ? number_format($item->price_promotion_amount , 0 , ',' , '.') : '' }}</td>
                                                    <td>
                                                        <i class="btn btn-tendaz fa fa-pencil"></i>
                                                        <span>Aqui el name de category</span>
                                                    </td>
                                                    <td>
                                                        @foreach($item->variants as $variant)
                                                            <p>{{ $item->option_value_1.'/' }}{{ $item->option_value_2.'/' }}{{ $item->option_value_3.'/' }}</p>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-offset-6 col-md-6 pull-right" style="margin-top: 2%">
                                <button class="btn btn-primary ">
                                    <i class="fa fa-random" aria-hidden="true"></i>&nbsp;Transferir a MercadoLibre</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-lg-12 col-md-12">
                    <div class="cover-container">
                        <div class="cover-item hidden">
                            <div class="text-center ">
                                <i class="fa fa-cog fa-spin fa-3x fa-fw  loading"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul id="movieList"></ul>

@endsection
@section('scripts')
    <script src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
    <script>
        $(document).on('ready' , function () {
            var flag = 0;
            $('.fa-pencil').on('click' , function () {
                var btn = $(this);
                $(this).attr('disabled' , true);
                $('.loading').closest('.cover-item').removeClass('hidden');
                $(this).removeClass('fa-pencil');
                $(this).html('<i class="fa fa-cog fa-spin  fa-fw"></i> Cargando ...');
                $.ajax({
                    'url' : "{{ url('admin/mercadolibre/categories/') }}",
                    'headers' : { 'CSRF-TOKEN' : "{{ csrf_token() }}"},
                    'type' : 'GET',
                    'dataType' : 'json',
                    'beforeSend' : function () {
                    },
                    'success' : function (response) {
                        btn.addClass('fa-pencil').show();
                        btn.html('');
                        btn.attr('disabled' , false);
                        $('html,body').animate({
                                    scrollTop: $(".cover-container").offset().top},
                                'slow');
                        var markup = "<div class='cover-item'>";
                        markup += "<select name='categoryTree.categId' id='root' data-id='' required='' title='Elige una categoría' size='20' data-path=''></select>";
                        markup += "</div>";
                        $(".cover-container").html(markup);
                        var option  = "<option class='category-option' value='${id}'>";
                        option += "${name}";
                        option += "</option>";
                        $.template( "categoryTemplate", option );
                        $.tmpl( "categoryTemplate", response.body ).appendTo( "#root    " );
                    }
                });
            });
            //cambio de categoria por cada uno de los selects
            $(document).on('change' , 'select' , function () {
                var aux = $(this).data('id');
                $.ajax({
                    'url' : "{{ url('admin/mercadolibre/categories/') }}" + "/" + $(this).val(),
                    'headers' : { 'CSRF-TOKEN' : "{{ csrf_token() }}"},
                    'type' : 'GET',
                    'dataType' : 'json',
                    'beforeSend' : function () {
                        var all_selects = $('.cover-item').not(':first');
                        if(aux){
                            var id = '';
                            $.each(all_selects , function (){
                                id = $(this).find('select').attr('id');
                                if(id > aux){
                                    $(this).remove();
                                }
                                if($(this).hasClass('last-step')){
                                    $(this).remove()
                                }
                            });
                        }else{
                            $.each(all_selects , function () {
                                $(this).remove();
                            });
                        }
                    },
                    'success' : function (response) {
                        //Si no tiene categories mostramos el continuar
                        if(!response.body.children_categories.length  && !$('.last-step').length){
                            var markup = "<div class='cover-item text-center last-step'>";
                            markup +="<span class='fa fa-check fa-5x checking'></span><p class='ready'>¡Listo!</p><input type='submit' name='continue' value='Continuar' class='btn btn-primary btn-block'> </div>";
                            markup += "</div>";
                            $(".cover-container").append(markup);
                        }else{

                            //si tiene id es decir no es categoria padre
                            if(aux){
                                //genere un cover item mas
                                var id = aux + 1;
                                if(!$('#' + id).length){
                                    var markup = "<div class='cover-item'>";
                                    markup += "<select name='categoryTree.categId' class='children' id='" + id + "'data-id='" + id +"' required='' title='Elige una categoría' size='20' data-path=''></select>";
                                    markup += "</div>";
                                    $(".cover-container").append(markup);
                                }
                                //agrega las opciones
                                var option  = "<option class='category-option' value='${id}'>";
                                option += "${name}";
                                option += "</option>";
                                $('#' + id)
                                        .find('option')
                                        .remove()
                                        .end();
                                $.template( "categoryTemplate", option );
                                $.tmpl( "categoryTemplate", response.body.children_categories ).appendTo("#"+id);
                            }else{
                                flag = 1;
                                if(!$('#' + flag).length){
                                    var markup = "<div class='cover-item'>";
                                    markup += "<select name='categoryTree.categId' class='children' id='" + flag + "'data-id='" + flag +"' required='' title='Elige una categoría' size='20' data-path=''></select>";
                                    markup += "</div>";
                                    $(".cover-container").append(markup);
                                }
                                var option  = "<option class='category-option' value='${id}'>";
                                option += "${name}";
                                option += "</option>";
                                $('#' + flag)
                                        .find('option')
                                        .remove()
                                        .end();
                                $.template( "categoryTemplate", option );
                                $.tmpl( "categoryTemplate", response.body.children_categories ).appendTo("#"+flag);
                            }
                        }
                        $('.cover-container').scrollLeft(300);
                    }
                });
            });
        });
    </script>
@stop