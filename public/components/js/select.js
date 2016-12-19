var delte = 0;
var delte2 = 0;
function combinando(check,select,selectoption,position,select2,selectoption2){
    if(position == 1){
        if($(select2).val() != null){
            if(delte > 0){
                $("#table > tbody > tr").each(function(){
                    $(this).remove();
                });
                delte = 0;
            }
            if($(select).val() != null){
                if(delte2 > 0){
                    $("#table > tbody > tr").each(function(){
                        $(this).remove();
                    });
                    delte2 = 0;
                }
                $(selectoption).each(function(){
                    var value2 = $(this).val();
                    $(selectoption2).each(function() {
                        $('#table').append('<tr><td class="option_value_1">' + check + '</td><td class="option_value_2">'
                            + value2 + '</td> <td class="option_value_3">' + $(this).val() + '</td></tr>');
                    });
                });
            }else{
                delte2++;
                $(selectoption2).each(function() {
                    $('#table').append('<tr><td class="option_value_1">' + check + '</td><td class="option_value_2">'
                        + '' + '</td> <td class="option_value_3">' + $(this).val() + '</td></tr>');
                });
            }
        }else{
            if($(select).val() != null){
                if(delte > 0){
                    $("#table > tbody > tr").each(function(){
                        $(this).remove();
                    });
                    delte = 0;
                }
                delte2++;
                $(selectoption).each(function(){
                    $('#table').append('<tr><td class="option_value_1">' + check + '</td><td class="option_value_2">'
                        + $(this).val() + '</td> <td class="option_value_3">' + '' + '</td></tr>');
                });
            }else{
                delte++;
                $('#table').append('<tr><td class="option_value_1">'+ check +'</td><td class="option_value_2">'
                    + '' + '</td><td class="option_value_3">' + '' + '</td></tr>');
            }
        }
        $("#table ").show();
    }

    if(position == 2){
        if($(select2).val() != null){
            if(delte > 0){
                $("#table > tbody > tr").each(function(){
                    $(this).remove();
                });
                delte = 0;
            }
            if($(select).val() != null){
                if(delte2 > 0){
                    $("#table > tbody > tr").each(function(){
                        $(this).remove();
                    });
                    delte2 = 0;
                }
                $(selectoption).each(function(){
                    var value2 = $(this).val();
                    $(selectoption2).each(function() {
                        $('#table').append('<tr><td class="option_value_1">' + value2  + '</td><td class="option_value_2">'
                            + check  + '</td> <td class="option_value_3">' + $(this).val() + '</td></tr>');
                    });
                });
            }else{
                delte2++;
                $(selectoption2).each(function() {
                    $('#table').append('<tr><td class="option_value_1">' + '' + '</td><td class="option_value_2">'
                        + check + '</td> <td class="option_value_3">' + $(this).val() + '</td></tr>');
                });
            }
        }else{
            if($(select).val() != null){
                if(delte > 0){
                    $("#table > tbody > tr").each(function(){
                        $(this).remove();
                    });
                    delte = 0;
                }
                delte2++;
                $(selectoption).each(function(){
                    $('#table').append('<tr><td class="option_value_1">' + $(this).val() + '</td><td class="option_value_2">'
                        + check + '</td> <td class="option_value_3">' + '' + '</td></tr>');
                });
            }else{
                delte++;
                $('#table').append('<tr><td class="option_value_1">'+ '' +'</td><td class="option_value_2">'
                    + check + '</td><td class="option_value_3">' + '' + '</td></tr>');
            }
        }
        $("#table ").show();
    }
    if(position == 3){

        if($(select2).val() != null){
            if(delte > 0){
                $("#table > tbody > tr").each(function(){
                    $(this).remove();
                });
                delte = 0;
            }
            if($(select).val() != null){
                if(delte2 > 0){
                    $("#table > tbody > tr").each(function(){
                        $(this).remove();
                    });
                    delte2 = 0;
                }
                $(selectoption).each(function(){
                    var value2 = $(this).val();
                    $(selectoption2).each(function() {
                        $('#table').append('<tr><td class="option_value_1">' + value2 + '</td><td class="option_value_2">'
                            + $(this).val() + '</td> <td class="option_value_3">' + check + '</td></tr>');
                    });
                });
            }else{
                delte2++;
                $(selectoption2).each(function() {
                    $('#table').append('<tr><td class="option_value_1">' + '' + '</td><td class="option_value_2">'
                        + $(this).val() + '</td> <td class="option_value_3">' + check + '</td></tr>');
                });
            }
        }else{
            if($(select).val() != null){
                if(delte > 0){
                    $("#table > tbody > tr").each(function(){
                        $(this).remove();
                    });
                    delte = 0;
                }
                delte2++;
                $(selectoption).each(function(){
                    $('#table').append('<tr><td class="option_value_1">' + $(this).val() + '</td><td class="option_value_2">'
                        + '' + '</td> <td class="option_value_3">' + check + '</td></tr>');
                });
            }else{
                delte++;
                $('#table').append('<tr><td class="option_value_1">'+ '' +'</td><td class="option_value_2">'
                    + '' + '</td><td class="option_value_3">' + check+ '</td></tr>');
            }
        }
        $("#table ").show();
    }
}

