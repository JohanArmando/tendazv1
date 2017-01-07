@section('title')
    Crear producto
@stop
@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/font-awesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('components/admin/css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/admin/css/app.css') }}">
@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/products.png')}}">&nbsp; Agregar productos
            </h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="{{url('admin/products')}}" style="color: orange;">Productos</a></li>
                    <li style="color: orange;">Agregar Productos</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="border: none">
                    <br>
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" style="background-color: white; ">
                                    <li class="active">
                                        <a href="#popular" data-toggle="tab">
                                            <h2>
                                                <i  class="fa fa-thumbs-o-up text-tendaz"></i>Publicaci&oacute;n Simple
                                            </h2>
                                            <span class="media-meta" STYLE="margin-left: 15%">Publica de forma r&aacute;pida</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#comments" data-toggle="tab">
                                            <h2>
                                                <i  class="fa fa-hand-peace-o text-tendaz"></i>Publicaci&oacute;n Avanzada
                                            </h2>
                                            <span class="media-meta" style="margin-left: 15%"> Publica tu producto detalladamente</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content panel" style="padding: 2.5%">
                                    <div class="tab-pane  np" id="popular">
                                        <div class="media-list">
                                            @include('admin.partials.form-simple')
                                        </div>
                                    </div>
                                    <div class="tab-pane np active" id="comments">
                                        <div class="media-list">
                                            {!! Form::open(['url' => url ("admin/products?client_secret=".$shop->uuid."&client_id=".$shop->id)  , 'method' => 'POST' , 'class' => 'dropzone hidden-xs hidden-sm' ,'id' => 'my-dropzone-avanzado' , 'files' => true]) !!}
                                            @include('admin.partials.form-advanced')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-end-space"></div>
    </div>

    <div id="variant-modal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editando <span id="variant-modal-values"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row phone-input">
                        <div class="col-xs-4">
                            <label>Precio</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input class="form-control" name="price" size="30" type="text" value="" />
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label>Peso</label>
                            <div class="input-group">
                                <div class="input-group-addon">kg</div>
                                <input class="form-control" name="weight" size="30" type="text" value="" />

                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label>Stock</label>
                            <input class="form-control" name="stock" size="30" type="text" value="" />
                        </div>
                    </div>
                    <div class="row m-top phone-input">
                        <div class="col-xs-4">
                            <label>Precio Promocional</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input class="form-control" name="promotional_price" size="30" type="text" value="" />
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label>SKU</label>
                            <input class="form-control" name="sku" size="30" type="text" value="" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">
                        <input type="submit" class="btn btn-default pull-left" value="Cerrar"  data-dismiss="modal"/>
                        <a href="#" class="btn btn-default prev-variant">Anterior</a>
                        <a href="#" class="btn btn-default next-variant">Siguiente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

    <script type="text/javascript" src="{{ asset('administrator/plugins/summernote/js/summernote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/backend/forms/wysiwyg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/load-dropzone-avanzado.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/load-dropzone-simple.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/ajax-create-category.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/jquery-ui.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/jquery-tmpl.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/flat-ui.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/smoke.min.js') }}" ></script>
    <script src="{{ asset('components/admin/js/trumbowyg.min.js') }}"></script>
    <script>
        $('#providers').select2();
        $('#categories').select2();
        function justNumbers(e)
        {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))return true;
            return /\d/.test(String.fromCharCode(keynum));
        }
    </script>
    <script>
        $('.name-box').on('click',function(){
            if ($(this).hasClass('ck-button-select')){
                $(this).removeClass('ck-button-select');
            }else{
                $(this).addClass('ck-button-select');
            }
        });
        $('.color-box').on('click',function(){
            if ($(this).hasClass('ck-button-select')){
                $(this).removeClass('ck-button-select');
            }else{
                $(this).addClass('ck-button-select');
            }
        });
    </script>
    <script type="text/javascript">
        $('textarea').trumbowyg({
            fullscreenable: true,
            lang: 'es'
        });
    </script>
    <!-- <script id="tmpl-variant" type="text/x-jquery-tmpl">
          <tr >
            <td>
              <div class="color-box"></div>
              <input class="variant-order" type="hidden" name="product[variants][${id}][order]" value="${id}"/>
              <input type="hidden" data-lang="es_AR" class="i18n-hidden-0-es_AR" name="product[variants][${id}][i18n][es_AR][option_value_1]" value="${option_value_1}" />
              <input type="hidden" data-lang="es_AR" class="i18n-hidden-1-es_AR" name="product[variants][${id}][i18n][es_AR][option_value_2]" value="${option_value_2}" />
              <input type="hidden" data-lang="es_AR" class="i18n-hidden-2-es_AR" name="product[variants][${id}][i18n][es_AR][option_value_3]" value="${option_value_3}" />
              <input class="target-promotional_price" type="hidden" name="product[variants][${id}][promotional_price]" value=""/>
              <input class="target-sku"    type="hidden" name="product[variants][${id}][sku]"    value=""/>
              <input class="target-depth"  type="hidden" name="product[variants][${id}][depth]"  value=""/>
              <input class="target-width"  type="hidden" name="product[variants][${id}][width]"  value=""/>
              <input class="target-height" type="hidden" name="product[variants][${id}][height]" value=""/>
              <input class="target-image-id" type="hidden" name="product[variants][${id}][image_id]" value=""/>
              <input class="target-show-variant hidden" type="checkbox" checked name="product[variants][${id}][show]" value="1" />
            </td>
            <td class="option_value_1 option_value">${option_value_1}</td>
            <td class="option_value_2 option_value">${option_value_2}</td>
            <td class="option_value_3 option_value">${option_value_3}</td>
            <td>
              <div>
                <input  style="width: 150px;" id="stock${id}" class="form-control target-stock stock-input large-input" name="product[variants][${id}][stock]" size="30" type="text" value="" tabindex="${tabindex + 40}"/>
              </div>
            </td>
            <td>
              <div class="input-group">
                <div class="input-group-addon">$</div>
                <input id="price${id}" class="form-control target-price price large-input" name="product[variants][${id}][price]" size="30" type="text" value="" tabindex="${tabindex + 40}" />
              </div>
            </td>
            <td>
              <div class="row">
                  <div class="col-xs-12">
                    <div class="input-append weight-input-append">
                      <div class="input-group">
                        <input id="weight${id}" class="target-weight form-control weight" name="product[variants][${id}][weight]" size="30" type="text" value="0.000" tabindex="${tabindex + 40}"/>
                        <div class="input-group-addon">kg</div>
                      </div>
                    </div>
                  </div>
              </div>
            </td>
            <td>
                <a class="btn btn-default variant-modal-trigger" href="#" tabindex="${tabindex + 40}">...</a>
            </td>
          </tr>
        </script> -->

    <script>
        // var default_values = {};
        // var option_amount = 1;
        // var editing_properties = true;
        // var variant_count = 0;
        // var recover = false;

        // if(option_amount_old > 1 ){
        //     option_amount = option_amount_old;
        //     recover = true;
        // }

        // function hideShowValues() {
        //     if(option_amount < 3) {
        //         $('.option_value_3-div').hide();
        //         $('.option_value_3-div input').val('');
        //         if(option_amount < 2) {
        //             $('.option_value_2-div').hide();
        //             $('.option_value_2-div input').val('');
        //         }
        //     }
        //     if(option_amount >= 2) {
        //         $('.option_value_2-div').show();
        //         if(option_amount >= 3) {
        //             $('.option_value_3-div').show();
        //         }
        //     }
        //     $(".option_value_1-label").html($("#option_name_1-display").html());
        //     if(option_amount > 1) {
        //         $(".option_value_2-label").html($("#option_name_2-display").html());
        //         if(option_amount > 2) {
        //             $(".option_value_3-label").html($("#option_name_3-display").html());
        //         }
        //     }
        // }

        // function arrHasTwoOrMore( arr ) {
        //     var j, n;
        //     n=arr.length;

        //     for (j=1; j<n; j++) {
        //         if (arr[0]!=arr[j]) return true;
        //     }
        //     return false;
        // }

        // function updateOptionAmountInput() {
        //     $("#option_amount-input").val(option_amount);
        //     $("#i18n-option1-tbody").toggle(option_amount > 1);
        //     $("#i18n-option2-tbody").toggle(option_amount > 2);
        // }




        // $('#simpleProductForm').on('admin.tabs_registered', function() {
        //     $(this).find(':input:enabled:visible:first').focus();
        // });


        // $(document).ready(function(){

        //     $('#tab-btn-yv').click( function(e) {
        //         $('#variant-options').prop('checked', true);
        //     });
        //     $('#tab-btn-nv').click( function(e) {
        //         $('#variant-options').prop('checked', false);
        //     });

        //     $('#option_name_1-delete').click(function(e) {
        //         e.preventDefault();
        //         if(option_amount <= 1) {
        //             alert("No\x20se\x20puede\x20borrar\x20la\x20\u00FAltima\x20propiedad.");
        //         }

        //         option_amount = option_amount - 1;
        //         var $option_name_2 = $('.option_name_2-edit');
        //         var $option_name_3 = $('.option_name_3-edit');
        //         $('.option_name_1-edit').val($option_name_2.val());
        //         $option_name_2.val($option_name_3.val());
        //         $option_name_3.val('');

        //         var $option_value_2 = $('.option_value_2-edit');
        //         var $option_value_3 = $('.option_value_3-edit');

        //         $('.option_value_1-edit').val($option_value_2.val());
        //         $option_value_2.val($option_value_3.val());
        //         $option_value_3.val('');
        //         $('#add-option-name').show();
        //         $option_name_3.hide();
        //         if(option_amount == 1) {
        //             $option_name_2.hide();
        //         }

        //         regenerateVariants(true);
        //         updateOptionAmountInput();
        //     });

        //     $('#option_name_2-delete').click(function(e) {
        //         e.preventDefault();

        //         option_amount = option_amount - 1;
        //         $('.option_name_2-edit').val($('.option_name_3-edit').val());
        //         $(".option_name_3-edit").val('');
        //         $('.option_value_2-edit').val($('.option_value_3-edit').val());
        //         $(".option_value_3-edit").val('');
        //         $('#add-option-name').show();
        //         $('#option_name_3-edit').hide();
        //         if(option_amount == 1) {
        //             $('#option_name_2-edit').hide();
        //         }

        //         regenerateVariants(true);
        //         updateOptionAmountInput();
        //     });

        //     $('#option_name_3-delete').click(function(e) {
        //         e.preventDefault();

        //         option_amount = option_amount - 1;
        //         $('#add-option-name').show();
        //         $(".option_name_3-edit").val('');
        //         $('#option_name_3-edit').hide();

        //         regenerateVariants(true);
        //         updateOptionAmountInput();
        //     });

        //     $(document).on("change", '.invalidates-variants', function(e) {
        //         $("#invalidate-variants-cache").val('invalidate');
        //     });

        //     $("input.option-name-edit").keydown(function(event){
        //         if(event.keyCode == 13) {
        //             event.preventDefault();
        //             return false;
        //         }
        //     });

        //     $('#add-option-name').click(function(e) {
        //         e.preventDefault();
        //         option_amount = option_amount + 1;
        //         if(option_amount == 3) {
        //             $(this).hide();
        //         }
        //         $('#option_name_' + option_amount + '-edit').show();
        //         $('#option_name_' + option_amount + '-edit').find('.option-name-select').focus();

        //         regenerateVariants(true);
        //         updateOptionAmountInput();
        //     });

        //     var variants = [];
        //     var admin_lang = 'es_AR';
        //     var current_product_variants = {};

        //     function updateSelect2($combo) {
        //         var key = $combo.closest('.option-name').find('.option-name-select').val().toLowerCase();

        //         var tags = [];
        //         if(key != '__custom' && variants[key] && variants[key][admin_lang]) {
        //             $.each(variants[key][admin_lang], function(key, value){
        //                 tags.push(value);
        //             });
        //         }
        //         $combo.select2({
        //             tags: tags,
        //             theme: "bootstrap",
        //             id: function (e) { return e.id.trim(); },             tokenSeparators: ["¬"],
        //             separator: "¬" // Aikido, so that it doesn't separate by commas
        //         });
        //         $combo.select2("container").find("ul.select2-choices").sortable({
        //             containment: 'parent',
        //             start: function() {
        //                 $combo.select2("onSortStart");
        //             },
        //             update: function() {
        //                 $combo.select2("onSortEnd");
        //             }
        //         });

        //     }

        //     function findVariantValueTranslation(attribute, value, langFrom, langTo){
        //         attribute = attribute.toLowerCase();
        //         if (!variants[attribute]){
        //             return value;
        //         }

        //         if(current_product_variants && current_product_variants[attribute]
        //                 && current_product_variants[attribute][langTo]
        //                 && current_product_variants[attribute][langTo][value]) {
        //             return current_product_variants[attribute][langTo][value];
        //         }

        //         var variantId = null;
        //         for (i in variants[attribute][langFrom]){
        //             if(variants[attribute][langFrom][i] == value){
        //                 variantId = i;
        //                 break;
        //             }
        //         }

        //         if (variantId && variants[attribute][langTo] && variants[attribute][langTo][variantId]){
        //             return variants[attribute][langTo][variantId];
        //         } else {
        //             return value;
        //         }
        //     }

        //     // Update each i18n value
        //     function updateI18nValues() {
        //         // Obtain the base values
        //         var values = [  $("#option_name_1-edit .option_values-edit").select2("val"),
        //             $("#option_name_2-edit .option_values-edit").select2("val"),
        //             $("#option_name_3-edit .option_values-edit").select2("val")  ];

        //         // First remove all the values that do not match
        //         $("#option-value-i18n-table tbody tr.i18n-value-row").each(function(idx) {
        //             var $this = $(this);
        //             var option_index = $this.data('option-index');
        //             var main_value = $this.data('main-value');
        //             if(! ($.inArray(main_value, values[option_index]) > -1) ) {
        //                 // No option value, so remove
        //                 $this.remove();
        //             }
        //         });

        //         // Then add the values that are missing
        //         var hideAll = true;
        //         for(option_index in values) {
        //             for(main_value_index in values[option_index]) {
        //                 var main_value = values[option_index][main_value_index];
        //                 if($(".i18n-variant-" + option_index).filter(function() {
        //                             return $(this).data('main-value') == main_value;
        //                         }).length == 0) {
        //                     // If value not there, add new
        //                     var attribute = $('#i18n-option'+option_index+'-tbody .option-name-td').text();
        //                     var new_value = $('#tmpl-i18n-value').tmpl({
        //                         'option_index' : option_index,
        //                         'main_value' : main_value
        //                     });
        //                     // new_value.appendTo('#i18n-option' + option_index + "-tbody");
        //                 }
        //             }

        //             // Hide empty elements from the table
        //             var tbody = $('#i18n-option' + option_index + "-tbody");
        //             if (values[option_index].length == 0){
        //                 tbody.hide();
        //             } else {
        //                 tbody.show();
        //                 hideAll = false;
        //             }
        //             $(".i18n-value-input").change();
        //         }

        //         if (hideAll || true){
        //             $("#option-value-i18n-table").hide();
        //         } else {
        //             $("#option-value-i18n-table").show();
        //         }
        //     }

        //     function findVariant(val_1, val_2, val_3) {
        //         return $("#variant-list").find('tbody tr').filter(function(index) {
        //             $this = $(this);
        //             return $this.find('.option_value_1').text() == val_1 && $this.find('.option_value_2').text() == val_2 && $this.find('.option_value_3').text() == val_3;
        //         });
        //     }

        //     // colors definition
        //     var colors = [ {'name':'Negro', 'color':'#000'}, {'name':'Blanco', 'color':'#FFF'}, {'name':'Rojo', 'color':'#dc0000'}, {'name':'Azul', 'color':'#0000dc'}, {'name':'Verde', 'color':'#00dc00'}, {'name':'Amarillo', 'color':'#ffee02'}, {'name':'Rosa', 'color':'#e998ff'}, {'name':'Gris', 'color':'#aaa'}, {'name':'Marrón', 'color':'#a57d38'}, {'name':'Marino', 'color':'#000080'}, {'name':'Naranja', 'color':'#FFA500'}, {'name':'Púrpura', 'color':'#800080'}, {'name':'Plata', 'color':'#C0C0C0'}, {'name':'Real', 'color':'#4169E1'}, {'name':'Beige', 'color':'#F5F5DC'} ];

        //     // array to store variants in case regenerateVariants needs them
        //     var previousVariants = [];




        //     function regenerateVariants(checked) {
        //         // Calculate the cartesian product of the variants
        //         var values_1 = $("#option_name_1-edit .option_values-edit").select2("val");
        //         var values_2 = $("#option_name_2-edit .option_values-edit").select2("val");
        //         var values_3 = $("#option_name_3-edit .option_values-edit").select2("val");

        //         if(values_1.length == 0) values_1 = [''];
        //         if(values_2.length == 0 || option_amount < 2) values_2 = [''];
        //         if(values_3.length == 0 || option_amount < 3) values_3 = [''];

        //         // First remove all the variants that do not match
        //         $("#variant-list tbody tr").each(function(idx) {
        //             // Check if there is a variant with those values
        //             if(! ($.inArray($(this).find('.option_value_1').text(), values_1) > -1) ||
        //                     ! ($.inArray($(this).find('.option_value_2').text(), values_2) > -1) ||
        //                     ! ($.inArray($(this).find('.option_value_3').text(), values_3) > -1) ) {
        //                 // store values to use in new cartesian product
        //                 var variantKey = $(this).find('.option_value_1').text();
        //                 var variantPrice = $(this).find('input.price').val();
        //                 var variantStock = $(this).find('input.stock-input').val();
        //                 var variantWeight = $(this).find('input.weight').val();
        //                 previousVariants[variantKey] = {price: variantPrice, stock: variantStock, weight: variantWeight};
        //                 // No variant with those values, so remove
        //                 $(this).remove();
        //             }
        //         });

        //         if (values_1[0] == '' && values_2[0] == '' && values_3[0] == ''){
        //             $("#variant-list").hide();
        //         } else {
        //             $("#variant-list").show();
        //         }

        //         // Then add the variants that are missing
        //         for(val_1 in values_1) {
        //             for(val_2 in values_2) {
        //                 for(val_3 in values_3) {
        //                     // Skip and empty variant
        //                     if (values_1[val_1] == '' && values_2[val_2] == '' && values_3[val_3] == ''){
        //                         return;
        //                     }

        //                     // If this combination is not present, add
        //                     var $variant = findVariant(values_1[val_1], values_2[val_2], values_3[val_3]);
        //                     if($variant.length == 0) {
        //                         console.log($variant);
        //                         // If variant not there, add new
        //                         var new_variant = $('#tmpl-variant').tmpl({
        //                             'id' : variant_count,
        //                             'option_value_1' : values_1[val_1],
        //                             'option_value_2' : values_2[val_2],
        //                             'option_value_3' : values_3[val_3],
        //                             'tabindex' : 1000
        //                         });

        //                         // fill color boxes for new variants
        //                         for (i = 0; i < colors.length; i++) {
        //                             if (values_1[val_1] == colors[i].name || values_2[val_2] == colors[i].name || values_3[val_3] == colors[i].name) {
        //                                 if (typeof new_variant != 'undefined') {
        //                                     new_variant.find('.color-box').addClass('color-box-border').attr("style", "background-color: "+colors[i].color);
        //                                 } else {
        //                                     $variant.find('.color-box').addClass('color-box-border').attr("style", "background-color: "+colors[i].color);
        //                                 }
        //                             }
        //                         }

        //                         variant_count = variant_count + 1;
        //                         new_variant.appendTo('#variant-list tbody');

        //                         // get the values of the product with no variants
        //                         var default_price = $("#no-variants input.price").val();
        //                         var default_weight = $("#no-variants input.weight").val();
        //                         var default_stock = $("#no-variants input.stock-input").val();
        //                         var default_promo_price = $("#no-variants input.promo_price").val();

        //                         // get the values of the first matching previous variant if exist
        //                         if (values_1[val_1] in previousVariants) {
        //                             default_price = previousVariants[ values_1[val_1] ].price;
        //                             default_weight = previousVariants[ values_1[val_1] ].weight;
        //                             default_stock = previousVariants[ values_1[val_1] ].stock;
        //                         }


        //                         new_variant.find('.price').val(default_price);
        //                         new_variant.find('.weight').val(default_weight);
        //                         new_variant.find('input.target-promotional_price').val(default_promo_price);

        //                         if(!checked && !recover) {
        //                             new_variant.find('input.stock-input').val(0);
        //                             new_variant.find('.target-show-variant').removeAttr('checked');
        //                             new_variant.addClass('off');
        //                         } else {
        //                             new_variant.find('input.stock-input').val(default_stock);
        //                         }
        //                     }

        //                     // fill color boxes from recovered variants
        //                     if (recover) {
        //                         for (i = 0; i < colors.length; i++) {
        //                             if (values_1[val_1] == colors[i].name || values_2[val_2] == colors[i].name || values_3[val_3] == colors[i].name) {
        //                                 $variant.find('.color-box').addClass('color-box-border').attr("style", "background-color: "+colors[i].color);
        //                             }
        //                         }
        //                     }

        //                 }
        //             }
        //         }

        //         //Now sort the variants
        //         var rows = $('#variant-list tbody').children('tr').get(); // creates a JS array of DOM elements
        //         var generate_position = function($variant) {
        //             var single_value_1  = $variant.find('.option_value_1').text();
        //             var single_value_2  = $variant.find('.option_value_2').text();
        //             var single_value_3  = $variant.find('.option_value_3').text();

        //             var base_1 = values_3.length ? values_2.length * values_3.length : (values_2.length ? values_2.length : 1);
        //             var base_2 = values_3.length ? values_3.length : 1;
        //             var base_3 = 1;

        //             var position = values_1.indexOf(single_value_1) * base_1;
        //             if(single_value_2 != '') {
        //                 position += values_2.indexOf(single_value_2) * base_2;
        //             }
        //             if(single_value_3 != '') {
        //                 position += values_3.indexOf(single_value_3) * base_3
        //             }

        //             return position;
        //         };
        //         rows.sort(function(a, b) {  // use a custom sort function

        //             var a_pos = generate_position($(a));
        //             var b_pos = generate_position($(b));

        //             return a_pos - b_pos;
        //         });

        //         var rows_length = rows.length;
        //         var parent = $('#variant-list tbody')[0];
        //         while (rows_length--) {
        //             parent.insertBefore(rows[rows_length], parent.firstChild);
        //             $(rows[rows_length]).find('.variant-order').val(rows_length);
        //         }
        //     }

        //     var is_first_time = true;

        //     // insta variants
        //     $("#option_name_1-edit .ck-button input").on("change", function () {
        //         addInstaVariant($(this), 'option_name_1-edit');
        //     });
        //     $("#option_name_2-edit .ck-button input").on("change", function () {
        //         addInstaVariant($(this), 'option_name_2-edit');
        //     });
        //     $("#option_name_3-edit .ck-button input").on("change", function () {
        //         addInstaVariant($(this), 'option_name_3-edit');
        //     });

        //     $("#option_name_1-edit .option_values-edit").on("select2-selecting", function(e) {
        //         includeInstaVariant(e.val, "option_name_1-edit");
        //     });
        //     $("#option_name_2-edit .option_values-edit").on("select2-selecting", function(e) {
        //         includeInstaVariant(e.val, "option_name_2-edit");
        //     });
        //     $("#option_name_3-edit .option_values-edit").on("select2-selecting", function(e) {
        //         includeInstaVariant(e.val, "option_name_3-edit");
        //     });

        //     $("#option_name_1-edit .option_values-edit").on("select2-removed", function(e) {
        //         removeInstaVariant(e.val, "option_name_1-edit");
        //     });
        //     $("#option_name_2-edit .option_values-edit").on("select2-removed", function(e) {
        //         removeInstaVariant(e.val, "option_name_2-edit");
        //     });
        //     $("#option_name_3-edit .option_values-edit").on("select2-removed", function(e) {
        //         removeInstaVariant(e.val, "option_name_3-edit");
        //     });

        //     function removeInstaVariant(name, container) {
        //         var name = name.replace("'","&quot");
        //         $("#"+container+" .ck-button input[value='"+name+"']").prop("checked", false);
        //     }
        //     function includeInstaVariant(name, container) {
        //         var name = name.replace("'","&quot");
        //         $("#"+container+" .ck-button input[value='"+name+"']").prop("checked", true);
        //     }

        //     function addInstaVariant(variant, container) {
        //         var nameToAdd = variant.val();
        //         if (variant.is(":checked")) {
        //             var valoresArr = $("#"+container+" .option_values-edit").select2("val");
        //             valoresArr.push(nameToAdd);
        //             $("#"+container+" .option_values-edit").select2('val', valoresArr).trigger("change");
        //         } else {
        //             valores = $("#"+container+" .option_values-edit").select2("val");
        //             var indexVal = valores.indexOf(nameToAdd);
        //             if (indexVal > -1) { valores.splice(indexVal, 1); }
        //             $("#"+container+" .option_values-edit").select2('val', valores).trigger("change");
        //         }
        //     }

        //     function updateInstaVariants(variant) {
        //         var container = variant.closest(".option-name").attr("id");
        //         var tags = variant.val();
        //         var tagsArr = tags.split("¬");
        //         for (i = 0; i < tagsArr.length; i++) {
        //             $("#"+container+" .ck-button input[value='"+tagsArr[i]+"']").attr("checked","checked");
        //         }
        //     }

        //     // clean variants on select click
        //     var selectCnt_1 = 0;
        //     var selectCnt_2 = 0;
        //     var selectCnt_3 = 0;

        //     $(document).on('click', "#option_name_1-edit .option-name-select", function(e) {
        //         var $select = $(this);
        //         selectCnt_1++;
        //         if (selectCnt_1 % 2 == 0) {
        //             $select.closest('.option-name').find('.option_values-edit').val(null).trigger("change");
        //             $select.closest('.option-name').find(".ck-button input").prop("checked", false);
        //         }
        //     });
        //     $(document).on('click', "#option_name_2-edit .option-name-select", function(e) {
        //         var $select = $(this);
        //         selectCnt_2++;
        //         if (selectCnt_2 % 2 == 0) {
        //             $select.closest('.option-name').find('.option_values-edit').val(null).trigger("change");
        //             $select.closest('.option-name').find(".ck-button input").prop("checked", false);
        //         }
        //     });
        //     $(document).on('click', "#option_name_3-edit .option-name-select", function(e) {
        //         var $select = $(this);
        //         selectCnt_3++;
        //         if (selectCnt_3 % 2 == 0) {
        //             $select.closest('.option-name').find('.option_values-edit').val(null).trigger("change");
        //             $select.closest('.option-name').find(".ck-button input").prop("checked", false);
        //         }
        //     });

        //     // Select2 for the property values listing
        //     $(".option_values-edit").each(function(idx) {
        //         updateSelect2($(this));
        //         updateInstaVariants($(this));
        //     });

        //     // Choose property combo-box
        //     $(document).on('change', ".option-name-select", function(e) {
        //         var $select = $(this);
        //         var key = $select.val().toLowerCase();

        //         var $option = $select.find(':selected');
        //         if($option.data('i18n')){
        //             $select.closest('.option-name').find('.option-name-edit').each(function(){
        //                 var value = $option.data('name_' + $(this).data('lang'));
        //                 $(this).val(value);
        //             });
        //         } else {
        //             $select.closest('.option-name').find('.option-name-edit').each(function(){
        //                 $(this).val('');
        //             });
        //         }

        //         switch(key) {
        //             case "cor":
        //             case "color":
        //                 $select.closest('.option-name').find('.snipplet_size').hide();
        //                 $select.closest('.option-name').find('.snipplet_colors').show();
        //                 $select.closest('.option-name').find('.option-name-tab').hide();
        //                 $select.closest('.option-name').find('.input-helper').html('Si no encuentras el valor que buscas puedes crearlo. Escríbelo y luego aprieta enter, así con cada uno.');
        //                 $select.closest('.option-name').find('.input-helper').addClass('input-propiedad');
        //                 break;
        //             case "tamanho":
        //             case "talla":
        //             case "size":
        //                 $select.closest('.option-name').find('.snipplet_size').show();
        //                 $select.closest('.option-name').find('.snipplet_colors').hide();
        //                 $select.closest('.option-name').find('.option-name-tab').hide();
        //                 $select.closest('.option-name').find('.input-helper').html('Si no encuentras el valor que buscas puedes crearlo. Escríbelo y luego aprieta enter, así con cada uno.');
        //                 break;
        //             case "__custom":
        //                 $select.closest('.option-name').find('.option-name-tab').show();
        //                 $select.closest('.option-name').find('.snipplet_size').hide();
        //                 $select.closest('.option-name').find('.snipplet_colors').hide();
        //                 $select.closest('.option-name').find('.input-helper').html('Escribe el valor (ej: negro, blanco..etc.) y luego aprieta enter, así con cada uno.');
        //                 break;
        //             default:
        //                 $select.closest('.option-name').find('.snipplet_size').hide();
        //                 $select.closest('.option-name').find('.snipplet_colors').hide();
        //                 $select.closest('.option-name').find('.option-name-tab').hide();
        //                 $select.closest('.option-name').find('.input-helper').html('Escribe el valor (ej: negro, blanco..etc.) y luego aprieta enter, así con cada uno.');
        //         }

        //         updateSelect2($select.closest('.option-name').find('.option_values-edit'));
        //         regenerateVariants(!is_first_time);

        //         is_first_time = false;
        //     });

        //     function update_i18n_table_titles() {
        //         // Update the i18n table's option names if changing the default
        //         var lang = $(this).data('lang');
        //         if(lang == null || lang == 'es_ar') {
        //             var option_index = $(this).closest('.option-name').data('option-index');
        //             var title = $(this).val() == '__custom' ? '' : $(this).val();
        //             $("#i18n-option" + option_index + "-tbody td.option-name-td").html(title);
        //         }
        //     }

        //     $(document).on('change', ".option-name-edit", update_i18n_table_titles);
        //     $(document).on('change', ".option-name-select", update_i18n_table_titles);
        //     $(".option-name-select").change();

        //     // Regenerate i18n values for the first time
        //     updateI18nValues();

        //     $(document).on('change', ".i18n-value-input", function() {
        //         // Update the i18n hidden inputs when those change

        //         var option_index = $(this).closest('.i18n-value-row').data('option-index');
        //         var lang = $(this).data('language');
        //         var main_value = $(this).closest('.i18n-value-row').find('.i18n-value-row-main-value').html().trim();
        //         var new_value = $(this).val();

        //         var class_to_modify = ".i18n-hidden-" + option_index + '-' + lang;
        //         var class_to_search = ".i18n-hidden-" + option_index + '-es_AR';
        //         $(class_to_search).each(function() {
        //             if($(this).val() == main_value) {
        //                 $(this).closest('tr').find(class_to_modify).val(new_value);
        //             }
        //         })
        //     });

        //     // Property values select2 change - Regenerate the variants table AND the i18n table if applicable (DEATH)
        //     $(".option_values-edit").change(regenerateVariants);
        //     $(".option_values-edit").change(updateI18nValues);

        //     // BEGIN VARIANT MODAL
        //     var prevVariant = null;
        //     var currentVariant = null;
        //     var nextVariant = null;
        //     function fillVariantModal(row){
        //         currentVariant = row;

        //         var modal = $("#variant-modal");
        //         var variant = '<span class="option_value_1">'+ row.find('.option_value_1').text() +'</span>' +
        //                 '<span class="option_value_2">'+ row.find('.option_value_2').text() +'</span>' +
        //                 '<span class="option_value_3">'+ row.find('.option_value_3').text() +'</span>';

        //         $("#variant-modal-values").html(variant);

        //         var depth = parseFloat(parseFloat(row.find('.target-depth').val()).toFixed(2)) || '';
        //         var width = parseFloat(parseFloat(row.find('.target-width').val()).toFixed(2)) || '';
        //         var height = parseFloat(parseFloat(row.find('.target-height').val()).toFixed(2)) || '';

        //         modal.find("input[name=price]").val(row.find('.target-price').val());
        //         modal.find("input[name=weight]").val(row.find('.target-weight').val());
        //         modal.find("input[name=stock]").val(row.find('.target-stock').val());
        //         modal.find("input[name=depth]").val(depth);
        //         modal.find("input[name=width]").val(width);
        //         modal.find("input[name=height]").val(height);
        //         modal.find("input[name=promotional_price]").val(row.find('.target-promotional_price').val());
        //         modal.find("input[name=sku]").val(row.find('.target-sku').val());

        //         if ( row.find('.target-show-variant').prop("checked") ) {
        //             $("#variant-modal input[name=show]").prop("checked", true);
        //         } else {
        //             $("#variant-modal input[name=show]").prop("checked", false);
        //         }

        //         var iterRow = row;
        //         while(!iterRow.is(':first-child') && iterRow.prev().hasClass('off')){
        //             iterRow = iterRow.prev();
        //         }
        //         if (iterRow.is(':first-child')){
        //             prevVariant = null;
        //             modal.find(".prev-variant").addClass('ninja');
        //         } else {
        //             prevVariant = iterRow.prev()
        //             modal.find(".prev-variant").removeClass('ninja');
        //         }

        //         var iterRow = row;
        //         while(!iterRow.is(':last-child') && iterRow.next().hasClass('off')){
        //             iterRow = iterRow.next();
        //         }
        //         if (iterRow.is(':last-child')){
        //             nextVariant = null;
        //             modal.find(".next-variant").addClass('ninja');
        //         } else {
        //             nextVariant = iterRow.next()
        //             modal.find(".next-variant").removeClass('ninja');
        //         }

        //         modal.find(':text:first').focus();
        //     }

        //     $("#variant-modal input").change(function(){
        //         var input = $(this);
        //         currentVariant.find('.target-' + input.attr('name')).val(input.val());
        //     });
        //     $("#variant-modal input[name=show]").click(function(){
        //         if ( $(this).prop("checked") ) {
        //             currentVariant.find('.target-show-variant').prop( "checked", true );
        //         } else {
        //             currentVariant.find('.target-show-variant').prop("checked", false);
        //         }
        //     });

        //     $('#variant-modal').on('shown', function () {
        //         $(this).find(':text:first').focus();
        //     })


        //     $("#variant-list").on('click', ".variant-modal-trigger", function(){
        //         var row = $(this).closest('tr');
        //         $("#variant-modal").modal({
        //             show: true,
        //             backdrop: true,
        //             keyboard: true
        //         });
        //         fillVariantModal(row);
        //         return false;
        //     });

        //     $("#variant-modal .prev-variant").click(function(){
        //         if (!$(this).hasClass('ninja')){
        //             fillVariantModal(prevVariant);
        //         }

        //         return false;
        //     });

        //     $("#variant-modal .next-variant").click(function(){
        //         if (!$(this).hasClass('ninja')){
        //             fillVariantModal(nextVariant);
        //         }

        //         return false;
        //     });

        //     $("#variant-modal form").submit(function(){
        //         $("#variant-modal").modal('hide');
        //         return false;
        //     });

        // });


    </script>
@stop