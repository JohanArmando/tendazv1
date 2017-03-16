@section('title')
Inicio
@stop
@extends('layouts.administrator')
@section('content')

<div class="page-header page-header-block">
    <div class="page-header-section">
        <h4 class="title semibold"><img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/dashboard.png')}}">&nbsp; Inicio</h4>
    </div>
    <div class="page-header-section">
    </div>
</div>
<div class="row">
    <div class="container col-md-12">
        @include('admin.partials.home.panel_stats')
        <div class="row hidden-xs">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" >
                                <div class="panel-title">Ventas</div>
                            </div>
                            <div class="panel-body">
                                <div id="chart_div" style="height:250px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" >
                                <div class="panel-title">Ordenes</div>
                            </div>
                            <div class="panel-body">
                                <div id="chart_div_2" style="height: 250px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.partials.home.center')
                <div class="page-end-space"></div>
            </div>
            @include('admin.partials.home.right')
            @include('admin.partials.footerNotify')

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var dataBar = new google.visualization.DataTable();
      dataBar.addColumn('string', 'Fecha');
      dataBar.addColumn('number', 'Total ($)');
      dataBar.addRows([
        @foreach($salesWeekly as $sale)
            ["{{ \Carbon\Carbon::parse($sale['day'])->format('M-d') }}" , {{ $sale['total'] }}],
        @endforeach
    ]);

      var dataPie = new google.visualization.DataTable();
      dataPie.addColumn('string', 'Fecha');
      dataPie.addColumn('number', 'Ventas');
      dataPie.addRows([
        @foreach($countWeekly as $sale)
            ["{{ \Carbon\Carbon::parse($sale['day'])->format('M-d') }}" , {{ $sale['sale'] }}],
        @endforeach
    ]);

    var options = {'title':'Ultimos Ocho dias'};

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(dataBar, options);
    var chart = new google.visualization.PieChart(document.getElementById('chart_div_2'));
    chart.draw(dataPie, options);
  }
</script>
@endsection
