'use strict';
(function(){

   angular.module('app.Controller',[])
      .controller('IndexProductController',function($scope,$http,Product , $filter){
           $scope.currentPage = 1;
           $scope.width = 250;
           if(tema == 'tema3'){
               $scope.pageSize = 9;
           }
           if(tema == 'tema2'){
               $scope.pageSize = 10;
           }

           if(tema == 'tema1'){
               $scope.pageSize = 12;
           }

           if(tema == 'default'){
               $scope.pageSize = 9;
           }
           $scope.now = now;
           $scope.slide_hide = 0;
           $scope.hidden = function () {
             if($scope.q != ''){
                 $scope.slide_hide = 1;
             }else{
                 $scope.slide_hide = 0;
             }
           };
           $scope.Math = window.Math;

           //funcion para cambiar la cantidad de datos que se muestran por pagina
           $scope.changePageSize = function (size) {
               $scope.pageSize = size;
           }
           //funcion para limpiar checkbox
           $scope.cleanCheck = function (filter) {

               $("input[name="+ filter +"]").attr('checked', false);
           }
           //funcion para ver el detalle del producto en el tema 4
           $scope.viewDetail = function (slug,uuid){
               Product.detailProduct(slug,uuid)
                   .success(function(response){
                        detailProduct($scope , response , true);
                   });
           }

           var URLactual = window.location.href;
           var slugLargo = URLactual.split('/');
           var sluggable = slugLargo[slugLargo.length - 1];
           if(sluggable){
               if(sluggable == 'products'){
                   sluggable = 'void';
               }
               if(sluggable == '#'){
                   sluggable = 'void';
               }
           }else{
               sluggable = 'void';
           }
           //funcion filtro para cambiar la variante de producto
           $scope.change = function () {
               //asigno las varaibles
               var option_1 = [];
               var option_2 = [];
               var option_3 = [];
               var opciones = [];
               //recorro el filtro y si  esta selecciona la agraga a opciones
                angular.forEach($scope.Filtros , function (filtro) {
                   angular.forEach(filtro.options , function (option) {
                       if(option.selected){
                           opciones.push(option);
                       }
                   });
                });
                var opciones_organizadas = [];
               //las organiza para q la ultima seleccionada se la pocion a elegir
                opciones_organizadas = $filter('orderBy')(opciones, '-$$hashKey');
               //y organiza la tres opciones posibles solo de auna
              angular.forEach(opciones_organizadas , function(option){
                      if($scope.productShow.option_name_1 == option.name){
                          if(option_1.length == 0){
                              option_1.push(option.value);
                          }
                      }
                      if($scope.productShow.option_name_2 == option.name){
                          if(option_2.length == 0){
                              option_2.push(option.value);
                          }
                      }
                      if($scope.productShow.option_name_3 == option.name){
                          if(option_3.length == 0){
                              option_3.push(option.value);
                          }
                  }
              });
               console.log(option_1);
               console.log(option_2);
               console.log(option_3);
               console.log($scope.todos);
               angular.forEach($scope.todos , function (producto) {
                  if(producto.option_value_1 == option_1 && option_1 != ''){
                      if(producto.option_value_2 == option_2 && option_2 != ''){
                          if(producto.option_value_3 == option_3 && option_3 != ''){
                              $scope.productShow = producto;
                          }
                      }
                  }
               });

           };
            //funcion ajax con jquery para agregar al carrito de compras
           $scope.comprar = function(id){
               var slug =  $('#agregar_'+id).data('slug');
               var path = $('#path').val() + '/' + id;
               var token =  $('#token').val();
               var cart =  $('#cart-product');
               var data = {'_token' : token };
               $.ajax({
                   url: path,
                   headers: {'X-CSRF-TOKEN': token},
                   type: 'GET',
                   dataType: 'json',
                   success:function(data){
                       console.log(data);
                       if(data.Success == 'Agregado'){
                           toastr.info('Producto '+ data.Name + ' Agregado al carrito, puedes verlo  <a href=' + BASEURL + "/cart/show" + ' ><strong>Aqui</strong></a>');
                        }
                       if(data.Success == 'Actualizado'){
                            toastr.success('Tu producto  '+ data.Name + ' tiene un 4item mas mirarlo  <a href='+ BASEURL + "/cart/show" + '><strong>Aqui</strong></a>');
                       }
                       $('#cart-product').html('');
                       $('#view-total-cart').html(numeral(data['subtotal']).format('$0,0.00'));
                       $('#view-count').html(data['count']);
                       $.each(data.carts,function(key,value) {
                           $.each(value.attributes,function(key , value ){
                               if(value.option_name_1 != ''){
                                   $('#cart-product').append('<li>-'+ (value.option_value_1) + (value.option_value_2) + (value.option_value_3) + '</li>');
                               }
                           });
                           $('#cart-product').append('<li><a><b>'+ value.name +'</b><span>x'+  value.quantity + '  ' +numeral(value.price * value.quantity).format('$0,0.00')+'</span><a></li>');
                       });
                    },
                    error:function(msj){
                    }
                })
           }

               $scope.more = function(){
                   Product.productCategory(sluggable)
                       .success(function(data) {
                           $scope.category = data.category;
                           if(data.products == ''){
                               $scope.noFound = 'No hay productos en esta categoria';
                           }
                           $scope.sortorder = 'name';
                           $scope.search = {};
                           $scope.datos = data.mas_vendidos;
                           var productos = [];
                           productos = $scope.datos;
                           angular.forEach(productos, function(value, key) {
                               value['properties'] = [{}];
                               var properties = [];
                               var properties_values = [];
                               properties = value['name_1'].split(',');
                               angular.forEach(value['name_2'].split(',') , function (v , k) {
                                   if(v != ''){
                                       properties.push(v);
                                   }
                               });
                               angular.forEach(value['name_3'].split(',') , function (v , k) {
                                   if(v != ''){
                                       properties.push(v);
                                   }
                               });
                               properties_values = value['value_1'].split(',');
                               angular.forEach(value['value_2'].split(',') , function (v , k) {
                                   if(v != ''){
                                       properties_values.push(v);
                                   }
                               });
                               angular.forEach(value['value_3'].split(',') , function (v , k) {
                                   if(v != ''){
                                       properties_values.push(v);
                                   }
                               });
                               var i = 0;
                               angular.forEach(properties,function(value_variante,key){
                                   if(value_variante != ''){
                                       value['properties'].push({
                                           'name': value_variante,
                                           'value': (properties_values)[i]
                                       });
                                   }
                                   i++;
                               });
                               value['properties'].push({
                                   'name': 'Categorias',
                                   'value': value['c_name']
                               });

                           });
                           var filters = [];
                           _.each(productos, function(productos) {
                               _.each(productos.properties, function(property) {
                                   var existingFilter = _.findWhere(filters, { name: property.name });

                                   if (existingFilter) {
                                       var existingOption = _.findWhere(existingFilter.options, { value: property.value });
                                       if (existingOption) {
                                           existingOption.count += 1;
                                       } else {
                                           existingFilter.options.push({ value: property.value, count: 1 });
                                       }
                                   } else {
                                       var filter = {};
                                       filter.name = property.name;
                                       filter.options = [];
                                       filter.options.push({ value: property.value, count: 1 });
                                       filters.push(filter);
                                   }
                               });
                           });
                           $scope.Filters = filters;

                       });
               };
           $scope.return = function(){
               Product.productCategory(sluggable)
                   .success(function(data) {
                       $scope.category = data.category;
                       if(data.products == ''){
                           $scope.noFound = 'No hay productos en esta categoria';
                       }
                       $scope.sortorder = 'name';
                       $scope.search = {};
                       $scope.datos = data.products;
                       var productos = [];
                       productos = $scope.datos;
                       angular.forEach(productos, function(value, key) {
                           value['properties'] = [{}];
                           var properties = [];
                           var properties_values = [];
                           properties = value['name_1'].split(',');
                           angular.forEach(value['name_2'].split(',') , function (v , k) {
                               if(v != ''){
                                   properties.push(v);
                               }
                           });
                           angular.forEach(value['name_3'].split(',') , function (v , k) {
                               if(v != ''){
                                   properties.push(v);
                               }
                           });
                           properties_values = value['value_1'].split(',');
                           angular.forEach(value['value_2'].split(',') , function (v , k) {
                               if(v != ''){
                                   properties_values.push(v);
                               }
                           });
                           angular.forEach(value['value_3'].split(',') , function (v , k) {
                               if(v != ''){
                                   properties_values.push(v);
                               }
                           });
                           var i = 0;
                           angular.forEach(properties,function(value_variante,key){
                               if(value_variante != ''){
                                   value['properties'].push({
                                       'name': value_variante,
                                       'value': (properties_values)[i]
                                   });
                               }
                               i++;
                           });
                           value['properties'].push({
                               'name': 'Categorias',
                               'value': value['c_name']
                           });

                       });
                       var filters = [];
                       _.each(productos, function(productos) {
                           _.each(productos.properties, function(property) {
                               var existingFilter = _.findWhere(filters, { name: property.name });

                               if (existingFilter) {
                                   var existingOption = _.findWhere(existingFilter.options, { value: property.value });
                                   if (existingOption) {
                                       existingOption.count += 1;
                                   } else {
                                       existingFilter.options.push({ value: property.value, count: 1 });
                                   }
                               } else {
                                   var filter = {};
                                   filter.name = property.name;
                                   filter.options = [];
                                   filter.options.push({ value: property.value, count: 1 });
                                   filters.push(filter);
                               }
                           });
                       });
                       $scope.Filters = filters;

                   });
           }

            Product.productCategory(sluggable)
           .success(function(data) {
                    $scope.category = data.category;
                    if(data.products == ''){
                        $scope.noFound = 'No hay productos en esta categoria';
                    }
                    if(data.sons == 'yes'){
                        var datos = [];
                        $scope.sortorder = 'name';
                        $scope.search = {};
                        angular.forEach(data.products,function(value,key){
                            angular.forEach(value,function(value,key){;
                                datos.push(value);
                            });
                        });
                        $scope.datos = $filter('orderBy')(datos, '-created_at');
                        $scope.other_pages = $filter('orderBy')(datos, '-created_at');
                    }else{
                        $scope.other_pages = $filter('orderBy')(data.products, '-created_at');
                        $scope.datos = $filter('orderBy')(data.products, '-created_at');
                    }
                    var productos = [];
                        productos = $scope.datos;

                    function sortByPrice(a,b) {
                        return b['price']-a['price'];
                    };
                    $scope.more_send = data.mas_vendidos;
                    productos.sort(sortByPrice);

                    $scope.slider_translate = {
                        minValue:productos[productos.length - 1].price,
                        maxValue:   productos[0].price,
                        showSelectionBar: true,
                        options: {
                            ceil:  productos[0].price,
                            floor: 0,
                            draggableRange: true,
                            translate: function (value) {
                                return '$' + value;
                            },
                        },
                    };

                        angular.forEach(productos, function(value, key) {
                            value['properties'] = [{}];
                            var properties = [];
                            var properties_values = [];
                            properties = value['name_1'].split(',');
                            angular.forEach(value['name_2'].split(',') , function (v , k) {
                                if(v != ''){
                                    properties.push(v);
                                }
                            });
                            angular.forEach(value['name_3'].split(',') , function (v , k) {
                                if(v != ''){
                                    properties.push(v);
                                }
                            });
                            properties_values = value['value_1'].split(',');
                            angular.forEach(value['value_2'].split(',') , function (v , k) {
                                if(v != ''){
                                    properties_values.push(v);
                                }
                            });
                            angular.forEach(value['value_3'].split(',') , function (v , k) {
                                if(v != ''){
                                    properties_values.push(v);
                                }
                            });
                            var i = 0;
                                angular.forEach(properties,function(value_variante,key){
                                    if(value_variante != ''){
                                            value['properties'].push({
                                                'name': value_variante,
                                                'value': (properties_values)[i]
                                            });
                                    }
                                    i++;
                                 });
                            value['properties'].push({
                                'name': 'Categorias',
                                'value': value['c_name']
                            });

                            });
                    var filters = [];
                    _.each(productos, function(productos) {
                        _.each(productos.properties, function(property) {
                            var existingFilter = _.findWhere(filters, { name: property.name });

                            if (existingFilter) {
                                var existingOption = _.findWhere(existingFilter.options, { value: property.value });
                                if (existingOption) {
                                    existingOption.count += 1;
                                } else {
                                    existingFilter.options.push({ value: property.value, count: 1 });
                                }
                            } else {
                                var filter = {};
                                if(property.name != '' || property.name != null){
                                    filter.name = property.name;
                                }

                                if(property.value != '' || property.value != null){
                                    filter.options = [];
                                    filter.options.push({ value: property.value, count: 1 });
                                }
                                filters.push(filter);
                            }
                        });
                    });
                    $scope.Filters = filters;

           });
        })
       .controller('DetailProductController',function($scope,$http,Product){
           //captura el slug del producto
           var url = document.URL;
           var slugable = url.split('/');
           var slug = slugable[slugable.indexOf("detail-product") + 1];
           //funcion que actualiza el producto segun la variante que se escoja
            Product.detailProduct(slug)
                .success( function(response){
                    detailProduct($scope , response , false);
                    if(response.allProducts.length == 1){
                        console.log(response.relation);
                        $scope.relation = response.relation;
                    }
                });
       })

       .filter('startFrom',function(){
           return function(data,start){
               if (!data || !data.length) { return; }
               start = +start; //parse to int
               return data.slice(start);
           }
       })
       .controller('cartController',function($scope,$http,Product){
           Product.cart()
               .success(function (data) {
                   $scope.carts = data.carts;
               })
       })

       .filter('dynamicFilter', function () {
           return function (products, filterCategories) {
               var filtered = [];
               var productFilters = _.filter(filterCategories, function(fc) {
                   return  _.any(fc.options, { 'IsIncluded': true });
               });
               _.each(products, function(prod) {
                   var includeProduct = true;
                   _.each(productFilters, function(filter) {
                       var props = _.filter(prod.properties, { 'name': filter.name });
                       if (!_.any(props, function(prop) { return _.any(filter.options, { 'value': prop.value, 'IsIncluded': true }); })) {
                           includeProduct = false;
                       }
                   });
                   if (includeProduct) {
                       filtered.push(prod);
                   }
               });
               return filtered;
           };
       })
       .filter('rangeFilter', function() {
        return function( items, slider_translate ) {
            var filtered = [];
            var max = parseInt(slider_translate.maxValue);
            var min = parseInt(slider_translate.minValue);
            _.each(items, function(item) {
                if( item.price >= min && item.price <= max ) {
                    filtered.push(item);
                }
            });
            return filtered;
        };
    })
    .filter('variant' , function () {
       return function (products ,variant ) {
           var filter = [];
           _.each(products, function (product) {
               _.each(product , function (p) {
                  if(variant.option_1 == p.option_1 || variant.option_1 == p.option_2 || variant.option_1 == p.option_3  ){
                      if(variant.option_2 == p.option_1 || variant.option_2 == p.option_2 || variant.option_2 == p.option_3  ){
                          if(variant.option_3 == p.option_1 || variant.option_3 == p.option_2 || variant.option_3 == p.option_3  ) {
                              filter.push(p);
                          }
                      }
                   }
               });
           });
           return filter;
       }
    })
       //Filtros angular para hacer capitalize ya sea a todas las letras de una oracion o solo a una
    .filter('capitalize' , function () {
               return function(input, all) {
                   var reg = (all) ? /([^\W_]+[^\s-]*) */g : /([^\W_]+[^\s-]*)/;
                   return (!!input) ? input.replace(reg, function (txt) {
                       return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                   }) : '';
               }
       });

})();

