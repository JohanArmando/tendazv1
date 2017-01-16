<!-- modalLoginForm-->
<div class="modal  fade"   id="modalConditions" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog white-modal modal-md">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="icon icon-clear"></span></button>
                <h4 class="modal-title text-center text-uppercase">Terminos Y Condiciones</h4>
            </div>

            <form name="registerForm" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal row">
                <div class="col-md-12">
                    <div class="row">
                        <div style="padding: 40px 40px 40px 40px">
                           <div style="height: 380px; overflow-y: scroll">
                               {!! $shop->store->conditions !!}
                           </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- /modalLoginForm-->