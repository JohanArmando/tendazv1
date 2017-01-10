<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CategoryTldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('category_tlds')->insert(array(
                [
                    'uuid' => $faker->uuid,
                    'name' => 'Dominios Comunes'
                ],
                [
                    'uuid' => $faker->uuid,
                    'name' => 'Dominios Pais'
                ],
                [
                    'uuid' => $faker->uuid,
                    'name' => 'Dominios Premiun'
                ]
            ));
    }
}
