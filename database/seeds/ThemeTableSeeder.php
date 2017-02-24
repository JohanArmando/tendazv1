<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('themes')->insert(array(
            array(
                'id' => 1,
                'uuid' => $faker->uuid ,
                'name' => 'default',
                'directory' => 'default',
                'path' => 'one.gif',
                'active' => 1,
                'products_per_page' => rand(10 , 20),
            ),
            array(
                'id' => 2,
                'uuid' => $faker->uuid ,
                'name' => 'minimal',
                'directory' => 'minimal',
                'path' => 'two.gif',
                'active' => 1,
                'products_per_page' => rand(10 , 20),
            ),
            array(
                'id' => 3,
                'uuid' => $faker->uuid ,
                'name' => 'big_store',
                'directory' => 'big_store',
                'path' => 'three.gif',
                'active' => 1,
                'products_per_page' => rand(10 , 20),
            ),
            array(
                'id' => 4,
                'uuid' => $faker->uuid ,
                'name' => 'tech',
                'directory' => 'tech',
                'path' => 'four.gif',
                'active' => 1,
                'products_per_page' => rand(10 , 20),
            ),
            array(
                'id' => 5,
                'uuid' => $faker->uuid ,
                'name' => 'shopping_center',
                'directory' => 'shopping_center',
                'path' => 'five.gif',
                'active' => 1,
                'products_per_page' => rand(10 , 20),
            ),
        ));
    }
}
