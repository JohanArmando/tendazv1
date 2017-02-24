<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class citiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \DB::table('cities')->insert(array(
        array(
            'id' => '1',
            'state_id' => '696',
            'name' => 'LETICIA',
            'abbr' => 'LET',
            'uuid' => $faker->uuid
        ),
		//AMAZONAS
			array(
                'id' => '2',
                'state_id' => '697',
                'name' => 'ABEJORRAL',
                'abbr' => 'ABE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '3',
                'state_id' => '697',
                'name' => 'AMAGA',
                'abbr' => 'AMA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '4',
                'state_id' => '697',
                'name' => 'AMALFI',
                'abbr' => 'AML',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '5',
                'state_id' => '697',
                'name' => 'ANDES',
                'abbr' => 'AND',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '6',
                'state_id' => '697',
                'name' => 'ANGELOPOLIS',
                'abbr' => 'ANG',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '7',
                'state_id' => '697',
                'name' => 'ANORI',
                'abbr' => 'ANO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '8',
                'state_id' => '697',
                'name' => 'APARTADO',
                'abbr' => 'APA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '9',
                'state_id' => '697',
                'name' => 'ANGELOPOLIS',
                'abbr' => 'ANG',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '10',
                'state_id' => '697',
                'name' => 'ARBOLETES',
                'abbr' => 'ARB',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '11',
                'state_id' => '697',
                'name' => 'ARGELIA',
                'abbr' => 'ARG',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '13',
                'state_id' => '697',
                'name' => 'BARBOSA',
                'abbr' => 'BAR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '14',
                'state_id' => '697',
                'name' => 'BELLO',
                'abbr' => 'BEL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '15',
                'state_id' => '697',
                'name' => 'BETULIA(ANT)',
                'abbr' => 'BET',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '16',
                'state_id' => '697',
                'name' => 'CACERES',
                'abbr' => 'CAC',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '17',
                'state_id' => '697',
                'name' => 'CALDAS(ANT)',
                'abbr' => 'CAL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '18',
                'state_id' => '697',
                'name' => 'CAÑASGORDAS',
                'abbr' => 'CAÑ',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '19',
                'state_id' => '697',
                'name' => 'CARACOLI',
                'abbr' => 'CAR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '20',
                'state_id' => '697',
                'name' => 'CARAMANTA',
                'abbr' => 'CMA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '21',
                'state_id' => '697',
                'name' => 'CAREPA',
                'abbr' => 'CAP',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '22',
                'state_id' => '697',
                'name' => 'CAROLINA',
                'abbr' => 'CRL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '23',
                'state_id' => '697',
                'name' => 'CASABE-YONDO',
                'abbr' => 'CASABE-YONDO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '24',
                'state_id' => '697',
                'name' => 'CAUCASIA',
                'abbr' => 'CAUCASIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '25',
                'state_id' => '697',
                'name' => 'CHIGORODO',
                'abbr' => 'CHIGORODO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '26',
                'state_id' => '697',
                'name' => 'CISNEROS',
                'abbr' => 'CISNEROS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '27',
                'state_id' => '697',
                'name' => 'CIUDAD BOLIVAR',
                'abbr' => 'CIUDAD BOLIVAR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '28',
                'state_id' => '697',
                'name' => 'COCORNA',
                'abbr' => 'COCORNA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '29',
                'state_id' => '697',
                'name' => 'CONCORDIA',
                'abbr' => 'CONCORDIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '30',
                'state_id' => '697',
                'name' => 'COPACABANA',
                'abbr' => 'COPACABANA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '31',
                'state_id' => '697',
                'name' => 'DABEIBA',
                'abbr' => 'DABEIBA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '33',
                'state_id' => '697',
                'name' => 'DON MATIAS',
                'abbr' => 'DON MATIAS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '34',
                'state_id' => '697',
                'name' => 'EL BAGRE',
                'abbr' => 'EL BAGRE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '35',
                'state_id' => '697',
                'name' => 'EL CARMEN DE VIBORAL',
                'abbr' => 'EL CARMEN DE VIBORAL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '36',
                'state_id' => '697',
                'name' => 'EL SANTUARIO',
                'abbr' => 'EL SANTUARIO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '37',
                'state_id' => '697',
                'name' => 'ENTRERRIOS',
                'abbr' => 'ENTRERRIOS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '38',
                'state_id' => '697',
                'name' => 'ENVIGADO',
                'abbr' => 'ENVIGADO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '39',
                'state_id' => '697',
                'name' => 'FREDONIA',
                'abbr' => 'FREDONIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '40',
                'state_id' => '697',
                'name' => 'FRONTINO',
                'abbr' => 'FRONTINO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '41',
                'state_id' => '697',
                'name' => 'GIRARDOTA',
                'abbr' => 'GIRARDOTA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '42',
                'state_id' => '697',
                'name' => 'GRANADA',
                'abbr' => 'GRANDA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '43',
                'state_id' => '697',
                'name' => 'GUADALUPE',
                'abbr' => 'GUADALUPE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '44',
                'state_id' => '697',
                'name' => 'GUARNE',
                'abbr' => 'GUARNE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '45',
                'state_id' => '697',
                'name' => 'GUATAPE',
                'abbr' => 'GUATEPA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '46',
                'state_id' => '697',
                'name' => 'ITAGUI',
                'abbr' => 'ITAGUI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '47',
                'state_id' => '697',
                'name' => 'ITUANGO',
                'abbr' => 'ITUANGO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '48',
                'state_id' => '697',
                'name' => 'JARDIN',
                'abbr' => 'JARDIN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '49',
                'state_id' => '697',
                'name' => 'JERICO',
                'abbr' => 'JERICO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '50',
                'state_id' => '697',
                'name' => 'LA CEJA',
                'abbr' => 'LA CEJA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '51',
                'state_id' => '697',
                'name' => 'LA ESTRELLA',
                'abbr' => 'LA ESTRELLA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '53',
                'state_id' => '697',
                'name' => 'LA PINTADA',
                'abbr' => 'LA PINTADA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '54',
                'state_id' => '697',
                'name' => 'LA UNION',
                'abbr' => 'LA UNION',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '55',
                'state_id' => '697',
                'name' => 'MACEO',
                'abbr' => 'MACEO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '56',
                'state_id' => '697',
                'name' => 'MARINILLA',
                'abbr' => 'MARINILLA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '57',
                'state_id' => '697',
                'name' => 'MEDELLIN',
                'abbr' => 'MED',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '58',
                'state_id' => '697',
                'name' => 'MONTEBELLO',
                'abbr' => 'MONTEBELLO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '59',
                'state_id' => '697',
                'name' => 'MUTATA',
                'abbr' => 'MUTATA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '60',
                'state_id' => '697',
                'name' => 'NARIÑO ANTIOQUIA',
                'abbr' => 'NARIÑO ANTIOQUIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '61',
                'state_id' => '697',
                'name' => 'NECHI',
                'abbr' => 'NECHI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '62',
                'state_id' => '697',
                'name' => 'NECOCLI',
                'abbr' => 'NECOCLI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '63',
                'state_id' => '697',
                'name' => 'PEÑOL',
                'abbr' => 'PEÑOL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '64',
                'state_id' => '697',
                'name' => 'PUEBLORRICO',
                'abbr' => 'PUEBLORRICO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '65',
                'state_id' => '697',
                'name' => 'PUERTO BERRIO',
                'abbr' => 'PUERTO BERRIO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '66',
                'state_id' => '697',
                'name' => 'PUERTO NARE',
                'abbr' => 'PUERTO NARE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '67',
                'state_id' => '697',
                'name' => 'PUERTO TRIUNFO',
                'abbr' => 'PUERTO TRIUNFO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '68',
                'state_id' => '697',
                'name' => 'RETIRO',
                'abbr' => 'RETIRO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '69',
                'state_id' => '697',
                'name' => 'RIONEGRO',
                'abbr' => 'RIONEGRO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '70',
                'state_id' => '697',
                'name' => 'SABANALARGA',
                'abbr' => 'SABANALARGA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '71',
                'state_id' => '697',
                'name' => 'SABANETA',
                'abbr' => 'SABANETA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '72',
                'state_id' => '697',
                'name' => 'SALGAR',
                'abbr' => 'SALGAR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '73',
                'state_id' => '697',
                'name' => 'SAN ANDRES DE CUERQUIA',
                'abbr' => 'SAN ANDRES DE CUERQUIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '74',
                'state_id' => '697',
                'name' => 'SAN CARLOS',
                'abbr' => 'SAN CARLOS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '75',
                'state_id' => '697',
                'name' => 'SAN JERONIMO',
                'abbr' => 'SAN JERONIMO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '76',
                'state_id' => '697',
                'name' => 'SAN JOSE DE LA MONTAÑA',
                'abbr' => 'SAN JOSE DE LA MONTAÑA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '77',
                'state_id' => '697',
                'name' => 'SAN JUAN DE URABA',
                'abbr' => 'SAN JUAN DE URABA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '78',
                'state_id' => '697',
                'name' => 'SAN LUIS',
                'abbr' => 'SAN LUIS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '79',
                'state_id' => '697',
                'name' => 'SAN PEDRO DE LOS MILAGROS',
                'abbr' => 'SAN PEDRO DE LOS MILAGROS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '80',
                'state_id' => '697',
                'name' => 'SAN PEDRO DE URABA',
                'abbr' => 'SAN PEDRO DE URABA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '81',
                'state_id' => '697',
                'name' => 'SAN RAFAEL',
                'abbr' => 'SAN RAFAEL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '82',
                'state_id' => '697',
                'name' => 'SAN ROQUE',
                'abbr' => 'SAN ROQUE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '83',
                'state_id' => '697',
                'name' => 'SANTA BARBARA',
                'abbr' => 'SANTA BARBARA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '84',
                'state_id' => '697',
                'name' => 'SANTA ROSA DE OSOS',
                'abbr' => 'SANTA ROSA DE OSOS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '85',
                'state_id' => '697',
                'name' => 'SANTA FE DE ANTIOQUIA',
                'abbr' => 'SANTA FE DE ANTIOQUIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '86',
                'state_id' => '697',
                'name' => 'SEGOVIA',
                'abbr' => 'SEGOVIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '87',
                'state_id' => '697',
                'name' => 'SONSON',
                'abbr' => 'SONSON',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '88',
                'state_id' => '697',
                'name' => 'SOPETRAN',
                'abbr' => 'SOPETRAN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '89',
                'state_id' => '697',
                'name' => 'TAMESIS',
                'abbr' => 'TAMESIS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '90',
                'state_id' => '697',
                'name' => 'TARAZA',
                'abbr' => 'TARAZA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '91',
                'state_id' => '697',
                'name' => 'TARSO',
                'abbr' => 'TARSO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '92',
                'state_id' => '697',
                'name' => 'TITIRIBI',
                'abbr' => 'TITIRIBI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '93',
                'state_id' => '697',
                'name' => 'TOLEDO',
                'abbr' => 'TOLEDO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '94',
                'state_id' => '697',
                'name' => 'TURBO',
                'abbr' => 'TURBO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '95',
                'state_id' => '697',
                'name' => 'URRAO',
                'abbr' => 'URRAO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '96',
                'state_id' => '697',
                'name' => 'URRAO',
                'abbr' => 'URRAO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '97',
                'state_id' => '697',
                'name' => 'VALDIVIA',
                'abbr' => 'VALDIVIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '98',
                'state_id' => '697',
                'name' => 'VALPARAISO',
                'abbr' => 'VALPARAISO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '99',
                'state_id' => '697',
                'name' => 'VEGACHI',
                'abbr' => 'VEGACHI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '100',
                'state_id' => '697',
                'name' => 'VENECIA',
                'abbr' => 'VENECIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '101',
                'state_id' => '697',
                'name' => 'VENECIA',
                'abbr' => 'VENECIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '102',
                'state_id' => '697',
                'name' => 'VIGIA DEL FUERTE',
                'abbr' => 'VIGIA DEL FUERTE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '103',
                'state_id' => '697',
                'name' => 'YURUMAL',
                'abbr' => 'YURUMAL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '104',
                'state_id' => '697',
                'name' => 'YOLOMBO',
                'abbr' => 'YOLOMBO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '105',
                'state_id' => '697',
                'name' => 'ZARAGOZA',
                'abbr' => 'ZARAGOZA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '106',
                'state_id' => '697',
                'name' => '',
                'abbr' => '',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '107',
                'state_id' => '698',
                'name' => 'ARAUCA',
                'abbr' => 'ARAUCA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '108',
                'state_id' => '698',
                'name' => 'ARAUQUITA',
                'abbr' => 'ARAUQUITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '109',
                'state_id' => '698',
                'name' => 'FORTUL',
                'abbr' => 'FORTUL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '110',
                'state_id' => '698',
                'name' => 'PUERTO RONDON',
                'abbr' => 'PUERTO RONDON',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '111',
                'state_id' => '698',
                'name' => 'SARAVENA',
                'abbr' => 'SARAVENA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '112',
                'state_id' => '698',
                'name' => 'TAME',
                'abbr' => 'TAME',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '113',
                'state_id' => '699',
                'name' => 'BARANOA',
                'abbr' => 'BARANOA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '114',
                'state_id' => '699',
                'name' => 'BARRANQUILLA',
                'abbr' => 'B/QUILLA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '115',
                'state_id' => '699',
                'name' => 'CAMPO DE LA CRUZ',
                'abbr' => 'CAMPO DE LA CRUZ',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '116',
                'state_id' => '699',
                'name' => 'CANDELARIA',
                'abbr' => 'CANDELARIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '117',
                'state_id' => '699',
                'name' => 'GALAPA',
                'abbr' => 'GALAPA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '118',
                'state_id' => '699',
                'name' => 'JUAN DE ACOSTA',
                'abbr' => 'JUAN DE ACOSTA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '119',
                'state_id' => '699',
                'name' => 'LURUACO',
                'abbr' => 'LURUACO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '120',
                'state_id' => '699',
                'name' => 'MALAMBO',
                'abbr' => 'MALAMBO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '121',
                'state_id' => '699',
                'name' => 'MANATI',
                'abbr' => 'MANATI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '122',
                'state_id' => '699',
                'name' => 'PALMAR DE VARELA',
                'abbr' => 'PALMAR DE VARELA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '123',
                'state_id' => '699',
                'name' => 'POLONUEVO',
                'abbr' => 'POLONUEVO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '124',
                'state_id' => '699',
                'name' => 'PONEDERA',
                'abbr' => 'PONEDERA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '125',
                'state_id' => '699',
                'name' => 'PUERTO COLOMBIA',
                'abbr' => 'PUERTO COLOMBIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '126',
                'state_id' => '699',
                'name' => 'REPELON',
                'abbr' => 'REPELON',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '127',
                'state_id' => '699',
                'name' => 'SABANAGRANDE',
                'abbr' => 'SABANAGRANDE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '128',
                'state_id' => '699',
                'name' => 'SABANALARGA',
                'abbr' => 'SABANALARGA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '129',
                'state_id' => '699',
                'name' => 'SANTO TOMAS',
                'abbr' => 'SANTO TOMAS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '130',
                'state_id' => '699',
                'name' => 'SOLEDAD',
                'abbr' => 'SOLEDAD',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '131',
                'state_id' => '699',
                'name' => 'SUAN',
                'abbr' => 'SUAN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '132',
                'state_id' => '699',
                'name' => 'USIACURI',
                'abbr' => 'USIACURI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '133',
                'state_id' => '700',
                'name' => 'ACHI',
                'abbr' => 'ACHI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '134',
                'state_id' => '700',
                'name' => 'ARENAL',
                'abbr' => 'ARENAL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '135',
                'state_id' => '700',
                'name' => 'ARJONA',
                'abbr' => 'ARJONA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '136',
                'state_id' => '700',
                'name' => 'CALAMAR',
                'abbr' => 'CALAMAR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '137',
                'state_id' => '700',
                'name' => 'CALAMAR',
                'abbr' => 'CALMAR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '138',
                'state_id' => '700',
                'name' => 'CANTAGALLO',
                'abbr' => 'CANTAGALLO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '139',
                'state_id' => '700',
                'name' => 'CARTAGENA DE INDIAS',
                'abbr' => 'CARTAGENA DE INDIAS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '140',
                'state_id' => '700',
                'name' => 'CICUCO',
                'abbr' => 'CICUCO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '141',
                'state_id' => '700',
                'name' => 'EL CARMEN DE BOLIVAR',
                'abbr' => 'EL CARMEN DE BOLIVAR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '142',
                'state_id' => '700',
                'name' => 'MAGANGUE',
                'abbr' => 'MAGANGUE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '143',
                'state_id' => '700',
                'name' => 'MAHATES',
                'abbr' => 'MAHATES',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '144',
                'state_id' => '700',
                'name' => 'MARGARITA',
                'abbr' => 'MARGARITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '145',
                'state_id' => '700',
                'name' => 'MARIA LA BAJA',
                'abbr' => 'MARIA LA BAJA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '146',
                'state_id' => '700',
                'name' => 'MOMPOS',
                'abbr' => 'MOMPOS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '147',
                'state_id' => '700',
                'name' => 'MORALES',
                'abbr' => 'MORALES',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '148',
                'state_id' => '700',
                'name' => 'PINILLOS',
                'abbr' => 'PINILLOS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '149',
                'state_id' => '700',
                'name' => 'RIO VIEJO',
                'abbr' => 'RIO VIEJO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '150',
                'state_id' => '700',
                'name' => 'SAN ESTANISLAO',
                'abbr' => 'SAN ESTANISLAO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '151',
                'state_id' => '700',
                'name' => 'SAN JACINTO DEL CAUCA',
                'abbr' => 'SAN JACINTO DEL CAUCA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '152',
                'state_id' => '700',
                'name' => 'SAN JACINTO',
                'abbr' => 'SAN JACINTO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '153',
                'state_id' => '700',
                'name' => 'SAN JUAN NEMOPUCENO',
                'abbr' => 'SAN JUAN NEMOPUCENO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '154',
                'state_id' => '700',
                'name' => 'SAN MARTIN DE LOBA',
                'abbr' => 'SAN MARTIN DE LOBA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '155',
                'state_id' => '700',
                'name' => 'SAN PABLO',
                'abbr' => 'SAN PABLO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '156',
                'state_id' => '700',
                'name' => 'SANTA ROSA DE LIMA',
                'abbr' => 'SANTA ROSA DE LIMA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '157',
                'state_id' => '700',
                'name' => 'SANTA ROSA DEL SUR',
                'abbr' => 'SANTA ROSA DEL SUR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '158',
                'state_id' => '700',
                'name' => 'SIMITI',
                'abbr' => 'SIMITI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '159',
                'state_id' => '700',
                'name' => 'SOPLAVIENTO',
                'abbr' => 'SOPLAVIENTO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '160',
                'state_id' => '700',
                'name' => 'TALAIGUA NUEVO',
                'abbr' => 'TALAIGUA NUEVO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '161',
                'state_id' => '700',
                'name' => 'TURBACO',
                'abbr' => 'TURBACO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '162',
                'state_id' => '700',
                'name' => 'TURBANA',
                'abbr' => 'TURBANA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '163',
                'state_id' => '700',
                'name' => 'ZAMBRANO',
                'abbr' => 'ZAMBRANO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '164',
                'state_id' => '701',
                'name' => 'AQUITANIA',
                'abbr' => 'AQUITANIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '165',
                'state_id' => '701',
                'name' => 'ARCABUCO',
                'abbr' => 'ARCABUCO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '166',
                'state_id' => '701',
                'name' => 'BELEN',
                'abbr' => 'BELEN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '167',
                'state_id' => '701',
                'name' => 'BERBEO',
                'abbr' => 'BERBEO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '168',
                'state_id' => '701',
                'name' => 'BOAVITA',
                'abbr' => 'BOAVITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '169',
                'state_id' => '701',
                'name' => 'CAMPOHERMOSO',
                'abbr' => 'CAMPOHERMOSO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '170',
                'state_id' => '701',
                'name' => 'CHINAVITA',
                'abbr' => 'CHINAVITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '171',
                'state_id' => '701',
                'name' => 'CHIQUINQUIRA',
                'abbr' => 'CHIQUINQUIRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '172',
                'state_id' => '701',
                'name' => 'CHISCAS',
                'abbr' => 'CHISCAS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '173',
                'state_id' => '701',
                'name' => 'CHITA',
                'abbr' => 'CHITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '174',
                'state_id' => '701',
                'name' => 'CHIVOR',
                'abbr' => 'CHIVOR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '175',
                'state_id' => '701',
                'name' => 'CIENEGA BOYACA',
                'abbr' => 'CIENEGA BOYACA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '176',
                'state_id' => '701',
                'name' => 'COMBITA',
                'abbr' => 'COMBITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '177',
                'state_id' => '701',
                'name' => 'CORRALES BOYACA',
                'abbr' => 'CORRALES BOAYCA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '178',
                'state_id' => '701',
                'name' => 'COVARACHIA',
                'abbr' => 'COVARACHIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '179',
                'state_id' => '701',
                'name' => 'CUCAITA',
                'abbr' => 'CUCAITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '180',
                'state_id' => '701',
                'name' => 'DUITAMA',
                'abbr' => 'DUITAMA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '181',
                'state_id' => '701',
                'name' => 'EL COCUY BOYACA',
                'abbr' => 'EL COCUY BOYACA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '182',
                'state_id' => '701',
                'name' => 'EL OSPINO',
                'abbr' => 'EL OSPINO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '183',
                'state_id' => '701',
                'name' => 'FIRAVITOBA',
                'abbr' => 'FIRAVITOBA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '184',
                'state_id' => '701',
                'name' => 'FLORESTA',
                'abbr' => 'FLORESTA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '185',
                'state_id' => '701',
                'name' => 'GARAGOA',
                'abbr' => 'GARAGOA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '186',
                'state_id' => '701',
                'name' => 'GUATEQUE',
                'abbr' => 'GUATEQUE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '187',
                'state_id' => '701',
                'name' => 'GUAYATA',
                'abbr' => 'GUAYATA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '188',
                'state_id' => '701',
                'name' => 'GUICAN',
                'abbr' => 'GUICAN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '189',
                'state_id' => '701',
                'name' => 'JENESANO',
                'abbr' => 'JENESANO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '190',
                'state_id' => '701',
                'name' => 'LABRANZAGRANDE',
                'abbr' => 'LABRANZAGRANDE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '191',
                'state_id' => '701',
                'name' => 'MACANAL',
                'abbr' => 'MACANAL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '192',
                'state_id' => '701',
                'name' => 'MIRAFLORES',
                'abbr' => 'MIRAFLORES',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '193',
                'state_id' => '701',
                'name' => 'MONGUA',
                'abbr' => 'MONGUA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '194',
                'state_id' => '701',
                'name' => 'MONGUI',
                'abbr' => 'MONGUI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '195',
                'state_id' => '701',
                'name' => 'MONIQUIRA',
                'abbr' => 'MONIQUIRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '196',
                'state_id' => '701',
                'name' => 'MUZO',
                'abbr' => 'MUZO',
                'uuid' => $faker->uuid
            ),

	        array(
                'id' => '197',
                'state_id' => '701',
                'name' => 'NOBSA',
                'abbr' => 'NOBSA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '198',
                'state_id' => '701',
                'name' => 'NUEVO COLON',
                'abbr' => 'NUEVO COLON',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '199',
                'state_id' => '701',
                'name' => 'OTANCHE',
                'abbr' => 'OTANCHE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '200',
                'state_id' => '701',
                'name' => 'PACHAVITA',
                'abbr' => 'PACHAVITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '201',
                'state_id' => '701',
                'name' => 'PAEZ',
                'abbr' => 'PAEZ',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '202',
                'state_id' => '701',
                'name' => 'PAIPA',
                'abbr' => 'PAIPA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '203',
                'state_id' => '701',
                'name' => 'PAJARITO',
                'abbr' => 'PAJARITO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '204',
                'state_id' => '701',
                'name' => 'PAUNA',
                'abbr' => 'PAUNA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '205',
                'state_id' => '701',
                'name' => 'PAZ DE RIO',
                'abbr' => 'PAZ DE RIO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '206',
                'state_id' => '701',
                'name' => 'PESCA',
                'abbr' => 'PESCA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '207',
                'state_id' => '701',
                'name' => 'PUERTO BOYACA',
                'abbr' => 'PUERTO BOYACA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '208',
                'state_id' => '701',
                'name' => 'RAMIRIQUI',
                'abbr' => 'RAMIRIQUI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '209',
                'state_id' => '701',
                'name' => 'RAQUIRA',
                'abbr' => 'RAQUIRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '210',
                'state_id' => '701',
                'name' => 'SABOYA',
                'abbr' => 'SABOYA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '211',
                'state_id' => '701',
                'name' => 'SACHICA',
                'abbr' => 'SACHICA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '212',
                'state_id' => '701',
                'name' => 'SAMACA',
                'abbr' => 'SAMACA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '213',
                'state_id' => '701',
                'name' => 'SAN JOSE DE PARE',
                'abbr' => 'SAN JOSE DE PARE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '214',
                'state_id' => '701',
                'name' => 'SAN LUIS DE GACENO',
                'abbr' => 'SAN LUIS DE GACENO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '215',
                'state_id' => '701',
                'name' => 'SAN MATEO',
                'abbr' => 'SAN MATEO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '216',
                'state_id' => '701',
                'name' => 'SAN PABLO DE BORBUR',
                'abbr' => 'SAN PABLO DE BORBUR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '217',
                'state_id' => '701',
                'name' => 'SANTA MARIA',
                'abbr' => 'SANTA MARIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '218',
                'state_id' => '701',
                'name' => 'SANTA ROSA DE VITERBO',
                'abbr' => 'SANTA ROSA DE VITERBO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '219',
                'state_id' => '701',
                'name' => 'SANTA SOFIA',
                'abbr' => 'SANTA SOFIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '220',
                'state_id' => '701',
                'name' => 'SANTANA',
                'abbr' => 'SANTANA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '221',
                'state_id' => '701',
                'name' => 'SIACHOQUE',
                'abbr' => 'SIACHOQUE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '222',
                'state_id' => '701',
                'name' => 'SOATA',
                'abbr' => 'SOATA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '223',
                'state_id' => '701',
                'name' => 'SOCHA',
                'abbr' => 'SOCHA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '224',
                'state_id' => '701',
                'name' => 'SOCOTA',
                'abbr' => 'SOCOTA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '225',
                'state_id' => '701',
                'name' => 'SOGAMOSO',
                'abbr' => 'SOGAMOSO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '226',
                'state_id' => '701',
                'name' => '',
                'abbr' => '',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '227',
                'state_id' => '701',
                'name' => 'SOMONDOCO',
                'abbr' => 'SOMONDOCO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '228',
                'state_id' => '701',
                'name' => 'SORACA',
                'abbr' => 'SORACA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '229',
                'state_id' => '701',
                'name' => 'SOTAQUIRA',
                'abbr' => 'SOTAQUIRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '230',
                'state_id' => '701',
                'name' => 'SUTAMARCHAN',
                'abbr' => 'SUTAMARCHAN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '231',
                'state_id' => '701',
                'name' => 'TASCO',
                'abbr' => 'TASCO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '232',
                'state_id' => '701',
                'name' => 'TENZA',
                'abbr' => 'TENZA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '233',
                'state_id' => '701',
                'name' => 'TIBANA',
                'abbr' => 'TIBANA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '234',
                'state_id' => '701',
                'name' => 'TIBASOSA',
                'abbr' => 'TIBASOSA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '235',
                'state_id' => '701',
                'name' => 'TINJACA',
                'abbr' => 'TINJACA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '236',
                'state_id' => '701',
                'name' => 'TIPACOQUE',
                'abbr' => 'TIPACOQUE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '237',
                'state_id' => '701',
                'name' => 'TOCA',
                'abbr' => 'TOCA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '238',
                'state_id' => '701',
                'name' => 'TOCA',
                'abbr' => 'TOCA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '239',
                'state_id' => '701',
                'name' => 'TOPAGA',
                'abbr' => 'TOPAGA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '240',
                'state_id' => '701',
                'name' => 'TUNJA',
                'abbr' => 'TUNJA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '241',
                'state_id' => '701',
                'name' => 'TURMEQUE',
                'abbr' => 'TURMEQUE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '242',
                'state_id' => '701',
                'name' => 'TUTA',
                'abbr' => 'TUTA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '243',
                'state_id' => '701',
                'name' => 'UMBITA',
                'abbr' => 'UMBITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '244',
                'state_id' => '701',
                'name' => 'VENTAQUEMADA',
                'abbr' => 'VENTAQUEMADA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '245',
                'state_id' => '701',
                'name' => 'ZETAQUIRA',
                'abbr' => 'ZETAQUIRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '246',
                'state_id' => '702',
                'name' => 'AGUADAS',
                'abbr' => 'AGUADAS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '247',
                'state_id' => '702',
                'name' => 'ANSERMA',
                'abbr' => 'ANSERMA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '248',
                'state_id' => '702',
                'name' => 'ARANZAZU',
                'abbr' => 'ARANZAZU',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '249',
                'state_id' => '702',
                'name' => 'BELALCAZAR (CL)',
                'abbr' => 'BELALCAZAR (CL)',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '250',
                'state_id' => '702',
                'name' => 'CHINCHINA',
                'abbr' => 'CHINCHINA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '251',
                'state_id' => '702',
                'name' => 'FILADELFIA',
                'abbr' => 'FILADELFIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '252',
                'state_id' => '702',
                'name' => 'LA DORADA',
                'abbr' => 'LA DORADA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '253',
                'state_id' => '702',
                'name' => 'LA MERCED',
                'abbr' => 'LA MERCED',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '254',
                'state_id' => '702',
                'name' => 'MANIZALES',
                'abbr' => 'MANIZALES',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '255',
                'state_id' => '702',
                'name' => 'MANZANARES',
                'abbr' => 'MANZANARES',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '256',
                'state_id' => '702',
                'name' => 'MARMATO',
                'abbr' => 'MARMATO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '257',
                'state_id' => '702',
                'name' => 'MARQUETALIA',
                'abbr' => 'MARQUETALIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '258',
                'state_id' => '702',
                'name' => 'NEIRA',
                'abbr' => 'NEIRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '259',
                'state_id' => '702',
                'name' => 'NORCASIA',
                'abbr' => 'NORCASIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '260',
                'state_id' => '702',
                'name' => 'PACORA',
                'abbr' => 'PACORA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '261',
                'state_id' => '702',
                'name' => 'PALESTINA',
                'abbr' => 'PALESTINA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '262',
                'state_id' => '702',
                'name' => 'PENSILVANIA',
                'abbr' => 'PENSILVANIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '263',
                'state_id' => '702',
                'name' => 'RIOSUCIO',
                'abbr' => 'RIOSUCIO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '264',
                'state_id' => '702',
                'name' => 'RISARALDA (CL)',
                'abbr' => 'RISARALDA (CL)',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '265',
                'state_id' => '702',
                'name' => 'SALAMIA',
                'abbr' => 'SALAMIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '266',
                'state_id' => '702',
                'name' => 'SAMANA',
                'abbr' => 'SAMANA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '267',
                'state_id' => '702',
                'name' => 'SAN JOSE (CL)',
                'abbr' => 'SAN JOSE (CL)',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '268',
                'state_id' => '702',
                'name' => 'SUPIA',
                'abbr' => 'SUPIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '269',
                'state_id' => '702',
                'name' => 'VICTORIA',
                'abbr' => 'VICTORIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '270',
                'state_id' => '702',
                'name' => 'VILLAMARIA',
                'abbr' => 'VILLAMARIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '271',
                'state_id' => '702',
                'name' => 'VITERBO (CL)',
                'abbr' => 'VITERBO (CL)',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '272',
                'state_id' => '703',
                'name' => 'ALBANIA',
                'abbr' => 'ALBANIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '273',
                'state_id' => '703',
                'name' => 'BELEN DE LOS ANDAQUIES',
                'abbr' => 'BELEN DE LOS ANDAQUIES',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '274',
                'state_id' => '703',
                'name' => 'CARTAGENA DEL CHAIRA',
                'abbr' => 'CARTAGENA DEL CHAIRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '275',
                'state_id' => '703',
                'name' => 'CURILLO',
                'abbr' => 'CURILLO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '276',
                'state_id' => '703',
                'name' => 'EL DONCELLO',
                'abbr' => 'EL DONCELLO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '277',
                'state_id' => '703',
                'name' => 'EL PAUJIL',
                'abbr' => 'EL PAUJIL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '278',
                'state_id' => '703',
                'name' => 'FLORENCIA',
                'abbr' => 'FLORENCIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '279',
                'state_id' => '703',
                'name' => 'LA MONTAÑITA',
                'abbr' => 'LA MONTAÑITA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '280',
                'state_id' => '703',
                'name' => 'PUERTO RICO CAQUETA',
                'abbr' => 'PUERTO RICO CAQUETA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '281',
                'state_id' => '703',
                'name' => 'SAN JOSE DE FRAGUA',
                'abbr' => 'SAN JOSE DE FRAGUA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '282',
                'state_id' => '703',
                'name' => 'SAN VICENTE DEL CAGUAN',
                'abbr' => 'SAN VICENTE DEL CAGUAN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '283',
                'state_id' => '703',
                'name' => 'VALPARAISO',
                'abbr' => 'VALPARAISO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '284',
                'state_id' => '704',
                'name' => 'AGUAZUL',
                'abbr' => 'AGUAZUL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '285',
                'state_id' => '704',
                'name' => 'HATO COROZAL',
                'abbr' => 'HATO COROZAL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '286',
                'state_id' => '704',
                'name' => 'MANI',
                'abbr' => 'MANI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '287',
                'state_id' => '704',
                'name' => 'MONTERREY',
                'abbr' => 'MONTERREY',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '288',
                'state_id' => '704',
                'name' => 'OROCUE',
                'abbr' => 'OROCUE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '289',
                'state_id' => '704',
                'name' => 'PAZ DE ARIPORO',
                'abbr' => 'PAZ DE ARIPORO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '290',
                'state_id' => '704',
                'name' => 'PORE',
                'abbr' => 'PORE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '291',
                'state_id' => '704',
                'name' => 'SABANALARGA (CASANARE)',
                'abbr' => 'SABANALARGA (CASANARE)',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '292',
                'state_id' => '704',
                'name' => 'SACAMA',
                'abbr' => 'SACAMA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '293',
                'state_id' => '704',
                'name' => 'SAN LUIS DE PALENQUE',
                'abbr' => 'SAN LUIS DE PALENQUE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '294',
                'state_id' => '704',
                'name' => 'TAMARA',
                'abbr' => 'TAMARA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '295',
                'state_id' => '704',
                'name' => 'TAURAMENA',
                'abbr' => 'TAURAMENA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '296',
                'state_id' => '704',
                'name' => 'TRINIDAD',
                'abbr' => 'TRINIDAD',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '297',
                'state_id' => '704',
                'name' => 'VILLANUEVA (CASANARE)',
                'abbr' => 'VILLANUEVA (CASANARE)',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '298',
                'state_id' => '704',
                'name' => 'YOPAL',
                'abbr' => 'YOPAL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '299',
                'state_id' => '705',
                'name' => 'ARGELIA',
                'abbr' => 'ARGELIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '300',
                'state_id' => '705',
                'name' => 'BALBOA',
                'abbr' => 'BALBOA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '301',
                'state_id' => '705',
                'name' => 'BOLIVAR (CAU)',
                'abbr' => 'BOLIVAR (CAU)',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '302',
                'state_id' => '705',
                'name' => 'CAJIBIO',
                'abbr' => 'CAJIBIO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '303',
                'state_id' => '705',
                'name' => 'CALOTO',
                'abbr' => 'CALOTO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '304',
                'state_id' => '705',
                'name' => 'CORINTO',
                'abbr' => 'CORINTO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '305',
                'state_id' => '705',
                'name' => 'EL BORDO',
                'abbr' => 'EL BORDO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '306',
                'state_id' => '705',
                'name' => 'EL TAMBO',
                'abbr' => 'EL TAMBO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '307',
                'state_id' => '705',
                'name' => 'GUACHENE',
                'abbr' => 'GUACHENE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '308',
                'state_id' => '705',
                'name' => 'GUAPI',
                'abbr' => 'GUAPI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '309',
                'state_id' => '705',
                'name' => 'MERCADERES',
                'abbr' => 'MERCADERES',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '310',
                'state_id' => '705',
                'name' => 'MIRANDA',
                'abbr' => 'MIRANDA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '311',
                'state_id' => '705',
                'name' => 'MORALES',
                'abbr' => 'MORALES',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '312',
                'state_id' => '705',
                'name' => 'PADILLA',
                'abbr' => 'PADILLA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '313',
                'state_id' => '705',
                'name' => 'PIENDAMO',
                'abbr' => 'PIENDAMO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '314',
                'state_id' => '705',
                'name' => 'POPAYAN',
                'abbr' => 'POPAYAN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '315',
                'state_id' => '705',
                'name' => 'PUERTO TEJADA',
                'abbr' => 'PUERTO TEJADA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '316',
                'state_id' => '705',
                'name' => 'SANTANDER DE QUILICHAO',
                'abbr' => 'SANTANDER DE QUILICAHO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '317',
                'state_id' => '705',
                'name' => 'SILVIA',
                'abbr' => 'SILVIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '318',
                'state_id' => '705',
                'name' => 'SUAREZ',
                'abbr' => 'SUAREZ',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '319',
                'state_id' => '705',
                'name' => 'TIMBIO',
                'abbr' => 'TIMBIO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '320',
                'state_id' => '705',
                'name' => 'TIMBIQUI',
                'abbr' => 'TIMBIQUI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '321',
                'state_id' => '705',
                'name' => 'VILLA RICA',
                'abbr' => 'VILLA RICA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '322',
                'state_id' => '706',
                'name' => 'AGUACHICA',
                'abbr' => 'AGUACHICA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '323',
                'state_id' => '706',
                'name' => 'ASTREAR',
                'abbr' => 'ASTREAR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '324',
                'state_id' => '706',
                'name' => 'BECERRIL',
                'abbr' => 'BECERRIL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '325',
                'state_id' => '706',
                'name' => 'BOSCONIA',
                'abbr' => 'BOSCONIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '326',
                'state_id' => '706',
                'name' => 'CHIMICHAGUA',
                'abbr' => 'CHIMICHAGUA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '327',
                'state_id' => '706',
                'name' => 'CHIRIGUANA',
                'abbr' => 'CHIRIGUANA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '328',
                'state_id' => '706',
                'name' => 'CODAZZI',
                'abbr' => 'CODAZZI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '329',
                'state_id' => '706',
                'name' => 'CURUMANI',
                'abbr' => 'CURUMANI',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '330',
                'state_id' => '706',
                'name' => 'EL COPEY',
                'abbr' => 'EL COPEY',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '331',
                'state_id' => '706',
                'name' => 'EL PASO',
                'abbr' => 'EL PASO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '332',
                'state_id' => '706',
                'name' => 'GAMARRA',
                'abbr' => 'GAMARRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '333',
                'state_id' => '706',
                'name' => 'LA GLORIA',
                'abbr' => 'LA GLORIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '334',
                'state_id' => '706',
                'name' => 'LA JAGUA DE IBIRICO',
                'abbr' => 'LA JAGUA DE IBIRICO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '335',
                'state_id' => '706',
                'name' => 'LA PAZ',
                'abbr' => 'LA PAZ',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '336',
                'state_id' => '706',
                'name' => 'PAILITAS',
                'abbr' => 'PAILITAS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '337',
                'state_id' => '706',
                'name' => 'PELAYA',
                'abbr' => 'PELAYA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '338',
                'state_id' => '706',
                'name' => 'RIO DE ORO',
                'abbr' => 'RIO DE ORO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '339',
                'state_id' => '706',
                'name' => 'SAN ALBERTO',
                'abbr' => 'SAN ALBERTO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '340',
                'state_id' => '706',
                'name' => 'SAN DIEGO',
                'abbr' => 'SAN DIEGO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '341',
                'state_id' => '706',
                'name' => 'SAN MARTIN',
                'abbr' => 'SAN MARTIN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '342',
                'state_id' => '706',
                'name' => 'TAMALAMEQUE',
                'abbr' => 'TAMALAMEQUE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '343',
                'state_id' => '706',
                'name' => 'VALLEDUPAR',
                'abbr' => 'VALLEDUPAR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '344',
                'state_id' => '707',
                'name' => 'BAHIA SOLANO MUTIS',
                'abbr' => 'BAHIA SOLANO MUTIS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '345',
                'state_id' => '707',
                'name' => 'ISTMINA',
                'abbr' => 'ISTMINA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '346',
                'state_id' => '707',
                'name' => 'QUIBDO',
                'abbr' => 'QUIBDO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '347',
                'state_id' => '707',
                'name' => 'TADO',
                'abbr' => 'TADO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '348',
                'state_id' => '708',
                'name' => 'AYAPEL',
                'abbr' => 'AYAPEL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '349',
                'state_id' => '708',
                'name' => 'BUENAVISTA (COR)',
                'abbr' => 'BUENAVISTA (COR)',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '350',
                'state_id' => '708',
                'name' => 'CANALETE',
                'abbr' => 'CANALETE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '351',
                'state_id' => '708',
                'name' => 'CERETE',
                'abbr' => 'CERETE',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '352',
                'state_id' => '708',
                'name' => 'CHIMA',
                'abbr' => 'CHIMA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '353',
                'state_id' => '708',
                'name' => 'CHINU',
                'abbr' => 'CHINU',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '354',
                'state_id' => '708',
                'name' => 'CIENEGA DE ORO',
                'abbr' => 'CIENEGA DE ORO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '355',
                'state_id' => '708',
                'name' => 'COTORRA',
                'abbr' => 'COTORRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '356',
                'state_id' => '708',
                'name' => 'LA APARTADA Y LA FRONTERA',
                'abbr' => 'LA APARTADA Y LA FRONTERA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '357',
                'state_id' => '708',
                'name' => 'LORICA',
                'abbr' => 'LORICA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '358',
                'state_id' => '708',
                'name' => 'LOS CORDOBAS',
                'abbr' => 'LOS CORDOBAS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '359',
                'state_id' => '708',
                'name' => 'MOMIL',
                'abbr' => 'MOMIL',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '360',
                'state_id' => '708',
                'name' => 'MOÑITOS',
                'abbr' => 'MOÑITOS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '361',
                'state_id' => '708',
                'name' => 'MONTELIBANO',
                'abbr' => 'MONTELIBANO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '362',
                'state_id' => '708',
                'name' => 'MONTERIA',
                'abbr' => 'MONTERIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '363',
                'state_id' => '708',
                'name' => 'PLANETA RICA',
                'abbr' => 'PLANETA RICA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '364',
                'state_id' => '708',
                'name' => 'PUEBLO NUEVO',
                'abbr' => 'PUEBLO NUEVO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '365',
                'state_id' => '708',
                'name' => 'PUERTO ESCONDIDO',
                'abbr' => 'PUERTO ESCONDIDO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '367',
                'state_id' => '708',
                'name' => 'PUERTO LIBERTADOR',
                'abbr' => 'PUERTO LIBERTADOR',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '368',
                'state_id' => '708',
                'name' => 'PURISIMA',
                'abbr' => 'PURISIMA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '369',
                'state_id' => '708',
                'name' => 'SAHAGUN',
                'abbr' => 'SAHAGUN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '370',
                'state_id' => '708',
                'name' => 'SAN ANDRES DE SOTAVENTO',
                'abbr' => 'SAN ANDRES DE SOTAVENTO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '371',
                'state_id' => '708',
                'name' => 'SAN ANTERO',
                'abbr' => 'SAN ANTERO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '372',
                'state_id' => '708',
                'name' => 'SAN BERNARDO DEL VIENTO',
                'abbr' => 'SAN BERNARDO DEL VIENTO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '373',
                'state_id' => '708',
                'name' => 'SAN PELAYO',
                'abbr' => 'SAN PELAYO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '374',
                'state_id' => '708',
                'name' => 'TIERRALTA',
                'abbr' => 'TIERRALTA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '375',
                'state_id' => '708',
                'name' => 'TUCHIN',
                'abbr' => 'TUCHIN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '376',
                'state_id' => '708',
                'name' => 'VALENCIA',
                'abbr' => 'VALENCIA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '377',
                'state_id' => '709',
                'name' => 'AGUA DE DIOS',
                'abbr' => 'AGUA DE DIOS',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '378',
                'state_id' => '709',
                'name' => 'ALBAN',
                'abbr' => 'ALBAN',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '379',
                'state_id' => '709',
                'name' => 'ANAPOIMA',
                'abbr' => 'ANAPOIMA',
                'uuid' => $faker->uuid
            ),					

			array(
                'id' => '380',
                'state_id' => '709',
                'name' => 'ANOLAIMA',
                'abbr' => 'ANOLAIMA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '381',
                'state_id' => '709',
                'name' => 'APULO',
                'abbr' => 'APULO',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '382',
                'state_id' => '709',
                'name' => 'ARBELAEZ',
                'abbr' => 'ARBELAEZ',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '383',
                'state_id' => '709',
                'name' => 'BITUIMA',
                'abbr' => 'BITUIMA',
                'uuid' => $faker->uuid
            ),				

			array(
                'id' => '384',
                'state_id' => '709',
                'name' => 'BOGOTA',
                'abbr' => 'BOG',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '385',
                'state_id' => '709',
                'name' => 'BOJACA',
                'abbr' => 'BOJACA',
                'uuid' => $faker->uuid
            ),				

			array(
                'id' => '386',
                'state_id' => '709',
                'name' => 'CABRERA',
                'abbr' => 'CABRERA',
                'uuid' => $faker->uuid
            ),				

			array(
                'id' => '387',
                'state_id' => '709',
                'name' => 'CACHIPAY',
                'abbr' => 'CACHIPAY',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '388',
                'state_id' => '709',
                'name' => 'CAJICA',
                'abbr' => 'CAJICA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '389',
                'state_id' => '709',
                'name' => 'CAPARRAPI',
                'abbr' => 'CAPARRAPI',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '390',
                'state_id' => '709',
                'name' => 'CAQUEZA',
                'abbr' => 'CAQUEZA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '391',
                'state_id' => '709',
                'name' => 'CARMEN DE CARUPA',
                'abbr' => 'CARMEN DE CARUPA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '392',
                'state_id' => '709',
                'name' => 'CHAGUANI',
                'abbr' => 'CHAGUANI',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '393',
                'state_id' => '709',
                'name' => 'CHIA',
                'abbr' => 'CHIA',
                'uuid' => $faker->uuid
            ),		

			array(
                'id' => '394',
                'state_id' => '709',
                'name' => 'CHIPAQUE',
                'abbr' => 'CHIPAQUE',
                'uuid' => $faker->uuid
            ),				

			array(
                'id' => '395',
                'state_id' => '709',
                'name' => 'CHOACHI',
                'abbr' => 'CHOACHI',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '396',
                'state_id' => '709',
                'name' => 'CHOCONTA',
                'abbr' => 'CHOCONTA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '397',
                'state_id' => '709',
                'name' => 'COGUA',
                'abbr' => 'COGUA',
                'uuid' => $faker->uuid
            ),		

			array(
                'id' => '398',
                'state_id' => '709',
                'name' => 'COTA',
                'abbr' => 'COTA',
                'uuid' => $faker->uuid
            ),				

			array(
                'id' => '399',
                'state_id' => '709',
                'name' => 'EL COLEGIO (MESITAS)',
                'abbr' => 'EL COLEGIO (MESITAS)',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '400',
                'state_id' => '709',
                'name' => 'EL PEÑON',
                'abbr' => 'EL PEÑON',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '401',
                'state_id' => '709',
                'name' => 'EL ROSAL',
                'abbr' => 'EL ROSAL',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '402',
                'state_id' => '709',
                'name' => 'FACATATIVA',
                'abbr' => 'FACATATIVA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '403',
                'state_id' => '709',
                'name' => 'FOMEQUE',
                'abbr' => 'FOMEQUE',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '404',
                'state_id' => '709',
                'name' => 'FUNZA',
                'abbr' => 'FUNZA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '405',
                'state_id' => '709',
                'name' => 'FUSAGASUGA',
                'abbr' => 'FUSAGASUGA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '406',
                'state_id' => '709',
                'name' => 'GACHALA',
                'abbr' => 'GACHALA',
                'uuid' => $faker->uuid
            ),		

			array(
                'id' => '407',
                'state_id' => '709',
                'name' => 'GACHANCIPA',
                'abbr' => 'GACHANCIPA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '408',
                'state_id' => '709',
                'name' => 'GACHETA',
                'abbr' => 'GACHETA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '409',
                'state_id' => '709',
                'name' => 'GIRARDOT',
                'abbr' => 'GIRARDOT',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '410',
                'state_id' => '709',
                'name' => 'GRANADA',
                'abbr' => 'GRANDA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '411',
                'state_id' => '709',
                'name' => 'GUACHETA',
                'abbr' => 'GUACHETA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '412',
                'state_id' => '709',
                'name' => 'GUADUAS',
                'abbr' => 'GUADUAS',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '413',
                'state_id' => '709',
                'name' => 'GUASCA',
                'abbr' => 'GUASCA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '414',
                'state_id' => '709',
                'name' => 'GUATAVITA',
                'abbr' => 'GUATAVITA',
                'uuid' => $faker->uuid
            ),			

			array(
                'id' => '415',
                'state_id' => '709',
                'name' => 'GUAYABAL',
                'abbr' => 'GUAYABAL',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '416',
                'state_id' => '709',
                'name' => 'GUAYABETAL',
                'abbr' => 'GUAYABETAL',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '417',
                'state_id' => '709',
                'name' => 'GUTIERREZ',
                'abbr' => 'GUTIERREZ',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '418',
                'state_id' => '709',
                'name' => 'LA CALERA',
                'abbr' => 'LA CALERA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '419',
                'state_id' => '709',
                'name' => 'LA MESA',
                'abbr' => 'LA MESA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '420',
                'state_id' => '709',
                'name' => 'LA PALMA',
                'abbr' => 'LA PALMA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '421',
                'state_id' => '709',
                'name' => 'LA VEGA',
                'abbr' => 'LA VEGA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '422',
                'state_id' => '709',
                'name' => 'LENGUAZAQUE',
                'abbr' => 'LENGUAZAQUE',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '423',
                'state_id' => '709',
                'name' => 'MACHETA',
                'abbr' => 'MACHETA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '424',
                'state_id' => '709',
                'name' => 'MADRID',
                'abbr' => 'MADRID',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '425',
                'state_id' => '709',
                'name' => 'MANTA',
                'abbr' => 'MANTA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '427',
                'state_id' => '709',
                'name' => 'MOSQUERA',
                'abbr' => 'MOSQUERA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '428',
                'state_id' => '709',
                'name' => 'NARIÑO (CUN)',
                'abbr' => 'NARIÑO (CUN)',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '429',
                'state_id' => '709',
                'name' => 'NEMOCON',
                'abbr' => 'NEMOCON',
                'uuid' => $faker->uuid
            ),		
			
			array(
                'id' => '430',
                'state_id' => '709',
                'name' => 'NILO',
                'abbr' => 'NILO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '431',
                'state_id' => '709',
                'name' => 'NOCAIMA',
                'abbr' => 'NOCAIMA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '432',
                'state_id' => '709',
                'name' => 'PACHO',
                'abbr' => 'PACHO',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '433',
                'state_id' => '709',
                'name' => 'PANDI',
                'abbr' => 'PANDI',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '434',
                'state_id' => '709',
                'name' => 'PARATEBUENO',
                'abbr' => 'PARATEBUENO',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '435',
                'state_id' => '709',
                'name' => 'PASCA',
                'abbr' => 'PASCA',
                'uuid' => $faker->uuid
            ),		
			
			array(
                'id' => '436',
                'state_id' => '709',
                'name' => 'PUERTO SALGAR',
                'abbr' => 'PUERTO SALGAR',
                'uuid' => $faker->uuid
            ),				
			
			array(
                'id' => '437',
                'state_id' => '709',
                'name' => 'QUETAME',
                'abbr' => 'QUETAME',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '438',
                'state_id' => '709',
                'name' => 'QUIPILE',
                'abbr' => 'QUIPILE',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '439',
                'state_id' => '709',
                'name' => 'RICAURTE',
                'abbr' => 'RICAURTE',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '440',
                'state_id' => '709',
                'name' => 'SAN ANTONIO DEL TEQUENDAMA',
                'abbr' => 'SAN ANTONIO DEL TENQUENDAMA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '441',
                'state_id' => '709',
                'name' => 'SAN BERNARDO (CUN)',
                'abbr' => 'SAN BERNARDO (CUN)',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '442',
                'state_id' => '709',
                'name' => 'SAN FRANCISCO',
                'abbr' => 'SAN FRANCISCO',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '443',
                'state_id' => '709',
                'name' => 'SAN JUAN DE RIO SECO',
                'abbr' => 'SAN JUAN DE RIO SECO',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '444',
                'state_id' => '709',
                'name' => 'SASAIMA',
                'abbr' => 'SASAIMA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '445',
                'state_id' => '709',
                'name' => 'SESQUILE',
                'abbr' => 'SESQUILE',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '446',
                'state_id' => '709',
                'name' => 'SIBATE',
                'abbr' => 'SIBATE',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '447',
                'state_id' => '709',
                'name' => 'SILVANIA',
                'abbr' => 'SILVANIA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '448',
                'state_id' => '709',
                'name' => 'SIMIJACA',
                'abbr' => 'SIMIJACA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '449',
                'state_id' => '709',
                'name' => 'SOCACHA',
                'abbr' => 'SOCACHA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '450',
                'state_id' => '709',
                'name' => 'SOPO',
                'abbr' => 'SOPO',
                'uuid' => $faker->uuid
            ),		
			
			array(
                'id' => '451',
                'state_id' => '709',
                'name' => 'SUBACHOQUE',
                'abbr' => 'SUBACHOQUE',
                'uuid' => $faker->uuid
            ),				
			
			array(
                'id' => '452',
                'state_id' => '709',
                'name' => 'SUESCA',
                'abbr' => 'SUESCA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '453',
                'state_id' => '709',
                'name' => 'SUPATA',
                'abbr' => 'SUPATA',
                'uuid' => $faker->uuid
            ),			
				
			array(
                'id' => '454',
                'state_id' => '709',
                'name' => 'SUSA',
                'abbr' => 'SUSA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '455',
                'state_id' => '709',
                'name' => 'SUTATAUSA',
                'abbr' => 'SUTATAUSA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '456',
                'state_id' => '709',
                'name' => 'TABIO',
                'abbr' => 'TABIO',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '457',
                'state_id' => '709',
                'name' => 'TENA',
                'abbr' => 'TENA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '458',
                'state_id' => '709',
                'name' => 'TENJO',
                'abbr' => 'TENJO',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '459',
                'state_id' => '709',
                'name' => 'TOCAIMA',
                'abbr' => 'TOCAIMA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '460',
                'state_id' => '709',
                'name' => 'TOCANCIPA',
                'abbr' => 'TOCANCIPA',
                'uuid' => $faker->uuid
            ),		
			
			array(
                'id' => '461',
                'state_id' => '709',
                'name' => 'TOPAIPI',
                'abbr' => 'TOPAIPI',
                'uuid' => $faker->uuid
            ),				
			
			array(
                'id' => '462',
                'state_id' => '709',
                'name' => 'UBALA',
                'abbr' => 'UBALA',
                'uuid' => $faker->uuid
            ),		
			
			array(
                'id' => '463',
                'state_id' => '709',
                'name' => 'UBAQUE',
                'abbr' => 'UBAQUE',
                'uuid' => $faker->uuid
            ),				
			
			array(
                'id' => '464',
                'state_id' => '709',
                'name' => 'UBATE',
                'abbr' => 'UBATE',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '465',
                'state_id' => '709',
                'name' => 'UTICA',
                'abbr' => 'UTICA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '466',
                'state_id' => '709',
                'name' => 'VENECIA (CUN)',
                'abbr' => 'VENECIA (CUN)',
                'uuid' => $faker->uuid
            ),		
			
			array(
                'id' => '467',
                'state_id' => '709',
                'name' => 'VERGARA',
                'abbr' => 'VERGARA',
                'uuid' => $faker->uuid
            ),				
			
			array(
                'id' => '468',
                'state_id' => '709',
                'name' => 'VIANI',
                'abbr' => 'VIANI',
                'uuid' => $faker->uuid
            ),		
			
			array(
                'id' => '469',
                'state_id' => '709',
                'name' => 'VILLAGOMEZ',
                'abbr' => 'VILLAGOMEZ',
                'uuid' => $faker->uuid
            ),				
			
			array(
                'id' => '470',
                'state_id' => '709',
                'name' => 'VILLAPINZON',
                'abbr' => 'VILLAPINZON',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '471',
                'state_id' => '709',
                'name' => 'VILLETA',
                'abbr' => 'VILLETA',
                'uuid' => $faker->uuid
            ),			
			
			array(
                'id' => '472',
                'state_id' => '709',
                'name' => 'VIOTA',
                'abbr' => 'VIOTA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '473',
                'state_id' => '709',
                'name' => 'YACOPI',
                'abbr' => 'YACOPI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '474',
                'state_id' => '709',
                'name' => 'ZIPAQUIRA',
                'abbr' => 'ZIPAQUIRA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '475',
                'state_id' => '710',
                'name' => 'PUERTO INIRIDA',
                'abbr' => 'PUERTO INIRIDA',
                'uuid' => $faker->uuid
            ),	
			
			array(
                'id' => '476',
                'state_id' => '711',
                'name' => 'SAN JOSE DEL GUAVIARE',
                'abbr' => 'SAN JOSE DEL GUAVIARE',
                'uuid' => $faker->uuid
            ),			
				
			array(
                'id' => '477',
                'state_id' => '712',
                'name' => 'ACEVEDO',
                'abbr' => 'ACEVEDO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '478',
                'state_id' => '712',
                'name' => 'AGRADO',
                'abbr' => 'AGRADO',
                'uuid' => $faker->uuid
            ),				
			
			array(
                'id' => '479',
                'state_id' => '712',
                'name' => 'AIPE',
                'abbr' => 'AIPE',
                'uuid' => $faker->uuid
            ),		
			
			array(
                'id' => '480',
                'state_id' => '712',
                'name' => 'ALGECIRAS',
                'abbr' => 'ALGECIRAS',
                'uuid' => $faker->uuid
            ),		
			
			array(
                'id' => '481',
                'state_id' => '712',
                'name' => 'ALTAMIRA',
                'abbr' => 'ALTAMIRA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '482',
                'state_id' => '712',
                'name' => 'BARAYA',
                'abbr' => 'BARAYA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '483',
                'state_id' => '712',
                'name' => 'CAMPOALEGRE',
                'abbr' => 'CAMPOALEGRE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '484',
                'state_id' => '712',
                'name' => 'COLOMBIA (HUI)',
                'abbr' => 'COLOMBIA (HUI)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '485',
                'state_id' => '712',
                'name' => 'ELIAS',
                'abbr' => 'ELIAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '486',
                'state_id' => '712',
                'name' => 'GARZON',
                'abbr' => 'GARZON',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '487',
                'state_id' => '712',
                'name' => 'GIGANTE',
                'abbr' => 'GIGANTE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '488',
                'state_id' => '712',
                'name' => 'GUADALUPE (HUI)',
                'abbr' => 'GUADALUPE (HUI)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '489',
                'state_id' => '712',
                'name' => 'HOBO',
                'abbr' => 'HOBO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '490',
                'state_id' => '712',
                'name' => 'IQUIRA',
                'abbr' => 'IQUIRA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '491',
                'state_id' => '712',
                'name' => 'LA ARGENTINA',
                'abbr' => 'LA ARGENTINA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '492',
                'state_id' => '712',
                'name' => 'LA PLATA',
                'abbr' => 'LA PLATA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '493',
                'state_id' => '712',
                'name' => 'NATAGA',
                'abbr' => 'NATAGA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '494',
                'state_id' => '712',
                'name' => 'NEIVA',
                'abbr' => 'NEIVA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '495',
                'state_id' => '712',
                'name' => 'OPORAPA',
                'abbr' => 'OPORAPA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '496',
                'state_id' => '712',
                'name' => 'PAICOL',
                'abbr' => 'PAICOL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '497',
                'state_id' => '712',
                'name' => 'PALERMO',
                'abbr' => 'PALERMO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '498',
                'state_id' => '712',
                'name' => 'PALESTINA (HUI)',
                'abbr' => 'PALESTINA (HUI)',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '499',
                'state_id' => '712',
                'name' => 'PITAL',
                'abbr' => 'PITAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '500',
                'state_id' => '712',
                'name' => 'PITALITO',
                'abbr' => 'PITALITO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '501',
                'state_id' => '712',
                'name' => 'RIVERA',
                'abbr' => 'RIVERA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '502',
                'state_id' => '712',
                'name' => 'SALADOBLANCO',
                'abbr' => 'SALADOBLANCO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '503',
                'state_id' => '712',
                'name' => 'SAN AGUSTIN',
                'abbr' => 'SAN AGUSTIN',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '504',
                'state_id' => '712',
                'name' => 'SAN JOSE ISNOS',
                'abbr' => 'SAN JOSE DE ISNOS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '505',
                'state_id' => '712',
                'name' => 'SANTA MARIA',
                'abbr' => 'SANTA MARIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '506',
                'state_id' => '712',
                'name' => 'SUAZA',
                'abbr' => 'SUAZA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '507',
                'state_id' => '712',
                'name' => 'TARQUI',
                'abbr' => 'TARQUI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '508',
                'state_id' => '712',
                'name' => 'TELLO',
                'abbr' => 'TELLO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '509',
                'state_id' => '712',
                'name' => 'TERUEL',
                'abbr' => 'TERUEL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '510',
                'state_id' => '712',
                'name' => 'TESALIA',
                'abbr' => 'TESALIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '511',
                'state_id' => '712',
                'name' => 'TIMANA',
                'abbr' => 'TIMANA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '512',
                'state_id' => '712',
                'name' => 'VILLAVIEJA',
                'abbr' => 'VILLAVIEJA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '513',
                'state_id' => '712',
                'name' => 'YAGUARA',
                'abbr' => 'YAGUARA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '514',
                'state_id' => '713',
                'name' => 'ALBANIA (LAG)',
                'abbr' => 'ALBANIA (LAG)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '515',
                'state_id' => '713',
                'name' => 'BARRANCAS',
                'abbr' => 'BARRANCAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '516',
                'state_id' => '713',
                'name' => 'DIBULLA',
                'abbr' => 'DIBULLA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '517',
                'state_id' => '713',
                'name' => 'DISTRACCION',
                'abbr' => 'DISTRACCION',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '518',
                'state_id' => '713',
                'name' => 'EL MOLINO',
                'abbr' => 'EL MOLINO',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '519',
                'state_id' => '713',
                'name' => 'FONSECA',
                'abbr' => 'FONSECA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '520',
                'state_id' => '713',
                'name' => 'HATONUEVO',
                'abbr' => 'HATONUEVO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '521',
                'state_id' => '713',
                'name' => 'MAICAO',
                'abbr' => 'MAICAO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '522',
                'state_id' => '713',
                'name' => 'MANAURE',
                'abbr' => 'MANAURE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '523',
                'state_id' => '713',
                'name' => 'RIOHACHA',
                'abbr' => 'RIOHACHA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '524',
                'state_id' => '713',
                'name' => 'SAN JUAN DEL CESAR',
                'abbr' => 'SAN JUAN DEL CESAR',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '525',
                'state_id' => '713',
                'name' => 'URIBIA',
                'abbr' => 'URIBIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '526',
                'state_id' => '713',
                'name' => 'URUMITA',
                'abbr' => 'URUMITA',
                'uuid' => $faker->uuid
            ),
			array(
                'id' => '527',
                'state_id' => '713',
                'name' => 'VILLANUEVA (LAG)',
                'abbr' => '',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '528',
                'state_id' => '714',
                'name' => 'ARACATACA',
                'abbr' => 'ARACATACA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '529',
                'state_id' => '714',
                'name' => 'CERRO SAN ANTONIO',
                'abbr' => 'CERRO SAN ANTONIO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '530',
                'state_id' => '714',
                'name' => 'CIENEGA MAGDALENA (MAG)',
                'abbr' => 'CIENEGA MAGDALENA (MAG)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '531',
                'state_id' => '714',
                'name' => 'EL BANCO',
                'abbr' => 'EL BANCO',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '532',
                'state_id' => '714',
                'name' => 'EL DIFICIL',
                'abbr' => 'EL DIFICIL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '533',
                'state_id' => '714',
                'name' => 'EL RETEN',
                'abbr' => 'EL RETEN',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '534',
                'state_id' => '714',
                'name' => 'FUNDACION (MAG)',
                'abbr' => 'FUNDACION (MAG)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '535',
                'state_id' => '714',
                'name' => 'GUAMAL',
                'abbr' => 'GUAMAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '536',
                'state_id' => '714',
                'name' => 'NUEVA GRANADA',
                'abbr' => 'NUEVA GRANADA',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '537',
                'state_id' => '714',
                'name' => 'PIJIÑO',
                'abbr' => 'PIJIÑO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '538',
                'state_id' => '714',
                'name' => 'PIVIJAY',
                'abbr' => 'PIVIJAY',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '540',
                'state_id' => '714',
                'name' => 'PLATO',
                'abbr' => 'PLATO',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '541',
                'state_id' => '714',
                'name' => 'SAN SEBASTIAN DE BUENAVISTA',
                'abbr' => 'SAN SEBASTIAN DE BUENAVISTA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '542',
                'state_id' => '714',
                'name' => 'SANTA ANA',
                'abbr' => 'SANTA ANA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '543',
                'state_id' => '714',
                'name' => 'SANTA MARTA',
                'abbr' => 'SANTA MARTA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '544',
                'state_id' => '714',
                'name' => 'TENERIFE',
                'abbr' => 'TENERIFE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '545',
                'state_id' => '715',
                'name' => 'ACACIAS',
                'abbr' => 'ACACIAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '546',
                'state_id' => '715',
                'name' => 'BARRANCA DE UIPA',
                'abbr' => 'BARRANCA DE UIPA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '547',
                'state_id' => '715',
                'name' => 'CABUYARO',
                'abbr' => 'CABUYARO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '548',
                'state_id' => '715',
                'name' => 'CASTILLA LA NUEVA',
                'abbr' => 'CASTILLA LA NUEVA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '549',
                'state_id' => '715',
                'name' => 'CUBARRAL',
                'abbr' => 'CUBARRAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '550',
                'state_id' => '715',
                'name' => 'CUMARAL',
                'abbr' => 'CUMARAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '551',
                'state_id' => '715',
                'name' => 'EL CASTILLO',
                'abbr' => 'EL CASTILLO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '552',
                'state_id' => '715',
                'name' => 'EL DORADO',
                'abbr' => 'EL DORADO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '553',
                'state_id' => '715',
                'name' => 'FUENTE DE ORO',
                'abbr' => 'FUENTE DE ORO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '554',
                'state_id' => '715',
                'name' => 'GRANADA',
                'abbr' => 'GRANADA',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '555',
                'state_id' => '715',
                'name' => 'GUAMAL',
                'abbr' => 'GUAMAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '556',
                'state_id' => '715',
                'name' => 'GUAMAL',
                'abbr' => 'GUAMAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '557',
                'state_id' => '715',
                'name' => 'LA MACARENA',
                'abbr' => 'LA MACARENA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '558',
                'state_id' => '715',
                'name' => 'LEJANIAS',
                'abbr' => 'LEJANIAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '559',
                'state_id' => '715',
                'name' => 'MESETAS',
                'abbr' => 'MESETAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '560',
                'state_id' => '715',
                'name' => 'PUERTO CONCORDIA',
                'abbr' => 'PUERTO CONCORDIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '561',
                'state_id' => '715',
                'name' => 'PUERTO GAITAN',
                'abbr' => 'PUERTO GAITAN',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '562',
                'state_id' => '715',
                'name' => 'PUERTO LLERAS',
                'abbr' => 'PUERTO LLERAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '563',
                'state_id' => '715',
                'name' => 'PUERTO LOPEZ',
                'abbr' => 'PUERTO LOPEZ',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '564',
                'state_id' => '715',
                'name' => 'PUERTO RICO (MET)',
                'abbr' => 'PUERTO RICO (MET)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '565',
                'state_id' => '715',
                'name' => 'RESTREPO (MET)',
                'abbr' => 'RESTREPO (MET)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '566',
                'state_id' => '715',
                'name' => 'SAN CARLOS DE GUAROA',
                'abbr' => 'SAN CARLOS DE GUAROA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '567',
                'state_id' => '715',
                'name' => 'SAN JUAN DE ARAMA',
                'abbr' => 'SAN JUAN DE ARAMA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '568',
                'state_id' => '715',
                'name' => 'SAN MARTIN',
                'abbr' => 'SAN MARTIN',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '569',
                'state_id' => '715',
                'name' => 'URIBE (MET)',
                'abbr' => 'URIBE (MET)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '570',
                'state_id' => '715',
                'name' => 'VILLAVICENCIO',
                'abbr' => 'VILLAVICENCIO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '571',
                'state_id' => '715',
                'name' => 'VISTA HERMOSA',
                'abbr' => 'VISTA HERMOSA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '572',
                'state_id' => '716',
                'name' => 'ALDANA',
                'abbr' => 'ALDANA',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '573',
                'state_id' => '716',
                'name' => 'BARBACOAS',
                'abbr' => 'BARBACOAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '574',
                'state_id' => '716',
                'name' => 'BELEN (NAR)',
                'abbr' => 'BELE (NAR)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '575',
                'state_id' => '716',
                'name' => 'BOCAS DE SANTIAGA',
                'abbr' => 'BOCAS DE SANTIAGA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '576',
                'state_id' => '716',
                'name' => 'BUESACO',
                'abbr' => 'BUESACO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '577',
                'state_id' => '716',
                'name' => 'CHACHAGUI',
                'abbr' => 'CHACHAGUI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '578',
                'state_id' => '716',
                'name' => 'CONSACA',
                'abbr' => 'CONSACA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '579',
                'state_id' => '716',
                'name' => 'CONTADERO',
                'abbr' => 'CONTADERO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '580',
                'state_id' => '716',
                'name' => 'CORDOBA (NAR)',
                'abbr' => 'CORDOBA (NAR)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '581',
                'state_id' => '716',
                'name' => 'CUMBAL',
                'abbr' => 'CUMBAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '582',
                'state_id' => '716',
                'name' => 'EL CHARCO',
                'abbr' => 'EL CHARCO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '583',
                'state_id' => '716',
                'name' => 'EL TAMBO',
                'abbr' => 'EL TAMBO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '584',
                'state_id' => '716',
                'name' => 'GUACHUCAL',
                'abbr' => 'GUACHUCAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '585',
                'state_id' => '716',
                'name' => 'GUAITARILLA',
                'abbr' => 'GUAITARILLA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '586',
                'state_id' => '716',
                'name' => 'GUALMATAN',
                'abbr' => 'GUALMATAN',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '587',
                'state_id' => '716',
                'name' => 'IPIALES',
                'abbr' => 'IPIALES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '588',
                'state_id' => '716',
                'name' => 'ISCUANDE',
                'abbr' => 'ISCUANDE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '589',
                'state_id' => '716',
                'name' => 'LA CRUZ',
                'abbr' => 'LA CRUZ',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '590',
                'state_id' => '716',
                'name' => 'LA FLORIDA (NAR)',
                'abbr' => 'LA FLORIDA (NAR)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '591',
                'state_id' => '716',
                'name' => 'LA LLAMADA',
                'abbr' => 'LA LLAMADA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '592',
                'state_id' => '716',
                'name' => 'LA UNION',
                'abbr' => 'LA UNION',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '593',
                'state_id' => '716',
                'name' => 'NARIÑO',
                'abbr' => 'NARIÑO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '594',
                'state_id' => '716',
                'name' => 'PASTO',
                'abbr' => 'PASTO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '595',
                'state_id' => '716',
                'name' => 'PUERRES',
                'abbr' => 'PUERRES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '596',
                'state_id' => '716',
                'name' => 'PUPIALES',
                'abbr' => 'PUPIALES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '597',
                'state_id' => '716',
                'name' => 'SAMANIEGO',
                'abbr' => 'SAMANIEGO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '598',
                'state_id' => '716',
                'name' => 'SAN PABLO (NAR)',
                'abbr' => 'SAN PABLO (NAR)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '599',
                'state_id' => '716',
                'name' => 'SANDONA',
                'abbr' => 'SANDONA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '600',
                'state_id' => '716',
                'name' => 'SOTOMAYOR',
                'abbr' => 'SOTOMAYOR',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '601',
                'state_id' => '716',
                'name' => 'TAMINANGO',
                'abbr' => 'TAMINANGO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '602',
                'state_id' => '716',
                'name' => 'TUMACO',
                'abbr' => 'TUMACO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '603',
                'state_id' => '716',
                'name' => 'TUQUERRES',
                'abbr' => 'TUQUERRES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '604',
                'state_id' => '716',
                'name' => 'YACUANQUER',
                'abbr' => 'YACUANQUER',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '605',
                'state_id' => '717',
                'name' => 'ABREGO',
                'abbr' => 'ABREGO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '606',
                'state_id' => '717',
                'name' => 'ARBOLEDAS',
                'abbr' => 'ARBOLEDAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '607',
                'state_id' => '717',
                'name' => 'BOCHALEMA',
                'abbr' => 'BOCHALEMA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '608',
                'state_id' => '717',
                'name' => 'CACHIRA',
                'abbr' => 'CACHIRA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '609',
                'state_id' => '717',
                'name' => 'CHINACOTA',
                'abbr' => 'CHINACOTA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '610',
                'state_id' => '717',
                'name' => 'CONVENCION (NDS)',
                'abbr' => 'CONVENCION (NDS)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '611',
                'state_id' => '717',
                'name' => 'CUCUTA',
                'abbr' => 'CUCUTA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '612',
                'state_id' => '717',
                'name' => 'DURANIA',
                'abbr' => 'DURANIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '613',
                'state_id' => '717',
                'name' => 'EL ZULIA',
                'abbr' => 'EL ZULIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '614',
                'state_id' => '717',
                'name' => 'LA ESPERANZA',
                'abbr' => 'LA ESPERANZA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '615',
                'state_id' => '717',
                'name' => 'LOS PATIOS',
                'abbr' => 'LOS PATIOS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '616',
                'state_id' => '717',
                'name' => 'OCAÑA',
                'abbr' => 'OCAÑA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '617',
                'state_id' => '717',
                'name' => 'PAMPLONA',
                'abbr' => 'PAMPLONA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '618',
                'state_id' => '717',
                'name' => 'PUERTO SANTANDER',
                'abbr' => 'PUERTO SANTANDER',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '619',
                'state_id' => '717',
                'name' => 'SARDINATA',
                'abbr' => 'SARDINATA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '620',
                'state_id' => '717',
                'name' => 'TIBU',
                'abbr' => 'TIBU',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '621',
                'state_id' => '717',
                'name' => 'TOLEDO',
                'abbr' => 'TOLEDO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '622',
                'state_id' => '717',
                'name' => 'VILLA DEL ROSARIO',
                'abbr' => 'VILLA DEL ROSARIO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '623',
                'state_id' => '718',
                'name' => 'LA DORADA (PUT)',
                'abbr' => 'LA DORADA (PUT)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '624',
                'state_id' => '718',
                'name' => 'LA HORMIGA',
                'abbr' => 'LA HORMIGA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '625',
                'state_id' => '718',
                'name' => 'LEGUIZAMO',
                'abbr' => 'LEGUIZAMO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '626',
                'state_id' => '718',
                'name' => 'MOCOA',
                'abbr' => 'MOCOA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '627',
                'state_id' => '718',
                'name' => 'ORITO',
                'abbr' => 'ORITO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '628',
                'state_id' => '718',
                'name' => 'PUERTO ASIS',
                'abbr' => 'PUERTO ASIS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '629',
                'state_id' => '718',
                'name' => 'PUERTO GUZMAN',
                'abbr' => 'PUERTO GUZMAN',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '630',
                'state_id' => '718',
                'name' => 'SIBUNDOY',
                'abbr' => 'SIBUNDOY',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '631',
                'state_id' => '718',
                'name' => 'VILLAGARZON',
                'abbr' => 'VILLAGARZON',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '632',
                'state_id' => '719',
                'name' => 'ARMENIA',
                'abbr' => 'ARMENIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '633',
                'state_id' => '719',
                'name' => 'BUENAVISTA (QUI)',
                'abbr' => 'BUENAVISTA (QUI)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '634',
                'state_id' => '719',
                'name' => 'CALARCA',
                'abbr' => 'CALARCA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '635',
                'state_id' => '719',
                'name' => 'CIRCASIA',
                'abbr' => 'CIRCASIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '636',
                'state_id' => '719',
                'name' => 'CORDOBA (QUI)',
                'abbr' => 'CORDOBA (QUI)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '637',
                'state_id' => '719',
                'name' => 'FILANDIA',
                'abbr' => 'FILANDIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '638',
                'state_id' => '719',
                'name' => 'GENOVA',
                'abbr' => 'GENOVA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '639',
                'state_id' => '719',
                'name' => 'LA TEBAIDA',
                'abbr' => 'LA TEBAIDA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '640',
                'state_id' => '719',
                'name' => 'MONTENEGRO',
                'abbr' => 'MONTENEGRO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '641',
                'state_id' => '719',
                'name' => 'PIJAO',
                'abbr' => 'PIJAO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '642',
                'state_id' => '719',
                'name' => 'QUIMBAYA',
                'abbr' => 'QUIMBAYA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '645',
                'state_id' => '719',
                'name' => 'SALENTO',
                'abbr' => 'SALENTO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '646',
                'state_id' => '720',
                'name' => 'APIA',
                'abbr' => 'APIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '647',
                'state_id' => '720',
                'name' => 'BALBOA',
                'abbr' => 'BALBOA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '648',
                'state_id' => '720',
                'name' => 'BELEN DE UMBRIA',
                'abbr' => 'BELEN DE UMBRIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '649',
                'state_id' => '720',
                'name' => 'DOSQUEBRADAS',
                'abbr' => 'DOSQUEBRADAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '650',
                'state_id' => '720',
                'name' => 'GUATICA',
                'abbr' => 'GUATICA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '651',
                'state_id' => '720',
                'name' => 'LA CELIA',
                'abbr' => 'LA CELIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '652',
                'state_id' => '720',
                'name' => 'LA VIRGINIA',
                'abbr' => 'LA VIRGINIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '653',
                'state_id' => '720',
                'name' => 'MARSELLA',
                'abbr' => 'MARSELLA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '654',
                'state_id' => '720',
                'name' => 'MISTRATO',
                'abbr' => 'MISTRATO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '655',
                'state_id' => '720',
                'name' => 'PEREIRA',
                'abbr' => 'PEI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '656',
                'state_id' => '720',
                'name' => 'PUEBLO RICO',
                'abbr' => 'PUEBLO RICO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '657',
                'state_id' => '720',
                'name' => 'QUINCHIA',
                'abbr' => 'QUINCHIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '658',
                'state_id' => '720',
                'name' => 'SANTA ROSA DE CABAL',
                'abbr' => 'SANTA ROSA DE CABAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '659',
                'state_id' => '720',
                'name' => 'SANTUARIO (RIS)',
                'abbr' => 'SANTUARIO (RIS)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '670',
                'state_id' => '721',
                'name' => 'SAN ANDRES Y PROVIDENCIA',
                'abbr' => 'SAN ANDRES Y PROVIDENCIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '671',
                'state_id' => '722',
                'name' => 'ARATOCA',
                'abbr' => 'ARATOCA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '672',
                'state_id' => '722',
                'name' => 'BARBOSA (SAN)',
                'abbr' => 'BARBOSA (SAN)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '673',
                'state_id' => '722',
                'name' => 'BARICHARA',
                'abbr' => 'BARICHARA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '674',
                'state_id' => '722',
                'name' => 'BARRANCABERMEJA',
                'abbr' => 'BARRANCABERMEJA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '675',
                'state_id' => '722',
                'name' => 'BOLIVAR (SAN)',
                'abbr' => 'BOLIVAR (SAN)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '676',
                'state_id' => '722',
                'name' => 'BUCARAMANGA',
                'abbr' => 'BUCARAMANGA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '677',
                'state_id' => '722',
                'name' => 'CAPITANEJO',
                'abbr' => 'CAPITANEJO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '678',
                'state_id' => '722',
                'name' => 'CERRITO',
                'abbr' => 'CERRITO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '679',
                'state_id' => '722',
                'name' => 'CHARALA',
                'abbr' => 'CHARALA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '680',
                'state_id' => '722',
                'name' => 'CIMITARRA',
                'abbr' => 'CIMITARRA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '681',
                'state_id' => '722',
                'name' => 'CONCEPCION (SAN)',
                'abbr' => 'CONCEPCION (SAN)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '682',
                'state_id' => '722',
                'name' => 'CONFINES',
                'abbr' => 'CONFINES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '683',
                'state_id' => '722',
                'name' => 'CONTRATACION (SAN)',
                'abbr' => 'CONTRATACION (SAN)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '684',
                'state_id' => '722',
                'name' => 'COROMORO',
                'abbr' => 'COROMORO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '685',
                'state_id' => '722',
                'name' => 'CURITI',
                'abbr' => 'CURITI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '686',
                'state_id' => '722',
                'name' => 'EL CARMEN DE CHUCURI',
                'abbr' => 'EL CARMEN DE CHUCURI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '687',
                'state_id' => '722',
                'name' => 'EL PLAYON',
                'abbr' => 'EL PLAYON',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '688',
                'state_id' => '722',
                'name' => 'ENCINO',
                'abbr' => 'ENCINO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '689',
                'state_id' => '722',
                'name' => 'ENCISO',
                'abbr' => 'ENCISO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '690',
                'state_id' => '722',
                'name' => 'FLORIDABLANCA',
                'abbr' => 'FLORIDABLANCA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '691',
                'state_id' => '722',
                'name' => 'GAMBITA',
                'abbr' => 'GAMBITA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '692',
                'state_id' => '722',
                'name' => 'GIRON',
                'abbr' => 'GIRON',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '693',
                'state_id' => '722',
                'name' => 'GUACA',
                'abbr' => 'GUACA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '694',
                'state_id' => '722',
                'name' => 'GUADALUPE (SAN)',
                'abbr' => 'GUADALUPE (SAN)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '695',
                'state_id' => '722',
                'name' => 'GUEPSA',
                'abbr' => 'GUEPSA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '696',
                'state_id' => '722',
                'name' => 'LA BELLEZA',
                'abbr' => 'LA BELLEZA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '697',
                'state_id' => '722',
                'name' => 'LANDAZURI',
                'abbr' => 'LANDAZURI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '698',
                'state_id' => '722',
                'name' => 'LEBRIJA',
                'abbr' => 'LEBRIJA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '699',
                'state_id' => '722',
                'name' => 'LOS SANTOS',
                'abbr' => 'LOS SANTOS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '700',
                'state_id' => '722',
                'name' => 'MALAGA (SAN)',
                'abbr' => 'MALAGA (SAN)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '701',
                'state_id' => '722',
                'name' => 'MATANZA',
                'abbr' => 'MATANZA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '702',
                'state_id' => '722',
                'name' => 'MOGOTES',
                'abbr' => 'MOGOTES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '703',
                'state_id' => '722',
                'name' => 'OCAMONTE',
                'abbr' => 'OCAMONTE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '704',
                'state_id' => '722',
                'name' => 'OIBA',
                'abbr' => 'OIBA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '705',
                'state_id' => '722',
                'name' => 'ONZAGA',
                'abbr' => 'ONZAGA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '706',
                'state_id' => '722',
                'name' => 'PARAMO',
                'abbr' => 'PARAMO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '707',
                'state_id' => '722',
                'name' => 'PIEDECUESTA',
                'abbr' => 'PIEDECUESTA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '708',
                'state_id' => '722',
                'name' => 'PINCHOTE',
                'abbr' => 'PINCHOTE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '709',
                'state_id' => '722',
                'name' => 'PUENTE NACIONAL',
                'abbr' => 'PUENTE NACIONAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '710',
                'state_id' => '722',
                'name' => 'PUERTO PARRA',
                'abbr' => 'PUERTO PARRA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '711',
                'state_id' => '722',
                'name' => 'PUERTO WILCHES',
                'abbr' => 'PUERTO WILCHES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '712',
                'state_id' => '722',
                'name' => 'RIONEGRO (SAN)',
                'abbr' => 'RIONEGRO (SAN)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '713',
                'state_id' => '722',
                'name' => 'SABANA DE TORRES',
                'abbr' => 'SABANA DE TORRES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '714',
                'state_id' => '722',
                'name' => '',
                'abbr' => '',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '715',
                'state_id' => '722',
                'name' => 'SAN ANDRES (SAN)',
                'abbr' => 'SAN ANDRES (SAN)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '716',
                'state_id' => '722',
                'name' => 'SAN GIL',
                'abbr' => 'SAN GIL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '717',
                'state_id' => '722',
                'name' => 'SAN JOSE DE MIRANDA',
                'abbr' => 'SAN JOSE DE MIRANDA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '718',
                'state_id' => '722',
                'name' => 'SAN VICENTE DE CHUCURI',
                'abbr' => 'SAN VICENTE DE CHUCURI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '719',
                'state_id' => '722',
                'name' => 'SIMACOTA',
                'abbr' => 'SIMACOTA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '720',
                'state_id' => '722',
                'name' => 'SOCORRO',
                'abbr' => 'SOCORRO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '721',
                'state_id' => '722',
                'name' => 'SUAITA',
                'abbr' => 'SUAITA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '722',
                'state_id' => '722',
                'name' => 'SURATA',
                'abbr' => 'SURATA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '723',
                'state_id' => '722',
                'name' => 'VALLE DE SAN JOSE',
                'abbr' => 'VALLE DE SAN JOSE',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '724',
                'state_id' => '722',
                'name' => 'VELEZ',
                'abbr' => 'VELEZ',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '725',
                'state_id' => '722',
                'name' => 'VILLANUEVA (SAN)',
                'abbr' => 'VIELLANUEVA (SAN)',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '726',
                'state_id' => '722',
                'name' => 'ZAPATOCA',
                'abbr' => 'ZAPATOCA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '727',
                'state_id' => '723',
                'name' => 'COROZAL',
                'abbr' => 'COROZAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '728',
                'state_id' => '723',
                'name' => 'COVEÑAS',
                'abbr' => 'COVEÑAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '729',
                'state_id' => '723',
                'name' => 'GUARANDA',
                'abbr' => 'GUARANDA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '730',
                'state_id' => '723',
                'name' => 'LA UNION (SUC)',
                'abbr' => 'LA UNION (SUC)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '731',
                'state_id' => '723',
                'name' => 'LOS PALMITOS',
                'abbr' => 'LOS PALMITOS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '732',
                'state_id' => '723',
                'name' => 'MAJAGUAL',
                'abbr' => 'MAJAGUAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '733',
                'state_id' => '723',
                'name' => 'MORROA',
                'abbr' => 'MORROA',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '734',
                'state_id' => '723',
                'name' => 'OVEJAS',
                'abbr' => 'OVEJAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '735',
                'state_id' => '723',
                'name' => 'PALMITO',
                'abbr' => 'PALMITO',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '736',
                'state_id' => '723',
                'name' => 'SAMPUES',
                'abbr' => 'SAMPUES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '737',
                'state_id' => '723',
                'name' => 'SAN JUAN DE BETULIA (SUC)',
                'abbr' => 'SAN JUAN DE BETULIA (SUC)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '738',
                'state_id' => '723',
                'name' => 'SAN MARCOS',
                'abbr' => 'SAN MARCOS',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '739',
                'state_id' => '723',
                'name' => 'SAN ONOFRE',
                'abbr' => 'SAN ONOFRE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '740',
                'state_id' => '723',
                'name' => 'SAN PEDRO',
                'abbr' => 'SAN PEDRO',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '741',
                'state_id' => '723',
                'name' => 'SINCE',
                'abbr' => 'SINCE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '742',
                'state_id' => '723',
                'name' => 'SINCELEJO',
                'abbr' => 'SINCELEJO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '743',
                'state_id' => '723',
                'name' => 'TOLU VIEJO',
                'abbr' => 'TOLU VIEJO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '744',
                'state_id' => '723',
                'name' => 'TOLU',
                'abbr' => 'TOLU',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '745',
                'state_id' => '724',
                'name' => 'ALPUJARRA',
                'abbr' => 'ALPUJARRA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '746',
                'state_id' => '724',
                'name' => 'ALVARADO',
                'abbr' => 'ALVARADO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '747',
                'state_id' => '724',
                'name' => 'AMBALEMA',
                'abbr' => 'AMBALEMA',
                'uuid' => $faker->uuid
            ),
			array(
                'id' => '748',
                'state_id' => '724',
                'name' => 'ANZOATEGUI (TOL)',
                'abbr' => 'ANZOATEGUI (TOL)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '749',
                'state_id' => '724',
                'name' => 'ARMERO',
                'abbr' => 'ARMERO',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '750',
                'state_id' => '724',
                'name' => 'ATACO',
                'abbr' => 'ATACO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '751',
                'state_id' => '724',
                'name' => 'CAJAMARCA (TOL)',
                'abbr' => 'CAJAMARCA (TOL)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '752',
                'state_id' => '724',
                'name' => 'CARMEN DE APICALA (TOL)',
                'abbr' => 'CARMEN DE APICALA (TOL)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '753',
                'state_id' => '724',
                'name' => 'CHAPARRAL',
                'abbr' => 'CHAPARAAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '754',
                'state_id' => '724',
                'name' => 'COYAIMA',
                'abbr' => 'COYAIMA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '755',
                'state_id' => '724',
                'name' => 'CUNDAY',
                'abbr' => 'CUNDAY',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '756',
                'state_id' => '724',
                'name' => 'ESPINAL',
                'abbr' => 'ESPINAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '757',
                'state_id' => '724',
                'name' => 'FALAN',
                'abbr' => 'FALAN',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '758',
                'state_id' => '724',
                'name' => 'FLANDES',
                'abbr' => 'FLANDES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '759',
                'state_id' => '724',
                'name' => 'FRESNO',
                'abbr' => 'FRESNO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '760',
                'state_id' => '724',
                'name' => 'GUAMO',
                'abbr' => 'GUAMO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '761',
                'state_id' => '724',
                'name' => 'HERVEO',
                'abbr' => 'HERVEO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '762',
                'state_id' => '724',
                'name' => 'HONDA (TOL)',
                'abbr' => 'HONDA (TOL)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '763',
                'state_id' => '724',
                'name' => 'IBAGUE',
                'abbr' => 'IBAGUE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '764',
                'state_id' => '724',
                'name' => 'ICONONZO',
                'abbr' => 'ICONONZO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '765',
                'state_id' => '724',
                'name' => 'LERIDA',
                'abbr' => 'LERIDA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '766',
                'state_id' => '724',
                'name' => 'LIBANO (TOL)',
                'abbr' => 'LIBANO (TOL)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '767',
                'state_id' => '724',
                'name' => 'MARIQUITA',
                'abbr' => 'MARIQUITA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '768',
                'state_id' => '724',
                'name' => 'MELAGAR',
                'abbr' => 'MELAGAR',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '769',
                'state_id' => '724',
                'name' => 'MURILLO',
                'abbr' => 'MURILLON',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '770',
                'state_id' => '724',
                'name' => 'NATAGAIMA',
                'abbr' => 'NATAGAIMA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '771',
                'state_id' => '724',
                'name' => 'ORTEGA',
                'abbr' => 'ORTEGA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '772',
                'state_id' => '724',
                'name' => 'PALOCABILDO',
                'abbr' => 'PALOCABILDO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '773',
                'state_id' => '724',
                'name' => 'PIEDRAS',
                'abbr' => 'PIEDRAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '774',
                'state_id' => '724',
                'name' => 'PLANADAS',
                'abbr' => 'PLANADAS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '775',
                'state_id' => '724',
                'name' => 'PURIFICACION',
                'abbr' => 'PURIFICACION',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '776',
                'state_id' => '724',
                'name' => 'RIOBLANCO',
                'abbr' => 'RIOBLANCO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '777',
                'state_id' => '724',
                'name' => 'RONCESVALLES',
                'abbr' => 'RONCESVALLES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '778',
                'state_id' => '724',
                'name' => 'ROVIRA',
                'abbr' => 'ROVIRA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '779',
                'state_id' => '724',
                'name' => 'SALDAÑA',
                'abbr' => 'SALDAÑA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '780',
                'state_id' => '724',
                'name' => 'SAN ANTONIO (TOL)',
                'abbr' => 'SAN ANTONIO (TOL)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '781',
                'state_id' => '724',
                'name' => 'SAN LUIS',
                'abbr' => 'SAN LUIS',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '782',
                'state_id' => '724',
                'name' => 'SANTA ISABEL',
                'abbr' => 'SANTA ISABEL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '783',
                'state_id' => '724',
                'name' => 'SUAREZ (TOL)',
                'abbr' => 'SUAREZ (TOL)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '784',
                'state_id' => '724',
                'name' => 'VENADILLO',
                'abbr' => 'VENADILLO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '785',
                'state_id' => '724',
                'name' => 'VILLARICA (TOL)',
                'abbr' => 'VILLARICA (TOL)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '786',
                'state_id' => '725',
                'name' => 'ALCALA',
                'abbr' => 'ALCALA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '787',
                'state_id' => '725',
                'name' => 'ANDALUCIA',
                'abbr' => 'ANDALUCIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '788',
                'state_id' => '725',
                'name' => 'ANSERMA NUEVO',
                'abbr' => 'ANSERMA NUEVO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '789',
                'state_id' => '725',
                'name' => 'ARGELIA',
                'abbr' => 'ARGELIA',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '790',
                'state_id' => '725',
                'name' => 'BOLIVAR (VALLE)',
                'abbr' => 'BOLIVAR (VALLE)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '791',
                'state_id' => '725',
                'name' => 'BUENAVENTURA',
                'abbr' => 'BUENAVENTURA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '792',
                'state_id' => '725',
                'name' => 'BUGA',
                'abbr' => 'BUGA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '793',
                'state_id' => '725',
                'name' => 'BUGALAGRANDE',
                'abbr' => 'BUGALAGRANDE',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '794',
                'state_id' => '725',
                'name' => 'CAICEDONIA',
                'abbr' => 'CAICEDONIA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '795',
                'state_id' => '725',
                'name' => 'CALI',
                'abbr' => 'CALI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '796',
                'state_id' => '725',
                'name' => 'CANDELARIA (VALLE)',
                'abbr' => 'CANDELARIA (VALLE)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '797',
                'state_id' => '725',
                'name' => 'CARTAGO',
                'abbr' => 'CARTAGO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '798',
                'state_id' => '725',
                'name' => 'DAGUA',
                'abbr' => 'DAGUA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '799',
                'state_id' => '725',
                'name' => 'DARIEN (CALIMA)',
                'abbr' => 'DARIEN (CALIMA)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '800',
                'state_id' => '725',
                'name' => 'EL AGUILA',
                'abbr' => 'EL AGUILA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '801',
                'state_id' => '725',
                'name' => 'EL CAIRO',
                'abbr' => 'EL CAIRO',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '802',
                'state_id' => '725',
                'name' => 'EL CERRITO (VALLE)',
                'abbr' => 'EL CERRITO (VALLE)',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '803',
                'state_id' => '725',
                'name' => 'EL DOVIO',
                'abbr' => 'EL DOVIO',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '804',
                'state_id' => '725',
                'name' => 'FLORIDA (VALLE)',
                'abbr' => 'FLORIDA (VALLE)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '805',
                'state_id' => '725',
                'name' => 'GINEBRA',
                'abbr' => 'GINEBRA',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '806',
                'state_id' => '725',
                'name' => 'GUACARI',
                'abbr' => 'GUACARI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '807',
                'state_id' => '725',
                'name' => 'JAMUNDI',
                'abbr' => 'JAMUNDI',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '808',
                'state_id' => '725',
                'name' => 'LA CUMBRE',
                'abbr' => 'LA CUMBRE',
                'uuid' => $faker->uuid
            ),
				
			array(
                'id' => '809',
                'state_id' => '725',
                'name' => 'LA UNION (VALLE)',
                'abbr' => 'LA UNION (VALLE)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '810',
                'state_id' => '725',
                'name' => 'LA VICTORIA (VALLE)',
                'abbr' => 'LA VICTORIA (VALLE)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '811',
                'state_id' => '725',
                'name' => 'OBANDO',
                'abbr' => 'OBANDO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '812',
                'state_id' => '725',
                'name' => 'PALMIRA',
                'abbr' => 'PALMIRA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '813',
                'state_id' => '725',
                'name' => 'PRADERA',
                'abbr' => 'PRADERA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '814',
                'state_id' => '725',
                'name' => 'RESTREPO (VALLE)',
                'abbr' => 'RESTREPO (VALLE)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '815',
                'state_id' => '725',
                'name' => 'RIOFRIO',
                'abbr' => 'RIOFRIO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '816',
                'state_id' => '725',
                'name' => 'ROLDANILLO',
                'abbr' => 'ROLDANILLO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '817',
                'state_id' => '725',
                'name' => 'SAN PEDRO (VALLE)',
                'abbr' => 'SAN PEDRO (VALLE)',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '818',
                'state_id' => '725',
                'name' => 'SEVILLA',
                'abbr' => 'SEVILLA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '819',
                'state_id' => '725',
                'name' => 'TORO',
                'abbr' => 'TORO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '820',
                'state_id' => '725',
                'name' => 'TRUJILLO',
                'abbr' => 'TRUJILLO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '821',
                'state_id' => '725',
                'name' => 'TULUA',
                'abbr' => 'TULUA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '822',
                'state_id' => '725',
                'name' => 'ULLOA',
                'abbr' => 'ULLOA',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '823',
                'state_id' => '725',
                'name' => 'VERSALLES',
                'abbr' => 'VERSALLES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '824',
                'state_id' => '725',
                'name' => 'VIJES',
                'abbr' => 'VIJES',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '825',
                'state_id' => '725',
                'name' => 'YOTOCO',
                'abbr' => 'YOTOCO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '826',
                'state_id' => '725',
                'name' => 'YUMBO',
                'abbr' => 'YUMBO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '827',
                'state_id' => '725',
                'name' => 'ZARZAL',
                'abbr' => 'ZARZAL',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '828',
                'state_id' => '726',
                'name' => 'MITU',
                'abbr' => 'MITU',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '829',
                'state_id' => '727',
                'name' => 'CUMARIBO',
                'abbr' => 'CUMARIBO',
                'uuid' => $faker->uuid
            ),
			
			array(
                'id' => '830',
                'state_id' => '727',
                'name' => 'LA PRIMAVERA',
                'abbr' => 'LA PRIMAVERA',
                'uuid' => $faker->uuid
            ),

			array(
                'id' => '831',
                'state_id;' => '727',
                'name' => 'PUERTO CARREÑO',
                'abbr' => 'PUERTO CARREÑO',
                'uuid' => $faker->uuid
            )
        )
        );
    }
}