$(document).on('ready',function(){

    function removeCheck(id,id_talla){
        $(id).each(function(){
            $(this).prop("checked", false);
        });
        $(id_talla).each(function(){
            $(this).prop("checked", false);
        });
    }
    function removeSlect(talle,color){
        $(color).removeAttr("selected");
        $(color).trigger("change");
        $(talle).removeAttr("selected");
        $(talle ).trigger("change");

        $('#table tr').each(function() {
            //recorre la tabla y busca los td y compara
            var $tds = $(this).find('td');
            if($tds.length != 0) {
                var $currText = $tds.eq(0).text();
                //si algun td tiene lo mismo que el chechbox lo quita de la tabla
                    $(this).remove();
            }
        });
    }

    //Oculta edit2 y edit3 son los campos para agregar variantes
    //color new y talla son los div predefinidos para agregar variantes del produncto
    $("#option_value_1").val("#e1");
    $("#option_value_item_1").val("#e1 > option:selected");
    $('#Edit2').hide();
    $('#Edit3').hide();
    $("#new").hide();
    $("#Color").show();
    $("#Talla").hide();
    $("#Variante").hide();
    $("#new2").hide();
    $("#Color2").show();
    $("#Talla2").hide();
    $("#Variante2").hide();
    $("#new3").hide();
    $("#Color3").show();
    $("#Talla3").hide();
    $("#Variante3").hide();
    $("#table").hide();
     var a = 0;
    //al dar click en agregar
    $('#Agregar').on('click', function () {
        if(a < 1){
            //si es menor a 1 muestra el segundo div si no el tercero y oculta el boton
            $('#Edit2').show();
            $("#option_value_2").val("#e12");
            $("#option_value_item_2").val("#e12 > option:selected");
            a++;
        }else{
            $('#Edit3').show();
            $("#option_value_3").val("#e13");
            $("#option_value_item_3").val("#e13  > option:selected");
            $('#Agregar').hide();
        }
    });
//boton cerrar del div 2 para ocultarlo y mostrar neuvamente el boton
    $('#Close1').on('click', function () {
        $('#Edit2').hide();
        $("#option_value_2").val("");
        $("#option_value_item_2").val("");
        $('#Agregar').show();
        a--;
    });
    //boton cerrar del div  3 para ocultarlo y mostrar neuvamente el boton
    $('#Close').on('click', function () {
        $('#Edit3').hide();
        $("#option_value_3").val("");
        $("#option_value_item_3").val("");
        $('#Agregar').show();

    });
    //Select del tercer div
    //Capturar el cambio del tercer select
    $('#Propiedad3').change(function(){
        //asigna elv alor a una variable
        var valorCambiado =$(this).val();
        if((valorCambiado == 'New3')){
            //si es igual New3 muestra ese div y oculta los demas
            $('#new3').show();
            $('#Color3').hide();
            $('#Talla3').hide();
            $('#Variante3').hide();
            removeCheck(".checkbox3",".CTalla3");
            removeSlect("#Ptalla3 > option ","#e13 > option");
            $("#option_value_3").val("#nuevo3");
            $("#option_value_item_3").val("#nuevo3 > option:selected");
        }
        else if(valorCambiado == 'Color3')
        {      //si es igual Color3  muestra ese div y oculta los demas
            $('#Color3').show();
            $('#new3').hide();
            $('#Talla3').hide();
            $('#Variante3').hide();
            removeCheck(".checkbox3",".CTalla3");
            removeSlect("#Ptalla3 > option ","#e13 > option");
            $("#option_value_3").val("#e13");
            $("#option_value_item_3").val("#e13 > option:selected");
        }
        else if(valorCambiado == 'Talla3')
        {
            //si es igual Talla3 muestra ese div y oculta los demas
            $('#Talla3').show();
            $('#Color3').hide();
            $('#new3').hide();
            $('#Variante3').hide();
            removeCheck(".checkbox3",".CTalla3");
            removeSlect("#Ptalla3 > option ","#e13 > option");
            $("#option_value_3").val("#Ptalla3");
            $("#option_value_item_3").val("#Ptalla3 > option:selected");
        }
        else if(valorCambiado == 'Variante3')
        {
            //si es igual Variante3 muestra ese div y oculta los demas
            $('#Variante3').show();
            $('#Color3').hide();
            $('#Talla3').hide();
            $('#new3').hide();
            removeCheck(".checkbox3",".CTalla3");
            removeSlect("#Ptalla3 > option ","#e13 > option");
            $("#option_value_3").val("#variante3");
            $("#option_value_item_3").val("#variante3 > option:selected");
        }else{
            //si es igual 0 oculta 0todo lo demas
            $("#new3").hide();
            $("#Color3").hide();
            $("#Talla3").hide();
            $("#Variante3").hide();
            removeCheck(".checkbox3",".CTalla3");
            removeSlect("#Ptalla3 > option ","#e13 > option");
            $("#option_value_3").val("other");
            $("#option_value_item_3").val("other");
        }
    });
    //Select el  segundo  div
    //Capturar el cambio del segundo select
    $('#Propiedad2').change(function(){
        var valorCambiado =$(this).val();
        if((valorCambiado == 'New2')){
            //si es igual New3 muestra ese div y oculta los demas
            $('#new2').show();
            $('#Color2').hide();
            $('#Talla2').hide();
            $('#Variante2').hide();
            removeCheck(".checkbox2",".CTalla2");
            removeSlect("#Ptalla2 > option ","#e12 > option");
            $("#option_value_2").val("#nuevo2");
            $("#option_value_item_2").val("#nuevo2 > option:selected");
        }
        else if(valorCambiado == 'Color2')
        {
            //si es igual Color3  muestra ese div y oculta los demas
            $('#Color2').show();
            $('#new2').hide();
            $('#Talla2').hide();
            $('#Variante2').hide();
            removeCheck(".checkbox2",".CTalla2");
            removeSlect("#Ptalla2 > option ","#e12 > option");
            $("#option_value_2").val("#e12");
            $("#option_value_item_2").val("#e12 > option:selected");
        }
        else if(valorCambiado == 'Talla2')
        {
            //si es igual Talla3 muestra ese div y oculta los demas
            $('#Talla2').show();
            $('#Color2').hide();
            $('#new2').hide();
            $('#Variante2').hide();
            removeCheck(".checkbox2",".CTalla2");
            removeSlect("#Ptalla2 > option ","#e12 > option");
            $("#option_value_2").val("#Ptalla2");
            $("#option_value_item_2").val("#Ptalla2 > option:selected");
        }
        else if(valorCambiado == 'Variante2')
        {
            //si es igual Variante3 muestra ese div y oculta los demas
            $('#Variante2').show();
            $('#Color2').hide();
            $('#Talla2').hide();
            $('#new2').hide();
            removeCheck(".checkbox2",".CTalla2");
            removeSlect("#Ptalla2 > option ","#e12 > option");
            $("#option_value_2").val("#variante2");
            $("#option_value_item_2").val("#variante2 > option:selected");
        }else{
            //si es igual 0 oculta 0todo lo demas
            $("#new2").hide();
            $("#Color2").hide();
            $("#Talla2").hide();
            $("#Variante2").hide();
            removeCheck(".checkbox2",".CTalla2");
            removeSlect("#Ptalla2 > option ","#e12 > option");
            $("#option_value_2").val("other");
            $("#option_value_item_2").val("other");
        }
    });
    //Select el  primer  div
    //Capturar el cambio del segundo select
    $('#Propiedad').change(function(){
        var valorCambiado =$(this).val();
        if((valorCambiado == 'New')){
            //si es igual New3 muestra ese div y oculta los demas
            $('#new').show();
            $('#Color').hide();
            $('#Talla').hide();
            $('#Variante').hide();
            $("#e1 > option").removeAttr("selected");
            $("#e1").trigger("change");
            removeCheck(".checkbox",".CTalla");
            removeSlect("#Ptalla > option ","#e1 > option");
            $("#option_value_1").val("#nuevo1");
            $("#option_value_item_1").val("#nuevo1 > option:selected");
        }
        else if(valorCambiado == 'Color')
        {
            //si es igual Color3  muestra ese div y oculta los demas
            $('#Color').show();
            $('#new').hide();
            $('#Talla').hide();
            $('#Variante').hide();
            $("#e1 > option").removeAttr("selected");
            $("#e1").trigger("change");
            removeCheck(".checkbox",".CTalla");
            removeSlect("#Ptalla > option ","#e1 > option");
            $("#option_value_1").val("#e1");
            $("#option_value_item_1").val("#e1 > option:selected");
        }
        else if(valorCambiado == 'Talla')
        {
            //si es igual Talla3 muestra ese div y oculta los demas
            $('#Talla').show();
            $('#Color').hide();
            $('#new').hide();
            $('#Variante').hide();
            removeCheck(".checkbox",".CTalla");
            removeSlect("#Ptalla > option ","#e1 > option");
            $("#option_value_1").val("#Ptalla");
            $("#option_value_item_1").val("#Ptalla > option:selected");
        }
        else if(valorCambiado == 'Variante')
        {
            //si es igual Variante3 muestra ese div y oculta los demas
            $('#Variante').show();
            $('#Color').hide();
            $('#Talla').hide();
            $('#new').hide();
            $("#e1 > option").removeAttr("selected");
            $("#e1").trigger("change");
            removeCheck(".checkbox",".CTalla");
            removeSlect("#Ptalla > option ","#e1 > option");
            $("#option_value_1").val("#variante");
            $("#option_value_item_1").val("#variante > option:selected");
        }else{
            //si es igual 0 oculta 0todo lo demas
            $("#new").hide();
            $("#Color").hide();
            $("#Talla").hide();
            $("#Variante").hide();
            $("#e1 > option").removeAttr("selected");
            $("#e1").trigger("change");
            removeCheck(".checkbox",".CTalla");
            removeSlect("#Ptalla > option ","#e1 > option");
            $("#option_value_31").val("other");
            $("#option_value_item_1").val("other");
        }
    });
});



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///Select2
//Aplicacion plugin select2 al primer  formulario de color
var $eventSelect = $("#e1");
$eventSelect.on("select2:select", function (e) {
    //Captura el evento select del input
    var a= 0;
    //recibe una respuesta e
    //por cada checkbox del primer select
    $('.checkbox').each(function() {
        if(("select2:select", e.params.data.text) == $(this).val()){
            //verifica si el texto seleccionado es igual al del chechbox
            $(".checkbox[value="+  $(this).val() +"]").prop("checked", "checked");
            //si se cumple lo pone como chequeado
            //Y lo agrega a la tabla
            combinando( e.params.data.text, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
            //suma la vairable
            a++;
        }
    });
//si sumo es decir q esta en lo checkbox si no entonces no esta y lo agrega solo a al tabla
    if(a == 0){
        combinando( e.params.data.text, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
        a = 0;
    }
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    var a = 0;
    //inicializa la variable
    $('.checkbox:checked').each(function() {
        //recorrer cada uno de los checkbox
        if(("select2:select", e.params.data.text) == $(this).val()){
            a++;
            //capturar el valor del checkbox en una variable
            var check = $(this).val();
            //si lo encuentrar en los check lo deschequea
            $(".checkbox[value="+  $(this).val() +"]").prop("checked", false);
            $('#table tr').each(function() {
                //recorre la tabla y busca los td y compara
                var $tds = $(this).find('td.option_value_1');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    if($currText == check){
                        $(this).remove();
                    }
                }
            });
        }
    });
    if(a == 0)
    {//si entra aqui fue porque no encontro el valor eliminado en los check
        $('#table tr').each(function () {
            //recorre nuevamente la tabla
            var $tds = $(this).find('td.option_value_1');
            if ($tds.length != 0) {
                var $currText = $tds.eq(0).text();
                //encuentra los td y si el parametro eliminado coincide con el td lo elimina
                if (e.params.data.text == $currText) {
                    $(this).remove();
                }
            }
        });
    }
});
var select = [];
//caoturar el cambio de los primeros checkboz
$(".checkbox").change(function(){
    if($(this).is(':checked') ){
        //si ese valor esta chequeado
        $(this).each(function(){
            var check = $(this).val();
            var count = 0;
            //verifica q el valor no esta ya en dicho select
            if ( $("#e1 > option[value=" + '"'+check + '"' + "]").length == 0 ){
                //si no existe suma uno
                count++;
            }
            //si no existe
            if(count > 0){
                var datos = ("<option value='"+$(this).val()+ "'" + "selected"+">"+$(this).val()+"</option>");
                //y lo agrega a la tabla
                combinando(check, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
                //lo agrega como opcion seleccionado al input
                $("#e1").append(datos);
                $("#e1").trigger('change');
            }else{
                //si existe
                //si no lo agrega el atributo selected y  lo agrega a la tabla
                $("#e1 > option[value=" + '"'+check + '"' + "]").attr('selected',true);
                combinando( check, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
                $("#e1").trigger('change');
            }
        });
    }else{
        //si el chech no es chequeado es decir le quitamos el chulo
        $(this).each(function(){
            //obtenenemos su valor
            var check = $(this).val();
            //le quitamos la opcion de seleccionado en el input pero lo dejamos grabado
            $("#e1 > option[value=" + $(this).val() + "]").removeAttr("selected");
            $('#table tr').each(function() {
                //recorremos la tabla
                var $tds = $(this).find('td.option_value_1');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //comparamos el cmapo de la tabla que contien dicho vlaor del checkbox
                    if(check == $currText){
                        //lo eliminamos
                        $(this).remove();
                    }
                }
            });
            //capturamos el cambio
            $("#e1").trigger("change");
        });
    }
});
//inicializamos el primer select
$("#e1").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///Select2
//Aplicacion plugin select2 al primer  formulario de color
var $eventSelect = $("#Ptalla");
$eventSelect.on("select2:select", function (e) {
    //Captura el evento select del input
    var a= 0;
    //recibe una respuesta e
    //por cada checkbox del primer select
    $('.CTalla').each(function() {
        if(("select2:select", e.params.data.text) == $(this).val()){
            //verifica si el texto seleccionado es igual al del chechbox
            $(".CTalla[value="+  $(this).val() +"]").prop("checked", "checked");
            //si se cumple lo pone como chequeado
            //Y lo agrega a la tabla
            combinando( e.params.data.text, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
            //suma la vairable
            a++;
        }
    });
//si sumo es decir q esta en lo checkbox si no entonces no esta y lo agrega solo a al tabla
    if(a == 0){
        combinando( e.params.data.text, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
        a = 0;
    }
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    var a = 0;
    //inicializa la variable
    $('.CTalla:checked').each(function() {
        //recorrer cada uno de los checkbox
        if(("select2:select", e.params.data.text) == $(this).val()){
            a++;
            //capturar el valor del checkbox en una variable
            var check = $(this).val();
            //si lo encuentrar en los check lo deschequea
            $(".CTalla[value="+  $(this).val() +"]").prop("checked", false);


            $('#table tr').each(function() {
                //recorre la tabla y busca los td y compara
                var $tds = $(this).find('td.option_value_1');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //si algun td tiene lo mismo que el chechbox lo quita de la tabla
                    if(check == $currText){
                        $(this).remove();
                    }
                }
            });
        }
    });
    if(a == 0)
    {//si entra aqui fue porque no encontro el valor eliminado en los check
        $('#table tr').each(function () {
            //recorre nuevamente la tabla
            var $tds = $(this).find('td.option_value_1');
            if ($tds.length != 0) {
                var $currText = $tds.eq(0).text();
                //encuentra los td y si el parametro eliminado coincide con el td lo elimina
                if (e.params.data.text == $currText) {
                    $(this).remove();
                }
            }
        });
    }
});
var select = [];
//caoturar el cambio de los primeros checkboz
$(".CTalla").change(function(){
    if($(this).is(':checked') ){
        //si ese valor esta chequeado
        $(this).each(function(){
            var check = $(this).val();
            var count = 0;
            //verifica q el valor no esta ya en dicho select
            if ( $("#Ptalla > option[value=" + '"'+check + '"' + "]").length == 0 ){
                //si no existe suma uno
                count++;
            }
            //si no existe
            if(count > 0){

                var datos = ("<option value='"+$(this).val()+ "'" + "selected"+">"+$(this).val()+"</option>");
                //y lo agrega a la tabla
                combinando( check, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
                //lo agrega como opcion seleccionado al input
                $("#Ptalla").append(datos);
                $("#Ptalla").trigger('change');
            }else{
                //si existe
                //si no lo agrega el atributo selected y  lo agrega a la tabla
                $("#Ptalla > option[value=" + '"'+check + '"' + "]").attr('selected',true);
                combinando( check, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
                $("#Ptalla").trigger('change');
            }
        });
    }else{
        //si el chech no es chequeado es decir le quitamos el chulo
        $(this).each(function(){
            //obtenenemos su valor
            var check = $(this).val();
            //le quitamos la opcion de seleccionado en el input pero lo dejamos grabado
            $("#Ptalla > option[value=" + $(this).val() + "]").removeAttr("selected");
            $('#table tr').each(function() {
                //recorremos la tabla
                var $tds = $(this).find('td.option_value_1');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //comparamos el cmapo de la tabla que contien dicho vlaor del checkbox
                    if(check == $currText){
                        //lo eliminamos
                        $(this).remove();
                    }
                }
            });
            //capturamos el cambio
            $("#Ptalla").trigger("change");
        });
    }
});
//inicializamos el primer select
$("#Ptalla").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///Select2
//Aplicacion plugin select2 al primer  formulario de color
var $eventSelect = $("#Ptalla2");
$eventSelect.on("select2:select", function (e) {
    //Captura el evento select del input
    var a= 0;
    //recibe una respuesta e
    //por cada checkbox del primer select
    $('.CTalla2').each(function() {
        if(("select2:select", e.params.data.text) == $(this).val()){
            //verifica si el texto seleccionado es igual al del chechbox
            $(".CTalla2[value="+  $(this).val() +"]").prop("checked", "checked");
            //si se cumple lo pone como chequeado
            //Y lo agrega a la tabla
            combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());
            //suma la vairable
            a++;
        }
    });
//si sumo es decir q esta en lo checkbox si no entonces no esta y lo agrega solo a al tabla
    if(a == 0){
        combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());
        a = 0;
    }
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    var a = 0;
    //inicializa la variable
    $('.CTalla2:checked').each(function() {
        //recorrer cada uno de los checkbox
        if(("select2:select", e.params.data.text) == $(this).val()){
            a++;
            //capturar el valor del checkbox en una variable
            var check = $(this).val();
            //si lo encuentrar en los check lo deschequea
            $(".CTalla2[value="+  $(this).val() +"]").prop("checked", false);


            $('#table tr').each(function() {
                //recorre la tabla y busca los td y compara
                var $tds = $(this).find('td.option_value_2');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //si algun td tiene lo mismo que el chechbox lo quita de la tabla
                    if(check == $currText){
                        $(this).remove();
                    }
                }
            });
        }
    });
    if(a == 0)
    {//si entra aqui fue porque no encontro el valor eliminado en los check
        $('#table tr').each(function () {
            //recorre nuevamente la tabla
            var $tds = $(this).find('td.option_value_2');
            if ($tds.length != 0) {
                var $currText = $tds.eq(0).text();
                //encuentra los td y si el parametro eliminado coincide con el td lo elimina
                if (e.params.data.text == $currText) {
                    $(this).remove();
                }
            }
        });
    }
});
var select = [];
//caoturar el cambio de los primeros checkboz
$(".CTalla2").change(function(){
    if($(this).is(':checked') ){
        //si ese valor esta chequeado
        $(this).each(function(){
            var check = $(this).val();
            var count = 0;
            //verifica q el valor no esta ya en dicho select
            if ( $("#Ptalla2 > option[value=" + '"'+check + '"' + "]").length == 0 ){
                //si no existe suma uno
                count++;
            }
            //si no existe
            if(count > 0){

                var datos = ("<option value='"+$(this).val()+ "'" + "selected"+">"+$(this).val()+"</option>");
                //y lo agrega a la tabla
                combinando( check, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());
                //lo agrega como opcion seleccionado al input
                $("#Ptalla2").append(datos);
                $("#Ptalla2").trigger('change');
            }else{
                //si existe
                //si no lo agrega el atributo selected y  lo agrega a la tabla
                $("#Ptalla2 > option[value=" + '"'+check + '"' + "]").attr('selected',true);
                combinando( check, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());
                $("#Ptalla2").trigger('change');
            }
        });
    }else{
        //si el chech no es chequeado es decir le quitamos el chulo
        $(this).each(function(){
            //obtenenemos su valor
            var check = $(this).val();
            //le quitamos la opcion de seleccionado en el input pero lo dejamos grabado
            $("#Ptalla2 > option[value=" + $(this).val() + "]").removeAttr("selected");
            $('#table tr').each(function() {
                //recorremos la tabla
                var $tds = $(this).find('td.option_value_2');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //comparamos el cmapo de la tabla que contien dicho vlaor del checkbox
                    if(check == $currText){
                        //lo eliminamos
                        $(this).remove();
                    }
                }
            });
            //capturamos el cambio
            $("#Ptalla2").trigger("change");
        });
    }
});
//inicializamos el primer select
$("#Ptalla2").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///Select2
//Aplicacion plugin select2 al tercer  formulario de talla
var $eventSelect = $("#Ptalla3");
$eventSelect.on("select2:select", function (e) {
    //Captura el evento select del input
    var a= 0;
    //recibe una respuesta e
    //por cada checkbox del primer select
    $('.CTalla3').each(function() {
        if(("select2:select", e.params.data.text) == $(this).val()){
            //verifica si el texto seleccionado es igual al del chechbox
            $(".CTalla3[value="+  $(this).val() +"]").prop("checked", "checked");
            //si se cumple lo pone como chequeado
            //Y lo agrega a la tabla
            combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
            //suma la vairable
            a++;
        }
    });
//si sumo es decir q esta en lo checkbox si no entonces no esta y lo agrega solo a al tabla
    if(a == 0){
        combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
        a = 0;
    }
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    var a = 0;
    //inicializa la variable
    $('.CTalla3:checked').each(function() {
        //recorrer cada uno de los checkbox
        if(("select2:select", e.params.data.text) == $(this).val()){
            a++;
            //capturar el valor del checkbox en una variable
            var check = $(this).val();
            //si lo encuentrar en los check lo deschequea
            $(".CTalla3[value="+  $(this).val() +"]").prop("checked", false);


            $('#table tr').each(function() {
                //recorre la tabla y busca los td y compara
                var $tds = $(this).find('td.option_value_3');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //si algun td tiene lo mismo que el chechbox lo quita de la tabla
                    if(check == $currText){
                        $(this).remove();
                    }
                }
            });
        }
    });
    if(a == 0)
    {//si entra aqui fue porque no encontro el valor eliminado en los check
        $('#table tr').each(function () {
            //recorre nuevamente la tabla
            var $tds = $(this).find('td.option_value_3');
            if ($tds.length != 0) {
                var $currText = $tds.eq(0).text();
                //encuentra los td y si el parametro eliminado coincide con el td lo elimina
                if (e.params.data.text == $currText) {
                    $(this).remove();
                }
            }
        });
    }
});
var select = [];
//caoturar el cambio de los primeros checkboz
$(".CTalla3").change(function(){
    if($(this).is(':checked') ){
        //si ese valor esta chequeado
        $(this).each(function(){
            var check = $(this).val();
            var count = 0;
            //verifica q el valor no esta ya en dicho select
            if ( $("#Ptalla3 > option[value=" + '"'+check + '"' + "]").length == 0 ){
                //si no existe suma uno
                count++;
            }
            //si no existe
            if(count > 0){

                var datos = ("<option value='"+$(this).val()+ "'" + "selected"+">"+$(this).val()+"</option>");
                //y lo agrega a la tabla
                combinando( check, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
                //lo agrega como opcion seleccionado al input
                $("#Ptalla3").append(datos);
                $("#Ptalla3").trigger('change');
            }else{
                //si existe
                //si no lo agrega el atributo selected y  lo agrega a la tabla
                $("#Ptalla3 > option[value=" + '"'+check + '"' + "]").attr('selected',true);
                combinando( check, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
                $("#Ptalla3").trigger('change');
            }
        });
    }else{
        //si el chech no es chequeado es decir le quitamos el chulo
        $(this).each(function(){
            //obtenenemos su valor
            var check = $(this).val();
            //le quitamos la opcion de seleccionado en el input pero lo dejamos grabado
            $("#Ptalla3 > option[value=" + $(this).val() + "]").removeAttr("selected");
            $('#table tr').each(function() {
                //recorremos la tabla
                var $tds = $(this).find('td.option_value_3');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //comparamos el cmapo de la tabla que contien dicho vlaor del checkbox
                    if(check == $currText){
                        //lo eliminamos
                        $(this).remove();
                    }
                }
            });
            //capturamos el cambio
            $("#Ptalla3").trigger("change");
        });
    }
});
//inicializamos el primer select
$("#Ptalla3").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///Select2
//Aplicacion plugin select2 al segundo  formulario de color
var $eventSelect = $("#e12");
$eventSelect.on("select2:select", function (e) {
    //Captura el evento select del input
    var a= 0;
    //recibe una respuesta e
    //por cada checkbox del primer select
    $('.checkbox2').each(function() {
        if(("select2:select", e.params.data.text) == $(this).val()){
            //verifica si el texto seleccionado es igual al del chechbox
            $(".checkbox2[value="+  $(this).val() +"]").prop("checked", "checked");
            //si se cumple lo pone como chequeado
            //Y lo agrega a la tabla
            combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());

            //suma la vairable
            a++;
        }
    });
//si sumo es decir q esta en lo checkbox si no entonces no esta y lo agrega solo a al tabla
    if(a == 0){
        combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());
        a = 0;
    }
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    var a = 0;
    //inicializa la variable
    $('.checkbox2:checked').each(function() {
        //recorrer cada uno de los checkbox
        if(("select2:select", e.params.data.text) == $(this).val()){
            a++;
            //capturar el valor del checkbox en una variable
            var check = $(this).val();
            //si lo encuentrar en los check lo deschequea
            $(".checkbox2[value="+  $(this).val() +"]").prop("checked", false);
            $('#table tr').each(function() {
                //recorre la tabla y busca los td y compara
                var $tds = $(this).find('td.option_value_2');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //si algun td tiene lo mismo que el chechbox lo quita de la tabla
                    if(check == $currText){
                        $(this).remove();
                    }
                }
            });
        }
    });
    if(a == 0)
    {//si entra aqui fue porque no encontro el valor eliminado en los check
        $('#table tr').each(function () {
            //recorre nuevamente la tabla
            var $tds = $(this).find('td .option_value_2');
            if ($tds.length != 0) {
                var $currText = $tds.eq(0).text();
                //encuentra los td y si el parametro eliminado coincide con el td lo elimina
                if (e.params.data.text == $currText) {
                    $(this).remove();
                }
            }
        });
    }
});
var select = [];
//caoturar el cambio de los primeros checkboz
$(".checkbox2").change(function(){
    if($(this).is(':checked') ){
        //si ese valor esta chequeado
        $(this).each(function(){
            var check = $(this).val();
            var count = 0;
            //verifica q el valor no esta ya en dicho select
            if ( $("#e12 > option[value=" + '"'+check + '"' + "]").length == 0 ){
                //si no existe suma uno
                count++;
            }
            //si no existe
            if(count > 0){

                var datos = ("<option value='"+$(this).val()+ "'" + "selected"+">"+$(this).val()+"</option>");
                //y lo agrega a la tabla
                combinando( check, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());
                //lo agrega como opcion seleccionado al input
                $("#e12").append(datos);
                $("#e12").trigger('change');
            }else{
                //si existe
                //si no lo agrega el atributo selected y  lo agrega a la tabla
                $("#e12 > option[value=" + '"'+check + '"' + "]").attr('selected',true);
                combinando( check, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());
                $("#e12").trigger('change');
            }
        });
    }else{
        //si el chech no es chequeado es decir le quitamos el chulo
        $(this).each(function(){
            //obtenenemos su valor
            var check = $(this).val();
            //le quitamos la opcion de seleccionado en el input pero lo dejamos grabado
            $("#e12 > option[value=" + $(this).val() + "]").removeAttr("selected");
            $('#table tr').each(function() {
                //recorremos la tabla
                var $tds = $(this).find('td.option_value_2');
                    if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //comparamos el cmapo de la tabla que contien dicho vlaor del checkbox
                    if(check == $currText){
                        //lo eliminamos
                        $(this).remove();
                    }
                }
            });
            //capturamos el cambio
            $("#e12").trigger("change");
        });
    }
});
//inicializamos el segundo select
$("#e12").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///Select2
//Aplicacion plugin select2 al segundo  formulario de color
var $eventSelect = $("#e13");
$eventSelect.on("select2:select", function (e) {
    //Captura el evento select del input
    var a= 0;
    //recibe una respuesta e
    //por cada checkbox del primer select
    $('.checkbox3').each(function() {
        if(("select2:select", e.params.data.text) == $(this).val()){
            //verifica si el texto seleccionado es igual al del chechbox
            $(".checkbox3[value="+  $(this).val() +"]").prop("checked", "checked");
            //si se cumple lo pone como chequeado
            //Y lo agrega a la tabla
            combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
            //suma la vairable
            a++;
        }
    });
//si sumo es decir q esta en lo checkbox si no entonces no esta y lo agrega solo a al tabla
    if(a == 0){
        combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
        a = 0;
    }
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    var a = 0;
    //inicializa la variable
    $('.checkbox3:checked').each(function() {
        //recorrer cada uno de los checkbox
        if(("select2:select", e.params.data.text) == $(this).val()){
            a++;
            //capturar el valor del checkbox en una variable
            var check = $(this).val();
            //si lo encuentrar en los check lo deschequea
            $(".checkbox3[value="+  $(this).val() +"]").prop("checked", false);
            $('#table tr').each(function() {
                //recorre la tabla y busca los td y compara
                var $tds = $(this).find('td.option_value_3');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //si algun td tiene lo mismo que el chechbox lo quita de la tabla
                    if(check == $currText){
                        $(this).remove();
                    }
                }
            });
        }
    });
    if(a == 0)
    {//si entra aqui fue porque no encontro el valor eliminado en los check
        $('#table tr').each(function () {
            //recorre nuevamente la tabla
            var $tds = $(this).find('td.option_value_3');
            if ($tds.length != 0) {
                var $currText = $tds.eq(0).text();
                //encuentra los td y si el parametro eliminado coincide con el td lo elimina
                if (e.params.data.text == $currText) {
                    $(this).remove();
                }
            }
        });
    }
});
var select = [];
//caoturar el cambio de los primeros checkboz
$(".checkbox3").change(function(){
    if($(this).is(':checked') ){
        //si ese valor esta chequeado
        $(this).each(function(){
            var check = $(this).val();
            var count = 0;
            //verifica q el valor no esta ya en dicho select
            if ( $("#e13 > option[value=" + '"'+check + '"' + "]").length == 0 ){
                //si no existe suma uno
                count++;
            }
            //si no existe
            if(count > 0){

                var datos = ("<option value='"+$(this).val()+ "'" + "selected"+">"+$(this).val()+"</option>");
                //y lo agrega a la tabla
                combinando( check, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
                //lo agrega como opcion seleccionado al input
                $("#e13").append(datos);
                $("#e13").trigger('change');
            }else{
                //si existe
                //si no lo agrega el atributo selected y  lo agrega a la tabla
                $("#e13 > option[value=" + '"'+check + '"' + "]").attr('selected',true);
                combinando( check, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
                $("#e13").trigger('change');
            }
        });
    }else{
        //si el chech no es chequeado es decir le quitamos el chulo
        $(this).each(function(){
            //obtenenemos su valor
            var check = $(this).val();
            //le quitamos la opcion de seleccionado en el input pero lo dejamos grabado
            $("#e13 > option[value=" + $(this).val() + "]").removeAttr("selected");
            $('#table tr').each(function() {
                //recorremos la tabla
                var $tds = $(this).find('td.option_value_3');
                if($tds.length != 0) {
                    var $currText = $tds.eq(0).text();
                    //comparamos el cmapo de la tabla que contien dicho vlaor del checkbox
                    if(check == $currText){
                        //lo eliminamos
                        $(this).remove();
                    }
                }
            });
            //capturamos el cambio
            $("#e13").trigger("change");
        });
    }
});
//inicializamos el segundo select
$("#e13").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///Select2
//Aplicacion plugin select2 al primer  formulario de variante creada
var $eventSelect = $("#variante");
$eventSelect.on("select2:select", function (e) {
            combinando( e.params.data.text, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
        $('#table tr').each(function () {
            //recorre nuevamente la tabla
            var $tds = $(this).find('td.option_value_1');
            if ($tds.length != 0) {
                var $currText = $tds.eq(0).text();
                //encuentra los td y si el parametro eliminado coincide con el td lo elimina
                if (e.params.data.text == $currText) {
                    $(this).remove();
                }
            }
        });
});
//inicializamos el primer select
$("#variante").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});

//*//////////////////////////////////////**************************************************************
var $eventSelect = $("#variante2");
$eventSelect.on("select2:select", function (e) {
    combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    $('#table tr').each(function () {
        //recorre nuevamente la tabla
        var $tds = $(this).find('td.option_value_2');
        if ($tds.length != 0) {
            var $currText = $tds.eq(0).text();
            //encuentra los td y si el parametro eliminado coincide con el td lo elimina
            if (e.params.data.text == $currText) {
                $(this).remove();
            }
        }
    });
});
//inicializamos el primer select
$("#variante2").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});
//*//////////////////////////////////////**************************************************************
var $eventSelect = $("#variante3");
$eventSelect.on("select2:select", function (e) {
    combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    $('#table tr').each(function () {
        //recorre nuevamente la tabla
        var $tds = $(this).find('td.option_value_3');
        if ($tds.length != 0) {
            var $currText = $tds.eq(0).text();
            //encuentra los td y si el parametro eliminado coincide con el td lo elimina
            if (e.params.data.text == $currText) {
                $(this).remove();
            }
        }
    });
});
//inicializamos el primer select
$("#variante3").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///Select2
//Aplicacion plugin select2 al primer  formulario de variante creada
var $eventSelect = $("#nuevo1");
$eventSelect.on("select2:select", function (e) {
    combinando( e.params.data.text, $("#option_value_2").val(), $("#option_value_item_2").val(),1, $("#option_value_3").val(),$("#option_value_item_3").val());
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    $('#table tr').each(function () {
        //recorre nuevamente la tabla
        var $tds = $(this).find('td.option_value_1');
        if ($tds.length != 0) {
            var $currText = $tds.eq(0).text();
            //encuentra los td y si el parametro eliminado coincide con el td lo elimina
            if (e.params.data.text == $currText) {
                $(this).remove();
            }
        }
    });
});
//inicializamos el primer select
$("#nuevo1").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});

