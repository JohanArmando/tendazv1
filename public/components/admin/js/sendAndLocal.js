$(document).on('ready', function () {
    if(PAIS== 'PE' ){
        peruProvinces();
    }
    if(PAIS== 'CO' ){
        colombiaProvinces();
    }
    if(PAIS != null){
        $('#choose-base').hide();
    }
    if(BASE != 'PE' && BASE != 'CO'){
        $('#base-province-wrapper').hide();
    }
    if(BASE == '' ){
        $('#choose-base').show();
        $('#base-province-wrapper').show();
    }
    $('#shipping-change').on('click', function () {
        $('#choose-base').show();
        $('.base-of-operatons').hide();
        $('#local-send').hide();
        $('#international-send').hide();
    });
    $('#modificar').hide();
    $('#modificar-word').hide();
    $('#modificar-manual').hide();
    $('#base-country').on('change', function () {
        if($(this).val() == 'CO'){
            colombiaProvinces();
            $('#base-province-wrapper').show();
        }
        if($(this).val()== 'PE' ){
            peruProvinces();
            $('#base-province-wrapper').show();
        }
        if($(this).val() != 'PE' && $(this).val() != 'CO'){
            $('#base-province-wrapper').hide();
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
});