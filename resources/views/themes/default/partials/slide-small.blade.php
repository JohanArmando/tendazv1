<div class="box-product-outer" ng-if="rand.name">
    <div class="box-product">
        <div class="img-wrapper">
            <a href="<% BASEURL + '/detail/' + rand.slug %>">
            <img ng-src="<% rand.attributes.image %>"
                 style="max-height: 265px; min-height: 265px" alt="">
            </a>
            <div class="option" ng-hide="rand.stock == 0" ng-click="add(rand)">
                <a href="#"  data-toggle="tooltip" data-placement="bottom" title="Agregar">
                    <i class="ace-icon fa fa-shopping-cart"></i></a>

            </div>
        </div>
        <h6><a href="<% BASEURL + '/detail/' + rand.slug %>">
                <div class="text-center"><% rand.name %></div></a></h6>
        <div class="price text-center" ng-if="rand.promotion">
            <strong>$<% rand.promotion_price | number:0 %></strong>
            <span class="price-old">$<% rand.price | number:0 %></span>
        </div>
        <div class="price text-center" ng-if="!rand.promotion">
            <strong>$<% rand.price | number:0 %></strong>
        </div>
    </div>
</div>
<!-- End Product Selection -->