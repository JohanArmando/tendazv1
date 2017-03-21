<div id="bs-modal" class="modal fade" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #FF4E00 !important; color: white;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white"><i class="fa fa-times" style="color: white !important;"></i></button>
                <h4 class="modal-title text-center  ">COMPRA TU NUEVO DOMINIO</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form name="form-check-domain">
                            <input type="hidden" name="url-check-domain" value="{{ url('admin/setting/domain') }}">
                            <input type="hidden" name="token-check-domain" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" style="background: #3C3C3C; color: white; ">http://</span>
                                    <input type="text" name="domain" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 70%">

                                    <select class="form-control" style="width: 30%" data-style="default" id="select-domain">
                                        <optgroup label="Dominios Comunes">
                                            @foreach($tlds as $tld)
                                                @if($tld->category_tld_id == 1)
                                                    <option value="{{ $tld->name }}">{{ $tld->name }}(${{ number_format($tld->price , 2).' ' }}USD/a&ntilde;o)</option>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="Dominios Pais">
                                            @foreach($tlds as $tld)
                                                @if($tld->category_tld_id == 2)
                                                    <option value="{{ $tld->name }}">{{ $tld->name }}(${{ number_format($tld->price , 2).' ' }}USD/a&ntilde;o)</option>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="Dominios Premiun">
                                            @foreach($tlds as $tld)
                                                @if($tld->category_tld_id == 3)
                                                    <option value="{{ $tld->name }}">{{ $tld->name }}(${{ number_format($tld->price , 2).' ' }}USD/a&ntilde;o)</option>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <a href="https://www.namecheap.com/support/knowledgebase/searchResult.aspx?q=Domain" target="_blank" id="read-more-domain">Leer mas sobre la compra de dominios.</a>
                            <div class="text-right">
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background:#3B3B3B; color: white; border-radius: 0 !important;"> <i class="fa fa-times"></i></button>
                                <button type="button" id="buyer-domain" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Esto tardara unos minutos, porfavor espere..." class="btn btn-primary" style="border-radius: 0 !important;"> <i class="fa fa-check"></i></button>
                            </div>
                        </form>
                        <div class="row not-available hidden">
                            <div class="col-md-12">
                                <p class="text-danger">Este dominio no esta disponible</p>
                                <p>ESTAS SON ALGUNAS SUGERENCIAS DE DOMINIO:</p>
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>