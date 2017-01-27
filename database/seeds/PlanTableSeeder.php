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
                'price'  => 10
            ],
            [
                'id'    => 2 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Estandar',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 1,
                'price'  => 20
            ],
            [
                'id'    => 3 ,
                'uuid'    => $faker->uuid,
                'name'  => 'Avanzado',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'price'  => 30
            ],
        ));
        DB::table('plans')->insert([
            [
                'id'    => 4 ,
                'plan_id' => 1,
                'uuid'    => $faker->uuid,
                'name'  => 'Mensual',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'interval' => 'monthly',
                'interval_count' => 1,
                'discount' => 0
            ],
            [
                'id'    => 5 ,
                'plan_id' => 1,
                'uuid'    => $faker->uuid,
                'name'  => 'Semestral',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'interval' => 'monthly',
                'interval_count' => 6,
                'discount' => 5
            ],
            [
                'id'    => 6 ,
                'plan_id' => 1,
                'uuid'    => $faker->uuid,
                'name'  => 'Anual',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'interval' => 'yearly',
                'interval_count' => 1,
                'discount' => 10
            ],
            [
                'id'    => 7 ,
                'plan_id' => 2,
                'uuid'    => $faker->uuid,
                'name'  => 'Mensual',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'interval' => 'monthly',
                'interval_count' => 1,
                'discount' => 0
            ],
            [
                'id'    => 8 ,
                'plan_id' =>2,
                'uuid'    => $faker->uuid,
                'name'  => 'Semestral',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'interval' => 'monthly',
                'interval_count' => 6,
                'discount' => 5
            ],
            [
                'id'    => 9 ,
                'plan_id' => 2,
                'uuid'    => $faker->uuid,
                'name'  => 'Anual',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'interval' => 'yearly',
                'interval_count' => 1,
                'discount' => 10
            ],
            [
                'id'    => 10 ,
                'plan_id' => 3,
                'uuid'    => $faker->uuid,
                'name'  => 'Mensual',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'interval' => 'monthly',
                'interval_count' => 1,
                'discount' => 0
            ],
            [
                'id'    => 11,
                'plan_id' =>3,
                'uuid'    => $faker->uuid,
                'name'  => 'Semestral',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'interval' => 'monthly',
                'interval_count' => 6,
                'discount' => 5
            ],
            [
                'id'    =>12,
                'plan_id' => 3,
                'uuid'    => $faker->uuid,
                'name'  => 'Anual',
                'image'  => $faker->imageUrl,
                'description'  => $faker->text,
                'main'  => 0,
                'interval' => 'yearly',
                'interval_count' => 1,
                'discount' => 10
            ],
        ]);
    }
}
