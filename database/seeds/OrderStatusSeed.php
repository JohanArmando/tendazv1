<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \Illuminate\Support\Facades\DB::table('order_status')->insert(array(
            [
                'id'    => 1 ,
                'uuid'    => $faker->uuid,
                'name'  => 'iniciada',
                'color'  => 'red',
                'description'  => 'Esperando ser creada',
                'accion'   =>   ''
            ],
            [
                'id'    => 2 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Creada',
                'color'  => 'blue',
                'description'  => 'Esperando confirmacion de pago',
                'accion'   =>   'Notificar Pago'
            ],
            [
                'id'    => 3 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Paga',
                'color'  => 'white',
                'description'  => '	Esperando que empaquetes la orden',
                'accion'  => 'Marcar como empaquetada',
            ],
            [
                'id'    => 4,
                'uuid'    => $faker->uuid,
                'name'  => 'Empaquetada',
                'color'  => 'green',
                'description'  => 'Esperando que el cliente retire el pedido',
                'accion'  => 'Marcar como retirada',
            ],
            [
                'id'    => 5 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Empaquetada',
                'color'  => 'green',
                'description'  => 'Esperando notificacion de recibida',
                'accion'  => 'Marcar como enviada',
            ],
            [
                'id'    => 6 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Enviada',
                'color'  => 'orange',
                'description'  => 'Paga y Enviada',
                'accion'  => 'Archivar Orden',
            ],
            [
                'id'    => 7 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Recogida',
                'color'  => 'orange',
                'description'  => 'Paga y Enviada',
                'accion'  => 'Archivar Orden',
            ],
            [
                'id'    => 8 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Archivada',
                'color'  => 'yellow',
                'description'  => 'Re abrir la orden',
                'accion'  => 'Re abrir',
            ],
            [
                'id'    => 9 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Enviada',
                'color'  => 'orange',
                'description'  => 'Paga y Enviada',
                'accion'  => 'Cancelar Orden',
            ],
            [
                'id'    => 10 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Recogida',
                'color'  => 'orange',
                'description'  => 'Paga y Enviada',
                'accion'  => 'Cancelar Orden',
            ],
            [
                'id'    => 11 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Cancelada',
                'color'  => 'red',
                'description'  => 'Nada por hacer',
                'accion'  => 'Nada por hacer',
            ],
        ));
    }
}