//*//////////////////////////////////////**************************************************************
var $eventSelect = $("#nuevo2");
$eventSelect.on("select2:select", function (e) {
    combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),2, $("#option_value_3").val(),$("#option_value_item_3").val());
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    $('#table tr').each(function () {
        //recorre nuevamente la tabla
        var $tds = $(this).find('td.option_value_2');
        if ($tds.length != 0) {
            var $currText = $tds.eq(0).text();
            //encuentra los td y si el parametro eliminado coincide con el td lo elimina
            if (e.params.data.text == $currText) {
                $(this).remove();
            }
        }
    });
});
//inicializamos el primer select
$("#nuevo2").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});
//*//////////////////////////////////////**************************************************************
var $eventSelect = $("#nuevo3");
$eventSelect.on("select2:select", function (e) {
    combinando( e.params.data.text, $("#option_value_1").val(), $("#option_value_item_1").val(),3, $("#option_value_2").val(),$("#option_value_item_2").val());
});
//Capturar el evento cerrar del input
$eventSelect.on("select2:unselect", function (e) {
    $('#table tr').each(function () {
        //recorre nuevamente la tabla
        var $tds = $(this).find('td.option_value_3');
        if ($tds.length != 0) {
            var $currText = $tds.eq(0).text();
            //encuentra los td y si el parametro eliminado coincide con el td lo elimina
            if (e.params.data.text == $currText) {
                $(this).remove();
            }
        }
    });
});
//inicializamos el primer select
$("#nuevo3").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});