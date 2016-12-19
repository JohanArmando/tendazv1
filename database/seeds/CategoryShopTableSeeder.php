<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoryShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('category_shop')->insert(array(
            array(
                'id' => 1,
                'uuid' => $faker->uuid ,
                'name' => 'Indumentaria',
                'value' => 'clothing',
            ),
             array(
                'id' => 2,
                'uuid' => $faker->uuid ,
                'name' => 'Accesorios de indumentaria',
                'value' => 'clothing_accesories',
            ),
             array(
                'id' => 3,
                'uuid' => $faker->uuid ,
                'name' => 'Casa y Jardín',
                'value' => 'home_garden',
            ), array(
                'id' => 4,
                'uuid' => $faker->uuid ,
                'name' => 'Salud y Belleza',
                'value' => 'health_beauty',
            ), array(
                'id' => 5,
                'uuid' => $faker->uuid ,
                'name' => 'Regalos',
                'value' => 'gifts',
            ), array(
                'id' => 6,
                'uuid' => $faker->uuid ,
                'name' => 'Comida y Bebida',
                'value' => 'food_drinks',
            ), array(
                'id' => 7,
                'uuid' => $faker->uuid ,
                'name' => 'Electrónica/IT/Computación',
                'value' => 'electronics_it',
            ), array(
                'id' => 8,
                'uuid' => $faker->uuid ,
                'name' => 'Antiguedades',
                'value' => 'antiques',
            ), array(
                'id' => 9,
                'uuid' => $faker->uuid ,
                'name' => 'Arte',
                'value' => 'art',
            ), array(
                'id' => 10,
                'uuid' => $faker->uuid ,
                'name' => 'Automoviles',
                'value' => 'cars',
            ), array(
                'id' => 11,
                'uuid' => $faker->uuid ,
                'name' => 'Construcción/Industrial',
                'value' => 'industrial',
            ), array(
                'id' => 12,
                'uuid' => $faker->uuid ,
                'name' => 'Deportes',
                'value' => 'sports',
            ), array(
                'id' => 13,
                'uuid' => $faker->uuid ,
                'name' => 'Digital/Bienes Digitales',
                'value' => 'digital',
            ), array(
                'id' => 14,
                'uuid' => $faker->uuid ,
                'name' => 'Educación',
                'value' => 'education',
            ), array(
                'id' => 15,
                'uuid' => $faker->uuid ,
                'name' => 'Insumos de oficina',
                'value' => 'office_supplies',
            ), array(
                'id' => 16,
                'uuid' => $faker->uuid ,
                'name' => 'Joyas/Relojes',
                'value' => 'jewelry',
            ), array(
                'id' => 17,
                'uuid' => $faker->uuid ,
                'name' => 'Juguetes/Juegos/Hobbies',
                'value' => 'toys',
            ), array(
                'id' => 18,
                'uuid' => $faker->uuid ,
                'name' => 'Libros/Revistas',
                'value' => 'books',
            ), array(
                'id' => 19,
                'uuid' => $faker->uuid ,
                'name' => 'Mascotas',
                'value' => 'pets',
            ), array(
                'id' => 20,
                'uuid' => $faker->uuid ,
                'name' => 'Música/Películas',
                'value' => 'music_movies',
            ), array(
                'id' => 21,
                'uuid' => $faker->uuid ,
                'name' => 'Servicios',
                'value' => 'services',
            ), array(
                'id' => 22,
                'uuid' => $faker->uuid ,
                'name' => 'Viajes',
                'value' => 'travel',
            ), array(
                'id' => 23,
                'uuid' => $faker->uuid ,
                'name' => 'Erótica',
                'value' => 'erotics',
            ), array(
                'id' => 24,
                'uuid' => $faker->uuid ,
                'name' => 'Librería/Gráfica',
                'value' => 'bookstore_graphic',
            ), array(
                'id' => 25,
                'uuid' => $faker->uuid ,
                'name' => 'Equipamento/Maquinaria',
                'value' => 'equipment_machines',
            ), array(
                'id' => 26,
                'uuid' => $faker->uuid ,
                'name' => 'Otra',
                'value' => 'other',
            )
        ));
    }
}

