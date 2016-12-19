<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('plans')->insert(array(
            [
                'id'    => 1 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Basico',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'price'  => 10,
            ],
            [
                'id'    => 2 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Estandar',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 1,
                'price'  => 20,
            ],
            [
                'id'    => 3 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Premiun',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'price'  => 30,
            ]
        ));
    }
}
