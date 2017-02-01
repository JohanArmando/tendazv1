<table id="print" class="table table hover">
    <thead>
    <tr>
        <th>Image</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>
                <img src="{{ $product->productWithTrashed->mainImage() }}" width="50px"  height="50px" class="thumbnail" alt="">
            </td>
            <td>
                {{ $product->productWithTrashed->name }}
            </td>
            <td>
<<<<<<< HEAD
<<<<<<< HEAD
                $ {!!  $product->productWithTrashed->collection->promotion ? ("{$product->price}". " - " ."{$product->promotional_price}")  : $product->price !!}
=======
                ${!!  $product->product->collection->promotion ? ("{$product->price}". " - " ."{$product->promotional_price}")  : $product->price !!}
>>>>>>> 24b16a3ae1c17509cb5aa107603101690afd4b57
=======
                ${!!  $product->productWithTrashed->collection->promotion ? "<span style='text-decoration: line-through'>".(number_format("{$product->price}",0,',','.'). "</span> - $" .(number_format("{$product->promotional_price}",0,',','.'))) : $product->price !!}
>>>>>>> e3ab77f1bcc91177ecaae5978438f5415ca7d94d
            </td>
            <td>
                {{ $product->pivot->quantity }}
            </td>
            <td>
                ${!!  $product->subtotal() !!}
            </td>
        </tr>
    @endforeach
    <tr>
        <td colspan="3" style="border-bottom: 1px solid white"></td>
        <td><strong>Sub:</strong></td>
        <td>${{ number_format($order->total_products,0,',','.') }}</td>
    </tr>
    <tr>
        <td colspan="3" style="border-bottom: 1px solid white"></td>
        <td><strong>Envio:</strong></td>
        <td>${{ number_format($order->total_shipping,0,',','.') }}</td>
    </tr>
    <tr>
        <td colspan="3" style="border-bottom: 1px solid white"></td>
        <td><strong>Descuento:</strong></td>
        <td>${{ number_format($order->total_discount,0,',','.') }}</td>
    </tr>
    <tr>
        <td colspan="3" style="border-bottom: 1px solid white"></td>
        <td><strong>Total:</strong></td>
        <td>${{ number_format($order->total , 0 , ',' , '.') }}</td>
    </tr>
    </tbody>
</table>