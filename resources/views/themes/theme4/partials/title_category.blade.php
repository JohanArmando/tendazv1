<div class="title-box" ng-cloak="">
    <h2 class="text-center text-uppercase title-under"><% cate ? cate : 'Todos los productos' %> </h2>
</div>
<h4 class="text-center text-uppercase">
    <small>{{ !Request::input('search') ?'': "Buscando '". Request::input('search') ."' en $shop->name" }}</small>
</h4>
<div class="offset-top-20"  ng-cloak="">
    <p class="light-font text-center" ng-if="products.length <= 0">No hay productos en esta categoria</p>
    <p class="light-font text-center" ng-if="products.length > 0 && cate != ''"><% notAvaliable %></p>
</div>