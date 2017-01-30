<div class="hidden">
	<nav id="off-canvas-menu">
		<ul class="expander-list">
			<li>
				<span class="name">
					<a href="{{url('/')}}"><span class="act-underline">INICIO</span></a>
				</span>

			</li>
			<li ng-controller="categoryTemplateController" ng-init="x = 1">
				<span class="name"><span class="expander">-</span>
					<a href="#"><span class="act-underline">Categorias </span></a>
				</span>
				<ul class="multicolumn">
					<script type="text/ng-template" id="treeLevel.html">
						<li class="level<% x %>" ng-repeat="category in categories" >
							<a href="{{ url('/') }}<% slug ? '/products' + slug + '/' + category.slug : '/products'  + '/' +category.slug %>"><% category.name %></a>
							<ul ng-if="category.children.length > 0"  class="multicolumn" ng-include="'treeLevel.html'"
								onload="categories = category.children; slug = slug + '/' + category.slug ;x = x <= 4 ? x + 1 : 1 ">
							</ul>
						</li>
					</script>
					<div ng-include="'treeLevel.html'"></div>
				</ul>
			</li>
			<li>
				<span class="name">
					<a href="{{ url('/products')}}"><span class="act-underline">PRODUCTOS</span></a>
				</span>
			</li>
			<li>
				<span class="name">
					<a href="{{url('/cart/buy')}}">
						<span class="act-underline"><span class="act-underline">CARRITO DE COMPRAS</span></span>
					</a>
				</span>
			</li>
			<li>
				<span class="name">
					<a href="{{url('/contact')}}"><span class="act-underline">CONTACTENOS</span></a>
				</span>
			</li>
		</ul>
	</nav>
</div>