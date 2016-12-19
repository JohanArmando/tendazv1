<div class="row">
   <div class="col-md-4">
       <div class="widget panel">
            <div class="panel-body">
                <ul class="list-table">
                    <li><h4 class="semibold nm text-left"><i class=""></i>Ventas del Mes</h4></li>
                </ul>
                <div class="chart mt15" id="violations-wchart"></div>
            </div>
            <div class="panel-footer">
                <ul class="nav nav-section nav-justified">
                    <li>
                        <div class="section text-danger">
                            <h4 class="nm">$ {{ number_format($totalMonth ,0 , ',' , '.') }}</h4>
                            <span>Total</span>
                        </div>
                    </li>
                    <li>
                        <div class="section">
                            <h4 class="nm">{{ $totalCountMonth }}</h4>
                            <span class="text-muted">Ventas</span>
                        </div>
                    </li>
                    <li>
                        <div class="section">
                            <h4 class="nm">$ {{ $totalCountMonth ?  number_format(($totalMonth / $totalCountMonth) ,0 , ',' , '.') : 0}}</h4>
                            <span class="text-muted">Promedio</span>
                        </div>
                    </li>
                </ul>
            </div>
       </div>
   </div>
    <div class="col-md-4">
        <div class="widget panel">
            <div class="panel-body">
                <ul class="list-table">
                    <li><h4 class="semibold nm text-left">Ventas semanal</h4></li>
                </ul>
                <div class="chart mt15" id="violations-wchart"></div>
            </div>
            <div class="panel-footer">
                <ul class="nav nav-section nav-justified">
                    <li>
                        <div class="section text-danger">
                            <h4 class="nm">$ {{ number_format($totalWeek ,0 , ',' , '.') }}</h4>
                            <span>Total</span>
                        </div>
                    </li>
                    <li>
                        <div class="section">
                            <h4 class="nm">{{ $totalCountWeek }}</h4>
                            <span class="text-muted">Ventas</span>
                        </div>
                    </li>
                    <li>
                        <div class="section">
                            <h4 class="nm">$ {{ $totalCountWeek ? number_format(($totalWeek / $totalCountWeek) ,0 , ',' , '.') : 0 }}</h4>
                            <span class="text-muted">Promedio</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="widget panel">
            <div class="panel-body">
                <ul class="list-table">
                    <li><h4 class="semibold nm text-left"><i class=""></i>Ventas del Dia</h4></li>
                </ul>
                <div class="chart mt15" id="violations-wchart"></div>
            </div>
            <div class="panel-footer">
                <ul class="nav nav-section nav-justified">
                    <li>
                        <div class="section text-danger">
                            <h4 class="nm">$ {{ number_format($totalDay ,0 , ',' , '.') }}</h4>
                            <span>Total</span>
                        </div>
                    </li>
                    <li>
                        <div class="section">
                            <h4 class="nm">{{ $totalCountDay }}</h4>
                            <span class="text-muted">Ventas</span>
                        </div>
                    </li>
                    <li>
                        <div class="section">
                            <h4 class="nm">$ {{ $totalCountDay ?  number_format(($totalDay / $totalCountDay) ,0 , ',' , '.') : 0 }}</h4>
                            <span class="text-muted">Promedio</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

