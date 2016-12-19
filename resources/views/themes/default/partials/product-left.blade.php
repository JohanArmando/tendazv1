<!-- products news -->
<div ng-if="newProducts.length > 0">
    <div class="title"><span><a href="{{url('/')}}">Nuevos Productos</a></span></div>
    <div class="col-sm-4 col-md-3 box-product-outer" ng-repeat="product in newProducts | limitTo:4">
        <div class="box-product">
            <div class="img-wrapper">
                <a href="{{url('/')}}">
                    <img ng-src="<% BASEURL + '/uploads-products/' + store + '/' + product.attributes.image %>" alt="">
                </a>
                <div class="option">
                    <a ng-click="add(product)" data-toggle="tooltip" data-placement="bottom" title="Agregar al carro">
                        <i class="ace-icon fa fa-shopping-cart"></i></a>
                </div>
            </div>
            <h6><a href="{{url('/')}}"><div class="text-center"><% product.name %></div></a></h6>
            <div class="price text-center">
                <strong>$<% product.price | number:0 %></strong>
                <br>
            </div>

        </div>
    </div>
</div>