<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OPtionValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('option_values')->insert(array(
            [
                'uuid' => $faker->uuid,
                'name' => 'Negro',
                'attribute' => '#000',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Rojo',
                'attribute' => '#DC0000',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Blanco',
                'attribute' => '#fff',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Azul',
                'attribute' => '#0000DC',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Verde',
                'attribute' => '#00DC00',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Amarillo',
                'attribute' => '#FFEE02',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Rosa',
                'attribute' => '#E998F',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Gris',
                'attribute' => '#AAAAAA',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Marron',
                'attribute' => '#A57D38',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Marino',
                'attribute' => '#000080',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Naranja',
                'attribute' => '#FFA500',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Purpura',
                'attribute' => '#800080',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Plata',
                'attribute' => '#C0C0C0',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Real',
                'attribute' => '#4169E1',
                'option_id' =>1
            ],  [
                'uuid' => $faker->uuid,
                'name' => 'Beige',
                'attribute' => '#F5F5DC',
                'option_id' =>1
            ],   [
                'uuid' => $faker->uuid,
                'name' => 'XS',
                'attribute' => 'adult',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => 'S',
                'attribute' => 'adult',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => 'M',
                'attribute' => 'adult',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => 'L',
                'attribute' => 'adult',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => 'XL',
                'attribute' => 'adult',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => 'XXL',
                'attribute' => 'adult',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '2',
                'attribute' => 'children',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '4',
                'attribute' => 'children',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '6',
                'attribute' => 'children',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '8',
                'attribute' => 'children',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '10',
                'attribute' => 'children',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '12',
                'attribute' => 'children',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '14',
                'attribute' => 'children',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '34',
                'attribute' => 'shoe',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '35',
                'attribute' => 'shoe',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '36',
                'attribute' => 'shoe',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '37',
                'attribute' => 'shoe',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '38',
                'attribute' => 'shoe',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '39',
                'attribute' => 'shoe',
                'option_id' =>2
            ],[
                'uuid' => $faker->uuid,
                'name' => '40',
                'attribute' => 'shoe',
                'option_id' =>2
            ],
        ));
    }
}
