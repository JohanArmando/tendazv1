@if((Session::has('message')))
    <div class="alert alert-dismissable alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><strong>Enhorabuena!</strong> {!!   \Session::get('message') !!}.</h4>
    </div>
@endif