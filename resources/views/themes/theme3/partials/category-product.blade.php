<div class="noo-sidebar col-md-3">
    <div class="noo-sidebar-wrap" style="border: 1px solid #F4EEDE !important; margin: 15px 15px 15px 15px">
        <div class="widget commerce widget_product_categories" ng-controller="categoryTemplateController" ng-init="x = 1" ng-cloak="">
            <div style="margin: 15px 15px 15px 15px">
            <h3 class="widget-title">Categorias</h3>
            <ul class="product-categories">
                <li>
                    <a href="{{url('/products')}}">Todos los Productos</a>
                </li>
                <li ng-repeat="category in categories">
                    <a href="<% slug ? 'products' + slug + '/' + category.slug : 'products'  + '/' +category.slug %>">
                        <i class="fa fa-arrow-circle-right"></i> <% category.name %></a>
                </li>
            </ul>
            </div>
        </div>
    </div>

    <div class="noo-sidebar-wrap">
        <div class="widget commerce widget_product_search">
            <h3 class="widget-title">Buscar</h3>
            <form class="commerce-product-search">
                <input type="search" id="commerce-product-search-field" class="search-field" placeholder="Buscar productos&hellip;" value="" name="s"/>
                <input type="submit" value="buscar"/>
            </form>
        </div>
        <div class="widget commerce widget_price_filter hidden">
            <h3 class="widget-title">Filtrar por precio</h3>
            <form>
                <div class="price_slider_wrapper">
                    <div class="price_slider" style="display:none;"></div>
                    <div class="price_slider_amount">
                        <input type="text" id="min_price" name="min_price" value="" data-min="0" placeholder="Min price"/>
                        <input type="text" id="max_price" name="max_price" value="" data-max="15" placeholder="Max price"/>
                        <button type="submit" class="button">Filtro</button>
                        <div class="price_label" style="display:none;">
                            Price: <span class="from"></span> &mdash; <span class="to"></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="widget commerce widget_products hidden">
            <h3 class="widget-title">Productos populares</h3>
            <ul class="product_list_widget">
                <li>
                    <a href="{{url('/')}}">
                        <img width="100" height="100" src="{{asset('')}}" alt="" />
                        <span class="product-title">French Bread</span>
                    </a>
                    <span class="amount">&#36;10.00</span>
                </li>
                <li>
                    <a href="{{url('/')}}">
                        <img width="100" height="100" src="{{asset('')}}" alt="" />
                        <span class="product-title">Cookie</span>
                    </a>
                    <span class="amount">&#36;15.00</span>
                </li>

            </ul>
        </div>

    </div>
</div>