<div ng-show="size(relations) >= 1" class="related products">
    <h2>Productos Relacionados</h2>
    <div class="products row product-grid">
        <div class="masonry-item noo-product-column col-md-3 col-sm-6 product" ng-repeat="relation in relations | limitTo:4">
            <div class="noo-product-inner">
                <div class="noo-product-thumbnail">
                    <a href="{{ url('/') }}<% '/detail/' + relation.slug %>">
                        <img src="<% relation.images.data[0].url %>"
                             style="max-height: 200px; min-height: 200px" alt="">
                    </a>
                </div>
                <div class="noo-product-title">
                    <h3><a href="{{ url('/') }}<% '/detail/' + relation.slug %>"><% relation.name %>
                        </a></h3>
                    <div class="price text-center"  ng-if="relation.special_price">
                        <span style="color: red; text-decoration: line-through">$<% relation.special_price | number:2 %></span>
                        $<% relation.price | number:2 %>
                    </div>
                    <div class="price text-center" ng-if="!relation.special_price">
                        $<% relation.price | number:2 %>
                    </div>
                    <div class="noo-product-action">
                        <div ng-if="!relation.stock == 0" class="noo-action">
                            <a href="#" ng-click="add(cartId , relation)" class="button product_type_simple add_to_cart_button">
                                <span>Agregar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>