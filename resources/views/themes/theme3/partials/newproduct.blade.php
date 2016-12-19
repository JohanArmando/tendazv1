<div class="col-sm-12">
    <div class="noo-product-slider-wrap commerce">
        <div class="noo-sh-title" >
            <h2 class="page-title eff" style="color: #45B284">Nuevos Productos</h2>
            <h5><i class="fa fa-chevron-down" style=" color: #45B284"></i></h5>
        </div>
        <div class="row noo-product-slider products product-grid">
            <div class="">
                <div class="col-md-3" ng-repeat="product in news | limitTo:8">
                    <div class="noo-product-inner" ng-class="{ ' sold-out' : product.stock == 0 , ' product--zoom' : !product.promotion && !product.feature}">
                        <div class="noo-product-thumbnail">
                            <a href="<% BASEURL + '/detail/' + product.slug %>">
                                <img width="600" style="min-height: 270px; height: 270px !important;"  height="270" ng-src="<% product.images.data[0].url %>" alt="">
                            </a>

                        </div>
                        <div class="noo-product-title">
                            <h3 style="height: 35px"><a href="<% BASEURL + '/detail/' + product.slug %>"><% product.name %></a></h3>
                            <span class="price"><span class="amount">$<% product.price | number:0 %></span></span>
                            <div class="noo-product-action">
                                <div class="noo-action">
                                    <button ng-click="add(product)" class="button product_type_simple add_to_cart_button">
                                        <span>Agregar al carrito</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>