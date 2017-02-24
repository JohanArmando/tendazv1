<html >
<head>
    <style>
        .container{  margin-left: 10%;  margin-right: 10%; padding: 100px 50px 10px 50px ;background-color: #efefef  }
        table { width: 100%}
        .order {background-color: #3c3c3c; color: white}
        tr {text-align: center}
        th {align-content: center}
        td {align-content: center}
        .table table{ border: 1px solid gray; width: 100%}
        .table tr{ border: 1px solid gray}
        .table td{ border: 1px solid gray}
        .nameShop{ width: 100%;text-align: left; margin-top: 80px}
        .orderNumber{ width:40%;border: 1px solid #49494b; border-radius: 5px 5px 5px 5px;padding: 10px 20px 10px 20px}
    </style>
    <script>
        window.print();
    </script>
</head>
<body>
<div class="container">
    <table>
        <tr style="text-align: left">
            <td style="width: 12%">
                <img src="{{asset('logos/'.$shop->id.'/'.$shop->logo)}}" alt="" style="width: 100px">
            </td>
            <td><h2 class="nameShop">{{$shop->name}}</h2></td>
            <td class="orderNumber">
                <h1>Orden #{{$order->id}}</h1>
                <strong>Total:</strong>{{number_format($order->total,0)}}<br>
                <strong>Creada El:</strong>{{$order->created_at}}
            </td>
        </tr>
    </table>
    <h2>Productos</h2>
    <table class="table">
        <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Price</td>
            <td>Cantidad</td>
            <td>Peso</td>
            <td>Sku</td>
            <td>Promocion</td>
            <td>Precio de Promocion</td>
        </tr>
        @foreach($order->products as $product)
        <tr>
           <td><img src="{{asset(''.$product->product->mainImage())}}" alt="" style="width: 50px"></td>
           <td>{{$product->product->name}}</td>
           <td>{{$product->price}}</td>
           <td>{{$product->stock}}</td>
           <td>{{$product->weight}}</td>
           <td>{{$product->sku}}</td>
           <td>{{number_format($product->promotional_price,0)}}</td>
           <td>{{$product->promotional_price}}</td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>