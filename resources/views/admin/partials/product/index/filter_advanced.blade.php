<div class="col-md-12">
    <div class="panel panel-default" id="toolbar-showcase">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-search"></i> <strong>Busqueda Avanzada</strong></h3>
            <div class="panel-toolbar text-right">
                <div class="option">
                    <button class="btn down" data-toggle="panelcollapse"><i class="arrow" style="color: white;"></i></button>
                </div>
            </div>
        </div>

        <div class="panel-collapse in pull">
            <div class="panel-body">
                <p style="font-size: 14px;"><strong>Buscar por:</strong></p>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                    <div class="form-group">
                        <div class="clearfix" style="margin-bottom: 10px;"></div>
                        <label>Categoria</label>
                        <select name="categories" id="myCategory" class="form-control"
                                ng-options="category.name for category in categories track by category.id"
                                ng-model="category">
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <div class="clearfix" style="margin-bottom: 10px;"></div>
                        <label>Stock menor a</label>
                        <select name="stock" id="myStock" class="form-control"
                                ng-options="stock.text for stock in stocks track by stocks.value"
                                ng-model="stock.data">
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 m-bottom m-top" style="margin-bottom: 10px;">
                   <span class="checkbox custom-checkbox">
                   <div class="clearfix" style="margin-bottom: 10px;"></div>
                        <input type="checkbox" name="customcheckbox2" id="customcheckbox1" data-ng-model='price_promotion' data-ng-true-value='1'  data-ng-false-value='0'>
                        <label for="customcheckbox1">&nbsp;&nbsp;Solo productos con precio promocional.</label>
                        </span>
                    <br>
                    <span class="checkbox custom-checkbox">
                        <input type="checkbox" name="customcheckbox2" id="customcheckbox2" data-ng-model='show' data-ng-true-value='1' data-ng-false-value=''>
                        <label for="customcheckbox2">&nbsp;&nbsp;Solo productos visibles en la tienda.</label>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
