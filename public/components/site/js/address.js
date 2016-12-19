$("#base-country").select2();
$("#base-send-country").select2();
$('#formAddress').hide();
$('input[name=address]:last').on('click', function () {
    $('#formAddress').show();
    $('html,body').animate({
        scrollTop: $('#otherDescription').offset().top -200
    }, 500);
    $('#emailPrimary').hide();
});
$('input[name=address]').not(':last').on('click', function () {
    $('#formAddress').hide();
    $('#emailPrimary').show();
});
$("#send").change(function() {
    if (this.checked) {
        $("#local").prop("checked", false);
        $('.local').removeClass('in');
        $('html,body').animate({
            scrollTop: $('.panel-body').offset().top - 150
        }, 500);
        $('.use-shipping-address').show();
        if($('input[name=address]:last').is(':checked')){
            $('#formAddress').show();
            $('#emailPrimary').hide();
        }
    }
});
$("#local").change(function() {
    if (this.checked) {
        $('#formAddress').hide();
        $('#emailPrimary').show();
        $('.use-shipping-address').hide();
        $('#formBillId').show();
        $('#same-address').prop('checked',false);
        $("#send").prop("checked", false);
        $('.send').removeClass('in');
        $('html,body').animate({
            scrollTop: $('.panel-body').offset().top - 70
        }, 500)
    }
});
$('#same-address').on('change', function () {
    if(this.checked){
        $('#formBillId').toggle(1000);
    }else{
        $('#formBillId').toggle(1000);
        $('html,body').animate({
            scrollTop: $('#infoBill').offset().top -120
        }, 500);
    }
});
if(PAIS == 'PE' ){
    peruProvinces();
    peruProvincesSend();
}
if(PAIS == 'CO' ){
    colombiaProvinces();
    colombiaProvincesSend();
}

