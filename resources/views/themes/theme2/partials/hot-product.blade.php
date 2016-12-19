<div id="hot">

    <div class="box">
        <div class="container">
            <div class="col-md-12" ng-if="news.length > 0">
                <h2>Nuevos Productos</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row products">
            <div class="col-md-3 col-sm-6" ng-repeat="product in news | limitTo:4">
                <div ng-include="'tpl.html'"></div>
            </div>
        </div>
    </div>

</div>