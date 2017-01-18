<div class="box-product-outer" ng-if="randomProduct">
    <div class="box-product">
        <div class="img-wrapper">
            <a href="{{url('/')}}<% BASEURL + '/detail/' + randomProduct.slug %>">
            <img ng-src="<% randomProduct.images.data[0].url %>"
                 style="max-height: 250px; min-height: 250px" alt="" class="img-responsive">
            </a>
            <div class="option" ng-hide="randomProduct.stock == 0" ng-click="add(cartId , randomProduct)">
                <a href="#"  data-toggle="tooltip" data-placement="bottom" title="Agregar">
                    <i class="ace-icon fa fa-shopping-cart"></i></a>

            </div>
        </div>
        <h6><a href="{{url('/')}}<% BASEURL + '/detail/' + randomProduct.slug %>">
                <div class="text-center"><% randomProduct.name %></div></a></h6>
        <div class="price text-center" ng-if="randomProduct.special_price">
            <strong>$<% randomProduct.special_price | number:0 %></strong>
            <span class="price-old">$<% randomProduct.price | number:0 %></span>
        </div>
        <div class="price text-center" ng-if="!randomProduct.special_price">
            <strong>$<% randomProduct.price | number:0 %></strong>
        </div>
    </div>
</div>
<!-- End Product Selection -->