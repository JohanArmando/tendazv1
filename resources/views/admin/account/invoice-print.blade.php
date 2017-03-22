<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script>
        window.print();
    </script>
</head>
<body>
<div class="wrapper" style="padding: 15px 15px 15px 15px">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> {{$shop->name}}.
                    <small class="pull-right">Fecha: {{\Tendaz\Components\DateGenerator::dateGenerate($invoice->start_at)}}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table">
                    <tr>
                        <td>
                            De <br>
                            <strong>Tendaz.com</strong>
                            <br>
                            <strong>Direcci&oacute;n:</strong> Carrera 58 No 137 a - 10 Piso 5
                            <br>
                            <strong>Telefono:</strong> 3104763183
                            <br>
                            <strong>Email:</strong> info@tendaz.com
                            From
                        </td>
                        <td>
                            Para
                            <address>
                                <strong>{{ $result['sale']['customer']['cardholder_name'] }}</strong><br>
                                <strong>Direcci&oacute;n:</strong> {{ $result['sale']['customer']['address_1'] }},  {{ $result['sale']['customer']['city'] }},  {{ $result['sale']['customer']['country_name'] }}.<br>
                                <strong>Telefono:</strong> {{ $shop->user->phone }}<br>
                                <strong>Email:</strong> {{ $result['sale']['customer']['email_address'] }}
                            </address>
                        </td>
                        <td>
                            <b>Factura:</b> #{{ $result['sale']['invoices'][0]['invoice_id'] }}<br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Cantidad</th>
                        <th>Plan</th>
                        <th>Tiempo</th>
                        <th>Description</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{$invoice->plan->name}}</td>
                        <td>@if($invoice->plan->interval == 'monthly') 1 Mes @else @if($invoice->plan->interval == 'yearly')1 a&ntilde;o @endif @endif</td>
                        <td>{{ $invoice->plan->description }}</td>
                        <td>{{ $invoice->amount }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6 hidden">
                <p class="lead">Payment Methods:</p>
                <img src="{{asset('administrator/imagesMediosdePago/payment-1.png')}}" alt="Visa">
                <img src="{{asset('administrator/imagesMediosdePago/payment-2.png')}}" alt="Mastercard">
                <img src="{{asset('administrator/imagesMediosdePago/payment-4.png')}}" alt="American Express">
                <img src="{{asset('administrator/imagesMediosdePago/payment-5.png')}}" alt="Paypal">

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    {{ $invoice->plan->description }}
                </p>
            </div>
            <!-- /.col -->
            <div class="col-xs-6"></div>
            <div class="col-xs-6">
                <p class="lead">Amount Due 2/22/2014</p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Total:</th>
                            <td>{{ $invoice->amount }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
</body>
</html>
