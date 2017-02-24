@extends('layouts.administrator')
@section('content')
<!-- Header section -->
<div class="page-header page-header-block">
    <div class="page-header-section">
        <h4 class="title semibold"><img src="{{asset('admin/image/icons/icons-nav/computer.png')}}">&nbsp; Inicio</h4>
    </div>
    <div class="page-header-section">
    </div>
</div>
<!--END Header section-->
<div class="content">
    <div class="container">
        <!-- Panel quick information-->
        @include('admin.partials.home.panel_stats')
        <!-- End panel quick information -->
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
                    <div class="col-sm-12">
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
                <!-- Table of stats and video promotional-->
                @include('admin.partials.home.center')
                <!-- End-->
                <div class="page-end-space"></div>
            </div>
            <!-- Summary right -->
            @include('admin.partials.home.right')
            <!-- End summary -->
        </div>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it
      function drawChart() {

        // Create the data table.
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

        // Set chart options
        var options = {'title':'Ultimos Ocho dias'};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(dataBar, options);
        var chart = new google.visualization.PieChart(document.getElementById('chart_div_2'));
        chart.draw(dataPie, options);
      }
    </script>
@endsection