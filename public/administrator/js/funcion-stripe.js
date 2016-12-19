  $(document).on('ready', function () {
                //si ya esta subscrito a un plan a cual plan es para que lo deje marcado
                //si no pss para que deje el mejor por default

                var plan = $('input[name=plan_now]').val();
                if(plan == undefined)
                {
                    //se marca el ultimo plan de sucription como verdadero
                    $('input[name=plans]').last().prop('checked',true);
                    //al label que lo contiene se le pone una clase apra que resalte
                    $('input[name=plans]').last().parent().parent().parent().addClass('selected');
                    //se envia el valor a un input del formulario para saber que plan va pagar
                    $('#plan').val($('input[name=plans]').last().val());
                    $('.well').last().find('p').css('color' , 'orange');
                }else{
                    //se marca el ultimo plan de sucription como verdadero
                    $('input[name=plans][value='+ plan + ']').last().prop('checked',true);
                    //al label que lo contiene se le pone una clase apra que resalte
                    $('input[name=plans][value='+ plan + ']').last().parent().parent().parent().addClass('selected');
                    //se envia el valor a un input del formulario para saber que plan va pagar
                    $('#plan').val($('input[name=plans][value='+ plan + ']').last().val());
                    $('input[name=plans][value='+ plan + ']').parent().parent().parent().find('p').css('color' , 'orange');
                }
                //aqui traducimos los errores lanzados por stripe segun el codigo de error
                var errorMessages = {
                    invalid_request_error : "No se pudo encontrar la información de pago",
                    incorrect_number: "El número de la tarjeta es incorrecta.",
                    invalid_number: "El número de la tarjeta no es una tarjeta de crédito válida .",
                    invalid_expiry_month: "Mes de vencimiento de la tarjeta no es válida .",
                    invalid_expiry_year: "Año de caducidad de la tarjeta no es válida .",
                    invalid_cvc: "código de seguridad de la tarjeta no es válida .",
                    expired_card: "La tarjeta ha expirado.",
                    incorrect_cvc: "Código de seguridad de la tarjeta es incorrecto.",
                    incorrect_zip: "The card's zip code failed validation.",
                    card_declined: "El código postal de la tarjeta fallado la validación.",
                    missing: "No hay ninguna tarjeta de un cliente que está siendo cargada.",
                    processing_error: "Se ha producido un error al procesar la tarjeta.",
                    rate_limit:  "Se produjo un error debido a las peticiones que golpean la API demasiado rápido . Por favor , háganos saber si usted está funcionando constantemente en este error ."
                };
                //si llegase a estar vacio el plan entonces el boton se deshabilita
                if($('#plan').val() == ''){
                    $('body').find('button').prop('disabled','disabled');
                }
                //cuando cambia e plan
               $('input[name=plans]').on('change', function () {
                   //quita la sellecion del ultimo plan
                   $.each($('.well') , function () {
                       $(this).removeClass('selected');
                       $(this).find('p').css('color' , 'black');
                   });
                   //y agrega la sellecion a dicho plan al igual que envia el valor al input
                   if($(this).is(':checked')){
                       $(this).parent().parent().parent().addClass('selected');
                       $(this).parent().find('p').css('color' , 'orange');
                       $('#plan').val($(this).val());
                   }
                   if($('#plan').val() == ''){
                       $('body').find('button').prop('disabled','disabled');
                   }else{
                       $('body').find('button').prop('disabled',false);
                   }
                   //Esta opcion es para cuando quiere cambiar de sucripcion pero de uun mismo plan
                   //intercambia los botones
                   if(plan != undefined){
                       if(plan != $('input[name=plan]').val()){
                           $('.swap').removeClass('hidden');
                           $('.swap').show();
                           $('.cancel').hide();
                       }else{
                           $('.swap').hide();
                           $('.cancel').show();
                       }
                   }
               });
                //con el plugin validamos los input de numero de tarjeta año y cvc
                $('.cc-number').payment('formatCardNumber');
                $('.cc-exp').payment('formatCardExpiry');
                $('.cc-cvc').payment('formatCardCVC');
                //funcion que agrega una seleccion al input con error
                $.fn.toggleInputError = function(erred) {
                    this.parent('.form-group').toggleClass('has-error', erred);
                    return this;
                };
                //cuando se levanta la tecla mira quue tipo de tarjeta es y muestra su imagen
                $('.cc-number').keyup(function () {
                    var cardType = $.payment.cardType($('.cc-number').val());
                    if(cardType != null && cardType != 'forbrugsforeningen') {
                        $('#image-card').removeClass('hidden');
                        $('#image-card').attr('src' , BASEURL +'/images-card/' + cardType + '.png');
                    }else{
                        $('#image-card').addClass('hidden');
                    }
                });
                //Envia la llave publica a stripe
                document.querySelector("body").addEventListener("keydown",function(e){
                    var charCode = e.charCode || e.keyCode || e.which;
                    if (charCode == 27){
                        return false;
                    }
                });
                //funcion para validar el plan o suscripcion al que pertenece el usuario y luego actualizar plan crear suscripcion o cancelar
                $('.swap').on('click' , function(){
                    $(this).attr('disabled' , true).text('Cambiando plan .......');
                    var id = $('input[name=planSwap]').val();
                    var plan = $('input[name=plan]').val();
                    window.location.href = BASEURL + '/admin/account/plans/swap' + '/' + id + '/' + plan;
                });
                $('.cancel').on('click' , function(){
                    var confirm = window.confirm('Estas seguro de cancelar el plan');
                    if(confirm){
                        $(this).attr('disabled' , true).text('Cancelando el plan......');
                        window.location.href = BASEURL +'/admin/account/plans/cancel';
                    }
                });
                Stripe.setPublishableKey('pk_test_jMDOqjio22xV8suzA73tqjLd');
                $('#payment-success').click(function(e) {
                    //al dar clck a pgar
                    e.preventDefault();
                    var form = $('#payment-form');
                    var submit = $(this);
                    var submitInitialText = submit.text();
                    //deshabilita el boton y envia un mensaje
                    submit.attr('disabled' , 'disabled').text('Espera un momento ....');
                    $('#cancel-payment').attr('disabled' , 'disabled');
                    $('#dismiss').hide();
                    Stripe.card.createToken(form , function(status , response){
                        var token ;
                        //envia el token a stripe y s tiene error lo traduce y muestra en un div
                        if(response.error){
                                if(response.error.type == 'card_error' ){
                                    $('.payment-errors').text(errorMessages[ response.error.code ]);
                                }else{
                                    $('.payment-errors').text(errorMessages['invalid_request_error']);
                                }
                                $('.payment-errors').parent().parent().show();

                            submit.removeAttr('disabled');
                            $('#cancel-payment').attr('disabled' , false);
                            $('#dismiss').show();
                            submit.text(submitInitialText);
                        }else{
                            //si no envia los datos al formulario
                            token = response.id;
                            form.append($('<input type="hidden" name="token">').val(token));
                            form.submit();
                        }
                    });
                    //pone la clase error si esta mal algun campo de testo
                    var cardType = $.payment.cardType($('.cc-number').val());
                    $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
                    $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
                    $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
                    if(cardType != null && cardType != 'forbrugsforeningen') {
                        $('#image-card').removeClass('hidden');
                        $('#image-card').attr('src' , BASEURL +'/images-card/' + cardType + '.png');
                    }else{
                        $('#image-card').addClass('hidden');
                    }
                });

            });