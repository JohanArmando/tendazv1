<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('options')->insert(array(
            [
               'uuid' => $faker->uuid,
               'name' => 'Color',
            ],
            [
                'uuid' => $faker->uuid,
                'name' => 'Talla',
            ]
        ));
    }
}
