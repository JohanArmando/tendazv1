<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('tlds')->insert(array(
            [
                'uuid' => $faker->uuid,
                'name' => '.biz',
                'price' => 13.00,
                'category_tld_id' => 1,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.com',
                'price' => 13.00,
                'category_tld_id' => 1,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.info',
                'price' => 13.00,
                'category_tld_id' => 1,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.net',
                'price' => 13.00,
                'category_tld_id' => 1,
                'created_at' => '2017-01-06 04:00:00'
            ],[
                'uuid' => $faker->uuid,
                'name' => '.org',
                'price' => 13.00,
                'category_tld_id' => 1,
                'created_at' => '2017-01-06 04:00:00'
            ],


            /*  */

            [
                'uuid' => $faker->uuid,
                'name' => '.be',
                'price' => 13.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.ca',
                'price' => 18.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.co',
                'price' => 28.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.co.uk',
                'price' => 13.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.eu',
                'price' => 18.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.in',
                'price' => 18.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.it',
                'price' => 18.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.nl',
                'price' => 18.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.us',
                'price' => 13.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.ws',
                'price' => 23.00,
                'category_tld_id' => 2,
                'created_at' => '2017-01-06 04:00:00'
            ],


            /*  */

            [
                'uuid' => $faker->uuid,
                'name' => '.bargains',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.bid',
                'price' => 26.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.bike',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.blackfriday',
                'price' => 48.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.boutique',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.camera',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.cards',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.cheap',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.christmas',
                'price' => 48.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.clothing',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],



            [
                'uuid' => $faker->uuid,
                'name' => '.coffee',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.computer',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.diamonds',
                'price' => 26.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.equipment',
                'price' => 10.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.expert',
                'price' => 10.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.fish',
                'price' => 10.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.florist',
                'price' => 26.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.gift',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.glass',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.guitars',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],



            [
                'uuid' => $faker->uuid,
                'name' => '.house',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.kitchen',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.lighting',
                'price' => 26.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.me',
                'price' => 23.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.plumbing',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.repair',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.rocks',
                'price' => 21.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.sexy',
                'price' => 26.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.shoes',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.supplies',
                'price' => 15.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],




            [
                'uuid' => $faker->uuid,
                'name' => '.supply',
                'price' => 36.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.tattoo',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.technology',
                'price' => 26.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.tools',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.store',
                'price' => 26.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.trade',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.training',
                'price' => 38.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.tv',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.watch',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ],
            [
                'uuid' => $faker->uuid,
                'name' => '.computer',
                'price' => 37.00,
                'category_tld_id' => 3,
                'created_at' => '2017-01-06 04:00:00'
            ]
        ));
   }
}
