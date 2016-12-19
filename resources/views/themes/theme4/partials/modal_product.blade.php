<div class="modal  modal--bg fade"  id="quickViewModal" >
	<div class="modal-dialog white-modal">
		<div class="modal-content container">
			<div class="modal-header">
			 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			 </div>
			<div class="product-popup">
				<div class="product-popup-content">
				<div class="container-fluid">
					<div class="row product-info-outer">
						<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
							<div class="product-main-image">
								<div><img class="product-main-image__item" ng-src="<% BASEURL + '/uploads-products/' + store + '/' + detail.attributes.image %>" height="750" alt="" ng-show="detail.attributes.image.length > 0" ></div>
								<div><img class="product-main-image__item"  ng-src="<% BASEURL + '/uploads-products/default.jpg' %>" alt="" ng-shwo="detail.attributes.image" height="750" ng-hide="detail.attributes.image.length > 0"></div>
							</div>
						</div>
						<div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
							<div class="wrapper">
								<div class="product-info__sku pull-left">SKU: <strong><% detail.sku ? detail.sku : 'NONE' %></strong></div>
								<div class="product-info__availabilitu pull-right">Disponibilidad:   <strong class="color"><% detail.stock > 0 ? 'En Stock' : 'Sin Stock'  %></strong></div>
							</div>
							<div class="product-info__title">
								<h2><% detail.name %></h2>
							</div>
							<div class="price-box product-info__price" ng-if="!detail.promotion">
								<span class="price-box__new" >$<% detail.price | number:0 %></span>
							</div>

							<div class="price-box product-info__price" ng-if="detail.promotion">
								<span class="price-box__new" >$<% detail.promotion_price | number:0 %></span>
								<span class="price-box__old">$<% detail.price | number:0 %></span>
							</div>
							<div class="divider divider--xs product-info__divider" ng-show="detail.description"></div>
							<div class="product-info__description">
								<div class="product-info__description__text" ng-bind-html="detail.description" >

								</div>
							</div>
							<div class="divider divider--xs product-info__divider"></div>
							<div class="divider divider--sm" ></div>
							<div ng-repeat="filter in filters">

								<div class="wrapper"  >
									<div class="pull-left">
										<span class="option-label"><% filter.name %>:</span>
									</div>
								</div>
								<ul class="options-swatch options-swatch--size options-swatch--lg" ng-if="filter.name == 'Talle'">
									<li><a ng-repeat="value in filter.options"><% value.value %></a></li>
								</ul>
								<ul class="options-swatch options-swatch--color options-swatch--lg" ng-if="filter.name == 'Color'">
									<li ng-repeat="value in filter.options">
										<a href="#" >
											<span class="swatch-label">
												<img ng-src="<% BASEURL + '/tema5/images/colors/' +  value.value + '.gif' %>" alt=""/>
											</span>
										</a>
									</li>
								</ul>

								<select class="form-control" ng-if="filter.name != 'Color' && filter.name != 'Talle'">
									<option ng-repeat="value in filter.options"><% value.value %></option>
								</select>
								<div class="pull-left required"></div>
							</div>
							<br><br>
							<div class="wrapper">
								<div class="pull-left"><span class="qty-label">Qty:</span></div>
								<div class="pull-left"><input type="text" name="quantity" class="input--ys qty-input pull-left" value="1"></div>
								<div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Agregar al carrito</button></div>
							</div>
							<ul class="product-link">

							</ul>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>