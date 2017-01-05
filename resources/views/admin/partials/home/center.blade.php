<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading-white">
                <h3 class="panel-title">Ordenes pendientes</h3>
            </div>
            <div class="table-responsive panel-collapse pull out">
                <table class="table">
                    <tbody>
                    <tr>
                        <td class="active"><span class="text-default">Hoy</span></td>
                        <td align="center"><strong>{{ $orderPendingDay }}</strong></td>
                    </tr>
                    <tr>
                        <td class="active"><span class="text-default">Ayer</span></td>
                        <td align="center"><strong>{{ $orderPendingYesterday }}</strong></td>
                    </tr>
                    <tr>
                        <td class="active" ><span class="text-default">Mas antiguo</span></td>
                        <td align="center"><strong>{{ $orderPendingMore }}</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading-white">
                <h3 class="panel-title">Todas las ordenes</h3>
            </div>
            <div class="table-responsive panel-collapse pull out" >
                <table class="table table-bordered">

                    <tbody>
                    <tr>
                        <td class="active"><span class="text-success">Pagada</span></td>
                        <td align="center"><span class="text-success"><strong>{{ isset($orderByStatus[2]) ? $orderByStatus[2]['total'] : 0}}</strong></span></td>
                    </tr>
                    <tr>
                        <td class="active"><span class="text-default">Enviada</span></td>
                        <td align="center"><strong>{{ isset($orderByStatus[1]) ? $orderByStatus[1]['total'] :0 }}</strong></td>
                    </tr>
                    <tr>
                        <td class="active"><span class="text-danger">Cancelada</span></td>
                        <td align="center" class="text-tendaz"><strong>{{ isset($orderByStatus[1]) ? $orderByStatus[0]['total'] : 0}}</strong></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<div class="row hidden">
=======
<!-- <div class="row">
>>>>>>> de56f50f23a9e6d447d5c0fa96b55b8cda2a162c
    <div class="col-md-12">
        <article class="panel overflow-hidden">
            <header class="container">
            </header>
            <section class="panel-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embeb-responsive-item" width="830" height="315" src="https://www.youtube.com/embed/7vO8dDAsjWM" frameborder="0" allowfullscreen></iframe>
                </div>
            </section>
        </article>
    </div>
</div> -->