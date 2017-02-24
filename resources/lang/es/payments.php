<?php
return [
  'mercadopago' => [
        'invalid_token' => 'El token de pago no es valido',
        '4035'  => 'Debes escoger un metodo de pago',
        '4029'  => 'Tipo de usuario invalido',
        '4003'  => 'El monto de la transaccion deberia ser numerico',
        '4002'  => 'El monto de la transaccion no puede ser nulo',
        '4000'  => 'Debes ingresar los datos de tu tarjeta de credito',
        '3028'  => 'Metodo de pago no valido', 
        '3003'  => 'tarjeta no valida',
        '2062'  => 'Tarjeta no valida',
        '2002'  => 'Usuario no encontrado',
        '8'     => 'Metodo de pago no aceptado',
        '1'     => 'Error en los parametros'
  ] ,
  'status' => [
      "pending"  => "2",
      "approved" => "3",
      "package" => "4",
      "send" => "6",
      "collect" => "7",
      "file" => "8",
      "authorized" => "3",
      "in_process" => "2",
      "in_mediation" => "2",
      "rejected" => "11",
      "cancelled" => "11",
      "refunded"  => '',
      "charged_back" => '',
  ]
];