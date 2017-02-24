<!--NAV para los comentarion y la descripcion-->
<div >
<ul ng-if="product.description" class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#desc" aria-controls="desc" role="tab" data-toggle="tab">Descripci&oacute;n</a></li>
</ul>
<div class="tab-content tab-content-detail" ng-if="product.description">
    <div role="tabpanel" class="tab-pane active" id="desc"></div>
    <div class="well">
        <p align="justufy" ng-bind-html="product.description | limitTo:250">
        </p>
    </div>
</div>
</div>
<!--Fin-->

<!--Comentarios-->
    <div class="text-center hidden">
        <p><stron>Aqui van los comentarios</stron></p>
    </div>
<!--Fin-->