function filtros(productos){
    var filters = [];
    _.each(productos, function(productos) {
        _.each(productos.properties, function(property) {
            var existingFilter = _.findWhere(filters, { name: property.name });
            if (existingFilter) {
                var existingOption = _.findWhere(existingFilter.options, { value: property.value , name: property.name});
                if (existingOption) {
                    existingOption.count += 1;
                } else {
                    existingFilter.options.push({ value: property.value, count: 1 , name: property.name });
                }
            } else {
                var filter = {};
                if(property.name != '' || property.name != null){
                    filter.name = property.name;
                }

                if(property.value != '' || property.value != null){
                    filter.options = [];
                    filter.options.push({ value: property.value, count: 1 , name: property.name  });
                }
                filters.push(filter);
            }
        });
    });
   return filters;
}

function productos(productos){
    angular.forEach(productos, function(value, key) {
        value['properties'] = [{}];
        var properties = [];
        var properties_values = [];
        properties.push(value.option_name_1);
        properties.push(value.option_name_2);
        properties.push(value.option_name_3);
        properties_values.push(value.option_value_1);
        properties_values.push(value.option_value_2);
        properties_values.push(value.option_value_3);
        var i = 0;
        angular.forEach(properties,function(value_variante,key){
            if(value_variante != ''){
                value['properties'].push({
                    'name': value_variante,
                    'value': (properties_values)[i]
                });
            }
            i++;
        });
    });
    return productos;
}
function detailProduct($scope , response , boolean){
    //asigno los productos  amostrar
    $scope.productos = [];
    var products = [];
    //si el producto tiene variantes
    if(response.allProducts.length > 1){
        angular.forEach(response.allProducts , function (value , kye) {
            if(value.option_name_1 == '' && value.option_name_2 == '' && value.option_name_3 == ''){

            }else{
                //si cada variante no esta vacia
                //segun la forma de mostrar el detalle
                //si es click en ver agrega los datos a products
                //si es lick en la imagen redirige a detailproduct y agrega a productos
                //se ahce para que la vista principal de total product no se vea afectada
                if(boolean){
                    products.push(value);
                    $scope.todos = products;
                    $scope.productShow = products[0];
                }else {
                    $scope.productos.push(value);
                }
            }
        })
    }else{
        //si solo hay un producto igual
        //segun la forma de mostrar el detalle
        //si es click en ver agrega los datos a products
        //si es lick en la imagen redirige a detailproduct y agrega a productos
        //se ahce para que la vista principal de total product no se vea afectada
        if(boolean){
            $scope.productShow = response.allProducts[0];
            $scope.todos = response.allProducts;
        }else {
            $scope.productos = response.allProducts;
        }
    }
    //organiza los productos
    var productosOrganizados = productos(response.allProducts);

    //segun la forma del detalle asigana los fitros a ana variable distitnta del scope
    //si es en ver se asigna a filtros si es en detailproduct se asigna a filters
    if(boolean){
        $scope.Filtros = filtros(productosOrganizados);
    }else{
        $scope.Filters = filtros(productosOrganizados);
        $scope.detail = 'DetalleDelProducto';
    }
    //Funcion para cambiar aala variante de producto
    //asigna las imagenes
    $scope.images = response.images;

    //asigna las categorias del producto
    if(response.allCategories){
        $scope.listCategories = response.allCategories;
        var slug = '';
        angular.forEach(response.allCategories , function (value ,  key) {
            slug += value.slug+'/';
            value.totalSlug = slug;
        });
    }else{
        $scope.listCategories = null;
    }
}
