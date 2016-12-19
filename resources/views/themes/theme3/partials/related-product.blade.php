<div class="related products">
    <h2>Related Products</h2>
    <div class="products row product-grid">
        <div class="masonry-item noo-product-column col-md-3 col-sm-6 product" ng-repeat="relation in relations | limitTo:4">
            <div class="noo-product-inner">
                <div class="noo-product-thumbnail">
                    <a href="<% BASEURL + '/detail/' + relation.slug %>">
                        <img src="<% relation.attributes.image%>"
                             style="max-height: 200px; min-height: 200px" alt="">
                    </a>
                </div>
                <div class="noo-product-title">
                    <h3><a href="<% BASEURL + '/detail/' + relation.slug %>"><% relation.name %>
                        </a></h3>
                    <div class="price text-center"  ng-if="relation.promotion">
                        <p>$<% relation.promotion_price | number:2 %></p>
                    </div>
                    <div class="price text-center" ng-if="!relation.promotion">
                        $<% relation.price | number:2 %>
                    </div>
                    <div class="noo-product-action">
                        <div class="noo-action">
                            <a href="#" class="button product_type_simple add_to_cart_button">
                                <span>Agregar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>