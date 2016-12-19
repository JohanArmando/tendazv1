
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">

        <div class="col-md-4"></div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <label for="cardExpiry">
                    <label for="cardNumber" class="hidden-xs next-label">Numero de tarjeta</label>
                    <img src=""  style="width: 50px; height: 30px" alt="" class="hidden image-card">
                </label>
                <input
                        type="tel"
                        class="form-control cc-number"
                        name="cardNumber"
                        placeholder="Numero De Tarjeta"
                        autocomplete="cc-number"
                        data-stripe="number"
                        required
                        />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <div class="form-group">
                <label for="cardExpiry" class="next-label"><span class="hidden-xs">Fecha: </span><span class="visible-xs-inline">Exp:</span> Date: </label>
                <input
                        type="tel"
                        class="form-control cc-exp"
                        name="cardExpiry"
                        placeholder="MM / YY"
                        autocomplete="cc-exp"
                        data-stripe="exp"
                        required
                        />
            </div>
        </div>
        <div class="col-xs-6 col-md-6 pull-right">
            <div class="form-group">
                <label for="cardCVC" class="next-label">CVC:</label>
                <input
                        type="tel"
                        class="form-control cc-cvc"
                        name="cardCVC"
                        placeholder="CVC"
                        autocomplete="cc-csc"
                        data-stripe="cvc"
                        required
                        />
            </div>
        </div>
    </div>
    <div class="row" style="display:none;">
        <div class="col-xs-12">
            <p class="payment-errors"></p>
        </div>
    </div>