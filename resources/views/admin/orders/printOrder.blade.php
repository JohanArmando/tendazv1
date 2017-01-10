<html >
<head>
    <style>
        .container{  margin-left: 200px;  margin-right: 200px; padding: 100px 50px 10px 50px ;background-color: #efefef  }
        table { width: 100%}
        .order {background-color: #3c3c3c; color: white}
        tr {text-align: center}
        th {align-content: center}
        td {align-content: center}
        .table table{ border: 1px solid gray; width: 100%}
        .table tr{ border: 1px solid gray}
        .table td{ border: 1px solid gray}
    </style>
    <script>
        //window.print();
    </script>
</head>
<body>
<div class="container">
    <table>
        <tr style="text-align: left">
            <td style="width: 20%">
                <img src="{{asset('logos/'.$shop->id.'/'.$shop->logo)}}" alt="" style="width: 100px">
            </td>
            <td><p class="nameShop">{{$shop->name}}</p></td>
        </tr>
    </table>
    {{$order->products}}
<h1>Orden #{{$order->id}}</h1>
    <div>
        <table>
            <thead>
            <tr class="order">
                <th>Id</th>
                <th>Total</th>
                <th>Fecha Creada</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#{{$order->id}}</td>
                    <td>{{$order->total}}</td>
                    <td>{{$order->created_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>

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
           <td><img src="{{asset('')}}" alt=""></td>
           <td>{{$product->product->name}}</td>
           <td>{{$product->price}}</td>
           <td>{{$product->stock}}</td>
           <td>{{$product->weight}}</td>
           <td>{{$product->sku}}</td>
           <td>{{$product->sku}}</td>
           <td>{{$product->promotional_price}}</td>

        </tr>
        @endforeach
    </table>
</div>
</body>
</html>