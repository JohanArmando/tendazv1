<div class="row"  align="center">
    <table class="table-responsive table-product-no-variante">
        <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <div class="form-group" >
            <tr>
                <td><label class="col-md-6 control-label" id="label-precio">Precio</label></td>
                <td>
                    <div class="input-group">
                    <span class="input-group-addon">$</span>
                        {!! Form::text('product[variants][0][price]',isset($product)? $product->price : null ,['class'=>'form-control','id'=>'price','style'=>'height: 30px;']) !!}
                    </div>
                </td>
                
            </tr>
            <tr>
                <td><label class="col-md-12 control-label" id="label-stock">Precio Promocional</label></td>
                <td>
                    <div class="input-group">
                    <span class="input-group-addon">$</span>
                        {!! Form::text('product[variants][0][promotional_price]',isset($product)? $product->promotional_price : null ,['class'=>'form-control','id'=>'price','style'=>"height: 30px; text-align: center" ]) !!}
                    </div>
                </td>
            </tr>
            <tr>
                <td><label class="col-md-6 control-label" id="peso">Peso</label></td>
                <td>
                <div class="input-group ">
                    <span class="input-group-addon">Kg.</span>
                    {!! Form::text('product[variants][0][weight]',isset($product)? $product->weight : null ,['class'=>'form-control','id'=>'kilo']) !!}
                    
                </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="col-md-6 control-label" id="label-stock">Stock</label>
                </td>
                <td>
                    <div class="input-group">
                        {!! Form::text('product[variants][0][stock]',isset($product)? $product->stock : null ,['class'=>'form-control','id'=>'stock']) !!}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="col-md-6 control-label" id="label-stock">SKU</label>
                </td>
                <td>
                    <div class="input-group">
                        {!! Form::text('product[variants][0][sku]',isset($product)? $product->sku : null ,['class'=>'form-control','id'=>'price','style'=>"height: 30px; text-align: center" ]) !!}
                    </div>
                </td>
            </tr>
            </div>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>