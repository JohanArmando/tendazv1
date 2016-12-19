<li class="dropdown dropdown-mega-menu {{ Request::is('products/*') ? 'active' : '' }}" ng-controller="categoryTemplateController" ng-init="x = 1">
    <span class="dropdown-toggle extra-arrow"></span>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="act-underline">Categorias </span>
    </a>
    <ul class="dropdown-menu megamenu" role="menu">
        <li class="col-sm-3">
            <ul class="megamenu__submenu">
                <script type="text/ng-template" id="treeLevel.html">
                    <li class="level<% x %>" ng-repeat="category in categories" >
                        <a href="{{ url('/') }}<% slug ? '/products' + slug + '/' + category.slug : '/products'  + '/' +category.slug %>"><% category.name %></a>
                        <ul ng-if="category.children.length > 0"  class="megamenu__submenu" ng-include="'treeLevel.html'"
                            onload="categories = category.children; slug = slug + '/' + category.slug ;x = x <= 4 ? x + 1 : 1 ">
                        </ul>
                    </li>
                </script>
                <div ng-include="'treeLevel.html'"></div>
            </ul>
        </li>
    </ul>
</li>