$('#base-other-province').hide()
$('#base-send-other-province').hide()
if(PAIS != 'CO' && PAIS != 'PE' ){
    $('#base-province').hide();
    $('#base-send-province').hide();
    $('#base-send-other-province').show();
    $('#base-send-other-province').val('Distrito federal');
};
$('#base-country').on('change', function () {
    if($(this).val() == 'CO'){
        colombiaProvinces();
        $('#base-province').show();
        $('#base-other-province').hide();
        $('#base-other-province').val('');
    }
    if($(this).val()== 'PE' ){
        peruProvinces();
        $('#base-province').show();
        $('#base-other-province').hide();
        $('#base-other-province').val('');
    }
    if($(this).val() != 'PE' && $(this).val() != 'CO'){
        $('#base-province').hide();
        $('#base-other-province').show();
        $('#base-other-province').val('Distrito federal');
    }
});
function peruProvinces(){
    $('#base-province').empty();
    $('#base-province').append('<option value="AM">Amazonas</option>');
    $('#base-province').append('<option value="ANC">Ancash</option>');
    $('#base-province').append('<option value="APU">Apur&iacute;mac</option>');
    $('#base-province').append('<option value="ARE">Arequipa</option>');
    $('#base-province').append('<option value="AYA">Ayacucho</option>');
    $('#base-province').append('<option value="CUS">Cusco</option>');
    $('#base-province').append('<option value="HUV">Huancavelica</option>');
    $('#base-province').append(' <option value="HUC">Hu&aacute;nuco</option>>');
    $('#base-province').append('<option value="ICA">Ica</option>');
    $('#base-province').append('<option value="JUN">Jun&iacute;n</option>');
    $('#base-province').append('<option value="LAL">La Libertad</option>');
    $('#base-province').append('<option value="LAM">Lambayeque</option>');
    $('#base-province').append('<option value="LIM">Lima</option>');
    $('#base-province').append('<option value="LOR">Loreto</option>');
    $('#base-province').append('<option value="MDD">Madre de Dios</option>');
    $('#base-province').append('<option value="MOQ">Moquegua</option>');
    $('#base-province').append('<option value="LMA">Municipalidad Metropolitana de Lima</option>');
    $('#base-province').append('<option value="PAS">Pasco</option><option value="PIU">Piura</option>');
    $('#base-province').append('<option value="PAS">Pasco</option><option value="PIU">Piura</option>');
    $('#base-province').append('<option value="PUN">Puno</option><option value="SAM">San Mart&iacute;n</option>');
    $('#base-province').append('<option value="TAC">Tacna</option><option value="TUM">Tumbes</option>');
    $('#base-province').append('<option value="UCA">Ucayali</option>');
}
function colombiaProvinces(){
    $('#base-province').empty();
    $('#base-province').append('<option value="AMA">Amazonas</option><option value="ANT">Antioquia</option><option value="ARA">Arauca</option><option value="ATL">Atl&aacute;ntico</option><option value="BOL">Bol&iacute;var</option><option value="BOY">Boyac&aacute;</option><option value="CAL">Caldas</option><option value="CAQ">Caquet&aacute;</option><option value="CAS">Casanare</option><option value="CAU">Cauca</option><option value="CES">Cesar</option><option value="CHO">Choc&oacute;</option><option value="COR">C&oacute;rdoba</option><option value="CUN">Cundinamarca</option><option value="DC">Distrito Capital de Bogot&aacute;</option><option value="GUA">Guain&iacute;a</option><option value="GUV">Guaviare</option><option value="HUI">Huila</option><option value="LAG">La Guajira</option><option value="MAG">Magdalena</option><option value="MET">Meta</option><option value="NAR">Nari&ntilde;o</option><option value="NSA">Norte de Santander</option><option value="PUT">Putumayo</option><option value="QUI">Quind&iacute;o</option><option value="RIS">Risaralda</option><option value="SAP">San Andr&eacute;s, Providencia y Santa Catalina</option><option value="SAN">Santander</option><option value="SUC">Sucre</option><option value="TOL">Tolima</option><option value="VAC">Valle del Cauca</option><option value="VAU">Vaup&eacute;s</option><option value="VID">Vichada</option>');
}
$('#base-send-country').on('change', function () {
    if($(this).val() == 'CO'){
        colombiaProvincesSend();
        $('#base-send-province').show();
        $('#base-send-other-province').hide();
        $('#base-send-other-province').val('');
    }
    if($(this).val()== 'PE' ){
        peruProvincesSend();
        $('#base-send-province').show();
        $('#base-send-other-province').hide();
        $('#base-send-other-province').val('');
    }
    if($(this).val() != 'PE' && $(this).val() != 'CO'){
        $('#base-send-province').hide();
        $('#base-send-other-province').show();
        $('#base-send-other-province').val('Distrito federal');
    }
});
function peruProvincesSend(){
    $('#base-send-province').empty();
    $('#base-send-province').append('<option value="AM">Amazonas</option>');
    $('#base-send-province').append('<option value="ANC">Ancash</option>');
    $('#base-send-province').append('<option value="APU">Apur&iacute;mac</option>');
    $('#base-send-province').append('<option value="ARE">Arequipa</option>');
    $('#base-send-province').append('<option value="AYA">Ayacucho</option>');
    $('#base-send-province').append('<option value="CUS">Cusco</option>');
    $('#base-send-province').append('<option value="HUV">Huancavelica</option>');
    $('#base-send-province').append(' <option value="HUC">Hu&aacute;nuco</option>>');
    $('#base-send-province').append('<option value="ICA">Ica</option>');
    $('#base-send-province').append('<option value="JUN">Jun&iacute;n</option>');
    $('#base-send-province').append('<option value="LAL">La Libertad</option>');
    $('#base-send-province').append('<option value="LAM">Lambayeque</option>');
    $('#base-send-province').append('<option value="LIM">Lima</option>');
    $('#base-send-province').append('<option value="LOR">Loreto</option>');
    $('#base-send-province').append('<option value="MDD">Madre de Dios</option>');
    $('#base-send-province').append('<option value="MOQ">Moquegua</option>');
    $('#base-send-province').append('<option value="LMA">Municipalidad Metropolitana de Lima</option>');
    $('#base-send-province').append('<option value="PAS">Pasco</option><option value="PIU">Piura</option>');
    $('#base-send-province').append('<option value="PAS">Pasco</option><option value="PIU">Piura</option>');
    $('#base-send-province').append('<option value="PUN">Puno</option><option value="SAM">San Mart&iacute;n</option>');
    $('#base-send-province').append('<option value="TAC">Tacna</option><option value="TUM">Tumbes</option>');
    $('#base-send-province').append('<option value="UCA">Ucayali</option>');
}
function colombiaProvincesSend(){
    $('#base-send-province').empty();
    $('#base-send-province').append('<option value="AMA">Amazonas</option><option value="ANT">Antioquia</option><option value="ARA">Arauca</option><option value="ATL">Atl&aacute;ntico</option><option value="BOL">Bol&iacute;var</option><option value="BOY">Boyac&aacute;</option><option value="CAL">Caldas</option><option value="CAQ">Caquet&aacute;</option><option value="CAS">Casanare</option><option value="CAU">Cauca</option><option value="CES">Cesar</option><option value="CHO">Choc&oacute;</option><option value="COR">C&oacute;rdoba</option><option value="CUN">Cundinamarca</option><option value="DC">Distrito Capital de Bogot&aacute;</option><option value="GUA">Guain&iacute;a</option><option value="GUV">Guaviare</option><option value="HUI">Huila</option><option value="LAG">La Guajira</option><option value="MAG">Magdalena</option><option value="MET">Meta</option><option value="NAR">Nari&ntilde;o</option><option value="NSA">Norte de Santander</option><option value="PUT">Putumayo</option><option value="QUI">Quind&iacute;o</option><option value="RIS">Risaralda</option><option value="SAP">San Andr&eacute;s, Providencia y Santa Catalina</option><option value="SAN">Santander</option><option value="SUC">Sucre</option><option value="TOL">Tolima</option><option value="VAC">Valle del Cauca</option><option value="VAU">Vaup&eacute;s</option><option value="VID">Vichada</option>');
}