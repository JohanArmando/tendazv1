<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \Illuminate\Support\Facades\DB::table('payment_methods')->insert(array(
            array(

                'uuid' => $faker->uuid,
                'name' => 'Mercado Pago',
                'path' => 'mercado-pago.png',
                'cost_by_trans_deb' => '4.99% + IVA ',
                'cost_by_trans_cre' => '4.99% + IVA',
                'days' => '14'
            ),
            array(
                'uuid' => $faker->uuid,
                'name' => 'Payu',
                'path' => 'payu.png',
                'cost_by_trans_deb' => '3.49% + 900',
                'cost_by_trans_cre' => '3.49% + 900',
                'days' => '4'
            ),
            array(
                'uuid' => $faker->uuid,
                'name' => 'Paypal',
                'path' => '../../../',
                'cost_by_trans_deb' => '',
                'cost_by_trans_cre' => '',
			    'days' => '0'
		    ),
            array(
                'uuid' => $faker->uuid,
                'name' => 'Personalizado',
                'path' => 'personal.png',
                'cost_by_trans_deb' => '',
                'cost_by_trans_cre' => '',
                'days' => '',
		    )
        ));
    }
}
