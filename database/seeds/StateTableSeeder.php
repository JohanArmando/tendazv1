<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('states')->insert(array(
            array(
                'id' => 1,
                'name' => 'Canillo',
                'uuid' => $faker->uuid ,
                'abbr' => 02,
                'country_id' => 1,
            ),

            array(
                'id' => 2,
                'name' => 'Encamp',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 1,
            ),

            array(
                'id' => 3,
                'name' => 'La Massana',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 1,
            ),

            array(
                'id' => 4,
                'name' => 'Ordino',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 1,
            ),

            array(
                'id' => 5,
                'name' => 'Sant Julià de Lòria',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 1,
            ),

            array(
                'id' => 6,
                'name' => 'Andorra la Vella',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 1,
            ),

            array(
                'id' => 7,
                'name' => 'Escaldes-Engordany',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 1,
            ),

            array(
                'id' => 8,
                'name' => '\'Ajmān',
                'uuid' => $faker->uuid , 'abbr' => 'AJ',
                'country_id' => 2,
            ),

            array(
                'id' => 9,
                'name' => 'Abū Z̧aby [Abu Dhabi]',
                'uuid' => $faker->uuid , 'abbr' => 'AZ',
                'country_id' => 2,
            ),

            array(
                'id' => 10,
                'name' => 'Dubayy',
                'uuid' => $faker->uuid , 'abbr' => 'DU',
                'country_id' => 2,
            ),

            array(
                'id' => 11,
                'name' => 'Al Fujayrah',
                'uuid' => $faker->uuid , 'abbr' => 'FU',
                'country_id' => 2,
            ),

            array(
                'id' => 12,
                'name' => 'Ra\'s al Khaymah',
                'uuid' => $faker->uuid , 'abbr' => 'RK',
                'country_id' => 2,
            ),

            array(
                'id' => 13,
                'name' => 'Ash Shariqah [Sharjah]',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 2,
            ),

            array(
                'id' => 14,
                'name' => 'Umm al Qaywayn',
                'uuid' => $faker->uuid , 'abbr' => 'UQ',
                'country_id' => 2,
            ),

            array(
                'id' => 15,
                'name' => 'Balkh',
                'uuid' => $faker->uuid , 'abbr' => 'BAL',
                'country_id' => 3,
            ),

            array(
                'id' => 16,
                'name' => 'Bamian',
                'uuid' => $faker->uuid , 'abbr' => 'BAM',
                'country_id' => 3,
            ),

            array(
                'id' => 17,
                'name' => 'Badghis',
                'uuid' => $faker->uuid , 'abbr' => 'BDG',
                'country_id' => 3,
            ),

            array(
                'id' => 18,
                'name' => 'Badakhshan',
                'uuid' => $faker->uuid , 'abbr' => 'BDS',
                'country_id' => 3,
            ),

            array(
                'id' => 19,
                'name' => 'Baghlan',
                'uuid' => $faker->uuid , 'abbr' => 'BGL',
                'country_id' => 3,
            ),

            array(
                'id' => 20,
                'name' => 'Daykondi',
                'uuid' => $faker->uuid , 'abbr' => 'DAY',
                'country_id' => 3,
            ),

            array(
                'id' => 21,
                'name' => 'Farah',
                'uuid' => $faker->uuid , 'abbr' => 'FRA',
                'country_id' => 3,
            ),

            array(
                'id' => 22,
                'name' => 'Faryab',
                'uuid' => $faker->uuid , 'abbr' => 'FYB',
                'country_id' => 3,
            ),

            array(
                'id' => 23,
                'name' => 'Ghazni',
                'uuid' => $faker->uuid , 'abbr' => 'GHA',
                'country_id' => 3,
            ),

            array(
                'id' => 24,
                'name' => 'Ghowr',
                'uuid' => $faker->uuid , 'abbr' => 'GHO',
                'country_id' => 3,
            ),

            array(
                'id' => 25,
                'name' => 'Helmand',
                'uuid' => $faker->uuid , 'abbr' => 'HEL',
                'country_id' => 3,
            ),

            array(
                'id' => 26,
                'name' => 'Herat',
                'uuid' => $faker->uuid , 'abbr' => 'HER',
                'country_id' => 3,
            ),

            array(
                'id' => 27,
                'name' => 'Jowzjan',
                'uuid' => $faker->uuid , 'abbr' => 'JOW',
                'country_id' => 3,
            ),

            array(
                'id' => 28,
                'name' => 'Kabul [Kabol]',
                'uuid' => $faker->uuid , 'abbr' => 'KAB',
                'country_id' => 3,
            ),

            array(
                'id' => 29,
                'name' => 'Kandahar',
                'uuid' => $faker->uuid , 'abbr' => 'KAN',
                'country_id' => 3,
            ),

            array(
                'id' => 30,
                'name' => 'Kapisa',
                'uuid' => $faker->uuid , 'abbr' => 'KAP',
                'country_id' => 3,
            ),

            array(
                'id' => 31,
                'name' => 'Kondoz [Kunduz]',
                'uuid' => $faker->uuid , 'abbr' => 'KDZ',
                'country_id' => 3,
            ),

            array(
                'id' => 32,
                'name' => 'Khowst',
                'uuid' => $faker->uuid , 'abbr' => 'KHO',
                'country_id' => 3,
            ),

            array(
                'id' => 33,
                'name' => 'Konar [Kunar]',
                'uuid' => $faker->uuid , 'abbr' => 'KNR',
                'country_id' => 3,
            ),

            array(
                'id' => 34,
                'name' => 'Laghman',
                'uuid' => $faker->uuid , 'abbr' => 'LAG',
                'country_id' => 3,
            ),

            array(
                'id' => 35,
                'name' => 'Lowgar',
                'uuid' => $faker->uuid , 'abbr' => 'LOW',
                'country_id' => 3,
            ),

            array(
                'id' => 36,
                'name' => 'Nangrahar [Nangarhar]',
                'uuid' => $faker->uuid , 'abbr' => 'NAN',
                'country_id' => 3,
            ),

            array(
                'id' => 37,
                'name' => 'Nimruz',
                'uuid' => $faker->uuid , 'abbr' => 'NIM',
                'country_id' => 3,
            ),

            array(
                'id' => 38,
                'name' => 'Nurestan',
                'uuid' => $faker->uuid , 'abbr' => 'NUR',
                'country_id' => 3,
            ),

            array(
                'id' => 39,
                'name' => 'Oruzgan [Uruzgan]',
                'uuid' => $faker->uuid , 'abbr' => 'ORU',
                'country_id' => 3,
            ),

            array(
                'id' => 40,
                'name' => 'Panjshir',
                'uuid' => $faker->uuid , 'abbr' => 'PAN',
                'country_id' => 3,
            ),

            array(
                'id' => 41,
                'name' => 'Parwan',
                'uuid' => $faker->uuid , 'abbr' => 'PAR',
                'country_id' => 3,
            ),

            array(
                'id' => 42,
                'name' => 'Paktia',
                'uuid' => $faker->uuid , 'abbr' => 'PIA',
                'country_id' => 3,
            ),

            array(
                'id' => 43,
                'name' => 'Paktika',
                'uuid' => $faker->uuid , 'abbr' => 'PKA',
                'country_id' => 3,
            ),

            array(
                'id' => 44,
                'name' => 'Samangan',
                'uuid' => $faker->uuid , 'abbr' => 'SAM',
                'country_id' => 3,
            ),

            array(
                'id' => 45,
                'name' => 'Sar-e Pol',
                'uuid' => $faker->uuid , 'abbr' => 'SAR',
                'country_id' => 3,
            ),

            array(
                'id' => 46,
                'name' => 'Takhar',
                'uuid' => $faker->uuid , 'abbr' => 'TAK',
                'country_id' => 3,
            ),

            array(
                'id' => 47,
                'name' => 'Wardak [Wardag]',
                'uuid' => $faker->uuid , 'abbr' => 'WAR',
                'country_id' => 3,
            ),

            array(
                'id' => 48,
                'name' => 'Zabol [Zabul]',
                'uuid' => $faker->uuid , 'abbr' => 'ZAB',
                'country_id' => 3,
            ),

            array(
                'id' => 49,
                'name' => 'Saint George',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 4,
            ),

            array(
                'id' => 50,
                'name' => 'Saint John’s',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 4,
            ),

            array(
                'id' => 51,
                'name' => 'Saint Mary',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 4,
            ),

            array(
                'id' => 52,
                'name' => 'Saint Paul',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 4,
            ),

            array(
                'id' => 53,
                'name' => 'Saint Peter',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 4,
            ),

            array(
                'id' => 54,
                'name' => 'Saint Philip',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 4,
            ),

            array(
                'id' => 55,
                'name' => 'Barbuda',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 4,
            ),

            array(
                'id' => 56,
                'name' => 'Redonda',
                'uuid' => $faker->uuid , 'abbr' => 'X2~',
                'country_id' => 4,
            ),

            array(
                'id' => 57,
                'name' => 'Berat',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 6,
            ),

            array(
                'id' => 58,
                'name' => 'Bulqizë',
                'uuid' => $faker->uuid , 'abbr' => 'BU',
                'country_id' => 6,
            ),

            array(
                'id' => 59,
                'name' => 'Dibër',
                'uuid' => $faker->uuid , 'abbr' => 'DI',
                'country_id' => 6,
            ),

            array(
                'id' => 60,
                'name' => 'Delvinë',
                'uuid' => $faker->uuid , 'abbr' => 'DL',
                'country_id' => 6,
            ),

            array(
                'id' => 61,
                'name' => 'Durrës',
                'uuid' => $faker->uuid , 'abbr' => 'DR',
                'country_id' => 6,
            ),

            array(
                'id' => 62,
                'name' => 'Devoll',
                'uuid' => $faker->uuid , 'abbr' => 'DV',
                'country_id' => 6,
            ),

            array(
                'id' => 63,
                'name' => 'Elbasan',
                'uuid' => $faker->uuid , 'abbr' => 'EL',
                'country_id' => 6,
            ),

            array(
                'id' => 64,
                'name' => 'Kolonjë',
                'uuid' => $faker->uuid , 'abbr' => 'ER',
                'country_id' => 6,
            ),

            array(
                'id' => 65,
                'name' => 'Fier',
                'uuid' => $faker->uuid , 'abbr' => 'FR',
                'country_id' => 6,
            ),

            array(
                'id' => 66,
                'name' => 'Gjirokastër',
                'uuid' => $faker->uuid , 'abbr' => 'GJ',
                'country_id' => 6,
            ),

            array(
                'id' => 67,
                'name' => 'Gramsh',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 6,
            ),

            array(
                'id' => 68,
                'name' => 'Has',
                'uuid' => $faker->uuid , 'abbr' => 'HA',
                'country_id' => 6,
            ),

            array(
                'id' => 69,
                'name' => 'Kavajë',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 6,
            ),

            array(
                'id' => 70,
                'name' => 'Kurbin',
                'uuid' => $faker->uuid , 'abbr' => 'KB',
                'country_id' => 6,
            ),

            array(
                'id' => 71,
                'name' => 'Kuçovë',
                'uuid' => $faker->uuid , 'abbr' => 'KC',
                'country_id' => 6,
            ),

            array(
                'id' => 72,
                'name' => 'Korçë',
                'uuid' => $faker->uuid , 'abbr' => 'KO',
                'country_id' => 6,
            ),

            array(
                'id' => 73,
                'name' => 'Krujë',
                'uuid' => $faker->uuid , 'abbr' => 'KR',
                'country_id' => 6,
            ),

            array(
                'id' => 74,
                'name' => 'Kukës',
                'uuid' => $faker->uuid , 'abbr' => 'KU',
                'country_id' => 6,
            ),

            array(
                'id' => 75,
                'name' => 'Librazhd',
                'uuid' => $faker->uuid , 'abbr' => 'LB',
                'country_id' => 6,
            ),

            array(
                'id' => 76,
                'name' => 'Lezhë',
                'uuid' => $faker->uuid , 'abbr' => 'LE',
                'country_id' => 6,
            ),

            array(
                'id' => 77,
                'name' => 'Lushnjë',
                'uuid' => $faker->uuid , 'abbr' => 'LU',
                'country_id' => 6,
            ),

            array(
                'id' => 78,
                'name' => 'Mallakastër',
                'uuid' => $faker->uuid , 'abbr' => 'MK',
                'country_id' => 6,
            ),

            array(
                'id' => 79,
                'name' => 'Malësi e Madhe',
                'uuid' => $faker->uuid , 'abbr' => 'MM',
                'country_id' => 6,
            ),

            array(
                'id' => 80,
                'name' => 'Mirditë',
                'uuid' => $faker->uuid , 'abbr' => 'MR',
                'country_id' => 6,
            ),

            array(
                'id' => 81,
                'name' => 'Mat',
                'uuid' => $faker->uuid , 'abbr' => 'MT',
                'country_id' => 6,
            ),

            array(
                'id' => 82,
                'name' => 'Pogradec',
                'uuid' => $faker->uuid , 'abbr' => 'PG',
                'country_id' => 6,
            ),

            array(
                'id' => 83,
                'name' => 'Peqin',
                'uuid' => $faker->uuid , 'abbr' => 'PQ',
                'country_id' => 6,
            ),

            array(
                'id' => 84,
                'name' => 'Përmet',
                'uuid' => $faker->uuid , 'abbr' => 'PR',
                'country_id' => 6,
            ),

            array(
                'id' => 85,
                'name' => 'Pukë',
                'uuid' => $faker->uuid , 'abbr' => 'PU',
                'country_id' => 6,
            ),

            array(
                'id' => 86,
                'name' => 'Shkodër',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 6,
            ),

            array(
                'id' => 87,
                'name' => 'Skrapar',
                'uuid' => $faker->uuid , 'abbr' => 'SK',
                'country_id' => 6,
            ),

            array(
                'id' => 88,
                'name' => 'Sarandë',
                'uuid' => $faker->uuid , 'abbr' => 'SR',
                'country_id' => 6,
            ),

            array(
                'id' => 89,
                'name' => 'Tepelenë',
                'uuid' => $faker->uuid , 'abbr' => 'TE',
                'country_id' => 6,
            ),

            array(
                'id' => 90,
                'name' => 'Tropojë',
                'uuid' => $faker->uuid , 'abbr' => 'TP',
                'country_id' => 6,
            ),

            array(
                'id' => 91,
                'name' => 'Tiranë',
                'uuid' => $faker->uuid , 'abbr' => 'TR',
                'country_id' => 6,
            ),

            array(
                'id' => 92,
                'name' => 'Vlorë',
                'uuid' => $faker->uuid , 'abbr' => 'VL',
                'country_id' => 6,
            ),

            array(
                'id' => 93,
                'name' => 'Aragac?otn',
                'uuid' => $faker->uuid , 'abbr' => 'AG',
                'country_id' => 7,
            ),

            array(
                'id' => 94,
                'name' => 'Ararat',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 7,
            ),

            array(
                'id' => 95,
                'name' => 'Armavir',
                'uuid' => $faker->uuid , 'abbr' => 'AV',
                'country_id' => 7,
            ),

            array(
                'id' => 96,
                'name' => 'Erevan',
                'uuid' => $faker->uuid , 'abbr' => 'ER',
                'country_id' => 7,
            ),

            array(
                'id' => 97,
                'name' => 'Gegark\'unik\'',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 7,
            ),

            array(
                'id' => 98,
                'name' => 'Kotayk\'',
                'uuid' => $faker->uuid , 'abbr' => 'KT',
                'country_id' => 7,
            ),

            array(
                'id' => 99,
                'name' => 'Lo?y',
                'uuid' => $faker->uuid , 'abbr' => 'LO',
                'country_id' => 7,
            ),

            array(
                'id' => 100,
                'name' => 'Širak',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 7,
            ),

            array(
                'id' => 101,
                'name' => 'Syunik\'',
                'uuid' => $faker->uuid , 'abbr' => 'SU',
                'country_id' => 7,
            ),

            array(
                'id' => 102,
                'name' => 'Tavuš',
                'uuid' => $faker->uuid , 'abbr' => 'TV',
                'country_id' => 7,
            ),

            array(
                'id' => 103,
                'name' => 'Vayoc Jor',
                'uuid' => $faker->uuid , 'abbr' => 'VD',
                'country_id' => 7,
            ),

            array(
                'id' => 104,
                'name' => 'Bengo',
                'uuid' => $faker->uuid , 'abbr' => 'BGO',
                'country_id' => 9,
            ),

            array(
                'id' => 105,
                'name' => 'Benguela',
                'uuid' => $faker->uuid , 'abbr' => 'BGU',
                'country_id' => 9,
            ),

            array(
                'id' => 106,
                'name' => 'Bié',
                'uuid' => $faker->uuid , 'abbr' => 'BIE',
                'country_id' => 9,
            ),

            array(
                'id' => 107,
                'name' => 'Cabinda',
                'uuid' => $faker->uuid , 'abbr' => 'CAB',
                'country_id' => 9,
            ),

            array(
                'id' => 108,
                'name' => 'Cuando-Cubango',
                'uuid' => $faker->uuid , 'abbr' => 'CCU',
                'country_id' => 9,
            ),

            array(
                'id' => 109,
                'name' => 'Cunene',
                'uuid' => $faker->uuid , 'abbr' => 'CNN',
                'country_id' => 9,
            ),

            array(
                'id' => 110,
                'name' => 'Cuanza Norte',
                'uuid' => $faker->uuid , 'abbr' => 'CNO',
                'country_id' => 9,
            ),

            array(
                'id' => 111,
                'name' => 'Cuanza Sul',
                'uuid' => $faker->uuid , 'abbr' => 'CUS',
                'country_id' => 9,
            ),

            array(
                'id' => 112,
                'name' => 'Huambo',
                'uuid' => $faker->uuid , 'abbr' => 'HUA',
                'country_id' => 9,
            ),

            array(
                'id' => 113,
                'name' => 'Huíla',
                'uuid' => $faker->uuid , 'abbr' => 'HUI',
                'country_id' => 9,
            ),

            array(
                'id' => 114,
                'name' => 'Lunda Norte',
                'uuid' => $faker->uuid , 'abbr' => 'LNO',
                'country_id' => 9,
            ),

            array(
                'id' => 115,
                'name' => 'Lunda Sul',
                'uuid' => $faker->uuid , 'abbr' => 'LSU',
                'country_id' => 9,
            ),

            array(
                'id' => 116,
                'name' => 'Luanda',
                'uuid' => $faker->uuid , 'abbr' => 'LUA',
                'country_id' => 9,
            ),

            array(
                'id' => 117,
                'name' => 'Malange',
                'uuid' => $faker->uuid , 'abbr' => 'MAL',
                'country_id' => 9,
            ),

            array(
                'id' => 118,
                'name' => 'Moxico',
                'uuid' => $faker->uuid , 'abbr' => 'MOX',
                'country_id' => 9,
            ),

            array(
                'id' => 119,
                'name' => 'Namibe',
                'uuid' => $faker->uuid , 'abbr' => 'NAM',
                'country_id' => 9,
            ),

            array(
                'id' => 120,
                'name' => 'Uíge',
                'uuid' => $faker->uuid , 'abbr' => 'UIG',
                'country_id' => 9,
            ),

            array(
                'id' => 121,
                'name' => 'Zaire',
                'uuid' => $faker->uuid , 'abbr' => 'ZAI',
                'country_id' => 9,
            ),

            array(
                'id' => 122,
                'name' => 'Salta',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 11,
            ),

            array(
                'id' => 123,
                'name' => 'Buenos Aires',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 11,
            ),

            array(
                'id' => 124,
                'name' => 'Capital federal',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 11,
            ),

            array(
                'id' => 125,
                'name' => 'San Luis',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 11,
            ),

            array(
                'id' => 126,
                'name' => 'Entre Ríos',
                'uuid' => $faker->uuid , 'abbr' => 'E',
                'country_id' => 11,
            ),

            array(
                'id' => 127,
                'name' => 'La Rioja',
                'uuid' => $faker->uuid , 'abbr' => 'F',
                'country_id' => 11,
            ),

            array(
                'id' => 128,
                'name' => 'Santiago del Estero',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 11,
            ),

            array(
                'id' => 129,
                'name' => 'Chaco',
                'uuid' => $faker->uuid , 'abbr' => 'H',
                'country_id' => 11,
            ),

            array(
                'id' => 130,
                'name' => 'San Juan',
                'uuid' => $faker->uuid , 'abbr' => 'J',
                'country_id' => 11,
            ),

            array(
                'id' => 131,
                'name' => 'Catamarca',
                'uuid' => $faker->uuid , 'abbr' => 'K',
                'country_id' => 11,
            ),

            array(
                'id' => 132,
                'name' => 'La Pampa',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 11,
            ),

            array(
                'id' => 133,
                'name' => 'Mendoza',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 11,
            ),

            array(
                'id' => 134,
                'name' => 'Misiones',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 11,
            ),

            array(
                'id' => 135,
                'name' => 'Formosa',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 11,
            ),

            array(
                'id' => 136,
                'name' => 'Neuquén',
                'uuid' => $faker->uuid , 'abbr' => 'Q',
                'country_id' => 11,
            ),

            array(
                'id' => 137,
                'name' => 'Río Negro',
                'uuid' => $faker->uuid , 'abbr' => 'R',
                'country_id' => 11,
            ),

            array(
                'id' => 138,
                'name' => 'Santa Fe',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 11,
            ),

            array(
                'id' => 139,
                'name' => 'Tucumán',
                'uuid' => $faker->uuid , 'abbr' => 'T',
                'country_id' => 11,
            ),

            array(
                'id' => 140,
                'name' => 'Chubut',
                'uuid' => $faker->uuid , 'abbr' => 'U',
                'country_id' => 11,
            ),

            array(
                'id' => 141,
                'name' => 'Tierra del Fuego',
                'uuid' => $faker->uuid , 'abbr' => 'V',
                'country_id' => 11,
            ),

            array(
                'id' => 142,
                'name' => 'Corrientes',
                'uuid' => $faker->uuid , 'abbr' => 'W',
                'country_id' => 11,
            ),

            array(
                'id' => 143,
                'name' => 'Córdoba',
                'uuid' => $faker->uuid , 'abbr' => 'X',
                'country_id' => 11,
            ),

            array(
                'id' => 144,
                'name' => 'Jujuy',
                'uuid' => $faker->uuid , 'abbr' => 'Y',
                'country_id' => 11,
            ),

            array(
                'id' => 145,
                'name' => 'Santa Cruz',
                'uuid' => $faker->uuid , 'abbr' => 'Z',
                'country_id' => 11,
            ),

            array(
                'id' => 146,
                'name' => 'Burgenland',
                'uuid' => $faker->uuid , 'abbr' => 1,
                'country_id' => 13,
            ),

            array(
                'id' => 147,
                'name' => 'Kärnten',
                'uuid' => $faker->uuid , 'abbr' => 2,
                'country_id' => 13,
            ),

            array(
                'id' => 148,
                'name' => 'Niederösterreich',
                'uuid' => $faker->uuid , 'abbr' => 3,
                'country_id' => 13,
            ),

            array(
                'id' => 149,
                'name' => 'Oberösterreich',
                'uuid' => $faker->uuid , 'abbr' => 4,
                'country_id' => 13,
            ),

            array(
                'id' => 150,
                'name' => 'Salzburg',
                'uuid' => $faker->uuid , 'abbr' => 5,
                'country_id' => 13,
            ),

            array(
                'id' => 151,
                'name' => 'Steiermark',
                'uuid' => $faker->uuid , 'abbr' => 6,
                'country_id' => 13,
            ),

            array(
                'id' => 152,
                'name' => 'Tirol',
                'uuid' => $faker->uuid , 'abbr' => 7,
                'country_id' => 13,
            ),

            array(
                'id' => 153,
                'name' => 'Vorarlberg',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 13,
            ),

            array(
                'id' => 154,
                'name' => 'Wien',
                'uuid' => $faker->uuid , 'abbr' => 9,
                'country_id' => 13,
            ),

            array(
                'id' => 155,
                'name' => 'Australian Capital Territory',
                'uuid' => $faker->uuid , 'abbr' => 'ACT',
                'country_id' => 14,
            ),

            array(
                'id' => 156,
                'name' => 'New South Wales',
                'uuid' => $faker->uuid , 'abbr' => 'NSW',
                'country_id' => 14,
            ),

            array(
                'id' => 157,
                'name' => 'Northern Territory',
                'uuid' => $faker->uuid , 'abbr' => 'NT',
                'country_id' => 14,
            ),

            array(
                'id' => 158,
                'name' => 'Queensland',
                'uuid' => $faker->uuid , 'abbr' => 'QLD',
                'country_id' => 14,
            ),

            array(
                'id' => 159,
                'name' => 'South Australia',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 14,
            ),

            array(
                'id' => 160,
                'name' => 'Tasmania',
                'uuid' => $faker->uuid , 'abbr' => 'TAS',
                'country_id' => 14,
            ),

            array(
                'id' => 161,
                'name' => 'Victoria',
                'uuid' => $faker->uuid , 'abbr' => 'VIC',
                'country_id' => 14,
            ),

            array(
                'id' => 162,
                'name' => 'Western Australia',
                'uuid' => $faker->uuid , 'abbr' => 'WA',
                'country_id' => 14,
            ),

            array(
                'id' => 163,
                'name' => 'Äli Bayramli',
                'uuid' => $faker->uuid , 'abbr' => 'AB',
                'country_id' => 17,
            ),

            array(
                'id' => 164,
                'name' => 'Abseron',
                'uuid' => $faker->uuid , 'abbr' => 'ABS',
                'country_id' => 17,
            ),

            array(
                'id' => 165,
                'name' => 'Agstafa',
                'uuid' => $faker->uuid , 'abbr' => 'AGA',
                'country_id' => 17,
            ),

            array(
                'id' => 166,
                'name' => 'Agcabädi',
                'uuid' => $faker->uuid , 'abbr' => 'AGC',
                'country_id' => 17,
            ),

            array(
                'id' => 167,
                'name' => 'Agdam',
                'uuid' => $faker->uuid , 'abbr' => 'AGM',
                'country_id' => 17,
            ),

            array(
                'id' => 168,
                'name' => 'Agdas',
                'uuid' => $faker->uuid , 'abbr' => 'AGS',
                'country_id' => 17,
            ),

            array(
                'id' => 169,
                'name' => 'Agsu',
                'uuid' => $faker->uuid , 'abbr' => 'AGU',
                'country_id' => 17,
            ),

            array(
                'id' => 170,
                'name' => 'Astara',
                'uuid' => $faker->uuid , 'abbr' => 'AST',
                'country_id' => 17,
            ),

            array(
                'id' => 171,
                'name' => 'Baki',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 17,
            ),

            array(
                'id' => 172,
                'name' => 'Babäk',
                'uuid' => $faker->uuid , 'abbr' => 'BAB',
                'country_id' => 17,
            ),

            array(
                'id' => 173,
                'name' => 'Balakän',
                'uuid' => $faker->uuid , 'abbr' => 'BAL',
                'country_id' => 17,
            ),

            array(
                'id' => 174,
                'name' => 'Bärdä',
                'uuid' => $faker->uuid , 'abbr' => 'BAR',
                'country_id' => 17,
            ),

            array(
                'id' => 175,
                'name' => 'Beyläqan',
                'uuid' => $faker->uuid , 'abbr' => 'BEY',
                'country_id' => 17,
            ),

            array(
                'id' => 176,
                'name' => 'Biläsuvar',
                'uuid' => $faker->uuid , 'abbr' => 'BIL',
                'country_id' => 17,
            ),

            array(
                'id' => 177,
                'name' => 'Cäbrayil',
                'uuid' => $faker->uuid , 'abbr' => 'CAB',
                'country_id' => 17,
            ),

            array(
                'id' => 178,
                'name' => 'Cälilabab',
                'uuid' => $faker->uuid , 'abbr' => 'CAL',
                'country_id' => 17,
            ),

            array(
                'id' => 179,
                'name' => 'Culfa',
                'uuid' => $faker->uuid , 'abbr' => 'CUL',
                'country_id' => 17,
            ),

            array(
                'id' => 180,
                'name' => 'Daskäsän',
                'uuid' => $faker->uuid , 'abbr' => 'DAS',
                'country_id' => 17,
            ),

            array(
                'id' => 181,
                'name' => 'Däväçi',
                'uuid' => $faker->uuid , 'abbr' => 'DAV',
                'country_id' => 17,
            ),

            array(
                'id' => 182,
                'name' => 'Füzuli',
                'uuid' => $faker->uuid , 'abbr' => 'FUZ',
                'country_id' => 17,
            ),

            array(
                'id' => 183,
                'name' => 'Gäncä',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 17,
            ),

            array(
                'id' => 184,
                'name' => 'Gädäbäy',
                'uuid' => $faker->uuid , 'abbr' => 'GAD',
                'country_id' => 17,
            ),

            array(
                'id' => 185,
                'name' => 'Goranboy',
                'uuid' => $faker->uuid , 'abbr' => 'GOR',
                'country_id' => 17,
            ),

            array(
                'id' => 186,
                'name' => 'Göyçay',
                'uuid' => $faker->uuid , 'abbr' => 'GOY',
                'country_id' => 17,
            ),

            array(
                'id' => 187,
                'name' => 'Haciqabul',
                'uuid' => $faker->uuid , 'abbr' => 'HAC',
                'country_id' => 17,
            ),

            array(
                'id' => 188,
                'name' => 'Imisli',
                'uuid' => $faker->uuid , 'abbr' => 'IMI',
                'country_id' => 17,
            ),

            array(
                'id' => 189,
                'name' => 'Ismayilli',
                'uuid' => $faker->uuid , 'abbr' => 'ISM',
                'country_id' => 17,
            ),

            array(
                'id' => 190,
                'name' => 'Kälbäcär',
                'uuid' => $faker->uuid , 'abbr' => 'KAL',
                'country_id' => 17,
            ),

            array(
                'id' => 191,
                'name' => 'Kürdämir',
                'uuid' => $faker->uuid , 'abbr' => 'KUR',
                'country_id' => 17,
            ),

            array(
                'id' => 192,
                'name' => 'Länkäran City',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 17,
            ),

            array(
                'id' => 193,
                'name' => 'Laçin',
                'uuid' => $faker->uuid , 'abbr' => 'LAC',
                'country_id' => 17,
            ),

            array(
                'id' => 194,
                'name' => 'Länkäran',
                'uuid' => $faker->uuid , 'abbr' => 'LAN',
                'country_id' => 17,
            ),

            array(
                'id' => 195,
                'name' => 'Lerik',
                'uuid' => $faker->uuid , 'abbr' => 'LER',
                'country_id' => 17,
            ),

            array(
                'id' => 196,
                'name' => 'Masalli',
                'uuid' => $faker->uuid , 'abbr' => 'MAS',
                'country_id' => 17,
            ),

            array(
                'id' => 197,
                'name' => 'Mingäçevir',
                'uuid' => $faker->uuid , 'abbr' => 'MI',
                'country_id' => 17,
            ),

            array(
                'id' => 198,
                'name' => 'Naftalan',
                'uuid' => $faker->uuid , 'abbr' => 'NA',
                'country_id' => 17,
            ),

            array(
                'id' => 199,
                'name' => 'Neftçala',
                'uuid' => $faker->uuid , 'abbr' => 'NEF',
                'country_id' => 17,
            ),

            array(
                'id' => 200,
                'name' => 'Naxçivan',
                'uuid' => $faker->uuid , 'abbr' => 'NX',
                'country_id' => 17,
            ),

            array(
                'id' => 201,
                'name' => 'Oguz',
                'uuid' => $faker->uuid , 'abbr' => 'OGU',
                'country_id' => 17,
            ),

            array(
                'id' => 202,
                'name' => 'Ordubad',
                'uuid' => $faker->uuid , 'abbr' => 'ORD',
                'country_id' => 17,
            ),

            array(
                'id' => 203,
                'name' => 'Qäbälä',
                'uuid' => $faker->uuid , 'abbr' => 'QAB',
                'country_id' => 17,
            ),

            array(
                'id' => 204,
                'name' => 'Qax',
                'uuid' => $faker->uuid , 'abbr' => 'QAX',
                'country_id' => 17,
            ),

            array(
                'id' => 205,
                'name' => 'Qazax',
                'uuid' => $faker->uuid , 'abbr' => 'QAZ',
                'country_id' => 17,
            ),

            array(
                'id' => 206,
                'name' => 'Quba',
                'uuid' => $faker->uuid , 'abbr' => 'QBA',
                'country_id' => 17,
            ),

            array(
                'id' => 207,
                'name' => 'Qubadli',
                'uuid' => $faker->uuid , 'abbr' => 'QBI',
                'country_id' => 17,
            ),

            array(
                'id' => 208,
                'name' => 'Qobustan',
                'uuid' => $faker->uuid , 'abbr' => 'QOB',
                'country_id' => 17,
            ),

            array(
                'id' => 209,
                'name' => 'Qusar',
                'uuid' => $faker->uuid , 'abbr' => 'QUS',
                'country_id' => 17,
            ),

            array(
                'id' => 210,
                'name' => 'Säki City',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 17,
            ),

            array(
                'id' => 211,
                'name' => 'Sabirabad',
                'uuid' => $faker->uuid , 'abbr' => 'SAB',
                'country_id' => 17,
            ),

            array(
                'id' => 212,
                'name' => 'Sädäräk',
                'uuid' => $faker->uuid , 'abbr' => 'SAD',
                'country_id' => 17,
            ),

            array(
                'id' => 213,
                'name' => 'Sahbuz',
                'uuid' => $faker->uuid , 'abbr' => 'SAH',
                'country_id' => 17,
            ),

            array(
                'id' => 214,
                'name' => 'Säki',
                'uuid' => $faker->uuid , 'abbr' => 'SAK',
                'country_id' => 17,
            ),

            array(
                'id' => 215,
                'name' => 'Salyan',
                'uuid' => $faker->uuid , 'abbr' => 'SAL',
                'country_id' => 17,
            ),

            array(
                'id' => 216,
                'name' => 'Särur',
                'uuid' => $faker->uuid , 'abbr' => 'SAR',
                'country_id' => 17,
            ),

            array(
                'id' => 217,
                'name' => 'Saatli',
                'uuid' => $faker->uuid , 'abbr' => 'SAT',
                'country_id' => 17,
            ),

            array(
                'id' => 218,
                'name' => 'Siyäzän',
                'uuid' => $faker->uuid , 'abbr' => 'SIY',
                'country_id' => 17,
            ),

            array(
                'id' => 219,
                'name' => 'Sämkir',
                'uuid' => $faker->uuid , 'abbr' => 'SKR',
                'country_id' => 17,
            ),

            array(
                'id' => 220,
                'name' => 'Sumqayit',
                'uuid' => $faker->uuid , 'abbr' => 'SM',
                'country_id' => 17,
            ),

            array(
                'id' => 221,
                'name' => 'Samaxi',
                'uuid' => $faker->uuid , 'abbr' => 'SMI',
                'country_id' => 17,
            ),

            array(
                'id' => 222,
                'name' => 'Samux',
                'uuid' => $faker->uuid , 'abbr' => 'SMX',
                'country_id' => 17,
            ),

            array(
                'id' => 223,
                'name' => 'Susa City',
                'uuid' => $faker->uuid , 'abbr' => 'SS',
                'country_id' => 17,
            ),

            array(
                'id' => 224,
                'name' => 'Susa',
                'uuid' => $faker->uuid , 'abbr' => 'SUS',
                'country_id' => 17,
            ),

            array(
                'id' => 225,
                'name' => 'Tärtär',
                'uuid' => $faker->uuid , 'abbr' => 'TAR',
                'country_id' => 17,
            ),

            array(
                'id' => 226,
                'name' => 'Tovuz',
                'uuid' => $faker->uuid , 'abbr' => 'TOV',
                'country_id' => 17,
            ),

            array(
                'id' => 227,
                'name' => 'Ucar',
                'uuid' => $faker->uuid , 'abbr' => 'UCA',
                'country_id' => 17,
            ),

            array(
                'id' => 228,
                'name' => 'Xankändi',
                'uuid' => $faker->uuid , 'abbr' => 'XA',
                'country_id' => 17,
            ),

            array(
                'id' => 229,
                'name' => 'Xaçmaz',
                'uuid' => $faker->uuid , 'abbr' => 'XAC',
                'country_id' => 17,
            ),

            array(
                'id' => 230,
                'name' => 'Xanlar',
                'uuid' => $faker->uuid , 'abbr' => 'XAN',
                'country_id' => 17,
            ),

            array(
                'id' => 231,
                'name' => 'Xocali',
                'uuid' => $faker->uuid , 'abbr' => 'XCI',
                'country_id' => 17,
            ),

            array(
                'id' => 232,
                'name' => 'Xizi',
                'uuid' => $faker->uuid , 'abbr' => 'XIZ',
                'country_id' => 17,
            ),

            array(
                'id' => 233,
                'name' => 'Xocavänd',
                'uuid' => $faker->uuid , 'abbr' => 'XVD',
                'country_id' => 17,
            ),

            array(
                'id' => 234,
                'name' => 'Yardimli',
                'uuid' => $faker->uuid , 'abbr' => 'YAR',
                'country_id' => 17,
            ),

            array(
                'id' => 235,
                'name' => 'Yevlax City',
                'uuid' => $faker->uuid , 'abbr' => 'YE',
                'country_id' => 17,
            ),

            array(
                'id' => 236,
                'name' => 'Yevlax',
                'uuid' => $faker->uuid , 'abbr' => 'YEV',
                'country_id' => 17,
            ),

            array(
                'id' => 237,
                'name' => 'Zängilan',
                'uuid' => $faker->uuid , 'abbr' => 'ZAN',
                'country_id' => 17,
            ),

            array(
                'id' => 238,
                'name' => 'Zaqatala',
                'uuid' => $faker->uuid , 'abbr' => 'ZAQ',
                'country_id' => 17,
            ),

            array(
                'id' => 239,
                'name' => 'Zärdab',
                'uuid' => $faker->uuid , 'abbr' => 'ZAR',
                'country_id' => 17,
            ),

            array(
                'id' => 240,
                'name' => 'Federacija Bosna i Hercegovina',
                'uuid' => $faker->uuid , 'abbr' => 'BIH',
                'country_id' => 18,
            ),

            array(
                'id' => 241,
                'name' => 'Republika Srpska',
                'uuid' => $faker->uuid , 'abbr' => 'SRP',
                'country_id' => 18,
            ),

            array(
                'id' => 242,
                'name' => 'Christ Church',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 19,
            ),

            array(
                'id' => 243,
                'name' => 'Saint Andrew',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 19,
            ),

            array(
                'id' => 244,
                'name' => 'Saint George',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 19,
            ),

            array(
                'id' => 245,
                'name' => 'Saint James',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 19,
            ),

            array(
                'id' => 246,
                'name' => 'Saint John',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 19,
            ),

            array(
                'id' => 247,
                'name' => 'Saint Joseph',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 19,
            ),

            array(
                'id' => 248,
                'name' => 'Saint Lucy',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 19,
            ),

            array(
                'id' => 249,
                'name' => 'Saint Michael',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 19,
            ),

            array(
                'id' => 250,
                'name' => 'Saint Peter',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 19,
            ),

            array(
                'id' => 251,
                'name' => 'Saint Philip',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 19,
            ),

            array(
                'id' => 252,
                'name' => 'Saint Thomas',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 19,
            ),

            array(
                'id' => 253,
                'name' => 'Bandarban zila',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 20,
            ),

            array(
                'id' => 254,
                'name' => 'Barguna zila',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 20,
            ),

            array(
                'id' => 255,
                'name' => 'Bogra zila',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 20,
            ),

            array(
                'id' => 256,
                'name' => 'Brahmanbaria zila',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 20,
            ),

            array(
                'id' => 257,
                'name' => 'Bagerhat zila',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 20,
            ),

            array(
                'id' => 258,
                'name' => 'Barisal zila',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 20,
            ),

            array(
                'id' => 259,
                'name' => 'Bhola zila',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 20,
            ),

            array(
                'id' => 260,
                'name' => 'Comilla zila',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 20,
            ),

            array(
                'id' => 261,
                'name' => 'Chandpur zila',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 20,
            ),

            array(
                'id' => 262,
                'name' => 'Chittagong zila',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 20,
            ),

            array(
                'id' => 263,
                'name' => 'Cox\'s Bazar zila',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 20,
            ),

            array(
                'id' => 264,
                'name' => 'Chuadanga zila',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 20,
            ),

            array(
                'id' => 265,
                'name' => 'Dhaka zila',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 20,
            ),

            array(
                'id' => 266,
                'name' => 'Dinajpur zila',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 20,
            ),

            array(
                'id' => 267,
                'name' => 'Faridpur zila',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 20,
            ),

            array(
                'id' => 268,
                'name' => 'Feni zila',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 20,
            ),

            array(
                'id' => 269,
                'name' => 'Gopalganj zila',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 20,
            ),

            array(
                'id' => 270,
                'name' => 'Gazipur zila',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 20,
            ),

            array(
                'id' => 271,
                'name' => 'Gaibandha zila',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 20,
            ),

            array(
                'id' => 272,
                'name' => 'Habiganj zila',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 20,
            ),

            array(
                'id' => 273,
                'name' => 'Jamalpur zila',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 20,
            ),

            array(
                'id' => 274,
                'name' => 'Jessore zila',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 20,
            ),

            array(
                'id' => 275,
                'name' => 'Jhenaidah zila',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 20,
            ),

            array(
                'id' => 276,
                'name' => 'Jaipurhat zila',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 20,
            ),

            array(
                'id' => 277,
                'name' => 'Jhalakati zila',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 20,
            ),

            array(
                'id' => 278,
                'name' => 'Kishoreganj zila',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 20,
            ),

            array(
                'id' => 279,
                'name' => 'Khulna zila',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 20,
            ),

            array(
                'id' => 280,
                'name' => 'Kurigram zila',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 20,
            ),

            array(
                'id' => 281,
                'name' => 'Khagrachari zila',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 20,
            ),

            array(
                'id' => 282,
                'name' => 'Kushtia zila',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 20,
            ),

            array(
                'id' => 283,
                'name' => 'Lakshmipur zila',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 20,
            ),

            array(
                'id' => 284,
                'name' => 'Lalmonirhat zila',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 20,
            ),

            array(
                'id' => 285,
                'name' => 'Manikganj zila',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 20,
            ),

            array(
                'id' => 286,
                'name' => 'Mymensingh zila',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 20,
            ),

            array(
                'id' => 287,
                'name' => 'Munshiganj zila',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 20,
            ),

            array(
                'id' => 288,
                'name' => 'Madaripur zila',
                'uuid' => $faker->uuid , 'abbr' => 36,
                'country_id' => 20,
            ),

            array(
                'id' => 289,
                'name' => 'Magura zila',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 20,
            ),

            array(
                'id' => 290,
                'name' => 'Moulvibazar zila',
                'uuid' => $faker->uuid , 'abbr' => 38,
                'country_id' => 20,
            ),

            array(
                'id' => 291,
                'name' => 'Meherpur zila',
                'uuid' => $faker->uuid , 'abbr' => 39,
                'country_id' => 20,
            ),

            array(
                'id' => 292,
                'name' => 'Narayanganj zila',
                'uuid' => $faker->uuid , 'abbr' => 40,
                'country_id' => 20,
            ),

            array(
                'id' => 293,
                'name' => 'Netrakona zila',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 20,
            ),

            array(
                'id' => 294,
                'name' => 'Narsingdi zila',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 20,
            ),

            array(
                'id' => 295,
                'name' => 'Narail zila',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 20,
            ),

            array(
                'id' => 296,
                'name' => 'Natore zila',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 20,
            ),

            array(
                'id' => 297,
                'name' => 'Nawabganj zila',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 20,
            ),

            array(
                'id' => 298,
                'name' => 'Nilphamari zila',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 20,
            ),

            array(
                'id' => 299,
                'name' => 'Noakhali zila',
                'uuid' => $faker->uuid , 'abbr' => 47,
                'country_id' => 20,
            ),

            array(
                'id' => 300,
                'name' => 'Naogaon zila',
                'uuid' => $faker->uuid , 'abbr' => 48,
                'country_id' => 20,
            ),

            array(
                'id' => 301,
                'name' => 'Pabna zila',
                'uuid' => $faker->uuid , 'abbr' => 49,
                'country_id' => 20,
            ),

            array(
                'id' => 302,
                'name' => 'Pirojpur zila',
                'uuid' => $faker->uuid , 'abbr' => 50,
                'country_id' => 20,
            ),

            array(
                'id' => 303,
                'name' => 'Patuakhali zila',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 20,
            ),

            array(
                'id' => 304,
                'name' => 'Panchagarh zila',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 20,
            ),

            array(
                'id' => 305,
                'name' => 'Rajbari zila',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 20,
            ),

            array(
                'id' => 306,
                'name' => 'Rajshahi zila',
                'uuid' => $faker->uuid , 'abbr' => 54,
                'country_id' => 20,
            ),

            array(
                'id' => 307,
                'name' => 'Rangpur zila',
                'uuid' => $faker->uuid , 'abbr' => 55,
                'country_id' => 20,
            ),

            array(
                'id' => 308,
                'name' => 'Rangamati zila',
                'uuid' => $faker->uuid , 'abbr' => 56,
                'country_id' => 20,
            ),

            array(
                'id' => 309,
                'name' => 'Sherpur zila',
                'uuid' => $faker->uuid , 'abbr' => 57,
                'country_id' => 20,
            ),

            array(
                'id' => 310,
                'name' => 'Satkhira zila',
                'uuid' => $faker->uuid , 'abbr' => 58,
                'country_id' => 20,
            ),

            array(
                'id' => 311,
                'name' => 'Sirajganj zila',
                'uuid' => $faker->uuid , 'abbr' => 59,
                'country_id' => 20,
            ),

            array(
                'id' => 312,
                'name' => 'Sylhet zila',
                'uuid' => $faker->uuid , 'abbr' => 60,
                'country_id' => 20,
            ),

            array(
                'id' => 313,
                'name' => 'Sunamganj zila',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 20,
            ),

            array(
                'id' => 314,
                'name' => 'Shariatpur zila',
                'uuid' => $faker->uuid , 'abbr' => 62,
                'country_id' => 20,
            ),

            array(
                'id' => 315,
                'name' => 'Tangail zila',
                'uuid' => $faker->uuid , 'abbr' => 63,
                'country_id' => 20,
            ),

            array(
                'id' => 316,
                'name' => 'Thakurgaon zila',
                'uuid' => $faker->uuid , 'abbr' => 64,
                'country_id' => 20,
            ),

            array(
                'id' => 317,
                'name' => 'Brussels',
                'uuid' => $faker->uuid , 'abbr' => 'BRU',
                'country_id' => 21,
            ),

            array(
                'id' => 318,
                'name' => 'Antwerpen (nl)',
                'uuid' => $faker->uuid , 'abbr' => 'VAN',
                'country_id' => 21,
            ),

            array(
                'id' => 319,
                'name' => 'Vlaams Brabant (nl)',
                'uuid' => $faker->uuid , 'abbr' => 'VBR',
                'country_id' => 21,
            ),

            array(
                'id' => 320,
                'name' => 'Limburg (nl)',
                'uuid' => $faker->uuid , 'abbr' => 'VLI',
                'country_id' => 21,
            ),

            array(
                'id' => 321,
                'name' => 'Oost-Vlaanderen (nl)',
                'uuid' => $faker->uuid , 'abbr' => 'VOV',
                'country_id' => 21,
            ),

            array(
                'id' => 322,
                'name' => 'West-Vlaanderen (nl)',
                'uuid' => $faker->uuid , 'abbr' => 'VWV',
                'country_id' => 21,
            ),

            array(
                'id' => 323,
                'name' => 'Brabant Wallon (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'WBR',
                'country_id' => 21,
            ),

            array(
                'id' => 324,
                'name' => 'Hainaut (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'WHT',
                'country_id' => 21,
            ),

            array(
                'id' => 325,
                'name' => 'Liège (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'WLG',
                'country_id' => 21,
            ),

            array(
                'id' => 326,
                'name' => 'Luxembourg (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'WLX',
                'country_id' => 21,
            ),

            array(
                'id' => 327,
                'name' => 'Namur (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'WNA',
                'country_id' => 21,
            ),

            array(
                'id' => 328,
                'name' => 'Balé',
                'uuid' => $faker->uuid , 'abbr' => 'BAL',
                'country_id' => 22,
            ),

            array(
                'id' => 329,
                'name' => 'Bam',
                'uuid' => $faker->uuid , 'abbr' => 'BAM',
                'country_id' => 22,
            ),

            array(
                'id' => 330,
                'name' => 'Banwa',
                'uuid' => $faker->uuid , 'abbr' => 'BAN',
                'country_id' => 22,
            ),

            array(
                'id' => 331,
                'name' => 'Bazèga',
                'uuid' => $faker->uuid , 'abbr' => 'BAZ',
                'country_id' => 22,
            ),

            array(
                'id' => 332,
                'name' => 'Bougouriba',
                'uuid' => $faker->uuid , 'abbr' => 'BGR',
                'country_id' => 22,
            ),

            array(
                'id' => 333,
                'name' => 'Boulgou',
                'uuid' => $faker->uuid , 'abbr' => 'BLG',
                'country_id' => 22,
            ),

            array(
                'id' => 334,
                'name' => 'Boulkiemdé',
                'uuid' => $faker->uuid , 'abbr' => 'BLK',
                'country_id' => 22,
            ),

            array(
                'id' => 335,
                'name' => 'Comoé',
                'uuid' => $faker->uuid , 'abbr' => 'COM',
                'country_id' => 22,
            ),

            array(
                'id' => 336,
                'name' => 'Ganzourgou',
                'uuid' => $faker->uuid , 'abbr' => 'GAN',
                'country_id' => 22,
            ),

            array(
                'id' => 337,
                'name' => 'Gnagna',
                'uuid' => $faker->uuid , 'abbr' => 'GNA',
                'country_id' => 22,
            ),

            array(
                'id' => 338,
                'name' => 'Gourma',
                'uuid' => $faker->uuid , 'abbr' => 'GOU',
                'country_id' => 22,
            ),

            array(
                'id' => 339,
                'name' => 'Houet',
                'uuid' => $faker->uuid , 'abbr' => 'HOU',
                'country_id' => 22,
            ),

            array(
                'id' => 340,
                'name' => 'Ioba',
                'uuid' => $faker->uuid , 'abbr' => 'IOB',
                'country_id' => 22,
            ),

            array(
                'id' => 341,
                'name' => 'Kadiogo',
                'uuid' => $faker->uuid , 'abbr' => 'KAD',
                'country_id' => 22,
            ),

            array(
                'id' => 342,
                'name' => 'Kénédougou',
                'uuid' => $faker->uuid , 'abbr' => 'KEN',
                'country_id' => 22,
            ),

            array(
                'id' => 343,
                'name' => 'Komondjari',
                'uuid' => $faker->uuid , 'abbr' => 'KMD',
                'country_id' => 22,
            ),

            array(
                'id' => 344,
                'name' => 'Kompienga',
                'uuid' => $faker->uuid , 'abbr' => 'KMP',
                'country_id' => 22,
            ),

            array(
                'id' => 345,
                'name' => 'Koulpélogo',
                'uuid' => $faker->uuid , 'abbr' => 'KOP',
                'country_id' => 22,
            ),

            array(
                'id' => 346,
                'name' => 'Kossi',
                'uuid' => $faker->uuid , 'abbr' => 'KOS',
                'country_id' => 22,
            ),

            array(
                'id' => 347,
                'name' => 'Kouritenga',
                'uuid' => $faker->uuid , 'abbr' => 'KOT',
                'country_id' => 22,
            ),

            array(
                'id' => 348,
                'name' => 'Kourwéogo',
                'uuid' => $faker->uuid , 'abbr' => 'KOW',
                'country_id' => 22,
            ),

            array(
                'id' => 349,
                'name' => 'Léraba',
                'uuid' => $faker->uuid , 'abbr' => 'LER',
                'country_id' => 22,
            ),

            array(
                'id' => 350,
                'name' => 'Loroum',
                'uuid' => $faker->uuid , 'abbr' => 'LOR',
                'country_id' => 22,
            ),

            array(
                'id' => 351,
                'name' => 'Mouhoun',
                'uuid' => $faker->uuid , 'abbr' => 'MOU',
                'country_id' => 22,
            ),

            array(
                'id' => 352,
                'name' => 'Namentenga',
                'uuid' => $faker->uuid , 'abbr' => 'NAM',
                'country_id' => 22,
            ),

            array(
                'id' => 353,
                'name' => 'Nahouri',
                'uuid' => $faker->uuid , 'abbr' => 'NAO',
                'country_id' => 22,
            ),

            array(
                'id' => 354,
                'name' => 'Nayala',
                'uuid' => $faker->uuid , 'abbr' => 'NAY',
                'country_id' => 22,
            ),

            array(
                'id' => 355,
                'name' => 'Noumbiel',
                'uuid' => $faker->uuid , 'abbr' => 'NOU',
                'country_id' => 22,
            ),

            array(
                'id' => 356,
                'name' => 'Oubritenga',
                'uuid' => $faker->uuid , 'abbr' => 'OUB',
                'country_id' => 22,
            ),

            array(
                'id' => 357,
                'name' => 'Oudalan',
                'uuid' => $faker->uuid , 'abbr' => 'OUD',
                'country_id' => 22,
            ),

            array(
                'id' => 358,
                'name' => 'Passoré',
                'uuid' => $faker->uuid , 'abbr' => 'PAS',
                'country_id' => 22,
            ),

            array(
                'id' => 359,
                'name' => 'Poni',
                'uuid' => $faker->uuid , 'abbr' => 'PON',
                'country_id' => 22,
            ),

            array(
                'id' => 360,
                'name' => 'Séno',
                'uuid' => $faker->uuid , 'abbr' => 'SEN',
                'country_id' => 22,
            ),

            array(
                'id' => 361,
                'name' => 'Sissili',
                'uuid' => $faker->uuid , 'abbr' => 'SIS',
                'country_id' => 22,
            ),

            array(
                'id' => 362,
                'name' => 'Sanmatenga',
                'uuid' => $faker->uuid , 'abbr' => 'SMT',
                'country_id' => 22,
            ),

            array(
                'id' => 363,
                'name' => 'Sanguié',
                'uuid' => $faker->uuid , 'abbr' => 'SNG',
                'country_id' => 22,
            ),

            array(
                'id' => 364,
                'name' => 'Soum',
                'uuid' => $faker->uuid , 'abbr' => 'SOM',
                'country_id' => 22,
            ),

            array(
                'id' => 365,
                'name' => 'Sourou',
                'uuid' => $faker->uuid , 'abbr' => 'SOR',
                'country_id' => 22,
            ),

            array(
                'id' => 366,
                'name' => 'Tapoa',
                'uuid' => $faker->uuid , 'abbr' => 'TAP',
                'country_id' => 22,
            ),

            array(
                'id' => 367,
                'name' => 'Tui',
                'uuid' => $faker->uuid , 'abbr' => 'TUI',
                'country_id' => 22,
            ),

            array(
                'id' => 368,
                'name' => 'Yagha',
                'uuid' => $faker->uuid , 'abbr' => 'YAG',
                'country_id' => 22,
            ),

            array(
                'id' => 369,
                'name' => 'Yatenga',
                'uuid' => $faker->uuid , 'abbr' => 'YAT',
                'country_id' => 22,
            ),

            array(
                'id' => 370,
                'name' => 'Ziro',
                'uuid' => $faker->uuid , 'abbr' => 'ZIR',
                'country_id' => 22,
            ),

            array(
                'id' => 371,
                'name' => 'Zondoma',
                'uuid' => $faker->uuid , 'abbr' => 'ZON',
                'country_id' => 22,
            ),

            array(
                'id' => 372,
                'name' => 'Zoundwéogo',
                'uuid' => $faker->uuid , 'abbr' => 'ZOU',
                'country_id' => 22,
            ),

            array(
                'id' => 373,
                'name' => 'Blagoevgrad',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 23,
            ),

            array(
                'id' => 374,
                'name' => 'Burgas',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 23,
            ),

            array(
                'id' => 375,
                'name' => 'Varna',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 23,
            ),

            array(
                'id' => 376,
                'name' => 'Veliko Tarnovo',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 23,
            ),

            array(
                'id' => 377,
                'name' => 'Vidin',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 23,
            ),

            array(
                'id' => 378,
                'name' => 'Vratsa',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 23,
            ),

            array(
                'id' => 379,
                'name' => 'Gabrovo',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 23,
            ),

            array(
                'id' => 380,
                'name' => 'Dobrich',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 23,
            ),

            array(
                'id' => 381,
                'name' => 'Kardzhali',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 23,
            ),

            array(
                'id' => 382,
                'name' => 'Kjustendil',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 23,
            ),

            array(
                'id' => 383,
                'name' => 'Lovech',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 23,
            ),

            array(
                'id' => 384,
                'name' => 'Montana',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 23,
            ),

            array(
                'id' => 385,
                'name' => 'Pazardzhik',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 23,
            ),

            array(
                'id' => 386,
                'name' => 'Pernik',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 23,
            ),

            array(
                'id' => 387,
                'name' => 'Pleven',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 23,
            ),

            array(
                'id' => 388,
                'name' => 'Plovdiv',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 23,
            ),

            array(
                'id' => 389,
                'name' => 'Razgrad',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 23,
            ),

            array(
                'id' => 390,
                'name' => 'Ruse',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 23,
            ),

            array(
                'id' => 391,
                'name' => 'Silistra',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 23,
            ),

            array(
                'id' => 392,
                'name' => 'Sliven',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 23,
            ),

            array(
                'id' => 393,
                'name' => 'Smolyan',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 23,
            ),

            array(
                'id' => 394,
                'name' => 'Sofia-Grad',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 23,
            ),

            array(
                'id' => 395,
                'name' => 'Sofia',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 23,
            ),

            array(
                'id' => 396,
                'name' => 'Stara Zagora',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 23,
            ),

            array(
                'id' => 397,
                'name' => 'Targovishte',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 23,
            ),

            array(
                'id' => 398,
                'name' => 'Haskovo',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 23,
            ),

            array(
                'id' => 399,
                'name' => 'Šumen',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 23,
            ),

            array(
                'id' => 400,
                'name' => 'Yambol',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 23,
            ),

            array(
                'id' => 401,
                'name' => 'Al Manamah (Al ‘Asimah)',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 24,
            ),

            array(
                'id' => 402,
                'name' => 'Al Janubiyah',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 24,
            ),

            array(
                'id' => 403,
                'name' => 'Al Muharraq',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 24,
            ),

            array(
                'id' => 404,
                'name' => 'Al Wustá',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 24,
            ),

            array(
                'id' => 405,
                'name' => 'Ash Shamaliyah',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 24,
            ),

            array(
                'id' => 406,
                'name' => 'Bubanza',
                'uuid' => $faker->uuid , 'abbr' => 'BB',
                'country_id' => 25,
            ),

            array(
                'id' => 407,
                'name' => 'Bujumbura',
                'uuid' => $faker->uuid , 'abbr' => 'BJ',
                'country_id' => 25,
            ),

            array(
                'id' => 408,
                'name' => 'Bururi',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 25,
            ),

            array(
                'id' => 409,
                'name' => 'Cankuzo',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 25,
            ),

            array(
                'id' => 410,
                'name' => 'Cibitoke',
                'uuid' => $faker->uuid , 'abbr' => 'CI',
                'country_id' => 25,
            ),

            array(
                'id' => 411,
                'name' => 'Gitega',
                'uuid' => $faker->uuid , 'abbr' => 'GI',
                'country_id' => 25,
            ),

            array(
                'id' => 412,
                'name' => 'Kirundo',
                'uuid' => $faker->uuid , 'abbr' => 'KI',
                'country_id' => 25,
            ),

            array(
                'id' => 413,
                'name' => 'Karuzi',
                'uuid' => $faker->uuid , 'abbr' => 'KR',
                'country_id' => 25,
            ),

            array(
                'id' => 414,
                'name' => 'Kayanza',
                'uuid' => $faker->uuid , 'abbr' => 'KY',
                'country_id' => 25,
            ),

            array(
                'id' => 415,
                'name' => 'Makamba',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 25,
            ),

            array(
                'id' => 416,
                'name' => 'Muramvya',
                'uuid' => $faker->uuid , 'abbr' => 'MU',
                'country_id' => 25,
            ),

            array(
                'id' => 417,
                'name' => 'Mwaro',
                'uuid' => $faker->uuid , 'abbr' => 'MW',
                'country_id' => 25,
            ),

            array(
                'id' => 418,
                'name' => 'Muyinga',
                'uuid' => $faker->uuid , 'abbr' => 'MY',
                'country_id' => 25,
            ),

            array(
                'id' => 419,
                'name' => 'Ngozi',
                'uuid' => $faker->uuid , 'abbr' => 'NG',
                'country_id' => 25,
            ),

            array(
                'id' => 420,
                'name' => 'Rutana',
                'uuid' => $faker->uuid , 'abbr' => 'RT',
                'country_id' => 25,
            ),

            array(
                'id' => 421,
                'name' => 'Ruyigi',
                'uuid' => $faker->uuid , 'abbr' => 'RY',
                'country_id' => 25,
            ),

            array(
                'id' => 422,
                'name' => 'Atakora',
                'uuid' => $faker->uuid , 'abbr' => 'AK',
                'country_id' => 26,
            ),

            array(
                'id' => 423,
                'name' => 'Alibori',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 26,
            ),

            array(
                'id' => 424,
                'name' => 'Atlantique',
                'uuid' => $faker->uuid , 'abbr' => 'AQ',
                'country_id' => 26,
            ),

            array(
                'id' => 425,
                'name' => 'Borgou',
                'uuid' => $faker->uuid , 'abbr' => 'BO',
                'country_id' => 26,
            ),

            array(
                'id' => 426,
                'name' => 'Collines',
                'uuid' => $faker->uuid , 'abbr' => 'CO',
                'country_id' => 26,
            ),

            array(
                'id' => 427,
                'name' => 'Donga',
                'uuid' => $faker->uuid , 'abbr' => 'DO',
                'country_id' => 26,
            ),

            array(
                'id' => 428,
                'name' => 'Kouffo',
                'uuid' => $faker->uuid , 'abbr' => 'KO',
                'country_id' => 26,
            ),

            array(
                'id' => 429,
                'name' => 'Littoral',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 26,
            ),

            array(
                'id' => 430,
                'name' => 'Mono',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 26,
            ),

            array(
                'id' => 431,
                'name' => 'Ouémé',
                'uuid' => $faker->uuid , 'abbr' => 'OU',
                'country_id' => 26,
            ),

            array(
                'id' => 432,
                'name' => 'Plateau',
                'uuid' => $faker->uuid , 'abbr' => 'PL',
                'country_id' => 26,
            ),

            array(
                'id' => 433,
                'name' => 'Zou',
                'uuid' => $faker->uuid , 'abbr' => 'ZO',
                'country_id' => 26,
            ),

            array(
                'id' => 434,
                'name' => 'Belait',
                'uuid' => $faker->uuid , 'abbr' => 'BE',
                'country_id' => 29,
            ),

            array(
                'id' => 435,
                'name' => 'Brunei-Muara',
                'uuid' => $faker->uuid , 'abbr' => 'BM',
                'country_id' => 29,
            ),

            array(
                'id' => 436,
                'name' => 'Temburong',
                'uuid' => $faker->uuid , 'abbr' => 'TE',
                'country_id' => 29,
            ),

            array(
                'id' => 437,
                'name' => 'Tutong',
                'uuid' => $faker->uuid , 'abbr' => 'TU',
                'country_id' => 29,
            ),

            array(
                'id' => 438,
                'name' => 'El Beni',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 30,
            ),

            array(
                'id' => 439,
                'name' => 'Cochabamba',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 30,
            ),

            array(
                'id' => 440,
                'name' => 'Chuquisaca',
                'uuid' => $faker->uuid , 'abbr' => 'H',
                'country_id' => 30,
            ),

            array(
                'id' => 441,
                'name' => 'La Paz',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 30,
            ),

            array(
                'id' => 442,
                'name' => 'Pando',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 30,
            ),

            array(
                'id' => 443,
                'name' => 'Oruro',
                'uuid' => $faker->uuid , 'abbr' => 'O',
                'country_id' => 30,
            ),

            array(
                'id' => 444,
                'name' => 'Potosí',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 30,
            ),

            array(
                'id' => 445,
                'name' => 'Santa Cruz',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 30,
            ),

            array(
                'id' => 446,
                'name' => 'Tarija',
                'uuid' => $faker->uuid , 'abbr' => 'T',
                'country_id' => 30,
            ),

            array(
                'id' => 447,
                'name' => 'Bonaire',
                'uuid' => $faker->uuid , 'abbr' => 'BO',
                'country_id' => 31,
            ),

            array(
                'id' => 448,
                'name' => 'Saba',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 31,
            ),

            array(
                'id' => 449,
                'name' => 'Sint Eustatius',
                'uuid' => $faker->uuid , 'abbr' => 'SE',
                'country_id' => 31,
            ),

            array(
                'id' => 450,
                'name' => 'Acre',
                'uuid' => $faker->uuid , 'abbr' => 'AC',
                'country_id' => 32,
            ),

            array(
                'id' => 451,
                'name' => 'Alagoas',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 32,
            ),

            array(
                'id' => 452,
                'name' => 'Amazonas',
                'uuid' => $faker->uuid , 'abbr' => 'AM',
                'country_id' => 32,
            ),

            array(
                'id' => 453,
                'name' => 'Amapá',
                'uuid' => $faker->uuid , 'abbr' => 'AP',
                'country_id' => 32,
            ),

            array(
                'id' => 454,
                'name' => 'Bahia',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 32,
            ),

            array(
                'id' => 455,
                'name' => 'Ceará',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 32,
            ),

            array(
                'id' => 456,
                'name' => 'Distrito Federal',
                'uuid' => $faker->uuid , 'abbr' => 'DF',
                'country_id' => 32,
            ),

            array(
                'id' => 457,
                'name' => 'Espírito Santo',
                'uuid' => $faker->uuid , 'abbr' => 'ES',
                'country_id' => 32,
            ),

            array(
                'id' => 458,
                'name' => 'Goiás',
                'uuid' => $faker->uuid , 'abbr' => 'GO',
                'country_id' => 32,
            ),

            array(
                'id' => 459,
                'name' => 'Maranhão',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 32,
            ),

            array(
                'id' => 460,
                'name' => 'Minas Gerais',
                'uuid' => $faker->uuid , 'abbr' => 'MG',
                'country_id' => 32,
            ),

            array(
                'id' => 461,
                'name' => 'Mato Grosso do Sul',
                'uuid' => $faker->uuid , 'abbr' => 'MS',
                'country_id' => 32,
            ),

            array(
                'id' => 462,
                'name' => 'Mato Grosso',
                'uuid' => $faker->uuid , 'abbr' => 'MT',
                'country_id' => 32,
            ),

            array(
                'id' => 463,
                'name' => 'Pará',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 32,
            ),

            array(
                'id' => 464,
                'name' => 'Paraíba',
                'uuid' => $faker->uuid , 'abbr' => 'PB',
                'country_id' => 32,
            ),

            array(
                'id' => 465,
                'name' => 'Pernambuco',
                'uuid' => $faker->uuid , 'abbr' => 'PE',
                'country_id' => 32,
            ),

            array(
                'id' => 466,
                'name' => 'Piauí',
                'uuid' => $faker->uuid , 'abbr' => 'PI',
                'country_id' => 32,
            ),

            array(
                'id' => 467,
                'name' => 'Paraná',
                'uuid' => $faker->uuid , 'abbr' => 'PR',
                'country_id' => 32,
            ),

            array(
                'id' => 468,
                'name' => 'Rio de Janeiro',
                'uuid' => $faker->uuid , 'abbr' => 'RJ',
                'country_id' => 32,
            ),

            array(
                'id' => 469,
                'name' => 'Rio Grande do Norte',
                'uuid' => $faker->uuid , 'abbr' => 'RN',
                'country_id' => 32,
            ),

            array(
                'id' => 470,
                'name' => 'Rondônia',
                'uuid' => $faker->uuid , 'abbr' => 'RO',
                'country_id' => 32,
            ),

            array(
                'id' => 471,
                'name' => 'Roraima',
                'uuid' => $faker->uuid , 'abbr' => 'RR',
                'country_id' => 32,
            ),

            array(
                'id' => 472,
                'name' => 'Rio Grande do Sul',
                'uuid' => $faker->uuid , 'abbr' => 'RS',
                'country_id' => 32,
            ),

            array(
                'id' => 473,
                'name' => 'Santa Catarina',
                'uuid' => $faker->uuid , 'abbr' => 'SC',
                'country_id' => 32,
            ),

            array(
                'id' => 474,
                'name' => 'Sergipe',
                'uuid' => $faker->uuid , 'abbr' => 'SE',
                'country_id' => 32,
            ),

            array(
                'id' => 475,
                'name' => 'São Paulo',
                'uuid' => $faker->uuid , 'abbr' => 'SP',
                'country_id' => 32,
            ),

            array(
                'id' => 476,
                'name' => 'Tocantins',
                'uuid' => $faker->uuid , 'abbr' => 'TO',
                'country_id' => 32,
            ),

            array(
                'id' => 477,
                'name' => 'Acklins and Crooked Islands',
                'uuid' => $faker->uuid , 'abbr' => 'AC',
                'country_id' => 33,
            ),

            array(
                'id' => 478,
                'name' => 'Bimini',
                'uuid' => $faker->uuid , 'abbr' => 'BI',
                'country_id' => 33,
            ),

            array(
                'id' => 479,
                'name' => 'Cat Island',
                'uuid' => $faker->uuid , 'abbr' => 'CI',
                'country_id' => 33,
            ),

            array(
                'id' => 480,
                'name' => 'Exuma',
                'uuid' => $faker->uuid , 'abbr' => 'EX',
                'country_id' => 33,
            ),

            array(
                'id' => 481,
                'name' => 'Fresh Creek',
                'uuid' => $faker->uuid , 'abbr' => 'FC',
                'country_id' => 33,
            ),

            array(
                'id' => 482,
                'name' => 'Freeport',
                'uuid' => $faker->uuid , 'abbr' => 'FP',
                'country_id' => 33,
            ),

            array(
                'id' => 483,
                'name' => 'Governor\'s Harbour',
                'uuid' => $faker->uuid , 'abbr' => 'GH',
                'country_id' => 33,
            ),

            array(
                'id' => 484,
                'name' => 'Green Turtle Cay',
                'uuid' => $faker->uuid , 'abbr' => 'GT',
                'country_id' => 33,
            ),

            array(
                'id' => 485,
                'name' => 'Harbour Island',
                'uuid' => $faker->uuid , 'abbr' => 'HI',
                'country_id' => 33,
            ),

            array(
                'id' => 486,
                'name' => 'High Rock',
                'uuid' => $faker->uuid , 'abbr' => 'HR',
                'country_id' => 33,
            ),

            array(
                'id' => 487,
                'name' => 'Inagua',
                'uuid' => $faker->uuid , 'abbr' => 'IN',
                'country_id' => 33,
            ),

            array(
                'id' => 488,
                'name' => 'Kemps Bay',
                'uuid' => $faker->uuid , 'abbr' => 'KB',
                'country_id' => 33,
            ),

            array(
                'id' => 489,
                'name' => 'Long Island',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 33,
            ),

            array(
                'id' => 490,
                'name' => 'Mayaguana',
                'uuid' => $faker->uuid , 'abbr' => 'MG',
                'country_id' => 33,
            ),

            array(
                'id' => 491,
                'name' => 'Marsh Harbour',
                'uuid' => $faker->uuid , 'abbr' => 'MH',
                'country_id' => 33,
            ),

            array(
                'id' => 492,
                'name' => 'Nicholls Town and Berry Islands',
                'uuid' => $faker->uuid , 'abbr' => 'NB',
                'country_id' => 33,
            ),

            array(
                'id' => 493,
                'name' => 'New Providence',
                'uuid' => $faker->uuid , 'abbr' => 'NP',
                'country_id' => 33,
            ),

            array(
                'id' => 494,
                'name' => 'Ragged Island',
                'uuid' => $faker->uuid , 'abbr' => 'RI',
                'country_id' => 33,
            ),

            array(
                'id' => 495,
                'name' => 'Rock Sound',
                'uuid' => $faker->uuid , 'abbr' => 'RS',
                'country_id' => 33,
            ),

            array(
                'id' => 496,
                'name' => 'Sandy Point',
                'uuid' => $faker->uuid , 'abbr' => 'SP',
                'country_id' => 33,
            ),

            array(
                'id' => 497,
                'name' => 'San Salvador and Rum Cay',
                'uuid' => $faker->uuid , 'abbr' => 'SR',
                'country_id' => 33,
            ),

            array(
                'id' => 498,
                'name' => 'Paro',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 34,
            ),

            array(
                'id' => 499,
                'name' => 'Chhukha',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 34,
            ),

            array(
                'id' => 500,
                'name' => 'Ha',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 34,
            ),

            array(
                'id' => 501,
                'name' => 'Samtse',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 34,
            ),

            array(
                'id' => 502,
                'name' => 'Thimphu',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 34,
            ),

            array(
                'id' => 503,
                'name' => 'Tsirang',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 34,
            ),

            array(
                'id' => 504,
                'name' => 'Dagana',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 34,
            ),

            array(
                'id' => 505,
                'name' => 'Punakha',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 34,
            ),

            array(
                'id' => 506,
                'name' => 'Wangdue Phodrang',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 34,
            ),

            array(
                'id' => 507,
                'name' => 'Sarpang',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 34,
            ),

            array(
                'id' => 508,
                'name' => 'Trongsa',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 34,
            ),

            array(
                'id' => 509,
                'name' => 'Bumthang',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 34,
            ),

            array(
                'id' => 510,
                'name' => 'Zhemgang',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 34,
            ),

            array(
                'id' => 511,
                'name' => 'Trashigang',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 34,
            ),

            array(
                'id' => 512,
                'name' => 'Monggar',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 34,
            ),

            array(
                'id' => 513,
                'name' => 'Pemagatshel',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 34,
            ),

            array(
                'id' => 514,
                'name' => 'Lhuentse',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 34,
            ),

            array(
                'id' => 515,
                'name' => 'Samdrup Jongkha',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 34,
            ),

            array(
                'id' => 516,
                'name' => 'Gasa',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 34,
            ),

            array(
                'id' => 517,
                'name' => 'Trashi Yangtse',
                'uuid' => $faker->uuid , 'abbr' => 'TY',
                'country_id' => 34,
            ),

            array(
                'id' => 518,
                'name' => 'Central',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 36,
            ),

            array(
                'id' => 519,
                'name' => 'Ghanzi',
                'uuid' => $faker->uuid , 'abbr' => 'GH',
                'country_id' => 36,
            ),

            array(
                'id' => 520,
                'name' => 'Kgalagadi',
                'uuid' => $faker->uuid , 'abbr' => 'KG',
                'country_id' => 36,
            ),

            array(
                'id' => 521,
                'name' => 'Kgatleng',
                'uuid' => $faker->uuid , 'abbr' => 'KL',
                'country_id' => 36,
            ),

            array(
                'id' => 522,
                'name' => 'Kweneng',
                'uuid' => $faker->uuid , 'abbr' => 'KW',
                'country_id' => 36,
            ),

            array(
                'id' => 523,
                'name' => 'North-East',
                'uuid' => $faker->uuid , 'abbr' => 'NE',
                'country_id' => 36,
            ),

            array(
                'id' => 524,
                'name' => 'North-West',
                'uuid' => $faker->uuid , 'abbr' => 'NW',
                'country_id' => 36,
            ),

            array(
                'id' => 525,
                'name' => 'South-East',
                'uuid' => $faker->uuid , 'abbr' => 'SE',
                'country_id' => 36,
            ),

            array(
                'id' => 526,
                'name' => 'Southern',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 36,
            ),

            array(
                'id' => 527,
                'name' => 'Brestskaya voblasts\' (be) Brestskaya oblast\' (ru)',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 37,
            ),

            array(
                'id' => 528,
                'name' => 'Homyel\'skaya voblasts\' (be) Gomel\'skaya oblast\' (ru)',
                'uuid' => $faker->uuid , 'abbr' => 'HO',
                'country_id' => 37,
            ),

            array(
                'id' => 529,
                'name' => 'Hrodzenskaya voblasts\' (be) Grodnenskaya oblast\' (ru)',
                'uuid' => $faker->uuid , 'abbr' => 'HR',
                'country_id' => 37,
            ),

            array(
                'id' => 530,
                'name' => 'Mahilyowskaya voblasts\' (be) Mogilevskaya oblast\' (ru)',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 37,
            ),

            array(
                'id' => 531,
                'name' => 'Minskaya voblasts\' (be) Minskaya oblast\' (ru)',
                'uuid' => $faker->uuid , 'abbr' => 'MI',
                'country_id' => 37,
            ),

            array(
                'id' => 532,
                'name' => 'Vitsyebskaya voblasts\' (be) Vitebskaya oblast\' (ru)',
                'uuid' => $faker->uuid , 'abbr' => 'VI',
                'country_id' => 37,
            ),

            array(
                'id' => 533,
                'name' => 'Horad Minsk',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 37,
            ),

            array(
                'id' => 534,
                'name' => 'Belize',
                'uuid' => $faker->uuid , 'abbr' => 'BZ',
                'country_id' => 38,
            ),

            array(
                'id' => 535,
                'name' => 'Cayo',
                'uuid' => $faker->uuid , 'abbr' => 'CY',
                'country_id' => 38,
            ),

            array(
                'id' => 536,
                'name' => 'Corozal',
                'uuid' => $faker->uuid , 'abbr' => 'CZL',
                'country_id' => 38,
            ),

            array(
                'id' => 537,
                'name' => 'Orange Walk',
                'uuid' => $faker->uuid , 'abbr' => 'OW',
                'country_id' => 38,
            ),

            array(
                'id' => 538,
                'name' => 'Stann Creek',
                'uuid' => $faker->uuid , 'abbr' => 'SC',
                'country_id' => 38,
            ),

            array(
                'id' => 539,
                'name' => 'Toledo',
                'uuid' => $faker->uuid , 'abbr' => 'TOL',
                'country_id' => 38,
            ),

            array(
                'id' => 540,
                'name' => 'Alberta',
                'uuid' => $faker->uuid , 'abbr' => 'AB',
                'country_id' => 39,
            ),

            array(
                'id' => 541,
                'name' => 'British Columbia',
                'uuid' => $faker->uuid , 'abbr' => 'BC',
                'country_id' => 39,
            ),

            array(
                'id' => 542,
                'name' => 'Manitoba',
                'uuid' => $faker->uuid , 'abbr' => 'MB',
                'country_id' => 39,
            ),

            array(
                'id' => 543,
                'name' => 'New Brunswick',
                'uuid' => $faker->uuid , 'abbr' => 'NB',
                'country_id' => 39,
            ),

            array(
                'id' => 544,
                'name' => 'Newfoundland and Labrador',
                'uuid' => $faker->uuid , 'abbr' => 'NL',
                'country_id' => 39,
            ),

            array(
                'id' => 545,
                'name' => 'Nova Scotia',
                'uuid' => $faker->uuid , 'abbr' => 'NS',
                'country_id' => 39,
            ),

            array(
                'id' => 546,
                'name' => 'Northwest Territories',
                'uuid' => $faker->uuid , 'abbr' => 'NT',
                'country_id' => 39,
            ),

            array(
                'id' => 547,
                'name' => 'Nunavut',
                'uuid' => $faker->uuid , 'abbr' => 'NU',
                'country_id' => 39,
            ),

            array(
                'id' => 548,
                'name' => 'Ontario',
                'uuid' => $faker->uuid , 'abbr' => 'ON',
                'country_id' => 39,
            ),

            array(
                'id' => 549,
                'name' => 'Prince Edward Island',
                'uuid' => $faker->uuid , 'abbr' => 'PE',
                'country_id' => 39,
            ),

            array(
                'id' => 550,
                'name' => 'Quebec',
                'uuid' => $faker->uuid , 'abbr' => 'QC',
                'country_id' => 39,
            ),

            array(
                'id' => 551,
                'name' => 'Saskatchewan',
                'uuid' => $faker->uuid , 'abbr' => 'SK',
                'country_id' => 39,
            ),

            array(
                'id' => 552,
                'name' => 'Yukon',
                'uuid' => $faker->uuid , 'abbr' => 'YT',
                'country_id' => 39,
            ),

            array(
                'id' => 553,
                'name' => 'Bas-Congo',
                'uuid' => $faker->uuid , 'abbr' => 'BC',
                'country_id' => 41,
            ),

            array(
                'id' => 554,
                'name' => 'Bandundu',
                'uuid' => $faker->uuid , 'abbr' => 'BN',
                'country_id' => 41,
            ),

            array(
                'id' => 555,
                'name' => 'Équateur',
                'uuid' => $faker->uuid , 'abbr' => 'EQ',
                'country_id' => 41,
            ),

            array(
                'id' => 556,
                'name' => 'Katanga',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 41,
            ),

            array(
                'id' => 557,
                'name' => 'Kasai-Oriental',
                'uuid' => $faker->uuid , 'abbr' => 'KE',
                'country_id' => 41,
            ),

            array(
                'id' => 558,
                'name' => 'Kinshasa',
                'uuid' => $faker->uuid , 'abbr' => 'KN',
                'country_id' => 41,
            ),

            array(
                'id' => 559,
                'name' => 'Kasai-Occidental',
                'uuid' => $faker->uuid , 'abbr' => 'KW',
                'country_id' => 41,
            ),

            array(
                'id' => 560,
                'name' => 'Maniema',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 41,
            ),

            array(
                'id' => 561,
                'name' => 'Nord-Kivu',
                'uuid' => $faker->uuid , 'abbr' => 'NK',
                'country_id' => 41,
            ),

            array(
                'id' => 562,
                'name' => 'Orientale',
                'uuid' => $faker->uuid , 'abbr' => 'OR',
                'country_id' => 41,
            ),

            array(
                'id' => 563,
                'name' => 'Sud-Kivu',
                'uuid' => $faker->uuid , 'abbr' => 'SK',
                'country_id' => 41,
            ),

            array(
                'id' => 564,
                'name' => 'Ouham',
                'uuid' => $faker->uuid , 'abbr' => 'AC',
                'country_id' => 42,
            ),

            array(
                'id' => 565,
                'name' => 'Bamingui-Bangoran',
                'uuid' => $faker->uuid , 'abbr' => 'BB',
                'country_id' => 42,
            ),

            array(
                'id' => 566,
                'name' => 'Bangui',
                'uuid' => $faker->uuid , 'abbr' => 'BGF',
                'country_id' => 42,
            ),

            array(
                'id' => 567,
                'name' => 'Basse-Kotto',
                'uuid' => $faker->uuid , 'abbr' => 'BK',
                'country_id' => 42,
            ),

            array(
                'id' => 568,
                'name' => 'Haute-Kotto',
                'uuid' => $faker->uuid , 'abbr' => 'HK',
                'country_id' => 42,
            ),

            array(
                'id' => 569,
                'name' => 'Haut-Mbomou',
                'uuid' => $faker->uuid , 'abbr' => 'HM',
                'country_id' => 42,
            ),

            array(
                'id' => 570,
                'name' => 'Mambéré-Kadéï',
                'uuid' => $faker->uuid , 'abbr' => 'HS',
                'country_id' => 42,
            ),

            array(
                'id' => 571,
                'name' => 'Nana-Grébizi',
                'uuid' => $faker->uuid , 'abbr' => 'KB',
                'country_id' => 42,
            ),

            array(
                'id' => 572,
                'name' => 'Kémo',
                'uuid' => $faker->uuid , 'abbr' => 'KG',
                'country_id' => 42,
            ),

            array(
                'id' => 573,
                'name' => 'Lobaye',
                'uuid' => $faker->uuid , 'abbr' => 'LB',
                'country_id' => 42,
            ),

            array(
                'id' => 574,
                'name' => 'Mbomou',
                'uuid' => $faker->uuid , 'abbr' => 'MB',
                'country_id' => 42,
            ),

            array(
                'id' => 575,
                'name' => 'Ombella-Mpoko',
                'uuid' => $faker->uuid , 'abbr' => 'MP',
                'country_id' => 42,
            ),

            array(
                'id' => 576,
                'name' => 'Nana-Mambéré',
                'uuid' => $faker->uuid , 'abbr' => 'NM',
                'country_id' => 42,
            ),

            array(
                'id' => 577,
                'name' => 'Ouham-Pendé',
                'uuid' => $faker->uuid , 'abbr' => 'OP',
                'country_id' => 42,
            ),

            array(
                'id' => 578,
                'name' => 'Sangha-Mbaéré',
                'uuid' => $faker->uuid , 'abbr' => 'SE',
                'country_id' => 42,
            ),

            array(
                'id' => 579,
                'name' => 'Ouaka',
                'uuid' => $faker->uuid , 'abbr' => 'UK',
                'country_id' => 42,
            ),

            array(
                'id' => 580,
                'name' => 'Vakaga',
                'uuid' => $faker->uuid , 'abbr' => 'VK',
                'country_id' => 42,
            ),

            array(
                'id' => 581,
                'name' => 'Bouenza',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 43,
            ),

            array(
                'id' => 582,
                'name' => 'Pool',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 43,
            ),

            array(
                'id' => 583,
                'name' => 'Sangha',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 43,
            ),

            array(
                'id' => 584,
                'name' => 'Plateaux',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 43,
            ),

            array(
                'id' => 585,
                'name' => 'Cuvette-Ouest',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 43,
            ),

            array(
                'id' => 586,
                'name' => 'Lékoumou',
                'uuid' => $faker->uuid , 'abbr' => 2,
                'country_id' => 43,
            ),

            array(
                'id' => 587,
                'name' => 'Kouilou',
                'uuid' => $faker->uuid , 'abbr' => 5,
                'country_id' => 43,
            ),

            array(
                'id' => 588,
                'name' => 'Likouala',
                'uuid' => $faker->uuid , 'abbr' => 7,
                'country_id' => 43,
            ),

            array(
                'id' => 589,
                'name' => 'Cuvette',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 43,
            ),

            array(
                'id' => 590,
                'name' => 'Niari',
                'uuid' => $faker->uuid , 'abbr' => 9,
                'country_id' => 43,
            ),

            array(
                'id' => 591,
                'name' => 'Brazzaville',
                'uuid' => $faker->uuid , 'abbr' => 'BZV',
                'country_id' => 43,
            ),

            array(
                'id' => 592,
                'name' => 'Aargau (de)',
                'uuid' => $faker->uuid , 'abbr' => 'AG',
                'country_id' => 44,
            ),

            array(
                'id' => 593,
                'name' => 'Appenzell Innerrhoden (de)',
                'uuid' => $faker->uuid , 'abbr' => 'AI',
                'country_id' => 44,
            ),

            array(
                'id' => 594,
                'name' => 'Appenzell Ausserrhoden (de)',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 44,
            ),

            array(
                'id' => 595,
                'name' => 'Bern (de)',
                'uuid' => $faker->uuid , 'abbr' => 'BE',
                'country_id' => 44,
            ),

            array(
                'id' => 596,
                'name' => 'Basel-Landschaft (de)',
                'uuid' => $faker->uuid , 'abbr' => 'BL',
                'country_id' => 44,
            ),

            array(
                'id' => 597,
                'name' => 'Basel-Stadt (de)',
                'uuid' => $faker->uuid , 'abbr' => 'BS',
                'country_id' => 44,
            ),

            array(
                'id' => 598,
                'name' => 'Fribourg (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'FR',
                'country_id' => 44,
            ),

            array(
                'id' => 599,
                'name' => 'Genève (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'GE',
                'country_id' => 44,
            ),

            array(
                'id' => 600,
                'name' => 'Glarus (de)',
                'uuid' => $faker->uuid , 'abbr' => 'GL',
                'country_id' => 44,
            ),

            array(
                'id' => 601,
                'name' => 'Graubünden (de)',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 44,
            ),

            array(
                'id' => 602,
                'name' => 'Jura (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'JU',
                'country_id' => 44,
            ),

            array(
                'id' => 603,
                'name' => 'Luzern (de)',
                'uuid' => $faker->uuid , 'abbr' => 'LU',
                'country_id' => 44,
            ),

            array(
                'id' => 604,
                'name' => 'Neuchâtel (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'NE',
                'country_id' => 44,
            ),

            array(
                'id' => 605,
                'name' => 'Nidwalden (de)',
                'uuid' => $faker->uuid , 'abbr' => 'NW',
                'country_id' => 44,
            ),

            array(
                'id' => 606,
                'name' => 'Obwalden (de)',
                'uuid' => $faker->uuid , 'abbr' => 'OW',
                'country_id' => 44,
            ),

            array(
                'id' => 607,
                'name' => 'Sankt Gallen (de)',
                'uuid' => $faker->uuid , 'abbr' => 'SG',
                'country_id' => 44,
            ),

            array(
                'id' => 608,
                'name' => 'Schaffhausen (de)',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 44,
            ),

            array(
                'id' => 609,
                'name' => 'Solothurn (de)',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 44,
            ),

            array(
                'id' => 610,
                'name' => 'Schwyz (de)',
                'uuid' => $faker->uuid , 'abbr' => 'SZ',
                'country_id' => 44,
            ),

            array(
                'id' => 611,
                'name' => 'Thurgau (de)',
                'uuid' => $faker->uuid , 'abbr' => 'TG',
                'country_id' => 44,
            ),

            array(
                'id' => 612,
                'name' => 'Ticino (it)',
                'uuid' => $faker->uuid , 'abbr' => 'TI',
                'country_id' => 44,
            ),

            array(
                'id' => 613,
                'name' => 'Uri (de)',
                'uuid' => $faker->uuid , 'abbr' => 'UR',
                'country_id' => 44,
            ),

            array(
                'id' => 614,
                'name' => 'Vaud (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'VD',
                'country_id' => 44,
            ),

            array(
                'id' => 615,
                'name' => 'Valais (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'VS',
                'country_id' => 44,
            ),

            array(
                'id' => 616,
                'name' => 'Zug (de)',
                'uuid' => $faker->uuid , 'abbr' => 'ZG',
                'country_id' => 44,
            ),

            array(
                'id' => 617,
                'name' => 'Zürich (de)',
                'uuid' => $faker->uuid , 'abbr' => 'ZH',
                'country_id' => 44,
            ),

            array(
                'id' => 618,
                'name' => 'Lagunes (Région des)',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 45,
            ),

            array(
                'id' => 619,
                'name' => 'Haut-Sassandra (Région du)',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 45,
            ),

            array(
                'id' => 620,
                'name' => 'Savanes (Région des)',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 45,
            ),

            array(
                'id' => 621,
                'name' => 'Vallée du Bandama (Région de la)',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 45,
            ),

            array(
                'id' => 622,
                'name' => 'Moyen-Comoé (Région du)',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 45,
            ),

            array(
                'id' => 623,
                'name' => '18 Montagnes (Région des)',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 45,
            ),

            array(
                'id' => 624,
                'name' => 'Lacs (Région des)',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 45,
            ),

            array(
                'id' => 625,
                'name' => 'Zanzan (Région du)',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 45,
            ),

            array(
                'id' => 626,
                'name' => 'Bas-Sassandra (Région du)',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 45,
            ),

            array(
                'id' => 627,
                'name' => 'Denguélé (Région du)',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 45,
            ),

            array(
                'id' => 628,
                'name' => 'Nzi-Comoé (Région)',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 45,
            ),

            array(
                'id' => 629,
                'name' => 'Marahoué (Région de la)',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 45,
            ),

            array(
                'id' => 630,
                'name' => 'Sud-Comoé (Région du)',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 45,
            ),

            array(
                'id' => 631,
                'name' => 'Worodougou (Région du)',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 45,
            ),

            array(
                'id' => 632,
                'name' => 'Sud-Bandama (Région du)',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 45,
            ),

            array(
                'id' => 633,
                'name' => 'Agnébi (Région de l\')',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 45,
            ),

            array(
                'id' => 634,
                'name' => 'Bafing (Région du)',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 45,
            ),

            array(
                'id' => 635,
                'name' => 'Fromager (Région du)',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 45,
            ),

            array(
                'id' => 636,
                'name' => 'Moyen-Cavally (Région du)',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 45,
            ),

            array(
                'id' => 637,
                'name' => 'Aisén del General Carlos Ibáñez del Campo',
                'uuid' => $faker->uuid , 'abbr' => 'AI',
                'country_id' => 47,
            ),

            array(
                'id' => 638,
                'name' => 'Antofagasta',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 47,
            ),

            array(
                'id' => 639,
                'name' => 'Araucanía',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 47,
            ),

            array(
                'id' => 640,
                'name' => 'Arica y Parinacota',
                'uuid' => $faker->uuid , 'abbr' => 'AP',
                'country_id' => 47,
            ),

            array(
                'id' => 641,
                'name' => 'Atacama',
                'uuid' => $faker->uuid , 'abbr' => 'AT',
                'country_id' => 47,
            ),

            array(
                'id' => 642,
                'name' => 'Bío-Bío',
                'uuid' => $faker->uuid , 'abbr' => 'BI',
                'country_id' => 47,
            ),

            array(
                'id' => 643,
                'name' => 'Coquimbo',
                'uuid' => $faker->uuid , 'abbr' => 'CO',
                'country_id' => 47,
            ),

            array(
                'id' => 644,
                'name' => 'Libertador General Bernardo O\'Higgins',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 47,
            ),

            array(
                'id' => 645,
                'name' => 'Los Lagos',
                'uuid' => $faker->uuid , 'abbr' => 'LL',
                'country_id' => 47,
            ),

            array(
                'id' => 646,
                'name' => 'Los Ríos',
                'uuid' => $faker->uuid , 'abbr' => 'LR',
                'country_id' => 47,
            ),

            array(
                'id' => 647,
                'name' => 'Magallanes',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 47,
            ),

            array(
                'id' => 648,
                'name' => 'Maule',
                'uuid' => $faker->uuid , 'abbr' => 'ML',
                'country_id' => 47,
            ),

            array(
                'id' => 649,
                'name' => 'Región Metropolitana de Santiago',
                'uuid' => $faker->uuid , 'abbr' => 'RM',
                'country_id' => 47,
            ),

            array(
                'id' => 650,
                'name' => 'Tarapacá',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 47,
            ),

            array(
                'id' => 651,
                'name' => 'Valparaíso',
                'uuid' => $faker->uuid , 'abbr' => 'VS',
                'country_id' => 47,
            ),

            array(
                'id' => 652,
                'name' => 'Adamaoua',
                'uuid' => $faker->uuid , 'abbr' => 'AD',
                'country_id' => 48,
            ),

            array(
                'id' => 653,
                'name' => 'Centre',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 48,
            ),

            array(
                'id' => 654,
                'name' => 'Far North',
                'uuid' => $faker->uuid , 'abbr' => 'EN',
                'country_id' => 48,
            ),

            array(
                'id' => 655,
                'name' => 'East',
                'uuid' => $faker->uuid , 'abbr' => 'ES',
                'country_id' => 48,
            ),

            array(
                'id' => 656,
                'name' => 'Littoral',
                'uuid' => $faker->uuid , 'abbr' => 'LT',
                'country_id' => 48,
            ),

            array(
                'id' => 657,
                'name' => 'North',
                'uuid' => $faker->uuid , 'abbr' => 'NO',
                'country_id' => 48,
            ),

            array(
                'id' => 658,
                'name' => 'North-West',
                'uuid' => $faker->uuid , 'abbr' => 'NW',
                'country_id' => 48,
            ),

            array(
                'id' => 659,
                'name' => 'West',
                'uuid' => $faker->uuid , 'abbr' => 'OU',
                'country_id' => 48,
            ),

            array(
                'id' => 660,
                'name' => 'South',
                'uuid' => $faker->uuid , 'abbr' => 'SU',
                'country_id' => 48,
            ),

            array(
                'id' => 661,
                'name' => 'South-West',
                'uuid' => $faker->uuid , 'abbr' => 'SW',
                'country_id' => 48,
            ),

            array(
                'id' => 662,
                'name' => 'Beijing',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 49,
            ),

            array(
                'id' => 663,
                'name' => 'Tianjin',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 49,
            ),

            array(
                'id' => 664,
                'name' => 'Hebei',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 49,
            ),

            array(
                'id' => 665,
                'name' => 'Shanxi',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 49,
            ),

            array(
                'id' => 666,
                'name' => 'Nei Mongol (mn)',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 49,
            ),

            array(
                'id' => 667,
                'name' => 'Liaoning',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 49,
            ),

            array(
                'id' => 668,
                'name' => 'Jilin',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 49,
            ),

            array(
                'id' => 669,
                'name' => 'Heilongjiang',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 49,
            ),

            array(
                'id' => 670,
                'name' => 'Shanghai',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 49,
            ),

            array(
                'id' => 671,
                'name' => 'Jiangsu',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 49,
            ),

            array(
                'id' => 672,
                'name' => 'Zhejiang',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 49,
            ),

            array(
                'id' => 673,
                'name' => 'Anhui',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 49,
            ),

            array(
                'id' => 674,
                'name' => 'Fujian',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 49,
            ),

            array(
                'id' => 675,
                'name' => 'Jiangxi',
                'uuid' => $faker->uuid , 'abbr' => 36,
                'country_id' => 49,
            ),

            array(
                'id' => 676,
                'name' => 'Shandong',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 49,
            ),

            array(
                'id' => 677,
                'name' => 'Henan',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 49,
            ),

            array(
                'id' => 678,
                'name' => 'Hubei',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 49,
            ),

            array(
                'id' => 679,
                'name' => 'Hunan',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 49,
            ),

            array(
                'id' => 680,
                'name' => 'Guangdong',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 49,
            ),

            array(
                'id' => 681,
                'name' => 'Guangxi',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 49,
            ),

            array(
                'id' => 682,
                'name' => 'Hainan',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 49,
            ),

            array(
                'id' => 683,
                'name' => 'Chongqing',
                'uuid' => $faker->uuid , 'abbr' => 50,
                'country_id' => 49,
            ),

            array(
                'id' => 684,
                'name' => 'Sichuan',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 49,
            ),

            array(
                'id' => 685,
                'name' => 'Guizhou',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 49,
            ),

            array(
                'id' => 686,
                'name' => 'Yunnan',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 49,
            ),

            array(
                'id' => 687,
                'name' => 'Xizang',
                'uuid' => $faker->uuid , 'abbr' => 54,
                'country_id' => 49,
            ),

            array(
                'id' => 688,
                'name' => 'Shaanxi',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 49,
            ),

            array(
                'id' => 689,
                'name' => 'Gansu',
                'uuid' => $faker->uuid , 'abbr' => 62,
                'country_id' => 49,
            ),

            array(
                'id' => 690,
                'name' => 'Qinghai',
                'uuid' => $faker->uuid , 'abbr' => 63,
                'country_id' => 49,
            ),

            array(
                'id' => 691,
                'name' => 'Ningxia',
                'uuid' => $faker->uuid , 'abbr' => 64,
                'country_id' => 49,
            ),

            array(
                'id' => 692,
                'name' => 'Xinjiang',
                'uuid' => $faker->uuid , 'abbr' => 65,
                'country_id' => 49,
            ),

            array(
                'id' => 693,
                'name' => 'Taiwan *',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 49,
            ),

            array(
                'id' => 694,
                'name' => 'Xianggang (zh) **',
                'uuid' => $faker->uuid , 'abbr' => 91,
                'country_id' => 49,
            ),

            array(
                'id' => 695,
                'name' => 'Aomen (zh) ***',
                'uuid' => $faker->uuid , 'abbr' => 92,
                'country_id' => 49,
            ),
            array(

                'id' => '696',
                'name' => 'AMAZONAS',
                'abbr' => 'AMA',
                'uuid' => $faker->uuid,
                'country_id' => 50,

            ),

            array(
                'id' => '697',
                'name' => 'ANTIOQUIA',
                'abbr' => 'ANT',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '698',
                'name' => 'ARAUCA',
                'abbr' => 'ARA',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '699',
                'name' => 'ATLANTICO',
                'abbr' => 'ATL',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '700',
                'name' => 'BOLIVAR',
                'abbr' => 'BOL',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '701',
                'name' => 'BOYACA',
                'abbr' => 'BOY',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '702',
                'name' => 'CALDAS',
                'abbr' => 'CAL',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '703',
                'name' => 'CAQUETA',
                'abbr' => 'CAQ',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '704',
                'name' => 'CASANARE',
                'abbr' => 'CAS',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '705',
                'name' => 'CAUCA',
                'abbr' => 'CAU',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '706',
                'name' => 'CESAR',
                'abbr' => 'CES',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '707',
                'name' => 'CHOCO',
                'abbr' => 'CHO',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '708',
                'name' => 'CORDOBA',
                'abbr' => 'COR',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '709',
                'name' => 'CUNDINAMARCA',
                'abbr' => 'CUN',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '710',
                'name' => 'GUANINA',
                'abbr' => 'GUA',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '711',
                'name' => 'GUAVIARE',
                'abbr' => 'GUV',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '712',
                'name' => 'HUILA',
                'abbr' => 'HUI',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '713',
                'name' => 'LA GUAJIRA',
                'abbr' => 'LAG',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '714',
                'name' => 'MAGDALENA',
                'abbr' => 'MAG',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '715',
                'name' => 'META',
                'abbr' => 'MET',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '716',
                'name' => 'NARIÑO',
                'abbr' => 'NAR',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '717',
                'name' => 'NORTE DE SANTANDER',
                'abbr' => 'NDS',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '718',
                'name' => 'PUTUMAYO',
                'abbr' => 'PUT',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '719',
                'name' => 'QUINDIO',
                'abbr' => 'QUI',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '720',
                'name' => 'RISARALDA',
                'abbr' => 'RIS',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '721',
                'name' => 'SAN ANDRES Y PROVIDENCIA',
                'abbr' => 'SAP',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '722',
                'name' => 'SANTANDER',
                'abbr' => 'SAN',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '723',
                'name' => 'SUCRE',
                'abbr' => 'SUC',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '724',
                'name' => 'TOLIMA',
                'abbr' => 'TOL',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '725',
                'name' => 'VALLE',
                'abbr' => 'VAC',
                'uuida' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '726',
                'name' => 'VAUPES',
                'abbr' => 'VAP',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '727',
                'name' => 'VICHADA',
                'abbr' => 'VIC',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),

            array(
                'id' => '728',
                'name' => 'VICHADA',
                'abbr' => 'VIC',
                'uuid' => $faker->uuid,
                'country_id' => 50,
            ),
            array(
                'id' => 729,
                'name' => 'Alajuela',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 51,
            ),

            array(
                'id' => 730,
                'name' => 'Cartago',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 51,
            ),

            array(
                'id' => 731,
                'name' => 'Guanacaste',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 51,
            ),

            array(
                'id' => 732,
                'name' => 'Heredia',
                'uuid' => $faker->uuid , 'abbr' => 'H',
                'country_id' => 51,
            ),

            array(
                'id' => 733,
                'name' => 'Limón',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 51,
            ),

            array(
                'id' => 734,
                'name' => 'Puntarenas',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 51,
            ),

            array(
                'id' => 735,
                'name' => 'San José',
                'uuid' => $faker->uuid , 'abbr' => 'SJ',
                'country_id' => 51,
            ),

            array(
                'id' => 736,
                'name' => 'Pinar del Río',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 52,
            ),

            array(
                'id' => 737,
                'name' => 'Antigua provincia de La Habana',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 52,
            ),

            array(
                'id' => 738,
                'name' => 'La Habana',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 52,
            ),

            array(
                'id' => 739,
                'name' => 'Matanzas',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 52,
            ),

            array(
                'id' => 740,
                'name' => 'Villa Clara',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 52,
            ),

            array(
                'id' => 741,
                'name' => 'Cienfuegos',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 52,
            ),

            array(
                'id' => 742,
                'name' => 'Sancti Spíritus',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 52,
            ),

            array(
                'id' => 743,
                'name' => 'Ciego de Ávila',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 52,
            ),

            array(
                'id' => 744,
                'name' => 'Camagüey',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 52,
            ),

            array(
                'id' => 745,
                'name' => 'Las Tunas',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 52,
            ),

            array(
                'id' => 746,
                'name' => 'Holguín',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 52,
            ),

            array(
                'id' => 747,
                'name' => 'Granma',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 52,
            ),

            array(
                'id' => 748,
                'name' => 'Santiago de Cuba',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 52,
            ),

            array(
                'id' => 749,
                'name' => 'Guantánamo',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 52,
            ),

            array(
                'id' => 750,
                'name' => 'Artemisa',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 52,
            ),

            array(
                'id' => 751,
                'name' => 'Mayabeque',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 52,
            ),

            array(
                'id' => 752,
                'name' => 'Isla de la Juventud',
                'uuid' => $faker->uuid , 'abbr' => 99,
                'country_id' => 52,
            ),

            array(
                'id' => 753,
                'name' => 'Brava',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 53,
            ),

            array(
                'id' => 754,
                'name' => 'Boa Vista',
                'uuid' => $faker->uuid , 'abbr' => 'BV',
                'country_id' => 53,
            ),

            array(
                'id' => 755,
                'name' => 'Santa Catarina',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 53,
            ),

            array(
                'id' => 756,
                'name' => 'Santa Cruz',
                'uuid' => $faker->uuid , 'abbr' => 'CR',
                'country_id' => 53,
            ),

            array(
                'id' => 757,
                'name' => 'Calheta de São Miguel',
                'uuid' => $faker->uuid , 'abbr' => 'CS',
                'country_id' => 53,
            ),

            array(
                'id' => 758,
                'name' => 'Maio',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 53,
            ),

            array(
                'id' => 759,
                'name' => 'Mosteiros',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 53,
            ),

            array(
                'id' => 760,
                'name' => 'Paúl',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 53,
            ),

            array(
                'id' => 761,
                'name' => 'Porto Novo',
                'uuid' => $faker->uuid , 'abbr' => 'PN',
                'country_id' => 53,
            ),

            array(
                'id' => 762,
                'name' => 'Praia',
                'uuid' => $faker->uuid , 'abbr' => 'PR',
                'country_id' => 53,
            ),

            array(
                'id' => 763,
                'name' => 'Ribeira Grande',
                'uuid' => $faker->uuid , 'abbr' => 'RG',
                'country_id' => 53,
            ),

            array(
                'id' => 764,
                'name' => 'São Domingos',
                'uuid' => $faker->uuid , 'abbr' => 'SD',
                'country_id' => 53,
            ),

            array(
                'id' => 765,
                'name' => 'São Filipe',
                'uuid' => $faker->uuid , 'abbr' => 'SF',
                'country_id' => 53,
            ),

            array(
                'id' => 766,
                'name' => 'Sal',
                'uuid' => $faker->uuid , 'abbr' => 'SL',
                'country_id' => 53,
            ),

            array(
                'id' => 767,
                'name' => 'São Nicolau',
                'uuid' => $faker->uuid , 'abbr' => 'SN',
                'country_id' => 53,
            ),

            array(
                'id' => 768,
                'name' => 'São Vicente',
                'uuid' => $faker->uuid , 'abbr' => 'SV',
                'country_id' => 53,
            ),

            array(
                'id' => 769,
                'name' => 'Tarrafal',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 53,
            ),

            array(
                'id' => 770,
                'name' => 'Lefkosia',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 56,
            ),

            array(
                'id' => 771,
                'name' => 'Lemesos',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 56,
            ),

            array(
                'id' => 772,
                'name' => 'Larnaka',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 56,
            ),

            array(
                'id' => 773,
                'name' => 'Ammochostos',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 56,
            ),

            array(
                'id' => 774,
                'name' => 'Pafos',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 56,
            ),

            array(
                'id' => 775,
                'name' => 'Keryneia',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 56,
            ),

            array(
                'id' => 776,
                'name' => 'Jihočeský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'JC',
                'country_id' => 57,
            ),

            array(
                'id' => 777,
                'name' => 'Jihomoravský kraj ',
                'uuid' => $faker->uuid , 'abbr' => 'JM',
                'country_id' => 57,
            ),

            array(
                'id' => 778,
                'name' => 'Karlovarský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 57,
            ),

            array(
                'id' => 779,
                'name' => 'Královéhradecký kraj',
                'uuid' => $faker->uuid , 'abbr' => 'KR',
                'country_id' => 57,
            ),

            array(
                'id' => 780,
                'name' => 'Liberecký kraj',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 57,
            ),

            array(
                'id' => 781,
                'name' => 'Moravskoslezský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 57,
            ),

            array(
                'id' => 782,
                'name' => 'Olomoucký kraj',
                'uuid' => $faker->uuid , 'abbr' => 'OL',
                'country_id' => 57,
            ),

            array(
                'id' => 783,
                'name' => 'Pardubický kraj',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 57,
            ),

            array(
                'id' => 784,
                'name' => 'Plzeňský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'PL',
                'country_id' => 57,
            ),

            array(
                'id' => 785,
                'name' => 'Praha, hlavní město',
                'uuid' => $faker->uuid , 'abbr' => 'PR',
                'country_id' => 57,
            ),

            array(
                'id' => 786,
                'name' => 'Středočeský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'ST',
                'country_id' => 57,
            ),

            array(
                'id' => 787,
                'name' => 'Ústecký kraj',
                'uuid' => $faker->uuid , 'abbr' => 'US',
                'country_id' => 57,
            ),

            array(
                'id' => 788,
                'name' => 'Vysočina',
                'uuid' => $faker->uuid , 'abbr' => 'VY',
                'country_id' => 57,
            ),

            array(
                'id' => 789,
                'name' => 'Zlínský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'ZL',
                'country_id' => 57,
            ),

            array(
                'id' => 790,
                'name' => 'Brandenburg',
                'uuid' => $faker->uuid , 'abbr' => 'BB',
                'country_id' => 58,
            ),

            array(
                'id' => 791,
                'name' => 'Berlin',
                'uuid' => $faker->uuid , 'abbr' => 'BE',
                'country_id' => 58,
            ),

            array(
                'id' => 792,
                'name' => 'Baden-Württemberg',
                'uuid' => $faker->uuid , 'abbr' => 'BW',
                'country_id' => 58,
            ),

            array(
                'id' => 793,
                'name' => 'Bayern',
                'uuid' => $faker->uuid , 'abbr' => 'BY',
                'country_id' => 58,
            ),

            array(
                'id' => 794,
                'name' => 'Bremen',
                'uuid' => $faker->uuid , 'abbr' => 'HB',
                'country_id' => 58,
            ),

            array(
                'id' => 795,
                'name' => 'Hessen',
                'uuid' => $faker->uuid , 'abbr' => 'HE',
                'country_id' => 58,
            ),

            array(
                'id' => 796,
                'name' => 'Hamburg',
                'uuid' => $faker->uuid , 'abbr' => 'HH',
                'country_id' => 58,
            ),

            array(
                'id' => 797,
                'name' => 'Mecklenburg-Vorpommern',
                'uuid' => $faker->uuid , 'abbr' => 'MV',
                'country_id' => 58,
            ),

            array(
                'id' => 798,
                'name' => 'Niedersachsen',
                'uuid' => $faker->uuid , 'abbr' => 'NI',
                'country_id' => 58,
            ),

            array(
                'id' => 799,
                'name' => 'Nordrhein-Westfalen',
                'uuid' => $faker->uuid , 'abbr' => 'NW',
                'country_id' => 58,
            ),

            array(
                'id' => 800,
                'name' => 'Rheinland-Pfalz',
                'uuid' => $faker->uuid , 'abbr' => 'RP',
                'country_id' => 58,
            ),

            array(
                'id' => 801,
                'name' => 'Schleswig-Holstein',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 58,
            ),

            array(
                'id' => 802,
                'name' => 'Saarland',
                'uuid' => $faker->uuid , 'abbr' => 'SL',
                'country_id' => 58,
            ),

            array(
                'id' => 803,
                'name' => 'Sachsen',
                'uuid' => $faker->uuid , 'abbr' => 'SN',
                'country_id' => 58,
            ),

            array(
                'id' => 804,
                'name' => 'Sachsen-Anhalt',
                'uuid' => $faker->uuid , 'abbr' => 'ST',
                'country_id' => 58,
            ),

            array(
                'id' => 805,
                'name' => 'Thüringen',
                'uuid' => $faker->uuid , 'abbr' => 'TH',
                'country_id' => 58,
            ),

            array(
                'id' => 806,
                'name' => 'Arta',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 59,
            ),

            array(
                'id' => 807,
                'name' => 'Ali Sabieh',
                'uuid' => $faker->uuid , 'abbr' => 'AS',
                'country_id' => 59,
            ),

            array(
                'id' => 808,
                'name' => 'Dikhil',
                'uuid' => $faker->uuid , 'abbr' => 'DI',
                'country_id' => 59,
            ),

            array(
                'id' => 809,
                'name' => 'Djibouti',
                'uuid' => $faker->uuid , 'abbr' => 'DJ',
                'country_id' => 59,
            ),

            array(
                'id' => 810,
                'name' => 'Obock',
                'uuid' => $faker->uuid , 'abbr' => 'OB',
                'country_id' => 59,
            ),

            array(
                'id' => 811,
                'name' => 'Tadjourah',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 59,
            ),

            array(
                'id' => 812,
                'name' => 'København',
                'uuid' => $faker->uuid , 'abbr' => 015,
                'country_id' => 60,
            ),

            array(
                'id' => 813,
                'name' => 'Frederiksborg',
                'uuid' => $faker->uuid , 'abbr' => 020,
                'country_id' => 60,
            ),

            array(
                'id' => 814,
                'name' => 'Roskilde',
                'uuid' => $faker->uuid , 'abbr' => 025,
                'country_id' => 60,
            ),

            array(
                'id' => 815,
                'name' => 'Vestsjælland',
                'uuid' => $faker->uuid , 'abbr' => 030,
                'country_id' => 60,
            ),

            array(
                'id' => 816,
                'name' => 'Storstrøm',
                'uuid' => $faker->uuid , 'abbr' => 035,
                'country_id' => 60,
            ),

            array(
                'id' => 817,
                'name' => 'Bornholm',
                'uuid' => $faker->uuid , 'abbr' => 040,
                'country_id' => 60,
            ),

            array(
                'id' => 818,
                'name' => 'Fyn',
                'uuid' => $faker->uuid , 'abbr' => 042,
                'country_id' => 60,
            ),

            array(
                'id' => 819,
                'name' => 'Sønderjylland',
                'uuid' => $faker->uuid , 'abbr' => 050,
                'country_id' => 60,
            ),

            array(
                'id' => 820,
                'name' => 'Ribe',
                'uuid' => $faker->uuid , 'abbr' => 055,
                'country_id' => 60,
            ),

            array(
                'id' => 821,
                'name' => 'Vejle',
                'uuid' => $faker->uuid , 'abbr' => 060,
                'country_id' => 60,
            ),

            array(
                'id' => 822,
                'name' => 'Ringkøbing',
                'uuid' => $faker->uuid , 'abbr' => 065,
                'country_id' => 60,
            ),

            array(
                'id' => 823,
                'name' => 'Århus',
                'uuid' => $faker->uuid , 'abbr' => 070,
                'country_id' => 60,
            ),

            array(
                'id' => 824,
                'name' => 'Viborg',
                'uuid' => $faker->uuid , 'abbr' => 076,
                'country_id' => 60,
            ),

            array(
                'id' => 825,
                'name' => 'Nordjylland',
                'uuid' => $faker->uuid , 'abbr' =>80,
                'country_id' => 60,
            ),

            array(
                'id' => 826,
                'name' => 'København City',
                'uuid' => $faker->uuid , 'abbr' => 101,
                'country_id' => 60,
            ),

            array(
                'id' => 827,
                'name' => 'Frederiksberg City',
                'uuid' => $faker->uuid , 'abbr' => 147,
                'country_id' => 60,
            ),

            array(
                'id' => 828,
                'name' => 'North Jutland',
                'uuid' => $faker->uuid , 'abbr' => 81,
                'country_id' => 60,
            ),

            array(
                'id' => 829,
                'name' => 'Central Jutland',
                'uuid' => $faker->uuid , 'abbr' => 82,
                'country_id' => 60,
            ),

            array(
                'id' => 830,
                'name' => 'South Denmark',
                'uuid' => $faker->uuid , 'abbr' => 83,
                'country_id' => 60,
            ),

            array(
                'id' => 831,
                'name' => 'Capital',
                'uuid' => $faker->uuid , 'abbr' => 84,
                'country_id' => 60,
            ),

            array(
                'id' => 832,
                'name' => 'Zeeland',
                'uuid' => $faker->uuid , 'abbr' => 85,
                'country_id' => 60,
            ),

            array(
                'id' => 833,
                'name' => 'Saint Andrew',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 61,
            ),

            array(
                'id' => 834,
                'name' => 'Saint David',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 61,
            ),

            array(
                'id' => 835,
                'name' => 'Saint George',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 61,
            ),

            array(
                'id' => 836,
                'name' => 'Saint John',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 61,
            ),

            array(
                'id' => 837,
                'name' => 'Saint Joseph',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 61,
            ),

            array(
                'id' => 838,
                'name' => 'Saint Luke',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 61,
            ),

            array(
                'id' => 839,
                'name' => 'Saint Mark',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 61,
            ),

            array(
                'id' => 840,
                'name' => 'Saint Patrick',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 61,
            ),

            array(
                'id' => 841,
                'name' => 'Saint Paul',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 61,
            ),

            array(
                'id' => 842,
                'name' => 'Saint Peter',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 61,
            ),

            array(
                'id' => 843,
                'name' => 'Distrito Nacional (Santo Domingo)',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 62,
            ),

            array(
                'id' => 844,
                'name' => 'Azua',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 62,
            ),

            array(
                'id' => 845,
                'name' => 'Bahoruco',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 62,
            ),

            array(
                'id' => 846,
                'name' => 'Barahona',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 62,
            ),

            array(
                'id' => 847,
                'name' => 'Dajabón',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 62,
            ),

            array(
                'id' => 848,
                'name' => 'Duarte',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 62,
            ),

            array(
                'id' => 849,
                'name' => 'La Estrelleta [Elías Piña]',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 62,
            ),

            array(
                'id' => 850,
                'name' => 'El Seybo [El Seibo]',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 62,
            ),

            array(
                'id' => 851,
                'name' => 'Espaillat',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 62,
            ),

            array(
                'id' => 852,
                'name' => 'Independencia',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 62,
            ),

            array(
                'id' => 853,
                'name' => 'La Altagracia',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 62,
            ),

            array(
                'id' => 854,
                'name' => 'La Romana',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 62,
            ),

            array(
                'id' => 855,
                'name' => 'La Vega',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 62,
            ),

            array(
                'id' => 856,
                'name' => 'María Trinidad Sánchez',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 62,
            ),

            array(
                'id' => 857,
                'name' => 'Monte Cristi',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 62,
            ),

            array(
                'id' => 858,
                'name' => 'Pedernales',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 62,
            ),

            array(
                'id' => 859,
                'name' => 'Peravia',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 62,
            ),

            array(
                'id' => 860,
                'name' => 'Puerto Plata',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 62,
            ),

            array(
                'id' => 861,
                'name' => 'Salcedo',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 62,
            ),

            array(
                'id' => 862,
                'name' => 'Samaná',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 62,
            ),

            array(
                'id' => 863,
                'name' => 'San Cristóbal',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 62,
            ),

            array(
                'id' => 864,
                'name' => 'San Juan',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 62,
            ),

            array(
                'id' => 865,
                'name' => 'San Pedro de Macorís',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 62,
            ),

            array(
                'id' => 866,
                'name' => 'Sánchez Ramírez',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 62,
            ),

            array(
                'id' => 867,
                'name' => 'Santiago',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 62,
            ),

            array(
                'id' => 868,
                'name' => 'Santiago Rodríguez',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 62,
            ),

            array(
                'id' => 869,
                'name' => 'Valverde',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 62,
            ),

            array(
                'id' => 870,
                'name' => 'Monseñor Nouel',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 62,
            ),

            array(
                'id' => 871,
                'name' => 'Monte Plata',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 62,
            ),

            array(
                'id' => 872,
                'name' => 'Hato Mayor',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 62,
            ),

            array(
                'id' => 873,
                'name' => 'San Jose de Ocoa',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 62,
            ),

            array(
                'id' => 874,
                'name' => 'Adrar',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 63,
            ),

            array(
                'id' => 875,
                'name' => 'Chlef',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 63,
            ),

            array(
                'id' => 876,
                'name' => 'Laghouat',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 63,
            ),

            array(
                'id' => 877,
                'name' => 'Oum el Bouaghi',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 63,
            ),

            array(
                'id' => 878,
                'name' => 'Batna',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 63,
            ),

            array(
                'id' => 879,
                'name' => 'Béjaïa',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 63,
            ),

            array(
                'id' => 880,
                'name' => 'Biskra',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 63,
            ),

            array(
                'id' => 881,
                'name' => 'Béchar',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 63,
            ),

            array(
                'id' => 882,
                'name' => 'Blida',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 63,
            ),

            array(
                'id' => 883,
                'name' => 'Bouira',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 63,
            ),

            array(
                'id' => 884,
                'name' => 'Tamanghasset',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 63,
            ),

            array(
                'id' => 885,
                'name' => 'Tébessa',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 63,
            ),

            array(
                'id' => 886,
                'name' => 'Tlemcen',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 63,
            ),

            array(
                'id' => 887,
                'name' => 'Tiaret',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 63,
            ),

            array(
                'id' => 888,
                'name' => 'Tizi Ouzou',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 63,
            ),

            array(
                'id' => 889,
                'name' => 'Alger',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 63,
            ),

            array(
                'id' => 890,
                'name' => 'Djelfa',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 63,
            ),

            array(
                'id' => 891,
                'name' => 'Jijel',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 63,
            ),

            array(
                'id' => 892,
                'name' => 'Sétif',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 63,
            ),

            array(
                'id' => 893,
                'name' => 'Saïda',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 63,
            ),

            array(
                'id' => 894,
                'name' => 'Skikda',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 63,
            ),

            array(
                'id' => 895,
                'name' => 'Sidi Bel Abbès',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 63,
            ),

            array(
                'id' => 896,
                'name' => 'Annaba',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 63,
            ),

            array(
                'id' => 897,
                'name' => 'Guelma',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 63,
            ),

            array(
                'id' => 898,
                'name' => 'Constantine',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 63,
            ),

            array(
                'id' => 899,
                'name' => 'Médéa',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 63,
            ),

            array(
                'id' => 900,
                'name' => 'Mostaganem',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 63,
            ),

            array(
                'id' => 901,
                'name' => 'Msila',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 63,
            ),

            array(
                'id' => 902,
                'name' => 'Mascara',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 63,
            ),

            array(
                'id' => 903,
                'name' => 'Ouargla',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 63,
            ),

            array(
                'id' => 904,
                'name' => 'Oran',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 63,
            ),

            array(
                'id' => 905,
                'name' => 'El Bayadh',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 63,
            ),

            array(
                'id' => 906,
                'name' => 'Illizi',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 63,
            ),

            array(
                'id' => 907,
                'name' => 'Bordj Bou Arréridj',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 63,
            ),

            array(
                'id' => 908,
                'name' => 'Boumerdès',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 63,
            ),

            array(
                'id' => 909,
                'name' => 'El Tarf',
                'uuid' => $faker->uuid , 'abbr' => 36,
                'country_id' => 63,
            ),

            array(
                'id' => 910,
                'name' => 'Tindouf',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 63,
            ),

            array(
                'id' => 911,
                'name' => 'Tissemsilt',
                'uuid' => $faker->uuid , 'abbr' => 38,
                'country_id' => 63,
            ),

            array(
                'id' => 912,
                'name' => 'El Oued',
                'uuid' => $faker->uuid , 'abbr' => 39,
                'country_id' => 63,
            ),

            array(
                'id' => 913,
                'name' => 'Khenchela',
                'uuid' => $faker->uuid , 'abbr' => 40,
                'country_id' => 63,
            ),

            array(
                'id' => 914,
                'name' => 'Souk Ahras',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 63,
            ),

            array(
                'id' => 915,
                'name' => 'Tipaza',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 63,
            ),

            array(
                'id' => 916,
                'name' => 'Mila',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 63,
            ),

            array(
                'id' => 917,
                'name' => 'Aïn Defla',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 63,
            ),

            array(
                'id' => 918,
                'name' => 'Naama',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 63,
            ),

            array(
                'id' => 919,
                'name' => 'Aïn Témouchent',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 63,
            ),

            array(
                'id' => 920,
                'name' => 'Ghardaïa',
                'uuid' => $faker->uuid , 'abbr' => 47,
                'country_id' => 63,
            ),

            array(
                'id' => 921,
                'name' => 'Relizane',
                'uuid' => $faker->uuid , 'abbr' => 48,
                'country_id' => 63,
            ),

            array(
                'id' => 922,
                'name' => 'Azuay',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 64,
            ),

            array(
                'id' => 923,
                'name' => 'Bolívar',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 64,
            ),

            array(
                'id' => 924,
                'name' => 'Carchi',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 64,
            ),

            array(
                'id' => 925,
                'name' => 'Orellana',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 64,
            ),

            array(
                'id' => 926,
                'name' => 'Esmeraldas',
                'uuid' => $faker->uuid , 'abbr' => 'E',
                'country_id' => 64,
            ),

            array(
                'id' => 927,
                'name' => 'Cañar',
                'uuid' => $faker->uuid , 'abbr' => 'F',
                'country_id' => 64,
            ),

            array(
                'id' => 928,
                'name' => 'Guayas',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 64,
            ),

            array(
                'id' => 929,
                'name' => 'Chimborazo',
                'uuid' => $faker->uuid , 'abbr' => 'H',
                'country_id' => 64,
            ),

            array(
                'id' => 930,
                'name' => 'Imbabura',
                'uuid' => $faker->uuid , 'abbr' => 'I',
                'country_id' => 64,
            ),

            array(
                'id' => 931,
                'name' => 'Loja',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 64,
            ),

            array(
                'id' => 932,
                'name' => 'Manabí',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 64,
            ),

            array(
                'id' => 933,
                'name' => 'Napo',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 64,
            ),

            array(
                'id' => 934,
                'name' => 'El Oro',
                'uuid' => $faker->uuid , 'abbr' => 'O',
                'country_id' => 64,
            ),

            array(
                'id' => 935,
                'name' => 'Pichincha',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 64,
            ),

            array(
                'id' => 936,
                'name' => 'Los Ríos',
                'uuid' => $faker->uuid , 'abbr' => 'R',
                'country_id' => 64,
            ),

            array(
                'id' => 937,
                'name' => 'Morona-Santiago',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 64,
            ),

            array(
                'id' => 938,
                'name' => 'Tungurahua',
                'uuid' => $faker->uuid , 'abbr' => 'T',
                'country_id' => 64,
            ),

            array(
                'id' => 939,
                'name' => 'Sucumbíos',
                'uuid' => $faker->uuid , 'abbr' => 'U',
                'country_id' => 64,
            ),

            array(
                'id' => 940,
                'name' => 'Galápagos',
                'uuid' => $faker->uuid , 'abbr' => 'W',
                'country_id' => 64,
            ),

            array(
                'id' => 941,
                'name' => 'Cotopaxi',
                'uuid' => $faker->uuid , 'abbr' => 'X',
                'country_id' => 64,
            ),

            array(
                'id' => 942,
                'name' => 'Santa Elena',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 64,
            ),

            array(
                'id' => 943,
                'name' => 'Santo Domingo de los Tsachilas',
                'uuid' => $faker->uuid , 'abbr' => 'X2~',
                'country_id' => 64,
            ),

            array(
                'id' => 944,
                'name' => 'Pastaza',
                'uuid' => $faker->uuid , 'abbr' => 'Y',
                'country_id' => 64,
            ),

            array(
                'id' => 945,
                'name' => 'Zamora-Chinchipe',
                'uuid' => $faker->uuid , 'abbr' => 'Z',
                'country_id' => 64,
            ),

            array(
                'id' => 946,
                'name' => 'Harjumaa',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 65,
            ),

            array(
                'id' => 947,
                'name' => 'Hiiumaa',
                'uuid' => $faker->uuid , 'abbr' => 39,
                'country_id' => 65,
            ),

            array(
                'id' => 948,
                'name' => 'Ida-Virumaa',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 65,
            ),

            array(
                'id' => 949,
                'name' => 'Jõgevamaa',
                'uuid' => $faker->uuid , 'abbr' => 49,
                'country_id' => 65,
            ),

            array(
                'id' => 950,
                'name' => 'Järvamaa',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 65,
            ),

            array(
                'id' => 951,
                'name' => 'Läänemaa',
                'uuid' => $faker->uuid , 'abbr' => 57,
                'country_id' => 65,
            ),

            array(
                'id' => 952,
                'name' => 'Lääne-Virumaa',
                'uuid' => $faker->uuid , 'abbr' => 59,
                'country_id' => 65,
            ),

            array(
                'id' => 953,
                'name' => 'Põlvamaa',
                'uuid' => $faker->uuid , 'abbr' => 65,
                'country_id' => 65,
            ),

            array(
                'id' => 954,
                'name' => 'Pärnumaa',
                'uuid' => $faker->uuid , 'abbr' => 67,
                'country_id' => 65,
            ),

            array(
                'id' => 955,
                'name' => 'Raplamaa',
                'uuid' => $faker->uuid , 'abbr' => 70,
                'country_id' => 65,
            ),

            array(
                'id' => 956,
                'name' => 'Saaremaa',
                'uuid' => $faker->uuid , 'abbr' => 74,
                'country_id' => 65,
            ),

            array(
                'id' => 957,
                'name' => 'Tartumaa',
                'uuid' => $faker->uuid , 'abbr' => 78,
                'country_id' => 65,
            ),

            array(
                'id' => 958,
                'name' => 'Valgamaa',
                'uuid' => $faker->uuid , 'abbr' => 82,
                'country_id' => 65,
            ),

            array(
                'id' => 959,
                'name' => 'Viljandimaa',
                'uuid' => $faker->uuid , 'abbr' => 84,
                'country_id' => 65,
            ),

            array(
                'id' => 960,
                'name' => 'Võrumaa',
                'uuid' => $faker->uuid , 'abbr' => 86,
                'country_id' => 65,
            ),

            array(
                'id' => 961,
                'name' => 'Al Iskandariyah',
                'uuid' => $faker->uuid , 'abbr' => 'ALX',
                'country_id' => 66,
            ),

            array(
                'id' => 962,
                'name' => 'Aswan',
                'uuid' => $faker->uuid , 'abbr' => 'ASN',
                'country_id' => 66,
            ),

            array(
                'id' => 963,
                'name' => 'Asyut',
                'uuid' => $faker->uuid , 'abbr' => 'AST',
                'country_id' => 66,
            ),

            array(
                'id' => 964,
                'name' => 'Al Bahr al Ahmar',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 66,
            ),

            array(
                'id' => 965,
                'name' => 'Al Buhayrah',
                'uuid' => $faker->uuid , 'abbr' => 'BH',
                'country_id' => 66,
            ),

            array(
                'id' => 966,
                'name' => 'Bani Suwayf',
                'uuid' => $faker->uuid , 'abbr' => 'BNS',
                'country_id' => 66,
            ),

            array(
                'id' => 967,
                'name' => 'Al Qahirah',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 66,
            ),

            array(
                'id' => 968,
                'name' => 'Ad Daqahliyah',
                'uuid' => $faker->uuid , 'abbr' => 'DK',
                'country_id' => 66,
            ),

            array(
                'id' => 969,
                'name' => 'Dumyat',
                'uuid' => $faker->uuid , 'abbr' => 'DT',
                'country_id' => 66,
            ),

            array(
                'id' => 970,
                'name' => 'Al Fayyum',
                'uuid' => $faker->uuid , 'abbr' => 'FYM',
                'country_id' => 66,
            ),

            array(
                'id' => 971,
                'name' => 'Al Gharbiyah',
                'uuid' => $faker->uuid , 'abbr' => 'GH',
                'country_id' => 66,
            ),

            array(
                'id' => 972,
                'name' => 'Al Jizah',
                'uuid' => $faker->uuid , 'abbr' => 'GZ',
                'country_id' => 66,
            ),

            array(
                'id' => 973,
                'name' => 'Al Ismā`īlīyah',
                'uuid' => $faker->uuid , 'abbr' => 'IS',
                'country_id' => 66,
            ),

            array(
                'id' => 974,
                'name' => 'Janub Sina\'',
                'uuid' => $faker->uuid , 'abbr' => 'JS',
                'country_id' => 66,
            ),

            array(
                'id' => 975,
                'name' => 'Al Qalyubiyah',
                'uuid' => $faker->uuid , 'abbr' => 'KB',
                'country_id' => 66,
            ),

            array(
                'id' => 976,
                'name' => 'Kafr ash Shaykh',
                'uuid' => $faker->uuid , 'abbr' => 'KFS',
                'country_id' => 66,
            ),

            array(
                'id' => 977,
                'name' => 'Qina',
                'uuid' => $faker->uuid , 'abbr' => 'KN',
                'country_id' => 66,
            ),

            array(
                'id' => 978,
                'name' => 'al-Uqsur',
                'uuid' => $faker->uuid , 'abbr' => 'LX',
                'country_id' => 66,
            ),

            array(
                'id' => 979,
                'name' => 'Al Minya',
                'uuid' => $faker->uuid , 'abbr' => 'MN',
                'country_id' => 66,
            ),

            array(
                'id' => 980,
                'name' => 'Al Minufiyah',
                'uuid' => $faker->uuid , 'abbr' => 'MNF',
                'country_id' => 66,
            ),

            array(
                'id' => 981,
                'name' => 'Matrūh',
                'uuid' => $faker->uuid , 'abbr' => 'MT',
                'country_id' => 66,
            ),

            array(
                'id' => 982,
                'name' => 'Būr Sa`īd',
                'uuid' => $faker->uuid , 'abbr' => 'PTS',
                'country_id' => 66,
            ),

            array(
                'id' => 983,
                'name' => 'Suhaj',
                'uuid' => $faker->uuid , 'abbr' => 'SHG',
                'country_id' => 66,
            ),

            array(
                'id' => 984,
                'name' => 'Ash Sharqiyah',
                'uuid' => $faker->uuid , 'abbr' => 'SHR',
                'country_id' => 66,
            ),

            array(
                'id' => 985,
                'name' => 'Shamal Sina\'',
                'uuid' => $faker->uuid , 'abbr' => 'SIN',
                'country_id' => 66,
            ),

            array(
                'id' => 986,
                'name' => 'As Suways',
                'uuid' => $faker->uuid , 'abbr' => 'SUZ',
                'country_id' => 66,
            ),

            array(
                'id' => 987,
                'name' => 'Al Wadi al Jadid',
                'uuid' => $faker->uuid , 'abbr' => 'WAD',
                'country_id' => 66,
            ),

            array(
                'id' => 988,
                'name' => 'Boujdour',
                'uuid' => $faker->uuid , 'abbr' => 'BOD',
                'country_id' => 67,
            ),

            array(
                'id' => 989,
                'name' => 'Es Semara',
                'uuid' => $faker->uuid , 'abbr' => 'ESM',
                'country_id' => 67,
            ),

            array(
                'id' => 990,
                'name' => 'Laayoune',
                'uuid' => $faker->uuid , 'abbr' => 'LAA',
                'country_id' => 67,
            ),

            array(
                'id' => 991,
                'name' => 'Oued el Dahab',
                'uuid' => $faker->uuid , 'abbr' => 'OUD',
                'country_id' => 67,
            ),

            array(
                'id' => 992,
                'name' => 'Anseba',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 68,
            ),

            array(
                'id' => 993,
                'name' => 'Debubawi Keyih Bahri [Debub-Keih-Bahri]',
                'uuid' => $faker->uuid , 'abbr' => 'DK',
                'country_id' => 68,
            ),

            array(
                'id' => 994,
                'name' => 'Debub',
                'uuid' => $faker->uuid , 'abbr' => 'DU',
                'country_id' => 68,
            ),

            array(
                'id' => 995,
                'name' => 'Gash-Barka',
                'uuid' => $faker->uuid , 'abbr' => 'GB',
                'country_id' => 68,
            ),

            array(
                'id' => 996,
                'name' => 'Maakel [Maekel]',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 68,
            ),

            array(
                'id' => 997,
                'name' => 'Semenawi Keyih Bahri [Semien-Keih-Bahri]',
                'uuid' => $faker->uuid , 'abbr' => 'SK',
                'country_id' => 68,
            ),

            array(
                'id' => 998,
                'name' => 'Alicante',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 69,
            ),

            array(
                'id' => 999,
                'name' => 'Albacete',
                'uuid' => $faker->uuid , 'abbr' => 'AB',
                'country_id' => 69,
            ),

            array(
                'id' => 1000,
                'name' => 'Almería',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 69,
            ),

            array(
                'id' => 1001,
                'name' => 'Ávila',
                'uuid' => $faker->uuid , 'abbr' => 'AV',
                'country_id' => 69,
            ),

            array(
                'id' => 1002,
                'name' => 'Barcelona',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 69,
            ),

            array(
                'id' => 1003,
                'name' => 'Badajoz',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 69,
            ),

            array(
                'id' => 1004,
                'name' => 'Vizcaya',
                'uuid' => $faker->uuid , 'abbr' => 'BI',
                'country_id' => 69,
            ),

            array(
                'id' => 1005,
                'name' => 'Burgos',
                'uuid' => $faker->uuid , 'abbr' => 'BU',
                'country_id' => 69,
            ),

            array(
                'id' => 1006,
                'name' => 'A Coruña',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 69,
            ),

            array(
                'id' => 1007,
                'name' => 'Cádiz',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 69,
            ),

            array(
                'id' => 1008,
                'name' => 'Cáceres',
                'uuid' => $faker->uuid , 'abbr' => 'CC',
                'country_id' => 69,
            ),

            array(
                'id' => 1009,
                'name' => 'Ceuta',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 69,
            ),

            array(
                'id' => 1010,
                'name' => 'Córdoba',
                'uuid' => $faker->uuid , 'abbr' => 'CO',
                'country_id' => 69,
            ),

            array(
                'id' => 1011,
                'name' => 'Ciudad Real',
                'uuid' => $faker->uuid , 'abbr' => 'CR',
                'country_id' => 69,
            ),

            array(
                'id' => 1012,
                'name' => 'Castellón',
                'uuid' => $faker->uuid , 'abbr' => 'CS',
                'country_id' => 69,
            ),

            array(
                'id' => 1013,
                'name' => 'Cuenca',
                'uuid' => $faker->uuid , 'abbr' => 'CU',
                'country_id' => 69,
            ),

            array(
                'id' => 1014,
                'name' => 'Las Palmas',
                'uuid' => $faker->uuid , 'abbr' => 'GC',
                'country_id' => 69,
            ),

            array(
                'id' => 1015,
                'name' => 'Girona',
                'uuid' => $faker->uuid , 'abbr' => 'GI',
                'country_id' => 69,
            ),

            array(
                'id' => 1016,
                'name' => 'Granada',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 69,
            ),

            array(
                'id' => 1017,
                'name' => 'Guadalajara',
                'uuid' => $faker->uuid , 'abbr' => 'GU',
                'country_id' => 69,
            ),

            array(
                'id' => 1018,
                'name' => 'Huelva',
                'uuid' => $faker->uuid , 'abbr' => 'H',
                'country_id' => 69,
            ),

            array(
                'id' => 1019,
                'name' => 'Huesca',
                'uuid' => $faker->uuid , 'abbr' => 'HU',
                'country_id' => 69,
            ),

            array(
                'id' => 1020,
                'name' => 'Jaén',
                'uuid' => $faker->uuid , 'abbr' => 'J',
                'country_id' => 69,
            ),

            array(
                'id' => 1021,
                'name' => 'Lleida',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 69,
            ),

            array(
                'id' => 1022,
                'name' => 'León',
                'uuid' => $faker->uuid , 'abbr' => 'LE',
                'country_id' => 69,
            ),

            array(
                'id' => 1023,
                'name' => 'La Rioja',
                'uuid' => $faker->uuid , 'abbr' => 'LO',
                'country_id' => 69,
            ),

            array(
                'id' => 1024,
                'name' => 'Lugo',
                'uuid' => $faker->uuid , 'abbr' => 'LU',
                'country_id' => 69,
            ),

            array(
                'id' => 1025,
                'name' => 'Madrid',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 69,
            ),

            array(
                'id' => 1026,
                'name' => 'Málaga',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 69,
            ),

            array(
                'id' => 1027,
                'name' => 'Melilla',
                'uuid' => $faker->uuid , 'abbr' => 'ML',
                'country_id' => 69,
            ),

            array(
                'id' => 1028,
                'name' => 'Murcia',
                'uuid' => $faker->uuid , 'abbr' => 'MU',
                'country_id' => 69,
            ),

            array(
                'id' => 1029,
                'name' => 'Navarra',
                'uuid' => $faker->uuid , 'abbr' => 'NA',
                'country_id' => 69,
            ),

            array(
                'id' => 1030,
                'name' => 'Asturias',
                'uuid' => $faker->uuid , 'abbr' => 'O',
                'country_id' => 69,
            ),

            array(
                'id' => 1031,
                'name' => 'Ourense',
                'uuid' => $faker->uuid , 'abbr' => 'OR',
                'country_id' => 69,
            ),

            array(
                'id' => 1032,
                'name' => 'Palencia',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 69,
            ),

            array(
                'id' => 1033,
                'name' => 'Baleares',
                'uuid' => $faker->uuid , 'abbr' => 'PM',
                'country_id' => 69,
            ),

            array(
                'id' => 1034,
                'name' => 'Pontevedra',
                'uuid' => $faker->uuid , 'abbr' => 'PO',
                'country_id' => 69,
            ),

            array(
                'id' => 1035,
                'name' => 'Cantabria',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 69,
            ),

            array(
                'id' => 1036,
                'name' => 'Salamanca',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 69,
            ),

            array(
                'id' => 1037,
                'name' => 'Sevilla',
                'uuid' => $faker->uuid , 'abbr' => 'SE',
                'country_id' => 69,
            ),

            array(
                'id' => 1038,
                'name' => 'Segovia',
                'uuid' => $faker->uuid , 'abbr' => 'SG',
                'country_id' => 69,
            ),

            array(
                'id' => 1039,
                'name' => 'Soria',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 69,
            ),

            array(
                'id' => 1040,
                'name' => 'Guipúzcoa',
                'uuid' => $faker->uuid , 'abbr' => 'SS',
                'country_id' => 69,
            ),

            array(
                'id' => 1041,
                'name' => 'Tarragona',
                'uuid' => $faker->uuid , 'abbr' => 'T',
                'country_id' => 69,
            ),

            array(
                'id' => 1042,
                'name' => 'Teruel',
                'uuid' => $faker->uuid , 'abbr' => 'TE',
                'country_id' => 69,
            ),

            array(
                'id' => 1043,
                'name' => 'Santa Cruz de Tenerife',
                'uuid' => $faker->uuid , 'abbr' => 'TF',
                'country_id' => 69,
            ),

            array(
                'id' => 1044,
                'name' => 'Toledo',
                'uuid' => $faker->uuid , 'abbr' => 'TO',
                'country_id' => 69,
            ),

            array(
                'id' => 1045,
                'name' => 'Valencia',
                'uuid' => $faker->uuid , 'abbr' => 'V',
                'country_id' => 69,
            ),

            array(
                'id' => 1046,
                'name' => 'Valladolid',
                'uuid' => $faker->uuid , 'abbr' => 'VA',
                'country_id' => 69,
            ),

            array(
                'id' => 1047,
                'name' => 'Álava',
                'uuid' => $faker->uuid , 'abbr' => 'VI',
                'country_id' => 69,
            ),

            array(
                'id' => 1048,
                'name' => 'Zaragoza',
                'uuid' => $faker->uuid , 'abbr' => 'Z',
                'country_id' => 69,
            ),

            array(
                'id' => 1049,
                'name' => 'Zamora',
                'uuid' => $faker->uuid , 'abbr' => 'ZA',
                'country_id' => 69,
            ),

            array(
                'id' => 1050,
                'name' => 'Adis Abeba',
                'uuid' => $faker->uuid , 'abbr' => 'AA',
                'country_id' => 70,
            ),

            array(
                'id' => 1051,
                'name' => 'Afar',
                'uuid' => $faker->uuid , 'abbr' => 'AF',
                'country_id' => 70,
            ),

            array(
                'id' => 1052,
                'name' => 'Amara',
                'uuid' => $faker->uuid , 'abbr' => 'AM',
                'country_id' => 70,
            ),

            array(
                'id' => 1053,
                'name' => 'Binshangul Gumuz',
                'uuid' => $faker->uuid , 'abbr' => 'BE',
                'country_id' => 70,
            ),

            array(
                'id' => 1054,
                'name' => 'Dire Dawa',
                'uuid' => $faker->uuid , 'abbr' => 'DD',
                'country_id' => 70,
            ),

            array(
                'id' => 1055,
                'name' => 'Gambela Hizboch',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 70,
            ),

            array(
                'id' => 1056,
                'name' => 'Hareri Hizb',
                'uuid' => $faker->uuid , 'abbr' => 'HA',
                'country_id' => 70,
            ),

            array(
                'id' => 1057,
                'name' => 'Oromiya',
                'uuid' => $faker->uuid , 'abbr' => 'OR',
                'country_id' => 70,
            ),

            array(
                'id' => 1058,
                'name' => 'YeDebub Biheroch Bihereseboch na Hizboch',
                'uuid' => $faker->uuid , 'abbr' => 'SN',
                'country_id' => 70,
            ),

            array(
                'id' => 1059,
                'name' => 'Sumale',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 70,
            ),

            array(
                'id' => 1060,
                'name' => 'Tigray',
                'uuid' => $faker->uuid , 'abbr' => 'TI',
                'country_id' => 70,
            ),

            array(
                'id' => 1061,
                'name' => 'Ahvenanmaan lääni',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 71,
            ),

            array(
                'id' => 1062,
                'name' => 'Etelä-Suomen lääni',
                'uuid' => $faker->uuid , 'abbr' => 'ES',
                'country_id' => 71,
            ),

            array(
                'id' => 1063,
                'name' => 'Itä-Suomen lääni',
                'uuid' => $faker->uuid , 'abbr' => 'IS',
                'country_id' => 71,
            ),

            array(
                'id' => 1064,
                'name' => 'Lapin lääni',
                'uuid' => $faker->uuid , 'abbr' => 'LL',
                'country_id' => 71,
            ),

            array(
                'id' => 1065,
                'name' => 'Länsi-Suomen lääni',
                'uuid' => $faker->uuid , 'abbr' => 'LS',
                'country_id' => 71,
            ),

            array(
                'id' => 1066,
                'name' => 'Oulun lääni',
                'uuid' => $faker->uuid , 'abbr' => 'OL',
                'country_id' => 71,
            ),

            array(
                'id' => 1067,
                'name' => 'Central',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 72,
            ),

            array(
                'id' => 1068,
                'name' => 'Eastern',
                'uuid' => $faker->uuid , 'abbr' => 'E',
                'country_id' => 72,
            ),

            array(
                'id' => 1069,
                'name' => 'Northern',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 72,
            ),

            array(
                'id' => 1070,
                'name' => 'Rotuma',
                'uuid' => $faker->uuid , 'abbr' => 'R',
                'country_id' => 72,
            ),

            array(
                'id' => 1071,
                'name' => 'Western',
                'uuid' => $faker->uuid , 'abbr' => 'W',
                'country_id' => 72,
            ),

            array(
                'id' => 1072,
                'name' => 'Kosrae',
                'uuid' => $faker->uuid , 'abbr' => 'KSA',
                'country_id' => 74,
            ),

            array(
                'id' => 1073,
                'name' => 'Pohnpei',
                'uuid' => $faker->uuid , 'abbr' => 'PNI',
                'country_id' => 74,
            ),

            array(
                'id' => 1074,
                'name' => 'Chuuk',
                'uuid' => $faker->uuid , 'abbr' => 'TRK',
                'country_id' => 74,
            ),

            array(
                'id' => 1075,
                'name' => 'Yap',
                'uuid' => $faker->uuid , 'abbr' => 'YAP',
                'country_id' => 74,
            ),

            array(
                'id' => 1076,
                'name' => 'Ain',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 76,
            ),

            array(
                'id' => 1077,
                'name' => 'Aisne',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 76,
            ),

            array(
                'id' => 1078,
                'name' => 'Allier',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 76,
            ),

            array(
                'id' => 1079,
                'name' => 'Alpes-de-Haute-Provence',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 76,
            ),

            array(
                'id' => 1080,
                'name' => 'Hautes-Alpes',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 76,
            ),

            array(
                'id' => 1081,
                'name' => 'Alpes-Maritimes',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 76,
            ),

            array(
                'id' => 1082,
                'name' => 'Ardèche',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 76,
            ),

            array(
                'id' => 1083,
                'name' => 'Ardennes',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 76,
            ),

            array(
                'id' => 1084,
                'name' => 'Ariège',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 76,
            ),

            array(
                'id' => 1085,
                'name' => 'Aube',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 76,
            ),

            array(
                'id' => 1086,
                'name' => 'Aude',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 76,
            ),

            array(
                'id' => 1087,
                'name' => 'Aveyron',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 76,
            ),

            array(
                'id' => 1088,
                'name' => 'Bouches-du-Rhône',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 76,
            ),

            array(
                'id' => 1089,
                'name' => 'Calvados',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 76,
            ),

            array(
                'id' => 1090,
                'name' => 'Cantal',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 76,
            ),

            array(
                'id' => 1091,
                'name' => 'Charente',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 76,
            ),

            array(
                'id' => 1092,
                'name' => 'Charente-Maritime',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 76,
            ),

            array(
                'id' => 1093,
                'name' => 'Cher',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 76,
            ),

            array(
                'id' => 1094,
                'name' => 'Corrèze',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 76,
            ),

            array(
                'id' => 1095,
                'name' => 'Côte-d\'Or',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 76,
            ),

            array(
                'id' => 1096,
                'name' => 'Côtes-d\'Armor',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 76,
            ),

            array(
                'id' => 1097,
                'name' => 'Creuse',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 76,
            ),

            array(
                'id' => 1098,
                'name' => 'Dordogne',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 76,
            ),

            array(
                'id' => 1099,
                'name' => 'Doubs',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 76,
            ),

            array(
                'id' => 1100,
                'name' => 'Drôme',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 76,
            ),

            array(
                'id' => 1101,
                'name' => 'Eure',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 76,
            ),

            array(
                'id' => 1102,
                'name' => 'Eure-et-Loir',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 76,
            ),

            array(
                'id' => 1103,
                'name' => 'Finistère',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 76,
            ),

            array(
                'id' => 1104,
                'name' => 'Corse-du-Sud',
                'uuid' => $faker->uuid , 'abbr' => '2A',
                'country_id' => 76,
            ),

            array(
                'id' => 1105,
                'name' => 'Haute-Corse',
                'uuid' => $faker->uuid , 'abbr' => '2B',
                'country_id' => 76,
            ),

            array(
                'id' => 1106,
                'name' => 'Gard',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 76,
            ),

            array(
                'id' => 1107,
                'name' => 'Haute-Garonne',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 76,
            ),

            array(
                'id' => 1108,
                'name' => 'Gers',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 76,
            ),

            array(
                'id' => 1109,
                'name' => 'Gironde',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 76,
            ),

            array(
                'id' => 1110,
                'name' => 'Hérault',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 76,
            ),

            array(
                'id' => 1111,
                'name' => 'Ille-et-Vilaine',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 76,
            ),

            array(
                'id' => 1112,
                'name' => 'Indre',
                'uuid' => $faker->uuid , 'abbr' => 36,
                'country_id' => 76,
            ),

            array(
                'id' => 1113,
                'name' => 'Indre-et-Loire',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 76,
            ),

            array(
                'id' => 1114,
                'name' => 'Isère',
                'uuid' => $faker->uuid , 'abbr' => 38,
                'country_id' => 76,
            ),

            array(
                'id' => 1115,
                'name' => 'Jura',
                'uuid' => $faker->uuid , 'abbr' => 39,
                'country_id' => 76,
            ),

            array(
                'id' => 1116,
                'name' => 'Landes',
                'uuid' => $faker->uuid , 'abbr' => 40,
                'country_id' => 76,
            ),

            array(
                'id' => 1117,
                'name' => 'Loir-et-Cher',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 76,
            ),

            array(
                'id' => 1118,
                'name' => 'Loire',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 76,
            ),

            array(
                'id' => 1119,
                'name' => 'Haute-Loire',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 76,
            ),

            array(
                'id' => 1120,
                'name' => 'Loire-Atlantique',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 76,
            ),

            array(
                'id' => 1121,
                'name' => 'Loiret',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 76,
            ),

            array(
                'id' => 1122,
                'name' => 'Lot',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 76,
            ),

            array(
                'id' => 1123,
                'name' => 'Lot-et-Garonne',
                'uuid' => $faker->uuid , 'abbr' => 47,
                'country_id' => 76,
            ),

            array(
                'id' => 1124,
                'name' => 'Lozère',
                'uuid' => $faker->uuid , 'abbr' => 48,
                'country_id' => 76,
            ),

            array(
                'id' => 1125,
                'name' => 'Maine-et-Loire',
                'uuid' => $faker->uuid , 'abbr' => 49,
                'country_id' => 76,
            ),

            array(
                'id' => 1126,
                'name' => 'Manche',
                'uuid' => $faker->uuid , 'abbr' => 50,
                'country_id' => 76,
            ),

            array(
                'id' => 1127,
                'name' => 'Marne',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 76,
            ),

            array(
                'id' => 1128,
                'name' => 'Haute-Marne',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 76,
            ),

            array(
                'id' => 1129,
                'name' => 'Mayenne',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 76,
            ),

            array(
                'id' => 1130,
                'name' => 'Meurthe-et-Moselle',
                'uuid' => $faker->uuid , 'abbr' => 54,
                'country_id' => 76,
            ),

            array(
                'id' => 1131,
                'name' => 'Meuse',
                'uuid' => $faker->uuid , 'abbr' => 55,
                'country_id' => 76,
            ),

            array(
                'id' => 1132,
                'name' => 'Morbihan',
                'uuid' => $faker->uuid , 'abbr' => 56,
                'country_id' => 76,
            ),

            array(
                'id' => 1133,
                'name' => 'Moselle',
                'uuid' => $faker->uuid , 'abbr' => 57,
                'country_id' => 76,
            ),

            array(
                'id' => 1134,
                'name' => 'Nièvre',
                'uuid' => $faker->uuid , 'abbr' => 58,
                'country_id' => 76,
            ),

            array(
                'id' => 1135,
                'name' => 'Nord',
                'uuid' => $faker->uuid , 'abbr' => 59,
                'country_id' => 76,
            ),

            array(
                'id' => 1136,
                'name' => 'Oise',
                'uuid' => $faker->uuid , 'abbr' => 60,
                'country_id' => 76,
            ),

            array(
                'id' => 1137,
                'name' => 'Orne',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 76,
            ),

            array(
                'id' => 1138,
                'name' => 'Pas-de-Calais',
                'uuid' => $faker->uuid , 'abbr' => 62,
                'country_id' => 76,
            ),

            array(
                'id' => 1139,
                'name' => 'Puy-de-Dôme',
                'uuid' => $faker->uuid , 'abbr' => 63,
                'country_id' => 76,
            ),

            array(
                'id' => 1140,
                'name' => 'Pyrénées-Atlantiques',
                'uuid' => $faker->uuid , 'abbr' => 64,
                'country_id' => 76,
            ),

            array(
                'id' => 1141,
                'name' => 'Hautes-Pyrénées',
                'uuid' => $faker->uuid , 'abbr' => 65,
                'country_id' => 76,
            ),

            array(
                'id' => 1142,
                'name' => 'Pyrénées-Orientales',
                'uuid' => $faker->uuid , 'abbr' => 66,
                'country_id' => 76,
            ),

            array(
                'id' => 1143,
                'name' => 'Bas-Rhin',
                'uuid' => $faker->uuid , 'abbr' => 67,
                'country_id' => 76,
            ),

            array(
                'id' => 1144,
                'name' => 'Haut-Rhin',
                'uuid' => $faker->uuid , 'abbr' => 68,
                'country_id' => 76,
            ),

            array(
                'id' => 1145,
                'name' => 'Rhône',
                'uuid' => $faker->uuid , 'abbr' => 69,
                'country_id' => 76,
            ),

            array(
                'id' => 1146,
                'name' => 'Haute-Saône',
                'uuid' => $faker->uuid , 'abbr' => 70,
                'country_id' => 76,
            ),

            array(
                'id' => 1147,
                'name' => 'Saône-et-Loire',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 76,
            ),

            array(
                'id' => 1148,
                'name' => 'Sarthe',
                'uuid' => $faker->uuid , 'abbr' => 72,
                'country_id' => 76,
            ),

            array(
                'id' => 1149,
                'name' => 'Savoie',
                'uuid' => $faker->uuid , 'abbr' => 73,
                'country_id' => 76,
            ),

            array(
                'id' => 1150,
                'name' => 'Haute-Savoie',
                'uuid' => $faker->uuid , 'abbr' => 74,
                'country_id' => 76,
            ),

            array(
                'id' => 1151,
                'name' => 'Paris',
                'uuid' => $faker->uuid , 'abbr' => 75,
                'country_id' => 76,
            ),

            array(
                'id' => 1152,
                'name' => 'Seine-Maritime',
                'uuid' => $faker->uuid , 'abbr' => 76,
                'country_id' => 76,
            ),

            array(
                'id' => 1153,
                'name' => 'Seine-et-Marne',
                'uuid' => $faker->uuid , 'abbr' => 77,
                'country_id' => 76,
            ),

            array(
                'id' => 1154,
                'name' => 'Yvelines',
                'uuid' => $faker->uuid , 'abbr' => 78,
                'country_id' => 76,
            ),

            array(
                'id' => 1155,
                'name' => 'Deux-Sèvres',
                'uuid' => $faker->uuid , 'abbr' => 79,
                'country_id' => 76,
            ),

            array(
                'id' => 1156,
                'name' => 'Somme',
                'uuid' => $faker->uuid , 'abbr' => 80,
                'country_id' => 76,
            ),

            array(
                'id' => 1157,
                'name' => 'Tarn',
                'uuid' => $faker->uuid , 'abbr' => 81,
                'country_id' => 76,
            ),

            array(
                'id' => 1158,
                'name' => 'Tarn-et-Garonne',
                'uuid' => $faker->uuid , 'abbr' => 82,
                'country_id' => 76,
            ),

            array(
                'id' => 1159,
                'name' => 'Var',
                'uuid' => $faker->uuid , 'abbr' => 83,
                'country_id' => 76,
            ),

            array(
                'id' => 1160,
                'name' => 'Vaucluse',
                'uuid' => $faker->uuid , 'abbr' => 84,
                'country_id' => 76,
            ),

            array(
                'id' => 1161,
                'name' => 'Vendée',
                'uuid' => $faker->uuid , 'abbr' => 85,
                'country_id' => 76,
            ),

            array(
                'id' => 1162,
                'name' => 'Vienne',
                'uuid' => $faker->uuid , 'abbr' => 86,
                'country_id' => 76,
            ),

            array(
                'id' => 1163,
                'name' => 'Haute-Vienne',
                'uuid' => $faker->uuid , 'abbr' => 87,
                'country_id' => 76,
            ),

            array(
                'id' => 1164,
                'name' => 'Vosges',
                'uuid' => $faker->uuid , 'abbr' => 88,
                'country_id' => 76,
            ),

            array(
                'id' => 1165,
                'name' => 'Yonne',
                'uuid' => $faker->uuid , 'abbr' => 89,
                'country_id' => 76,
            ),

            array(
                'id' => 1166,
                'name' => 'Territoire de Belfort',
                'uuid' => $faker->uuid , 'abbr' => 90,
                'country_id' => 76,
            ),

            array(
                'id' => 1167,
                'name' => 'Essonne',
                'uuid' => $faker->uuid , 'abbr' => 91,
                'country_id' => 76,
            ),

            array(
                'id' => 1168,
                'name' => 'Hauts-de-Seine',
                'uuid' => $faker->uuid , 'abbr' => 92,
                'country_id' => 76,
            ),

            array(
                'id' => 1169,
                'name' => 'Seine-Saint-Denis',
                'uuid' => $faker->uuid , 'abbr' => 93,
                'country_id' => 76,
            ),

            array(
                'id' => 1170,
                'name' => 'Val-de-Marne',
                'uuid' => $faker->uuid , 'abbr' => 94,
                'country_id' => 76,
            ),

            array(
                'id' => 1171,
                'name' => 'Val-d\'Oise',
                'uuid' => $faker->uuid , 'abbr' => 95,
                'country_id' => 76,
            ),

            array(
                'id' => 1172,
                'name' => 'Nouvelle-Calédonie',
                'uuid' => $faker->uuid , 'abbr' => 'NC',
                'country_id' => 76,
            ),

            array(
                'id' => 1173,
                'name' => 'Polynésie française',
                'uuid' => $faker->uuid , 'abbr' => 'PF',
                'country_id' => 76,
            ),

            array(
                'id' => 1174,
                'name' => 'Saint-Pierre-et-Miquelon',
                'uuid' => $faker->uuid , 'abbr' => 'PM',
                'country_id' => 76,
            ),

            array(
                'id' => 1175,
                'name' => 'Terres Australes Françaises',
                'uuid' => $faker->uuid , 'abbr' => 'TF',
                'country_id' => 76,
            ),

            array(
                'id' => 1176,
                'name' => 'Wallis et Futuna',
                'uuid' => $faker->uuid , 'abbr' => 'WF',
                'country_id' => 76,
            ),

            array(
                'id' => 1177,
                'name' => 'Mayotte',
                'uuid' => $faker->uuid , 'abbr' => 'YT',
                'country_id' => 76,
            ),

            array(
                'id' => 1178,
                'name' => 'Estuaire',
                'uuid' => $faker->uuid , 'abbr' => 1,
                'country_id' => 77,
            ),

            array(
                'id' => 1179,
                'name' => 'Haut-Ogooué',
                'uuid' => $faker->uuid , 'abbr' => 2,
                'country_id' => 77,
            ),

            array(
                'id' => 1180,
                'name' => 'Moyen-Ogooué',
                'uuid' => $faker->uuid , 'abbr' => 3,
                'country_id' => 77,
            ),

            array(
                'id' => 1181,
                'name' => 'Ngounié',
                'uuid' => $faker->uuid , 'abbr' => 4,
                'country_id' => 77,
            ),

            array(
                'id' => 1182,
                'name' => 'Nyanga',
                'uuid' => $faker->uuid , 'abbr' => 5,
                'country_id' => 77,
            ),

            array(
                'id' => 1183,
                'name' => 'Ogooué-Ivindo',
                'uuid' => $faker->uuid , 'abbr' => 6,
                'country_id' => 77,
            ),

            array(
                'id' => 1184,
                'name' => 'Ogooué-Lolo',
                'uuid' => $faker->uuid , 'abbr' => 7,
                'country_id' => 77,
            ),

            array(
                'id' => 1185,
                'name' => 'Ogooué-Maritime',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 77,
            ),

            array(
                'id' => 1186,
                'name' => 'Woleu-Ntem',
                'uuid' => $faker->uuid , 'abbr' => 9,
                'country_id' => 77,
            ),

            array(
                'id' => 1187,
                'name' => 'Aberdeenshire',
                'uuid' => $faker->uuid , 'abbr' => 'ABD',
                'country_id' => 78,
            ),

            array(
                'id' => 1188,
                'name' => 'Aberdeen City',
                'uuid' => $faker->uuid , 'abbr' => 'ABE',
                'country_id' => 78,
            ),

            array(
                'id' => 1189,
                'name' => 'Argyll and Bute',
                'uuid' => $faker->uuid , 'abbr' => 'AGB',
                'country_id' => 78,
            ),

            array(
                'id' => 1190,
                'name' => 'Isle of Anglesey [Sir Ynys Môn GB-YNM]',
                'uuid' => $faker->uuid , 'abbr' => 'AGY',
                'country_id' => 78,
            ),

            array(
                'id' => 1191,
                'name' => 'Angus',
                'uuid' => $faker->uuid , 'abbr' => 'ANS',
                'country_id' => 78,
            ),

            array(
                'id' => 1192,
                'name' => 'Antrim',
                'uuid' => $faker->uuid , 'abbr' => 'ANT',
                'country_id' => 78,
            ),

            array(
                'id' => 1193,
                'name' => 'Ards',
                'uuid' => $faker->uuid , 'abbr' => 'ARD',
                'country_id' => 78,
            ),

            array(
                'id' => 1194,
                'name' => 'Armagh',
                'uuid' => $faker->uuid , 'abbr' => 'ARM',
                'country_id' => 78,
            ),

            array(
                'id' => 1195,
                'name' => 'Bath and North East Somerset',
                'uuid' => $faker->uuid , 'abbr' => 'BAS',
                'country_id' => 78,
            ),

            array(
                'id' => 1196,
                'name' => 'Blackburn with Darwen',
                'uuid' => $faker->uuid , 'abbr' => 'BBD',
                'country_id' => 78,
            ),

            array(
                'id' => 1197,
                'name' => 'Bedfordshire',
                'uuid' => $faker->uuid , 'abbr' => 'BDF',
                'country_id' => 78,
            ),

            array(
                'id' => 1198,
                'name' => 'Barking and Dagenham',
                'uuid' => $faker->uuid , 'abbr' => 'BDG',
                'country_id' => 78,
            ),

            array(
                'id' => 1199,
                'name' => 'Brent',
                'uuid' => $faker->uuid , 'abbr' => 'BEN',
                'country_id' => 78,
            ),

            array(
                'id' => 1200,
                'name' => 'Bexley',
                'uuid' => $faker->uuid , 'abbr' => 'BEX',
                'country_id' => 78,
            ),

            array(
                'id' => 1201,
                'name' => 'Belfast',
                'uuid' => $faker->uuid , 'abbr' => 'BFS',
                'country_id' => 78,
            ),

            array(
                'id' => 1202,
                'name' => 'Bridgend [Pen-y-bont ar Ogwr GB-POG]',
                'uuid' => $faker->uuid , 'abbr' => 'BGE',
                'country_id' => 78,
            ),

            array(
                'id' => 1203,
                'name' => 'Blaenau Gwent',
                'uuid' => $faker->uuid , 'abbr' => 'BGW',
                'country_id' => 78,
            ),

            array(
                'id' => 1204,
                'name' => 'Birmingham',
                'uuid' => $faker->uuid , 'abbr' => 'BIR',
                'country_id' => 78,
            ),

            array(
                'id' => 1205,
                'name' => 'Buckinghamshire',
                'uuid' => $faker->uuid , 'abbr' => 'BKM',
                'country_id' => 78,
            ),

            array(
                'id' => 1206,
                'name' => 'Ballymena',
                'uuid' => $faker->uuid , 'abbr' => 'BLA',
                'country_id' => 78,
            ),

            array(
                'id' => 1207,
                'name' => 'Ballymoney',
                'uuid' => $faker->uuid , 'abbr' => 'BLY',
                'country_id' => 78,
            ),

            array(
                'id' => 1208,
                'name' => 'Bournemouth',
                'uuid' => $faker->uuid , 'abbr' => 'BMH',
                'country_id' => 78,
            ),

            array(
                'id' => 1209,
                'name' => 'Banbridge',
                'uuid' => $faker->uuid , 'abbr' => 'BNB',
                'country_id' => 78,
            ),

            array(
                'id' => 1210,
                'name' => 'Barnet',
                'uuid' => $faker->uuid , 'abbr' => 'BNE',
                'country_id' => 78,
            ),

            array(
                'id' => 1211,
                'name' => 'Brighton and Hove',
                'uuid' => $faker->uuid , 'abbr' => 'BNH',
                'country_id' => 78,
            ),

            array(
                'id' => 1212,
                'name' => 'Barnsley',
                'uuid' => $faker->uuid , 'abbr' => 'BNS',
                'country_id' => 78,
            ),

            array(
                'id' => 1213,
                'name' => 'Bolton',
                'uuid' => $faker->uuid , 'abbr' => 'BOL',
                'country_id' => 78,
            ),

            array(
                'id' => 1214,
                'name' => 'Blackpool',
                'uuid' => $faker->uuid , 'abbr' => 'BPL',
                'country_id' => 78,
            ),

            array(
                'id' => 1215,
                'name' => 'Bracknell Forest',
                'uuid' => $faker->uuid , 'abbr' => 'BRC',
                'country_id' => 78,
            ),

            array(
                'id' => 1216,
                'name' => 'Bradford',
                'uuid' => $faker->uuid , 'abbr' => 'BRD',
                'country_id' => 78,
            ),

            array(
                'id' => 1217,
                'name' => 'Bromley',
                'uuid' => $faker->uuid , 'abbr' => 'BRY',
                'country_id' => 78,
            ),

            array(
                'id' => 1218,
                'name' => 'Bristol, City of',
                'uuid' => $faker->uuid , 'abbr' => 'BST',
                'country_id' => 78,
            ),

            array(
                'id' => 1219,
                'name' => 'Bury',
                'uuid' => $faker->uuid , 'abbr' => 'BUR',
                'country_id' => 78,
            ),

            array(
                'id' => 1220,
                'name' => 'Cambridgeshire',
                'uuid' => $faker->uuid , 'abbr' => 'CAM',
                'country_id' => 78,
            ),

            array(
                'id' => 1221,
                'name' => 'Caerphilly [Caerffili GB-CAF]',
                'uuid' => $faker->uuid , 'abbr' => 'CAY',
                'country_id' => 78,
            ),

            array(
                'id' => 1222,
                'name' => 'Ceredigion [Sir Ceredigion]',
                'uuid' => $faker->uuid , 'abbr' => 'CGN',
                'country_id' => 78,
            ),

            array(
                'id' => 1223,
                'name' => 'Craigavon',
                'uuid' => $faker->uuid , 'abbr' => 'CGV',
                'country_id' => 78,
            ),

            array(
                'id' => 1224,
                'name' => 'Cheshire',
                'uuid' => $faker->uuid , 'abbr' => 'CHS',
                'country_id' => 78,
            ),

            array(
                'id' => 1225,
                'name' => 'Carrickfergus',
                'uuid' => $faker->uuid , 'abbr' => 'CKF',
                'country_id' => 78,
            ),

            array(
                'id' => 1226,
                'name' => 'Cookstown',
                'uuid' => $faker->uuid , 'abbr' => 'CKT',
                'country_id' => 78,
            ),

            array(
                'id' => 1227,
                'name' => 'Calderdale',
                'uuid' => $faker->uuid , 'abbr' => 'CLD',
                'country_id' => 78,
            ),

            array(
                'id' => 1228,
                'name' => 'Clackmannanshire',
                'uuid' => $faker->uuid , 'abbr' => 'CLK',
                'country_id' => 78,
            ),

            array(
                'id' => 1229,
                'name' => 'Coleraine',
                'uuid' => $faker->uuid , 'abbr' => 'CLR',
                'country_id' => 78,
            ),

            array(
                'id' => 1230,
                'name' => 'Cumbria',
                'uuid' => $faker->uuid , 'abbr' => 'CMA',
                'country_id' => 78,
            ),

            array(
                'id' => 1231,
                'name' => 'Camden',
                'uuid' => $faker->uuid , 'abbr' => 'CMD',
                'country_id' => 78,
            ),

            array(
                'id' => 1232,
                'name' => 'Carmarthenshire [Sir Gaerfyrddin GB-GFY]',
                'uuid' => $faker->uuid , 'abbr' => 'CMN',
                'country_id' => 78,
            ),

            array(
                'id' => 1233,
                'name' => 'Cornwall',
                'uuid' => $faker->uuid , 'abbr' => 'CON',
                'country_id' => 78,
            ),

            array(
                'id' => 1234,
                'name' => 'Coventry',
                'uuid' => $faker->uuid , 'abbr' => 'COV',
                'country_id' => 78,
            ),

            array(
                'id' => 1235,
                'name' => 'Cardiff [Caerdydd GB-CRD]',
                'uuid' => $faker->uuid , 'abbr' => 'CRF',
                'country_id' => 78,
            ),

            array(
                'id' => 1236,
                'name' => 'Croydon',
                'uuid' => $faker->uuid , 'abbr' => 'CRY',
                'country_id' => 78,
            ),

            array(
                'id' => 1237,
                'name' => 'Castlereagh',
                'uuid' => $faker->uuid , 'abbr' => 'CSR',
                'country_id' => 78,
            ),

            array(
                'id' => 1238,
                'name' => 'Conwy',
                'uuid' => $faker->uuid , 'abbr' => 'CWY',
                'country_id' => 78,
            ),

            array(
                'id' => 1239,
                'name' => 'Darlington',
                'uuid' => $faker->uuid , 'abbr' => 'DAL',
                'country_id' => 78,
            ),

            array(
                'id' => 1240,
                'name' => 'Derbyshire',
                'uuid' => $faker->uuid , 'abbr' => 'DBY',
                'country_id' => 78,
            ),

            array(
                'id' => 1241,
                'name' => 'Denbighshire [Sir Ddinbych GB-DDB]',
                'uuid' => $faker->uuid , 'abbr' => 'DEN',
                'country_id' => 78,
            ),

            array(
                'id' => 1242,
                'name' => 'Derby',
                'uuid' => $faker->uuid , 'abbr' => 'DER',
                'country_id' => 78,
            ),

            array(
                'id' => 1243,
                'name' => 'Devon',
                'uuid' => $faker->uuid , 'abbr' => 'DEV',
                'country_id' => 78,
            ),

            array(
                'id' => 1244,
                'name' => 'Dungannon',
                'uuid' => $faker->uuid , 'abbr' => 'DGN',
                'country_id' => 78,
            ),

            array(
                'id' => 1245,
                'name' => 'Dumfries and Galloway',
                'uuid' => $faker->uuid , 'abbr' => 'DGY',
                'country_id' => 78,
            ),

            array(
                'id' => 1246,
                'name' => 'Doncaster',
                'uuid' => $faker->uuid , 'abbr' => 'DNC',
                'country_id' => 78,
            ),

            array(
                'id' => 1247,
                'name' => 'Dundee City',
                'uuid' => $faker->uuid , 'abbr' => 'DND',
                'country_id' => 78,
            ),

            array(
                'id' => 1248,
                'name' => 'Dorset',
                'uuid' => $faker->uuid , 'abbr' => 'DOR',
                'country_id' => 78,
            ),

            array(
                'id' => 1249,
                'name' => 'Down',
                'uuid' => $faker->uuid , 'abbr' => 'DOW',
                'country_id' => 78,
            ),

            array(
                'id' => 1250,
                'name' => 'Derry',
                'uuid' => $faker->uuid , 'abbr' => 'DRY',
                'country_id' => 78,
            ),

            array(
                'id' => 1251,
                'name' => 'Dudley',
                'uuid' => $faker->uuid , 'abbr' => 'DUD',
                'country_id' => 78,
            ),

            array(
                'id' => 1252,
                'name' => 'Durham',
                'uuid' => $faker->uuid , 'abbr' => 'DUR',
                'country_id' => 78,
            ),

            array(
                'id' => 1253,
                'name' => 'Ealing',
                'uuid' => $faker->uuid , 'abbr' => 'EAL',
                'country_id' => 78,
            ),

            array(
                'id' => 1254,
                'name' => 'East Ayrshire',
                'uuid' => $faker->uuid , 'abbr' => 'EAY',
                'country_id' => 78,
            ),

            array(
                'id' => 1255,
                'name' => 'Edinburgh, City of',
                'uuid' => $faker->uuid , 'abbr' => 'EDH',
                'country_id' => 78,
            ),

            array(
                'id' => 1256,
                'name' => 'East Dunbartonshire',
                'uuid' => $faker->uuid , 'abbr' => 'EDU',
                'country_id' => 78,
            ),

            array(
                'id' => 1257,
                'name' => 'East Lothian',
                'uuid' => $faker->uuid , 'abbr' => 'ELN',
                'country_id' => 78,
            ),

            array(
                'id' => 1258,
                'name' => 'Eilean Siar',
                'uuid' => $faker->uuid , 'abbr' => 'ELS',
                'country_id' => 78,
            ),

            array(
                'id' => 1259,
                'name' => 'Enfield',
                'uuid' => $faker->uuid , 'abbr' => 'ENF',
                'country_id' => 78,
            ),

            array(
                'id' => 1260,
                'name' => 'East Renfrewshire',
                'uuid' => $faker->uuid , 'abbr' => 'ERW',
                'country_id' => 78,
            ),

            array(
                'id' => 1261,
                'name' => 'East Riding of Yorkshire',
                'uuid' => $faker->uuid , 'abbr' => 'ERY',
                'country_id' => 78,
            ),

            array(
                'id' => 1262,
                'name' => 'Essex',
                'uuid' => $faker->uuid , 'abbr' => 'ESS',
                'country_id' => 78,
            ),

            array(
                'id' => 1263,
                'name' => 'East Sussex',
                'uuid' => $faker->uuid , 'abbr' => 'ESX',
                'country_id' => 78,
            ),

            array(
                'id' => 1264,
                'name' => 'Falkirk',
                'uuid' => $faker->uuid , 'abbr' => 'FAL',
                'country_id' => 78,
            ),

            array(
                'id' => 1265,
                'name' => 'Fermanagh',
                'uuid' => $faker->uuid , 'abbr' => 'FER',
                'country_id' => 78,
            ),

            array(
                'id' => 1266,
                'name' => 'Fife',
                'uuid' => $faker->uuid , 'abbr' => 'FIF',
                'country_id' => 78,
            ),

            array(
                'id' => 1267,
                'name' => 'Flintshire [Sir y Fflint GB-FFL]',
                'uuid' => $faker->uuid , 'abbr' => 'FLN',
                'country_id' => 78,
            ),

            array(
                'id' => 1268,
                'name' => 'Gateshead',
                'uuid' => $faker->uuid , 'abbr' => 'GAT',
                'country_id' => 78,
            ),

            array(
                'id' => 1269,
                'name' => 'Glasgow City',
                'uuid' => $faker->uuid , 'abbr' => 'GLG',
                'country_id' => 78,
            ),

            array(
                'id' => 1270,
                'name' => 'Gloucestershire',
                'uuid' => $faker->uuid , 'abbr' => 'GLS',
                'country_id' => 78,
            ),

            array(
                'id' => 1271,
                'name' => 'Greenwich',
                'uuid' => $faker->uuid , 'abbr' => 'GRE',
                'country_id' => 78,
            ),

            array(
                'id' => 1272,
                'name' => 'Gwynedd',
                'uuid' => $faker->uuid , 'abbr' => 'GWN',
                'country_id' => 78,
            ),

            array(
                'id' => 1273,
                'name' => 'Halton',
                'uuid' => $faker->uuid , 'abbr' => 'HAL',
                'country_id' => 78,
            ),

            array(
                'id' => 1274,
                'name' => 'Hampshire',
                'uuid' => $faker->uuid , 'abbr' => 'HAM',
                'country_id' => 78,
            ),

            array(
                'id' => 1275,
                'name' => 'Havering',
                'uuid' => $faker->uuid , 'abbr' => 'HAV',
                'country_id' => 78,
            ),

            array(
                'id' => 1276,
                'name' => 'Hackney',
                'uuid' => $faker->uuid , 'abbr' => 'HCK',
                'country_id' => 78,
            ),

            array(
                'id' => 1277,
                'name' => 'Herefordshire, County of',
                'uuid' => $faker->uuid , 'abbr' => 'HEF',
                'country_id' => 78,
            ),

            array(
                'id' => 1278,
                'name' => 'Hillingdon',
                'uuid' => $faker->uuid , 'abbr' => 'HIL',
                'country_id' => 78,
            ),

            array(
                'id' => 1279,
                'name' => 'Highland',
                'uuid' => $faker->uuid , 'abbr' => 'HLD',
                'country_id' => 78,
            ),

            array(
                'id' => 1280,
                'name' => 'Hammersmith and Fulham',
                'uuid' => $faker->uuid , 'abbr' => 'HMF',
                'country_id' => 78,
            ),

            array(
                'id' => 1281,
                'name' => 'Hounslow',
                'uuid' => $faker->uuid , 'abbr' => 'HNS',
                'country_id' => 78,
            ),

            array(
                'id' => 1282,
                'name' => 'Hartlepool',
                'uuid' => $faker->uuid , 'abbr' => 'HPL',
                'country_id' => 78,
            ),

            array(
                'id' => 1283,
                'name' => 'Hertfordshire',
                'uuid' => $faker->uuid , 'abbr' => 'HRT',
                'country_id' => 78,
            ),

            array(
                'id' => 1284,
                'name' => 'Harrow',
                'uuid' => $faker->uuid , 'abbr' => 'HRW',
                'country_id' => 78,
            ),

            array(
                'id' => 1285,
                'name' => 'Haringey',
                'uuid' => $faker->uuid , 'abbr' => 'HRY',
                'country_id' => 78,
            ),

            array(
                'id' => 1286,
                'name' => 'Isles of Scilly',
                'uuid' => $faker->uuid , 'abbr' => 'IOS',
                'country_id' => 78,
            ),

            array(
                'id' => 1287,
                'name' => 'Isle of Wight',
                'uuid' => $faker->uuid , 'abbr' => 'IOW',
                'country_id' => 78,
            ),

            array(
                'id' => 1288,
                'name' => 'Islington',
                'uuid' => $faker->uuid , 'abbr' => 'ISL',
                'country_id' => 78,
            ),

            array(
                'id' => 1289,
                'name' => 'Inverclyde',
                'uuid' => $faker->uuid , 'abbr' => 'IVC',
                'country_id' => 78,
            ),

            array(
                'id' => 1290,
                'name' => 'Kensington and Chelsea',
                'uuid' => $faker->uuid , 'abbr' => 'KEC',
                'country_id' => 78,
            ),

            array(
                'id' => 1291,
                'name' => 'Kent',
                'uuid' => $faker->uuid , 'abbr' => 'KEN',
                'country_id' => 78,
            ),

            array(
                'id' => 1292,
                'name' => 'Kingston upon Hull, City of',
                'uuid' => $faker->uuid , 'abbr' => 'KHL',
                'country_id' => 78,
            ),

            array(
                'id' => 1293,
                'name' => 'Kirklees',
                'uuid' => $faker->uuid , 'abbr' => 'KIR',
                'country_id' => 78,
            ),

            array(
                'id' => 1294,
                'name' => 'Kingston upon Thames',
                'uuid' => $faker->uuid , 'abbr' => 'KTT',
                'country_id' => 78,
            ),

            array(
                'id' => 1295,
                'name' => 'Knowsley',
                'uuid' => $faker->uuid , 'abbr' => 'KWL',
                'country_id' => 78,
            ),

            array(
                'id' => 1296,
                'name' => 'Lancashire',
                'uuid' => $faker->uuid , 'abbr' => 'LAN',
                'country_id' => 78,
            ),

            array(
                'id' => 1297,
                'name' => 'Lambeth',
                'uuid' => $faker->uuid , 'abbr' => 'LBH',
                'country_id' => 78,
            ),

            array(
                'id' => 1298,
                'name' => 'Leicester',
                'uuid' => $faker->uuid , 'abbr' => 'LCE',
                'country_id' => 78,
            ),

            array(
                'id' => 1299,
                'name' => 'Leeds',
                'uuid' => $faker->uuid , 'abbr' => 'LDS',
                'country_id' => 78,
            ),

            array(
                'id' => 1300,
                'name' => 'Leicestershire',
                'uuid' => $faker->uuid , 'abbr' => 'LEC',
                'country_id' => 78,
            ),

            array(
                'id' => 1301,
                'name' => 'Lewisham',
                'uuid' => $faker->uuid , 'abbr' => 'LEW',
                'country_id' => 78,
            ),

            array(
                'id' => 1302,
                'name' => 'Lincolnshire',
                'uuid' => $faker->uuid , 'abbr' => 'LIN',
                'country_id' => 78,
            ),

            array(
                'id' => 1303,
                'name' => 'Liverpool',
                'uuid' => $faker->uuid , 'abbr' => 'LIV',
                'country_id' => 78,
            ),

            array(
                'id' => 1304,
                'name' => 'Limavady',
                'uuid' => $faker->uuid , 'abbr' => 'LMV',
                'country_id' => 78,
            ),

            array(
                'id' => 1305,
                'name' => 'London, City of',
                'uuid' => $faker->uuid , 'abbr' => 'LND',
                'country_id' => 78,
            ),

            array(
                'id' => 1306,
                'name' => 'Larne',
                'uuid' => $faker->uuid , 'abbr' => 'LRN',
                'country_id' => 78,
            ),

            array(
                'id' => 1307,
                'name' => 'Lisburn',
                'uuid' => $faker->uuid , 'abbr' => 'LSB',
                'country_id' => 78,
            ),

            array(
                'id' => 1308,
                'name' => 'Luton',
                'uuid' => $faker->uuid , 'abbr' => 'LUT',
                'country_id' => 78,
            ),

            array(
                'id' => 1309,
                'name' => 'Manchester',
                'uuid' => $faker->uuid , 'abbr' => 'MAN',
                'country_id' => 78,
            ),

            array(
                'id' => 1310,
                'name' => 'Middlesbrough',
                'uuid' => $faker->uuid , 'abbr' => 'MDB',
                'country_id' => 78,
            ),

            array(
                'id' => 1311,
                'name' => 'Medway',
                'uuid' => $faker->uuid , 'abbr' => 'MDW',
                'country_id' => 78,
            ),

            array(
                'id' => 1312,
                'name' => 'Magherafelt',
                'uuid' => $faker->uuid , 'abbr' => 'MFT',
                'country_id' => 78,
            ),

            array(
                'id' => 1313,
                'name' => 'Milton Keynes',
                'uuid' => $faker->uuid , 'abbr' => 'MIK',
                'country_id' => 78,
            ),

            array(
                'id' => 1314,
                'name' => 'Midlothian',
                'uuid' => $faker->uuid , 'abbr' => 'MLN',
                'country_id' => 78,
            ),

            array(
                'id' => 1315,
                'name' => 'Monmouthshire [Sir Fynwy GB-FYN]',
                'uuid' => $faker->uuid , 'abbr' => 'MON',
                'country_id' => 78,
            ),

            array(
                'id' => 1316,
                'name' => 'Merton',
                'uuid' => $faker->uuid , 'abbr' => 'MRT',
                'country_id' => 78,
            ),

            array(
                'id' => 1317,
                'name' => 'Moray',
                'uuid' => $faker->uuid , 'abbr' => 'MRY',
                'country_id' => 78,
            ),

            array(
                'id' => 1318,
                'name' => 'Merthyr Tydfil [Merthyr Tudful GB-MTU]',
                'uuid' => $faker->uuid , 'abbr' => 'MTY',
                'country_id' => 78,
            ),

            array(
                'id' => 1319,
                'name' => 'Moyle',
                'uuid' => $faker->uuid , 'abbr' => 'MYL',
                'country_id' => 78,
            ),

            array(
                'id' => 1320,
                'name' => 'North Ayrshire',
                'uuid' => $faker->uuid , 'abbr' => 'NAY',
                'country_id' => 78,
            ),

            array(
                'id' => 1321,
                'name' => 'Northumberland',
                'uuid' => $faker->uuid , 'abbr' => 'NBL',
                'country_id' => 78,
            ),

            array(
                'id' => 1322,
                'name' => 'North Down',
                'uuid' => $faker->uuid , 'abbr' => 'NDN',
                'country_id' => 78,
            ),

            array(
                'id' => 1323,
                'name' => 'North East Lincolnshire',
                'uuid' => $faker->uuid , 'abbr' => 'NEL',
                'country_id' => 78,
            ),

            array(
                'id' => 1324,
                'name' => 'Newcastle upon Tyne',
                'uuid' => $faker->uuid , 'abbr' => 'NET',
                'country_id' => 78,
            ),

            array(
                'id' => 1325,
                'name' => 'Norfolk',
                'uuid' => $faker->uuid , 'abbr' => 'NFK',
                'country_id' => 78,
            ),

            array(
                'id' => 1326,
                'name' => 'Nottingham',
                'uuid' => $faker->uuid , 'abbr' => 'NGM',
                'country_id' => 78,
            ),

            array(
                'id' => 1327,
                'name' => 'North Lanarkshire',
                'uuid' => $faker->uuid , 'abbr' => 'NLK',
                'country_id' => 78,
            ),

            array(
                'id' => 1328,
                'name' => 'North Lincolnshire',
                'uuid' => $faker->uuid , 'abbr' => 'NLN',
                'country_id' => 78,
            ),

            array(
                'id' => 1329,
                'name' => 'North Somerset',
                'uuid' => $faker->uuid , 'abbr' => 'NSM',
                'country_id' => 78,
            ),

            array(
                'id' => 1330,
                'name' => 'Newtownabbey',
                'uuid' => $faker->uuid , 'abbr' => 'NTA',
                'country_id' => 78,
            ),

            array(
                'id' => 1331,
                'name' => 'Northamptonshire',
                'uuid' => $faker->uuid , 'abbr' => 'NTH',
                'country_id' => 78,
            ),

            array(
                'id' => 1332,
                'name' => 'Neath Port Talbot [Castell-nedd Port Talbot GB-CTL]',
                'uuid' => $faker->uuid , 'abbr' => 'NTL',
                'country_id' => 78,
            ),

            array(
                'id' => 1333,
                'name' => 'Nottinghamshire',
                'uuid' => $faker->uuid , 'abbr' => 'NTT',
                'country_id' => 78,
            ),

            array(
                'id' => 1334,
                'name' => 'North Tyneside',
                'uuid' => $faker->uuid , 'abbr' => 'NTY',
                'country_id' => 78,
            ),

            array(
                'id' => 1335,
                'name' => 'Newham',
                'uuid' => $faker->uuid , 'abbr' => 'NWM',
                'country_id' => 78,
            ),

            array(
                'id' => 1336,
                'name' => 'Newport [Casnewydd GB-CNW]',
                'uuid' => $faker->uuid , 'abbr' => 'NWP',
                'country_id' => 78,
            ),

            array(
                'id' => 1337,
                'name' => 'North Yorkshire',
                'uuid' => $faker->uuid , 'abbr' => 'NYK',
                'country_id' => 78,
            ),

            array(
                'id' => 1338,
                'name' => 'Newry and Mourne',
                'uuid' => $faker->uuid , 'abbr' => 'NYM',
                'country_id' => 78,
            ),

            array(
                'id' => 1339,
                'name' => 'Oldham',
                'uuid' => $faker->uuid , 'abbr' => 'OLD',
                'country_id' => 78,
            ),

            array(
                'id' => 1340,
                'name' => 'Omagh',
                'uuid' => $faker->uuid , 'abbr' => 'OMH',
                'country_id' => 78,
            ),

            array(
                'id' => 1341,
                'name' => 'Orkney Islands',
                'uuid' => $faker->uuid , 'abbr' => 'ORK',
                'country_id' => 78,
            ),

            array(
                'id' => 1342,
                'name' => 'Oxfordshire',
                'uuid' => $faker->uuid , 'abbr' => 'OXF',
                'country_id' => 78,
            ),

            array(
                'id' => 1343,
                'name' => 'Pembrokeshire [Sir Benfro GB-BNF]',
                'uuid' => $faker->uuid , 'abbr' => 'PEM',
                'country_id' => 78,
            ),

            array(
                'id' => 1344,
                'name' => 'Perth and Kinross',
                'uuid' => $faker->uuid , 'abbr' => 'PKN',
                'country_id' => 78,
            ),

            array(
                'id' => 1345,
                'name' => 'Plymouth',
                'uuid' => $faker->uuid , 'abbr' => 'PLY',
                'country_id' => 78,
            ),

            array(
                'id' => 1346,
                'name' => 'Poole',
                'uuid' => $faker->uuid , 'abbr' => 'POL',
                'country_id' => 78,
            ),

            array(
                'id' => 1347,
                'name' => 'Portsmouth',
                'uuid' => $faker->uuid , 'abbr' => 'POR',
                'country_id' => 78,
            ),

            array(
                'id' => 1348,
                'name' => 'Powys',
                'uuid' => $faker->uuid , 'abbr' => 'POW',
                'country_id' => 78,
            ),

            array(
                'id' => 1349,
                'name' => 'Peterborough',
                'uuid' => $faker->uuid , 'abbr' => 'PTE',
                'country_id' => 78,
            ),

            array(
                'id' => 1350,
                'name' => 'Redcar and Cleveland',
                'uuid' => $faker->uuid , 'abbr' => 'RCC',
                'country_id' => 78,
            ),

            array(
                'id' => 1351,
                'name' => 'Rochdale',
                'uuid' => $faker->uuid , 'abbr' => 'RCH',
                'country_id' => 78,
            ),

            array(
                'id' => 1352,
                'name' => 'Rhondda, Cynon, Taff [Rhondda, Cynon,Taf]',
                'uuid' => $faker->uuid , 'abbr' => 'RCT',
                'country_id' => 78,
            ),

            array(
                'id' => 1353,
                'name' => 'Redbridge',
                'uuid' => $faker->uuid , 'abbr' => 'RDB',
                'country_id' => 78,
            ),

            array(
                'id' => 1354,
                'name' => 'Reading',
                'uuid' => $faker->uuid , 'abbr' => 'RDG',
                'country_id' => 78,
            ),

            array(
                'id' => 1355,
                'name' => 'Renfrewshire',
                'uuid' => $faker->uuid , 'abbr' => 'RFW',
                'country_id' => 78,
            ),

            array(
                'id' => 1356,
                'name' => 'Richmond upon Thames',
                'uuid' => $faker->uuid , 'abbr' => 'RIC',
                'country_id' => 78,
            ),

            array(
                'id' => 1357,
                'name' => 'Rotherham',
                'uuid' => $faker->uuid , 'abbr' => 'ROT',
                'country_id' => 78,
            ),

            array(
                'id' => 1358,
                'name' => 'Rutland',
                'uuid' => $faker->uuid , 'abbr' => 'RUT',
                'country_id' => 78,
            ),

            array(
                'id' => 1359,
                'name' => 'Sandwell',
                'uuid' => $faker->uuid , 'abbr' => 'SAW',
                'country_id' => 78,
            ),

            array(
                'id' => 1360,
                'name' => 'South Ayrshire',
                'uuid' => $faker->uuid , 'abbr' => 'SAY',
                'country_id' => 78,
            ),

            array(
                'id' => 1361,
                'name' => 'Scottish Borders, The',
                'uuid' => $faker->uuid , 'abbr' => 'SCB',
                'country_id' => 78,
            ),

            array(
                'id' => 1362,
                'name' => 'Suffolk',
                'uuid' => $faker->uuid , 'abbr' => 'SFK',
                'country_id' => 78,
            ),

            array(
                'id' => 1363,
                'name' => 'Sefton',
                'uuid' => $faker->uuid , 'abbr' => 'SFT',
                'country_id' => 78,
            ),

            array(
                'id' => 1364,
                'name' => 'South Gloucestershire',
                'uuid' => $faker->uuid , 'abbr' => 'SGC',
                'country_id' => 78,
            ),

            array(
                'id' => 1365,
                'name' => 'Sheffield',
                'uuid' => $faker->uuid , 'abbr' => 'SHF',
                'country_id' => 78,
            ),

            array(
                'id' => 1366,
                'name' => 'St. Helens',
                'uuid' => $faker->uuid , 'abbr' => 'SHN',
                'country_id' => 78,
            ),

            array(
                'id' => 1367,
                'name' => 'Shropshire',
                'uuid' => $faker->uuid , 'abbr' => 'SHR',
                'country_id' => 78,
            ),

            array(
                'id' => 1368,
                'name' => 'Stockport',
                'uuid' => $faker->uuid , 'abbr' => 'SKP',
                'country_id' => 78,
            ),

            array(
                'id' => 1369,
                'name' => 'Salford',
                'uuid' => $faker->uuid , 'abbr' => 'SLF',
                'country_id' => 78,
            ),

            array(
                'id' => 1370,
                'name' => 'Slough',
                'uuid' => $faker->uuid , 'abbr' => 'SLG',
                'country_id' => 78,
            ),

            array(
                'id' => 1371,
                'name' => 'South Lanarkshire',
                'uuid' => $faker->uuid , 'abbr' => 'SLK',
                'country_id' => 78,
            ),

            array(
                'id' => 1372,
                'name' => 'Sunderland',
                'uuid' => $faker->uuid , 'abbr' => 'SND',
                'country_id' => 78,
            ),

            array(
                'id' => 1373,
                'name' => 'Solihull',
                'uuid' => $faker->uuid , 'abbr' => 'SOL',
                'country_id' => 78,
            ),

            array(
                'id' => 1374,
                'name' => 'Somerset',
                'uuid' => $faker->uuid , 'abbr' => 'SOM',
                'country_id' => 78,
            ),

            array(
                'id' => 1375,
                'name' => 'Southend-on-Sea',
                'uuid' => $faker->uuid , 'abbr' => 'SOS',
                'country_id' => 78,
            ),

            array(
                'id' => 1376,
                'name' => 'Surrey',
                'uuid' => $faker->uuid , 'abbr' => 'SRY',
                'country_id' => 78,
            ),

            array(
                'id' => 1377,
                'name' => 'Strabane',
                'uuid' => $faker->uuid , 'abbr' => 'STB',
                'country_id' => 78,
            ),

            array(
                'id' => 1378,
                'name' => 'Stoke-on-Trent',
                'uuid' => $faker->uuid , 'abbr' => 'STE',
                'country_id' => 78,
            ),

            array(
                'id' => 1379,
                'name' => 'Stirling',
                'uuid' => $faker->uuid , 'abbr' => 'STG',
                'country_id' => 78,
            ),

            array(
                'id' => 1380,
                'name' => 'Southampton',
                'uuid' => $faker->uuid , 'abbr' => 'STH',
                'country_id' => 78,
            ),

            array(
                'id' => 1381,
                'name' => 'Sutton',
                'uuid' => $faker->uuid , 'abbr' => 'STN',
                'country_id' => 78,
            ),

            array(
                'id' => 1382,
                'name' => 'Staffordshire',
                'uuid' => $faker->uuid , 'abbr' => 'STS',
                'country_id' => 78,
            ),

            array(
                'id' => 1383,
                'name' => 'Stockton-on-Tees',
                'uuid' => $faker->uuid , 'abbr' => 'STT',
                'country_id' => 78,
            ),

            array(
                'id' => 1384,
                'name' => 'South Tyneside',
                'uuid' => $faker->uuid , 'abbr' => 'STY',
                'country_id' => 78,
            ),

            array(
                'id' => 1385,
                'name' => 'Swansea [Abertawe GB-ATA]',
                'uuid' => $faker->uuid , 'abbr' => 'SWA',
                'country_id' => 78,
            ),

            array(
                'id' => 1386,
                'name' => 'Swindon',
                'uuid' => $faker->uuid , 'abbr' => 'SWD',
                'country_id' => 78,
            ),

            array(
                'id' => 1387,
                'name' => 'Southwark',
                'uuid' => $faker->uuid , 'abbr' => 'SWK',
                'country_id' => 78,
            ),

            array(
                'id' => 1388,
                'name' => 'Tameside',
                'uuid' => $faker->uuid , 'abbr' => 'TAM',
                'country_id' => 78,
            ),

            array(
                'id' => 1389,
                'name' => 'Telford and Wrekin',
                'uuid' => $faker->uuid , 'abbr' => 'TFW',
                'country_id' => 78,
            ),

            array(
                'id' => 1390,
                'name' => 'Thurrock',
                'uuid' => $faker->uuid , 'abbr' => 'THR',
                'country_id' => 78,
            ),

            array(
                'id' => 1391,
                'name' => 'Torbay',
                'uuid' => $faker->uuid , 'abbr' => 'TOB',
                'country_id' => 78,
            ),

            array(
                'id' => 1392,
                'name' => 'Torfaen [Tor-faen]',
                'uuid' => $faker->uuid , 'abbr' => 'TOF',
                'country_id' => 78,
            ),

            array(
                'id' => 1393,
                'name' => 'Trafford',
                'uuid' => $faker->uuid , 'abbr' => 'TRF',
                'country_id' => 78,
            ),

            array(
                'id' => 1394,
                'name' => 'Tower Hamlets',
                'uuid' => $faker->uuid , 'abbr' => 'TWH',
                'country_id' => 78,
            ),

            array(
                'id' => 1395,
                'name' => 'Vale of Glamorgan, The [Bro Morgannwg GB-BMG]',
                'uuid' => $faker->uuid , 'abbr' => 'VGL',
                'country_id' => 78,
            ),

            array(
                'id' => 1396,
                'name' => 'Warwickshire',
                'uuid' => $faker->uuid , 'abbr' => 'WAR',
                'country_id' => 78,
            ),

            array(
                'id' => 1397,
                'name' => 'West Berkshire',
                'uuid' => $faker->uuid , 'abbr' => 'WBK',
                'country_id' => 78,
            ),

            array(
                'id' => 1398,
                'name' => 'West Dunbartonshire',
                'uuid' => $faker->uuid , 'abbr' => 'WDU',
                'country_id' => 78,
            ),

            array(
                'id' => 1399,
                'name' => 'Waltham Forest',
                'uuid' => $faker->uuid , 'abbr' => 'WFT',
                'country_id' => 78,
            ),

            array(
                'id' => 1400,
                'name' => 'Wigan',
                'uuid' => $faker->uuid , 'abbr' => 'WGN',
                'country_id' => 78,
            ),

            array(
                'id' => 1401,
                'name' => 'Wiltshire',
                'uuid' => $faker->uuid , 'abbr' => 'WIL',
                'country_id' => 78,
            ),

            array(
                'id' => 1402,
                'name' => 'Wakefield',
                'uuid' => $faker->uuid , 'abbr' => 'WKF',
                'country_id' => 78,
            ),

            array(
                'id' => 1403,
                'name' => 'Walsall',
                'uuid' => $faker->uuid , 'abbr' => 'WLL',
                'country_id' => 78,
            ),

            array(
                'id' => 1404,
                'name' => 'West Lothian',
                'uuid' => $faker->uuid , 'abbr' => 'WLN',
                'country_id' => 78,
            ),

            array(
                'id' => 1405,
                'name' => 'Wolverhampton',
                'uuid' => $faker->uuid , 'abbr' => 'WLV',
                'country_id' => 78,
            ),

            array(
                'id' => 1406,
                'name' => 'Wandsworth',
                'uuid' => $faker->uuid , 'abbr' => 'WND',
                'country_id' => 78,
            ),

            array(
                'id' => 1407,
                'name' => 'Windsor and Maidenhead',
                'uuid' => $faker->uuid , 'abbr' => 'WNM',
                'country_id' => 78,
            ),

            array(
                'id' => 1408,
                'name' => 'Wokingham',
                'uuid' => $faker->uuid , 'abbr' => 'WOK',
                'country_id' => 78,
            ),

            array(
                'id' => 1409,
                'name' => 'Worcestershire',
                'uuid' => $faker->uuid , 'abbr' => 'WOR',
                'country_id' => 78,
            ),

            array(
                'id' => 1410,
                'name' => 'Wirral',
                'uuid' => $faker->uuid , 'abbr' => 'WRL',
                'country_id' => 78,
            ),

            array(
                'id' => 1411,
                'name' => 'Warrington',
                'uuid' => $faker->uuid , 'abbr' => 'WRT',
                'country_id' => 78,
            ),

            array(
                'id' => 1412,
                'name' => 'Wrexham [Wrecsam GB-WRC]',
                'uuid' => $faker->uuid , 'abbr' => 'WRX',
                'country_id' => 78,
            ),

            array(
                'id' => 1413,
                'name' => 'Westminster',
                'uuid' => $faker->uuid , 'abbr' => 'WSM',
                'country_id' => 78,
            ),

            array(
                'id' => 1414,
                'name' => 'West Sussex',
                'uuid' => $faker->uuid , 'abbr' => 'WSX',
                'country_id' => 78,
            ),

            array(
                'id' => 1415,
                'name' => 'York',
                'uuid' => $faker->uuid , 'abbr' => 'YOR',
                'country_id' => 78,
            ),

            array(
                'id' => 1416,
                'name' => 'Shetland Islands',
                'uuid' => $faker->uuid , 'abbr' => 'ZET',
                'country_id' => 78,
            ),

            array(
                'id' => 1417,
                'name' => 'Saint Andrew',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 79,
            ),

            array(
                'id' => 1418,
                'name' => 'Saint David',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 79,
            ),

            array(
                'id' => 1419,
                'name' => 'Saint George',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 79,
            ),

            array(
                'id' => 1420,
                'name' => 'Saint John',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 79,
            ),

            array(
                'id' => 1421,
                'name' => 'Saint Mark',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 79,
            ),

            array(
                'id' => 1422,
                'name' => 'Saint Patrick',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 79,
            ),

            array(
                'id' => 1423,
                'name' => 'Southern Grenadine Islands',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 79,
            ),

            array(
                'id' => 1424,
                'name' => 'Abkhazia',
                'uuid' => $faker->uuid , 'abbr' => 'AB',
                'country_id' => 80,
            ),

            array(
                'id' => 1425,
                'name' => 'Ajaria',
                'uuid' => $faker->uuid , 'abbr' => 'AJ',
                'country_id' => 80,
            ),

            array(
                'id' => 1426,
                'name' => 'Guria',
                'uuid' => $faker->uuid , 'abbr' => 'GU',
                'country_id' => 80,
            ),

            array(
                'id' => 1427,
                'name' => 'Imereti',
                'uuid' => $faker->uuid , 'abbr' => 'IM',
                'country_id' => 80,
            ),

            array(
                'id' => 1428,
                'name' => 'Kakheti',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 80,
            ),

            array(
                'id' => 1429,
                'name' => 'Kvemo Kartli',
                'uuid' => $faker->uuid , 'abbr' => 'KK',
                'country_id' => 80,
            ),

            array(
                'id' => 1430,
                'name' => 'Mtskheta-Mtianeti',
                'uuid' => $faker->uuid , 'abbr' => 'MM',
                'country_id' => 80,
            ),

            array(
                'id' => 1431,
                'name' => 'Racha-Lechkhumi [and] Kvemo Svaneti',
                'uuid' => $faker->uuid , 'abbr' => 'RL',
                'country_id' => 80,
            ),

            array(
                'id' => 1432,
                'name' => 'Samtskhe-Javakheti',
                'uuid' => $faker->uuid , 'abbr' => 'SJ',
                'country_id' => 80,
            ),

            array(
                'id' => 1433,
                'name' => 'Shida Kartli',
                'uuid' => $faker->uuid , 'abbr' => 'SK',
                'country_id' => 80,
            ),

            array(
                'id' => 1434,
                'name' => 'Samegrelo-Zemo Svaneti',
                'uuid' => $faker->uuid , 'abbr' => 'SZ',
                'country_id' => 80,
            ),

            array(
                'id' => 1435,
                'name' => 'Tbilisi',
                'uuid' => $faker->uuid , 'abbr' => 'TB',
                'country_id' => 80,
            ),

            array(
                'id' => 1436,
                'name' => 'Greater Accra',
                'uuid' => $faker->uuid , 'abbr' => 'AA',
                'country_id' => 83,
            ),

            array(
                'id' => 1437,
                'name' => 'Ashanti',
                'uuid' => $faker->uuid , 'abbr' => 'AH',
                'country_id' => 83,
            ),

            array(
                'id' => 1438,
                'name' => 'Brong-Ahafo',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 83,
            ),

            array(
                'id' => 1439,
                'name' => 'Central',
                'uuid' => $faker->uuid , 'abbr' => 'CP',
                'country_id' => 83,
            ),

            array(
                'id' => 1440,
                'name' => 'Eastern',
                'uuid' => $faker->uuid , 'abbr' => 'EP',
                'country_id' => 83,
            ),

            array(
                'id' => 1441,
                'name' => 'Northern',
                'uuid' => $faker->uuid , 'abbr' => 'NP',
                'country_id' => 83,
            ),

            array(
                'id' => 1442,
                'name' => 'Volta',
                'uuid' => $faker->uuid , 'abbr' => 'TV',
                'country_id' => 83,
            ),

            array(
                'id' => 1443,
                'name' => 'Upper East',
                'uuid' => $faker->uuid , 'abbr' => 'UE',
                'country_id' => 83,
            ),

            array(
                'id' => 1444,
                'name' => 'Upper West',
                'uuid' => $faker->uuid , 'abbr' => 'UW',
                'country_id' => 83,
            ),

            array(
                'id' => 1445,
                'name' => 'Western',
                'uuid' => $faker->uuid , 'abbr' => 'WP',
                'country_id' => 83,
            ),

            array(
                'id' => 1446,
                'name' => 'Banjul',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 86,
            ),

            array(
                'id' => 1447,
                'name' => 'Lower River',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 86,
            ),

            array(
                'id' => 1448,
                'name' => 'MacCarthy Island',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 86,
            ),

            array(
                'id' => 1449,
                'name' => 'North Bank',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 86,
            ),

            array(
                'id' => 1450,
                'name' => 'Upper River',
                'uuid' => $faker->uuid , 'abbr' => 'U',
                'country_id' => 86,
            ),

            array(
                'id' => 1451,
                'name' => 'Western',
                'uuid' => $faker->uuid , 'abbr' => 'W',
                'country_id' => 86,
            ),

            array(
                'id' => 1452,
                'name' => 'Beyla',
                'uuid' => $faker->uuid , 'abbr' => 'BE',
                'country_id' => 87,
            ),

            array(
                'id' => 1453,
                'name' => 'Boffa',
                'uuid' => $faker->uuid , 'abbr' => 'BF',
                'country_id' => 87,
            ),

            array(
                'id' => 1454,
                'name' => 'Boké',
                'uuid' => $faker->uuid , 'abbr' => 'BK',
                'country_id' => 87,
            ),

            array(
                'id' => 1455,
                'name' => 'Conakry',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 87,
            ),

            array(
                'id' => 1456,
                'name' => 'Coyah',
                'uuid' => $faker->uuid , 'abbr' => 'CO',
                'country_id' => 87,
            ),

            array(
                'id' => 1457,
                'name' => 'Dabola',
                'uuid' => $faker->uuid , 'abbr' => 'DB',
                'country_id' => 87,
            ),

            array(
                'id' => 1458,
                'name' => 'Dinguiraye',
                'uuid' => $faker->uuid , 'abbr' => 'DI',
                'country_id' => 87,
            ),

            array(
                'id' => 1459,
                'name' => 'Dalaba',
                'uuid' => $faker->uuid , 'abbr' => 'DL',
                'country_id' => 87,
            ),

            array(
                'id' => 1460,
                'name' => 'Dubréka',
                'uuid' => $faker->uuid , 'abbr' => 'DU',
                'country_id' => 87,
            ),

            array(
                'id' => 1461,
                'name' => 'Faranah',
                'uuid' => $faker->uuid , 'abbr' => 'FA',
                'country_id' => 87,
            ),

            array(
                'id' => 1462,
                'name' => 'Forécariah',
                'uuid' => $faker->uuid , 'abbr' => 'FO',
                'country_id' => 87,
            ),

            array(
                'id' => 1463,
                'name' => 'Fria',
                'uuid' => $faker->uuid , 'abbr' => 'FR',
                'country_id' => 87,
            ),

            array(
                'id' => 1464,
                'name' => 'Gaoual',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 87,
            ),

            array(
                'id' => 1465,
                'name' => 'Guékédou',
                'uuid' => $faker->uuid , 'abbr' => 'GU',
                'country_id' => 87,
            ),

            array(
                'id' => 1466,
                'name' => 'Kankan',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 87,
            ),

            array(
                'id' => 1467,
                'name' => 'Koubia',
                'uuid' => $faker->uuid , 'abbr' => 'KB',
                'country_id' => 87,
            ),

            array(
                'id' => 1468,
                'name' => 'Kindia',
                'uuid' => $faker->uuid , 'abbr' => 'KD',
                'country_id' => 87,
            ),

            array(
                'id' => 1469,
                'name' => 'Kérouané',
                'uuid' => $faker->uuid , 'abbr' => 'KE',
                'country_id' => 87,
            ),

            array(
                'id' => 1470,
                'name' => 'Koundara',
                'uuid' => $faker->uuid , 'abbr' => 'KN',
                'country_id' => 87,
            ),

            array(
                'id' => 1471,
                'name' => 'Kouroussa',
                'uuid' => $faker->uuid , 'abbr' => 'KO',
                'country_id' => 87,
            ),

            array(
                'id' => 1472,
                'name' => 'Kissidougou',
                'uuid' => $faker->uuid , 'abbr' => 'KS',
                'country_id' => 87,
            ),

            array(
                'id' => 1473,
                'name' => 'Labé',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 87,
            ),

            array(
                'id' => 1474,
                'name' => 'Lélouma',
                'uuid' => $faker->uuid , 'abbr' => 'LE',
                'country_id' => 87,
            ),

            array(
                'id' => 1475,
                'name' => 'Lola',
                'uuid' => $faker->uuid , 'abbr' => 'LO',
                'country_id' => 87,
            ),

            array(
                'id' => 1476,
                'name' => 'Macenta',
                'uuid' => $faker->uuid , 'abbr' => 'MC',
                'country_id' => 87,
            ),

            array(
                'id' => 1477,
                'name' => 'Mandiana',
                'uuid' => $faker->uuid , 'abbr' => 'MD',
                'country_id' => 87,
            ),

            array(
                'id' => 1478,
                'name' => 'Mali',
                'uuid' => $faker->uuid , 'abbr' => 'ML',
                'country_id' => 87,
            ),

            array(
                'id' => 1479,
                'name' => 'Mamou',
                'uuid' => $faker->uuid , 'abbr' => 'MM',
                'country_id' => 87,
            ),

            array(
                'id' => 1480,
                'name' => 'Nzérékoré',
                'uuid' => $faker->uuid , 'abbr' => 'NZ',
                'country_id' => 87,
            ),

            array(
                'id' => 1481,
                'name' => 'Pita',
                'uuid' => $faker->uuid , 'abbr' => 'PI',
                'country_id' => 87,
            ),

            array(
                'id' => 1482,
                'name' => 'Siguiri',
                'uuid' => $faker->uuid , 'abbr' => 'SI',
                'country_id' => 87,
            ),

            array(
                'id' => 1483,
                'name' => 'Télimélé',
                'uuid' => $faker->uuid , 'abbr' => 'TE',
                'country_id' => 87,
            ),

            array(
                'id' => 1484,
                'name' => 'Tougué',
                'uuid' => $faker->uuid , 'abbr' => 'TO',
                'country_id' => 87,
            ),

            array(
                'id' => 1485,
                'name' => 'Yomou',
                'uuid' => $faker->uuid , 'abbr' => 'YO',
                'country_id' => 87,
            ),

            array(
                'id' => 1486,
                'name' => 'Annobón',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 89,
            ),

            array(
                'id' => 1487,
                'name' => 'Bioko Norte',
                'uuid' => $faker->uuid , 'abbr' => 'BN',
                'country_id' => 89,
            ),

            array(
                'id' => 1488,
                'name' => 'Bioko Sur',
                'uuid' => $faker->uuid , 'abbr' => 'BS',
                'country_id' => 89,
            ),

            array(
                'id' => 1489,
                'name' => 'Región Continental',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 89,
            ),

            array(
                'id' => 1490,
                'name' => 'Centro Sur',
                'uuid' => $faker->uuid , 'abbr' => 'CS',
                'country_id' => 89,
            ),

            array(
                'id' => 1491,
                'name' => 'Región Insular',
                'uuid' => $faker->uuid , 'abbr' => 'I',
                'country_id' => 89,
            ),

            array(
                'id' => 1492,
                'name' => 'Kie-Ntem',
                'uuid' => $faker->uuid , 'abbr' => 'KN',
                'country_id' => 89,
            ),

            array(
                'id' => 1493,
                'name' => 'Litoral',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 89,
            ),

            array(
                'id' => 1494,
                'name' => 'Wele-Nzás',
                'uuid' => $faker->uuid , 'abbr' => 'WN',
                'country_id' => 89,
            ),

            array(
                'id' => 1495,
                'name' => 'Aitolia-Akarnania',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 90,
            ),

            array(
                'id' => 1496,
                'name' => 'Voiotia',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 90,
            ),

            array(
                'id' => 1497,
                'name' => 'Evvoia',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 90,
            ),

            array(
                'id' => 1498,
                'name' => 'Evrytania',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 90,
            ),

            array(
                'id' => 1499,
                'name' => 'Fthiotis',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 90,
            ),

            array(
                'id' => 1500,
                'name' => 'Fokis',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 90,
            ),

            array(
                'id' => 1501,
                'name' => 'Argolis',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 90,
            ),

            array(
                'id' => 1502,
                'name' => 'Arkadia',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 90,
            ),

            array(
                'id' => 1503,
                'name' => 'Achaïa',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 90,
            ),

            array(
                'id' => 1504,
                'name' => 'Ileia',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 90,
            ),

            array(
                'id' => 1505,
                'name' => 'Korinthia',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 90,
            ),

            array(
                'id' => 1506,
                'name' => 'Lakonia',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 90,
            ),

            array(
                'id' => 1507,
                'name' => 'Messinia',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 90,
            ),

            array(
                'id' => 1508,
                'name' => 'Zakynthos',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 90,
            ),

            array(
                'id' => 1509,
                'name' => 'Kerkyra',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 90,
            ),

            array(
                'id' => 1510,
                'name' => 'Kefallinia',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 90,
            ),

            array(
                'id' => 1511,
                'name' => 'Lefkas',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 90,
            ),

            array(
                'id' => 1512,
                'name' => 'Arta',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 90,
            ),

            array(
                'id' => 1513,
                'name' => 'Thesprotia',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 90,
            ),

            array(
                'id' => 1514,
                'name' => 'Ioannina',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 90,
            ),

            array(
                'id' => 1515,
                'name' => 'Preveza',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 90,
            ),

            array(
                'id' => 1516,
                'name' => 'Karditsa',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 90,
            ),

            array(
                'id' => 1517,
                'name' => 'Larisa',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 90,
            ),

            array(
                'id' => 1518,
                'name' => 'Magnisia',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 90,
            ),

            array(
                'id' => 1519,
                'name' => 'Trikala',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 90,
            ),

            array(
                'id' => 1520,
                'name' => 'Grevena',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 90,
            ),

            array(
                'id' => 1521,
                'name' => 'Drama',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 90,
            ),

            array(
                'id' => 1522,
                'name' => 'Imathia',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 90,
            ),

            array(
                'id' => 1523,
                'name' => 'Thessaloniki',
                'uuid' => $faker->uuid , 'abbr' => 54,
                'country_id' => 90,
            ),

            array(
                'id' => 1524,
                'name' => 'Kavalla',
                'uuid' => $faker->uuid , 'abbr' => 55,
                'country_id' => 90,
            ),

            array(
                'id' => 1525,
                'name' => 'Kastoria',
                'uuid' => $faker->uuid , 'abbr' => 56,
                'country_id' => 90,
            ),

            array(
                'id' => 1526,
                'name' => 'Kilkis',
                'uuid' => $faker->uuid , 'abbr' => 57,
                'country_id' => 90,
            ),

            array(
                'id' => 1527,
                'name' => 'Kozani',
                'uuid' => $faker->uuid , 'abbr' => 58,
                'country_id' => 90,
            ),

            array(
                'id' => 1528,
                'name' => 'Pella',
                'uuid' => $faker->uuid , 'abbr' => 59,
                'country_id' => 90,
            ),

            array(
                'id' => 1529,
                'name' => 'Pieria',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 90,
            ),

            array(
                'id' => 1530,
                'name' => 'Serrai',
                'uuid' => $faker->uuid , 'abbr' => 62,
                'country_id' => 90,
            ),

            array(
                'id' => 1531,
                'name' => 'Florina',
                'uuid' => $faker->uuid , 'abbr' => 63,
                'country_id' => 90,
            ),

            array(
                'id' => 1532,
                'name' => 'Chalkidiki',
                'uuid' => $faker->uuid , 'abbr' => 64,
                'country_id' => 90,
            ),

            array(
                'id' => 1533,
                'name' => 'Agio Oros',
                'uuid' => $faker->uuid , 'abbr' => 69,
                'country_id' => 90,
            ),

            array(
                'id' => 1534,
                'name' => 'Evros',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 90,
            ),

            array(
                'id' => 1535,
                'name' => 'Xanthi',
                'uuid' => $faker->uuid , 'abbr' => 72,
                'country_id' => 90,
            ),

            array(
                'id' => 1536,
                'name' => 'Rodopi',
                'uuid' => $faker->uuid , 'abbr' => 73,
                'country_id' => 90,
            ),

            array(
                'id' => 1537,
                'name' => 'Dodekanisos',
                'uuid' => $faker->uuid , 'abbr' => 81,
                'country_id' => 90,
            ),

            array(
                'id' => 1538,
                'name' => 'Kyklades',
                'uuid' => $faker->uuid , 'abbr' => 82,
                'country_id' => 90,
            ),

            array(
                'id' => 1539,
                'name' => 'Lesvos',
                'uuid' => $faker->uuid , 'abbr' => 83,
                'country_id' => 90,
            ),

            array(
                'id' => 1540,
                'name' => 'Samos',
                'uuid' => $faker->uuid , 'abbr' => 84,
                'country_id' => 90,
            ),

            array(
                'id' => 1541,
                'name' => 'Chios',
                'uuid' => $faker->uuid , 'abbr' => 85,
                'country_id' => 90,
            ),

            array(
                'id' => 1542,
                'name' => 'Irakleion',
                'uuid' => $faker->uuid , 'abbr' => 91,
                'country_id' => 90,
            ),

            array(
                'id' => 1543,
                'name' => 'Lasithion',
                'uuid' => $faker->uuid , 'abbr' => 92,
                'country_id' => 90,
            ),

            array(
                'id' => 1544,
                'name' => 'Rethymnon',
                'uuid' => $faker->uuid , 'abbr' => 93,
                'country_id' => 90,
            ),

            array(
                'id' => 1545,
                'name' => 'Chania',
                'uuid' => $faker->uuid , 'abbr' => 94,
                'country_id' => 90,
            ),

            array(
                'id' => 1546,
                'name' => 'Attiki',
                'uuid' => $faker->uuid , 'abbr' => 'A1',
                'country_id' => 90,
            ),

            array(
                'id' => 1547,
                'name' => 'Alta Verapaz',
                'uuid' => $faker->uuid , 'abbr' => 'AV',
                'country_id' => 92,
            ),

            array(
                'id' => 1548,
                'name' => 'Baja Verapaz',
                'uuid' => $faker->uuid , 'abbr' => 'BV',
                'country_id' => 92,
            ),

            array(
                'id' => 1549,
                'name' => 'Chimaltenango',
                'uuid' => $faker->uuid , 'abbr' => 'CM',
                'country_id' => 92,
            ),

            array(
                'id' => 1550,
                'name' => 'Chiquimula',
                'uuid' => $faker->uuid , 'abbr' => 'CQ',
                'country_id' => 92,
            ),

            array(
                'id' => 1551,
                'name' => 'Escuintla',
                'uuid' => $faker->uuid , 'abbr' => 'ES',
                'country_id' => 92,
            ),

            array(
                'id' => 1552,
                'name' => 'Guatemala',
                'uuid' => $faker->uuid , 'abbr' => 'GU',
                'country_id' => 92,
            ),

            array(
                'id' => 1553,
                'name' => 'Huehuetenango',
                'uuid' => $faker->uuid , 'abbr' => 'HU',
                'country_id' => 92,
            ),

            array(
                'id' => 1554,
                'name' => 'Izabal',
                'uuid' => $faker->uuid , 'abbr' => 'IZ',
                'country_id' => 92,
            ),

            array(
                'id' => 1555,
                'name' => 'Jalapa',
                'uuid' => $faker->uuid , 'abbr' => 'JA',
                'country_id' => 92,
            ),

            array(
                'id' => 1556,
                'name' => 'Jutiapa',
                'uuid' => $faker->uuid , 'abbr' => 'JU',
                'country_id' => 92,
            ),

            array(
                'id' => 1557,
                'name' => 'Petén',
                'uuid' => $faker->uuid , 'abbr' => 'PE',
                'country_id' => 92,
            ),

            array(
                'id' => 1558,
                'name' => 'El Progreso',
                'uuid' => $faker->uuid , 'abbr' => 'PR',
                'country_id' => 92,
            ),

            array(
                'id' => 1559,
                'name' => 'Quiché',
                'uuid' => $faker->uuid , 'abbr' => 'QC',
                'country_id' => 92,
            ),

            array(
                'id' => 1560,
                'name' => 'Quetzaltenango',
                'uuid' => $faker->uuid , 'abbr' => 'QZ',
                'country_id' => 92,
            ),

            array(
                'id' => 1561,
                'name' => 'Retalhuleu',
                'uuid' => $faker->uuid , 'abbr' => 'RE',
                'country_id' => 92,
            ),

            array(
                'id' => 1562,
                'name' => 'Sacatepéquez',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 92,
            ),

            array(
                'id' => 1563,
                'name' => 'San Marcos',
                'uuid' => $faker->uuid , 'abbr' => 'SM',
                'country_id' => 92,
            ),

            array(
                'id' => 1564,
                'name' => 'Sololá',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 92,
            ),

            array(
                'id' => 1565,
                'name' => 'Santa Rosa',
                'uuid' => $faker->uuid , 'abbr' => 'SR',
                'country_id' => 92,
            ),

            array(
                'id' => 1566,
                'name' => 'Suchitepéquez',
                'uuid' => $faker->uuid , 'abbr' => 'SU',
                'country_id' => 92,
            ),

            array(
                'id' => 1567,
                'name' => 'Totonicapán',
                'uuid' => $faker->uuid , 'abbr' => 'TO',
                'country_id' => 92,
            ),

            array(
                'id' => 1568,
                'name' => 'Zacapa',
                'uuid' => $faker->uuid , 'abbr' => 'ZA',
                'country_id' => 92,
            ),

            array(
                'id' => 1569,
                'name' => 'Bafatá',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 94,
            ),

            array(
                'id' => 1570,
                'name' => 'Bolama',
                'uuid' => $faker->uuid , 'abbr' => 'BL',
                'country_id' => 94,
            ),

            array(
                'id' => 1571,
                'name' => 'Biombo',
                'uuid' => $faker->uuid , 'abbr' => 'BM',
                'country_id' => 94,
            ),

            array(
                'id' => 1572,
                'name' => 'Bissau',
                'uuid' => $faker->uuid , 'abbr' => 'BS',
                'country_id' => 94,
            ),

            array(
                'id' => 1573,
                'name' => 'Cacheu',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 94,
            ),

            array(
                'id' => 1574,
                'name' => 'Gabú',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 94,
            ),

            array(
                'id' => 1575,
                'name' => 'Oio',
                'uuid' => $faker->uuid , 'abbr' => 'OI',
                'country_id' => 94,
            ),

            array(
                'id' => 1576,
                'name' => 'Quinara',
                'uuid' => $faker->uuid , 'abbr' => 'QU',
                'country_id' => 94,
            ),

            array(
                'id' => 1577,
                'name' => 'Tombali',
                'uuid' => $faker->uuid , 'abbr' => 'TO',
                'country_id' => 94,
            ),

            array(
                'id' => 1578,
                'name' => 'Barima-Waini',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 95,
            ),

            array(
                'id' => 1579,
                'name' => 'Cuyuni-Mazaruni',
                'uuid' => $faker->uuid , 'abbr' => 'CU',
                'country_id' => 95,
            ),

            array(
                'id' => 1580,
                'name' => 'Demerara-Mahaica',
                'uuid' => $faker->uuid , 'abbr' => 'DE',
                'country_id' => 95,
            ),

            array(
                'id' => 1581,
                'name' => 'East Berbice-Corentyne',
                'uuid' => $faker->uuid , 'abbr' => 'EB',
                'country_id' => 95,
            ),

            array(
                'id' => 1582,
                'name' => 'Essequibo Islands-West Demerara',
                'uuid' => $faker->uuid , 'abbr' => 'ES',
                'country_id' => 95,
            ),

            array(
                'id' => 1583,
                'name' => 'Mahaica-Berbice',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 95,
            ),

            array(
                'id' => 1584,
                'name' => 'Pomeroon-Supenaam',
                'uuid' => $faker->uuid , 'abbr' => 'PM',
                'country_id' => 95,
            ),

            array(
                'id' => 1585,
                'name' => 'Potaro-Siparuni',
                'uuid' => $faker->uuid , 'abbr' => 'PT',
                'country_id' => 95,
            ),

            array(
                'id' => 1586,
                'name' => 'Upper Demerara-Berbice',
                'uuid' => $faker->uuid , 'abbr' => 'UD',
                'country_id' => 95,
            ),

            array(
                'id' => 1587,
                'name' => 'Upper Takutu-Upper Essequibo',
                'uuid' => $faker->uuid , 'abbr' => 'UT',
                'country_id' => 95,
            ),

            array(
                'id' => 1588,
                'name' => 'Atlántida',
                'uuid' => $faker->uuid , 'abbr' => 'AT',
                'country_id' => 98,
            ),

            array(
                'id' => 1589,
                'name' => 'Choluteca',
                'uuid' => $faker->uuid , 'abbr' => 'CH',
                'country_id' => 98,
            ),

            array(
                'id' => 1590,
                'name' => 'Colón',
                'uuid' => $faker->uuid , 'abbr' => 'CL',
                'country_id' => 98,
            ),

            array(
                'id' => 1591,
                'name' => 'Comayagua',
                'uuid' => $faker->uuid , 'abbr' => 'CM',
                'country_id' => 98,
            ),

            array(
                'id' => 1592,
                'name' => 'Copán',
                'uuid' => $faker->uuid , 'abbr' => 'CP',
                'country_id' => 98,
            ),

            array(
                'id' => 1593,
                'name' => 'Cortés',
                'uuid' => $faker->uuid , 'abbr' => 'CR',
                'country_id' => 98,
            ),

            array(
                'id' => 1594,
                'name' => 'El Paraíso',
                'uuid' => $faker->uuid , 'abbr' => 'EP',
                'country_id' => 98,
            ),

            array(
                'id' => 1595,
                'name' => 'Francisco Morazán',
                'uuid' => $faker->uuid , 'abbr' => 'FM',
                'country_id' => 98,
            ),

            array(
                'id' => 1596,
                'name' => 'Gracias a Dios',
                'uuid' => $faker->uuid , 'abbr' => 'GD',
                'country_id' => 98,
            ),

            array(
                'id' => 1597,
                'name' => 'Islas de la Bahía',
                'uuid' => $faker->uuid , 'abbr' => 'IB',
                'country_id' => 98,
            ),

            array(
                'id' => 1598,
                'name' => 'Intibucá',
                'uuid' => $faker->uuid , 'abbr' => 'IN',
                'country_id' => 98,
            ),

            array(
                'id' => 1599,
                'name' => 'Lempira',
                'uuid' => $faker->uuid , 'abbr' => 'LE',
                'country_id' => 98,
            ),

            array(
                'id' => 1600,
                'name' => 'La Paz',
                'uuid' => $faker->uuid , 'abbr' => 'LP',
                'country_id' => 98,
            ),

            array(
                'id' => 1601,
                'name' => 'Ocotepeque',
                'uuid' => $faker->uuid , 'abbr' => 'OC',
                'country_id' => 98,
            ),

            array(
                'id' => 1602,
                'name' => 'Olancho',
                'uuid' => $faker->uuid , 'abbr' => 'OL',
                'country_id' => 98,
            ),

            array(
                'id' => 1603,
                'name' => 'Santa Bárbara',
                'uuid' => $faker->uuid , 'abbr' => 'SB',
                'country_id' => 98,
            ),

            array(
                'id' => 1604,
                'name' => 'Valle',
                'uuid' => $faker->uuid , 'abbr' => 'VA',
                'country_id' => 98,
            ),

            array(
                'id' => 1605,
                'name' => 'Yoro',
                'uuid' => $faker->uuid , 'abbr' => 'YO',
                'country_id' => 98,
            ),

            array(
                'id' => 1606,
                'name' => 'Zagrebačka županija',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 99,
            ),

            array(
                'id' => 1607,
                'name' => 'Krapinsko-zagorska županija',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 99,
            ),

            array(
                'id' => 1608,
                'name' => 'Sisačko-moslavačka županija',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 99,
            ),

            array(
                'id' => 1609,
                'name' => 'Karlovačka županija',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 99,
            ),

            array(
                'id' => 1610,
                'name' => 'Varaždinska županija',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 99,
            ),

            array(
                'id' => 1611,
                'name' => 'Koprivničko-križevačka županija',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 99,
            ),

            array(
                'id' => 1612,
                'name' => 'Bjelovarsko-bilogorska županija',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 99,
            ),

            array(
                'id' => 1613,
                'name' => 'Primorsko-goranska županija',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 99,
            ),

            array(
                'id' => 1614,
                'name' => 'Ličko-senjska županija',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 99,
            ),

            array(
                'id' => 1615,
                'name' => 'Virovitičko-podravska županija',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 99,
            ),

            array(
                'id' => 1616,
                'name' => 'Požeško-slavonska županija',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 99,
            ),

            array(
                'id' => 1617,
                'name' => 'Brodsko-posavska županija',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 99,
            ),

            array(
                'id' => 1618,
                'name' => 'Zadarska županija',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 99,
            ),

            array(
                'id' => 1619,
                'name' => 'Osječko-baranjska županija',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 99,
            ),

            array(
                'id' => 1620,
                'name' => 'Šibensko-kninska županija',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 99,
            ),

            array(
                'id' => 1621,
                'name' => 'Vukovarsko-srijemska županija',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 99,
            ),

            array(
                'id' => 1622,
                'name' => 'Splitsko-dalmatinska županija',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 99,
            ),

            array(
                'id' => 1623,
                'name' => 'Istarska županija',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 99,
            ),

            array(
                'id' => 1624,
                'name' => 'Dubrovačko-neretvanska županija',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 99,
            ),

            array(
                'id' => 1625,
                'name' => 'Međimurska županija',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 99,
            ),

            array(
                'id' => 1626,
                'name' => 'Grad Zagreb',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 99,
            ),

            array(
                'id' => 1627,
                'name' => 'Artibonite',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 100,
            ),

            array(
                'id' => 1628,
                'name' => 'Centre',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 100,
            ),

            array(
                'id' => 1629,
                'name' => 'Grande-Anse',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 100,
            ),

            array(
                'id' => 1630,
                'name' => 'Nord',
                'uuid' => $faker->uuid , 'abbr' => 'ND',
                'country_id' => 100,
            ),

            array(
                'id' => 1631,
                'name' => 'Nord-Est',
                'uuid' => $faker->uuid , 'abbr' => 'NE',
                'country_id' => 100,
            ),

            array(
                'id' => 1632,
                'name' => 'Nord-Ouest',
                'uuid' => $faker->uuid , 'abbr' => 'NO',
                'country_id' => 100,
            ),

            array(
                'id' => 1633,
                'name' => 'Ouest',
                'uuid' => $faker->uuid , 'abbr' => 'OU',
                'country_id' => 100,
            ),

            array(
                'id' => 1634,
                'name' => 'Sud',
                'uuid' => $faker->uuid , 'abbr' => 'SD',
                'country_id' => 100,
            ),

            array(
                'id' => 1635,
                'name' => 'Sud-Est',
                'uuid' => $faker->uuid , 'abbr' => 'SE',
                'country_id' => 100,
            ),

            array(
                'id' => 1636,
                'name' => 'Baranya',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 101,
            ),

            array(
                'id' => 1637,
                'name' => 'Békéscsaba',
                'uuid' => $faker->uuid , 'abbr' => 'BC',
                'country_id' => 101,
            ),

            array(
                'id' => 1638,
                'name' => 'Békés',
                'uuid' => $faker->uuid , 'abbr' => 'BE',
                'country_id' => 101,
            ),

            array(
                'id' => 1639,
                'name' => 'Bács-Kiskun',
                'uuid' => $faker->uuid , 'abbr' => 'BK',
                'country_id' => 101,
            ),

            array(
                'id' => 1640,
                'name' => 'Budapest',
                'uuid' => $faker->uuid , 'abbr' => 'BU',
                'country_id' => 101,
            ),

            array(
                'id' => 1641,
                'name' => 'Borsod-Abaúj-Zemplén',
                'uuid' => $faker->uuid , 'abbr' => 'BZ',
                'country_id' => 101,
            ),

            array(
                'id' => 1642,
                'name' => 'Csongrád',
                'uuid' => $faker->uuid , 'abbr' => 'CS',
                'country_id' => 101,
            ),

            array(
                'id' => 1643,
                'name' => 'Debrecen',
                'uuid' => $faker->uuid , 'abbr' => 'DE',
                'country_id' => 101,
            ),

            array(
                'id' => 1644,
                'name' => 'Dunaújváros',
                'uuid' => $faker->uuid , 'abbr' => 'DU',
                'country_id' => 101,
            ),

            array(
                'id' => 1645,
                'name' => 'Eger',
                'uuid' => $faker->uuid , 'abbr' => 'EG',
                'country_id' => 101,
            ),

            array(
                'id' => 1646,
                'name' => 'Érd',
                'uuid' => $faker->uuid , 'abbr' => 'ER',
                'country_id' => 101,
            ),

            array(
                'id' => 1647,
                'name' => 'Fejér',
                'uuid' => $faker->uuid , 'abbr' => 'FE',
                'country_id' => 101,
            ),

            array(
                'id' => 1648,
                'name' => 'Győr-Moson-Sopron',
                'uuid' => $faker->uuid , 'abbr' => 'GS',
                'country_id' => 101,
            ),

            array(
                'id' => 1649,
                'name' => 'Győr',
                'uuid' => $faker->uuid , 'abbr' => 'GY',
                'country_id' => 101,
            ),

            array(
                'id' => 1650,
                'name' => 'Hajdú-Bihar',
                'uuid' => $faker->uuid , 'abbr' => 'HB',
                'country_id' => 101,
            ),

            array(
                'id' => 1651,
                'name' => 'Heves',
                'uuid' => $faker->uuid , 'abbr' => 'HE',
                'country_id' => 101,
            ),

            array(
                'id' => 1652,
                'name' => 'Hódmezővásárhely',
                'uuid' => $faker->uuid , 'abbr' => 'HV',
                'country_id' => 101,
            ),

            array(
                'id' => 1653,
                'name' => 'Jász-Nagykun-Szolnok',
                'uuid' => $faker->uuid , 'abbr' => 'JN',
                'country_id' => 101,
            ),

            array(
                'id' => 1654,
                'name' => 'Komárom-Esztergom',
                'uuid' => $faker->uuid , 'abbr' => 'KE',
                'country_id' => 101,
            ),

            array(
                'id' => 1655,
                'name' => 'Kecskemét',
                'uuid' => $faker->uuid , 'abbr' => 'KM',
                'country_id' => 101,
            ),

            array(
                'id' => 1656,
                'name' => 'Kaposvár',
                'uuid' => $faker->uuid , 'abbr' => 'KV',
                'country_id' => 101,
            ),

            array(
                'id' => 1657,
                'name' => 'Miskolc',
                'uuid' => $faker->uuid , 'abbr' => 'MI',
                'country_id' => 101,
            ),

            array(
                'id' => 1658,
                'name' => 'Nagykanizsa',
                'uuid' => $faker->uuid , 'abbr' => 'NK',
                'country_id' => 101,
            ),

            array(
                'id' => 1659,
                'name' => 'Nógrád',
                'uuid' => $faker->uuid , 'abbr' => 'NO',
                'country_id' => 101,
            ),

            array(
                'id' => 1660,
                'name' => 'Nyíregyháza',
                'uuid' => $faker->uuid , 'abbr' => 'NY',
                'country_id' => 101,
            ),

            array(
                'id' => 1661,
                'name' => 'Pest',
                'uuid' => $faker->uuid , 'abbr' => 'PE',
                'country_id' => 101,
            ),

            array(
                'id' => 1662,
                'name' => 'Pécs',
                'uuid' => $faker->uuid , 'abbr' => 'PS',
                'country_id' => 101,
            ),

            array(
                'id' => 1663,
                'name' => 'Szeged',
                'uuid' => $faker->uuid , 'abbr' => 'SD',
                'country_id' => 101,
            ),

            array(
                'id' => 1664,
                'name' => 'Székesfehérvár',
                'uuid' => $faker->uuid , 'abbr' => 'SF',
                'country_id' => 101,
            ),

            array(
                'id' => 1665,
                'name' => 'Szombathely',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 101,
            ),

            array(
                'id' => 1666,
                'name' => 'Szolnok',
                'uuid' => $faker->uuid , 'abbr' => 'SK',
                'country_id' => 101,
            ),

            array(
                'id' => 1667,
                'name' => 'Sopron',
                'uuid' => $faker->uuid , 'abbr' => 'SN',
                'country_id' => 101,
            ),

            array(
                'id' => 1668,
                'name' => 'Somogy',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 101,
            ),

            array(
                'id' => 1669,
                'name' => 'Szekszárd',
                'uuid' => $faker->uuid , 'abbr' => 'SS',
                'country_id' => 101,
            ),

            array(
                'id' => 1670,
                'name' => 'Salgótarján',
                'uuid' => $faker->uuid , 'abbr' => 'ST',
                'country_id' => 101,
            ),

            array(
                'id' => 1671,
                'name' => 'Szabolcs-Szatmár-Bereg',
                'uuid' => $faker->uuid , 'abbr' => 'SZ',
                'country_id' => 101,
            ),

            array(
                'id' => 1672,
                'name' => 'Tatabánya',
                'uuid' => $faker->uuid , 'abbr' => 'TB',
                'country_id' => 101,
            ),

            array(
                'id' => 1673,
                'name' => 'Tolna',
                'uuid' => $faker->uuid , 'abbr' => 'TO',
                'country_id' => 101,
            ),

            array(
                'id' => 1674,
                'name' => 'Vas',
                'uuid' => $faker->uuid , 'abbr' => 'VA',
                'country_id' => 101,
            ),

            array(
                'id' => 1675,
                'name' => 'Veszprém',
                'uuid' => $faker->uuid , 'abbr' => 'VE',
                'country_id' => 101,
            ),

            array(
                'id' => 1676,
                'name' => 'Veszprém',
                'uuid' => $faker->uuid , 'abbr' => 'VM',
                'country_id' => 101,
            ),

            array(
                'id' => 1677,
                'name' => 'Zala',
                'uuid' => $faker->uuid , 'abbr' => 'ZA',
                'country_id' => 101,
            ),

            array(
                'id' => 1678,
                'name' => 'Zalaegerszeg',
                'uuid' => $faker->uuid , 'abbr' => 'ZE',
                'country_id' => 101,
            ),

            array(
                'id' => 1679,
                'name' => 'Aceh',
                'uuid' => $faker->uuid , 'abbr' => 'AC',
                'country_id' => 102,
            ),

            array(
                'id' => 1680,
                'name' => 'Bali',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 102,
            ),

            array(
                'id' => 1681,
                'name' => 'Bangka Belitung',
                'uuid' => $faker->uuid , 'abbr' => 'BB',
                'country_id' => 102,
            ),

            array(
                'id' => 1682,
                'name' => 'Bengkulu',
                'uuid' => $faker->uuid , 'abbr' => 'BE',
                'country_id' => 102,
            ),

            array(
                'id' => 1683,
                'name' => 'Banten',
                'uuid' => $faker->uuid , 'abbr' => 'BT',
                'country_id' => 102,
            ),

            array(
                'id' => 1684,
                'name' => 'Gorontalo',
                'uuid' => $faker->uuid , 'abbr' => 'GO',
                'country_id' => 102,
            ),

            array(
                'id' => 1685,
                'name' => 'Jambi',
                'uuid' => $faker->uuid , 'abbr' => 'JA',
                'country_id' => 102,
            ),

            array(
                'id' => 1686,
                'name' => 'Jawa Barat',
                'uuid' => $faker->uuid , 'abbr' => 'JB',
                'country_id' => 102,
            ),

            array(
                'id' => 1687,
                'name' => 'Jawa Timur',
                'uuid' => $faker->uuid , 'abbr' => 'JI',
                'country_id' => 102,
            ),

            array(
                'id' => 1688,
                'name' => 'Jakarta Raya',
                'uuid' => $faker->uuid , 'abbr' => 'JK',
                'country_id' => 102,
            ),

            array(
                'id' => 1689,
                'name' => 'Jawa Tengah',
                'uuid' => $faker->uuid , 'abbr' => 'JT',
                'country_id' => 102,
            ),

            array(
                'id' => 1690,
                'name' => 'Kalimantan Barat',
                'uuid' => $faker->uuid , 'abbr' => 'KB',
                'country_id' => 102,
            ),

            array(
                'id' => 1691,
                'name' => 'Kalimantan Timur',
                'uuid' => $faker->uuid , 'abbr' => 'KI',
                'country_id' => 102,
            ),

            array(
                'id' => 1692,
                'name' => 'Kepulauan Riau',
                'uuid' => $faker->uuid , 'abbr' => 'KR',
                'country_id' => 102,
            ),

            array(
                'id' => 1693,
                'name' => 'Kalimantan Selatan',
                'uuid' => $faker->uuid , 'abbr' => 'KS',
                'country_id' => 102,
            ),

            array(
                'id' => 1694,
                'name' => 'Kalimantan Tengah',
                'uuid' => $faker->uuid , 'abbr' => 'KT',
                'country_id' => 102,
            ),

            array(
                'id' => 1695,
                'name' => 'Lampung',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 102,
            ),

            array(
                'id' => 1696,
                'name' => 'Maluku',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 102,
            ),

            array(
                'id' => 1697,
                'name' => 'Maluku Utara',
                'uuid' => $faker->uuid , 'abbr' => 'MU',
                'country_id' => 102,
            ),

            array(
                'id' => 1698,
                'name' => 'Nusa Tenggara Barat',
                'uuid' => $faker->uuid , 'abbr' => 'NB',
                'country_id' => 102,
            ),

            array(
                'id' => 1699,
                'name' => 'Nusa Tenggara Timur',
                'uuid' => $faker->uuid , 'abbr' => 'NT',
                'country_id' => 102,
            ),

            array(
                'id' => 1700,
                'name' => 'Papua',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 102,
            ),

            array(
                'id' => 1701,
                'name' => 'Riau',
                'uuid' => $faker->uuid , 'abbr' => 'RI',
                'country_id' => 102,
            ),

            array(
                'id' => 1702,
                'name' => 'Sulawesi Utara',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 102,
            ),

            array(
                'id' => 1703,
                'name' => 'Sumatera Barat',
                'uuid' => $faker->uuid , 'abbr' => 'SB',
                'country_id' => 102,
            ),

            array(
                'id' => 1704,
                'name' => 'Sulawesi Tenggara',
                'uuid' => $faker->uuid , 'abbr' => 'SG',
                'country_id' => 102,
            ),

            array(
                'id' => 1705,
                'name' => 'Sulawesi Selatan',
                'uuid' => $faker->uuid , 'abbr' => 'SN',
                'country_id' => 102,
            ),

            array(
                'id' => 1706,
                'name' => 'Sulawesi Barat',
                'uuid' => $faker->uuid , 'abbr' => 'SR',
                'country_id' => 102,
            ),

            array(
                'id' => 1707,
                'name' => 'Sumatera Selatan',
                'uuid' => $faker->uuid , 'abbr' => 'SS',
                'country_id' => 102,
            ),

            array(
                'id' => 1708,
                'name' => 'Sulawesi Tengah',
                'uuid' => $faker->uuid , 'abbr' => 'ST',
                'country_id' => 102,
            ),

            array(
                'id' => 1709,
                'name' => 'Sumatera Utara',
                'uuid' => $faker->uuid , 'abbr' => 'SU',
                'country_id' => 102,
            ),

            array(
                'id' => 1710,
                'name' => 'Papua Barat',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 102,
            ),

            array(
                'id' => 1711,
                'name' => 'Yogyakarta',
                'uuid' => $faker->uuid , 'abbr' => 'YO',
                'country_id' => 102,
            ),

            array(
                'id' => 1712,
                'name' => 'Cork',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 103,
            ),

            array(
                'id' => 1713,
                'name' => 'Clare',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 103,
            ),

            array(
                'id' => 1714,
                'name' => 'Cavan',
                'uuid' => $faker->uuid , 'abbr' => 'CN',
                'country_id' => 103,
            ),

            array(
                'id' => 1715,
                'name' => 'Carlow',
                'uuid' => $faker->uuid , 'abbr' => 'CW',
                'country_id' => 103,
            ),

            array(
                'id' => 1716,
                'name' => 'Dublin',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 103,
            ),

            array(
                'id' => 1717,
                'name' => 'Donegal',
                'uuid' => $faker->uuid , 'abbr' => 'DL',
                'country_id' => 103,
            ),

            array(
                'id' => 1718,
                'name' => 'Galway',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 103,
            ),

            array(
                'id' => 1719,
                'name' => 'Kildare',
                'uuid' => $faker->uuid , 'abbr' => 'KE',
                'country_id' => 103,
            ),

            array(
                'id' => 1720,
                'name' => 'Kilkenny',
                'uuid' => $faker->uuid , 'abbr' => 'KK',
                'country_id' => 103,
            ),

            array(
                'id' => 1721,
                'name' => 'Kerry',
                'uuid' => $faker->uuid , 'abbr' => 'KY',
                'country_id' => 103,
            ),

            array(
                'id' => 1722,
                'name' => 'Longford',
                'uuid' => $faker->uuid , 'abbr' => 'LD',
                'country_id' => 103,
            ),

            array(
                'id' => 1723,
                'name' => 'Louth',
                'uuid' => $faker->uuid , 'abbr' => 'LH',
                'country_id' => 103,
            ),

            array(
                'id' => 1724,
                'name' => 'Limerick',
                'uuid' => $faker->uuid , 'abbr' => 'LK',
                'country_id' => 103,
            ),

            array(
                'id' => 1725,
                'name' => 'Leitrim',
                'uuid' => $faker->uuid , 'abbr' => 'LM',
                'country_id' => 103,
            ),

            array(
                'id' => 1726,
                'name' => 'Laois',
                'uuid' => $faker->uuid , 'abbr' => 'LS',
                'country_id' => 103,
            ),

            array(
                'id' => 1727,
                'name' => 'Meath',
                'uuid' => $faker->uuid , 'abbr' => 'MH',
                'country_id' => 103,
            ),

            array(
                'id' => 1728,
                'name' => 'Monaghan',
                'uuid' => $faker->uuid , 'abbr' => 'MN',
                'country_id' => 103,
            ),

            array(
                'id' => 1729,
                'name' => 'Mayo',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 103,
            ),

            array(
                'id' => 1730,
                'name' => 'Offaly',
                'uuid' => $faker->uuid , 'abbr' => 'OY',
                'country_id' => 103,
            ),

            array(
                'id' => 1731,
                'name' => 'Roscommon',
                'uuid' => $faker->uuid , 'abbr' => 'RN',
                'country_id' => 103,
            ),

            array(
                'id' => 1732,
                'name' => 'Sligo',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 103,
            ),

            array(
                'id' => 1733,
                'name' => 'Tipperary',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 103,
            ),

            array(
                'id' => 1734,
                'name' => 'Waterford',
                'uuid' => $faker->uuid , 'abbr' => 'WD',
                'country_id' => 103,
            ),

            array(
                'id' => 1735,
                'name' => 'Westmeath',
                'uuid' => $faker->uuid , 'abbr' => 'WH',
                'country_id' => 103,
            ),

            array(
                'id' => 1736,
                'name' => 'Wicklow',
                'uuid' => $faker->uuid , 'abbr' => 'WW',
                'country_id' => 103,
            ),

            array(
                'id' => 1737,
                'name' => 'Wexford',
                'uuid' => $faker->uuid , 'abbr' => 'WX',
                'country_id' => 103,
            ),

            array(
                'id' => 1738,
                'name' => 'HaDarom',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 104,
            ),

            array(
                'id' => 1739,
                'name' => 'Haifa',
                'uuid' => $faker->uuid , 'abbr' => 'HA',
                'country_id' => 104,
            ),

            array(
                'id' => 1740,
                'name' => 'Yerushalayim',
                'uuid' => $faker->uuid , 'abbr' => 'JM',
                'country_id' => 104,
            ),

            array(
                'id' => 1741,
                'name' => 'HaMerkaz',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 104,
            ),

            array(
                'id' => 1742,
                'name' => 'Tel-Aviv',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 104,
            ),

            array(
                'id' => 1743,
                'name' => 'HaZafon',
                'uuid' => $faker->uuid , 'abbr' => 'Z',
                'country_id' => 104,
            ),

            array(
                'id' => 1744,
                'name' => 'Andaman and Nicobar Islands',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 106,
            ),

            array(
                'id' => 1745,
                'name' => 'Andhra Pradesh',
                'uuid' => $faker->uuid , 'abbr' => 'AP',
                'country_id' => 106,
            ),

            array(
                'id' => 1746,
                'name' => 'Arunachal Pradesh',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 106,
            ),

            array(
                'id' => 1747,
                'name' => 'Assam',
                'uuid' => $faker->uuid , 'abbr' => 'AS',
                'country_id' => 106,
            ),

            array(
                'id' => 1748,
                'name' => 'Bihar',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 106,
            ),

            array(
                'id' => 1749,
                'name' => 'Chandigarh',
                'uuid' => $faker->uuid , 'abbr' => 'CH',
                'country_id' => 106,
            ),

            array(
                'id' => 1750,
                'name' => 'Chhattisgarh',
                'uuid' => $faker->uuid , 'abbr' => 'CT',
                'country_id' => 106,
            ),

            array(
                'id' => 1751,
                'name' => 'Daman and Diu',
                'uuid' => $faker->uuid , 'abbr' => 'DD',
                'country_id' => 106,
            ),

            array(
                'id' => 1752,
                'name' => 'Delhi',
                'uuid' => $faker->uuid , 'abbr' => 'DL',
                'country_id' => 106,
            ),

            array(
                'id' => 1753,
                'name' => 'Dadra and Nagar Haveli',
                'uuid' => $faker->uuid , 'abbr' => 'DN',
                'country_id' => 106,
            ),

            array(
                'id' => 1754,
                'name' => 'Goa',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 106,
            ),

            array(
                'id' => 1755,
                'name' => 'Gujarat',
                'uuid' => $faker->uuid , 'abbr' => 'GJ',
                'country_id' => 106,
            ),

            array(
                'id' => 1756,
                'name' => 'Himachal Pradesh',
                'uuid' => $faker->uuid , 'abbr' => 'HP',
                'country_id' => 106,
            ),

            array(
                'id' => 1757,
                'name' => 'Haryana',
                'uuid' => $faker->uuid , 'abbr' => 'HR',
                'country_id' => 106,
            ),

            array(
                'id' => 1758,
                'name' => 'Jharkhand',
                'uuid' => $faker->uuid , 'abbr' => 'JH',
                'country_id' => 106,
            ),

            array(
                'id' => 1759,
                'name' => 'Jammu and Kashmir',
                'uuid' => $faker->uuid , 'abbr' => 'JK',
                'country_id' => 106,
            ),

            array(
                'id' => 1760,
                'name' => 'Karnataka',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 106,
            ),

            array(
                'id' => 1761,
                'name' => 'Kerala',
                'uuid' => $faker->uuid , 'abbr' => 'KL',
                'country_id' => 106,
            ),

            array(
                'id' => 1762,
                'name' => 'Lakshadweep',
                'uuid' => $faker->uuid , 'abbr' => 'LD',
                'country_id' => 106,
            ),

            array(
                'id' => 1763,
                'name' => 'Maharashtra',
                'uuid' => $faker->uuid , 'abbr' => 'MH',
                'country_id' => 106,
            ),

            array(
                'id' => 1764,
                'name' => 'Meghalaya',
                'uuid' => $faker->uuid , 'abbr' => 'ML',
                'country_id' => 106,
            ),

            array(
                'id' => 1765,
                'name' => 'Manipur',
                'uuid' => $faker->uuid , 'abbr' => 'MN',
                'country_id' => 106,
            ),

            array(
                'id' => 1766,
                'name' => 'Madhya Pradesh',
                'uuid' => $faker->uuid , 'abbr' => 'MP',
                'country_id' => 106,
            ),

            array(
                'id' => 1767,
                'name' => 'Mizoram',
                'uuid' => $faker->uuid , 'abbr' => 'MZ',
                'country_id' => 106,
            ),

            array(
                'id' => 1768,
                'name' => 'Nagaland',
                'uuid' => $faker->uuid , 'abbr' => 'NL',
                'country_id' => 106,
            ),

            array(
                'id' => 1769,
                'name' => 'Orissa',
                'uuid' => $faker->uuid , 'abbr' => 'OR',
                'country_id' => 106,
            ),

            array(
                'id' => 1770,
                'name' => 'Punjab',
                'uuid' => $faker->uuid , 'abbr' => 'PB',
                'country_id' => 106,
            ),

            array(
                'id' => 1771,
                'name' => 'Pondicherry',
                'uuid' => $faker->uuid , 'abbr' => 'PY',
                'country_id' => 106,
            ),

            array(
                'id' => 1772,
                'name' => 'Rajasthan',
                'uuid' => $faker->uuid , 'abbr' => 'RJ',
                'country_id' => 106,
            ),

            array(
                'id' => 1773,
                'name' => 'Sikkim',
                'uuid' => $faker->uuid , 'abbr' => 'SK',
                'country_id' => 106,
            ),

            array(
                'id' => 1774,
                'name' => 'Tamil Nadu',
                'uuid' => $faker->uuid , 'abbr' => 'TN',
                'country_id' => 106,
            ),

            array(
                'id' => 1775,
                'name' => 'Tripura',
                'uuid' => $faker->uuid , 'abbr' => 'TR',
                'country_id' => 106,
            ),

            array(
                'id' => 1776,
                'name' => 'Telangana',
                'uuid' => $faker->uuid , 'abbr' => 'TS',
                'country_id' => 106,
            ),

            array(
                'id' => 1777,
                'name' => 'Uttaranchal',
                'uuid' => $faker->uuid , 'abbr' => 'UL',
                'country_id' => 106,
            ),

            array(
                'id' => 1778,
                'name' => 'Uttar Pradesh',
                'uuid' => $faker->uuid , 'abbr' => 'UP',
                'country_id' => 106,
            ),

            array(
                'id' => 1779,
                'name' => 'West Bengal',
                'uuid' => $faker->uuid , 'abbr' => 'WB',
                'country_id' => 106,
            ),

            array(
                'id' => 1780,
                'name' => 'Al Anbar',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 108,
            ),

            array(
                'id' => 1781,
                'name' => 'Arbil',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 108,
            ),

            array(
                'id' => 1782,
                'name' => 'Al Basrah',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 108,
            ),

            array(
                'id' => 1783,
                'name' => 'Babil',
                'uuid' => $faker->uuid , 'abbr' => 'BB',
                'country_id' => 108,
            ),

            array(
                'id' => 1784,
                'name' => 'Baghdad',
                'uuid' => $faker->uuid , 'abbr' => 'BG',
                'country_id' => 108,
            ),

            array(
                'id' => 1785,
                'name' => 'Dahuk',
                'uuid' => $faker->uuid , 'abbr' => 'DA',
                'country_id' => 108,
            ),

            array(
                'id' => 1786,
                'name' => 'Diyalá',
                'uuid' => $faker->uuid , 'abbr' => 'DI',
                'country_id' => 108,
            ),

            array(
                'id' => 1787,
                'name' => 'Dhi Qar',
                'uuid' => $faker->uuid , 'abbr' => 'DQ',
                'country_id' => 108,
            ),

            array(
                'id' => 1788,
                'name' => 'Karbala\'',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 108,
            ),

            array(
                'id' => 1789,
                'name' => 'Maysan',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 108,
            ),

            array(
                'id' => 1790,
                'name' => 'Al Muthanná',
                'uuid' => $faker->uuid , 'abbr' => 'MU',
                'country_id' => 108,
            ),

            array(
                'id' => 1791,
                'name' => 'An Najaf',
                'uuid' => $faker->uuid , 'abbr' => 'NA',
                'country_id' => 108,
            ),

            array(
                'id' => 1792,
                'name' => 'Ninawá',
                'uuid' => $faker->uuid , 'abbr' => 'NI',
                'country_id' => 108,
            ),

            array(
                'id' => 1793,
                'name' => 'Al Qadisiyah',
                'uuid' => $faker->uuid , 'abbr' => 'QA',
                'country_id' => 108,
            ),

            array(
                'id' => 1794,
                'name' => 'Salah ad Din',
                'uuid' => $faker->uuid , 'abbr' => 'SD',
                'country_id' => 108,
            ),

            array(
                'id' => 1795,
                'name' => 'As Sulaymaniyah',
                'uuid' => $faker->uuid , 'abbr' => 'SU',
                'country_id' => 108,
            ),

            array(
                'id' => 1796,
                'name' => 'At Ta\'mim',
                'uuid' => $faker->uuid , 'abbr' => 'TS',
                'country_id' => 108,
            ),

            array(
                'id' => 1797,
                'name' => 'Wasit',
                'uuid' => $faker->uuid , 'abbr' => 'WA',
                'country_id' => 108,
            ),

            array(
                'id' => 1798,
                'name' => 'Az¯arbayjan-e Sharqi',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 109,
            ),

            array(
                'id' => 1799,
                'name' => 'Az¯arbayjan-e Gharbi',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 109,
            ),

            array(
                'id' => 1800,
                'name' => 'Ardabil',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 109,
            ),

            array(
                'id' => 1801,
                'name' => 'Esfahan',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 109,
            ),

            array(
                'id' => 1802,
                'name' => 'Ilam',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 109,
            ),

            array(
                'id' => 1803,
                'name' => 'Bushehr',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 109,
            ),

            array(
                'id' => 1804,
                'name' => 'Tehran',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 109,
            ),

            array(
                'id' => 1805,
                'name' => 'Chahar Mah¸all va Bakhtiari',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 109,
            ),

            array(
                'id' => 1806,
                'name' => 'Khorasan',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 109,
            ),

            array(
                'id' => 1807,
                'name' => 'Khuzestan',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 109,
            ),

            array(
                'id' => 1808,
                'name' => 'Zanjan',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 109,
            ),

            array(
                'id' => 1809,
                'name' => 'Semnan',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 109,
            ),

            array(
                'id' => 1810,
                'name' => 'Sistan va Baluchestan',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 109,
            ),

            array(
                'id' => 1811,
                'name' => 'Fars',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 109,
            ),

            array(
                'id' => 1812,
                'name' => 'Kerman',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 109,
            ),

            array(
                'id' => 1813,
                'name' => 'Kordestan',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 109,
            ),

            array(
                'id' => 1814,
                'name' => 'Kermanshah',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 109,
            ),

            array(
                'id' => 1815,
                'name' => 'Kohkiluyeh va Buyer Ahmad',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 109,
            ),

            array(
                'id' => 1816,
                'name' => 'Gilan',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 109,
            ),

            array(
                'id' => 1817,
                'name' => 'Lorestan',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 109,
            ),

            array(
                'id' => 1818,
                'name' => 'Mazandaran',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 109,
            ),

            array(
                'id' => 1819,
                'name' => 'Markazi',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 109,
            ),

            array(
                'id' => 1820,
                'name' => 'Hormozgan',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 109,
            ),

            array(
                'id' => 1821,
                'name' => 'Hamadan',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 109,
            ),

            array(
                'id' => 1822,
                'name' => 'Yazd',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 109,
            ),

            array(
                'id' => 1823,
                'name' => 'Qom',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 109,
            ),

            array(
                'id' => 1824,
                'name' => 'Golestan',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 109,
            ),

            array(
                'id' => 1825,
                'name' => 'Qazvin',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 109,
            ),

            array(
                'id' => 1826,
                'name' => 'Khorasan-e Janubi',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 109,
            ),

            array(
                'id' => 1827,
                'name' => 'Khorasan-e Razavi',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 109,
            ),

            array(
                'id' => 1828,
                'name' => 'Khorasan-e Shemali',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 109,
            ),

            array(
                'id' => 1829,
                'name' => 'Reykjavík',
                'uuid' => $faker->uuid , 'abbr' => 0,
                'country_id' => 110,
            ),

            array(
                'id' => 1830,
                'name' => 'Höfuðborgarsvæði utan Reykjavíkur',
                'uuid' => $faker->uuid , 'abbr' => 1,
                'country_id' => 110,
            ),

            array(
                'id' => 1831,
                'name' => 'Suðurnes',
                'uuid' => $faker->uuid , 'abbr' => 2,
                'country_id' => 110,
            ),

            array(
                'id' => 1832,
                'name' => 'Vesturland',
                'uuid' => $faker->uuid , 'abbr' => 3,
                'country_id' => 110,
            ),

            array(
                'id' => 1833,
                'name' => 'Vestfirðir',
                'uuid' => $faker->uuid , 'abbr' => 4,
                'country_id' => 110,
            ),

            array(
                'id' => 1834,
                'name' => 'Norðurland vestra',
                'uuid' => $faker->uuid , 'abbr' => 5,
                'country_id' => 110,
            ),

            array(
                'id' => 1835,
                'name' => 'Norðurland eystra',
                'uuid' => $faker->uuid , 'abbr' => 6,
                'country_id' => 110,
            ),

            array(
                'id' => 1836,
                'name' => 'Austurland',
                'uuid' => $faker->uuid , 'abbr' => 7,
                'country_id' => 110,
            ),

            array(
                'id' => 1837,
                'name' => 'Suðurland',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 110,
            ),

            array(
                'id' => 1838,
                'name' => 'Agrigento',
                'uuid' => $faker->uuid , 'abbr' => 'AG',
                'country_id' => 111,
            ),

            array(
                'id' => 1839,
                'name' => 'Alessandria',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 111,
            ),

            array(
                'id' => 1840,
                'name' => 'Ancona',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 111,
            ),

            array(
                'id' => 1841,
                'name' => 'Aosta',
                'uuid' => $faker->uuid , 'abbr' => 'AO',
                'country_id' => 111,
            ),

            array(
                'id' => 1842,
                'name' => 'Ascoli Piceno',
                'uuid' => $faker->uuid , 'abbr' => 'AP',
                'country_id' => 111,
            ),

            array(
                'id' => 1843,
                'name' => 'L\'Aquila',
                'uuid' => $faker->uuid , 'abbr' => 'AQ',
                'country_id' => 111,
            ),

            array(
                'id' => 1844,
                'name' => 'Arezzo',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 111,
            ),

            array(
                'id' => 1845,
                'name' => 'Asti',
                'uuid' => $faker->uuid , 'abbr' => 'AT',
                'country_id' => 111,
            ),

            array(
                'id' => 1846,
                'name' => 'Avellino',
                'uuid' => $faker->uuid , 'abbr' => 'AV',
                'country_id' => 111,
            ),

            array(
                'id' => 1847,
                'name' => 'Bari',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 111,
            ),

            array(
                'id' => 1848,
                'name' => 'Bergamo',
                'uuid' => $faker->uuid , 'abbr' => 'BG',
                'country_id' => 111,
            ),

            array(
                'id' => 1849,
                'name' => 'Biella',
                'uuid' => $faker->uuid , 'abbr' => 'BI',
                'country_id' => 111,
            ),

            array(
                'id' => 1850,
                'name' => 'Belluno',
                'uuid' => $faker->uuid , 'abbr' => 'BL',
                'country_id' => 111,
            ),

            array(
                'id' => 1851,
                'name' => 'Benevento',
                'uuid' => $faker->uuid , 'abbr' => 'BN',
                'country_id' => 111,
            ),

            array(
                'id' => 1852,
                'name' => 'Bologna',
                'uuid' => $faker->uuid , 'abbr' => 'BO',
                'country_id' => 111,
            ),

            array(
                'id' => 1853,
                'name' => 'Brindisi',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 111,
            ),

            array(
                'id' => 1854,
                'name' => 'Brescia',
                'uuid' => $faker->uuid , 'abbr' => 'BS',
                'country_id' => 111,
            ),

            array(
                'id' => 1855,
                'name' => 'Barletta-Andria-Trani',
                'uuid' => $faker->uuid , 'abbr' => 'BT',
                'country_id' => 111,
            ),

            array(
                'id' => 1856,
                'name' => 'Bolzano',
                'uuid' => $faker->uuid , 'abbr' => 'BZ',
                'country_id' => 111,
            ),

            array(
                'id' => 1857,
                'name' => 'Cagliari',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 111,
            ),

            array(
                'id' => 1858,
                'name' => 'Campobasso',
                'uuid' => $faker->uuid , 'abbr' => 'CB',
                'country_id' => 111,
            ),

            array(
                'id' => 1859,
                'name' => 'Caserta',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 111,
            ),

            array(
                'id' => 1860,
                'name' => 'Chieti',
                'uuid' => $faker->uuid , 'abbr' => 'CH',
                'country_id' => 111,
            ),

            array(
                'id' => 1861,
                'name' => 'Carbonia-Iglesias',
                'uuid' => $faker->uuid , 'abbr' => 'CI',
                'country_id' => 111,
            ),

            array(
                'id' => 1862,
                'name' => 'Caltanissetta',
                'uuid' => $faker->uuid , 'abbr' => 'CL',
                'country_id' => 111,
            ),

            array(
                'id' => 1863,
                'name' => 'Cuneo',
                'uuid' => $faker->uuid , 'abbr' => 'CN',
                'country_id' => 111,
            ),

            array(
                'id' => 1864,
                'name' => 'Como',
                'uuid' => $faker->uuid , 'abbr' => 'CO',
                'country_id' => 111,
            ),

            array(
                'id' => 1865,
                'name' => 'Cremona',
                'uuid' => $faker->uuid , 'abbr' => 'CR',
                'country_id' => 111,
            ),

            array(
                'id' => 1866,
                'name' => 'Cosenza',
                'uuid' => $faker->uuid , 'abbr' => 'CS',
                'country_id' => 111,
            ),

            array(
                'id' => 1867,
                'name' => 'Catania',
                'uuid' => $faker->uuid , 'abbr' => 'CT',
                'country_id' => 111,
            ),

            array(
                'id' => 1868,
                'name' => 'Catanzaro',
                'uuid' => $faker->uuid , 'abbr' => 'CZ',
                'country_id' => 111,
            ),

            array(
                'id' => 1869,
                'name' => 'Enna',
                'uuid' => $faker->uuid , 'abbr' => 'EN',
                'country_id' => 111,
            ),

            array(
                'id' => 1870,
                'name' => 'Ferrara',
                'uuid' => $faker->uuid , 'abbr' => 'FE',
                'country_id' => 111,
            ),

            array(
                'id' => 1871,
                'name' => 'Foggia',
                'uuid' => $faker->uuid , 'abbr' => 'FG',
                'country_id' => 111,
            ),

            array(
                'id' => 1872,
                'name' => 'Firenze',
                'uuid' => $faker->uuid , 'abbr' => 'FI',
                'country_id' => 111,
            ),

            array(
                'id' => 1873,
                'name' => 'Forlì-Cesena',
                'uuid' => $faker->uuid , 'abbr' => 'FC',
                'country_id' => 111,
            ),

            array(
                'id' => 1874,
                'name' => 'Fermo',
                'uuid' => $faker->uuid , 'abbr' => 'FM',
                'country_id' => 111,
            ),

            array(
                'id' => 1875,
                'name' => 'Frosinone',
                'uuid' => $faker->uuid , 'abbr' => 'FR',
                'country_id' => 111,
            ),

            array(
                'id' => 1876,
                'name' => 'Genova',
                'uuid' => $faker->uuid , 'abbr' => 'GE',
                'country_id' => 111,
            ),

            array(
                'id' => 1877,
                'name' => 'Gorizia',
                'uuid' => $faker->uuid , 'abbr' => 'GO',
                'country_id' => 111,
            ),

            array(
                'id' => 1878,
                'name' => 'Grosseto',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 111,
            ),

            array(
                'id' => 1879,
                'name' => 'Imperia',
                'uuid' => $faker->uuid , 'abbr' => 'IM',
                'country_id' => 111,
            ),

            array(
                'id' => 1880,
                'name' => 'Isernia',
                'uuid' => $faker->uuid , 'abbr' => 'IS',
                'country_id' => 111,
            ),

            array(
                'id' => 1881,
                'name' => 'Crotone',
                'uuid' => $faker->uuid , 'abbr' => 'KR',
                'country_id' => 111,
            ),

            array(
                'id' => 1882,
                'name' => 'Lecco',
                'uuid' => $faker->uuid , 'abbr' => 'LC',
                'country_id' => 111,
            ),

            array(
                'id' => 1883,
                'name' => 'Lecce',
                'uuid' => $faker->uuid , 'abbr' => 'LE',
                'country_id' => 111,
            ),

            array(
                'id' => 1884,
                'name' => 'Livorno',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 111,
            ),

            array(
                'id' => 1885,
                'name' => 'Lodi',
                'uuid' => $faker->uuid , 'abbr' => 'LO',
                'country_id' => 111,
            ),

            array(
                'id' => 1886,
                'name' => 'Latina',
                'uuid' => $faker->uuid , 'abbr' => 'LT',
                'country_id' => 111,
            ),

            array(
                'id' => 1887,
                'name' => 'Lucca',
                'uuid' => $faker->uuid , 'abbr' => 'LU',
                'country_id' => 111,
            ),

            array(
                'id' => 1888,
                'name' => 'Monza e Brianza',
                'uuid' => $faker->uuid , 'abbr' => 'MB',
                'country_id' => 111,
            ),

            array(
                'id' => 1889,
                'name' => 'Macerata',
                'uuid' => $faker->uuid , 'abbr' => 'MC',
                'country_id' => 111,
            ),

            array(
                'id' => 1890,
                'name' => 'Messina',
                'uuid' => $faker->uuid , 'abbr' => 'ME',
                'country_id' => 111,
            ),

            array(
                'id' => 1891,
                'name' => 'Milano',
                'uuid' => $faker->uuid , 'abbr' => 'MI',
                'country_id' => 111,
            ),

            array(
                'id' => 1892,
                'name' => 'Mantova',
                'uuid' => $faker->uuid , 'abbr' => 'MN',
                'country_id' => 111,
            ),

            array(
                'id' => 1893,
                'name' => 'Modena',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 111,
            ),

            array(
                'id' => 1894,
                'name' => 'Massa-Carrara',
                'uuid' => $faker->uuid , 'abbr' => 'MS',
                'country_id' => 111,
            ),

            array(
                'id' => 1895,
                'name' => 'Matera',
                'uuid' => $faker->uuid , 'abbr' => 'MT',
                'country_id' => 111,
            ),

            array(
                'id' => 1896,
                'name' => 'Napoli',
                'uuid' => $faker->uuid , 'abbr' => 'NA',
                'country_id' => 111,
            ),

            array(
                'id' => 1897,
                'name' => 'Novara',
                'uuid' => $faker->uuid , 'abbr' => 'NO',
                'country_id' => 111,
            ),

            array(
                'id' => 1898,
                'name' => 'Nuoro',
                'uuid' => $faker->uuid , 'abbr' => 'NU',
                'country_id' => 111,
            ),

            array(
                'id' => 1899,
                'name' => 'Ogliastra',
                'uuid' => $faker->uuid , 'abbr' => 'OG',
                'country_id' => 111,
            ),

            array(
                'id' => 1900,
                'name' => 'Oristano',
                'uuid' => $faker->uuid , 'abbr' => 'OR',
                'country_id' => 111,
            ),

            array(
                'id' => 1901,
                'name' => 'Olbia-Tempio',
                'uuid' => $faker->uuid , 'abbr' => 'OT',
                'country_id' => 111,
            ),

            array(
                'id' => 1902,
                'name' => 'Palermo',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 111,
            ),

            array(
                'id' => 1903,
                'name' => 'Piacenza',
                'uuid' => $faker->uuid , 'abbr' => 'PC',
                'country_id' => 111,
            ),

            array(
                'id' => 1904,
                'name' => 'Padova',
                'uuid' => $faker->uuid , 'abbr' => 'PD',
                'country_id' => 111,
            ),

            array(
                'id' => 1905,
                'name' => 'Pescara',
                'uuid' => $faker->uuid , 'abbr' => 'PE',
                'country_id' => 111,
            ),

            array(
                'id' => 1906,
                'name' => 'Perugia',
                'uuid' => $faker->uuid , 'abbr' => 'PG',
                'country_id' => 111,
            ),

            array(
                'id' => 1907,
                'name' => 'Pisa',
                'uuid' => $faker->uuid , 'abbr' => 'PI',
                'country_id' => 111,
            ),

            array(
                'id' => 1908,
                'name' => 'Pordenone',
                'uuid' => $faker->uuid , 'abbr' => 'PN',
                'country_id' => 111,
            ),

            array(
                'id' => 1909,
                'name' => 'Prato',
                'uuid' => $faker->uuid , 'abbr' => 'PO',
                'country_id' => 111,
            ),

            array(
                'id' => 1910,
                'name' => 'Parma',
                'uuid' => $faker->uuid , 'abbr' => 'PR',
                'country_id' => 111,
            ),

            array(
                'id' => 1911,
                'name' => 'Pesaro e Urbino',
                'uuid' => $faker->uuid , 'abbr' => 'PU',
                'country_id' => 111,
            ),

            array(
                'id' => 1912,
                'name' => 'Pistoia',
                'uuid' => $faker->uuid , 'abbr' => 'PT',
                'country_id' => 111,
            ),

            array(
                'id' => 1913,
                'name' => 'Pavia',
                'uuid' => $faker->uuid , 'abbr' => 'PV',
                'country_id' => 111,
            ),

            array(
                'id' => 1914,
                'name' => 'Potenza',
                'uuid' => $faker->uuid , 'abbr' => 'PZ',
                'country_id' => 111,
            ),

            array(
                'id' => 1915,
                'name' => 'Ravenna',
                'uuid' => $faker->uuid , 'abbr' => 'RA',
                'country_id' => 111,
            ),

            array(
                'id' => 1916,
                'name' => 'Reggio Calabria',
                'uuid' => $faker->uuid , 'abbr' => 'RC',
                'country_id' => 111,
            ),

            array(
                'id' => 1917,
                'name' => 'Reggio Emilia',
                'uuid' => $faker->uuid , 'abbr' => 'RE',
                'country_id' => 111,
            ),

            array(
                'id' => 1918,
                'name' => 'Ragusa',
                'uuid' => $faker->uuid , 'abbr' => 'RG',
                'country_id' => 111,
            ),

            array(
                'id' => 1919,
                'name' => 'Rieti',
                'uuid' => $faker->uuid , 'abbr' => 'RI',
                'country_id' => 111,
            ),

            array(
                'id' => 1920,
                'name' => 'Roma',
                'uuid' => $faker->uuid , 'abbr' => 'RM',
                'country_id' => 111,
            ),

            array(
                'id' => 1921,
                'name' => 'Rimini',
                'uuid' => $faker->uuid , 'abbr' => 'RN',
                'country_id' => 111,
            ),

            array(
                'id' => 1922,
                'name' => 'Rovigo',
                'uuid' => $faker->uuid , 'abbr' => 'RO',
                'country_id' => 111,
            ),

            array(
                'id' => 1923,
                'name' => 'Salerno',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 111,
            ),

            array(
                'id' => 1924,
                'name' => 'Siena',
                'uuid' => $faker->uuid , 'abbr' => 'SI',
                'country_id' => 111,
            ),

            array(
                'id' => 1925,
                'name' => 'Sondrio',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 111,
            ),

            array(
                'id' => 1926,
                'name' => 'La Spezia',
                'uuid' => $faker->uuid , 'abbr' => 'SP',
                'country_id' => 111,
            ),

            array(
                'id' => 1927,
                'name' => 'Siracusa',
                'uuid' => $faker->uuid , 'abbr' => 'SR',
                'country_id' => 111,
            ),

            array(
                'id' => 1928,
                'name' => 'Sassari',
                'uuid' => $faker->uuid , 'abbr' => 'SS',
                'country_id' => 111,
            ),

            array(
                'id' => 1929,
                'name' => 'Savona',
                'uuid' => $faker->uuid , 'abbr' => 'SV',
                'country_id' => 111,
            ),

            array(
                'id' => 1930,
                'name' => 'Taranto',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 111,
            ),

            array(
                'id' => 1931,
                'name' => 'Teramo',
                'uuid' => $faker->uuid , 'abbr' => 'TE',
                'country_id' => 111,
            ),

            array(
                'id' => 1932,
                'name' => 'Trento',
                'uuid' => $faker->uuid , 'abbr' => 'TN',
                'country_id' => 111,
            ),

            array(
                'id' => 1933,
                'name' => 'Torino',
                'uuid' => $faker->uuid , 'abbr' => 'TO',
                'country_id' => 111,
            ),

            array(
                'id' => 1934,
                'name' => 'Trapani',
                'uuid' => $faker->uuid , 'abbr' => 'TP',
                'country_id' => 111,
            ),

            array(
                'id' => 1935,
                'name' => 'Terni',
                'uuid' => $faker->uuid , 'abbr' => 'TR',
                'country_id' => 111,
            ),

            array(
                'id' => 1936,
                'name' => 'Trieste',
                'uuid' => $faker->uuid , 'abbr' => 'TS',
                'country_id' => 111,
            ),

            array(
                'id' => 1937,
                'name' => 'Treviso',
                'uuid' => $faker->uuid , 'abbr' => 'TV',
                'country_id' => 111,
            ),

            array(
                'id' => 1938,
                'name' => 'Udine',
                'uuid' => $faker->uuid , 'abbr' => 'UD',
                'country_id' => 111,
            ),

            array(
                'id' => 1939,
                'name' => 'Varese',
                'uuid' => $faker->uuid , 'abbr' => 'VA',
                'country_id' => 111,
            ),

            array(
                'id' => 1940,
                'name' => 'Verbano-Cusio-Ossola',
                'uuid' => $faker->uuid , 'abbr' => 'VB',
                'country_id' => 111,
            ),

            array(
                'id' => 1941,
                'name' => 'Vercelli',
                'uuid' => $faker->uuid , 'abbr' => 'VC',
                'country_id' => 111,
            ),

            array(
                'id' => 1942,
                'name' => 'Venezia',
                'uuid' => $faker->uuid , 'abbr' => 'VE',
                'country_id' => 111,
            ),

            array(
                'id' => 1943,
                'name' => 'Vicenza',
                'uuid' => $faker->uuid , 'abbr' => 'VI',
                'country_id' => 111,
            ),

            array(
                'id' => 1944,
                'name' => 'Verona',
                'uuid' => $faker->uuid , 'abbr' => 'VR',
                'country_id' => 111,
            ),

            array(
                'id' => 1945,
                'name' => 'Medio Campidano',
                'uuid' => $faker->uuid , 'abbr' => 'VS',
                'country_id' => 111,
            ),

            array(
                'id' => 1946,
                'name' => 'Viterbo',
                'uuid' => $faker->uuid , 'abbr' => 'VT',
                'country_id' => 111,
            ),

            array(
                'id' => 1947,
                'name' => 'Vibo Valentia',
                'uuid' => $faker->uuid , 'abbr' => 'VV',
                'country_id' => 111,
            ),

            array(
                'id' => 1948,
                'name' => 'Kingston',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 113,
            ),

            array(
                'id' => 1949,
                'name' => 'Saint Andrew',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 113,
            ),

            array(
                'id' => 1950,
                'name' => 'Saint Thomas',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 113,
            ),

            array(
                'id' => 1951,
                'name' => 'Portland',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 113,
            ),

            array(
                'id' => 1952,
                'name' => 'Saint Mary',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 113,
            ),

            array(
                'id' => 1953,
                'name' => 'Saint Ann',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 113,
            ),

            array(
                'id' => 1954,
                'name' => 'Trelawny',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 113,
            ),

            array(
                'id' => 1955,
                'name' => 'Saint James',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 113,
            ),

            array(
                'id' => 1956,
                'name' => 'Hanover',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 113,
            ),

            array(
                'id' => 1957,
                'name' => 'Westmoreland',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 113,
            ),

            array(
                'id' => 1958,
                'name' => 'Saint Elizabeth',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 113,
            ),

            array(
                'id' => 1959,
                'name' => 'Manchester',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 113,
            ),

            array(
                'id' => 1960,
                'name' => 'Clarendon',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 113,
            ),

            array(
                'id' => 1961,
                'name' => 'Saint Catherine',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 113,
            ),

            array(
                'id' => 1962,
                'name' => 'Ajlun',
                'uuid' => $faker->uuid , 'abbr' => 'AJ',
                'country_id' => 114,
            ),

            array(
                'id' => 1963,
                'name' => 'Amman',
                'uuid' => $faker->uuid , 'abbr' => 'AM',
                'country_id' => 114,
            ),

            array(
                'id' => 1964,
                'name' => 'Aqaba',
                'uuid' => $faker->uuid , 'abbr' => 'AQ',
                'country_id' => 114,
            ),

            array(
                'id' => 1965,
                'name' => 'At Tafilah',
                'uuid' => $faker->uuid , 'abbr' => 'AT',
                'country_id' => 114,
            ),

            array(
                'id' => 1966,
                'name' => 'Az Zarqa\'',
                'uuid' => $faker->uuid , 'abbr' => 'AZ',
                'country_id' => 114,
            ),

            array(
                'id' => 1967,
                'name' => 'Al Balqa\'',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 114,
            ),

            array(
                'id' => 1968,
                'name' => 'Irbid',
                'uuid' => $faker->uuid , 'abbr' => 'IR',
                'country_id' => 114,
            ),

            array(
                'id' => 1969,
                'name' => 'Jarash',
                'uuid' => $faker->uuid , 'abbr' => 'JA',
                'country_id' => 114,
            ),

            array(
                'id' => 1970,
                'name' => 'Al Karak',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 114,
            ),

            array(
                'id' => 1971,
                'name' => 'Al Mafraq',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 114,
            ),

            array(
                'id' => 1972,
                'name' => 'Madaba',
                'uuid' => $faker->uuid , 'abbr' => 'MD',
                'country_id' => 114,
            ),

            array(
                'id' => 1973,
                'name' => 'Ma`an',
                'uuid' => $faker->uuid , 'abbr' => 'MN',
                'country_id' => 114,
            ),

            array(
                'id' => 1974,
                'name' => 'Hokkaido',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 115,
            ),

            array(
                'id' => 1975,
                'name' => 'Aomori',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 115,
            ),

            array(
                'id' => 1976,
                'name' => 'Iwate',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 115,
            ),

            array(
                'id' => 1977,
                'name' => 'Miyagi',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 115,
            ),

            array(
                'id' => 1978,
                'name' => 'Akita',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 115,
            ),

            array(
                'id' => 1979,
                'name' => 'Yamagata',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 115,
            ),

            array(
                'id' => 1980,
                'name' => 'Fukushima',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 115,
            ),

            array(
                'id' => 1981,
                'name' => 'Ibaraki',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 115,
            ),

            array(
                'id' => 1982,
                'name' => 'Tochigi',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 115,
            ),

            array(
                'id' => 1983,
                'name' => 'Gunma',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 115,
            ),

            array(
                'id' => 1984,
                'name' => 'Saitama',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 115,
            ),

            array(
                'id' => 1985,
                'name' => 'Chiba',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 115,
            ),

            array(
                'id' => 1986,
                'name' => 'Tokyo',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 115,
            ),

            array(
                'id' => 1987,
                'name' => 'Kanagawa',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 115,
            ),

            array(
                'id' => 1988,
                'name' => 'Niigata',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 115,
            ),

            array(
                'id' => 1989,
                'name' => 'Toyama',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 115,
            ),

            array(
                'id' => 1990,
                'name' => 'Ishikawa',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 115,
            ),

            array(
                'id' => 1991,
                'name' => 'Fukui',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 115,
            ),

            array(
                'id' => 1992,
                'name' => 'Yamanashi',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 115,
            ),

            array(
                'id' => 1993,
                'name' => 'Nagano',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 115,
            ),

            array(
                'id' => 1994,
                'name' => 'Gifu',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 115,
            ),

            array(
                'id' => 1995,
                'name' => 'Shizuoka',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 115,
            ),

            array(
                'id' => 1996,
                'name' => 'Aichi',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 115,
            ),

            array(
                'id' => 1997,
                'name' => 'Mie',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 115,
            ),

            array(
                'id' => 1998,
                'name' => 'Shiga',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 115,
            ),

            array(
                'id' => 1999,
                'name' => 'Kyoto',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 115,
            ),

            array(
                'id' => 2000,
                'name' => 'Osaka',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 115,
            ),

            array(
                'id' => 2001,
                'name' => 'Hyogo',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 115,
            ),

            array(
                'id' => 2002,
                'name' => 'Nara',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 115,
            ),

            array(
                'id' => 2003,
                'name' => 'Wakayama',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 115,
            ),

            array(
                'id' => 2004,
                'name' => 'Tottori',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 115,
            ),

            array(
                'id' => 2005,
                'name' => 'Shimane',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 115,
            ),

            array(
                'id' => 2006,
                'name' => 'Okayama',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 115,
            ),

            array(
                'id' => 2007,
                'name' => 'Hiroshima',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 115,
            ),

            array(
                'id' => 2008,
                'name' => 'Yamaguchi',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 115,
            ),

            array(
                'id' => 2009,
                'name' => 'Tokushima',
                'uuid' => $faker->uuid , 'abbr' => 36,
                'country_id' => 115,
            ),

            array(
                'id' => 2010,
                'name' => 'Kagawa',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 115,
            ),

            array(
                'id' => 2011,
                'name' => 'Ehime',
                'uuid' => $faker->uuid , 'abbr' => 38,
                'country_id' => 115,
            ),

            array(
                'id' => 2012,
                'name' => 'Kochi',
                'uuid' => $faker->uuid , 'abbr' => 39,
                'country_id' => 115,
            ),

            array(
                'id' => 2013,
                'name' => 'Fukuoka',
                'uuid' => $faker->uuid , 'abbr' => 40,
                'country_id' => 115,
            ),

            array(
                'id' => 2014,
                'name' => 'Saga',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 115,
            ),

            array(
                'id' => 2015,
                'name' => 'Nagasaki',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 115,
            ),

            array(
                'id' => 2016,
                'name' => 'Kumamoto',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 115,
            ),

            array(
                'id' => 2017,
                'name' => 'Oita',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 115,
            ),

            array(
                'id' => 2018,
                'name' => 'Miyazaki',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 115,
            ),

            array(
                'id' => 2019,
                'name' => 'Kagoshima',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 115,
            ),

            array(
                'id' => 2020,
                'name' => 'Okinawa',
                'uuid' => $faker->uuid , 'abbr' => 47,
                'country_id' => 115,
            ),

            array(
                'id' => 2021,
                'name' => 'Nairobi Municipality',
                'uuid' => $faker->uuid , 'abbr' => 110,
                'country_id' => 116,
            ),

            array(
                'id' => 2022,
                'name' => 'Central',
                'uuid' => $faker->uuid , 'abbr' => 200,
                'country_id' => 116,
            ),

            array(
                'id' => 2023,
                'name' => 'Coast',
                'uuid' => $faker->uuid , 'abbr' => 300,
                'country_id' => 116,
            ),

            array(
                'id' => 2024,
                'name' => 'Eastern',
                'uuid' => $faker->uuid , 'abbr' => 400,
                'country_id' => 116,
            ),

            array(
                'id' => 2025,
                'name' => 'North-Eastern',
                'uuid' => $faker->uuid , 'abbr' => 500,
                'country_id' => 116,
            ),

            array(
                'id' => 2026,
                'name' => 'Nyanza',
                'uuid' => $faker->uuid , 'abbr' => 600,
                'country_id' => 116,
            ),

            array(
                'id' => 2027,
                'name' => 'Rift Valley',
                'uuid' => $faker->uuid , 'abbr' => 700,
                'country_id' => 116,
            ),

            array(
                'id' => 2028,
                'name' => 'Western',
                'uuid' => $faker->uuid , 'abbr' => 900,
                'country_id' => 116,
            ),

            array(
                'id' => 2029,
                'name' => 'Batken',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 117,
            ),

            array(
                'id' => 2030,
                'name' => 'Chü',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 117,
            ),

            array(
                'id' => 2031,
                'name' => 'Bishkek',
                'uuid' => $faker->uuid , 'abbr' => 'GB',
                'country_id' => 117,
            ),

            array(
                'id' => 2032,
                'name' => 'Jalal-Abad',
                'uuid' => $faker->uuid , 'abbr' => 'J',
                'country_id' => 117,
            ),

            array(
                'id' => 2033,
                'name' => 'Naryn',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 117,
            ),

            array(
                'id' => 2034,
                'name' => 'Osh',
                'uuid' => $faker->uuid , 'abbr' => 'O',
                'country_id' => 117,
            ),

            array(
                'id' => 2035,
                'name' => 'Talas',
                'uuid' => $faker->uuid , 'abbr' => 'T',
                'country_id' => 117,
            ),

            array(
                'id' => 2036,
                'name' => 'Ysyk-Köl',
                'uuid' => $faker->uuid , 'abbr' => 'Y',
                'country_id' => 117,
            ),

            array(
                'id' => 2037,
                'name' => 'Banteay Mean Chey [Bântéay Méanchey]',
                'uuid' => $faker->uuid , 'abbr' => 1,
                'country_id' => 118,
            ),

            array(
                'id' => 2038,
                'name' => 'Kracheh [Krâchéh]',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 118,
            ),

            array(
                'id' => 2039,
                'name' => 'Mondol Kiri [Môndól Kiri]',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 118,
            ),

            array(
                'id' => 2040,
                'name' => 'Phnom Penh [Phnum Pénh]',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 118,
            ),

            array(
                'id' => 2041,
                'name' => 'Preah Vihear [Preah Vihéar]',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 118,
            ),

            array(
                'id' => 2042,
                'name' => 'Prey Veaeng [Prey Vêng]',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 118,
            ),

            array(
                'id' => 2043,
                'name' => 'Pousaat [Pouthisat]',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 118,
            ),

            array(
                'id' => 2044,
                'name' => 'Rotanak Kiri [Rôtânôkiri]',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 118,
            ),

            array(
                'id' => 2045,
                'name' => 'Siem Reab [Siemréab]',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 118,
            ),

            array(
                'id' => 2046,
                'name' => 'Krong Preah Sihanouk [Krong Preah Sihanouk]',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 118,
            ),

            array(
                'id' => 2047,
                'name' => 'Stueng Traeng [Stœ?ng Trêng]',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 118,
            ),

            array(
                'id' => 2048,
                'name' => 'Baat Dambang [Batdâmbâng]',
                'uuid' => $faker->uuid , 'abbr' => 2,
                'country_id' => 118,
            ),

            array(
                'id' => 2049,
                'name' => 'Svaay Rieng [Svay Rieng]',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 118,
            ),

            array(
                'id' => 2050,
                'name' => 'Taakaev [Takêv]',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 118,
            ),

            array(
                'id' => 2051,
                'name' => 'Otdar Mean Chey [Otdâr Méanchey] ',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 118,
            ),

            array(
                'id' => 2052,
                'name' => 'Krong Kep [Krong Kêb]',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 118,
            ),

            array(
                'id' => 2053,
                'name' => 'Krong Pailin [Krong Pailin]',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 118,
            ),

            array(
                'id' => 2054,
                'name' => 'Kampong Chaam [Kâmpóng Cham]',
                'uuid' => $faker->uuid , 'abbr' => 3,
                'country_id' => 118,
            ),

            array(
                'id' => 2055,
                'name' => 'Kampong Chhnang [Kâmpóng Chhnang]',
                'uuid' => $faker->uuid , 'abbr' => 4,
                'country_id' => 118,
            ),

            array(
                'id' => 2056,
                'name' => 'Kampong Spueu [Kâmpóng Spœ]',
                'uuid' => $faker->uuid , 'abbr' => 5,
                'country_id' => 118,
            ),

            array(
                'id' => 2057,
                'name' => 'Kampong Thum [Kâmpóng Thum]',
                'uuid' => $faker->uuid , 'abbr' => 6,
                'country_id' => 118,
            ),

            array(
                'id' => 2058,
                'name' => 'Kampot [Kâmpôt]',
                'uuid' => $faker->uuid , 'abbr' => 7,
                'country_id' => 118,
            ),

            array(
                'id' => 2059,
                'name' => 'Kandaal [Kândal]',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 118,
            ),

            array(
                'id' => 2060,
                'name' => 'Kaoh Kong [Kaôh Kong]',
                'uuid' => $faker->uuid , 'abbr' => 9,
                'country_id' => 118,
            ),

            array(
                'id' => 2061,
                'name' => 'Gilbert Islands',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 119,
            ),

            array(
                'id' => 2062,
                'name' => 'Line Islands',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 119,
            ),

            array(
                'id' => 2063,
                'name' => 'Phoenix Islands',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 119,
            ),

            array(
                'id' => 2064,
                'name' => 'Anjouan',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 120,
            ),

            array(
                'id' => 2065,
                'name' => 'Grande Comore',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 120,
            ),

            array(
                'id' => 2066,
                'name' => 'Mohéli',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 120,
            ),

            array(
                'id' => 2067,
                'name' => 'Christ Church Nichola Town',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 121,
            ),

            array(
                'id' => 2068,
                'name' => 'Saint Anne Sandy Point',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 121,
            ),

            array(
                'id' => 2069,
                'name' => 'Saint George Basseterre',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 121,
            ),

            array(
                'id' => 2070,
                'name' => 'Saint George Gingerland',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 121,
            ),

            array(
                'id' => 2071,
                'name' => 'Saint James Windward',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 121,
            ),

            array(
                'id' => 2072,
                'name' => 'Saint John Capisterre',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 121,
            ),

            array(
                'id' => 2073,
                'name' => 'Saint John Figtree',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 121,
            ),

            array(
                'id' => 2074,
                'name' => 'Saint Mary Cayon',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 121,
            ),

            array(
                'id' => 2075,
                'name' => 'Saint Paul Capisterre',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 121,
            ),

            array(
                'id' => 2076,
                'name' => 'Saint Paul Charlestown',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 121,
            ),

            array(
                'id' => 2077,
                'name' => 'Saint Peter Basseterre',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 121,
            ),

            array(
                'id' => 2078,
                'name' => 'Saint Thomas Lowland',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 121,
            ),

            array(
                'id' => 2079,
                'name' => 'Saint Thomas Middle Island',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 121,
            ),

            array(
                'id' => 2080,
                'name' => 'Trinity Palmetto Point',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 121,
            ),

            array(
                'id' => 2081,
                'name' => 'Chagang-do',
                'uuid' => $faker->uuid , 'abbr' => 'CHA',
                'country_id' => 122,
            ),

            array(
                'id' => 2082,
                'name' => 'Hamgyongbuk-do',
                'uuid' => $faker->uuid , 'abbr' => 'HAB',
                'country_id' => 122,
            ),

            array(
                'id' => 2083,
                'name' => 'Hamgyongnam-do',
                'uuid' => $faker->uuid , 'abbr' => 'HAN',
                'country_id' => 122,
            ),

            array(
                'id' => 2084,
                'name' => 'Hwanghaebuk-do',
                'uuid' => $faker->uuid , 'abbr' => 'HWB',
                'country_id' => 122,
            ),

            array(
                'id' => 2085,
                'name' => 'Hwanghaenam-do',
                'uuid' => $faker->uuid , 'abbr' => 'HWN',
                'country_id' => 122,
            ),

            array(
                'id' => 2086,
                'name' => 'Kaesong-si',
                'uuid' => $faker->uuid , 'abbr' => 'KAE',
                'country_id' => 122,
            ),

            array(
                'id' => 2087,
                'name' => 'Kangwon-do',
                'uuid' => $faker->uuid , 'abbr' => 'KAN',
                'country_id' => 122,
            ),

            array(
                'id' => 2088,
                'name' => 'Najin Sonbong-si',
                'uuid' => $faker->uuid , 'abbr' => 'NAJ',
                'country_id' => 122,
            ),

            array(
                'id' => 2089,
                'name' => 'Nampo-si',
                'uuid' => $faker->uuid , 'abbr' => 'NAM',
                'country_id' => 122,
            ),

            array(
                'id' => 2090,
                'name' => 'Pyonganbuk-do',
                'uuid' => $faker->uuid , 'abbr' => 'PYB',
                'country_id' => 122,
            ),

            array(
                'id' => 2091,
                'name' => 'Pyongannam-do',
                'uuid' => $faker->uuid , 'abbr' => 'PYN',
                'country_id' => 122,
            ),

            array(
                'id' => 2092,
                'name' => 'Pyongyang-si',
                'uuid' => $faker->uuid , 'abbr' => 'PYO',
                'country_id' => 122,
            ),

            array(
                'id' => 2093,
                'name' => 'Rason',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 122,
            ),

            array(
                'id' => 2094,
                'name' => 'Yanggang-do',
                'uuid' => $faker->uuid , 'abbr' => 'YAN',
                'country_id' => 122,
            ),

            array(
                'id' => 2095,
                'name' => 'Seoul Teugbyeolsi [Seoul-T\'ukpyolshi]',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 123,
            ),

            array(
                'id' => 2096,
                'name' => 'Busan Gwang\'yeogsi [Pusan-Kwangyokshi]',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 123,
            ),

            array(
                'id' => 2097,
                'name' => 'Daegu Gwang\'yeogsi [Taegu-Kwangyokshi]',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 123,
            ),

            array(
                'id' => 2098,
                'name' => 'Incheon Gwang\'yeogsi [Inch\'n-Kwangyokshi]',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 123,
            ),

            array(
                'id' => 2099,
                'name' => 'Gwangju Gwang\'yeogsi [Kwangju-Kwangyokshi]',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 123,
            ),

            array(
                'id' => 2100,
                'name' => 'Daejeon Gwang\'yeogsi [Taejon-Kwangyokshi]',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 123,
            ),

            array(
                'id' => 2101,
                'name' => 'Ulsan Gwang\'yeogsi [Ulsan-Kwangyokshi]',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 123,
            ),

            array(
                'id' => 2102,
                'name' => 'Gyeonggido [Kyonggi-do]',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 123,
            ),

            array(
                'id' => 2103,
                'name' => 'Gang\'weondo [Kang-won-do]',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 123,
            ),

            array(
                'id' => 2104,
                'name' => 'Chungcheongbugdo [Ch\'ungch\'ongbuk-do]',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 123,
            ),

            array(
                'id' => 2105,
                'name' => 'Chungcheongnamdo [Ch\'ungch\'ongnam-do]',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 123,
            ),

            array(
                'id' => 2106,
                'name' => 'Jeonrabugdo[Chollabuk-do]',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 123,
            ),

            array(
                'id' => 2107,
                'name' => 'Jeonranamdo [Chollanam-do]',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 123,
            ),

            array(
                'id' => 2108,
                'name' => 'Gyeongsangbugdo [Kyongsangbuk-do]',
                'uuid' => $faker->uuid , 'abbr' => 47,
                'country_id' => 123,
            ),

            array(
                'id' => 2109,
                'name' => 'Gyeongsangnamdo [Kyongsangnam-do]',
                'uuid' => $faker->uuid , 'abbr' => 48,
                'country_id' => 123,
            ),

            array(
                'id' => 2110,
                'name' => 'Jejudo [Cheju-do]',
                'uuid' => $faker->uuid , 'abbr' => 49,
                'country_id' => 123,
            ),

            array(
                'id' => 2111,
                'name' => 'Al Ahmadi',
                'uuid' => $faker->uuid , 'abbr' => 'AH',
                'country_id' => 124,
            ),

            array(
                'id' => 2112,
                'name' => 'Al Farwaniyah',
                'uuid' => $faker->uuid , 'abbr' => 'FA',
                'country_id' => 124,
            ),

            array(
                'id' => 2113,
                'name' => 'Hawalli',
                'uuid' => $faker->uuid , 'abbr' => 'HA',
                'country_id' => 124,
            ),

            array(
                'id' => 2114,
                'name' => 'Al Jahrah',
                'uuid' => $faker->uuid , 'abbr' => 'JA',
                'country_id' => 124,
            ),

            array(
                'id' => 2115,
                'name' => 'Al Kuwayt',
                'uuid' => $faker->uuid , 'abbr' => 'KU',
                'country_id' => 124,
            ),

            array(
                'id' => 2116,
                'name' => 'Mubarak al-Kabir',
                'uuid' => $faker->uuid , 'abbr' => 'MU',
                'country_id' => 124,
            ),

            array(
                'id' => 2117,
                'name' => 'Aqmola oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'AKM',
                'country_id' => 126,
            ),

            array(
                'id' => 2118,
                'name' => 'Aqtöbe oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'AKT',
                'country_id' => 126,
            ),

            array(
                'id' => 2119,
                'name' => 'Almaty',
                'uuid' => $faker->uuid , 'abbr' => 'ALA',
                'country_id' => 126,
            ),

            array(
                'id' => 2120,
                'name' => 'Almaty oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'ALM',
                'country_id' => 126,
            ),

            array(
                'id' => 2121,
                'name' => 'Astana',
                'uuid' => $faker->uuid , 'abbr' => 'AST',
                'country_id' => 126,
            ),

            array(
                'id' => 2122,
                'name' => 'Atyrau oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'ATY',
                'country_id' => 126,
            ),

            array(
                'id' => 2123,
                'name' => 'Bayqongyr',
                'uuid' => $faker->uuid , 'abbr' => 'BAY',
                'country_id' => 126,
            ),

            array(
                'id' => 2124,
                'name' => 'Qaraghandy oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'KAR',
                'country_id' => 126,
            ),

            array(
                'id' => 2125,
                'name' => 'Qostanay oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'KUS',
                'country_id' => 126,
            ),

            array(
                'id' => 2126,
                'name' => 'Qyzylorda oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'KZY',
                'country_id' => 126,
            ),

            array(
                'id' => 2127,
                'name' => 'Mangghystau oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'MAN',
                'country_id' => 126,
            ),

            array(
                'id' => 2128,
                'name' => 'Pavlodar oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'PAV',
                'country_id' => 126,
            ),

            array(
                'id' => 2129,
                'name' => 'Soltüstik Qazaqstan oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'SEV',
                'country_id' => 126,
            ),

            array(
                'id' => 2130,
                'name' => 'Shyghys Qazaqstan oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'VOS',
                'country_id' => 126,
            ),

            array(
                'id' => 2131,
                'name' => 'Ongtüstik Qazaqstan oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'YUZ',
                'country_id' => 126,
            ),

            array(
                'id' => 2132,
                'name' => 'Batys Qazaqstan oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'ZAP',
                'country_id' => 126,
            ),

            array(
                'id' => 2133,
                'name' => 'Zhambyl oblysy',
                'uuid' => $faker->uuid , 'abbr' => 'ZHA',
                'country_id' => 126,
            ),

            array(
                'id' => 2134,
                'name' => 'Attapu [Attopeu]',
                'uuid' => $faker->uuid , 'abbr' => 'AT',
                'country_id' => 127,
            ),

            array(
                'id' => 2135,
                'name' => 'Bokèo',
                'uuid' => $faker->uuid , 'abbr' => 'BK',
                'country_id' => 127,
            ),

            array(
                'id' => 2136,
                'name' => 'Bolikhamxai [Borikhane]',
                'uuid' => $faker->uuid , 'abbr' => 'BL',
                'country_id' => 127,
            ),

            array(
                'id' => 2137,
                'name' => 'Champasak [Champassak]',
                'uuid' => $faker->uuid , 'abbr' => 'CH',
                'country_id' => 127,
            ),

            array(
                'id' => 2138,
                'name' => 'Houaphan',
                'uuid' => $faker->uuid , 'abbr' => 'HO',
                'country_id' => 127,
            ),

            array(
                'id' => 2139,
                'name' => 'Khammouan',
                'uuid' => $faker->uuid , 'abbr' => 'KH',
                'country_id' => 127,
            ),

            array(
                'id' => 2140,
                'name' => 'Louang Namtha',
                'uuid' => $faker->uuid , 'abbr' => 'LM',
                'country_id' => 127,
            ),

            array(
                'id' => 2141,
                'name' => 'Louangphabang [Louang Prabang]',
                'uuid' => $faker->uuid , 'abbr' => 'LP',
                'country_id' => 127,
            ),

            array(
                'id' => 2142,
                'name' => 'Oudômxai [Oudomsai]',
                'uuid' => $faker->uuid , 'abbr' => 'OU',
                'country_id' => 127,
            ),

            array(
                'id' => 2143,
                'name' => 'Phôngsali [Phong Saly]',
                'uuid' => $faker->uuid , 'abbr' => 'PH',
                'country_id' => 127,
            ),

            array(
                'id' => 2144,
                'name' => 'Salavan [Saravane]',
                'uuid' => $faker->uuid , 'abbr' => 'SL',
                'country_id' => 127,
            ),

            array(
                'id' => 2145,
                'name' => 'Savannakhét',
                'uuid' => $faker->uuid , 'abbr' => 'SV',
                'country_id' => 127,
            ),

            array(
                'id' => 2146,
                'name' => 'Vientiane',
                'uuid' => $faker->uuid , 'abbr' => 'VI',
                'country_id' => 127,
            ),

            array(
                'id' => 2147,
                'name' => 'Vientiane Prefecture',
                'uuid' => $faker->uuid , 'abbr' => 'VT',
                'country_id' => 127,
            ),

            array(
                'id' => 2148,
                'name' => 'Xaignabouli [Sayaboury]',
                'uuid' => $faker->uuid , 'abbr' => 'XA',
                'country_id' => 127,
            ),

            array(
                'id' => 2149,
                'name' => 'Xékong [Sékong]',
                'uuid' => $faker->uuid , 'abbr' => 'XE',
                'country_id' => 127,
            ),

            array(
                'id' => 2150,
                'name' => 'Xiangkhoang [Xieng Khouang]',
                'uuid' => $faker->uuid , 'abbr' => 'XI',
                'country_id' => 127,
            ),

            array(
                'id' => 2151,
                'name' => 'Xaisômboun',
                'uuid' => $faker->uuid , 'abbr' => 'XN',
                'country_id' => 127,
            ),

            array(
                'id' => 2152,
                'name' => 'Loubnâne ech Chemâli',
                'uuid' => $faker->uuid , 'abbr' => 'AS',
                'country_id' => 128,
            ),

            array(
                'id' => 2153,
                'name' => 'Beirut',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 128,
            ),

            array(
                'id' => 2154,
                'name' => 'El Béqaa',
                'uuid' => $faker->uuid , 'abbr' => 'BI',
                'country_id' => 128,
            ),

            array(
                'id' => 2155,
                'name' => 'Loubnâne ej Jnoûbi',
                'uuid' => $faker->uuid , 'abbr' => 'JA',
                'country_id' => 128,
            ),

            array(
                'id' => 2156,
                'name' => 'Jabal Loubnâne',
                'uuid' => $faker->uuid , 'abbr' => 'JL',
                'country_id' => 128,
            ),

            array(
                'id' => 2157,
                'name' => 'Nabatîyé',
                'uuid' => $faker->uuid , 'abbr' => 'NA',
                'country_id' => 128,
            ),

            array(
                'id' => 2158,
                'name' => 'Balzers',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 130,
            ),

            array(
                'id' => 2159,
                'name' => 'Eschen',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 130,
            ),

            array(
                'id' => 2160,
                'name' => 'Gamprin',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 130,
            ),

            array(
                'id' => 2161,
                'name' => 'Mauren',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 130,
            ),

            array(
                'id' => 2162,
                'name' => 'Planken',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 130,
            ),

            array(
                'id' => 2163,
                'name' => 'Ruggell',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 130,
            ),

            array(
                'id' => 2164,
                'name' => 'Schaan',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 130,
            ),

            array(
                'id' => 2165,
                'name' => 'Schellenberg',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 130,
            ),

            array(
                'id' => 2166,
                'name' => 'Triesen',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 130,
            ),

            array(
                'id' => 2167,
                'name' => 'Triesenberg',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 130,
            ),

            array(
                'id' => 2168,
                'name' => 'Vaduz',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 130,
            ),

            array(
                'id' => 2169,
                'name' => 'Colombo',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 131,
            ),

            array(
                'id' => 2170,
                'name' => 'Gampaha',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 131,
            ),

            array(
                'id' => 2171,
                'name' => 'Kalutara',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 131,
            ),

            array(
                'id' => 2172,
                'name' => 'Kandy',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 131,
            ),

            array(
                'id' => 2173,
                'name' => 'Matale',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 131,
            ),

            array(
                'id' => 2174,
                'name' => 'Nuwara Eliya',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 131,
            ),

            array(
                'id' => 2175,
                'name' => 'Galle',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 131,
            ),

            array(
                'id' => 2176,
                'name' => 'Matara',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 131,
            ),

            array(
                'id' => 2177,
                'name' => 'Hambantota',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 131,
            ),

            array(
                'id' => 2178,
                'name' => 'Jaffna',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 131,
            ),

            array(
                'id' => 2179,
                'name' => 'Kilinochchi',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 131,
            ),

            array(
                'id' => 2180,
                'name' => 'Mannar',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 131,
            ),

            array(
                'id' => 2181,
                'name' => 'Vavuniya',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 131,
            ),

            array(
                'id' => 2182,
                'name' => 'Mullaittivu',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 131,
            ),

            array(
                'id' => 2183,
                'name' => 'Batticaloa',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 131,
            ),

            array(
                'id' => 2184,
                'name' => 'Ampara',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 131,
            ),

            array(
                'id' => 2185,
                'name' => 'Trincomalee',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 131,
            ),

            array(
                'id' => 2186,
                'name' => 'Kurunegala',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 131,
            ),

            array(
                'id' => 2187,
                'name' => 'Puttalam',
                'uuid' => $faker->uuid , 'abbr' => 62,
                'country_id' => 131,
            ),

            array(
                'id' => 2188,
                'name' => 'Anuradhapura',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 131,
            ),

            array(
                'id' => 2189,
                'name' => 'Polonnaruwa',
                'uuid' => $faker->uuid , 'abbr' => 72,
                'country_id' => 131,
            ),

            array(
                'id' => 2190,
                'name' => 'Badulla',
                'uuid' => $faker->uuid , 'abbr' => 81,
                'country_id' => 131,
            ),

            array(
                'id' => 2191,
                'name' => 'Monaragala',
                'uuid' => $faker->uuid , 'abbr' => 82,
                'country_id' => 131,
            ),

            array(
                'id' => 2192,
                'name' => 'Ratnapura',
                'uuid' => $faker->uuid , 'abbr' => 91,
                'country_id' => 131,
            ),

            array(
                'id' => 2193,
                'name' => 'Kegalla',
                'uuid' => $faker->uuid , 'abbr' => 92,
                'country_id' => 131,
            ),

            array(
                'id' => 2194,
                'name' => 'Bong',
                'uuid' => $faker->uuid , 'abbr' => 'BG',
                'country_id' => 132,
            ),

            array(
                'id' => 2195,
                'name' => 'Bomi',
                'uuid' => $faker->uuid , 'abbr' => 'BM',
                'country_id' => 132,
            ),

            array(
                'id' => 2196,
                'name' => 'Grand Cape Mount',
                'uuid' => $faker->uuid , 'abbr' => 'CM',
                'country_id' => 132,
            ),

            array(
                'id' => 2197,
                'name' => 'Grand Bassa',
                'uuid' => $faker->uuid , 'abbr' => 'GB',
                'country_id' => 132,
            ),

            array(
                'id' => 2198,
                'name' => 'Grand Gedeh',
                'uuid' => $faker->uuid , 'abbr' => 'GG',
                'country_id' => 132,
            ),

            array(
                'id' => 2199,
                'name' => 'Grand Kru',
                'uuid' => $faker->uuid , 'abbr' => 'GK',
                'country_id' => 132,
            ),

            array(
                'id' => 2200,
                'name' => 'Lofa',
                'uuid' => $faker->uuid , 'abbr' => 'LO',
                'country_id' => 132,
            ),

            array(
                'id' => 2201,
                'name' => 'Margibi',
                'uuid' => $faker->uuid , 'abbr' => 'MG',
                'country_id' => 132,
            ),

            array(
                'id' => 2202,
                'name' => 'Montserrado',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 132,
            ),

            array(
                'id' => 2203,
                'name' => 'Maryland',
                'uuid' => $faker->uuid , 'abbr' => 'MY',
                'country_id' => 132,
            ),

            array(
                'id' => 2204,
                'name' => 'Nimba',
                'uuid' => $faker->uuid , 'abbr' => 'NI',
                'country_id' => 132,
            ),

            array(
                'id' => 2205,
                'name' => 'Rivercess',
                'uuid' => $faker->uuid , 'abbr' => 'RI',
                'country_id' => 132,
            ),

            array(
                'id' => 2206,
                'name' => 'Sinoe',
                'uuid' => $faker->uuid , 'abbr' => 'SI',
                'country_id' => 132,
            ),

            array(
                'id' => 2207,
                'name' => 'Gbarpolu',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 132,
            ),

            array(
                'id' => 2208,
                'name' => 'River Gee',
                'uuid' => $faker->uuid , 'abbr' => 'X2~',
                'country_id' => 132,
            ),

            array(
                'id' => 2209,
                'name' => 'Maseru',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 133,
            ),

            array(
                'id' => 2210,
                'name' => 'Butha-Buthe',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 133,
            ),

            array(
                'id' => 2211,
                'name' => 'Leribe',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 133,
            ),

            array(
                'id' => 2212,
                'name' => 'Berea',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 133,
            ),

            array(
                'id' => 2213,
                'name' => 'Mafeteng',
                'uuid' => $faker->uuid , 'abbr' => 'E',
                'country_id' => 133,
            ),

            array(
                'id' => 2214,
                'name' => 'Mohale\'s Hoek',
                'uuid' => $faker->uuid , 'abbr' => 'F',
                'country_id' => 133,
            ),

            array(
                'id' => 2215,
                'name' => 'Quthing',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 133,
            ),

            array(
                'id' => 2216,
                'name' => 'Qacha\'s Nek',
                'uuid' => $faker->uuid , 'abbr' => 'H',
                'country_id' => 133,
            ),

            array(
                'id' => 2217,
                'name' => 'Mokhotlong',
                'uuid' => $faker->uuid , 'abbr' => 'J',
                'country_id' => 133,
            ),

            array(
                'id' => 2218,
                'name' => 'Thaba-Tseka',
                'uuid' => $faker->uuid , 'abbr' => 'K',
                'country_id' => 133,
            ),

            array(
                'id' => 2219,
                'name' => 'Alytaus Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 134,
            ),

            array(
                'id' => 2220,
                'name' => 'Klaipedos Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'KL',
                'country_id' => 134,
            ),

            array(
                'id' => 2221,
                'name' => 'Kauno Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'KU',
                'country_id' => 134,
            ),

            array(
                'id' => 2222,
                'name' => 'Marijampoles Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'MR',
                'country_id' => 134,
            ),

            array(
                'id' => 2223,
                'name' => 'Panevežio Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'PN',
                'country_id' => 134,
            ),

            array(
                'id' => 2224,
                'name' => 'Šiauliu Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 134,
            ),

            array(
                'id' => 2225,
                'name' => 'Taurages Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 134,
            ),

            array(
                'id' => 2226,
                'name' => 'Telšiu Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'TE',
                'country_id' => 134,
            ),

            array(
                'id' => 2227,
                'name' => 'Utenos Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'UT',
                'country_id' => 134,
            ),

            array(
                'id' => 2228,
                'name' => 'Vilniaus Apskritis',
                'uuid' => $faker->uuid , 'abbr' => 'VL',
                'country_id' => 134,
            ),

            array(
                'id' => 2229,
                'name' => 'Diekirch',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 135,
            ),

            array(
                'id' => 2230,
                'name' => 'Grevenmacher',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 135,
            ),

            array(
                'id' => 2231,
                'name' => 'Luxembourg (fr)',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 135,
            ),

            array(
                'id' => 2232,
                'name' => 'Aizkraukles Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'AI',
                'country_id' => 136,
            ),

            array(
                'id' => 2233,
                'name' => 'Aluksnes Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 136,
            ),

            array(
                'id' => 2234,
                'name' => 'Balvu Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'BL',
                'country_id' => 136,
            ),

            array(
                'id' => 2235,
                'name' => 'Bauskas Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'BU',
                'country_id' => 136,
            ),

            array(
                'id' => 2236,
                'name' => 'Cesu Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 136,
            ),

            array(
                'id' => 2237,
                'name' => 'Daugavpils Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'DA',
                'country_id' => 136,
            ),

            array(
                'id' => 2238,
                'name' => 'Daugavpils',
                'uuid' => $faker->uuid , 'abbr' => 'DGV',
                'country_id' => 136,
            ),

            array(
                'id' => 2239,
                'name' => 'Dobeles Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'DO',
                'country_id' => 136,
            ),

            array(
                'id' => 2240,
                'name' => 'Gulbenes Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'GU',
                'country_id' => 136,
            ),

            array(
                'id' => 2241,
                'name' => 'Jelgava',
                'uuid' => $faker->uuid , 'abbr' => 'JEL',
                'country_id' => 136,
            ),

            array(
                'id' => 2242,
                'name' => 'Jekabpils Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'JK',
                'country_id' => 136,
            ),

            array(
                'id' => 2243,
                'name' => 'Jelgavas Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'JL',
                'country_id' => 136,
            ),

            array(
                'id' => 2244,
                'name' => 'Jurmala',
                'uuid' => $faker->uuid , 'abbr' => 'JUR',
                'country_id' => 136,
            ),

            array(
                'id' => 2245,
                'name' => 'Kraslavas Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'KR',
                'country_id' => 136,
            ),

            array(
                'id' => 2246,
                'name' => 'Kuldigas Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'KU',
                'country_id' => 136,
            ),

            array(
                'id' => 2247,
                'name' => 'Liepajas Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'LE',
                'country_id' => 136,
            ),

            array(
                'id' => 2248,
                'name' => 'Limbažu Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'LM',
                'country_id' => 136,
            ),

            array(
                'id' => 2249,
                'name' => 'Liepaja',
                'uuid' => $faker->uuid , 'abbr' => 'LPX',
                'country_id' => 136,
            ),

            array(
                'id' => 2250,
                'name' => 'Ludzas Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'LU',
                'country_id' => 136,
            ),

            array(
                'id' => 2251,
                'name' => 'Madonas Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 136,
            ),

            array(
                'id' => 2252,
                'name' => 'Ogres Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'OG',
                'country_id' => 136,
            ),

            array(
                'id' => 2253,
                'name' => 'Preilu Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'PR',
                'country_id' => 136,
            ),

            array(
                'id' => 2254,
                'name' => 'Rezeknes Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'RE',
                'country_id' => 136,
            ),

            array(
                'id' => 2255,
                'name' => 'Rezekne',
                'uuid' => $faker->uuid , 'abbr' => 'REZ',
                'country_id' => 136,
            ),

            array(
                'id' => 2256,
                'name' => 'Rigas Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'RI',
                'country_id' => 136,
            ),

            array(
                'id' => 2257,
                'name' => 'Riga',
                'uuid' => $faker->uuid , 'abbr' => 'RIX',
                'country_id' => 136,
            ),

            array(
                'id' => 2258,
                'name' => 'Saldus Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 136,
            ),

            array(
                'id' => 2259,
                'name' => 'Talsu Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 136,
            ),

            array(
                'id' => 2260,
                'name' => 'Tukuma Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'TU',
                'country_id' => 136,
            ),

            array(
                'id' => 2261,
                'name' => 'Ventspils Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'VE',
                'country_id' => 136,
            ),

            array(
                'id' => 2262,
                'name' => 'Ventspils',
                'uuid' => $faker->uuid , 'abbr' => 'VEN',
                'country_id' => 136,
            ),

            array(
                'id' => 2263,
                'name' => 'Valkas Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'VK',
                'country_id' => 136,
            ),

            array(
                'id' => 2264,
                'name' => 'Valmieras Aprinkis',
                'uuid' => $faker->uuid , 'abbr' => 'VM',
                'country_id' => 136,
            ),

            array(
                'id' => 2265,
                'name' => 'Ajdabiya',
                'uuid' => $faker->uuid , 'abbr' => 'AJ',
                'country_id' => 137,
            ),

            array(
                'id' => 2266,
                'name' => 'Banghazi',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 137,
            ),

            array(
                'id' => 2267,
                'name' => 'Al Butnan',
                'uuid' => $faker->uuid , 'abbr' => 'BU',
                'country_id' => 137,
            ),

            array(
                'id' => 2268,
                'name' => 'Bani Walid',
                'uuid' => $faker->uuid , 'abbr' => 'BW',
                'country_id' => 137,
            ),

            array(
                'id' => 2269,
                'name' => 'Darnah',
                'uuid' => $faker->uuid , 'abbr' => 'DR',
                'country_id' => 137,
            ),

            array(
                'id' => 2270,
                'name' => 'Ghadamis',
                'uuid' => $faker->uuid , 'abbr' => 'GD',
                'country_id' => 137,
            ),

            array(
                'id' => 2271,
                'name' => 'Gharyan',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 137,
            ),

            array(
                'id' => 2272,
                'name' => 'Ghat',
                'uuid' => $faker->uuid , 'abbr' => 'GT',
                'country_id' => 137,
            ),

            array(
                'id' => 2273,
                'name' => 'Al ?izam al Akh?ar',
                'uuid' => $faker->uuid , 'abbr' => 'HZ',
                'country_id' => 137,
            ),

            array(
                'id' => 2274,
                'name' => 'Al Jabal al Akh?ar',
                'uuid' => $faker->uuid , 'abbr' => 'JA',
                'country_id' => 137,
            ),

            array(
                'id' => 2275,
                'name' => 'Jaghbub',
                'uuid' => $faker->uuid , 'abbr' => 'JB',
                'country_id' => 137,
            ),

            array(
                'id' => 2276,
                'name' => 'Al Jifarah',
                'uuid' => $faker->uuid , 'abbr' => 'JI',
                'country_id' => 137,
            ),

            array(
                'id' => 2277,
                'name' => 'Al Jufrah',
                'uuid' => $faker->uuid , 'abbr' => 'JU',
                'country_id' => 137,
            ),

            array(
                'id' => 2278,
                'name' => 'Al Kufrah',
                'uuid' => $faker->uuid , 'abbr' => 'KF',
                'country_id' => 137,
            ),

            array(
                'id' => 2279,
                'name' => 'Al Marqab',
                'uuid' => $faker->uuid , 'abbr' => 'MB',
                'country_id' => 137,
            ),

            array(
                'id' => 2280,
                'name' => 'Misratah',
                'uuid' => $faker->uuid , 'abbr' => 'MI',
                'country_id' => 137,
            ),

            array(
                'id' => 2281,
                'name' => 'Al Marj',
                'uuid' => $faker->uuid , 'abbr' => 'MJ',
                'country_id' => 137,
            ),

            array(
                'id' => 2282,
                'name' => 'Murzuq',
                'uuid' => $faker->uuid , 'abbr' => 'MQ',
                'country_id' => 137,
            ),

            array(
                'id' => 2283,
                'name' => 'Mizdah',
                'uuid' => $faker->uuid , 'abbr' => 'MZ',
                'country_id' => 137,
            ),

            array(
                'id' => 2284,
                'name' => 'Nalut',
                'uuid' => $faker->uuid , 'abbr' => 'NL',
                'country_id' => 137,
            ),

            array(
                'id' => 2285,
                'name' => 'An Nuqat al Khams',
                'uuid' => $faker->uuid , 'abbr' => 'NQ',
                'country_id' => 137,
            ),

            array(
                'id' => 2286,
                'name' => 'Al Qubbah',
                'uuid' => $faker->uuid , 'abbr' => 'QB',
                'country_id' => 137,
            ),

            array(
                'id' => 2287,
                'name' => 'Al Qatrun',
                'uuid' => $faker->uuid , 'abbr' => 'QT',
                'country_id' => 137,
            ),

            array(
                'id' => 2288,
                'name' => 'Sabha',
                'uuid' => $faker->uuid , 'abbr' => 'SB',
                'country_id' => 137,
            ),

            array(
                'id' => 2289,
                'name' => 'Ash Shati\'',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 137,
            ),

            array(
                'id' => 2290,
                'name' => 'Surt',
                'uuid' => $faker->uuid , 'abbr' => 'SR',
                'country_id' => 137,
            ),

            array(
                'id' => 2291,
                'name' => 'Sabratah Surman',
                'uuid' => $faker->uuid , 'abbr' => 'SS',
                'country_id' => 137,
            ),

            array(
                'id' => 2292,
                'name' => 'Tarabulus',
                'uuid' => $faker->uuid , 'abbr' => 'TB',
                'country_id' => 137,
            ),

            array(
                'id' => 2293,
                'name' => 'Tarhunah-Masallatah',
                'uuid' => $faker->uuid , 'abbr' => 'TM',
                'country_id' => 137,
            ),

            array(
                'id' => 2294,
                'name' => 'Tajura\' wa an Nawa?i Arba?',
                'uuid' => $faker->uuid , 'abbr' => 'TN',
                'country_id' => 137,
            ),

            array(
                'id' => 2295,
                'name' => 'Al Wa?ah',
                'uuid' => $faker->uuid , 'abbr' => 'WA',
                'country_id' => 137,
            ),

            array(
                'id' => 2296,
                'name' => 'Wadi al ?ayat',
                'uuid' => $faker->uuid , 'abbr' => 'WD',
                'country_id' => 137,
            ),

            array(
                'id' => 2297,
                'name' => 'Yafran-Jadu',
                'uuid' => $faker->uuid , 'abbr' => 'YJ',
                'country_id' => 137,
            ),

            array(
                'id' => 2298,
                'name' => 'Az Zawiyah',
                'uuid' => $faker->uuid , 'abbr' => 'ZA',
                'country_id' => 137,
            ),

            array(
                'id' => 2299,
                'name' => 'Agadir*',
                'uuid' => $faker->uuid , 'abbr' => 'AGD',
                'country_id' => 138,
            ),

            array(
                'id' => 2300,
                'name' => 'Aousserd',
                'uuid' => $faker->uuid , 'abbr' => 'AOU',
                'country_id' => 138,
            ),

            array(
                'id' => 2301,
                'name' => 'Assa-Zag',
                'uuid' => $faker->uuid , 'abbr' => 'ASZ',
                'country_id' => 138,
            ),

            array(
                'id' => 2302,
                'name' => 'Azilal',
                'uuid' => $faker->uuid , 'abbr' => 'AZI',
                'country_id' => 138,
            ),

            array(
                'id' => 2303,
                'name' => 'Aït Baha',
                'uuid' => $faker->uuid , 'abbr' => 'BAH',
                'country_id' => 138,
            ),

            array(
                'id' => 2304,
                'name' => 'Beni Mellal',
                'uuid' => $faker->uuid , 'abbr' => 'BEM',
                'country_id' => 138,
            ),

            array(
                'id' => 2305,
                'name' => 'Berkane',
                'uuid' => $faker->uuid , 'abbr' => 'BER',
                'country_id' => 138,
            ),

            array(
                'id' => 2306,
                'name' => 'Ben Slimane',
                'uuid' => $faker->uuid , 'abbr' => 'BES',
                'country_id' => 138,
            ),

            array(
                'id' => 2307,
                'name' => 'Boujdour (EH)',
                'uuid' => $faker->uuid , 'abbr' => 'BOD',
                'country_id' => 138,
            ),

            array(
                'id' => 2308,
                'name' => 'Boulemane',
                'uuid' => $faker->uuid , 'abbr' => 'BOM',
                'country_id' => 138,
            ),

            array(
                'id' => 2309,
                'name' => 'Casablanca [Dar el Beïda]*',
                'uuid' => $faker->uuid , 'abbr' => 'CAS',
                'country_id' => 138,
            ),

            array(
                'id' => 2310,
                'name' => 'Chefchaouene',
                'uuid' => $faker->uuid , 'abbr' => 'CHE',
                'country_id' => 138,
            ),

            array(
                'id' => 2311,
                'name' => 'Chichaoua',
                'uuid' => $faker->uuid , 'abbr' => 'CHI',
                'country_id' => 138,
            ),

            array(
                'id' => 2312,
                'name' => 'Chtouka-Ait Baha',
                'uuid' => $faker->uuid , 'abbr' => 'CHT',
                'country_id' => 138,
            ),

            array(
                'id' => 2313,
                'name' => 'Errachidia',
                'uuid' => $faker->uuid , 'abbr' => 'ERR',
                'country_id' => 138,
            ),

            array(
                'id' => 2314,
                'name' => 'Essaouira',
                'uuid' => $faker->uuid , 'abbr' => 'ESI',
                'country_id' => 138,
            ),

            array(
                'id' => 2315,
                'name' => 'Es Smara (EH)',
                'uuid' => $faker->uuid , 'abbr' => 'ESM',
                'country_id' => 138,
            ),

            array(
                'id' => 2316,
                'name' => 'Fahs-Beni Makada',
                'uuid' => $faker->uuid , 'abbr' => 'FAH',
                'country_id' => 138,
            ),

            array(
                'id' => 2317,
                'name' => 'Fès*',
                'uuid' => $faker->uuid , 'abbr' => 'FES',
                'country_id' => 138,
            ),

            array(
                'id' => 2318,
                'name' => 'Figuig',
                'uuid' => $faker->uuid , 'abbr' => 'FIG',
                'country_id' => 138,
            ),

            array(
                'id' => 2319,
                'name' => 'Guelmim',
                'uuid' => $faker->uuid , 'abbr' => 'GUE',
                'country_id' => 138,
            ),

            array(
                'id' => 2320,
                'name' => 'El Hajeb',
                'uuid' => $faker->uuid , 'abbr' => 'HAJ',
                'country_id' => 138,
            ),

            array(
                'id' => 2321,
                'name' => 'Al Haouz',
                'uuid' => $faker->uuid , 'abbr' => 'HAO',
                'country_id' => 138,
            ),

            array(
                'id' => 2322,
                'name' => 'Al Hoceïma',
                'uuid' => $faker->uuid , 'abbr' => 'HOC',
                'country_id' => 138,
            ),

            array(
                'id' => 2323,
                'name' => 'Ifrane',
                'uuid' => $faker->uuid , 'abbr' => 'IFR',
                'country_id' => 138,
            ),

            array(
                'id' => 2324,
                'name' => 'El Jadida',
                'uuid' => $faker->uuid , 'abbr' => 'JDI',
                'country_id' => 138,
            ),

            array(
                'id' => 2325,
                'name' => 'Jerada',
                'uuid' => $faker->uuid , 'abbr' => 'JRA',
                'country_id' => 138,
            ),

            array(
                'id' => 2326,
                'name' => 'Kénitra',
                'uuid' => $faker->uuid , 'abbr' => 'KEN',
                'country_id' => 138,
            ),

            array(
                'id' => 2327,
                'name' => 'Kelaat Sraghna',
                'uuid' => $faker->uuid , 'abbr' => 'KES',
                'country_id' => 138,
            ),

            array(
                'id' => 2328,
                'name' => 'Khemisset',
                'uuid' => $faker->uuid , 'abbr' => 'KHE',
                'country_id' => 138,
            ),

            array(
                'id' => 2329,
                'name' => 'Khenifra',
                'uuid' => $faker->uuid , 'abbr' => 'KHN',
                'country_id' => 138,
            ),

            array(
                'id' => 2330,
                'name' => 'Khouribga',
                'uuid' => $faker->uuid , 'abbr' => 'KHO',
                'country_id' => 138,
            ),

            array(
                'id' => 2331,
                'name' => 'Laâyoune* (EH)',
                'uuid' => $faker->uuid , 'abbr' => 'LAA',
                'country_id' => 138,
            ),

            array(
                'id' => 2332,
                'name' => 'Larache',
                'uuid' => $faker->uuid , 'abbr' => 'LAR',
                'country_id' => 138,
            ),

            array(
                'id' => 2333,
                'name' => 'Marrakech*',
                'uuid' => $faker->uuid , 'abbr' => 'MAR',
                'country_id' => 138,
            ),

            array(
                'id' => 2334,
                'name' => 'Médiouna',
                'uuid' => $faker->uuid , 'abbr' => 'MED',
                'country_id' => 138,
            ),

            array(
                'id' => 2335,
                'name' => 'Meknès*',
                'uuid' => $faker->uuid , 'abbr' => 'MEK',
                'country_id' => 138,
            ),

            array(
                'id' => 2336,
                'name' => 'Aït Melloul',
                'uuid' => $faker->uuid , 'abbr' => 'MEL',
                'country_id' => 138,
            ),

            array(
                'id' => 2337,
                'name' => 'Moulay Yacoub',
                'uuid' => $faker->uuid , 'abbr' => 'MOU',
                'country_id' => 138,
            ),

            array(
                'id' => 2338,
                'name' => 'Nador',
                'uuid' => $faker->uuid , 'abbr' => 'NAD',
                'country_id' => 138,
            ),

            array(
                'id' => 2339,
                'name' => 'Nouaceur',
                'uuid' => $faker->uuid , 'abbr' => 'NOU',
                'country_id' => 138,
            ),

            array(
                'id' => 2340,
                'name' => 'Ouarzazate',
                'uuid' => $faker->uuid , 'abbr' => 'OUA',
                'country_id' => 138,
            ),

            array(
                'id' => 2341,
                'name' => 'Oued ed Dahab (EH)',
                'uuid' => $faker->uuid , 'abbr' => 'OUD',
                'country_id' => 138,
            ),

            array(
                'id' => 2342,
                'name' => 'Oujda*',
                'uuid' => $faker->uuid , 'abbr' => 'OUJ',
                'country_id' => 138,
            ),

            array(
                'id' => 2343,
                'name' => 'Rabat-Salé*',
                'uuid' => $faker->uuid , 'abbr' => 'RBA',
                'country_id' => 138,
            ),

            array(
                'id' => 2344,
                'name' => 'Safi',
                'uuid' => $faker->uuid , 'abbr' => 'SAF',
                'country_id' => 138,
            ),

            array(
                'id' => 2345,
                'name' => 'Salé',
                'uuid' => $faker->uuid , 'abbr' => 'SAL',
                'country_id' => 138,
            ),

            array(
                'id' => 2346,
                'name' => 'Sefrou',
                'uuid' => $faker->uuid , 'abbr' => 'SEF',
                'country_id' => 138,
            ),

            array(
                'id' => 2347,
                'name' => 'Settat',
                'uuid' => $faker->uuid , 'abbr' => 'SET',
                'country_id' => 138,
            ),

            array(
                'id' => 2348,
                'name' => 'Sidi Kacem',
                'uuid' => $faker->uuid , 'abbr' => 'SIK',
                'country_id' => 138,
            ),

            array(
                'id' => 2349,
                'name' => 'Skhirate-Témara',
                'uuid' => $faker->uuid , 'abbr' => 'SKH',
                'country_id' => 138,
            ),

            array(
                'id' => 2350,
                'name' => 'Sidi Youssef Ben Ali',
                'uuid' => $faker->uuid , 'abbr' => 'SYB',
                'country_id' => 138,
            ),

            array(
                'id' => 2351,
                'name' => 'Taourirt',
                'uuid' => $faker->uuid , 'abbr' => 'TAI',
                'country_id' => 138,
            ),

            array(
                'id' => 2352,
                'name' => 'Taounate',
                'uuid' => $faker->uuid , 'abbr' => 'TAO',
                'country_id' => 138,
            ),

            array(
                'id' => 2353,
                'name' => 'Taroudannt',
                'uuid' => $faker->uuid , 'abbr' => 'TAR',
                'country_id' => 138,
            ),

            array(
                'id' => 2354,
                'name' => 'Tata',
                'uuid' => $faker->uuid , 'abbr' => 'TAT',
                'country_id' => 138,
            ),

            array(
                'id' => 2355,
                'name' => 'Taza',
                'uuid' => $faker->uuid , 'abbr' => 'TAZ',
                'country_id' => 138,
            ),

            array(
                'id' => 2356,
                'name' => 'Tétouan*',
                'uuid' => $faker->uuid , 'abbr' => 'TET',
                'country_id' => 138,
            ),

            array(
                'id' => 2357,
                'name' => 'Tiznit',
                'uuid' => $faker->uuid , 'abbr' => 'TIZ',
                'country_id' => 138,
            ),

            array(
                'id' => 2358,
                'name' => 'Tanger',
                'uuid' => $faker->uuid , 'abbr' => 'TNG',
                'country_id' => 138,
            ),

            array(
                'id' => 2359,
                'name' => 'Tan-Tan',
                'uuid' => $faker->uuid , 'abbr' => 'TNT',
                'country_id' => 138,
            ),

            array(
                'id' => 2360,
                'name' => 'Laayoune-Boujdour-Sakia El Hamra',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 138,
            ),

            array(
                'id' => 2361,
                'name' => 'Zagora',
                'uuid' => $faker->uuid , 'abbr' => 'ZAG',
                'country_id' => 138,
            ),

            array(
                'id' => 2362,
                'name' => 'Balti',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 140,
            ),

            array(
                'id' => 2363,
                'name' => 'Cahul',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 140,
            ),

            array(
                'id' => 2364,
                'name' => 'Chisinau City',
                'uuid' => $faker->uuid , 'abbr' => 'CH',
                'country_id' => 140,
            ),

            array(
                'id' => 2365,
                'name' => 'Chisinau',
                'uuid' => $faker->uuid , 'abbr' => 'CU',
                'country_id' => 140,
            ),

            array(
                'id' => 2366,
                'name' => 'Edinet',
                'uuid' => $faker->uuid , 'abbr' => 'ED',
                'country_id' => 140,
            ),

            array(
                'id' => 2367,
                'name' => 'Gagauzia, Unitate Teritoriala Autonoma (UTAG)',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 140,
            ),

            array(
                'id' => 2368,
                'name' => 'Lapusna',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 140,
            ),

            array(
                'id' => 2369,
                'name' => 'Orhei',
                'uuid' => $faker->uuid , 'abbr' => 'OR',
                'country_id' => 140,
            ),

            array(
                'id' => 2370,
                'name' => 'Stînga Nistrului, unitatea teritoriala din',
                'uuid' => $faker->uuid , 'abbr' => 'SN',
                'country_id' => 140,
            ),

            array(
                'id' => 2371,
                'name' => 'Soroca',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 140,
            ),

            array(
                'id' => 2372,
                'name' => 'Taraclia',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 140,
            ),

            array(
                'id' => 2373,
                'name' => 'Tighina [Bender]',
                'uuid' => $faker->uuid , 'abbr' => 'TI',
                'country_id' => 140,
            ),

            array(
                'id' => 2374,
                'name' => 'Ungheni',
                'uuid' => $faker->uuid , 'abbr' => 'UN',
                'country_id' => 140,
            ),

            array(
                'id' => 2375,
                'name' => 'Andrijevica',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 141,
            ),

            array(
                'id' => 2376,
                'name' => 'Bar',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 141,
            ),

            array(
                'id' => 2377,
                'name' => 'Berane',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 141,
            ),

            array(
                'id' => 2378,
                'name' => 'Bijelo Polje',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 141,
            ),

            array(
                'id' => 2379,
                'name' => 'Budva',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 141,
            ),

            array(
                'id' => 2380,
                'name' => 'Cetinje',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 141,
            ),

            array(
                'id' => 2381,
                'name' => 'Danilovgrad',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 141,
            ),

            array(
                'id' => 2382,
                'name' => 'Herceg-Novi',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 141,
            ),

            array(
                'id' => 2383,
                'name' => 'Kolašin',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 141,
            ),

            array(
                'id' => 2384,
                'name' => 'Kotor',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 141,
            ),

            array(
                'id' => 2385,
                'name' => 'Mojkovac',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 141,
            ),

            array(
                'id' => 2386,
                'name' => 'Nikšic´',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 141,
            ),

            array(
                'id' => 2387,
                'name' => 'Plav',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 141,
            ),

            array(
                'id' => 2388,
                'name' => 'Pljevlja',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 141,
            ),

            array(
                'id' => 2389,
                'name' => 'Plužine',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 141,
            ),

            array(
                'id' => 2390,
                'name' => 'Podgorica',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 141,
            ),

            array(
                'id' => 2391,
                'name' => 'Rožaje',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 141,
            ),

            array(
                'id' => 2392,
                'name' => 'Šavnik',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 141,
            ),

            array(
                'id' => 2393,
                'name' => 'Tivat',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 141,
            ),

            array(
                'id' => 2394,
                'name' => 'Ulcinj',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 141,
            ),

            array(
                'id' => 2395,
                'name' => 'Žabljak',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 141,
            ),

            array(
                'id' => 2396,
                'name' => 'Toamasina',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 143,
            ),

            array(
                'id' => 2397,
                'name' => 'Antsiranana',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 143,
            ),

            array(
                'id' => 2398,
                'name' => 'Fianarantsoa',
                'uuid' => $faker->uuid , 'abbr' => 'F',
                'country_id' => 143,
            ),

            array(
                'id' => 2399,
                'name' => 'Mahajanga',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 143,
            ),

            array(
                'id' => 2400,
                'name' => 'Antananarivo',
                'uuid' => $faker->uuid , 'abbr' => 'T',
                'country_id' => 143,
            ),

            array(
                'id' => 2401,
                'name' => 'Toliara',
                'uuid' => $faker->uuid , 'abbr' => 'U',
                'country_id' => 143,
            ),

            array(
                'id' => 2402,
                'name' => 'Ailuk',
                'uuid' => $faker->uuid , 'abbr' => 'ALK',
                'country_id' => 144,
            ),

            array(
                'id' => 2403,
                'name' => 'Ailinglapalap',
                'uuid' => $faker->uuid , 'abbr' => 'ALL',
                'country_id' => 144,
            ),

            array(
                'id' => 2404,
                'name' => 'Arno',
                'uuid' => $faker->uuid , 'abbr' => 'ARN',
                'country_id' => 144,
            ),

            array(
                'id' => 2405,
                'name' => 'Aur',
                'uuid' => $faker->uuid , 'abbr' => 'AUR',
                'country_id' => 144,
            ),

            array(
                'id' => 2406,
                'name' => 'Ebon',
                'uuid' => $faker->uuid , 'abbr' => 'EBO',
                'country_id' => 144,
            ),

            array(
                'id' => 2407,
                'name' => 'Eniwetok',
                'uuid' => $faker->uuid , 'abbr' => 'ENI',
                'country_id' => 144,
            ),

            array(
                'id' => 2408,
                'name' => 'Jabat',
                'uuid' => $faker->uuid , 'abbr' => 'JAB',
                'country_id' => 144,
            ),

            array(
                'id' => 2409,
                'name' => 'Jaluit',
                'uuid' => $faker->uuid , 'abbr' => 'JAL',
                'country_id' => 144,
            ),

            array(
                'id' => 2410,
                'name' => 'Kili',
                'uuid' => $faker->uuid , 'abbr' => 'KIL',
                'country_id' => 144,
            ),

            array(
                'id' => 2411,
                'name' => 'Kwajalein',
                'uuid' => $faker->uuid , 'abbr' => 'KWA',
                'country_id' => 144,
            ),

            array(
                'id' => 2412,
                'name' => 'Lae',
                'uuid' => $faker->uuid , 'abbr' => 'LAE',
                'country_id' => 144,
            ),

            array(
                'id' => 2413,
                'name' => 'Lib',
                'uuid' => $faker->uuid , 'abbr' => 'LIB',
                'country_id' => 144,
            ),

            array(
                'id' => 2414,
                'name' => 'Likiep',
                'uuid' => $faker->uuid , 'abbr' => 'LIK',
                'country_id' => 144,
            ),

            array(
                'id' => 2415,
                'name' => 'Majuro',
                'uuid' => $faker->uuid , 'abbr' => 'MAJ',
                'country_id' => 144,
            ),

            array(
                'id' => 2416,
                'name' => 'Maloelap',
                'uuid' => $faker->uuid , 'abbr' => 'MAL',
                'country_id' => 144,
            ),

            array(
                'id' => 2417,
                'name' => 'Mejit',
                'uuid' => $faker->uuid , 'abbr' => 'MEJ',
                'country_id' => 144,
            ),

            array(
                'id' => 2418,
                'name' => 'Mili',
                'uuid' => $faker->uuid , 'abbr' => 'MIL',
                'country_id' => 144,
            ),

            array(
                'id' => 2419,
                'name' => 'Namorik',
                'uuid' => $faker->uuid , 'abbr' => 'NMK',
                'country_id' => 144,
            ),

            array(
                'id' => 2420,
                'name' => 'Namu',
                'uuid' => $faker->uuid , 'abbr' => 'NMU',
                'country_id' => 144,
            ),

            array(
                'id' => 2421,
                'name' => 'Rongelap',
                'uuid' => $faker->uuid , 'abbr' => 'RON',
                'country_id' => 144,
            ),

            array(
                'id' => 2422,
                'name' => 'Ujae',
                'uuid' => $faker->uuid , 'abbr' => 'UJA',
                'country_id' => 144,
            ),

            array(
                'id' => 2423,
                'name' => 'Ujelang',
                'uuid' => $faker->uuid , 'abbr' => 'UJL',
                'country_id' => 144,
            ),

            array(
                'id' => 2424,
                'name' => 'Utirik',
                'uuid' => $faker->uuid , 'abbr' => 'UTI',
                'country_id' => 144,
            ),

            array(
                'id' => 2425,
                'name' => 'Wotho',
                'uuid' => $faker->uuid , 'abbr' => 'WTH',
                'country_id' => 144,
            ),

            array(
                'id' => 2426,
                'name' => 'Wotje',
                'uuid' => $faker->uuid , 'abbr' => 'WTJ',
                'country_id' => 144,
            ),

            array(
                'id' => 2427,
                'name' => 'Aerodrom *',
                'uuid' => $faker->uuid , 'abbr' => 'AD',
                'country_id' => 145,
            ),

            array(
                'id' => 2428,
                'name' => 'Saraj *',
                'uuid' => $faker->uuid , 'abbr' => 'AJ',
                'country_id' => 145,
            ),

            array(
                'id' => 2429,
                'name' => 'Aracinovo',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 145,
            ),

            array(
                'id' => 2430,
                'name' => 'Kavadarci',
                'uuid' => $faker->uuid , 'abbr' => 'AV',
                'country_id' => 145,
            ),

            array(
                'id' => 2431,
                'name' => 'Bogdanci',
                'uuid' => $faker->uuid , 'abbr' => 'BG',
                'country_id' => 145,
            ),

            array(
                'id' => 2432,
                'name' => 'Brvenica',
                'uuid' => $faker->uuid , 'abbr' => 'BN',
                'country_id' => 145,
            ),

            array(
                'id' => 2433,
                'name' => 'Berovo',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 145,
            ),

            array(
                'id' => 2434,
                'name' => 'Bosilovo',
                'uuid' => $faker->uuid , 'abbr' => 'BS',
                'country_id' => 145,
            ),

            array(
                'id' => 2435,
                'name' => 'Butel *',
                'uuid' => $faker->uuid , 'abbr' => 'BU',
                'country_id' => 145,
            ),

            array(
                'id' => 2436,
                'name' => 'Caška',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 145,
            ),

            array(
                'id' => 2437,
                'name' => 'Centar *',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 145,
            ),

            array(
                'id' => 2438,
                'name' => 'Cešinovo-Obleševo',
                'uuid' => $faker->uuid , 'abbr' => 'CH',
                'country_id' => 145,
            ),

            array(
                'id' => 2439,
                'name' => 'Cair *',
                'uuid' => $faker->uuid , 'abbr' => 'CI',
                'country_id' => 145,
            ),

            array(
                'id' => 2440,
                'name' => 'Cucer Sandevo',
                'uuid' => $faker->uuid , 'abbr' => 'CS',
                'country_id' => 145,
            ),

            array(
                'id' => 2441,
                'name' => 'Centar Župa',
                'uuid' => $faker->uuid , 'abbr' => 'CZ',
                'country_id' => 145,
            ),

            array(
                'id' => 2442,
                'name' => 'Debarca',
                'uuid' => $faker->uuid , 'abbr' => 'DA',
                'country_id' => 145,
            ),

            array(
                'id' => 2443,
                'name' => 'Debar',
                'uuid' => $faker->uuid , 'abbr' => 'DB',
                'country_id' => 145,
            ),

            array(
                'id' => 2444,
                'name' => 'Dolneni',
                'uuid' => $faker->uuid , 'abbr' => 'DE',
                'country_id' => 145,
            ),

            array(
                'id' => 2445,
                'name' => 'Demir Kapija',
                'uuid' => $faker->uuid , 'abbr' => 'DK',
                'country_id' => 145,
            ),

            array(
                'id' => 2446,
                'name' => 'Delcevo',
                'uuid' => $faker->uuid , 'abbr' => 'DL',
                'country_id' => 145,
            ),

            array(
                'id' => 2447,
                'name' => 'Demir Hisar',
                'uuid' => $faker->uuid , 'abbr' => 'DM',
                'country_id' => 145,
            ),

            array(
                'id' => 2448,
                'name' => 'Drugovo',
                'uuid' => $faker->uuid , 'abbr' => 'DR',
                'country_id' => 145,
            ),

            array(
                'id' => 2449,
                'name' => 'Tetovo',
                'uuid' => $faker->uuid , 'abbr' => 'ET',
                'country_id' => 145,
            ),

            array(
                'id' => 2450,
                'name' => 'Gazi Baba *',
                'uuid' => $faker->uuid , 'abbr' => 'GB',
                'country_id' => 145,
            ),

            array(
                'id' => 2451,
                'name' => 'Gjorce Petrov *',
                'uuid' => $faker->uuid , 'abbr' => 'GP',
                'country_id' => 145,
            ),

            array(
                'id' => 2452,
                'name' => 'Gradsko',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 145,
            ),

            array(
                'id' => 2453,
                'name' => 'Gostivar',
                'uuid' => $faker->uuid , 'abbr' => 'GT',
                'country_id' => 145,
            ),

            array(
                'id' => 2454,
                'name' => 'Gevgelija',
                'uuid' => $faker->uuid , 'abbr' => 'GV',
                'country_id' => 145,
            ),

            array(
                'id' => 2455,
                'name' => 'Ilinden',
                'uuid' => $faker->uuid , 'abbr' => 'IL',
                'country_id' => 145,
            ),

            array(
                'id' => 2456,
                'name' => 'Jegunovce',
                'uuid' => $faker->uuid , 'abbr' => 'JG',
                'country_id' => 145,
            ),

            array(
                'id' => 2457,
                'name' => 'Karbinci',
                'uuid' => $faker->uuid , 'abbr' => 'KB',
                'country_id' => 145,
            ),

            array(
                'id' => 2458,
                'name' => 'Krivogaštani',
                'uuid' => $faker->uuid , 'abbr' => 'KG',
                'country_id' => 145,
            ),

            array(
                'id' => 2459,
                'name' => 'Kicevo',
                'uuid' => $faker->uuid , 'abbr' => 'KH',
                'country_id' => 145,
            ),

            array(
                'id' => 2460,
                'name' => 'Konce',
                'uuid' => $faker->uuid , 'abbr' => 'KN',
                'country_id' => 145,
            ),

            array(
                'id' => 2461,
                'name' => 'Kruševo',
                'uuid' => $faker->uuid , 'abbr' => 'KS',
                'country_id' => 145,
            ),

            array(
                'id' => 2462,
                'name' => 'Karpoš *',
                'uuid' => $faker->uuid , 'abbr' => 'KX',
                'country_id' => 145,
            ),

            array(
                'id' => 2463,
                'name' => 'Kratovo',
                'uuid' => $faker->uuid , 'abbr' => 'KY',
                'country_id' => 145,
            ),

            array(
                'id' => 2464,
                'name' => 'Kriva Palanka',
                'uuid' => $faker->uuid , 'abbr' => 'KZ',
                'country_id' => 145,
            ),

            array(
                'id' => 2465,
                'name' => 'Lipkovo',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 145,
            ),

            array(
                'id' => 2466,
                'name' => 'Lozovo',
                'uuid' => $faker->uuid , 'abbr' => 'LO',
                'country_id' => 145,
            ),

            array(
                'id' => 2467,
                'name' => 'Makedonski Brod',
                'uuid' => $faker->uuid , 'abbr' => 'MD',
                'country_id' => 145,
            ),

            array(
                'id' => 2468,
                'name' => 'Mogila',
                'uuid' => $faker->uuid , 'abbr' => 'MG',
                'country_id' => 145,
            ),

            array(
                'id' => 2469,
                'name' => 'Makedonska Kamenica',
                'uuid' => $faker->uuid , 'abbr' => 'MK',
                'country_id' => 145,
            ),

            array(
                'id' => 2470,
                'name' => 'Mavrovo-i-Rostuša',
                'uuid' => $faker->uuid , 'abbr' => 'MR',
                'country_id' => 145,
            ),

            array(
                'id' => 2471,
                'name' => 'Staro Nagoricane',
                'uuid' => $faker->uuid , 'abbr' => 'NA',
                'country_id' => 145,
            ),

            array(
                'id' => 2472,
                'name' => 'Negotino',
                'uuid' => $faker->uuid , 'abbr' => 'NG',
                'country_id' => 145,
            ),

            array(
                'id' => 2473,
                'name' => 'Vinica',
                'uuid' => $faker->uuid , 'abbr' => 'NI',
                'country_id' => 145,
            ),

            array(
                'id' => 2474,
                'name' => 'Novo Selo',
                'uuid' => $faker->uuid , 'abbr' => 'NS',
                'country_id' => 145,
            ),

            array(
                'id' => 2475,
                'name' => 'Novaci',
                'uuid' => $faker->uuid , 'abbr' => 'NV',
                'country_id' => 145,
            ),

            array(
                'id' => 2476,
                'name' => 'Kocani',
                'uuid' => $faker->uuid , 'abbr' => 'OC',
                'country_id' => 145,
            ),

            array(
                'id' => 2477,
                'name' => 'Ohrid',
                'uuid' => $faker->uuid , 'abbr' => 'OD',
                'country_id' => 145,
            ),

            array(
                'id' => 2478,
                'name' => 'Oslomej',
                'uuid' => $faker->uuid , 'abbr' => 'OS',
                'country_id' => 145,
            ),

            array(
                'id' => 2479,
                'name' => 'Petrovec',
                'uuid' => $faker->uuid , 'abbr' => 'PE',
                'country_id' => 145,
            ),

            array(
                'id' => 2480,
                'name' => 'Pehcevo',
                'uuid' => $faker->uuid , 'abbr' => 'PH',
                'country_id' => 145,
            ),

            array(
                'id' => 2481,
                'name' => 'Plasnica',
                'uuid' => $faker->uuid , 'abbr' => 'PN',
                'country_id' => 145,
            ),

            array(
                'id' => 2482,
                'name' => 'Prilep',
                'uuid' => $faker->uuid , 'abbr' => 'PP',
                'country_id' => 145,
            ),

            array(
                'id' => 2483,
                'name' => 'Probištip',
                'uuid' => $faker->uuid , 'abbr' => 'PT',
                'country_id' => 145,
            ),

            array(
                'id' => 2484,
                'name' => 'Resen',
                'uuid' => $faker->uuid , 'abbr' => 'RE',
                'country_id' => 145,
            ),

            array(
                'id' => 2485,
                'name' => 'Rosoman',
                'uuid' => $faker->uuid , 'abbr' => 'RM',
                'country_id' => 145,
            ),

            array(
                'id' => 2486,
                'name' => 'Rankovce',
                'uuid' => $faker->uuid , 'abbr' => 'RN',
                'country_id' => 145,
            ),

            array(
                'id' => 2487,
                'name' => 'Strumica',
                'uuid' => $faker->uuid , 'abbr' => 'RU',
                'country_id' => 145,
            ),

            array(
                'id' => 2488,
                'name' => 'Radoviš',
                'uuid' => $faker->uuid , 'abbr' => 'RV',
                'country_id' => 145,
            ),

            array(
                'id' => 2489,
                'name' => 'Dojran',
                'uuid' => $faker->uuid , 'abbr' => 'SD',
                'country_id' => 145,
            ),

            array(
                'id' => 2490,
                'name' => 'Sveti Nikole',
                'uuid' => $faker->uuid , 'abbr' => 'SL',
                'country_id' => 145,
            ),

            array(
                'id' => 2491,
                'name' => 'Šuto Orizari *',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 145,
            ),

            array(
                'id' => 2492,
                'name' => 'Sopište',
                'uuid' => $faker->uuid , 'abbr' => 'SS',
                'country_id' => 145,
            ),

            array(
                'id' => 2493,
                'name' => 'Štip',
                'uuid' => $faker->uuid , 'abbr' => 'ST',
                'country_id' => 145,
            ),

            array(
                'id' => 2494,
                'name' => 'Studenicani',
                'uuid' => $faker->uuid , 'abbr' => 'SU',
                'country_id' => 145,
            ),

            array(
                'id' => 2495,
                'name' => 'Bitola',
                'uuid' => $faker->uuid , 'abbr' => 'TL',
                'country_id' => 145,
            ),

            array(
                'id' => 2496,
                'name' => 'Tearce',
                'uuid' => $faker->uuid , 'abbr' => 'TR',
                'country_id' => 145,
            ),

            array(
                'id' => 2497,
                'name' => 'Struga',
                'uuid' => $faker->uuid , 'abbr' => 'UG',
                'country_id' => 145,
            ),

            array(
                'id' => 2498,
                'name' => 'Kumanovo',
                'uuid' => $faker->uuid , 'abbr' => 'UM',
                'country_id' => 145,
            ),

            array(
                'id' => 2499,
                'name' => 'Valandovo',
                'uuid' => $faker->uuid , 'abbr' => 'VA',
                'country_id' => 145,
            ),

            array(
                'id' => 2500,
                'name' => 'Vraneštica',
                'uuid' => $faker->uuid , 'abbr' => 'VC',
                'country_id' => 145,
            ),

            array(
                'id' => 2501,
                'name' => 'Kisela Voda *',
                'uuid' => $faker->uuid , 'abbr' => 'VD',
                'country_id' => 145,
            ),

            array(
                'id' => 2502,
                'name' => 'Veles',
                'uuid' => $faker->uuid , 'abbr' => 'VE',
                'country_id' => 145,
            ),

            array(
                'id' => 2503,
                'name' => 'Vrapcište',
                'uuid' => $faker->uuid , 'abbr' => 'VH',
                'country_id' => 145,
            ),

            array(
                'id' => 2504,
                'name' => 'Bogovinje',
                'uuid' => $faker->uuid , 'abbr' => 'VJ',
                'country_id' => 145,
            ),

            array(
                'id' => 2505,
                'name' => 'Vasilevo',
                'uuid' => $faker->uuid , 'abbr' => 'VL',
                'country_id' => 145,
            ),

            array(
                'id' => 2506,
                'name' => 'Vevcani',
                'uuid' => $faker->uuid , 'abbr' => 'VV',
                'country_id' => 145,
            ),

            array(
                'id' => 2507,
                'name' => 'Skopje',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 145,
            ),

            array(
                'id' => 2508,
                'name' => 'Zajas',
                'uuid' => $faker->uuid , 'abbr' => 'ZA',
                'country_id' => 145,
            ),

            array(
                'id' => 2509,
                'name' => 'Želino',
                'uuid' => $faker->uuid , 'abbr' => 'ZE',
                'country_id' => 145,
            ),

            array(
                'id' => 2510,
                'name' => 'Zelenikovo',
                'uuid' => $faker->uuid , 'abbr' => 'ZK',
                'country_id' => 145,
            ),

            array(
                'id' => 2511,
                'name' => 'Zrnovci',
                'uuid' => $faker->uuid , 'abbr' => 'ZR',
                'country_id' => 145,
            ),

            array(
                'id' => 2512,
                'name' => 'Kayes',
                'uuid' => $faker->uuid , 'abbr' => 1,
                'country_id' => 146,
            ),

            array(
                'id' => 2513,
                'name' => 'Koulikoro',
                'uuid' => $faker->uuid , 'abbr' => 2,
                'country_id' => 146,
            ),

            array(
                'id' => 2514,
                'name' => 'Sikasso',
                'uuid' => $faker->uuid , 'abbr' => 3,
                'country_id' => 146,
            ),

            array(
                'id' => 2515,
                'name' => 'Ségou',
                'uuid' => $faker->uuid , 'abbr' => 4,
                'country_id' => 146,
            ),

            array(
                'id' => 2516,
                'name' => 'Mopti',
                'uuid' => $faker->uuid , 'abbr' => 5,
                'country_id' => 146,
            ),

            array(
                'id' => 2517,
                'name' => 'Tombouctou',
                'uuid' => $faker->uuid , 'abbr' => 6,
                'country_id' => 146,
            ),

            array(
                'id' => 2518,
                'name' => 'Gao',
                'uuid' => $faker->uuid , 'abbr' => 7,
                'country_id' => 146,
            ),

            array(
                'id' => 2519,
                'name' => 'Kidal',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 146,
            ),

            array(
                'id' => 2520,
                'name' => 'Bamako',
                'uuid' => $faker->uuid , 'abbr' => 'BKO',
                'country_id' => 146,
            ),

            array(
                'id' => 2521,
                'name' => 'Sagaing',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 147,
            ),

            array(
                'id' => 2522,
                'name' => 'Bago',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 147,
            ),

            array(
                'id' => 2523,
                'name' => 'Magway',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 147,
            ),

            array(
                'id' => 2524,
                'name' => 'Mandalay',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 147,
            ),

            array(
                'id' => 2525,
                'name' => 'Tanintharyi',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 147,
            ),

            array(
                'id' => 2526,
                'name' => 'Yangon',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 147,
            ),

            array(
                'id' => 2527,
                'name' => 'Ayeyarwady',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 147,
            ),

            array(
                'id' => 2528,
                'name' => 'Kachin',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 147,
            ),

            array(
                'id' => 2529,
                'name' => 'Kayah',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 147,
            ),

            array(
                'id' => 2530,
                'name' => 'Kayin',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 147,
            ),

            array(
                'id' => 2531,
                'name' => 'Chin',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 147,
            ),

            array(
                'id' => 2532,
                'name' => 'Mon',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 147,
            ),

            array(
                'id' => 2533,
                'name' => 'Rakhine',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 147,
            ),

            array(
                'id' => 2534,
                'name' => 'Shan',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 147,
            ),

            array(
                'id' => 2535,
                'name' => 'Orhon',
                'uuid' => $faker->uuid , 'abbr' => 035,
                'country_id' => 148,
            ),

            array(
                'id' => 2536,
                'name' => 'Darhan uul',
                'uuid' => $faker->uuid , 'abbr' => 037,
                'country_id' => 148,
            ),

            array(
                'id' => 2537,
                'name' => 'Hentiy',
                'uuid' => $faker->uuid , 'abbr' =>39,
                'country_id' => 148,
            ),

            array(
                'id' => 2538,
                'name' => 'Hövsgöl',
                'uuid' => $faker->uuid , 'abbr' => 041,
                'country_id' => 148,
            ),

            array(
                'id' => 2539,
                'name' => 'Hovd',
                'uuid' => $faker->uuid , 'abbr' => 043,
                'country_id' => 148,
            ),

            array(
                'id' => 2540,
                'name' => 'Uvs',
                'uuid' => $faker->uuid , 'abbr' => 046,
                'country_id' => 148,
            ),

            array(
                'id' => 2541,
                'name' => 'Töv',
                'uuid' => $faker->uuid , 'abbr' => 047,
                'country_id' => 148,
            ),

            array(
                'id' => 2542,
                'name' => 'Selenge',
                'uuid' => $faker->uuid , 'abbr' =>49,
                'country_id' => 148,
            ),

            array(
                'id' => 2543,
                'name' => 'Sühbaatar',
                'uuid' => $faker->uuid , 'abbr' => 051,
                'country_id' => 148,
            ),

            array(
                'id' => 2544,
                'name' => 'Ömnögovi',
                'uuid' => $faker->uuid , 'abbr' => 053,
                'country_id' => 148,
            ),

            array(
                'id' => 2545,
                'name' => 'Övörhangay',
                'uuid' => $faker->uuid , 'abbr' => 055,
                'country_id' => 148,
            ),

            array(
                'id' => 2546,
                'name' => 'Dzavhan',
                'uuid' => $faker->uuid , 'abbr' => 057,
                'country_id' => 148,
            ),

            array(
                'id' => 2547,
                'name' => 'Dundgovi',
                'uuid' => $faker->uuid , 'abbr' =>59,
                'country_id' => 148,
            ),

            array(
                'id' => 2548,
                'name' => 'Dornod',
                'uuid' => $faker->uuid , 'abbr' => 061,
                'country_id' => 148,
            ),

            array(
                'id' => 2549,
                'name' => 'Dornogovi',
                'uuid' => $faker->uuid , 'abbr' => 063,
                'country_id' => 148,
            ),

            array(
                'id' => 2550,
                'name' => 'Govi-Sümber',
                'uuid' => $faker->uuid , 'abbr' => 064,
                'country_id' => 148,
            ),

            array(
                'id' => 2551,
                'name' => 'Govi-Altay',
                'uuid' => $faker->uuid , 'abbr' => 065,
                'country_id' => 148,
            ),

            array(
                'id' => 2552,
                'name' => 'Bulgan',
                'uuid' => $faker->uuid , 'abbr' => 067,
                'country_id' => 148,
            ),

            array(
                'id' => 2553,
                'name' => 'Bayanhongor',
                'uuid' => $faker->uuid , 'abbr' =>69,
                'country_id' => 148,
            ),

            array(
                'id' => 2554,
                'name' => 'Bayan-Ölgiy',
                'uuid' => $faker->uuid , 'abbr' => 071,
                'country_id' => 148,
            ),

            array(
                'id' => 2555,
                'name' => 'Arhangay',
                'uuid' => $faker->uuid , 'abbr' => 073,
                'country_id' => 148,
            ),

            array(
                'id' => 2556,
                'name' => 'Ulaanbaatar',
                'uuid' => $faker->uuid , 'abbr' => 1,
                'country_id' => 148,
            ),

            array(
                'id' => 2557,
                'name' => 'Hodh ech Chargui',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 152,
            ),

            array(
                'id' => 2558,
                'name' => 'Hodh el Gharbi',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 152,
            ),

            array(
                'id' => 2559,
                'name' => 'Assaba',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 152,
            ),

            array(
                'id' => 2560,
                'name' => 'Gorgol',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 152,
            ),

            array(
                'id' => 2561,
                'name' => 'Brakna',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 152,
            ),

            array(
                'id' => 2562,
                'name' => 'Trarza',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 152,
            ),

            array(
                'id' => 2563,
                'name' => 'Adrar',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 152,
            ),

            array(
                'id' => 2564,
                'name' => 'Dakhlet Nouâdhibou',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 152,
            ),

            array(
                'id' => 2565,
                'name' => 'Tagant',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 152,
            ),

            array(
                'id' => 2566,
                'name' => 'Guidimaka',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 152,
            ),

            array(
                'id' => 2567,
                'name' => 'Tiris Zemmour',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 152,
            ),

            array(
                'id' => 2568,
                'name' => 'Inchiri',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 152,
            ),

            array(
                'id' => 2569,
                'name' => 'Nouakchott',
                'uuid' => $faker->uuid , 'abbr' => 'NKC',
                'country_id' => 152,
            ),

            array(
                'id' => 2570,
                'name' => 'Attard',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 154,
            ),

            array(
                'id' => 2571,
                'name' => 'Balzan',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 154,
            ),

            array(
                'id' => 2572,
                'name' => 'Birgu',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 154,
            ),

            array(
                'id' => 2573,
                'name' => 'Birkirkara',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 154,
            ),

            array(
                'id' => 2574,
                'name' => 'Birżebbuġa',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 154,
            ),

            array(
                'id' => 2575,
                'name' => 'Bormla',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 154,
            ),

            array(
                'id' => 2576,
                'name' => 'Dingli',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 154,
            ),

            array(
                'id' => 2577,
                'name' => 'Fgura',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 154,
            ),

            array(
                'id' => 2578,
                'name' => 'Floriana',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 154,
            ),

            array(
                'id' => 2579,
                'name' => 'Fontana',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 154,
            ),

            array(
                'id' => 2580,
                'name' => 'Gudja',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 154,
            ),

            array(
                'id' => 2581,
                'name' => 'Gżira',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 154,
            ),

            array(
                'id' => 2582,
                'name' => 'Għajnsielem',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 154,
            ),

            array(
                'id' => 2583,
                'name' => 'Għarb',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 154,
            ),

            array(
                'id' => 2584,
                'name' => 'Għargħur',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 154,
            ),

            array(
                'id' => 2585,
                'name' => 'Għasri',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 154,
            ),

            array(
                'id' => 2586,
                'name' => 'Għaxaq',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 154,
            ),

            array(
                'id' => 2587,
                'name' => 'Ħamrun',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 154,
            ),

            array(
                'id' => 2588,
                'name' => 'Iklin',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 154,
            ),

            array(
                'id' => 2589,
                'name' => 'Isla',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 154,
            ),

            array(
                'id' => 2590,
                'name' => 'Kalkara',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 154,
            ),

            array(
                'id' => 2591,
                'name' => 'Kerċem',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 154,
            ),

            array(
                'id' => 2592,
                'name' => 'Kirkop',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 154,
            ),

            array(
                'id' => 2593,
                'name' => 'Lija',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 154,
            ),

            array(
                'id' => 2594,
                'name' => 'Luqa',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 154,
            ),

            array(
                'id' => 2595,
                'name' => 'Marsa',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 154,
            ),

            array(
                'id' => 2596,
                'name' => 'Marsaskala',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 154,
            ),

            array(
                'id' => 2597,
                'name' => 'Marsaxlokk',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 154,
            ),

            array(
                'id' => 2598,
                'name' => 'Mdina',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 154,
            ),

            array(
                'id' => 2599,
                'name' => 'Mellieħa',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 154,
            ),

            array(
                'id' => 2600,
                'name' => 'Mġarr',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 154,
            ),

            array(
                'id' => 2601,
                'name' => 'Mosta',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 154,
            ),

            array(
                'id' => 2602,
                'name' => 'Mqabba',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 154,
            ),

            array(
                'id' => 2603,
                'name' => 'Msida',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 154,
            ),

            array(
                'id' => 2604,
                'name' => 'Mtarfa',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 154,
            ),

            array(
                'id' => 2605,
                'name' => 'Munxar',
                'uuid' => $faker->uuid , 'abbr' => 36,
                'country_id' => 154,
            ),

            array(
                'id' => 2606,
                'name' => 'Nadur',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 154,
            ),

            array(
                'id' => 2607,
                'name' => 'Naxxar',
                'uuid' => $faker->uuid , 'abbr' => 38,
                'country_id' => 154,
            ),

            array(
                'id' => 2608,
                'name' => 'Paola',
                'uuid' => $faker->uuid , 'abbr' => 39,
                'country_id' => 154,
            ),

            array(
                'id' => 2609,
                'name' => 'Pembroke',
                'uuid' => $faker->uuid , 'abbr' => 40,
                'country_id' => 154,
            ),

            array(
                'id' => 2610,
                'name' => 'Pietà',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 154,
            ),

            array(
                'id' => 2611,
                'name' => 'Qala',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 154,
            ),

            array(
                'id' => 2612,
                'name' => 'Qormi',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 154,
            ),

            array(
                'id' => 2613,
                'name' => 'Qrendi',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 154,
            ),

            array(
                'id' => 2614,
                'name' => 'Rabat Gozo',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 154,
            ),

            array(
                'id' => 2615,
                'name' => 'Rabat Malta',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 154,
            ),

            array(
                'id' => 2616,
                'name' => 'Safi',
                'uuid' => $faker->uuid , 'abbr' => 47,
                'country_id' => 154,
            ),

            array(
                'id' => 2617,
                'name' => 'Saint Julian\'s',
                'uuid' => $faker->uuid , 'abbr' => 48,
                'country_id' => 154,
            ),

            array(
                'id' => 2618,
                'name' => 'Saint John',
                'uuid' => $faker->uuid , 'abbr' => 49,
                'country_id' => 154,
            ),

            array(
                'id' => 2619,
                'name' => 'Saint Lawrence',
                'uuid' => $faker->uuid , 'abbr' => 50,
                'country_id' => 154,
            ),

            array(
                'id' => 2620,
                'name' => 'Saint Paul\'s Bay',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 154,
            ),

            array(
                'id' => 2621,
                'name' => 'Sannat',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 154,
            ),

            array(
                'id' => 2622,
                'name' => 'Saint Lucia\'s',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 154,
            ),

            array(
                'id' => 2623,
                'name' => 'Santa Venera',
                'uuid' => $faker->uuid , 'abbr' => 54,
                'country_id' => 154,
            ),

            array(
                'id' => 2624,
                'name' => 'Siġġiewi',
                'uuid' => $faker->uuid , 'abbr' => 55,
                'country_id' => 154,
            ),

            array(
                'id' => 2625,
                'name' => 'Sliema',
                'uuid' => $faker->uuid , 'abbr' => 56,
                'country_id' => 154,
            ),

            array(
                'id' => 2626,
                'name' => 'Swieqi',
                'uuid' => $faker->uuid , 'abbr' => 57,
                'country_id' => 154,
            ),

            array(
                'id' => 2627,
                'name' => 'Ta\' Xbiex',
                'uuid' => $faker->uuid , 'abbr' => 58,
                'country_id' => 154,
            ),

            array(
                'id' => 2628,
                'name' => 'Tarxien',
                'uuid' => $faker->uuid , 'abbr' => 59,
                'country_id' => 154,
            ),

            array(
                'id' => 2629,
                'name' => 'Valletta',
                'uuid' => $faker->uuid , 'abbr' => 60,
                'country_id' => 154,
            ),

            array(
                'id' => 2630,
                'name' => 'Xagħra',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 154,
            ),

            array(
                'id' => 2631,
                'name' => 'Xewkija',
                'uuid' => $faker->uuid , 'abbr' => 62,
                'country_id' => 154,
            ),

            array(
                'id' => 2632,
                'name' => 'Xgħajra',
                'uuid' => $faker->uuid , 'abbr' => 63,
                'country_id' => 154,
            ),

            array(
                'id' => 2633,
                'name' => 'Żabbar',
                'uuid' => $faker->uuid , 'abbr' => 64,
                'country_id' => 154,
            ),

            array(
                'id' => 2634,
                'name' => 'Żebbuġ Gozo',
                'uuid' => $faker->uuid , 'abbr' => 65,
                'country_id' => 154,
            ),

            array(
                'id' => 2635,
                'name' => 'Żebbuġ Malta',
                'uuid' => $faker->uuid , 'abbr' => 66,
                'country_id' => 154,
            ),

            array(
                'id' => 2636,
                'name' => 'Żejtun',
                'uuid' => $faker->uuid , 'abbr' => 67,
                'country_id' => 154,
            ),

            array(
                'id' => 2637,
                'name' => 'Żurrieq',
                'uuid' => $faker->uuid , 'abbr' => 68,
                'country_id' => 154,
            ),

            array(
                'id' => 2638,
                'name' => 'Agalega Islands',
                'uuid' => $faker->uuid , 'abbr' => 'AG',
                'country_id' => 155,
            ),

            array(
                'id' => 2639,
                'name' => 'Black River',
                'uuid' => $faker->uuid , 'abbr' => 'BL',
                'country_id' => 155,
            ),

            array(
                'id' => 2640,
                'name' => 'Beau Bassin-Rose Hill',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 155,
            ),

            array(
                'id' => 2641,
                'name' => 'Cargados Carajos Shoals [Saint Brandon Islands]',
                'uuid' => $faker->uuid , 'abbr' => 'CC',
                'country_id' => 155,
            ),

            array(
                'id' => 2642,
                'name' => 'Curepipe',
                'uuid' => $faker->uuid , 'abbr' => 'CU',
                'country_id' => 155,
            ),

            array(
                'id' => 2643,
                'name' => 'Flacq',
                'uuid' => $faker->uuid , 'abbr' => 'FL',
                'country_id' => 155,
            ),

            array(
                'id' => 2644,
                'name' => 'Grand Port',
                'uuid' => $faker->uuid , 'abbr' => 'GP',
                'country_id' => 155,
            ),

            array(
                'id' => 2645,
                'name' => 'Moka',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 155,
            ),

            array(
                'id' => 2646,
                'name' => 'Pamplemousses',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 155,
            ),

            array(
                'id' => 2647,
                'name' => 'Port Louis City',
                'uuid' => $faker->uuid , 'abbr' => 'PL',
                'country_id' => 155,
            ),

            array(
                'id' => 2648,
                'name' => 'Port Louis District',
                'uuid' => $faker->uuid , 'abbr' => 'PU',
                'country_id' => 155,
            ),

            array(
                'id' => 2649,
                'name' => 'Plaines Wilhems',
                'uuid' => $faker->uuid , 'abbr' => 'PW',
                'country_id' => 155,
            ),

            array(
                'id' => 2650,
                'name' => 'Quatre Bornes',
                'uuid' => $faker->uuid , 'abbr' => 'QB',
                'country_id' => 155,
            ),

            array(
                'id' => 2651,
                'name' => 'Rodrigues Island',
                'uuid' => $faker->uuid , 'abbr' => 'RO',
                'country_id' => 155,
            ),

            array(
                'id' => 2652,
                'name' => 'Rivière du Rempart',
                'uuid' => $faker->uuid , 'abbr' => 'RR',
                'country_id' => 155,
            ),

            array(
                'id' => 2653,
                'name' => 'Savanne',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 155,
            ),

            array(
                'id' => 2654,
                'name' => 'Vacoas-Phoenix',
                'uuid' => $faker->uuid , 'abbr' => 'VP',
                'country_id' => 155,
            ),

            array(
                'id' => 2655,
                'name' => 'Seenu',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 156,
            ),

            array(
                'id' => 2656,
                'name' => 'Alif',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 156,
            ),

            array(
                'id' => 2657,
                'name' => 'Lhaviyani',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 156,
            ),

            array(
                'id' => 2658,
                'name' => 'Vaavu',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 156,
            ),

            array(
                'id' => 2659,
                'name' => 'Laamu',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 156,
            ),

            array(
                'id' => 2660,
                'name' => 'Haa Alif',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 156,
            ),

            array(
                'id' => 2661,
                'name' => 'Thaa',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 156,
            ),

            array(
                'id' => 2662,
                'name' => 'Meemu',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 156,
            ),

            array(
                'id' => 2663,
                'name' => 'Raa',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 156,
            ),

            array(
                'id' => 2664,
                'name' => 'Faafu',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 156,
            ),

            array(
                'id' => 2665,
                'name' => 'Dhaalu',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 156,
            ),

            array(
                'id' => 2666,
                'name' => 'Baa',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 156,
            ),

            array(
                'id' => 2667,
                'name' => 'Haa Dhaalu',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 156,
            ),

            array(
                'id' => 2668,
                'name' => 'Shaviyani',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 156,
            ),

            array(
                'id' => 2669,
                'name' => 'Noonu',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 156,
            ),

            array(
                'id' => 2670,
                'name' => 'Kaafu',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 156,
            ),

            array(
                'id' => 2671,
                'name' => 'Gaaf Alif',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 156,
            ),

            array(
                'id' => 2672,
                'name' => 'Gaafu Dhaalu',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 156,
            ),

            array(
                'id' => 2673,
                'name' => 'Gnaviyani',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 156,
            ),

            array(
                'id' => 2674,
                'name' => 'Male',
                'uuid' => $faker->uuid , 'abbr' => 'MLE',
                'country_id' => 156,
            ),

            array(
                'id' => 2675,
                'name' => 'Alif Dhaal',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 156,
            ),

            array(
                'id' => 2676,
                'name' => 'Balaka',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 157,
            ),

            array(
                'id' => 2677,
                'name' => 'Blantyre',
                'uuid' => $faker->uuid , 'abbr' => 'BL',
                'country_id' => 157,
            ),

            array(
                'id' => 2678,
                'name' => 'Chikwawa',
                'uuid' => $faker->uuid , 'abbr' => 'CK',
                'country_id' => 157,
            ),

            array(
                'id' => 2679,
                'name' => 'Chiradzulu',
                'uuid' => $faker->uuid , 'abbr' => 'CR',
                'country_id' => 157,
            ),

            array(
                'id' => 2680,
                'name' => 'Chitipa',
                'uuid' => $faker->uuid , 'abbr' => 'CT',
                'country_id' => 157,
            ),

            array(
                'id' => 2681,
                'name' => 'Dedza',
                'uuid' => $faker->uuid , 'abbr' => 'DE',
                'country_id' => 157,
            ),

            array(
                'id' => 2682,
                'name' => 'Dowa',
                'uuid' => $faker->uuid , 'abbr' => 'DO',
                'country_id' => 157,
            ),

            array(
                'id' => 2683,
                'name' => 'Karonga',
                'uuid' => $faker->uuid , 'abbr' => 'KR',
                'country_id' => 157,
            ),

            array(
                'id' => 2684,
                'name' => 'Kasungu',
                'uuid' => $faker->uuid , 'abbr' => 'KS',
                'country_id' => 157,
            ),

            array(
                'id' => 2685,
                'name' => 'Lilongwe',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 157,
            ),

            array(
                'id' => 2686,
                'name' => 'Likoma Island',
                'uuid' => $faker->uuid , 'abbr' => 'LK',
                'country_id' => 157,
            ),

            array(
                'id' => 2687,
                'name' => 'Mchinji',
                'uuid' => $faker->uuid , 'abbr' => 'MC',
                'country_id' => 157,
            ),

            array(
                'id' => 2688,
                'name' => 'Mangochi',
                'uuid' => $faker->uuid , 'abbr' => 'MG',
                'country_id' => 157,
            ),

            array(
                'id' => 2689,
                'name' => 'Machinga',
                'uuid' => $faker->uuid , 'abbr' => 'MH',
                'country_id' => 157,
            ),

            array(
                'id' => 2690,
                'name' => 'Mulanje',
                'uuid' => $faker->uuid , 'abbr' => 'MU',
                'country_id' => 157,
            ),

            array(
                'id' => 2691,
                'name' => 'Mwanza',
                'uuid' => $faker->uuid , 'abbr' => 'MW',
                'country_id' => 157,
            ),

            array(
                'id' => 2692,
                'name' => 'Mzimba',
                'uuid' => $faker->uuid , 'abbr' => 'MZ',
                'country_id' => 157,
            ),

            array(
                'id' => 2693,
                'name' => 'Nkhata Bay',
                'uuid' => $faker->uuid , 'abbr' => 'NB',
                'country_id' => 157,
            ),

            array(
                'id' => 2694,
                'name' => 'Ntchisi',
                'uuid' => $faker->uuid , 'abbr' => 'NI',
                'country_id' => 157,
            ),

            array(
                'id' => 2695,
                'name' => 'Nkhotakota',
                'uuid' => $faker->uuid , 'abbr' => 'NK',
                'country_id' => 157,
            ),

            array(
                'id' => 2696,
                'name' => 'Nsanje',
                'uuid' => $faker->uuid , 'abbr' => 'NS',
                'country_id' => 157,
            ),

            array(
                'id' => 2697,
                'name' => 'Ntcheu',
                'uuid' => $faker->uuid , 'abbr' => 'NU',
                'country_id' => 157,
            ),

            array(
                'id' => 2698,
                'name' => 'Phalombe',
                'uuid' => $faker->uuid , 'abbr' => 'PH',
                'country_id' => 157,
            ),

            array(
                'id' => 2699,
                'name' => 'Rumphi',
                'uuid' => $faker->uuid , 'abbr' => 'RU',
                'country_id' => 157,
            ),

            array(
                'id' => 2700,
                'name' => 'Salima',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 157,
            ),

            array(
                'id' => 2701,
                'name' => 'Thyolo',
                'uuid' => $faker->uuid , 'abbr' => 'TH',
                'country_id' => 157,
            ),

            array(
                'id' => 2702,
                'name' => 'Zomba',
                'uuid' => $faker->uuid , 'abbr' => 'ZO',
                'country_id' => 157,
            ),

            array(
                'id' => 2703,
                'name' => 'Aguascalientes',
                'uuid' => $faker->uuid , 'abbr' => 'AGU',
                'country_id' => 158,
            ),

            array(
                'id' => 2704,
                'name' => 'Baja California',
                'uuid' => $faker->uuid , 'abbr' => 'BCN',
                'country_id' => 158,
            ),

            array(
                'id' => 2705,
                'name' => 'Baja California Sur',
                'uuid' => $faker->uuid , 'abbr' => 'BCS',
                'country_id' => 158,
            ),

            array(
                'id' => 2706,
                'name' => 'Campeche',
                'uuid' => $faker->uuid , 'abbr' => 'CAM',
                'country_id' => 158,
            ),

            array(
                'id' => 2707,
                'name' => 'Chihuahua',
                'uuid' => $faker->uuid , 'abbr' => 'CHH',
                'country_id' => 158,
            ),

            array(
                'id' => 2708,
                'name' => 'Chiapas',
                'uuid' => $faker->uuid , 'abbr' => 'CHP',
                'country_id' => 158,
            ),

            array(
                'id' => 2709,
                'name' => 'Coahuila',
                'uuid' => $faker->uuid , 'abbr' => 'COA',
                'country_id' => 158,
            ),

            array(
                'id' => 2710,
                'name' => 'Colima',
                'uuid' => $faker->uuid , 'abbr' => 'COL',
                'country_id' => 158,
            ),

            array(
                'id' => 2711,
                'name' => 'Distrito Federal',
                'uuid' => $faker->uuid , 'abbr' => 'DIF',
                'country_id' => 158,
            ),

            array(
                'id' => 2712,
                'name' => 'Durango',
                'uuid' => $faker->uuid , 'abbr' => 'DUR',
                'country_id' => 158,
            ),

            array(
                'id' => 2713,
                'name' => 'Guerrero',
                'uuid' => $faker->uuid , 'abbr' => 'GRO',
                'country_id' => 158,
            ),

            array(
                'id' => 2714,
                'name' => 'Guanajuato',
                'uuid' => $faker->uuid , 'abbr' => 'GUA',
                'country_id' => 158,
            ),

            array(
                'id' => 2715,
                'name' => 'Hidalgo',
                'uuid' => $faker->uuid , 'abbr' => 'HID',
                'country_id' => 158,
            ),

            array(
                'id' => 2716,
                'name' => 'Jalisco',
                'uuid' => $faker->uuid , 'abbr' => 'JAL',
                'country_id' => 158,
            ),

            array(
                'id' => 2717,
                'name' => 'México',
                'uuid' => $faker->uuid , 'abbr' => 'MEX',
                'country_id' => 158,
            ),

            array(
                'id' => 2718,
                'name' => 'Michoacán',
                'uuid' => $faker->uuid , 'abbr' => 'MIC',
                'country_id' => 158,
            ),

            array(
                'id' => 2719,
                'name' => 'Morelos',
                'uuid' => $faker->uuid , 'abbr' => 'MOR',
                'country_id' => 158,
            ),

            array(
                'id' => 2720,
                'name' => 'Nayarit',
                'uuid' => $faker->uuid , 'abbr' => 'NAY',
                'country_id' => 158,
            ),

            array(
                'id' => 2721,
                'name' => 'Nuevo León',
                'uuid' => $faker->uuid , 'abbr' => 'NLE',
                'country_id' => 158,
            ),

            array(
                'id' => 2722,
                'name' => 'Oaxaca',
                'uuid' => $faker->uuid , 'abbr' => 'OAX',
                'country_id' => 158,
            ),

            array(
                'id' => 2723,
                'name' => 'Puebla',
                'uuid' => $faker->uuid , 'abbr' => 'PUE',
                'country_id' => 158,
            ),

            array(
                'id' => 2724,
                'name' => 'Querétaro',
                'uuid' => $faker->uuid , 'abbr' => 'QUE',
                'country_id' => 158,
            ),

            array(
                'id' => 2725,
                'name' => 'Quintana Roo',
                'uuid' => $faker->uuid , 'abbr' => 'ROO',
                'country_id' => 158,
            ),

            array(
                'id' => 2726,
                'name' => 'Sinaloa',
                'uuid' => $faker->uuid , 'abbr' => 'SIN',
                'country_id' => 158,
            ),

            array(
                'id' => 2727,
                'name' => 'San Luis Potosí',
                'uuid' => $faker->uuid , 'abbr' => 'SLP',
                'country_id' => 158,
            ),

            array(
                'id' => 2728,
                'name' => 'Sonora',
                'uuid' => $faker->uuid , 'abbr' => 'SON',
                'country_id' => 158,
            ),

            array(
                'id' => 2729,
                'name' => 'Tabasco',
                'uuid' => $faker->uuid , 'abbr' => 'TAB',
                'country_id' => 158,
            ),

            array(
                'id' => 2730,
                'name' => 'Tamaulipas',
                'uuid' => $faker->uuid , 'abbr' => 'TAM',
                'country_id' => 158,
            ),

            array(
                'id' => 2731,
                'name' => 'Tlaxcala',
                'uuid' => $faker->uuid , 'abbr' => 'TLA',
                'country_id' => 158,
            ),

            array(
                'id' => 2732,
                'name' => 'Veracruz',
                'uuid' => $faker->uuid , 'abbr' => 'VER',
                'country_id' => 158,
            ),

            array(
                'id' => 2733,
                'name' => 'Yucatán',
                'uuid' => $faker->uuid , 'abbr' => 'YUC',
                'country_id' => 158,
            ),

            array(
                'id' => 2734,
                'name' => 'Zacatecas',
                'uuid' => $faker->uuid , 'abbr' => 'ZAC',
                'country_id' => 158,
            ),

            array(
                'id' => 2735,
                'name' => 'Johor',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 159,
            ),

            array(
                'id' => 2736,
                'name' => 'Kedah',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 159,
            ),

            array(
                'id' => 2737,
                'name' => 'Kelantan',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 159,
            ),

            array(
                'id' => 2738,
                'name' => 'Melaka',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 159,
            ),

            array(
                'id' => 2739,
                'name' => 'Negeri Sembilan',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 159,
            ),

            array(
                'id' => 2740,
                'name' => 'Pahang',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 159,
            ),

            array(
                'id' => 2741,
                'name' => 'Pulau Pinang',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 159,
            ),

            array(
                'id' => 2742,
                'name' => 'Perak',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 159,
            ),

            array(
                'id' => 2743,
                'name' => 'Perlis',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 159,
            ),

            array(
                'id' => 2744,
                'name' => 'Selangor',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 159,
            ),

            array(
                'id' => 2745,
                'name' => 'Terengganu',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 159,
            ),

            array(
                'id' => 2746,
                'name' => 'Sabah',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 159,
            ),

            array(
                'id' => 2747,
                'name' => 'Sarawak',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 159,
            ),

            array(
                'id' => 2748,
                'name' => 'Wilayah Persekutuan Kuala Lumpur',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 159,
            ),

            array(
                'id' => 2749,
                'name' => 'Wilayah Persekutuan Labuan',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 159,
            ),

            array(
                'id' => 2750,
                'name' => 'Wilayah Persekutuan Putrajaya',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 159,
            ),

            array(
                'id' => 2751,
                'name' => 'Niassa',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 160,
            ),

            array(
                'id' => 2752,
                'name' => 'Manica',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 160,
            ),

            array(
                'id' => 2753,
                'name' => 'Gaza',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 160,
            ),

            array(
                'id' => 2754,
                'name' => 'Inhambane',
                'uuid' => $faker->uuid , 'abbr' => 'I',
                'country_id' => 160,
            ),

            array(
                'id' => 2755,
                'name' => 'Maputo',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 160,
            ),

            array(
                'id' => 2756,
                'name' => 'Maputo City',
                'uuid' => $faker->uuid , 'abbr' => 'MPM',
                'country_id' => 160,
            ),

            array(
                'id' => 2757,
                'name' => 'Nampula',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 160,
            ),

            array(
                'id' => 2758,
                'name' => 'Cabo Delgado',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 160,
            ),

            array(
                'id' => 2759,
                'name' => 'Zambézia',
                'uuid' => $faker->uuid , 'abbr' => 'Q',
                'country_id' => 160,
            ),

            array(
                'id' => 2760,
                'name' => 'Sofala',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 160,
            ),

            array(
                'id' => 2761,
                'name' => 'Tete',
                'uuid' => $faker->uuid , 'abbr' => 'T',
                'country_id' => 160,
            ),

            array(
                'id' => 2762,
                'name' => 'Zambezi',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 161,
            ),

            array(
                'id' => 2763,
                'name' => 'Erongo',
                'uuid' => $faker->uuid , 'abbr' => 'ER',
                'country_id' => 161,
            ),

            array(
                'id' => 2764,
                'name' => 'Hardap',
                'uuid' => $faker->uuid , 'abbr' => 'HA',
                'country_id' => 161,
            ),

            array(
                'id' => 2765,
                'name' => 'Karas',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 161,
            ),

            array(
                'id' => 2766,
                'name' => 'Kavango East',
                'uuid' => $faker->uuid , 'abbr' => 'KE',
                'country_id' => 161,
            ),

            array(
                'id' => 2767,
                'name' => 'Kavango West',
                'uuid' => $faker->uuid , 'abbr' => 'KW',
                'country_id' => 161,
            ),

            array(
                'id' => 2768,
                'name' => 'Khomas',
                'uuid' => $faker->uuid , 'abbr' => 'KH',
                'country_id' => 161,
            ),

            array(
                'id' => 2769,
                'name' => 'Kunene',
                'uuid' => $faker->uuid , 'abbr' => 'KU',
                'country_id' => 161,
            ),

            array(
                'id' => 2770,
                'name' => 'Otjozondjupa',
                'uuid' => $faker->uuid , 'abbr' => 'OD',
                'country_id' => 161,
            ),

            array(
                'id' => 2771,
                'name' => 'Omaheke',
                'uuid' => $faker->uuid , 'abbr' => 'OH',
                'country_id' => 161,
            ),

            array(
                'id' => 2772,
                'name' => 'Oshana',
                'uuid' => $faker->uuid , 'abbr' => 'ON',
                'country_id' => 161,
            ),

            array(
                'id' => 2773,
                'name' => 'Omusati',
                'uuid' => $faker->uuid , 'abbr' => 'OS',
                'country_id' => 161,
            ),

            array(
                'id' => 2774,
                'name' => 'Oshikoto',
                'uuid' => $faker->uuid , 'abbr' => 'OT',
                'country_id' => 161,
            ),

            array(
                'id' => 2775,
                'name' => 'Ohangwena',
                'uuid' => $faker->uuid , 'abbr' => 'OW',
                'country_id' => 161,
            ),

            array(
                'id' => 2776,
                'name' => 'Agadez',
                'uuid' => $faker->uuid , 'abbr' => 1,
                'country_id' => 163,
            ),

            array(
                'id' => 2777,
                'name' => 'Diffa',
                'uuid' => $faker->uuid , 'abbr' => 2,
                'country_id' => 163,
            ),

            array(
                'id' => 2778,
                'name' => 'Dosso',
                'uuid' => $faker->uuid , 'abbr' => 3,
                'country_id' => 163,
            ),

            array(
                'id' => 2779,
                'name' => 'Maradi',
                'uuid' => $faker->uuid , 'abbr' => 4,
                'country_id' => 163,
            ),

            array(
                'id' => 2780,
                'name' => 'Tahoua',
                'uuid' => $faker->uuid , 'abbr' => 5,
                'country_id' => 163,
            ),

            array(
                'id' => 2781,
                'name' => 'Tillabéri',
                'uuid' => $faker->uuid , 'abbr' => 6,
                'country_id' => 163,
            ),

            array(
                'id' => 2782,
                'name' => 'Zinder',
                'uuid' => $faker->uuid , 'abbr' => 7,
                'country_id' => 163,
            ),

            array(
                'id' => 2783,
                'name' => 'Niamey',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 163,
            ),

            array(
                'id' => 2784,
                'name' => 'Abia',
                'uuid' => $faker->uuid , 'abbr' => 'AB',
                'country_id' => 165,
            ),

            array(
                'id' => 2785,
                'name' => 'Adamawa',
                'uuid' => $faker->uuid , 'abbr' => 'AD',
                'country_id' => 165,
            ),

            array(
                'id' => 2786,
                'name' => 'Akwa Ibom',
                'uuid' => $faker->uuid , 'abbr' => 'AK',
                'country_id' => 165,
            ),

            array(
                'id' => 2787,
                'name' => 'Anambra',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 165,
            ),

            array(
                'id' => 2788,
                'name' => 'Bauchi',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 165,
            ),

            array(
                'id' => 2789,
                'name' => 'Benue',
                'uuid' => $faker->uuid , 'abbr' => 'BE',
                'country_id' => 165,
            ),

            array(
                'id' => 2790,
                'name' => 'Borno',
                'uuid' => $faker->uuid , 'abbr' => 'BO',
                'country_id' => 165,
            ),

            array(
                'id' => 2791,
                'name' => 'Bayelsa',
                'uuid' => $faker->uuid , 'abbr' => 'BY',
                'country_id' => 165,
            ),

            array(
                'id' => 2792,
                'name' => 'Cross River',
                'uuid' => $faker->uuid , 'abbr' => 'CR',
                'country_id' => 165,
            ),

            array(
                'id' => 2793,
                'name' => 'Delta',
                'uuid' => $faker->uuid , 'abbr' => 'DE',
                'country_id' => 165,
            ),

            array(
                'id' => 2794,
                'name' => 'Ebonyi',
                'uuid' => $faker->uuid , 'abbr' => 'EB',
                'country_id' => 165,
            ),

            array(
                'id' => 2795,
                'name' => 'Edo',
                'uuid' => $faker->uuid , 'abbr' => 'ED',
                'country_id' => 165,
            ),

            array(
                'id' => 2796,
                'name' => 'Ekiti',
                'uuid' => $faker->uuid , 'abbr' => 'EK',
                'country_id' => 165,
            ),

            array(
                'id' => 2797,
                'name' => 'Enugu',
                'uuid' => $faker->uuid , 'abbr' => 'EN',
                'country_id' => 165,
            ),

            array(
                'id' => 2798,
                'name' => 'Abuja Capital Territory',
                'uuid' => $faker->uuid , 'abbr' => 'FC',
                'country_id' => 165,
            ),

            array(
                'id' => 2799,
                'name' => 'Gombe',
                'uuid' => $faker->uuid , 'abbr' => 'GO',
                'country_id' => 165,
            ),

            array(
                'id' => 2800,
                'name' => 'Imo',
                'uuid' => $faker->uuid , 'abbr' => 'IM',
                'country_id' => 165,
            ),

            array(
                'id' => 2801,
                'name' => 'Jigawa',
                'uuid' => $faker->uuid , 'abbr' => 'JI',
                'country_id' => 165,
            ),

            array(
                'id' => 2802,
                'name' => 'Kaduna',
                'uuid' => $faker->uuid , 'abbr' => 'KD',
                'country_id' => 165,
            ),

            array(
                'id' => 2803,
                'name' => 'Kebbi',
                'uuid' => $faker->uuid , 'abbr' => 'KE',
                'country_id' => 165,
            ),

            array(
                'id' => 2804,
                'name' => 'Kano',
                'uuid' => $faker->uuid , 'abbr' => 'KN',
                'country_id' => 165,
            ),

            array(
                'id' => 2805,
                'name' => 'Kogi',
                'uuid' => $faker->uuid , 'abbr' => 'KO',
                'country_id' => 165,
            ),

            array(
                'id' => 2806,
                'name' => 'Katsina',
                'uuid' => $faker->uuid , 'abbr' => 'KT',
                'country_id' => 165,
            ),

            array(
                'id' => 2807,
                'name' => 'Kwara',
                'uuid' => $faker->uuid , 'abbr' => 'KW',
                'country_id' => 165,
            ),

            array(
                'id' => 2808,
                'name' => 'Lagos',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 165,
            ),

            array(
                'id' => 2809,
                'name' => 'Nassarawa',
                'uuid' => $faker->uuid , 'abbr' => 'NA',
                'country_id' => 165,
            ),

            array(
                'id' => 2810,
                'name' => 'Niger',
                'uuid' => $faker->uuid , 'abbr' => 'NI',
                'country_id' => 165,
            ),

            array(
                'id' => 2811,
                'name' => 'Ogun',
                'uuid' => $faker->uuid , 'abbr' => 'OG',
                'country_id' => 165,
            ),

            array(
                'id' => 2812,
                'name' => 'Ondo',
                'uuid' => $faker->uuid , 'abbr' => 'ON',
                'country_id' => 165,
            ),

            array(
                'id' => 2813,
                'name' => 'Osun',
                'uuid' => $faker->uuid , 'abbr' => 'OS',
                'country_id' => 165,
            ),

            array(
                'id' => 2814,
                'name' => 'Oyo',
                'uuid' => $faker->uuid , 'abbr' => 'OY',
                'country_id' => 165,
            ),

            array(
                'id' => 2815,
                'name' => 'Plateau',
                'uuid' => $faker->uuid , 'abbr' => 'PL',
                'country_id' => 165,
            ),

            array(
                'id' => 2816,
                'name' => 'Rivers',
                'uuid' => $faker->uuid , 'abbr' => 'RI',
                'country_id' => 165,
            ),

            array(
                'id' => 2817,
                'name' => 'Sokoto',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 165,
            ),

            array(
                'id' => 2818,
                'name' => 'Taraba',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 165,
            ),

            array(
                'id' => 2819,
                'name' => 'Yobe',
                'uuid' => $faker->uuid , 'abbr' => 'YO',
                'country_id' => 165,
            ),

            array(
                'id' => 2820,
                'name' => 'Zamfara',
                'uuid' => $faker->uuid , 'abbr' => 'ZA',
                'country_id' => 165,
            ),

            array(
                'id' => 2821,
                'name' => 'Atlántico Norte*',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 166,
            ),

            array(
                'id' => 2822,
                'name' => 'Atlántico Sur*',
                'uuid' => $faker->uuid , 'abbr' => 'AS',
                'country_id' => 166,
            ),

            array(
                'id' => 2823,
                'name' => 'Boaco',
                'uuid' => $faker->uuid , 'abbr' => 'BO',
                'country_id' => 166,
            ),

            array(
                'id' => 2824,
                'name' => 'Carazo',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 166,
            ),

            array(
                'id' => 2825,
                'name' => 'Chinandega',
                'uuid' => $faker->uuid , 'abbr' => 'CI',
                'country_id' => 166,
            ),

            array(
                'id' => 2826,
                'name' => 'Chontales',
                'uuid' => $faker->uuid , 'abbr' => 'CO',
                'country_id' => 166,
            ),

            array(
                'id' => 2827,
                'name' => 'Estelí',
                'uuid' => $faker->uuid , 'abbr' => 'ES',
                'country_id' => 166,
            ),

            array(
                'id' => 2828,
                'name' => 'Granada',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 166,
            ),

            array(
                'id' => 2829,
                'name' => 'Jinotega',
                'uuid' => $faker->uuid , 'abbr' => 'JI',
                'country_id' => 166,
            ),

            array(
                'id' => 2830,
                'name' => 'León',
                'uuid' => $faker->uuid , 'abbr' => 'LE',
                'country_id' => 166,
            ),

            array(
                'id' => 2831,
                'name' => 'Madriz',
                'uuid' => $faker->uuid , 'abbr' => 'MD',
                'country_id' => 166,
            ),

            array(
                'id' => 2832,
                'name' => 'Managua',
                'uuid' => $faker->uuid , 'abbr' => 'MN',
                'country_id' => 166,
            ),

            array(
                'id' => 2833,
                'name' => 'Masaya',
                'uuid' => $faker->uuid , 'abbr' => 'MS',
                'country_id' => 166,
            ),

            array(
                'id' => 2834,
                'name' => 'Matagalpa',
                'uuid' => $faker->uuid , 'abbr' => 'MT',
                'country_id' => 166,
            ),

            array(
                'id' => 2835,
                'name' => 'Nueva Segovia',
                'uuid' => $faker->uuid , 'abbr' => 'NS',
                'country_id' => 166,
            ),

            array(
                'id' => 2836,
                'name' => 'Rivas',
                'uuid' => $faker->uuid , 'abbr' => 'RI',
                'country_id' => 166,
            ),

            array(
                'id' => 2837,
                'name' => 'Río San Juan',
                'uuid' => $faker->uuid , 'abbr' => 'SJ',
                'country_id' => 166,
            ),

            array(
                'id' => 2838,
                'name' => 'Drenthe',
                'uuid' => $faker->uuid , 'abbr' => 'DR',
                'country_id' => 167,
            ),

            array(
                'id' => 2839,
                'name' => 'Flevoland',
                'uuid' => $faker->uuid , 'abbr' => 'FL',
                'country_id' => 167,
            ),

            array(
                'id' => 2840,
                'name' => 'Friesland',
                'uuid' => $faker->uuid , 'abbr' => 'FR',
                'country_id' => 167,
            ),

            array(
                'id' => 2841,
                'name' => 'Gelderland',
                'uuid' => $faker->uuid , 'abbr' => 'GE',
                'country_id' => 167,
            ),

            array(
                'id' => 2842,
                'name' => 'Groningen',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 167,
            ),

            array(
                'id' => 2843,
                'name' => 'Limburg',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 167,
            ),

            array(
                'id' => 2844,
                'name' => 'Noord-Brabant',
                'uuid' => $faker->uuid , 'abbr' => 'NB',
                'country_id' => 167,
            ),

            array(
                'id' => 2845,
                'name' => 'Noord-Holland',
                'uuid' => $faker->uuid , 'abbr' => 'NH',
                'country_id' => 167,
            ),

            array(
                'id' => 2846,
                'name' => 'Overijssel',
                'uuid' => $faker->uuid , 'abbr' => 'OV',
                'country_id' => 167,
            ),

            array(
                'id' => 2847,
                'name' => 'Utrecht',
                'uuid' => $faker->uuid , 'abbr' => 'UT',
                'country_id' => 167,
            ),

            array(
                'id' => 2848,
                'name' => 'Zeeland',
                'uuid' => $faker->uuid , 'abbr' => 'ZE',
                'country_id' => 167,
            ),

            array(
                'id' => 2849,
                'name' => 'Zuid-Holland',
                'uuid' => $faker->uuid , 'abbr' => 'ZH',
                'country_id' => 167,
            ),

            array(
                'id' => 2850,
                'name' => 'Østfold',
                'uuid' => $faker->uuid , 'abbr' => 'NO-01',
                'country_id' => 168,
            ),

            array(
                'id' => 2851,
                'name' => 'Akershus',
                'uuid' => $faker->uuid , 'abbr' => 'NO-02',
                'country_id' => 168,
            ),

            array(
                'id' => 2852,
                'name' => 'Oslo',
                'uuid' => $faker->uuid , 'abbr' => 'NO-03',
                'country_id' => 168,
            ),

            array(
                'id' => 2853,
                'name' => 'Hedmark',
                'uuid' => $faker->uuid , 'abbr' => 'NO-04',
                'country_id' => 168,
            ),

            array(
                'id' => 2854,
                'name' => 'Oppland',
                'uuid' => $faker->uuid , 'abbr' => 'NO-05',
                'country_id' => 168,
            ),

            array(
                'id' => 2855,
                'name' => 'Buskerud',
                'uuid' => $faker->uuid , 'abbr' => 'NO-06',
                'country_id' => 168,
            ),

            array(
                'id' => 2856,
                'name' => 'Vestfold',
                'uuid' => $faker->uuid , 'abbr' => 'NO-07',
                'country_id' => 168,
            ),

            array(
                'id' => 2857,
                'name' => 'Telemark',
                'uuid' => $faker->uuid , 'abbr' => 'NO-08',
                'country_id' => 168,
            ),

            array(
                'id' => 2858,
                'name' => 'Aust-Agder',
                'uuid' => $faker->uuid , 'abbr' => 'NO-09',
                'country_id' => 168,
            ),

            array(
                'id' => 2859,
                'name' => 'Vest-Agder',
                'uuid' => $faker->uuid , 'abbr' => 'NO-10',
                'country_id' => 168,
            ),

            array(
                'id' => 2860,
                'name' => 'Rogaland',
                'uuid' => $faker->uuid , 'abbr' => 'NO-11',
                'country_id' => 168,
            ),

            array(
                'id' => 2861,
                'name' => 'Hordaland',
                'uuid' => $faker->uuid , 'abbr' => 'NO-12',
                'country_id' => 168,
            ),

            array(
                'id' => 2862,
                'name' => 'Sogn og Fjordane',
                'uuid' => $faker->uuid , 'abbr' => 'NO-14',
                'country_id' => 168,
            ),

            array(
                'id' => 2863,
                'name' => 'Møre og Romsdal',
                'uuid' => $faker->uuid , 'abbr' => 'NO-15',
                'country_id' => 168,
            ),

            array(
                'id' => 2864,
                'name' => 'Sør-Trøndelag',
                'uuid' => $faker->uuid , 'abbr' => 'NO-16',
                'country_id' => 168,
            ),

            array(
                'id' => 2865,
                'name' => 'Nord-Trøndelag',
                'uuid' => $faker->uuid , 'abbr' => 'NO-17',
                'country_id' => 168,
            ),

            array(
                'id' => 2866,
                'name' => 'Nordland',
                'uuid' => $faker->uuid , 'abbr' => 'NO-18',
                'country_id' => 168,
            ),

            array(
                'id' => 2867,
                'name' => 'Troms',
                'uuid' => $faker->uuid , 'abbr' => 'NO-19',
                'country_id' => 168,
            ),

            array(
                'id' => 2868,
                'name' => 'Finnmark',
                'uuid' => $faker->uuid , 'abbr' => 'NO-20',
                'country_id' => 168,
            ),

            array(
                'id' => 2869,
                'name' => 'Svalbard (Arctic Region) (See also country code SJ)',
                'uuid' => $faker->uuid , 'abbr' => 'NO-21',
                'country_id' => 168,
            ),

            array(
                'id' => 2870,
                'name' => 'Jan Mayen (Arctic Region) (See also country code SJ)',
                'uuid' => $faker->uuid , 'abbr' => 'NO-22',
                'country_id' => 168,
            ),

            array(
                'id' => 2871,
                'name' => 'Bagmati',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 169,
            ),

            array(
                'id' => 2872,
                'name' => 'Bheri',
                'uuid' => $faker->uuid , 'abbr' => 'BH',
                'country_id' => 169,
            ),

            array(
                'id' => 2873,
                'name' => 'Dhawalagiri',
                'uuid' => $faker->uuid , 'abbr' => 'DH',
                'country_id' => 169,
            ),

            array(
                'id' => 2874,
                'name' => 'Gandaki',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 169,
            ),

            array(
                'id' => 2875,
                'name' => 'Janakpur',
                'uuid' => $faker->uuid , 'abbr' => 'JA',
                'country_id' => 169,
            ),

            array(
                'id' => 2876,
                'name' => 'Karnali',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 169,
            ),

            array(
                'id' => 2877,
                'name' => 'Kosi [Koshi]',
                'uuid' => $faker->uuid , 'abbr' => 'KO',
                'country_id' => 169,
            ),

            array(
                'id' => 2878,
                'name' => 'Lumbini',
                'uuid' => $faker->uuid , 'abbr' => 'LU',
                'country_id' => 169,
            ),

            array(
                'id' => 2879,
                'name' => 'Mahakali',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 169,
            ),

            array(
                'id' => 2880,
                'name' => 'Mechi',
                'uuid' => $faker->uuid , 'abbr' => 'ME',
                'country_id' => 169,
            ),

            array(
                'id' => 2881,
                'name' => 'Narayani',
                'uuid' => $faker->uuid , 'abbr' => 'NA',
                'country_id' => 169,
            ),

            array(
                'id' => 2882,
                'name' => 'Rapti',
                'uuid' => $faker->uuid , 'abbr' => 'RA',
                'country_id' => 169,
            ),

            array(
                'id' => 2883,
                'name' => 'Sagarmatha',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 169,
            ),

            array(
                'id' => 2884,
                'name' => 'Seti',
                'uuid' => $faker->uuid , 'abbr' => 'SE',
                'country_id' => 169,
            ),

            array(
                'id' => 2885,
                'name' => 'Aiwo',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 170,
            ),

            array(
                'id' => 2886,
                'name' => 'Anabar',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 170,
            ),

            array(
                'id' => 2887,
                'name' => 'Anetan',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 170,
            ),

            array(
                'id' => 2888,
                'name' => 'Anibare',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 170,
            ),

            array(
                'id' => 2889,
                'name' => 'Baiti',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 170,
            ),

            array(
                'id' => 2890,
                'name' => 'Boe',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 170,
            ),

            array(
                'id' => 2891,
                'name' => 'Buada',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 170,
            ),

            array(
                'id' => 2892,
                'name' => 'Denigomodu',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 170,
            ),

            array(
                'id' => 2893,
                'name' => 'Ewa',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 170,
            ),

            array(
                'id' => 2894,
                'name' => 'Ijuw',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 170,
            ),

            array(
                'id' => 2895,
                'name' => 'Meneng',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 170,
            ),

            array(
                'id' => 2896,
                'name' => 'Nibok',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 170,
            ),

            array(
                'id' => 2897,
                'name' => 'Uaboe',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 170,
            ),

            array(
                'id' => 2898,
                'name' => 'Yaren',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 170,
            ),

            array(
                'id' => 2899,
                'name' => 'Auckland',
                'uuid' => $faker->uuid , 'abbr' => 'AUK',
                'country_id' => 172,
            ),

            array(
                'id' => 2900,
                'name' => 'Bay of Plenty',
                'uuid' => $faker->uuid , 'abbr' => 'BOP',
                'country_id' => 172,
            ),

            array(
                'id' => 2901,
                'name' => 'Canterbury',
                'uuid' => $faker->uuid , 'abbr' => 'CAN',
                'country_id' => 172,
            ),

            array(
                'id' => 2902,
                'name' => 'Gisborne',
                'uuid' => $faker->uuid , 'abbr' => 'GIS',
                'country_id' => 172,
            ),

            array(
                'id' => 2903,
                'name' => 'Hawke\'s Bay',
                'uuid' => $faker->uuid , 'abbr' => 'HKB',
                'country_id' => 172,
            ),

            array(
                'id' => 2904,
                'name' => 'Marlborough',
                'uuid' => $faker->uuid , 'abbr' => 'MBH',
                'country_id' => 172,
            ),

            array(
                'id' => 2905,
                'name' => 'Manawatu-Wanganui',
                'uuid' => $faker->uuid , 'abbr' => 'MWT',
                'country_id' => 172,
            ),

            array(
                'id' => 2906,
                'name' => 'Nelson',
                'uuid' => $faker->uuid , 'abbr' => 'NSN',
                'country_id' => 172,
            ),

            array(
                'id' => 2907,
                'name' => 'Northland',
                'uuid' => $faker->uuid , 'abbr' => 'NTL',
                'country_id' => 172,
            ),

            array(
                'id' => 2908,
                'name' => 'Otago',
                'uuid' => $faker->uuid , 'abbr' => 'OTA',
                'country_id' => 172,
            ),

            array(
                'id' => 2909,
                'name' => 'Southland',
                'uuid' => $faker->uuid , 'abbr' => 'STL',
                'country_id' => 172,
            ),

            array(
                'id' => 2910,
                'name' => 'Tasman',
                'uuid' => $faker->uuid , 'abbr' => 'TAS',
                'country_id' => 172,
            ),

            array(
                'id' => 2911,
                'name' => 'Taranaki',
                'uuid' => $faker->uuid , 'abbr' => 'TKI',
                'country_id' => 172,
            ),

            array(
                'id' => 2912,
                'name' => 'Wellington',
                'uuid' => $faker->uuid , 'abbr' => 'WGN',
                'country_id' => 172,
            ),

            array(
                'id' => 2913,
                'name' => 'Waikato',
                'uuid' => $faker->uuid , 'abbr' => 'WKO',
                'country_id' => 172,
            ),

            array(
                'id' => 2914,
                'name' => 'West Coast',
                'uuid' => $faker->uuid , 'abbr' => 'WTC',
                'country_id' => 172,
            ),

            array(
                'id' => 2915,
                'name' => 'Chatham Islands',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 172,
            ),

            array(
                'id' => 2916,
                'name' => 'Al Batinah',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 173,
            ),

            array(
                'id' => 2917,
                'name' => 'Ad Dakhiliyah',
                'uuid' => $faker->uuid , 'abbr' => 'DA',
                'country_id' => 173,
            ),

            array(
                'id' => 2918,
                'name' => 'Dhofar',
                'uuid' => $faker->uuid , 'abbr' => 'JA',
                'country_id' => 173,
            ),

            array(
                'id' => 2919,
                'name' => 'Masqat',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 173,
            ),

            array(
                'id' => 2920,
                'name' => 'Musandam',
                'uuid' => $faker->uuid , 'abbr' => 'MU',
                'country_id' => 173,
            ),

            array(
                'id' => 2921,
                'name' => 'Ash Sharqiyah',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 173,
            ),

            array(
                'id' => 2922,
                'name' => 'Al Wustá',
                'uuid' => $faker->uuid , 'abbr' => 'WU',
                'country_id' => 173,
            ),

            array(
                'id' => 2923,
                'name' => 'Al Buraymi',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 173,
            ),

            array(
                'id' => 2924,
                'name' => 'Adh Dhahirah',
                'uuid' => $faker->uuid , 'abbr' => 'ZA',
                'country_id' => 173,
            ),

            array(
                'id' => 2925,
                'name' => 'Comarca de San Blas',
                'uuid' => $faker->uuid , 'abbr' => 0,
                'country_id' => 174,
            ),

            array(
                'id' => 2926,
                'name' => 'Bocas del Toro',
                'uuid' => $faker->uuid , 'abbr' => 1,
                'country_id' => 174,
            ),

            array(
                'id' => 2927,
                'name' => 'Coclé',
                'uuid' => $faker->uuid , 'abbr' => 2,
                'country_id' => 174,
            ),

            array(
                'id' => 2928,
                'name' => 'Colón',
                'uuid' => $faker->uuid , 'abbr' => 3,
                'country_id' => 174,
            ),

            array(
                'id' => 2929,
                'name' => 'Chiriquí',
                'uuid' => $faker->uuid , 'abbr' => 4,
                'country_id' => 174,
            ),

            array(
                'id' => 2930,
                'name' => 'Darién',
                'uuid' => $faker->uuid , 'abbr' => 5,
                'country_id' => 174,
            ),

            array(
                'id' => 2931,
                'name' => 'Herrera',
                'uuid' => $faker->uuid , 'abbr' => 6,
                'country_id' => 174,
            ),

            array(
                'id' => 2932,
                'name' => 'Los Santos',
                'uuid' => $faker->uuid , 'abbr' => 7,
                'country_id' => 174,
            ),

            array(
                'id' => 2933,
                'name' => 'Panamá',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 174,
            ),

            array(
                'id' => 2934,
                'name' => 'Veraguas',
                'uuid' => $faker->uuid , 'abbr' => 9,
                'country_id' => 174,
            ),

            array(
                'id' => 2935,
                'name' => 'Amazonas',
                'uuid' => $faker->uuid , 'abbr' => 'AMA',
                'country_id' => 175,
            ),

            array(
                'id' => 2936,
                'name' => 'Ancash',
                'uuid' => $faker->uuid , 'abbr' => 'ANC',
                'country_id' => 175,
            ),

            array(
                'id' => 2937,
                'name' => 'Apurímac',
                'uuid' => $faker->uuid , 'abbr' => 'APU',
                'country_id' => 175,
            ),

            array(
                'id' => 2938,
                'name' => 'Arequipa',
                'uuid' => $faker->uuid , 'abbr' => 'ARE',
                'country_id' => 175,
            ),

            array(
                'id' => 2939,
                'name' => 'Ayacucho',
                'uuid' => $faker->uuid , 'abbr' => 'AYA',
                'country_id' => 175,
            ),

            array(
                'id' => 2940,
                'name' => 'Cajamarca',
                'uuid' => $faker->uuid , 'abbr' => 'CAJ',
                'country_id' => 175,
            ),

            array(
                'id' => 2941,
                'name' => 'El Callao',
                'uuid' => $faker->uuid , 'abbr' => 'CAL',
                'country_id' => 175,
            ),

            array(
                'id' => 2942,
                'name' => 'Cuzco [Cusco]',
                'uuid' => $faker->uuid , 'abbr' => 'CUS',
                'country_id' => 175,
            ),

            array(
                'id' => 2943,
                'name' => 'Huánuco',
                'uuid' => $faker->uuid , 'abbr' => 'HUC',
                'country_id' => 175,
            ),

            array(
                'id' => 2944,
                'name' => 'Huancavelica',
                'uuid' => $faker->uuid , 'abbr' => 'HUV',
                'country_id' => 175,
            ),

            array(
                'id' => 2945,
                'name' => 'Ica',
                'uuid' => $faker->uuid , 'abbr' => 'ICA',
                'country_id' => 175,
            ),

            array(
                'id' => 2946,
                'name' => 'Junín',
                'uuid' => $faker->uuid , 'abbr' => 'JUN',
                'country_id' => 175,
            ),

            array(
                'id' => 2947,
                'name' => 'La Libertad',
                'uuid' => $faker->uuid , 'abbr' => 'LAL',
                'country_id' => 175,
            ),

            array(
                'id' => 2948,
                'name' => 'Lambayeque',
                'uuid' => $faker->uuid , 'abbr' => 'LAM',
                'country_id' => 175,
            ),

            array(
                'id' => 2949,
                'name' => 'Lima',
                'uuid' => $faker->uuid , 'abbr' => 'LIM',
                'country_id' => 175,
            ),

            array(
                'id' => 2950,
                'name' => 'Loreto',
                'uuid' => $faker->uuid , 'abbr' => 'LOR',
                'country_id' => 175,
            ),

            array(
                'id' => 2951,
                'name' => 'Madre de Dios',
                'uuid' => $faker->uuid , 'abbr' => 'MDD',
                'country_id' => 175,
            ),

            array(
                'id' => 2952,
                'name' => 'Moquegua',
                'uuid' => $faker->uuid , 'abbr' => 'MOQ',
                'country_id' => 175,
            ),

            array(
                'id' => 2953,
                'name' => 'Pasco',
                'uuid' => $faker->uuid , 'abbr' => 'PAS',
                'country_id' => 175,
            ),

            array(
                'id' => 2954,
                'name' => 'Piura',
                'uuid' => $faker->uuid , 'abbr' => 'PIU',
                'country_id' => 175,
            ),

            array(
                'id' => 2955,
                'name' => 'Puno',
                'uuid' => $faker->uuid , 'abbr' => 'PUN',
                'country_id' => 175,
            ),

            array(
                'id' => 2956,
                'name' => 'San Martín',
                'uuid' => $faker->uuid , 'abbr' => 'SAM',
                'country_id' => 175,
            ),

            array(
                'id' => 2957,
                'name' => 'Tacna',
                'uuid' => $faker->uuid , 'abbr' => 'TAC',
                'country_id' => 175,
            ),

            array(
                'id' => 2958,
                'name' => 'Tumbes',
                'uuid' => $faker->uuid , 'abbr' => 'TUM',
                'country_id' => 175,
            ),

            array(
                'id' => 2959,
                'name' => 'Ucayali',
                'uuid' => $faker->uuid , 'abbr' => 'UCA',
                'country_id' => 175,
            ),

            array(
                'id' => 2960,
                'name' => 'Lima Metropolitana',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 175,
            ),

            array(
                'id' => 2961,
                'name' => 'Chimbu',
                'uuid' => $faker->uuid , 'abbr' => 'CPK',
                'country_id' => 177,
            ),

            array(
                'id' => 2962,
                'name' => 'Central',
                'uuid' => $faker->uuid , 'abbr' => 'CPM',
                'country_id' => 177,
            ),

            array(
                'id' => 2963,
                'name' => 'East New Britain',
                'uuid' => $faker->uuid , 'abbr' => 'EBR',
                'country_id' => 177,
            ),

            array(
                'id' => 2964,
                'name' => 'Eastern Highlands',
                'uuid' => $faker->uuid , 'abbr' => 'EHG',
                'country_id' => 177,
            ),

            array(
                'id' => 2965,
                'name' => 'Enga',
                'uuid' => $faker->uuid , 'abbr' => 'EPW',
                'country_id' => 177,
            ),

            array(
                'id' => 2966,
                'name' => 'East Sepik',
                'uuid' => $faker->uuid , 'abbr' => 'ESW',
                'country_id' => 177,
            ),

            array(
                'id' => 2967,
                'name' => 'Gulf',
                'uuid' => $faker->uuid , 'abbr' => 'GPK',
                'country_id' => 177,
            ),

            array(
                'id' => 2968,
                'name' => 'Milne Bay',
                'uuid' => $faker->uuid , 'abbr' => 'MBA',
                'country_id' => 177,
            ),

            array(
                'id' => 2969,
                'name' => 'Morobe',
                'uuid' => $faker->uuid , 'abbr' => 'MPL',
                'country_id' => 177,
            ),

            array(
                'id' => 2970,
                'name' => 'Madang',
                'uuid' => $faker->uuid , 'abbr' => 'MPM',
                'country_id' => 177,
            ),

            array(
                'id' => 2971,
                'name' => 'Manus',
                'uuid' => $faker->uuid , 'abbr' => 'MRL',
                'country_id' => 177,
            ),

            array(
                'id' => 2972,
                'name' => 'National Capital District (Port Moresby)',
                'uuid' => $faker->uuid , 'abbr' => 'NCD',
                'country_id' => 177,
            ),

            array(
                'id' => 2973,
                'name' => 'New Ireland',
                'uuid' => $faker->uuid , 'abbr' => 'NIK',
                'country_id' => 177,
            ),

            array(
                'id' => 2974,
                'name' => 'Northern',
                'uuid' => $faker->uuid , 'abbr' => 'NPP',
                'country_id' => 177,
            ),

            array(
                'id' => 2975,
                'name' => 'North Solomons',
                'uuid' => $faker->uuid , 'abbr' => 'NSA',
                'country_id' => 177,
            ),

            array(
                'id' => 2976,
                'name' => 'Sandaun [West Sepik]',
                'uuid' => $faker->uuid , 'abbr' => 'SAN',
                'country_id' => 177,
            ),

            array(
                'id' => 2977,
                'name' => 'Southern Highlands',
                'uuid' => $faker->uuid , 'abbr' => 'SHM',
                'country_id' => 177,
            ),

            array(
                'id' => 2978,
                'name' => 'West New Britain',
                'uuid' => $faker->uuid , 'abbr' => 'WBK',
                'country_id' => 177,
            ),

            array(
                'id' => 2979,
                'name' => 'Western Highlands',
                'uuid' => $faker->uuid , 'abbr' => 'WHM',
                'country_id' => 177,
            ),

            array(
                'id' => 2980,
                'name' => 'Western',
                'uuid' => $faker->uuid , 'abbr' => 'WPD',
                'country_id' => 177,
            ),

            array(
                'id' => 2981,
                'name' => 'Abra',
                'uuid' => $faker->uuid , 'abbr' => 'ABR',
                'country_id' => 178,
            ),

            array(
                'id' => 2982,
                'name' => 'Agusan del Norte',
                'uuid' => $faker->uuid , 'abbr' => 'AGN',
                'country_id' => 178,
            ),

            array(
                'id' => 2983,
                'name' => 'Agusan del Sur',
                'uuid' => $faker->uuid , 'abbr' => 'AGS',
                'country_id' => 178,
            ),

            array(
                'id' => 2984,
                'name' => 'Aklan',
                'uuid' => $faker->uuid , 'abbr' => 'AKL',
                'country_id' => 178,
            ),

            array(
                'id' => 2985,
                'name' => 'Albay',
                'uuid' => $faker->uuid , 'abbr' => 'ALB',
                'country_id' => 178,
            ),

            array(
                'id' => 2986,
                'name' => 'Antique',
                'uuid' => $faker->uuid , 'abbr' => 'ANT',
                'country_id' => 178,
            ),

            array(
                'id' => 2987,
                'name' => 'Apayao',
                'uuid' => $faker->uuid , 'abbr' => 'APA',
                'country_id' => 178,
            ),

            array(
                'id' => 2988,
                'name' => 'Aurora',
                'uuid' => $faker->uuid , 'abbr' => 'AUR',
                'country_id' => 178,
            ),

            array(
                'id' => 2989,
                'name' => 'Bataan',
                'uuid' => $faker->uuid , 'abbr' => 'BAN',
                'country_id' => 178,
            ),

            array(
                'id' => 2990,
                'name' => 'Basilan',
                'uuid' => $faker->uuid , 'abbr' => 'BAS',
                'country_id' => 178,
            ),

            array(
                'id' => 2991,
                'name' => 'Benguet',
                'uuid' => $faker->uuid , 'abbr' => 'BEN',
                'country_id' => 178,
            ),

            array(
                'id' => 2992,
                'name' => 'Biliran',
                'uuid' => $faker->uuid , 'abbr' => 'BIL',
                'country_id' => 178,
            ),

            array(
                'id' => 2993,
                'name' => 'Bohol',
                'uuid' => $faker->uuid , 'abbr' => 'BOH',
                'country_id' => 178,
            ),

            array(
                'id' => 2994,
                'name' => 'Batangas',
                'uuid' => $faker->uuid , 'abbr' => 'BTG',
                'country_id' => 178,
            ),

            array(
                'id' => 2995,
                'name' => 'Batanes',
                'uuid' => $faker->uuid , 'abbr' => 'BTN',
                'country_id' => 178,
            ),

            array(
                'id' => 2996,
                'name' => 'Bukidnon',
                'uuid' => $faker->uuid , 'abbr' => 'BUK',
                'country_id' => 178,
            ),

            array(
                'id' => 2997,
                'name' => 'Bulacan',
                'uuid' => $faker->uuid , 'abbr' => 'BUL',
                'country_id' => 178,
            ),

            array(
                'id' => 2998,
                'name' => 'Cagayan',
                'uuid' => $faker->uuid , 'abbr' => 'CAG',
                'country_id' => 178,
            ),

            array(
                'id' => 2999,
                'name' => 'Camiguin',
                'uuid' => $faker->uuid , 'abbr' => 'CAM',
                'country_id' => 178,
            ),

            array(
                'id' => 3000,
                'name' => 'Camarines Norte',
                'uuid' => $faker->uuid , 'abbr' => 'CAN',
                'country_id' => 178,
            ),

            array(
                'id' => 3001,
                'name' => 'Capiz',
                'uuid' => $faker->uuid , 'abbr' => 'CAP',
                'country_id' => 178,
            ),

            array(
                'id' => 3002,
                'name' => 'Camarines Sur',
                'uuid' => $faker->uuid , 'abbr' => 'CAS',
                'country_id' => 178,
            ),

            array(
                'id' => 3003,
                'name' => 'Catanduanes',
                'uuid' => $faker->uuid , 'abbr' => 'CAT',
                'country_id' => 178,
            ),

            array(
                'id' => 3004,
                'name' => 'Cavite',
                'uuid' => $faker->uuid , 'abbr' => 'CAV',
                'country_id' => 178,
            ),

            array(
                'id' => 3005,
                'name' => 'Cebu',
                'uuid' => $faker->uuid , 'abbr' => 'CEB',
                'country_id' => 178,
            ),

            array(
                'id' => 3006,
                'name' => 'Compostela Valley',
                'uuid' => $faker->uuid , 'abbr' => 'COM',
                'country_id' => 178,
            ),

            array(
                'id' => 3007,
                'name' => 'Davao Oriental',
                'uuid' => $faker->uuid , 'abbr' => 'DAO',
                'country_id' => 178,
            ),

            array(
                'id' => 3008,
                'name' => 'Davao del Sur',
                'uuid' => $faker->uuid , 'abbr' => 'DAS',
                'country_id' => 178,
            ),

            array(
                'id' => 3009,
                'name' => 'Davao del Norte',
                'uuid' => $faker->uuid , 'abbr' => 'DAV',
                'country_id' => 178,
            ),

            array(
                'id' => 3010,
                'name' => 'Eastern Samar',
                'uuid' => $faker->uuid , 'abbr' => 'EAS',
                'country_id' => 178,
            ),

            array(
                'id' => 3011,
                'name' => 'Guimaras',
                'uuid' => $faker->uuid , 'abbr' => 'GUI',
                'country_id' => 178,
            ),

            array(
                'id' => 3012,
                'name' => 'Ifugao',
                'uuid' => $faker->uuid , 'abbr' => 'IFU',
                'country_id' => 178,
            ),

            array(
                'id' => 3013,
                'name' => 'Iloilo',
                'uuid' => $faker->uuid , 'abbr' => 'ILI',
                'country_id' => 178,
            ),

            array(
                'id' => 3014,
                'name' => 'Ilocos Norte',
                'uuid' => $faker->uuid , 'abbr' => 'ILN',
                'country_id' => 178,
            ),

            array(
                'id' => 3015,
                'name' => 'Ilocos Sur',
                'uuid' => $faker->uuid , 'abbr' => 'ILS',
                'country_id' => 178,
            ),

            array(
                'id' => 3016,
                'name' => 'Isabela',
                'uuid' => $faker->uuid , 'abbr' => 'ISA',
                'country_id' => 178,
            ),

            array(
                'id' => 3017,
                'name' => 'Kalinga',
                'uuid' => $faker->uuid , 'abbr' => 'KAL',
                'country_id' => 178,
            ),

            array(
                'id' => 3018,
                'name' => 'Laguna',
                'uuid' => $faker->uuid , 'abbr' => 'LAG',
                'country_id' => 178,
            ),

            array(
                'id' => 3019,
                'name' => 'Lanao del Norte',
                'uuid' => $faker->uuid , 'abbr' => 'LAN',
                'country_id' => 178,
            ),

            array(
                'id' => 3020,
                'name' => 'Lanao del Sur',
                'uuid' => $faker->uuid , 'abbr' => 'LAS',
                'country_id' => 178,
            ),

            array(
                'id' => 3021,
                'name' => 'Leyte',
                'uuid' => $faker->uuid , 'abbr' => 'LEY',
                'country_id' => 178,
            ),

            array(
                'id' => 3022,
                'name' => 'La Union',
                'uuid' => $faker->uuid , 'abbr' => 'LUN',
                'country_id' => 178,
            ),

            array(
                'id' => 3023,
                'name' => 'Marinduque',
                'uuid' => $faker->uuid , 'abbr' => 'MAD',
                'country_id' => 178,
            ),

            array(
                'id' => 3024,
                'name' => 'Maguindanao',
                'uuid' => $faker->uuid , 'abbr' => 'MAG',
                'country_id' => 178,
            ),

            array(
                'id' => 3025,
                'name' => 'Masbate',
                'uuid' => $faker->uuid , 'abbr' => 'MAS',
                'country_id' => 178,
            ),

            array(
                'id' => 3026,
                'name' => 'Mindoro Occidental',
                'uuid' => $faker->uuid , 'abbr' => 'MDC',
                'country_id' => 178,
            ),

            array(
                'id' => 3027,
                'name' => 'Mindoro Oriental',
                'uuid' => $faker->uuid , 'abbr' => 'MDR',
                'country_id' => 178,
            ),

            array(
                'id' => 3028,
                'name' => NULL,
                'uuid' => $faker->uuid , 'abbr' => 'MNL',
                'country_id' => 178,
            ),

            array(
                'id' => 3029,
                'name' => 'Mountain Province',
                'uuid' => $faker->uuid , 'abbr' => 'MOU',
                'country_id' => 178,
            ),

            array(
                'id' => 3030,
                'name' => 'Misamis Occidental',
                'uuid' => $faker->uuid , 'abbr' => 'MSC',
                'country_id' => 178,
            ),

            array(
                'id' => 3031,
                'name' => 'Misamis Oriental',
                'uuid' => $faker->uuid , 'abbr' => 'MSR',
                'country_id' => 178,
            ),

            array(
                'id' => 3032,
                'name' => 'North Cotabato',
                'uuid' => $faker->uuid , 'abbr' => 'NCO',
                'country_id' => 178,
            ),

            array(
                'id' => 3033,
                'name' => 'Negros Occidental',
                'uuid' => $faker->uuid , 'abbr' => 'NEC',
                'country_id' => 178,
            ),

            array(
                'id' => 3034,
                'name' => 'Negros Oriental',
                'uuid' => $faker->uuid , 'abbr' => 'NER',
                'country_id' => 178,
            ),

            array(
                'id' => 3035,
                'name' => 'Northern Samar',
                'uuid' => $faker->uuid , 'abbr' => 'NSA',
                'country_id' => 178,
            ),

            array(
                'id' => 3036,
                'name' => 'Nueva Ecija',
                'uuid' => $faker->uuid , 'abbr' => 'NUE',
                'country_id' => 178,
            ),

            array(
                'id' => 3037,
                'name' => 'Nueva Vizcaya',
                'uuid' => $faker->uuid , 'abbr' => 'NUV',
                'country_id' => 178,
            ),

            array(
                'id' => 3038,
                'name' => 'Pampanga',
                'uuid' => $faker->uuid , 'abbr' => 'PAM',
                'country_id' => 178,
            ),

            array(
                'id' => 3039,
                'name' => 'Pangasinan',
                'uuid' => $faker->uuid , 'abbr' => 'PAN',
                'country_id' => 178,
            ),

            array(
                'id' => 3040,
                'name' => 'Palawan',
                'uuid' => $faker->uuid , 'abbr' => 'PLW',
                'country_id' => 178,
            ),

            array(
                'id' => 3041,
                'name' => 'Quezon',
                'uuid' => $faker->uuid , 'abbr' => 'QUE',
                'country_id' => 178,
            ),

            array(
                'id' => 3042,
                'name' => 'Quirino',
                'uuid' => $faker->uuid , 'abbr' => 'QUI',
                'country_id' => 178,
            ),

            array(
                'id' => 3043,
                'name' => 'Rizal',
                'uuid' => $faker->uuid , 'abbr' => 'RIZ',
                'country_id' => 178,
            ),

            array(
                'id' => 3044,
                'name' => 'Romblon',
                'uuid' => $faker->uuid , 'abbr' => 'ROM',
                'country_id' => 178,
            ),

            array(
                'id' => 3045,
                'name' => 'Sarangani',
                'uuid' => $faker->uuid , 'abbr' => 'SAR',
                'country_id' => 178,
            ),

            array(
                'id' => 3046,
                'name' => 'South Cotabato',
                'uuid' => $faker->uuid , 'abbr' => 'SCO',
                'country_id' => 178,
            ),

            array(
                'id' => 3047,
                'name' => 'Siquijor',
                'uuid' => $faker->uuid , 'abbr' => 'SIG',
                'country_id' => 178,
            ),

            array(
                'id' => 3048,
                'name' => 'Southern Leyte',
                'uuid' => $faker->uuid , 'abbr' => 'SLE',
                'country_id' => 178,
            ),

            array(
                'id' => 3049,
                'name' => 'Sulu',
                'uuid' => $faker->uuid , 'abbr' => 'SLU',
                'country_id' => 178,
            ),

            array(
                'id' => 3050,
                'name' => 'Sorsogon',
                'uuid' => $faker->uuid , 'abbr' => 'SOR',
                'country_id' => 178,
            ),

            array(
                'id' => 3051,
                'name' => 'Sultan Kudarat',
                'uuid' => $faker->uuid , 'abbr' => 'SUK',
                'country_id' => 178,
            ),

            array(
                'id' => 3052,
                'name' => 'Surigao del Norte',
                'uuid' => $faker->uuid , 'abbr' => 'SUN',
                'country_id' => 178,
            ),

            array(
                'id' => 3053,
                'name' => 'Surigao del Sur',
                'uuid' => $faker->uuid , 'abbr' => 'SUR',
                'country_id' => 178,
            ),

            array(
                'id' => 3054,
                'name' => 'Tarlac',
                'uuid' => $faker->uuid , 'abbr' => 'TAR',
                'country_id' => 178,
            ),

            array(
                'id' => 3055,
                'name' => 'Tawi-Tawi',
                'uuid' => $faker->uuid , 'abbr' => 'TAW',
                'country_id' => 178,
            ),

            array(
                'id' => 3056,
                'name' => 'Western Samar',
                'uuid' => $faker->uuid , 'abbr' => 'WSA',
                'country_id' => 178,
            ),

            array(
                'id' => 3057,
                'name' => 'Dinagat',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 178,
            ),

            array(
                'id' => 3058,
                'name' => 'Shariff Kabunsuan',
                'uuid' => $faker->uuid , 'abbr' => 'X2~',
                'country_id' => 178,
            ),

            array(
                'id' => 3059,
                'name' => 'Zamboanga del Norte',
                'uuid' => $faker->uuid , 'abbr' => 'ZAN',
                'country_id' => 178,
            ),

            array(
                'id' => 3060,
                'name' => 'Zamboanga del Sur',
                'uuid' => $faker->uuid , 'abbr' => 'ZAS',
                'country_id' => 178,
            ),

            array(
                'id' => 3061,
                'name' => 'Zambales',
                'uuid' => $faker->uuid , 'abbr' => 'ZMB',
                'country_id' => 178,
            ),

            array(
                'id' => 3062,
                'name' => 'Zamboanga Sibuguey [Zamboanga Sibugay]',
                'uuid' => $faker->uuid , 'abbr' => 'ZSI',
                'country_id' => 178,
            ),

            array(
                'id' => 3063,
                'name' => 'Baluchistan (en)',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 179,
            ),

            array(
                'id' => 3064,
                'name' => 'Islamabad',
                'uuid' => $faker->uuid , 'abbr' => 'IS',
                'country_id' => 179,
            ),

            array(
                'id' => 3065,
                'name' => 'Azad Kashmir',
                'uuid' => $faker->uuid , 'abbr' => 'JK',
                'country_id' => 179,
            ),

            array(
                'id' => 3066,
                'name' => 'Northern Areas',
                'uuid' => $faker->uuid , 'abbr' => 'NA',
                'country_id' => 179,
            ),

            array(
                'id' => 3067,
                'name' => 'North-West Frontier',
                'uuid' => $faker->uuid , 'abbr' => 'NW',
                'country_id' => 179,
            ),

            array(
                'id' => 3068,
                'name' => 'Punjab',
                'uuid' => $faker->uuid , 'abbr' => 'PB',
                'country_id' => 179,
            ),

            array(
                'id' => 3069,
                'name' => 'Sind (en)',
                'uuid' => $faker->uuid , 'abbr' => 'SD',
                'country_id' => 179,
            ),

            array(
                'id' => 3070,
                'name' => 'Federally Administered Tribal Areas',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 179,
            ),

            array(
                'id' => 3071,
                'name' => 'Dolnośląskie',
                'uuid' => $faker->uuid , 'abbr' => 'DS',
                'country_id' => 180,
            ),

            array(
                'id' => 3072,
                'name' => 'Kujawsko-pomorskie',
                'uuid' => $faker->uuid , 'abbr' => 'KP',
                'country_id' => 180,
            ),

            array(
                'id' => 3073,
                'name' => 'Lubelskie',
                'uuid' => $faker->uuid , 'abbr' => 'LU',
                'country_id' => 180,
            ),

            array(
                'id' => 3074,
                'name' => 'Lubuskie',
                'uuid' => $faker->uuid , 'abbr' => 'LB',
                'country_id' => 180,
            ),

            array(
                'id' => 3075,
                'name' => 'Łódzkie',
                'uuid' => $faker->uuid , 'abbr' => 'LD',
                'country_id' => 180,
            ),

            array(
                'id' => 3076,
                'name' => 'Małopolskie',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 180,
            ),

            array(
                'id' => 3077,
                'name' => 'Mazowieckie',
                'uuid' => $faker->uuid , 'abbr' => 'MZ',
                'country_id' => 180,
            ),

            array(
                'id' => 3078,
                'name' => 'Opolskie',
                'uuid' => $faker->uuid , 'abbr' => 'OP',
                'country_id' => 180,
            ),

            array(
                'id' => 3079,
                'name' => 'Podkarpackie',
                'uuid' => $faker->uuid , 'abbr' => 'PK',
                'country_id' => 180,
            ),

            array(
                'id' => 3080,
                'name' => 'Podlaskie',
                'uuid' => $faker->uuid , 'abbr' => 'PD',
                'country_id' => 180,
            ),

            array(
                'id' => 3081,
                'name' => 'Pomorskie',
                'uuid' => $faker->uuid , 'abbr' => 'PM',
                'country_id' => 180,
            ),

            array(
                'id' => 3082,
                'name' => 'Śląskie',
                'uuid' => $faker->uuid , 'abbr' => 'SL',
                'country_id' => 180,
            ),

            array(
                'id' => 3083,
                'name' => 'Świętokrzyskie',
                'uuid' => $faker->uuid , 'abbr' => 'SK',
                'country_id' => 180,
            ),

            array(
                'id' => 3084,
                'name' => 'Warmińsko-mazurskie',
                'uuid' => $faker->uuid , 'abbr' => 'WN',
                'country_id' => 180,
            ),

            array(
                'id' => 3085,
                'name' => 'Wielkopolskie',
                'uuid' => $faker->uuid , 'abbr' => 'WP',
                'country_id' => 180,
            ),

            array(
                'id' => 3086,
                'name' => 'Zachodniopomorskie',
                'uuid' => $faker->uuid , 'abbr' => 'ZP',
                'country_id' => 180,
            ),

            array(
                'id' => 3087,
                'name' => 'Aveiro',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 185,
            ),

            array(
                'id' => 3088,
                'name' => 'Beja',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 185,
            ),

            array(
                'id' => 3089,
                'name' => 'Braga',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 185,
            ),

            array(
                'id' => 3090,
                'name' => 'Bragança',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 185,
            ),

            array(
                'id' => 3091,
                'name' => 'Castelo Branco',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 185,
            ),

            array(
                'id' => 3092,
                'name' => 'Coimbra',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 185,
            ),

            array(
                'id' => 3093,
                'name' => 'Évora',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 185,
            ),

            array(
                'id' => 3094,
                'name' => 'Faro',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 185,
            ),

            array(
                'id' => 3095,
                'name' => 'Guarda',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 185,
            ),

            array(
                'id' => 3096,
                'name' => 'Leiria',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 185,
            ),

            array(
                'id' => 3097,
                'name' => 'Lisboa',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 185,
            ),

            array(
                'id' => 3098,
                'name' => 'Portalegre',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 185,
            ),

            array(
                'id' => 3099,
                'name' => 'Porto',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 185,
            ),

            array(
                'id' => 3100,
                'name' => 'Santarém',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 185,
            ),

            array(
                'id' => 3101,
                'name' => 'Setúbal',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 185,
            ),

            array(
                'id' => 3102,
                'name' => 'Viana do Castelo',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 185,
            ),

            array(
                'id' => 3103,
                'name' => 'Vila Real',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 185,
            ),

            array(
                'id' => 3104,
                'name' => 'Viseu',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 185,
            ),

            array(
                'id' => 3105,
                'name' => 'Açores',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 185,
            ),

            array(
                'id' => 3106,
                'name' => 'Madeira',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 185,
            ),

            array(
                'id' => 3107,
                'name' => 'Aimeliik',
                'uuid' => $faker->uuid , 'abbr' => 002,
                'country_id' => 186,
            ),

            array(
                'id' => 3108,
                'name' => 'Airai',
                'uuid' => $faker->uuid , 'abbr' => 004,
                'country_id' => 186,
            ),

            array(
                'id' => 3109,
                'name' => 'Angaur',
                'uuid' => $faker->uuid , 'abbr' => 010,
                'country_id' => 186,
            ),

            array(
                'id' => 3110,
                'name' => 'Hatobohei',
                'uuid' => $faker->uuid , 'abbr' => 050,
                'country_id' => 186,
            ),

            array(
                'id' => 3111,
                'name' => 'Kayangel',
                'uuid' => $faker->uuid , 'abbr' => 100,
                'country_id' => 186,
            ),

            array(
                'id' => 3112,
                'name' => 'Koror',
                'uuid' => $faker->uuid , 'abbr' => 150,
                'country_id' => 186,
            ),

            array(
                'id' => 3113,
                'name' => 'Melekeok',
                'uuid' => $faker->uuid , 'abbr' => 212,
                'country_id' => 186,
            ),

            array(
                'id' => 3114,
                'name' => 'Ngaraard',
                'uuid' => $faker->uuid , 'abbr' => 214,
                'country_id' => 186,
            ),

            array(
                'id' => 3115,
                'name' => 'Ngarchelong',
                'uuid' => $faker->uuid , 'abbr' => 218,
                'country_id' => 186,
            ),

            array(
                'id' => 3116,
                'name' => 'Ngardmau',
                'uuid' => $faker->uuid , 'abbr' => 222,
                'country_id' => 186,
            ),

            array(
                'id' => 3117,
                'name' => 'Ngatpang',
                'uuid' => $faker->uuid , 'abbr' => 224,
                'country_id' => 186,
            ),

            array(
                'id' => 3118,
                'name' => 'Ngchesar',
                'uuid' => $faker->uuid , 'abbr' => 226,
                'country_id' => 186,
            ),

            array(
                'id' => 3119,
                'name' => 'Ngeremlengui',
                'uuid' => $faker->uuid , 'abbr' => 227,
                'country_id' => 186,
            ),

            array(
                'id' => 3120,
                'name' => 'Ngiwal',
                'uuid' => $faker->uuid , 'abbr' => 228,
                'country_id' => 186,
            ),

            array(
                'id' => 3121,
                'name' => 'Peleliu',
                'uuid' => $faker->uuid , 'abbr' => 350,
                'country_id' => 186,
            ),

            array(
                'id' => 3122,
                'name' => 'Sonsorol',
                'uuid' => $faker->uuid , 'abbr' => 370,
                'country_id' => 186,
            ),

            array(
                'id' => 3123,
                'name' => 'Concepción',
                'uuid' => $faker->uuid , 'abbr' => 1,
                'country_id' => 187,
            ),

            array(
                'id' => 3124,
                'name' => 'Alto Paraná',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 187,
            ),

            array(
                'id' => 3125,
                'name' => 'Central',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 187,
            ),

            array(
                'id' => 3126,
                'name' => 'Ñeembucú',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 187,
            ),

            array(
                'id' => 3127,
                'name' => 'Amambay',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 187,
            ),

            array(
                'id' => 3128,
                'name' => 'Canindeyú',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 187,
            ),

            array(
                'id' => 3129,
                'name' => 'Presidente Hayes',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 187,
            ),

            array(
                'id' => 3130,
                'name' => 'Alto Paraguay',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 187,
            ),

            array(
                'id' => 3131,
                'name' => 'Boquerón',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 187,
            ),

            array(
                'id' => 3132,
                'name' => 'San Pedro',
                'uuid' => $faker->uuid , 'abbr' => 2,
                'country_id' => 187,
            ),

            array(
                'id' => 3133,
                'name' => 'Cordillera',
                'uuid' => $faker->uuid , 'abbr' => 3,
                'country_id' => 187,
            ),

            array(
                'id' => 3134,
                'name' => 'Guairá',
                'uuid' => $faker->uuid , 'abbr' => 4,
                'country_id' => 187,
            ),

            array(
                'id' => 3135,
                'name' => 'Caaguazú',
                'uuid' => $faker->uuid , 'abbr' => 5,
                'country_id' => 187,
            ),

            array(
                'id' => 3136,
                'name' => 'Caazapá',
                'uuid' => $faker->uuid , 'abbr' => 6,
                'country_id' => 187,
            ),

            array(
                'id' => 3137,
                'name' => 'Itapúa',
                'uuid' => $faker->uuid , 'abbr' => 7,
                'country_id' => 187,
            ),

            array(
                'id' => 3138,
                'name' => 'Misiones',
                'uuid' => $faker->uuid , 'abbr' => 8,
                'country_id' => 187,
            ),

            array(
                'id' => 3139,
                'name' => 'Paraguarí',
                'uuid' => $faker->uuid , 'abbr' => 9,
                'country_id' => 187,
            ),

            array(
                'id' => 3140,
                'name' => 'Asunción',
                'uuid' => $faker->uuid , 'abbr' => 'ASU',
                'country_id' => 187,
            ),

            array(
                'id' => 3141,
                'name' => 'Ad Dawhah',
                'uuid' => $faker->uuid , 'abbr' => 'DA',
                'country_id' => 188,
            ),

            array(
                'id' => 3142,
                'name' => 'Al Ghuwayriyah',
                'uuid' => $faker->uuid , 'abbr' => 'GH',
                'country_id' => 188,
            ),

            array(
                'id' => 3143,
                'name' => 'Jariyan al Batnah',
                'uuid' => $faker->uuid , 'abbr' => 'JB',
                'country_id' => 188,
            ),

            array(
                'id' => 3144,
                'name' => 'Al Jumayliyah',
                'uuid' => $faker->uuid , 'abbr' => 'JU',
                'country_id' => 188,
            ),

            array(
                'id' => 3145,
                'name' => 'Al Khawr',
                'uuid' => $faker->uuid , 'abbr' => 'KH',
                'country_id' => 188,
            ),

            array(
                'id' => 3146,
                'name' => 'Madinat ash Shamal',
                'uuid' => $faker->uuid , 'abbr' => 'MS',
                'country_id' => 188,
            ),

            array(
                'id' => 3147,
                'name' => 'Ar Rayyan',
                'uuid' => $faker->uuid , 'abbr' => 'RA',
                'country_id' => 188,
            ),

            array(
                'id' => 3148,
                'name' => 'Umm Salal',
                'uuid' => $faker->uuid , 'abbr' => 'US',
                'country_id' => 188,
            ),

            array(
                'id' => 3149,
                'name' => 'Al Wakrah',
                'uuid' => $faker->uuid , 'abbr' => 'WA',
                'country_id' => 188,
            ),

            array(
                'id' => 3150,
                'name' => 'Umm Sa\'id',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 188,
            ),

            array(
                'id' => 3151,
                'name' => 'Alba',
                'uuid' => $faker->uuid , 'abbr' => 'AB',
                'country_id' => 190,
            ),

            array(
                'id' => 3152,
                'name' => 'Arges',
                'uuid' => $faker->uuid , 'abbr' => 'AG',
                'country_id' => 190,
            ),

            array(
                'id' => 3153,
                'name' => 'Arad',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 190,
            ),

            array(
                'id' => 3154,
                'name' => 'Bucuresti',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 190,
            ),

            array(
                'id' => 3155,
                'name' => 'Bacau',
                'uuid' => $faker->uuid , 'abbr' => 'BC',
                'country_id' => 190,
            ),

            array(
                'id' => 3156,
                'name' => 'Bihor',
                'uuid' => $faker->uuid , 'abbr' => 'BH',
                'country_id' => 190,
            ),

            array(
                'id' => 3157,
                'name' => 'Bistrita-Nasaud',
                'uuid' => $faker->uuid , 'abbr' => 'BN',
                'country_id' => 190,
            ),

            array(
                'id' => 3158,
                'name' => 'Braila',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 190,
            ),

            array(
                'id' => 3159,
                'name' => 'Botosani',
                'uuid' => $faker->uuid , 'abbr' => 'BT',
                'country_id' => 190,
            ),

            array(
                'id' => 3160,
                'name' => 'Brasov',
                'uuid' => $faker->uuid , 'abbr' => 'BV',
                'country_id' => 190,
            ),

            array(
                'id' => 3161,
                'name' => 'Buzau',
                'uuid' => $faker->uuid , 'abbr' => 'BZ',
                'country_id' => 190,
            ),

            array(
                'id' => 3162,
                'name' => 'Cluj',
                'uuid' => $faker->uuid , 'abbr' => 'CJ',
                'country_id' => 190,
            ),

            array(
                'id' => 3163,
                'name' => 'Calarasi',
                'uuid' => $faker->uuid , 'abbr' => 'CL',
                'country_id' => 190,
            ),

            array(
                'id' => 3164,
                'name' => 'Caras-Severin',
                'uuid' => $faker->uuid , 'abbr' => 'CS',
                'country_id' => 190,
            ),

            array(
                'id' => 3165,
                'name' => 'Constanta',
                'uuid' => $faker->uuid , 'abbr' => 'CT',
                'country_id' => 190,
            ),

            array(
                'id' => 3166,
                'name' => 'Covasna',
                'uuid' => $faker->uuid , 'abbr' => 'CV',
                'country_id' => 190,
            ),

            array(
                'id' => 3167,
                'name' => 'Dâmbovita',
                'uuid' => $faker->uuid , 'abbr' => 'DB',
                'country_id' => 190,
            ),

            array(
                'id' => 3168,
                'name' => 'Dolj',
                'uuid' => $faker->uuid , 'abbr' => 'DJ',
                'country_id' => 190,
            ),

            array(
                'id' => 3169,
                'name' => 'Gorj',
                'uuid' => $faker->uuid , 'abbr' => 'GJ',
                'country_id' => 190,
            ),

            array(
                'id' => 3170,
                'name' => 'Galati',
                'uuid' => $faker->uuid , 'abbr' => 'GL',
                'country_id' => 190,
            ),

            array(
                'id' => 3171,
                'name' => 'Giurgiu',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 190,
            ),

            array(
                'id' => 3172,
                'name' => 'Hunedoara',
                'uuid' => $faker->uuid , 'abbr' => 'HD',
                'country_id' => 190,
            ),

            array(
                'id' => 3173,
                'name' => 'Harghita',
                'uuid' => $faker->uuid , 'abbr' => 'HR',
                'country_id' => 190,
            ),

            array(
                'id' => 3174,
                'name' => 'Ilfov',
                'uuid' => $faker->uuid , 'abbr' => 'IF',
                'country_id' => 190,
            ),

            array(
                'id' => 3175,
                'name' => 'Ialomita',
                'uuid' => $faker->uuid , 'abbr' => 'IL',
                'country_id' => 190,
            ),

            array(
                'id' => 3176,
                'name' => 'Iasi',
                'uuid' => $faker->uuid , 'abbr' => 'IS',
                'country_id' => 190,
            ),

            array(
                'id' => 3177,
                'name' => 'Mehedinti',
                'uuid' => $faker->uuid , 'abbr' => 'MH',
                'country_id' => 190,
            ),

            array(
                'id' => 3178,
                'name' => 'Maramures',
                'uuid' => $faker->uuid , 'abbr' => 'MM',
                'country_id' => 190,
            ),

            array(
                'id' => 3179,
                'name' => 'Mures',
                'uuid' => $faker->uuid , 'abbr' => 'MS',
                'country_id' => 190,
            ),

            array(
                'id' => 3180,
                'name' => 'Neamt',
                'uuid' => $faker->uuid , 'abbr' => 'NT',
                'country_id' => 190,
            ),

            array(
                'id' => 3181,
                'name' => 'Olt',
                'uuid' => $faker->uuid , 'abbr' => 'OT',
                'country_id' => 190,
            ),

            array(
                'id' => 3182,
                'name' => 'Prahova',
                'uuid' => $faker->uuid , 'abbr' => 'PH',
                'country_id' => 190,
            ),

            array(
                'id' => 3183,
                'name' => 'Sibiu',
                'uuid' => $faker->uuid , 'abbr' => 'SB',
                'country_id' => 190,
            ),

            array(
                'id' => 3184,
                'name' => 'Salaj',
                'uuid' => $faker->uuid , 'abbr' => 'SJ',
                'country_id' => 190,
            ),

            array(
                'id' => 3185,
                'name' => 'Satu Mare',
                'uuid' => $faker->uuid , 'abbr' => 'SM',
                'country_id' => 190,
            ),

            array(
                'id' => 3186,
                'name' => 'Suceava',
                'uuid' => $faker->uuid , 'abbr' => 'SV',
                'country_id' => 190,
            ),

            array(
                'id' => 3187,
                'name' => 'Tulcea',
                'uuid' => $faker->uuid , 'abbr' => 'TL',
                'country_id' => 190,
            ),

            array(
                'id' => 3188,
                'name' => 'Timis',
                'uuid' => $faker->uuid , 'abbr' => 'TM',
                'country_id' => 190,
            ),

            array(
                'id' => 3189,
                'name' => 'Teleorman',
                'uuid' => $faker->uuid , 'abbr' => 'TR',
                'country_id' => 190,
            ),

            array(
                'id' => 3190,
                'name' => 'Vâlcea',
                'uuid' => $faker->uuid , 'abbr' => 'VL',
                'country_id' => 190,
            ),

            array(
                'id' => 3191,
                'name' => 'Vrancea',
                'uuid' => $faker->uuid , 'abbr' => 'VN',
                'country_id' => 190,
            ),

            array(
                'id' => 3192,
                'name' => 'Vaslui',
                'uuid' => $faker->uuid , 'abbr' => 'VS',
                'country_id' => 190,
            ),

            array(
                'id' => 3193,
                'name' => 'Belgrade',
                'uuid' => $faker->uuid , 'abbr' => 00,
                'country_id' => 191,
            ),

            array(
                'id' => 3194,
                'name' => 'Severna Backa',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 191,
            ),

            array(
                'id' => 3195,
                'name' => 'Srednji Banat',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 191,
            ),

            array(
                'id' => 3196,
                'name' => 'Severni Banat',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 191,
            ),

            array(
                'id' => 3197,
                'name' => 'Južni Banat',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 191,
            ),

            array(
                'id' => 3198,
                'name' => 'Zapadna Backa',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 191,
            ),

            array(
                'id' => 3199,
                'name' => 'Južna Backa',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 191,
            ),

            array(
                'id' => 3200,
                'name' => 'Srem',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 191,
            ),

            array(
                'id' => 3201,
                'name' => 'Macva',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 191,
            ),

            array(
                'id' => 3202,
                'name' => 'Kolubara',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 191,
            ),

            array(
                'id' => 3203,
                'name' => 'Podunavlje',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 191,
            ),

            array(
                'id' => 3204,
                'name' => 'Branicevo',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 191,
            ),

            array(
                'id' => 3205,
                'name' => 'Šumadija',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 191,
            ),

            array(
                'id' => 3206,
                'name' => 'Pomoravlje',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 191,
            ),

            array(
                'id' => 3207,
                'name' => 'Bor',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 191,
            ),

            array(
                'id' => 3208,
                'name' => 'Zajecar',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 191,
            ),

            array(
                'id' => 3209,
                'name' => 'Zlatibor',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 191,
            ),

            array(
                'id' => 3210,
                'name' => 'Moravica',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 191,
            ),

            array(
                'id' => 3211,
                'name' => 'Raška',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 191,
            ),

            array(
                'id' => 3212,
                'name' => 'Rasina',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 191,
            ),

            array(
                'id' => 3213,
                'name' => 'Nišava',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 191,
            ),

            array(
                'id' => 3214,
                'name' => 'Toplica',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 191,
            ),

            array(
                'id' => 3215,
                'name' => 'Pirot',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 191,
            ),

            array(
                'id' => 3216,
                'name' => 'Jablanica',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 191,
            ),

            array(
                'id' => 3217,
                'name' => 'Pcinja',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 191,
            ),

            array(
                'id' => 3218,
                'name' => 'Kosovo',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 191,
            ),

            array(
                'id' => 3219,
                'name' => 'Pec´',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 191,
            ),

            array(
                'id' => 3220,
                'name' => 'Prizren',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 191,
            ),

            array(
                'id' => 3221,
                'name' => 'Kosovska Mitrovica',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 191,
            ),

            array(
                'id' => 3222,
                'name' => 'Kosovo-Pomoravlje',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 191,
            ),

            array(
                'id' => 3223,
                'name' => 'Adygeya, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'AD',
                'country_id' => 192,
            ),

            array(
                'id' => 3224,
                'name' => 'Altay, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 192,
            ),

            array(
                'id' => 3225,
                'name' => 'Altayskiy kray',
                'uuid' => $faker->uuid , 'abbr' => 'ALT',
                'country_id' => 192,
            ),

            array(
                'id' => 3226,
                'name' => 'Amurskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'AMU',
                'country_id' => 192,
            ),

            array(
                'id' => 3227,
                'name' => 'Arkhangel\'skaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'ARK',
                'country_id' => 192,
            ),

            array(
                'id' => 3228,
                'name' => 'Astrakhanskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'AST',
                'country_id' => 192,
            ),

            array(
                'id' => 3229,
                'name' => 'Bashkortostan, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 192,
            ),

            array(
                'id' => 3230,
                'name' => 'Belgorodskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'BEL',
                'country_id' => 192,
            ),

            array(
                'id' => 3231,
                'name' => 'Bryanskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'BRY',
                'country_id' => 192,
            ),

            array(
                'id' => 3232,
                'name' => 'Buryatiya, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'BU',
                'country_id' => 192,
            ),

            array(
                'id' => 3233,
                'name' => 'Chechenskaya Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 192,
            ),

            array(
                'id' => 3234,
                'name' => 'Chelyabinskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'CHE',
                'country_id' => 192,
            ),

            array(
                'id' => 3235,
                'name' => 'Chukotskiy avtonomnyy okrug',
                'uuid' => $faker->uuid , 'abbr' => 'CHU',
                'country_id' => 192,
            ),

            array(
                'id' => 3236,
                'name' => 'Chuvashskaya Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'CU',
                'country_id' => 192,
            ),

            array(
                'id' => 3237,
                'name' => 'Dagestan, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'DA',
                'country_id' => 192,
            ),

            array(
                'id' => 3238,
                'name' => 'Ingushskaya Respublika [Respublika Ingushetiya]',
                'uuid' => $faker->uuid , 'abbr' => 'IN',
                'country_id' => 192,
            ),

            array(
                'id' => 3239,
                'name' => 'Irkutskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'IRK',
                'country_id' => 192,
            ),

            array(
                'id' => 3240,
                'name' => 'Ivanovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'IVA',
                'country_id' => 192,
            ),

            array(
                'id' => 3241,
                'name' => 'Kamchatskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'KAM',
                'country_id' => 192,
            ),

            array(
                'id' => 3242,
                'name' => 'Kabardino-Balkarskaya Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'KB',
                'country_id' => 192,
            ),

            array(
                'id' => 3243,
                'name' => 'Karachayevo-Cherkesskaya Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'KC',
                'country_id' => 192,
            ),

            array(
                'id' => 3244,
                'name' => 'Krasnodarskiy kray',
                'uuid' => $faker->uuid , 'abbr' => 'KDA',
                'country_id' => 192,
            ),

            array(
                'id' => 3245,
                'name' => 'Kemerovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'KEM',
                'country_id' => 192,
            ),

            array(
                'id' => 3246,
                'name' => 'Kaliningradskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'KGD',
                'country_id' => 192,
            ),

            array(
                'id' => 3247,
                'name' => 'Kurganskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'KGN',
                'country_id' => 192,
            ),

            array(
                'id' => 3248,
                'name' => 'Khabarovskiy kray',
                'uuid' => $faker->uuid , 'abbr' => 'KHA',
                'country_id' => 192,
            ),

            array(
                'id' => 3249,
                'name' => 'Khanty-Mansiyskiy avtonomnyy okrug [Yugra]',
                'uuid' => $faker->uuid , 'abbr' => 'KHM',
                'country_id' => 192,
            ),

            array(
                'id' => 3250,
                'name' => 'Kirovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'KIR',
                'country_id' => 192,
            ),

            array(
                'id' => 3251,
                'name' => 'Khakasiya, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'KK',
                'country_id' => 192,
            ),

            array(
                'id' => 3252,
                'name' => 'Kalmykiya, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'KL',
                'country_id' => 192,
            ),

            array(
                'id' => 3253,
                'name' => 'Kaluzhskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'KLU',
                'country_id' => 192,
            ),

            array(
                'id' => 3254,
                'name' => 'Komi, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'KO',
                'country_id' => 192,
            ),

            array(
                'id' => 3255,
                'name' => 'Kostromskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'KOS',
                'country_id' => 192,
            ),

            array(
                'id' => 3256,
                'name' => 'Kareliya, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'KR',
                'country_id' => 192,
            ),

            array(
                'id' => 3257,
                'name' => 'Kurskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'KRS',
                'country_id' => 192,
            ),

            array(
                'id' => 3258,
                'name' => 'Krasnoyarskiy kray',
                'uuid' => $faker->uuid , 'abbr' => 'KYA',
                'country_id' => 192,
            ),

            array(
                'id' => 3259,
                'name' => 'Leningradskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'LEN',
                'country_id' => 192,
            ),

            array(
                'id' => 3260,
                'name' => 'Lipetskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'LIP',
                'country_id' => 192,
            ),

            array(
                'id' => 3261,
                'name' => 'Magadanskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'MAG',
                'country_id' => 192,
            ),

            array(
                'id' => 3262,
                'name' => 'Mariy El, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'ME',
                'country_id' => 192,
            ),

            array(
                'id' => 3263,
                'name' => 'Mordoviya, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 192,
            ),

            array(
                'id' => 3264,
                'name' => 'Moskovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'MOS',
                'country_id' => 192,
            ),

            array(
                'id' => 3265,
                'name' => 'Moskva',
                'uuid' => $faker->uuid , 'abbr' => 'MOW',
                'country_id' => 192,
            ),

            array(
                'id' => 3266,
                'name' => 'Murmanskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'MUR',
                'country_id' => 192,
            ),

            array(
                'id' => 3267,
                'name' => 'Nenetskiy avtonomnyy okrug',
                'uuid' => $faker->uuid , 'abbr' => 'NEN',
                'country_id' => 192,
            ),

            array(
                'id' => 3268,
                'name' => 'Novgorodskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'NGR',
                'country_id' => 192,
            ),

            array(
                'id' => 3269,
                'name' => 'Nizhegorodskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'NIZ',
                'country_id' => 192,
            ),

            array(
                'id' => 3270,
                'name' => 'Novosibirskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'NVS',
                'country_id' => 192,
            ),

            array(
                'id' => 3271,
                'name' => 'Omskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'OMS',
                'country_id' => 192,
            ),

            array(
                'id' => 3272,
                'name' => 'Orenburgskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'ORE',
                'country_id' => 192,
            ),

            array(
                'id' => 3273,
                'name' => 'Orlovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'ORL',
                'country_id' => 192,
            ),

            array(
                'id' => 3274,
                'name' => 'Perm',
                'uuid' => $faker->uuid , 'abbr' => 'PER',
                'country_id' => 192,
            ),

            array(
                'id' => 3275,
                'name' => 'Penzenskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'PNZ',
                'country_id' => 192,
            ),

            array(
                'id' => 3276,
                'name' => 'Primorskiy kray',
                'uuid' => $faker->uuid , 'abbr' => 'PRI',
                'country_id' => 192,
            ),

            array(
                'id' => 3277,
                'name' => 'Pskovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'PSK',
                'country_id' => 192,
            ),

            array(
                'id' => 3278,
                'name' => 'Rostovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'ROS',
                'country_id' => 192,
            ),

            array(
                'id' => 3279,
                'name' => 'Ryazanskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'RYA',
                'country_id' => 192,
            ),

            array(
                'id' => 3280,
                'name' => 'Sakha, Respublika [Yakutiya]',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 192,
            ),

            array(
                'id' => 3281,
                'name' => 'Sakhalinskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'SAK',
                'country_id' => 192,
            ),

            array(
                'id' => 3282,
                'name' => 'Samarskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'SAM',
                'country_id' => 192,
            ),

            array(
                'id' => 3283,
                'name' => 'Saratovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'SAR',
                'country_id' => 192,
            ),

            array(
                'id' => 3284,
                'name' => 'Severnaya Osetiya, Respublika [Alaniya] [Respublika Severnaya Osetiya-Alaniya]',
                'uuid' => $faker->uuid , 'abbr' => 'SE',
                'country_id' => 192,
            ),

            array(
                'id' => 3285,
                'name' => 'Smolenskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'SMO',
                'country_id' => 192,
            ),

            array(
                'id' => 3286,
                'name' => 'Sankt-Peterburg',
                'uuid' => $faker->uuid , 'abbr' => 'SPE',
                'country_id' => 192,
            ),

            array(
                'id' => 3287,
                'name' => 'Stavropol\'skiy kray',
                'uuid' => $faker->uuid , 'abbr' => 'STA',
                'country_id' => 192,
            ),

            array(
                'id' => 3288,
                'name' => 'Sverdlovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'SVE',
                'country_id' => 192,
            ),

            array(
                'id' => 3289,
                'name' => 'Tatarstan, Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 192,
            ),

            array(
                'id' => 3290,
                'name' => 'Tambovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'TAM',
                'country_id' => 192,
            ),

            array(
                'id' => 3291,
                'name' => 'Tomskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'TOM',
                'country_id' => 192,
            ),

            array(
                'id' => 3292,
                'name' => 'Tul\'skaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'TUL',
                'country_id' => 192,
            ),

            array(
                'id' => 3293,
                'name' => 'Tverskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'TVE',
                'country_id' => 192,
            ),

            array(
                'id' => 3294,
                'name' => 'Tyva, Respublika [Tuva]',
                'uuid' => $faker->uuid , 'abbr' => 'TY',
                'country_id' => 192,
            ),

            array(
                'id' => 3295,
                'name' => 'Tyumenskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'TYU',
                'country_id' => 192,
            ),

            array(
                'id' => 3296,
                'name' => 'Udmurtskaya Respublika',
                'uuid' => $faker->uuid , 'abbr' => 'UD',
                'country_id' => 192,
            ),

            array(
                'id' => 3297,
                'name' => 'Ul\'yanovskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'ULY',
                'country_id' => 192,
            ),

            array(
                'id' => 3298,
                'name' => 'Volgogradskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'VGG',
                'country_id' => 192,
            ),

            array(
                'id' => 3299,
                'name' => 'Vladimirskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'VLA',
                'country_id' => 192,
            ),

            array(
                'id' => 3300,
                'name' => 'Vologodskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'VLG',
                'country_id' => 192,
            ),

            array(
                'id' => 3301,
                'name' => 'Voronezhskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'VOR',
                'country_id' => 192,
            ),

            array(
                'id' => 3302,
                'name' => 'Yamalo-Nenetskiy avtonomnyy okrug',
                'uuid' => $faker->uuid , 'abbr' => 'YAN',
                'country_id' => 192,
            ),

            array(
                'id' => 3303,
                'name' => 'Yaroslavskaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'YAR',
                'country_id' => 192,
            ),

            array(
                'id' => 3304,
                'name' => 'Yevreyskaya avtonomnaya oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 'YEV',
                'country_id' => 192,
            ),

            array(
                'id' => 3305,
                'name' => 'Zabaykal\'skij kray',
                'uuid' => $faker->uuid , 'abbr' => 'ZAB',
                'country_id' => 192,
            ),

            array(
                'id' => 3306,
                'name' => 'Ville de Kigali',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 193,
            ),

            array(
                'id' => 3307,
                'name' => 'Est',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 193,
            ),

            array(
                'id' => 3308,
                'name' => 'Nord',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 193,
            ),

            array(
                'id' => 3309,
                'name' => 'Ouest',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 193,
            ),

            array(
                'id' => 3310,
                'name' => 'Sud',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 193,
            ),

            array(
                'id' => 3311,
                'name' => 'Ar Riya?',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 194,
            ),

            array(
                'id' => 3312,
                'name' => 'Makkah',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 194,
            ),

            array(
                'id' => 3313,
                'name' => 'Al Madinah',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 194,
            ),

            array(
                'id' => 3314,
                'name' => 'Ash Sharqiyah',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 194,
            ),

            array(
                'id' => 3315,
                'name' => 'Al Qasim',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 194,
            ),

            array(
                'id' => 3316,
                'name' => '?a\'il',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 194,
            ),

            array(
                'id' => 3317,
                'name' => 'Tabuk',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 194,
            ),

            array(
                'id' => 3318,
                'name' => 'Al ?udud ash Shamaliyah',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 194,
            ),

            array(
                'id' => 3319,
                'name' => 'Jizan',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 194,
            ),

            array(
                'id' => 3320,
                'name' => 'Najran',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 194,
            ),

            array(
                'id' => 3321,
                'name' => 'Al Ba?ah',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 194,
            ),

            array(
                'id' => 3322,
                'name' => 'Al Jawf',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 194,
            ),

            array(
                'id' => 3323,
                'name' => '?Asir',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 194,
            ),

            array(
                'id' => 3324,
                'name' => 'Central',
                'uuid' => $faker->uuid , 'abbr' => 'CE',
                'country_id' => 195,
            ),

            array(
                'id' => 3325,
                'name' => 'Choiseul',
                'uuid' => $faker->uuid , 'abbr' => 'CH',
                'country_id' => 195,
            ),

            array(
                'id' => 3326,
                'name' => 'Capital Territory (Honiara)',
                'uuid' => $faker->uuid , 'abbr' => 'CT',
                'country_id' => 195,
            ),

            array(
                'id' => 3327,
                'name' => 'Guadalcanal',
                'uuid' => $faker->uuid , 'abbr' => 'GU',
                'country_id' => 195,
            ),

            array(
                'id' => 3328,
                'name' => 'Isabel',
                'uuid' => $faker->uuid , 'abbr' => 'IS',
                'country_id' => 195,
            ),

            array(
                'id' => 3329,
                'name' => 'Makira',
                'uuid' => $faker->uuid , 'abbr' => 'MK',
                'country_id' => 195,
            ),

            array(
                'id' => 3330,
                'name' => 'Malaita',
                'uuid' => $faker->uuid , 'abbr' => 'ML',
                'country_id' => 195,
            ),

            array(
                'id' => 3331,
                'name' => 'Rennell and Bellona',
                'uuid' => $faker->uuid , 'abbr' => 'RB',
                'country_id' => 195,
            ),

            array(
                'id' => 3332,
                'name' => 'Temotu',
                'uuid' => $faker->uuid , 'abbr' => 'TE',
                'country_id' => 195,
            ),

            array(
                'id' => 3333,
                'name' => 'Western',
                'uuid' => $faker->uuid , 'abbr' => 'WE',
                'country_id' => 195,
            ),

            array(
                'id' => 3334,
                'name' => 'Anse aux Pins',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 196,
            ),

            array(
                'id' => 3335,
                'name' => 'Anse Boileau',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 196,
            ),

            array(
                'id' => 3336,
                'name' => 'Anse Étoile',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 196,
            ),

            array(
                'id' => 3337,
                'name' => 'Anse Louis',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 196,
            ),

            array(
                'id' => 3338,
                'name' => 'Anse Royale',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 196,
            ),

            array(
                'id' => 3339,
                'name' => 'Baie Lazare',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 196,
            ),

            array(
                'id' => 3340,
                'name' => 'Baie Sainte Anne',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 196,
            ),

            array(
                'id' => 3341,
                'name' => 'Beau Vallon',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 196,
            ),

            array(
                'id' => 3342,
                'name' => 'Bel Air',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 196,
            ),

            array(
                'id' => 3343,
                'name' => 'Bel Ombre',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 196,
            ),

            array(
                'id' => 3344,
                'name' => 'Cascade',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 196,
            ),

            array(
                'id' => 3345,
                'name' => 'Glacis',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 196,
            ),

            array(
                'id' => 3346,
                'name' => 'Grand\' Anse (Mahé)',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 196,
            ),

            array(
                'id' => 3347,
                'name' => 'Grand\' Anse (Praslin)',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 196,
            ),

            array(
                'id' => 3348,
                'name' => 'La Digue',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 196,
            ),

            array(
                'id' => 3349,
                'name' => 'La Rivière Anglaise',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 196,
            ),

            array(
                'id' => 3350,
                'name' => 'Mont Buxton',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 196,
            ),

            array(
                'id' => 3351,
                'name' => 'Mont Fleuri',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 196,
            ),

            array(
                'id' => 3352,
                'name' => 'Plaisance',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 196,
            ),

            array(
                'id' => 3353,
                'name' => 'Pointe La Rue',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 196,
            ),

            array(
                'id' => 3354,
                'name' => 'Port Glaud',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 196,
            ),

            array(
                'id' => 3355,
                'name' => 'Saint Louis',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 196,
            ),

            array(
                'id' => 3356,
                'name' => 'Takamaka',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 196,
            ),

            array(
                'id' => 3357,
                'name' => 'Ash Shamaliyah',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 197,
            ),

            array(
                'id' => 3358,
                'name' => 'Shamal Darfur',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 197,
            ),

            array(
                'id' => 3359,
                'name' => 'Al Khartum',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 197,
            ),

            array(
                'id' => 3360,
                'name' => 'An Nil',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 197,
            ),

            array(
                'id' => 3361,
                'name' => 'Kassala',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 197,
            ),

            array(
                'id' => 3362,
                'name' => 'Al Qa?arif',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 197,
            ),

            array(
                'id' => 3363,
                'name' => 'Al Jazirah',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 197,
            ),

            array(
                'id' => 3364,
                'name' => 'An Nil al Abya?',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 197,
            ),

            array(
                'id' => 3365,
                'name' => 'Shamal Kurdufan',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 197,
            ),

            array(
                'id' => 3366,
                'name' => 'Gharb Kurdufan',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 197,
            ),

            array(
                'id' => 3367,
                'name' => 'Janub Darfur',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 197,
            ),

            array(
                'id' => 3368,
                'name' => 'Gharb Darfur',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 197,
            ),

            array(
                'id' => 3369,
                'name' => 'Janub Kurdufan',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 197,
            ),

            array(
                'id' => 3370,
                'name' => 'Gharb Ba?r al Ghazal',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 197,
            ),

            array(
                'id' => 3371,
                'name' => 'Shamal Ba?r al Ghazal',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 197,
            ),

            array(
                'id' => 3372,
                'name' => 'Gharb al Istiwa\'iyah',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 197,
            ),

            array(
                'id' => 3373,
                'name' => 'Ba?r al Jabal',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 197,
            ),

            array(
                'id' => 3374,
                'name' => 'Al Bu?ayrat',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 197,
            ),

            array(
                'id' => 3375,
                'name' => 'Sharq al Istiwa\'iyah',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 197,
            ),

            array(
                'id' => 3376,
                'name' => 'Junqali',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 197,
            ),

            array(
                'id' => 3377,
                'name' => 'Warab',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 197,
            ),

            array(
                'id' => 3378,
                'name' => 'Al Wa?dah',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 197,
            ),

            array(
                'id' => 3379,
                'name' => 'A?ali an Nil',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 197,
            ),

            array(
                'id' => 3380,
                'name' => 'An Nil al Azraq',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 197,
            ),

            array(
                'id' => 3381,
                'name' => 'Sinnar',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 197,
            ),

            array(
                'id' => 3382,
                'name' => 'Al Ba?r al A?mar',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 197,
            ),

            array(
                'id' => 3383,
                'name' => 'Stockholms län',
                'uuid' => $faker->uuid , 'abbr' => 'AB',
                'country_id' => 198,
            ),

            array(
                'id' => 3384,
                'name' => 'Västerbottens län',
                'uuid' => $faker->uuid , 'abbr' => 'AC',
                'country_id' => 198,
            ),

            array(
                'id' => 3385,
                'name' => 'Norrbottens län',
                'uuid' => $faker->uuid , 'abbr' => 'BD',
                'country_id' => 198,
            ),

            array(
                'id' => 3386,
                'name' => 'Uppsala län',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 198,
            ),

            array(
                'id' => 3387,
                'name' => 'Södermanlands län',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 198,
            ),

            array(
                'id' => 3388,
                'name' => 'Östergötlands län',
                'uuid' => $faker->uuid , 'abbr' => 'E',
                'country_id' => 198,
            ),

            array(
                'id' => 3389,
                'name' => 'Jönköpings län',
                'uuid' => $faker->uuid , 'abbr' => 'F',
                'country_id' => 198,
            ),

            array(
                'id' => 3390,
                'name' => 'Kronobergs län',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 198,
            ),

            array(
                'id' => 3391,
                'name' => 'Kalmar län',
                'uuid' => $faker->uuid , 'abbr' => 'H',
                'country_id' => 198,
            ),

            array(
                'id' => 3392,
                'name' => 'Gotlands län',
                'uuid' => $faker->uuid , 'abbr' => 'I',
                'country_id' => 198,
            ),

            array(
                'id' => 3393,
                'name' => 'Blekinge län',
                'uuid' => $faker->uuid , 'abbr' => 'K',
                'country_id' => 198,
            ),

            array(
                'id' => 3394,
                'name' => 'Skåne län',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 198,
            ),

            array(
                'id' => 3395,
                'name' => 'Hallands län',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 198,
            ),

            array(
                'id' => 3396,
                'name' => 'Västra Götalands län',
                'uuid' => $faker->uuid , 'abbr' => 'O',
                'country_id' => 198,
            ),

            array(
                'id' => 3397,
                'name' => 'Värmlands län',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 198,
            ),

            array(
                'id' => 3398,
                'name' => 'Örebro län',
                'uuid' => $faker->uuid , 'abbr' => 'T',
                'country_id' => 198,
            ),

            array(
                'id' => 3399,
                'name' => 'Västmanlands län',
                'uuid' => $faker->uuid , 'abbr' => 'U',
                'country_id' => 198,
            ),

            array(
                'id' => 3400,
                'name' => 'Dalarnas län',
                'uuid' => $faker->uuid , 'abbr' => 'W',
                'country_id' => 198,
            ),

            array(
                'id' => 3401,
                'name' => 'Gävleborgs län',
                'uuid' => $faker->uuid , 'abbr' => 'X',
                'country_id' => 198,
            ),

            array(
                'id' => 3402,
                'name' => 'Västernorrlands län',
                'uuid' => $faker->uuid , 'abbr' => 'Y',
                'country_id' => 198,
            ),

            array(
                'id' => 3403,
                'name' => 'Jämtlands län',
                'uuid' => $faker->uuid , 'abbr' => 'Z',
                'country_id' => 198,
            ),

            array(
                'id' => 3404,
                'name' => 'Central Singapore',
                'uuid' => $faker->uuid , 'abbr' => 'SG-01',
                'country_id' => 199,
            ),

            array(
                'id' => 3405,
                'name' => 'North East',
                'uuid' => $faker->uuid , 'abbr' => 'SG-02',
                'country_id' => 199,
            ),

            array(
                'id' => 3406,
                'name' => 'North West',
                'uuid' => $faker->uuid , 'abbr' => 'SG-03',
                'country_id' => 199,
            ),

            array(
                'id' => 3407,
                'name' => 'South East',
                'uuid' => $faker->uuid , 'abbr' => 'SG-04',
                'country_id' => 199,
            ),

            array(
                'id' => 3408,
                'name' => 'South West',
                'uuid' => $faker->uuid , 'abbr' => 'SG-05',
                'country_id' => 199,
            ),

            array(
                'id' => 3409,
                'name' => 'Ascension',
                'uuid' => $faker->uuid , 'abbr' => 'AC',
                'country_id' => 200,
            ),

            array(
                'id' => 3410,
                'name' => 'Saint Helena',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 200,
            ),

            array(
                'id' => 3411,
                'name' => 'Tristan da Cunha',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 200,
            ),

            array(
                'id' => 3412,
                'name' => 'Ajdovšcina',
                'uuid' => $faker->uuid , 'abbr' => 001,
                'country_id' => 201,
            ),

            array(
                'id' => 3413,
                'name' => 'Beltinci',
                'uuid' => $faker->uuid , 'abbr' => 002,
                'country_id' => 201,
            ),

            array(
                'id' => 3414,
                'name' => 'Bled',
                'uuid' => $faker->uuid , 'abbr' => 003,
                'country_id' => 201,
            ),

            array(
                'id' => 3415,
                'name' => 'Bohinj',
                'uuid' => $faker->uuid , 'abbr' => 004,
                'country_id' => 201,
            ),

            array(
                'id' => 3416,
                'name' => 'Borovnica',
                'uuid' => $faker->uuid , 'abbr' => 005,
                'country_id' => 201,
            ),

            array(
                'id' => 3417,
                'name' => 'Bovec',
                'uuid' => $faker->uuid , 'abbr' => 006,
                'country_id' => 201,
            ),

            array(
                'id' => 3418,
                'name' => 'Brda',
                'uuid' => $faker->uuid , 'abbr' => 007,
                'country_id' => 201,
            ),

            array(
                'id' => 3419,
                'name' => 'Brezovica',
                'uuid' => $faker->uuid , 'abbr' =>800,
                'country_id' => 201,
            ),

            array(
                'id' => 3420,
                'name' => 'Brežice',
                'uuid' => $faker->uuid , 'abbr' =>900,
                'country_id' => 201,
            ),

            array(
                'id' => 3421,
                'name' => 'Tišina',
                'uuid' => $faker->uuid , 'abbr' => 010,
                'country_id' => 201,
            ),

            array(
                'id' => 3422,
                'name' => 'Celje',
                'uuid' => $faker->uuid , 'abbr' => 011,
                'country_id' => 201,
            ),

            array(
                'id' => 3423,
                'name' => 'Cerklje na Gorenjskem',
                'uuid' => $faker->uuid , 'abbr' => 012,
                'country_id' => 201,
            ),

            array(
                'id' => 3424,
                'name' => 'Cerknica',
                'uuid' => $faker->uuid , 'abbr' => 013,
                'country_id' => 201,
            ),

            array(
                'id' => 3425,
                'name' => 'Cerkno',
                'uuid' => $faker->uuid , 'abbr' => 014,
                'country_id' => 201,
            ),

            array(
                'id' => 3426,
                'name' => 'Crenšovci',
                'uuid' => $faker->uuid , 'abbr' => 015,
                'country_id' => 201,
            ),

            array(
                'id' => 3427,
                'name' => 'Crna na Koroškem',
                'uuid' => $faker->uuid , 'abbr' => 016,
                'country_id' => 201,
            ),

            array(
                'id' => 3428,
                'name' => 'Crnomelj',
                'uuid' => $faker->uuid , 'abbr' => 017,
                'country_id' => 201,
            ),

            array(
                'id' => 3429,
                'name' => 'Destrnik',
                'uuid' => $faker->uuid , 'abbr' =>180,
                'country_id' => 201,
            ),

            array(
                'id' => 3430,
                'name' => 'Divaca',
                'uuid' => $faker->uuid , 'abbr' =>190,
                'country_id' => 201,
            ),

            array(
                'id' => 3431,
                'name' => 'Dobrepolje',
                'uuid' => $faker->uuid , 'abbr' => 020,
                'country_id' => 201,
            ),

            array(
                'id' => 3432,
                'name' => 'Dobrova-Polhov Gradec',
                'uuid' => $faker->uuid , 'abbr' => 021,
                'country_id' => 201,
            ),

            array(
                'id' => 3433,
                'name' => 'Dol pri Ljubljani',
                'uuid' => $faker->uuid , 'abbr' => 022,
                'country_id' => 201,
            ),

            array(
                'id' => 3434,
                'name' => 'Domžale',
                'uuid' => $faker->uuid , 'abbr' => 023,
                'country_id' => 201,
            ),

            array(
                'id' => 3435,
                'name' => 'Dornava',
                'uuid' => $faker->uuid , 'abbr' => 024,
                'country_id' => 201,
            ),

            array(
                'id' => 3436,
                'name' => 'Dravograd',
                'uuid' => $faker->uuid , 'abbr' => 025,
                'country_id' => 201,
            ),

            array(
                'id' => 3437,
                'name' => 'Duplek',
                'uuid' => $faker->uuid , 'abbr' => 026,
                'country_id' => 201,
            ),

            array(
                'id' => 3438,
                'name' => 'Gorenja vas-Poljane',
                'uuid' => $faker->uuid , 'abbr' => 027,
                'country_id' => 201,
            ),

            array(
                'id' => 3439,
                'name' => 'Gorišnica',
                'uuid' => $faker->uuid , 'abbr' =>290,
                'country_id' => 201,
            ),

            array(
                'id' => 3440,
                'name' => 'Gornja Radgona',
                'uuid' => $faker->uuid , 'abbr' =>280,
                'country_id' => 201,
            ),

            array(
                'id' => 3441,
                'name' => 'Gornji Grad',
                'uuid' => $faker->uuid , 'abbr' => 030,
                'country_id' => 201,
            ),

            array(
                'id' => 3442,
                'name' => 'Gornji Petrovci',
                'uuid' => $faker->uuid , 'abbr' => 031,
                'country_id' => 201,
            ),

            array(
                'id' => 3443,
                'name' => 'Grosuplje',
                'uuid' => $faker->uuid , 'abbr' => 032,
                'country_id' => 201,
            ),

            array(
                'id' => 3444,
                'name' => 'Šalovci',
                'uuid' => $faker->uuid , 'abbr' => 033,
                'country_id' => 201,
            ),

            array(
                'id' => 3445,
                'name' => 'Hrastnik',
                'uuid' => $faker->uuid , 'abbr' => 034,
                'country_id' => 201,
            ),

            array(
                'id' => 3446,
                'name' => 'Hrpelje-Kozina',
                'uuid' => $faker->uuid , 'abbr' => 035,
                'country_id' => 201,
            ),

            array(
                'id' => 3447,
                'name' => 'Idrija',
                'uuid' => $faker->uuid , 'abbr' => 036,
                'country_id' => 201,
            ),

            array(
                'id' => 3448,
                'name' => 'Ig',
                'uuid' => $faker->uuid , 'abbr' => 037,
                'country_id' => 201,
            ),

            array(
                'id' => 3449,
                'name' => 'Ilirska Bistrica',
                'uuid' => $faker->uuid , 'abbr' =>380,
                'country_id' => 201,
            ),

            array(
                'id' => 3450,
                'name' => 'Ivancna Gorica',
                'uuid' => $faker->uuid , 'abbr' =>39,
                'country_id' => 201,
            ),

            array(
                'id' => 3451,
                'name' => 'Izola/Isola',
                'uuid' => $faker->uuid , 'abbr' => 040,
                'country_id' => 201,
            ),

            array(
                'id' => 3452,
                'name' => 'Jesenice',
                'uuid' => $faker->uuid , 'abbr' => 041,
                'country_id' => 201,
            ),

            array(
                'id' => 3453,
                'name' => 'Juršinci',
                'uuid' => $faker->uuid , 'abbr' => 042,
                'country_id' => 201,
            ),

            array(
                'id' => 3454,
                'name' => 'Kamnik',
                'uuid' => $faker->uuid , 'abbr' => 043,
                'country_id' => 201,
            ),

            array(
                'id' => 3455,
                'name' => 'Kanal',
                'uuid' => $faker->uuid , 'abbr' => 044,
                'country_id' => 201,
            ),

            array(
                'id' => 3456,
                'name' => 'Kidricevo',
                'uuid' => $faker->uuid , 'abbr' => 045,
                'country_id' => 201,
            ),

            array(
                'id' => 3457,
                'name' => 'Kobarid',
                'uuid' => $faker->uuid , 'abbr' => 046,
                'country_id' => 201,
            ),

            array(
                'id' => 3458,
                'name' => 'Kobilje',
                'uuid' => $faker->uuid , 'abbr' => 047,
                'country_id' => 201,
            ),

            array(
                'id' => 3459,
                'name' => 'Kocevje',
                'uuid' => $faker->uuid , 'abbr' =>480,
                'country_id' => 201,
            ),

            array(
                'id' => 3460,
                'name' => 'Komen',
                'uuid' => $faker->uuid , 'abbr' =>49,
                'country_id' => 201,
            ),

            array(
                'id' => 3461,
                'name' => 'Koper/Capodistria',
                'uuid' => $faker->uuid , 'abbr' => 050,
                'country_id' => 201,
            ),

            array(
                'id' => 3462,
                'name' => 'Kozje',
                'uuid' => $faker->uuid , 'abbr' => 051,
                'country_id' => 201,
            ),

            array(
                'id' => 3463,
                'name' => 'Kranj',
                'uuid' => $faker->uuid , 'abbr' => 052,
                'country_id' => 201,
            ),

            array(
                'id' => 3464,
                'name' => 'Kranjska Gora',
                'uuid' => $faker->uuid , 'abbr' => 053,
                'country_id' => 201,
            ),

            array(
                'id' => 3465,
                'name' => 'Krško',
                'uuid' => $faker->uuid , 'abbr' => 054,
                'country_id' => 201,
            ),

            array(
                'id' => 3466,
                'name' => 'Kungota',
                'uuid' => $faker->uuid , 'abbr' => 055,
                'country_id' => 201,
            ),

            array(
                'id' => 3467,
                'name' => 'Kuzma',
                'uuid' => $faker->uuid , 'abbr' => 056,
                'country_id' => 201,
            ),

            array(
                'id' => 3468,
                'name' => 'Laško',
                'uuid' => $faker->uuid , 'abbr' => 057,
                'country_id' => 201,
            ),

            array(
                'id' => 3469,
                'name' => 'Lenart',
                'uuid' => $faker->uuid , 'abbr' =>580,
                'country_id' => 201,
            ),

            array(
                'id' => 3470,
                'name' => 'Lendava/Lendva',
                'uuid' => $faker->uuid , 'abbr' =>59,
                'country_id' => 201,
            ),

            array(
                'id' => 3471,
                'name' => 'Litija',
                'uuid' => $faker->uuid , 'abbr' => 060,
                'country_id' => 201,
            ),

            array(
                'id' => 3472,
                'name' => 'Ljubljana',
                'uuid' => $faker->uuid , 'abbr' => 061,
                'country_id' => 201,
            ),

            array(
                'id' => 3473,
                'name' => 'Ljubno',
                'uuid' => $faker->uuid , 'abbr' => 062,
                'country_id' => 201,
            ),

            array(
                'id' => 3474,
                'name' => 'Ljutomer',
                'uuid' => $faker->uuid , 'abbr' => 063,
                'country_id' => 201,
            ),

            array(
                'id' => 3475,
                'name' => 'Logatec',
                'uuid' => $faker->uuid , 'abbr' => 064,
                'country_id' => 201,
            ),

            array(
                'id' => 3476,
                'name' => 'Loška dolina',
                'uuid' => $faker->uuid , 'abbr' => 065,
                'country_id' => 201,
            ),

            array(
                'id' => 3477,
                'name' => 'Loški Potok',
                'uuid' => $faker->uuid , 'abbr' => 066,
                'country_id' => 201,
            ),

            array(
                'id' => 3478,
                'name' => 'Luce',
                'uuid' => $faker->uuid , 'abbr' => 067,
                'country_id' => 201,
            ),

            array(
                'id' => 3479,
                'name' => 'Lukovica',
                'uuid' => $faker->uuid , 'abbr' =>680,
                'country_id' => 201,
            ),

            array(
                'id' => 3480,
                'name' => 'Majšperk',
                'uuid' => $faker->uuid , 'abbr' =>69,
                'country_id' => 201,
            ),

            array(
                'id' => 3481,
                'name' => 'Maribor',
                'uuid' => $faker->uuid , 'abbr' => 070,
                'country_id' => 201,
            ),

            array(
                'id' => 3482,
                'name' => 'Medvode',
                'uuid' => $faker->uuid , 'abbr' => 071,
                'country_id' => 201,
            ),

            array(
                'id' => 3483,
                'name' => 'Mengeš',
                'uuid' => $faker->uuid , 'abbr' => 072,
                'country_id' => 201,
            ),

            array(
                'id' => 3484,
                'name' => 'Metlika',
                'uuid' => $faker->uuid , 'abbr' => 073,
                'country_id' => 201,
            ),

            array(
                'id' => 3485,
                'name' => 'Mežica',
                'uuid' => $faker->uuid , 'abbr' => 074,
                'country_id' => 201,
            ),

            array(
                'id' => 3486,
                'name' => 'Miren-Kostanjevica',
                'uuid' => $faker->uuid , 'abbr' => 075,
                'country_id' => 201,
            ),

            array(
                'id' => 3487,
                'name' => 'Mislinja',
                'uuid' => $faker->uuid , 'abbr' => 076,
                'country_id' => 201,
            ),

            array(
                'id' => 3488,
                'name' => 'Moravce',
                'uuid' => $faker->uuid , 'abbr' => 077,
                'country_id' => 201,
            ),

            array(
                'id' => 3489,
                'name' => 'Moravske Toplice',
                'uuid' => $faker->uuid , 'abbr' =>780,
                'country_id' => 201,
            ),

            array(
                'id' => 3490,
                'name' => 'Mozirje',
                'uuid' => $faker->uuid , 'abbr' =>790,
                'country_id' => 201,
            ),

            array(
                'id' => 3491,
                'name' => 'Murska Sobota',
                'uuid' => $faker->uuid , 'abbr' =>80,
                'country_id' => 201,
            ),

            array(
                'id' => 3492,
                'name' => 'Muta',
                'uuid' => $faker->uuid , 'abbr' =>81,
                'country_id' => 201,
            ),

            array(
                'id' => 3493,
                'name' => 'Naklo',
                'uuid' => $faker->uuid , 'abbr' =>82,
                'country_id' => 201,
            ),

            array(
                'id' => 3494,
                'name' => 'Nazarje',
                'uuid' => $faker->uuid , 'abbr' =>83,
                'country_id' => 201,
            ),

            array(
                'id' => 3495,
                'name' => 'Nova Gorica',
                'uuid' => $faker->uuid , 'abbr' =>84,
                'country_id' => 201,
            ),

            array(
                'id' => 3496,
                'name' => 'Novo mesto',
                'uuid' => $faker->uuid , 'abbr' =>85,
                'country_id' => 201,
            ),

            array(
                'id' => 3497,
                'name' => 'Odranci',
                'uuid' => $faker->uuid , 'abbr' =>86,
                'country_id' => 201,
            ),

            array(
                'id' => 3498,
                'name' => 'Ormož',
                'uuid' => $faker->uuid , 'abbr' =>87,
                'country_id' => 201,
            ),

            array(
                'id' => 3499,
                'name' => 'Osilnica',
                'uuid' => $faker->uuid , 'abbr' =>88,
                'country_id' => 201,
            ),

            array(
                'id' => 3500,
                'name' => 'Pesnica',
                'uuid' => $faker->uuid , 'abbr' =>89,
                'country_id' => 201,
            ),

            array(
                'id' => 3501,
                'name' => 'Piran/Pirano',
                'uuid' => $faker->uuid , 'abbr' =>90,
                'country_id' => 201,
            ),

            array(
                'id' => 3502,
                'name' => 'Pivka',
                'uuid' => $faker->uuid , 'abbr' =>91,
                'country_id' => 201,
            ),

            array(
                'id' => 3503,
                'name' => 'Podcetrtek',
                'uuid' => $faker->uuid , 'abbr' =>92,
                'country_id' => 201,
            ),

            array(
                'id' => 3504,
                'name' => 'Podvelka',
                'uuid' => $faker->uuid , 'abbr' =>93,
                'country_id' => 201,
            ),

            array(
                'id' => 3505,
                'name' => 'Postojna',
                'uuid' => $faker->uuid , 'abbr' =>94,
                'country_id' => 201,
            ),

            array(
                'id' => 3506,
                'name' => 'Preddvor',
                'uuid' => $faker->uuid , 'abbr' =>95,
                'country_id' => 201,
            ),

            array(
                'id' => 3507,
                'name' => 'Ptuj',
                'uuid' => $faker->uuid , 'abbr' =>96,
                'country_id' => 201,
            ),

            array(
                'id' => 3508,
                'name' => 'Puconci',
                'uuid' => $faker->uuid , 'abbr' =>97,
                'country_id' => 201,
            ),

            array(
                'id' => 3509,
                'name' => 'Race-Fram',
                'uuid' => $faker->uuid , 'abbr' =>98,
                'country_id' => 201,
            ),

            array(
                'id' => 3510,
                'name' => 'Radece',
                'uuid' => $faker->uuid , 'abbr' =>99,
                'country_id' => 201,
            ),

            array(
                'id' => 3511,
                'name' => 'Radenci',
                'uuid' => $faker->uuid , 'abbr' => 100,
                'country_id' => 201,
            ),

            array(
                'id' => 3512,
                'name' => 'Radlje ob Dravi',
                'uuid' => $faker->uuid , 'abbr' => 101,
                'country_id' => 201,
            ),

            array(
                'id' => 3513,
                'name' => 'Radovljica',
                'uuid' => $faker->uuid , 'abbr' => 102,
                'country_id' => 201,
            ),

            array(
                'id' => 3514,
                'name' => 'Ravne na Koroškem',
                'uuid' => $faker->uuid , 'abbr' => 103,
                'country_id' => 201,
            ),

            array(
                'id' => 3515,
                'name' => 'Ribnica',
                'uuid' => $faker->uuid , 'abbr' => 104,
                'country_id' => 201,
            ),

            array(
                'id' => 3516,
                'name' => 'Rogašovci',
                'uuid' => $faker->uuid , 'abbr' => 105,
                'country_id' => 201,
            ),

            array(
                'id' => 3517,
                'name' => 'Rogaška Slatina',
                'uuid' => $faker->uuid , 'abbr' => 106,
                'country_id' => 201,
            ),

            array(
                'id' => 3518,
                'name' => 'Rogatec',
                'uuid' => $faker->uuid , 'abbr' => 107,
                'country_id' => 201,
            ),

            array(
                'id' => 3519,
                'name' => 'Ruše',
                'uuid' => $faker->uuid , 'abbr' => 108,
                'country_id' => 201,
            ),

            array(
                'id' => 3520,
                'name' => 'Semic',
                'uuid' => $faker->uuid , 'abbr' => 109,
                'country_id' => 201,
            ),

            array(
                'id' => 3521,
                'name' => 'Sevnica',
                'uuid' => $faker->uuid , 'abbr' => 110,
                'country_id' => 201,
            ),

            array(
                'id' => 3522,
                'name' => 'Sežana',
                'uuid' => $faker->uuid , 'abbr' => 111,
                'country_id' => 201,
            ),

            array(
                'id' => 3523,
                'name' => 'Slovenj Gradec',
                'uuid' => $faker->uuid , 'abbr' => 112,
                'country_id' => 201,
            ),

            array(
                'id' => 3524,
                'name' => 'Slovenska Bistrica',
                'uuid' => $faker->uuid , 'abbr' => 113,
                'country_id' => 201,
            ),

            array(
                'id' => 3525,
                'name' => 'Slovenske Konjice',
                'uuid' => $faker->uuid , 'abbr' => 114,
                'country_id' => 201,
            ),

            array(
                'id' => 3526,
                'name' => 'Starše',
                'uuid' => $faker->uuid , 'abbr' => 115,
                'country_id' => 201,
            ),

            array(
                'id' => 3527,
                'name' => 'Sveti Jurij',
                'uuid' => $faker->uuid , 'abbr' => 116,
                'country_id' => 201,
            ),

            array(
                'id' => 3528,
                'name' => 'Šencur',
                'uuid' => $faker->uuid , 'abbr' => 117,
                'country_id' => 201,
            ),

            array(
                'id' => 3529,
                'name' => 'Šentilj',
                'uuid' => $faker->uuid , 'abbr' => 118,
                'country_id' => 201,
            ),

            array(
                'id' => 3530,
                'name' => 'Šentjernej',
                'uuid' => $faker->uuid , 'abbr' => 119,
                'country_id' => 201,
            ),

            array(
                'id' => 3531,
                'name' => 'Šentjur pri Celju',
                'uuid' => $faker->uuid , 'abbr' => 120,
                'country_id' => 201,
            ),

            array(
                'id' => 3532,
                'name' => 'Škocjan',
                'uuid' => $faker->uuid , 'abbr' => 121,
                'country_id' => 201,
            ),

            array(
                'id' => 3533,
                'name' => 'Škofja Loka',
                'uuid' => $faker->uuid , 'abbr' => 122,
                'country_id' => 201,
            ),

            array(
                'id' => 3534,
                'name' => 'Škofljica',
                'uuid' => $faker->uuid , 'abbr' => 123,
                'country_id' => 201,
            ),

            array(
                'id' => 3535,
                'name' => 'Šmarje pri Jelšah',
                'uuid' => $faker->uuid , 'abbr' => 124,
                'country_id' => 201,
            ),

            array(
                'id' => 3536,
                'name' => 'Šmartno ob Paki',
                'uuid' => $faker->uuid , 'abbr' => 125,
                'country_id' => 201,
            ),

            array(
                'id' => 3537,
                'name' => 'Šoštanj',
                'uuid' => $faker->uuid , 'abbr' => 126,
                'country_id' => 201,
            ),

            array(
                'id' => 3538,
                'name' => 'Štore',
                'uuid' => $faker->uuid , 'abbr' => 127,
                'country_id' => 201,
            ),

            array(
                'id' => 3539,
                'name' => 'Tolmin',
                'uuid' => $faker->uuid , 'abbr' => 128,
                'country_id' => 201,
            ),

            array(
                'id' => 3540,
                'name' => 'Trbovlje',
                'uuid' => $faker->uuid , 'abbr' => 129,
                'country_id' => 201,
            ),

            array(
                'id' => 3541,
                'name' => 'Trebnje',
                'uuid' => $faker->uuid , 'abbr' => 130,
                'country_id' => 201,
            ),

            array(
                'id' => 3542,
                'name' => 'Tržic',
                'uuid' => $faker->uuid , 'abbr' => 131,
                'country_id' => 201,
            ),

            array(
                'id' => 3543,
                'name' => 'Turnišce',
                'uuid' => $faker->uuid , 'abbr' => 132,
                'country_id' => 201,
            ),

            array(
                'id' => 3544,
                'name' => 'Velenje',
                'uuid' => $faker->uuid , 'abbr' => 133,
                'country_id' => 201,
            ),

            array(
                'id' => 3545,
                'name' => 'Velike Lašce',
                'uuid' => $faker->uuid , 'abbr' => 134,
                'country_id' => 201,
            ),

            array(
                'id' => 3546,
                'name' => 'Videm',
                'uuid' => $faker->uuid , 'abbr' => 135,
                'country_id' => 201,
            ),

            array(
                'id' => 3547,
                'name' => 'Vipava',
                'uuid' => $faker->uuid , 'abbr' => 136,
                'country_id' => 201,
            ),

            array(
                'id' => 3548,
                'name' => 'Vitanje',
                'uuid' => $faker->uuid , 'abbr' => 137,
                'country_id' => 201,
            ),

            array(
                'id' => 3549,
                'name' => 'Vodice',
                'uuid' => $faker->uuid , 'abbr' => 138,
                'country_id' => 201,
            ),

            array(
                'id' => 3550,
                'name' => 'Vojnik',
                'uuid' => $faker->uuid , 'abbr' => 139,
                'country_id' => 201,
            ),

            array(
                'id' => 3551,
                'name' => 'Vrhnika',
                'uuid' => $faker->uuid , 'abbr' => 140,
                'country_id' => 201,
            ),

            array(
                'id' => 3552,
                'name' => 'Vuzenica',
                'uuid' => $faker->uuid , 'abbr' => 141,
                'country_id' => 201,
            ),

            array(
                'id' => 3553,
                'name' => 'Zagorje ob Savi',
                'uuid' => $faker->uuid , 'abbr' => 142,
                'country_id' => 201,
            ),

            array(
                'id' => 3554,
                'name' => 'Zavrc',
                'uuid' => $faker->uuid , 'abbr' => 143,
                'country_id' => 201,
            ),

            array(
                'id' => 3555,
                'name' => 'Zrece',
                'uuid' => $faker->uuid , 'abbr' => 144,
                'country_id' => 201,
            ),

            array(
                'id' => 3556,
                'name' => 'Železniki',
                'uuid' => $faker->uuid , 'abbr' => 146,
                'country_id' => 201,
            ),

            array(
                'id' => 3557,
                'name' => 'Žiri',
                'uuid' => $faker->uuid , 'abbr' => 147,
                'country_id' => 201,
            ),

            array(
                'id' => 3558,
                'name' => 'Benedikt',
                'uuid' => $faker->uuid , 'abbr' => 148,
                'country_id' => 201,
            ),

            array(
                'id' => 3559,
                'name' => 'Bistrica ob Sotli',
                'uuid' => $faker->uuid , 'abbr' => 149,
                'country_id' => 201,
            ),

            array(
                'id' => 3560,
                'name' => 'Bloke',
                'uuid' => $faker->uuid , 'abbr' => 150,
                'country_id' => 201,
            ),

            array(
                'id' => 3561,
                'name' => 'Braslovce',
                'uuid' => $faker->uuid , 'abbr' => 151,
                'country_id' => 201,
            ),

            array(
                'id' => 3562,
                'name' => 'Cankova',
                'uuid' => $faker->uuid , 'abbr' => 152,
                'country_id' => 201,
            ),

            array(
                'id' => 3563,
                'name' => 'Cerkvenjak',
                'uuid' => $faker->uuid , 'abbr' => 153,
                'country_id' => 201,
            ),

            array(
                'id' => 3564,
                'name' => 'Dobje',
                'uuid' => $faker->uuid , 'abbr' => 154,
                'country_id' => 201,
            ),

            array(
                'id' => 3565,
                'name' => 'Dobrna',
                'uuid' => $faker->uuid , 'abbr' => 155,
                'country_id' => 201,
            ),

            array(
                'id' => 3566,
                'name' => 'Dobrovnik/Dobronak',
                'uuid' => $faker->uuid , 'abbr' => 156,
                'country_id' => 201,
            ),

            array(
                'id' => 3567,
                'name' => 'Dolenjske Toplice',
                'uuid' => $faker->uuid , 'abbr' => 157,
                'country_id' => 201,
            ),

            array(
                'id' => 3568,
                'name' => 'Grad',
                'uuid' => $faker->uuid , 'abbr' => 158,
                'country_id' => 201,
            ),

            array(
                'id' => 3569,
                'name' => 'Hajdina',
                'uuid' => $faker->uuid , 'abbr' => 159,
                'country_id' => 201,
            ),

            array(
                'id' => 3570,
                'name' => 'Hoce-Slivnica',
                'uuid' => $faker->uuid , 'abbr' => 160,
                'country_id' => 201,
            ),

            array(
                'id' => 3571,
                'name' => 'Hodoš/Hodos',
                'uuid' => $faker->uuid , 'abbr' => 161,
                'country_id' => 201,
            ),

            array(
                'id' => 3572,
                'name' => 'Horjul',
                'uuid' => $faker->uuid , 'abbr' => 162,
                'country_id' => 201,
            ),

            array(
                'id' => 3573,
                'name' => 'Jezersko',
                'uuid' => $faker->uuid , 'abbr' => 163,
                'country_id' => 201,
            ),

            array(
                'id' => 3574,
                'name' => 'Komenda',
                'uuid' => $faker->uuid , 'abbr' => 164,
                'country_id' => 201,
            ),

            array(
                'id' => 3575,
                'name' => 'Kostel',
                'uuid' => $faker->uuid , 'abbr' => 165,
                'country_id' => 201,
            ),

            array(
                'id' => 3576,
                'name' => 'Križevci',
                'uuid' => $faker->uuid , 'abbr' => 166,
                'country_id' => 201,
            ),

            array(
                'id' => 3577,
                'name' => 'Lovrenc na Pohorju',
                'uuid' => $faker->uuid , 'abbr' => 167,
                'country_id' => 201,
            ),

            array(
                'id' => 3578,
                'name' => 'Markovci',
                'uuid' => $faker->uuid , 'abbr' => 168,
                'country_id' => 201,
            ),

            array(
                'id' => 3579,
                'name' => 'Miklavž na Dravskem polju',
                'uuid' => $faker->uuid , 'abbr' => 169,
                'country_id' => 201,
            ),

            array(
                'id' => 3580,
                'name' => 'Mirna Pec',
                'uuid' => $faker->uuid , 'abbr' => 170,
                'country_id' => 201,
            ),

            array(
                'id' => 3581,
                'name' => 'Oplotnica',
                'uuid' => $faker->uuid , 'abbr' => 171,
                'country_id' => 201,
            ),

            array(
                'id' => 3582,
                'name' => 'Podlehnik',
                'uuid' => $faker->uuid , 'abbr' => 172,
                'country_id' => 201,
            ),

            array(
                'id' => 3583,
                'name' => 'Polzela',
                'uuid' => $faker->uuid , 'abbr' => 173,
                'country_id' => 201,
            ),

            array(
                'id' => 3584,
                'name' => 'Prebold',
                'uuid' => $faker->uuid , 'abbr' => 174,
                'country_id' => 201,
            ),

            array(
                'id' => 3585,
                'name' => 'Prevalje',
                'uuid' => $faker->uuid , 'abbr' => 175,
                'country_id' => 201,
            ),

            array(
                'id' => 3586,
                'name' => 'Razkrižje',
                'uuid' => $faker->uuid , 'abbr' => 176,
                'country_id' => 201,
            ),

            array(
                'id' => 3587,
                'name' => 'Ribnica na Pohorju',
                'uuid' => $faker->uuid , 'abbr' => 177,
                'country_id' => 201,
            ),

            array(
                'id' => 3588,
                'name' => 'Selnica ob Dravi',
                'uuid' => $faker->uuid , 'abbr' => 178,
                'country_id' => 201,
            ),

            array(
                'id' => 3589,
                'name' => 'Sodražica',
                'uuid' => $faker->uuid , 'abbr' => 179,
                'country_id' => 201,
            ),

            array(
                'id' => 3590,
                'name' => 'Solcava',
                'uuid' => $faker->uuid , 'abbr' => 180,
                'country_id' => 201,
            ),

            array(
                'id' => 3591,
                'name' => 'Sveta Ana',
                'uuid' => $faker->uuid , 'abbr' => 181,
                'country_id' => 201,
            ),

            array(
                'id' => 3592,
                'name' => 'Sveti Andraž v Slovenskih goricah',
                'uuid' => $faker->uuid , 'abbr' => 182,
                'country_id' => 201,
            ),

            array(
                'id' => 3593,
                'name' => 'Šempeter-Vrtojba',
                'uuid' => $faker->uuid , 'abbr' => 183,
                'country_id' => 201,
            ),

            array(
                'id' => 3594,
                'name' => 'Tabor',
                'uuid' => $faker->uuid , 'abbr' => 184,
                'country_id' => 201,
            ),

            array(
                'id' => 3595,
                'name' => 'Trnovska vas',
                'uuid' => $faker->uuid , 'abbr' => 185,
                'country_id' => 201,
            ),

            array(
                'id' => 3596,
                'name' => 'Trzin',
                'uuid' => $faker->uuid , 'abbr' => 186,
                'country_id' => 201,
            ),

            array(
                'id' => 3597,
                'name' => 'Velika Polana',
                'uuid' => $faker->uuid , 'abbr' => 187,
                'country_id' => 201,
            ),

            array(
                'id' => 3598,
                'name' => 'Veržej',
                'uuid' => $faker->uuid , 'abbr' => 188,
                'country_id' => 201,
            ),

            array(
                'id' => 3599,
                'name' => 'Vransko',
                'uuid' => $faker->uuid , 'abbr' => 189,
                'country_id' => 201,
            ),

            array(
                'id' => 3600,
                'name' => 'Žalec',
                'uuid' => $faker->uuid , 'abbr' => 190,
                'country_id' => 201,
            ),

            array(
                'id' => 3601,
                'name' => 'Žetale',
                'uuid' => $faker->uuid , 'abbr' => 191,
                'country_id' => 201,
            ),

            array(
                'id' => 3602,
                'name' => 'Žirovnica',
                'uuid' => $faker->uuid , 'abbr' => 192,
                'country_id' => 201,
            ),

            array(
                'id' => 3603,
                'name' => 'Žužemberk',
                'uuid' => $faker->uuid , 'abbr' => 193,
                'country_id' => 201,
            ),

            array(
                'id' => 3604,
                'name' => 'Šmartno pri Litiji',
                'uuid' => $faker->uuid , 'abbr' => 194,
                'country_id' => 201,
            ),

            array(
                'id' => 3605,
                'name' => 'Banskobystrický kraj',
                'uuid' => $faker->uuid , 'abbr' => 'BC',
                'country_id' => 203,
            ),

            array(
                'id' => 3606,
                'name' => 'Bratislavský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'BL',
                'country_id' => 203,
            ),

            array(
                'id' => 3607,
                'name' => 'Košický kraj',
                'uuid' => $faker->uuid , 'abbr' => 'KI',
                'country_id' => 203,
            ),

            array(
                'id' => 3608,
                'name' => 'Nitriansky kraj',
                'uuid' => $faker->uuid , 'abbr' => 'NI',
                'country_id' => 203,
            ),

            array(
                'id' => 3609,
                'name' => 'Prešovský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'PV',
                'country_id' => 203,
            ),

            array(
                'id' => 3610,
                'name' => 'Trnavský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 203,
            ),

            array(
                'id' => 3611,
                'name' => 'Trenciansky kraj',
                'uuid' => $faker->uuid , 'abbr' => 'TC',
                'country_id' => 203,
            ),

            array(
                'id' => 3612,
                'name' => 'Žilinský kraj',
                'uuid' => $faker->uuid , 'abbr' => 'ZI',
                'country_id' => 203,
            ),

            array(
                'id' => 3613,
                'name' => 'Eastern',
                'uuid' => $faker->uuid , 'abbr' => 'E',
                'country_id' => 204,
            ),

            array(
                'id' => 3614,
                'name' => 'Northern',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 204,
            ),

            array(
                'id' => 3615,
                'name' => 'Southern',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 204,
            ),

            array(
                'id' => 3616,
                'name' => 'Western Area (Freetown)',
                'uuid' => $faker->uuid , 'abbr' => 'W',
                'country_id' => 204,
            ),

            array(
                'id' => 3617,
                'name' => 'Acquaviva',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 205,
            ),

            array(
                'id' => 3618,
                'name' => 'Chiesanuova',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 205,
            ),

            array(
                'id' => 3619,
                'name' => 'Domagnano',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 205,
            ),

            array(
                'id' => 3620,
                'name' => 'Faetano',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 205,
            ),

            array(
                'id' => 3621,
                'name' => 'Fiorentino',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 205,
            ),

            array(
                'id' => 3622,
                'name' => 'Borgo Maggiore',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 205,
            ),

            array(
                'id' => 3623,
                'name' => 'San Marino',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 205,
            ),

            array(
                'id' => 3624,
                'name' => 'Montegiardino',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 205,
            ),

            array(
                'id' => 3625,
                'name' => 'Serravalle',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 205,
            ),

            array(
                'id' => 3626,
                'name' => 'Diourbel',
                'uuid' => $faker->uuid , 'abbr' => 'DB',
                'country_id' => 206,
            ),

            array(
                'id' => 3627,
                'name' => 'Dakar',
                'uuid' => $faker->uuid , 'abbr' => 'DK',
                'country_id' => 206,
            ),

            array(
                'id' => 3628,
                'name' => 'Fatick',
                'uuid' => $faker->uuid , 'abbr' => 'FK',
                'country_id' => 206,
            ),

            array(
                'id' => 3629,
                'name' => 'Kolda',
                'uuid' => $faker->uuid , 'abbr' => 'KD',
                'country_id' => 206,
            ),

            array(
                'id' => 3630,
                'name' => 'Kaolack',
                'uuid' => $faker->uuid , 'abbr' => 'KL',
                'country_id' => 206,
            ),

            array(
                'id' => 3631,
                'name' => 'Louga',
                'uuid' => $faker->uuid , 'abbr' => 'LG',
                'country_id' => 206,
            ),

            array(
                'id' => 3632,
                'name' => 'Matam',
                'uuid' => $faker->uuid , 'abbr' => 'MT',
                'country_id' => 206,
            ),

            array(
                'id' => 3633,
                'name' => 'Saint-Louis',
                'uuid' => $faker->uuid , 'abbr' => 'SL',
                'country_id' => 206,
            ),

            array(
                'id' => 3634,
                'name' => 'Tambacounda',
                'uuid' => $faker->uuid , 'abbr' => 'TC',
                'country_id' => 206,
            ),

            array(
                'id' => 3635,
                'name' => 'Thiès',
                'uuid' => $faker->uuid , 'abbr' => 'TH',
                'country_id' => 206,
            ),

            array(
                'id' => 3636,
                'name' => 'Ziguinchor',
                'uuid' => $faker->uuid , 'abbr' => 'ZG',
                'country_id' => 206,
            ),

            array(
                'id' => 3637,
                'name' => 'Awdal',
                'uuid' => $faker->uuid , 'abbr' => 'AW',
                'country_id' => 207,
            ),

            array(
                'id' => 3638,
                'name' => 'Bakool',
                'uuid' => $faker->uuid , 'abbr' => 'BK',
                'country_id' => 207,
            ),

            array(
                'id' => 3639,
                'name' => 'Banaadir',
                'uuid' => $faker->uuid , 'abbr' => 'BN',
                'country_id' => 207,
            ),

            array(
                'id' => 3640,
                'name' => 'Bari',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 207,
            ),

            array(
                'id' => 3641,
                'name' => 'Bay',
                'uuid' => $faker->uuid , 'abbr' => 'BY',
                'country_id' => 207,
            ),

            array(
                'id' => 3642,
                'name' => 'Galguduud',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 207,
            ),

            array(
                'id' => 3643,
                'name' => 'Gedo',
                'uuid' => $faker->uuid , 'abbr' => 'GE',
                'country_id' => 207,
            ),

            array(
                'id' => 3644,
                'name' => 'Hiiraan',
                'uuid' => $faker->uuid , 'abbr' => 'HI',
                'country_id' => 207,
            ),

            array(
                'id' => 3645,
                'name' => 'Jubbada Dhexe',
                'uuid' => $faker->uuid , 'abbr' => 'JD',
                'country_id' => 207,
            ),

            array(
                'id' => 3646,
                'name' => 'Jubbada Hoose',
                'uuid' => $faker->uuid , 'abbr' => 'JH',
                'country_id' => 207,
            ),

            array(
                'id' => 3647,
                'name' => 'Mudug',
                'uuid' => $faker->uuid , 'abbr' => 'MU',
                'country_id' => 207,
            ),

            array(
                'id' => 3648,
                'name' => 'Nugaal',
                'uuid' => $faker->uuid , 'abbr' => 'NU',
                'country_id' => 207,
            ),

            array(
                'id' => 3649,
                'name' => 'Sanaag',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 207,
            ),

            array(
                'id' => 3650,
                'name' => 'Shabeellaha Dhexe',
                'uuid' => $faker->uuid , 'abbr' => 'SD',
                'country_id' => 207,
            ),

            array(
                'id' => 3651,
                'name' => 'Shabeellaha Hoose',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 207,
            ),

            array(
                'id' => 3652,
                'name' => 'Sool',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 207,
            ),

            array(
                'id' => 3653,
                'name' => 'Togdheer',
                'uuid' => $faker->uuid , 'abbr' => 'TO',
                'country_id' => 207,
            ),

            array(
                'id' => 3654,
                'name' => 'Woqooyi Galbeed',
                'uuid' => $faker->uuid , 'abbr' => 'WO',
                'country_id' => 207,
            ),

            array(
                'id' => 3655,
                'name' => 'Brokopondo',
                'uuid' => $faker->uuid , 'abbr' => 'BR',
                'country_id' => 208,
            ),

            array(
                'id' => 3656,
                'name' => 'Commewijne',
                'uuid' => $faker->uuid , 'abbr' => 'CM',
                'country_id' => 208,
            ),

            array(
                'id' => 3657,
                'name' => 'Coronie',
                'uuid' => $faker->uuid , 'abbr' => 'CR',
                'country_id' => 208,
            ),

            array(
                'id' => 3658,
                'name' => 'Marowijne',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 208,
            ),

            array(
                'id' => 3659,
                'name' => 'Nickerie',
                'uuid' => $faker->uuid , 'abbr' => 'NI',
                'country_id' => 208,
            ),

            array(
                'id' => 3660,
                'name' => 'Paramaribo',
                'uuid' => $faker->uuid , 'abbr' => 'PM',
                'country_id' => 208,
            ),

            array(
                'id' => 3661,
                'name' => 'Para',
                'uuid' => $faker->uuid , 'abbr' => 'PR',
                'country_id' => 208,
            ),

            array(
                'id' => 3662,
                'name' => 'Saramacca',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 208,
            ),

            array(
                'id' => 3663,
                'name' => 'Sipaliwini',
                'uuid' => $faker->uuid , 'abbr' => 'SI',
                'country_id' => 208,
            ),

            array(
                'id' => 3664,
                'name' => 'Wanica',
                'uuid' => $faker->uuid , 'abbr' => 'WA',
                'country_id' => 208,
            ),

            array(
                'id' => 3665,
                'name' => 'Príncipe',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 210,
            ),

            array(
                'id' => 3666,
                'name' => 'São Tomé',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 210,
            ),

            array(
                'id' => 3667,
                'name' => 'Ahuachapán',
                'uuid' => $faker->uuid , 'abbr' => 'AH',
                'country_id' => 211,
            ),

            array(
                'id' => 3668,
                'name' => 'Cabañas',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 211,
            ),

            array(
                'id' => 3669,
                'name' => 'Chalatenango',
                'uuid' => $faker->uuid , 'abbr' => 'CH',
                'country_id' => 211,
            ),

            array(
                'id' => 3670,
                'name' => 'Cuscatlán',
                'uuid' => $faker->uuid , 'abbr' => 'CU',
                'country_id' => 211,
            ),

            array(
                'id' => 3671,
                'name' => 'La Libertad',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 211,
            ),

            array(
                'id' => 3672,
                'name' => 'Morazán',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 211,
            ),

            array(
                'id' => 3673,
                'name' => 'La Paz',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 211,
            ),

            array(
                'id' => 3674,
                'name' => 'Santa Ana',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 211,
            ),

            array(
                'id' => 3675,
                'name' => 'San Miguel',
                'uuid' => $faker->uuid , 'abbr' => 'SM',
                'country_id' => 211,
            ),

            array(
                'id' => 3676,
                'name' => 'Sonsonate',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 211,
            ),

            array(
                'id' => 3677,
                'name' => 'San Salvador',
                'uuid' => $faker->uuid , 'abbr' => 'SS',
                'country_id' => 211,
            ),

            array(
                'id' => 3678,
                'name' => 'San Vicente',
                'uuid' => $faker->uuid , 'abbr' => 'SV',
                'country_id' => 211,
            ),

            array(
                'id' => 3679,
                'name' => 'La Unión',
                'uuid' => $faker->uuid , 'abbr' => 'UN',
                'country_id' => 211,
            ),

            array(
                'id' => 3680,
                'name' => 'Usulután',
                'uuid' => $faker->uuid , 'abbr' => 'US',
                'country_id' => 211,
            ),

            array(
                'id' => 3681,
                'name' => 'Dimashq',
                'uuid' => $faker->uuid , 'abbr' => 'DI',
                'country_id' => 213,
            ),

            array(
                'id' => 3682,
                'name' => 'Dar?a',
                'uuid' => $faker->uuid , 'abbr' => 'DR',
                'country_id' => 213,
            ),

            array(
                'id' => 3683,
                'name' => 'Dayr az Zawr',
                'uuid' => $faker->uuid , 'abbr' => 'DY',
                'country_id' => 213,
            ),

            array(
                'id' => 3684,
                'name' => 'Al ?asakah',
                'uuid' => $faker->uuid , 'abbr' => 'HA',
                'country_id' => 213,
            ),

            array(
                'id' => 3685,
                'name' => '?ims',
                'uuid' => $faker->uuid , 'abbr' => 'HI',
                'country_id' => 213,
            ),

            array(
                'id' => 3686,
                'name' => '?alab',
                'uuid' => $faker->uuid , 'abbr' => 'HL',
                'country_id' => 213,
            ),

            array(
                'id' => 3687,
                'name' => '?amah',
                'uuid' => $faker->uuid , 'abbr' => 'HM',
                'country_id' => 213,
            ),

            array(
                'id' => 3688,
                'name' => 'Idlib',
                'uuid' => $faker->uuid , 'abbr' => 'ID',
                'country_id' => 213,
            ),

            array(
                'id' => 3689,
                'name' => 'Al Ladhiqiyah',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 213,
            ),

            array(
                'id' => 3690,
                'name' => 'Al Qunaytirah',
                'uuid' => $faker->uuid , 'abbr' => 'QU',
                'country_id' => 213,
            ),

            array(
                'id' => 3691,
                'name' => 'Ar Raqqah',
                'uuid' => $faker->uuid , 'abbr' => 'RA',
                'country_id' => 213,
            ),

            array(
                'id' => 3692,
                'name' => 'Rif Dimashq',
                'uuid' => $faker->uuid , 'abbr' => 'RD',
                'country_id' => 213,
            ),

            array(
                'id' => 3693,
                'name' => 'As Suwayda\'',
                'uuid' => $faker->uuid , 'abbr' => 'SU',
                'country_id' => 213,
            ),

            array(
                'id' => 3694,
                'name' => 'Tartus',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 213,
            ),

            array(
                'id' => 3695,
                'name' => 'Hhohho',
                'uuid' => $faker->uuid , 'abbr' => 'HH',
                'country_id' => 214,
            ),

            array(
                'id' => 3696,
                'name' => 'Lubombo',
                'uuid' => $faker->uuid , 'abbr' => 'LU',
                'country_id' => 214,
            ),

            array(
                'id' => 3697,
                'name' => 'Manzini',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 214,
            ),

            array(
                'id' => 3698,
                'name' => 'Shiselweni',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 214,
            ),

            array(
                'id' => 3699,
                'name' => 'Batha',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 216,
            ),

            array(
                'id' => 3700,
                'name' => 'Borkou-Ennedi-Tibesti',
                'uuid' => $faker->uuid , 'abbr' => 'BET',
                'country_id' => 216,
            ),

            array(
                'id' => 3701,
                'name' => 'Chari-Baguirmi',
                'uuid' => $faker->uuid , 'abbr' => 'CB',
                'country_id' => 216,
            ),

            array(
                'id' => 3702,
                'name' => 'Guéra',
                'uuid' => $faker->uuid , 'abbr' => 'GR',
                'country_id' => 216,
            ),

            array(
                'id' => 3703,
                'name' => 'Hadjer Lamis',
                'uuid' => $faker->uuid , 'abbr' => 'HL',
                'country_id' => 216,
            ),

            array(
                'id' => 3704,
                'name' => 'Kanem',
                'uuid' => $faker->uuid , 'abbr' => 'KA',
                'country_id' => 216,
            ),

            array(
                'id' => 3705,
                'name' => 'Lac',
                'uuid' => $faker->uuid , 'abbr' => 'LC',
                'country_id' => 216,
            ),

            array(
                'id' => 3706,
                'name' => 'Logone-Occidental',
                'uuid' => $faker->uuid , 'abbr' => 'LO',
                'country_id' => 216,
            ),

            array(
                'id' => 3707,
                'name' => 'Logone-Oriental',
                'uuid' => $faker->uuid , 'abbr' => 'LR',
                'country_id' => 216,
            ),

            array(
                'id' => 3708,
                'name' => 'Mandoul',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 216,
            ),

            array(
                'id' => 3709,
                'name' => 'Moyen-Chari',
                'uuid' => $faker->uuid , 'abbr' => 'MC',
                'country_id' => 216,
            ),

            array(
                'id' => 3710,
                'name' => 'Mayo-Kébbi-Est',
                'uuid' => $faker->uuid , 'abbr' => 'ME',
                'country_id' => 216,
            ),

            array(
                'id' => 3711,
                'name' => 'Mayo-Kébbi-Ouest',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 216,
            ),

            array(
                'id' => 3712,
                'name' => 'Ndjamena',
                'uuid' => $faker->uuid , 'abbr' => 'ND',
                'country_id' => 216,
            ),

            array(
                'id' => 3713,
                'name' => 'Ouaddaï',
                'uuid' => $faker->uuid , 'abbr' => 'OD',
                'country_id' => 216,
            ),

            array(
                'id' => 3714,
                'name' => 'Salamat',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 216,
            ),

            array(
                'id' => 3715,
                'name' => 'Tandjilé',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 216,
            ),

            array(
                'id' => 3716,
                'name' => 'Wadi Fira',
                'uuid' => $faker->uuid , 'abbr' => 'WF',
                'country_id' => 216,
            ),

            array(
                'id' => 3717,
                'name' => 'Ile Saint-Paul et Ile Amsterdam',
                'uuid' => $faker->uuid , 'abbr' => 'X1~',
                'country_id' => 217,
            ),

            array(
                'id' => 3718,
                'name' => 'Crozet Islands',
                'uuid' => $faker->uuid , 'abbr' => 'X2~',
                'country_id' => 217,
            ),

            array(
                'id' => 3719,
                'name' => 'Kerguelen',
                'uuid' => $faker->uuid , 'abbr' => 'X3~',
                'country_id' => 217,
            ),

            array(
                'id' => 3720,
                'name' => 'Iles Eparses',
                'uuid' => $faker->uuid , 'abbr' => 'X4~',
                'country_id' => 217,
            ),

            array(
                'id' => 3721,
                'name' => 'Centre',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 218,
            ),

            array(
                'id' => 3722,
                'name' => 'Kara',
                'uuid' => $faker->uuid , 'abbr' => 'K',
                'country_id' => 218,
            ),

            array(
                'id' => 3723,
                'name' => 'Maritime (Région)',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 218,
            ),

            array(
                'id' => 3724,
                'name' => 'Plateaux',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 218,
            ),

            array(
                'id' => 3725,
                'name' => 'Savannes',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 218,
            ),

            array(
                'id' => 3726,
                'name' => 'Krung Thep Maha Nakhon [Bangkok]',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 219,
            ),

            array(
                'id' => 3727,
                'name' => 'Samut Prakan',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 219,
            ),

            array(
                'id' => 3728,
                'name' => 'Nonthaburi',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 219,
            ),

            array(
                'id' => 3729,
                'name' => 'Pathum Thani',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 219,
            ),

            array(
                'id' => 3730,
                'name' => 'Phra Nakhon Si Ayutthaya',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 219,
            ),

            array(
                'id' => 3731,
                'name' => 'Ang Thong',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 219,
            ),

            array(
                'id' => 3732,
                'name' => 'Lop Buri',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 219,
            ),

            array(
                'id' => 3733,
                'name' => 'Sing Buri',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 219,
            ),

            array(
                'id' => 3734,
                'name' => 'Chai Nat',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 219,
            ),

            array(
                'id' => 3735,
                'name' => 'Saraburi',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 219,
            ),

            array(
                'id' => 3736,
                'name' => 'Chon Buri',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 219,
            ),

            array(
                'id' => 3737,
                'name' => 'Rayong',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 219,
            ),

            array(
                'id' => 3738,
                'name' => 'Chanthaburi',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 219,
            ),

            array(
                'id' => 3739,
                'name' => 'Trat',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 219,
            ),

            array(
                'id' => 3740,
                'name' => 'Chachoengsao',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 219,
            ),

            array(
                'id' => 3741,
                'name' => 'Prachin Buri',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 219,
            ),

            array(
                'id' => 3742,
                'name' => 'Nakhon Nayok',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 219,
            ),

            array(
                'id' => 3743,
                'name' => 'Sa Kaeo',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 219,
            ),

            array(
                'id' => 3744,
                'name' => 'Nakhon Ratchasima',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 219,
            ),

            array(
                'id' => 3745,
                'name' => 'Buri Ram',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 219,
            ),

            array(
                'id' => 3746,
                'name' => 'Surin',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 219,
            ),

            array(
                'id' => 3747,
                'name' => 'Si Sa Ket',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 219,
            ),

            array(
                'id' => 3748,
                'name' => 'Ubon Ratchathani',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 219,
            ),

            array(
                'id' => 3749,
                'name' => 'Yasothon',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 219,
            ),

            array(
                'id' => 3750,
                'name' => 'Chaiyaphum',
                'uuid' => $faker->uuid , 'abbr' => 36,
                'country_id' => 219,
            ),

            array(
                'id' => 3751,
                'name' => 'Amnat Charoen',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 219,
            ),

            array(
                'id' => 3752,
                'name' => 'Nong Bua Lam Phu',
                'uuid' => $faker->uuid , 'abbr' => 39,
                'country_id' => 219,
            ),

            array(
                'id' => 3753,
                'name' => 'Khon Kaen',
                'uuid' => $faker->uuid , 'abbr' => 40,
                'country_id' => 219,
            ),

            array(
                'id' => 3754,
                'name' => 'Udon Thani',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 219,
            ),

            array(
                'id' => 3755,
                'name' => 'Loei',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 219,
            ),

            array(
                'id' => 3756,
                'name' => 'Nong Khai',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 219,
            ),

            array(
                'id' => 3757,
                'name' => 'Maha Sarakham',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 219,
            ),

            array(
                'id' => 3758,
                'name' => 'Roi Et',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 219,
            ),

            array(
                'id' => 3759,
                'name' => 'Kalasin',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 219,
            ),

            array(
                'id' => 3760,
                'name' => 'Sakon Nakhon',
                'uuid' => $faker->uuid , 'abbr' => 47,
                'country_id' => 219,
            ),

            array(
                'id' => 3761,
                'name' => 'Nakhon Phanom',
                'uuid' => $faker->uuid , 'abbr' => 48,
                'country_id' => 219,
            ),

            array(
                'id' => 3762,
                'name' => 'Mukdahan',
                'uuid' => $faker->uuid , 'abbr' => 49,
                'country_id' => 219,
            ),

            array(
                'id' => 3763,
                'name' => 'Chiang Mai',
                'uuid' => $faker->uuid , 'abbr' => 50,
                'country_id' => 219,
            ),

            array(
                'id' => 3764,
                'name' => 'Lamphun',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 219,
            ),

            array(
                'id' => 3765,
                'name' => 'Lampang',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 219,
            ),

            array(
                'id' => 3766,
                'name' => 'Uttaradit',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 219,
            ),

            array(
                'id' => 3767,
                'name' => 'Phrae',
                'uuid' => $faker->uuid , 'abbr' => 54,
                'country_id' => 219,
            ),

            array(
                'id' => 3768,
                'name' => 'Nan',
                'uuid' => $faker->uuid , 'abbr' => 55,
                'country_id' => 219,
            ),

            array(
                'id' => 3769,
                'name' => 'Phayao',
                'uuid' => $faker->uuid , 'abbr' => 56,
                'country_id' => 219,
            ),

            array(
                'id' => 3770,
                'name' => 'Chiang Rai',
                'uuid' => $faker->uuid , 'abbr' => 57,
                'country_id' => 219,
            ),

            array(
                'id' => 3771,
                'name' => 'Mae Hong Son',
                'uuid' => $faker->uuid , 'abbr' => 58,
                'country_id' => 219,
            ),

            array(
                'id' => 3772,
                'name' => 'Nakhon Sawan',
                'uuid' => $faker->uuid , 'abbr' => 60,
                'country_id' => 219,
            ),

            array(
                'id' => 3773,
                'name' => 'Uthai Thani',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 219,
            ),

            array(
                'id' => 3774,
                'name' => 'Kamphaeng Phet',
                'uuid' => $faker->uuid , 'abbr' => 62,
                'country_id' => 219,
            ),

            array(
                'id' => 3775,
                'name' => 'Tak',
                'uuid' => $faker->uuid , 'abbr' => 63,
                'country_id' => 219,
            ),

            array(
                'id' => 3776,
                'name' => 'Sukhothai',
                'uuid' => $faker->uuid , 'abbr' => 64,
                'country_id' => 219,
            ),

            array(
                'id' => 3777,
                'name' => 'Phitsanulok',
                'uuid' => $faker->uuid , 'abbr' => 65,
                'country_id' => 219,
            ),

            array(
                'id' => 3778,
                'name' => 'Phichit',
                'uuid' => $faker->uuid , 'abbr' => 66,
                'country_id' => 219,
            ),

            array(
                'id' => 3779,
                'name' => 'Phetchabun',
                'uuid' => $faker->uuid , 'abbr' => 67,
                'country_id' => 219,
            ),

            array(
                'id' => 3780,
                'name' => 'Ratchaburi',
                'uuid' => $faker->uuid , 'abbr' => 70,
                'country_id' => 219,
            ),

            array(
                'id' => 3781,
                'name' => 'Kanchanaburi',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 219,
            ),

            array(
                'id' => 3782,
                'name' => 'Suphan Buri',
                'uuid' => $faker->uuid , 'abbr' => 72,
                'country_id' => 219,
            ),

            array(
                'id' => 3783,
                'name' => 'Nakhon Pathom',
                'uuid' => $faker->uuid , 'abbr' => 73,
                'country_id' => 219,
            ),

            array(
                'id' => 3784,
                'name' => 'Samut Sakhon',
                'uuid' => $faker->uuid , 'abbr' => 74,
                'country_id' => 219,
            ),

            array(
                'id' => 3785,
                'name' => 'Samut Songkhram',
                'uuid' => $faker->uuid , 'abbr' => 75,
                'country_id' => 219,
            ),

            array(
                'id' => 3786,
                'name' => 'Phetchaburi',
                'uuid' => $faker->uuid , 'abbr' => 76,
                'country_id' => 219,
            ),

            array(
                'id' => 3787,
                'name' => 'Prachuap Khiri Khan',
                'uuid' => $faker->uuid , 'abbr' => 77,
                'country_id' => 219,
            ),

            array(
                'id' => 3788,
                'name' => 'Nakhon Si Thammarat',
                'uuid' => $faker->uuid , 'abbr' => 80,
                'country_id' => 219,
            ),

            array(
                'id' => 3789,
                'name' => 'Krabi',
                'uuid' => $faker->uuid , 'abbr' => 81,
                'country_id' => 219,
            ),

            array(
                'id' => 3790,
                'name' => 'Phangnga',
                'uuid' => $faker->uuid , 'abbr' => 82,
                'country_id' => 219,
            ),

            array(
                'id' => 3791,
                'name' => 'Phuket',
                'uuid' => $faker->uuid , 'abbr' => 83,
                'country_id' => 219,
            ),

            array(
                'id' => 3792,
                'name' => 'Surat Thani',
                'uuid' => $faker->uuid , 'abbr' => 84,
                'country_id' => 219,
            ),

            array(
                'id' => 3793,
                'name' => 'Ranong',
                'uuid' => $faker->uuid , 'abbr' => 85,
                'country_id' => 219,
            ),

            array(
                'id' => 3794,
                'name' => 'Chumphon',
                'uuid' => $faker->uuid , 'abbr' => 86,
                'country_id' => 219,
            ),

            array(
                'id' => 3795,
                'name' => 'Songkhla',
                'uuid' => $faker->uuid , 'abbr' => 90,
                'country_id' => 219,
            ),

            array(
                'id' => 3796,
                'name' => 'Satun',
                'uuid' => $faker->uuid , 'abbr' => 91,
                'country_id' => 219,
            ),

            array(
                'id' => 3797,
                'name' => 'Trang',
                'uuid' => $faker->uuid , 'abbr' => 92,
                'country_id' => 219,
            ),

            array(
                'id' => 3798,
                'name' => 'Phatthalung',
                'uuid' => $faker->uuid , 'abbr' => 93,
                'country_id' => 219,
            ),

            array(
                'id' => 3799,
                'name' => 'Pattani',
                'uuid' => $faker->uuid , 'abbr' => 94,
                'country_id' => 219,
            ),

            array(
                'id' => 3800,
                'name' => 'Yala',
                'uuid' => $faker->uuid , 'abbr' => 95,
                'country_id' => 219,
            ),

            array(
                'id' => 3801,
                'name' => 'Narathiwat',
                'uuid' => $faker->uuid , 'abbr' => 96,
                'country_id' => 219,
            ),

            array(
                'id' => 3802,
                'name' => 'Phatthaya',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 219,
            ),

            array(
                'id' => 3803,
                'name' => 'Aileu',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 222,
            ),

            array(
                'id' => 3804,
                'name' => 'Ainaro',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 222,
            ),

            array(
                'id' => 3805,
                'name' => 'Baucau',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 222,
            ),

            array(
                'id' => 3806,
                'name' => 'Bobonaro',
                'uuid' => $faker->uuid , 'abbr' => 'BO',
                'country_id' => 222,
            ),

            array(
                'id' => 3807,
                'name' => 'Cova Lima',
                'uuid' => $faker->uuid , 'abbr' => 'CO',
                'country_id' => 222,
            ),

            array(
                'id' => 3808,
                'name' => 'Dili',
                'uuid' => $faker->uuid , 'abbr' => 'DI',
                'country_id' => 222,
            ),

            array(
                'id' => 3809,
                'name' => 'Ermera',
                'uuid' => $faker->uuid , 'abbr' => 'ER',
                'country_id' => 222,
            ),

            array(
                'id' => 3810,
                'name' => 'Lautem',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 222,
            ),

            array(
                'id' => 3811,
                'name' => 'Liquiça',
                'uuid' => $faker->uuid , 'abbr' => 'LI',
                'country_id' => 222,
            ),

            array(
                'id' => 3812,
                'name' => 'Manufahi',
                'uuid' => $faker->uuid , 'abbr' => 'MF',
                'country_id' => 222,
            ),

            array(
                'id' => 3813,
                'name' => 'Manatuto',
                'uuid' => $faker->uuid , 'abbr' => 'MT',
                'country_id' => 222,
            ),

            array(
                'id' => 3814,
                'name' => 'Oecussi',
                'uuid' => $faker->uuid , 'abbr' => 'OE',
                'country_id' => 222,
            ),

            array(
                'id' => 3815,
                'name' => 'Viqueque',
                'uuid' => $faker->uuid , 'abbr' => 'VI',
                'country_id' => 222,
            ),

            array(
                'id' => 3816,
                'name' => 'Ahal',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 223,
            ),

            array(
                'id' => 3817,
                'name' => 'Balkan',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 223,
            ),

            array(
                'id' => 3818,
                'name' => 'Dasoguz',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 223,
            ),

            array(
                'id' => 3819,
                'name' => 'Lebap',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 223,
            ),

            array(
                'id' => 3820,
                'name' => 'Mary',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 223,
            ),

            array(
                'id' => 3821,
                'name' => NULL,
                'uuid' => $faker->uuid , 'abbr' => 'X~',
                'country_id' => 223,
            ),

            array(
                'id' => 3822,
                'name' => 'Tunis',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 224,
            ),

            array(
                'id' => 3823,
                'name' => 'L\'Ariana',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 224,
            ),

            array(
                'id' => 3824,
                'name' => 'Ben Arous',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 224,
            ),

            array(
                'id' => 3825,
                'name' => 'La Manouba',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 224,
            ),

            array(
                'id' => 3826,
                'name' => 'Nabeul',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 224,
            ),

            array(
                'id' => 3827,
                'name' => 'Zaghouan',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 224,
            ),

            array(
                'id' => 3828,
                'name' => 'Bizerte',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 224,
            ),

            array(
                'id' => 3829,
                'name' => 'Béja',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 224,
            ),

            array(
                'id' => 3830,
                'name' => 'Jendouba',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 224,
            ),

            array(
                'id' => 3831,
                'name' => 'Le Kef',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 224,
            ),

            array(
                'id' => 3832,
                'name' => 'Siliana',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 224,
            ),

            array(
                'id' => 3833,
                'name' => 'Kairouan',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 224,
            ),

            array(
                'id' => 3834,
                'name' => 'Kasserine',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 224,
            ),

            array(
                'id' => 3835,
                'name' => 'Sidi Bouzid',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 224,
            ),

            array(
                'id' => 3836,
                'name' => 'Sousse',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 224,
            ),

            array(
                'id' => 3837,
                'name' => 'Monastir',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 224,
            ),

            array(
                'id' => 3838,
                'name' => 'Mahdia',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 224,
            ),

            array(
                'id' => 3839,
                'name' => 'Sfax',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 224,
            ),

            array(
                'id' => 3840,
                'name' => 'Gafsa',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 224,
            ),

            array(
                'id' => 3841,
                'name' => 'Tozeur',
                'uuid' => $faker->uuid , 'abbr' => 72,
                'country_id' => 224,
            ),

            array(
                'id' => 3842,
                'name' => 'Kebili',
                'uuid' => $faker->uuid , 'abbr' => 73,
                'country_id' => 224,
            ),

            array(
                'id' => 3843,
                'name' => 'Gabès',
                'uuid' => $faker->uuid , 'abbr' => 81,
                'country_id' => 224,
            ),

            array(
                'id' => 3844,
                'name' => 'Medenine',
                'uuid' => $faker->uuid , 'abbr' => 82,
                'country_id' => 224,
            ),

            array(
                'id' => 3845,
                'name' => 'Tataouine',
                'uuid' => $faker->uuid , 'abbr' => 83,
                'country_id' => 224,
            ),

            array(
                'id' => 3846,
                'name' => '\'Eua',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 225,
            ),

            array(
                'id' => 3847,
                'name' => 'Ha\'apai',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 225,
            ),

            array(
                'id' => 3848,
                'name' => 'Niuas',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 225,
            ),

            array(
                'id' => 3849,
                'name' => 'Tongatapu',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 225,
            ),

            array(
                'id' => 3850,
                'name' => 'Vava\'u',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 225,
            ),

            array(
                'id' => 3851,
                'name' => 'Adana',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 226,
            ),

            array(
                'id' => 3852,
                'name' => 'Adiyaman',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 226,
            ),

            array(
                'id' => 3853,
                'name' => 'Afyon',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 226,
            ),

            array(
                'id' => 3854,
                'name' => 'Agri',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 226,
            ),

            array(
                'id' => 3855,
                'name' => 'Amasya',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 226,
            ),

            array(
                'id' => 3856,
                'name' => 'Ankara',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 226,
            ),

            array(
                'id' => 3857,
                'name' => 'Antalya',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 226,
            ),

            array(
                'id' => 3858,
                'name' => 'Artvin',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 226,
            ),

            array(
                'id' => 3859,
                'name' => 'Aydin',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 226,
            ),

            array(
                'id' => 3860,
                'name' => 'Balikesir',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 226,
            ),

            array(
                'id' => 3861,
                'name' => 'Bilecik',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 226,
            ),

            array(
                'id' => 3862,
                'name' => 'Bingöl',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 226,
            ),

            array(
                'id' => 3863,
                'name' => 'Bitlis',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 226,
            ),

            array(
                'id' => 3864,
                'name' => 'Bolu',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 226,
            ),

            array(
                'id' => 3865,
                'name' => 'Burdur',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 226,
            ),

            array(
                'id' => 3866,
                'name' => 'Bursa',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 226,
            ),

            array(
                'id' => 3867,
                'name' => 'Çanakkale',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 226,
            ),

            array(
                'id' => 3868,
                'name' => 'Çankiri',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 226,
            ),

            array(
                'id' => 3869,
                'name' => 'Çorum',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 226,
            ),

            array(
                'id' => 3870,
                'name' => 'Denizli',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 226,
            ),

            array(
                'id' => 3871,
                'name' => 'Diyarbakir',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 226,
            ),

            array(
                'id' => 3872,
                'name' => 'Edirne',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 226,
            ),

            array(
                'id' => 3873,
                'name' => 'Elazig',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 226,
            ),

            array(
                'id' => 3874,
                'name' => 'Erzincan',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 226,
            ),

            array(
                'id' => 3875,
                'name' => 'Erzurum',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 226,
            ),

            array(
                'id' => 3876,
                'name' => 'Eskisehir',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 226,
            ),

            array(
                'id' => 3877,
                'name' => 'Gaziantep',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 226,
            ),

            array(
                'id' => 3878,
                'name' => 'Giresun',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 226,
            ),

            array(
                'id' => 3879,
                'name' => 'Gümüshane',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 226,
            ),

            array(
                'id' => 3880,
                'name' => 'Hakkâri',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 226,
            ),

            array(
                'id' => 3881,
                'name' => 'Hatay',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 226,
            ),

            array(
                'id' => 3882,
                'name' => 'Isparta',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 226,
            ),

            array(
                'id' => 3883,
                'name' => 'Içel',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 226,
            ),

            array(
                'id' => 3884,
                'name' => 'Istanbul',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 226,
            ),

            array(
                'id' => 3885,
                'name' => 'Izmir',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 226,
            ),

            array(
                'id' => 3886,
                'name' => 'Kars',
                'uuid' => $faker->uuid , 'abbr' => 36,
                'country_id' => 226,
            ),

            array(
                'id' => 3887,
                'name' => 'Kastamonu',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 226,
            ),

            array(
                'id' => 3888,
                'name' => 'Kayseri',
                'uuid' => $faker->uuid , 'abbr' => 38,
                'country_id' => 226,
            ),

            array(
                'id' => 3889,
                'name' => 'Kirklareli',
                'uuid' => $faker->uuid , 'abbr' => 39,
                'country_id' => 226,
            ),

            array(
                'id' => 3890,
                'name' => 'Kirsehir',
                'uuid' => $faker->uuid , 'abbr' => 40,
                'country_id' => 226,
            ),

            array(
                'id' => 3891,
                'name' => 'Kocaeli',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 226,
            ),

            array(
                'id' => 3892,
                'name' => 'Konya',
                'uuid' => $faker->uuid , 'abbr' => 42,
                'country_id' => 226,
            ),

            array(
                'id' => 3893,
                'name' => 'Kütahya',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 226,
            ),

            array(
                'id' => 3894,
                'name' => 'Malatya',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 226,
            ),

            array(
                'id' => 3895,
                'name' => 'Manisa',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 226,
            ),

            array(
                'id' => 3896,
                'name' => 'Kahramanmaras',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 226,
            ),

            array(
                'id' => 3897,
                'name' => 'Mardin',
                'uuid' => $faker->uuid , 'abbr' => 47,
                'country_id' => 226,
            ),

            array(
                'id' => 3898,
                'name' => 'Mugla',
                'uuid' => $faker->uuid , 'abbr' => 48,
                'country_id' => 226,
            ),

            array(
                'id' => 3899,
                'name' => 'Mus',
                'uuid' => $faker->uuid , 'abbr' => 49,
                'country_id' => 226,
            ),

            array(
                'id' => 3900,
                'name' => 'Nevsehir',
                'uuid' => $faker->uuid , 'abbr' => 50,
                'country_id' => 226,
            ),

            array(
                'id' => 3901,
                'name' => 'Nigde',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 226,
            ),

            array(
                'id' => 3902,
                'name' => 'Ordu',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 226,
            ),

            array(
                'id' => 3903,
                'name' => 'Rize',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 226,
            ),

            array(
                'id' => 3904,
                'name' => 'Sakarya',
                'uuid' => $faker->uuid , 'abbr' => 54,
                'country_id' => 226,
            ),

            array(
                'id' => 3905,
                'name' => 'Samsun',
                'uuid' => $faker->uuid , 'abbr' => 55,
                'country_id' => 226,
            ),

            array(
                'id' => 3906,
                'name' => 'Siirt',
                'uuid' => $faker->uuid , 'abbr' => 56,
                'country_id' => 226,
            ),

            array(
                'id' => 3907,
                'name' => 'Sinop',
                'uuid' => $faker->uuid , 'abbr' => 57,
                'country_id' => 226,
            ),

            array(
                'id' => 3908,
                'name' => 'Sivas',
                'uuid' => $faker->uuid , 'abbr' => 58,
                'country_id' => 226,
            ),

            array(
                'id' => 3909,
                'name' => 'Tekirdag',
                'uuid' => $faker->uuid , 'abbr' => 59,
                'country_id' => 226,
            ),

            array(
                'id' => 3910,
                'name' => 'Tokat',
                'uuid' => $faker->uuid , 'abbr' => 60,
                'country_id' => 226,
            ),

            array(
                'id' => 3911,
                'name' => 'Trabzon',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 226,
            ),

            array(
                'id' => 3912,
                'name' => 'Tunceli',
                'uuid' => $faker->uuid , 'abbr' => 62,
                'country_id' => 226,
            ),

            array(
                'id' => 3913,
                'name' => 'Sanliurfa',
                'uuid' => $faker->uuid , 'abbr' => 63,
                'country_id' => 226,
            ),

            array(
                'id' => 3914,
                'name' => 'Usak',
                'uuid' => $faker->uuid , 'abbr' => 64,
                'country_id' => 226,
            ),

            array(
                'id' => 3915,
                'name' => 'Van',
                'uuid' => $faker->uuid , 'abbr' => 65,
                'country_id' => 226,
            ),

            array(
                'id' => 3916,
                'name' => 'Yozgat',
                'uuid' => $faker->uuid , 'abbr' => 66,
                'country_id' => 226,
            ),

            array(
                'id' => 3917,
                'name' => 'Zonguldak',
                'uuid' => $faker->uuid , 'abbr' => 67,
                'country_id' => 226,
            ),

            array(
                'id' => 3918,
                'name' => 'Aksaray',
                'uuid' => $faker->uuid , 'abbr' => 68,
                'country_id' => 226,
            ),

            array(
                'id' => 3919,
                'name' => 'Bayburt',
                'uuid' => $faker->uuid , 'abbr' => 69,
                'country_id' => 226,
            ),

            array(
                'id' => 3920,
                'name' => 'Karaman',
                'uuid' => $faker->uuid , 'abbr' => 70,
                'country_id' => 226,
            ),

            array(
                'id' => 3921,
                'name' => 'Kirikkale',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 226,
            ),

            array(
                'id' => 3922,
                'name' => 'Batman',
                'uuid' => $faker->uuid , 'abbr' => 72,
                'country_id' => 226,
            ),

            array(
                'id' => 3923,
                'name' => 'Sirnak',
                'uuid' => $faker->uuid , 'abbr' => 73,
                'country_id' => 226,
            ),

            array(
                'id' => 3924,
                'name' => 'Bartin',
                'uuid' => $faker->uuid , 'abbr' => 74,
                'country_id' => 226,
            ),

            array(
                'id' => 3925,
                'name' => 'Ardahan',
                'uuid' => $faker->uuid , 'abbr' => 75,
                'country_id' => 226,
            ),

            array(
                'id' => 3926,
                'name' => 'Igdir',
                'uuid' => $faker->uuid , 'abbr' => 76,
                'country_id' => 226,
            ),

            array(
                'id' => 3927,
                'name' => 'Yalova',
                'uuid' => $faker->uuid , 'abbr' => 77,
                'country_id' => 226,
            ),

            array(
                'id' => 3928,
                'name' => 'Karabük',
                'uuid' => $faker->uuid , 'abbr' => 78,
                'country_id' => 226,
            ),

            array(
                'id' => 3929,
                'name' => 'Kilis',
                'uuid' => $faker->uuid , 'abbr' => 79,
                'country_id' => 226,
            ),

            array(
                'id' => 3930,
                'name' => 'Osmaniye',
                'uuid' => $faker->uuid , 'abbr' => 80,
                'country_id' => 226,
            ),

            array(
                'id' => 3931,
                'name' => 'Düzce',
                'uuid' => $faker->uuid , 'abbr' => 81,
                'country_id' => 226,
            ),

            array(
                'id' => 3932,
                'name' => 'Arima',
                'uuid' => $faker->uuid , 'abbr' => 'ARI',
                'country_id' => 227,
            ),

            array(
                'id' => 3933,
                'name' => 'Chaguanas',
                'uuid' => $faker->uuid , 'abbr' => 'CHA',
                'country_id' => 227,
            ),

            array(
                'id' => 3934,
                'name' => 'Couva-Tabaquite-Talparo',
                'uuid' => $faker->uuid , 'abbr' => 'CTT',
                'country_id' => 227,
            ),

            array(
                'id' => 3935,
                'name' => 'Diego Martin',
                'uuid' => $faker->uuid , 'abbr' => 'DMN',
                'country_id' => 227,
            ),

            array(
                'id' => 3936,
                'name' => 'Eastern Tobago',
                'uuid' => $faker->uuid , 'abbr' => 'ETO',
                'country_id' => 227,
            ),

            array(
                'id' => 3937,
                'name' => 'Penal-Debe',
                'uuid' => $faker->uuid , 'abbr' => 'PED',
                'country_id' => 227,
            ),

            array(
                'id' => 3938,
                'name' => 'Port of Spain',
                'uuid' => $faker->uuid , 'abbr' => 'POS',
                'country_id' => 227,
            ),

            array(
                'id' => 3939,
                'name' => 'Princes Town',
                'uuid' => $faker->uuid , 'abbr' => 'PRT',
                'country_id' => 227,
            ),

            array(
                'id' => 3940,
                'name' => 'Point Fortin',
                'uuid' => $faker->uuid , 'abbr' => 'PTF',
                'country_id' => 227,
            ),

            array(
                'id' => 3941,
                'name' => 'Rio Claro-Mayaro',
                'uuid' => $faker->uuid , 'abbr' => 'RCM',
                'country_id' => 227,
            ),

            array(
                'id' => 3942,
                'name' => 'San Fernando',
                'uuid' => $faker->uuid , 'abbr' => 'SFO',
                'country_id' => 227,
            ),

            array(
                'id' => 3943,
                'name' => 'Sangre Grande',
                'uuid' => $faker->uuid , 'abbr' => 'SGE',
                'country_id' => 227,
            ),

            array(
                'id' => 3944,
                'name' => 'Siparia',
                'uuid' => $faker->uuid , 'abbr' => 'SIP',
                'country_id' => 227,
            ),

            array(
                'id' => 3945,
                'name' => 'San Juan-Laventille',
                'uuid' => $faker->uuid , 'abbr' => 'SJL',
                'country_id' => 227,
            ),

            array(
                'id' => 3946,
                'name' => 'Tunapuna-Piarco',
                'uuid' => $faker->uuid , 'abbr' => 'TUP',
                'country_id' => 227,
            ),

            array(
                'id' => 3947,
                'name' => 'Western Tobago',
                'uuid' => $faker->uuid , 'abbr' => 'WTO',
                'country_id' => 227,
            ),

            array(
                'id' => 3948,
                'name' => 'Funafuti',
                'uuid' => $faker->uuid , 'abbr' => 'FUN',
                'country_id' => 228,
            ),

            array(
                'id' => 3949,
                'name' => 'Niutao',
                'uuid' => $faker->uuid , 'abbr' => 'NIT',
                'country_id' => 228,
            ),

            array(
                'id' => 3950,
                'name' => 'Nui',
                'uuid' => $faker->uuid , 'abbr' => 'NIU',
                'country_id' => 228,
            ),

            array(
                'id' => 3951,
                'name' => 'Nukufetau',
                'uuid' => $faker->uuid , 'abbr' => 'NKF',
                'country_id' => 228,
            ),

            array(
                'id' => 3952,
                'name' => 'Nukulaelae',
                'uuid' => $faker->uuid , 'abbr' => 'NKL',
                'country_id' => 228,
            ),

            array(
                'id' => 3953,
                'name' => 'Nanumea',
                'uuid' => $faker->uuid , 'abbr' => 'NMA',
                'country_id' => 228,
            ),

            array(
                'id' => 3954,
                'name' => 'Nanumanga',
                'uuid' => $faker->uuid , 'abbr' => 'NMG',
                'country_id' => 228,
            ),

            array(
                'id' => 3955,
                'name' => 'Vaitupu',
                'uuid' => $faker->uuid , 'abbr' => 'VAI',
                'country_id' => 228,
            ),

            array(
                'id' => 3956,
                'name' => 'Changhua',
                'uuid' => $faker->uuid , 'abbr' => 'CHA',
                'country_id' => 229,
            ),

            array(
                'id' => 3957,
                'name' => 'Chiayi Municipality',
                'uuid' => $faker->uuid , 'abbr' => 'CYI',
                'country_id' => 229,
            ),

            array(
                'id' => 3958,
                'name' => 'Chiayi',
                'uuid' => $faker->uuid , 'abbr' => 'CYQ',
                'country_id' => 229,
            ),

            array(
                'id' => 3959,
                'name' => 'Hsinchu',
                'uuid' => $faker->uuid , 'abbr' => 'HSQ',
                'country_id' => 229,
            ),

            array(
                'id' => 3960,
                'name' => 'Hsinchu Municipality',
                'uuid' => $faker->uuid , 'abbr' => 'HSZ',
                'country_id' => 229,
            ),

            array(
                'id' => 3961,
                'name' => 'Hualien',
                'uuid' => $faker->uuid , 'abbr' => 'HUA',
                'country_id' => 229,
            ),

            array(
                'id' => 3962,
                'name' => 'Ilan',
                'uuid' => $faker->uuid , 'abbr' => 'ILA',
                'country_id' => 229,
            ),

            array(
                'id' => 3963,
                'name' => 'Keelung Municipality',
                'uuid' => $faker->uuid , 'abbr' => 'KEE',
                'country_id' => 229,
            ),

            array(
                'id' => 3964,
                'name' => 'Kaohsiung Special Municipality',
                'uuid' => $faker->uuid , 'abbr' => 'KHH',
                'country_id' => 229,
            ),

            array(
                'id' => 3965,
                'name' => 'Kaohsiung',
                'uuid' => $faker->uuid , 'abbr' => 'KHQ',
                'country_id' => 229,
            ),

            array(
                'id' => 3966,
                'name' => 'Miaoli',
                'uuid' => $faker->uuid , 'abbr' => 'MIA',
                'country_id' => 229,
            ),

            array(
                'id' => 3967,
                'name' => 'Nantou',
                'uuid' => $faker->uuid , 'abbr' => 'NAN',
                'country_id' => 229,
            ),

            array(
                'id' => 3968,
                'name' => 'Penghu',
                'uuid' => $faker->uuid , 'abbr' => 'PEN',
                'country_id' => 229,
            ),

            array(
                'id' => 3969,
                'name' => 'Pingtung',
                'uuid' => $faker->uuid , 'abbr' => 'PIF',
                'country_id' => 229,
            ),

            array(
                'id' => 3970,
                'name' => 'Taoyuan',
                'uuid' => $faker->uuid , 'abbr' => 'TAO',
                'country_id' => 229,
            ),

            array(
                'id' => 3971,
                'name' => 'Tainan Municipality',
                'uuid' => $faker->uuid , 'abbr' => 'TNN',
                'country_id' => 229,
            ),

            array(
                'id' => 3972,
                'name' => 'Tainan',
                'uuid' => $faker->uuid , 'abbr' => 'TNQ',
                'country_id' => 229,
            ),

            array(
                'id' => 3973,
                'name' => 'Taipei Special Municipality',
                'uuid' => $faker->uuid , 'abbr' => 'TPE',
                'country_id' => 229,
            ),

            array(
                'id' => 3974,
                'name' => 'Taipei',
                'uuid' => $faker->uuid , 'abbr' => 'TPQ',
                'country_id' => 229,
            ),

            array(
                'id' => 3975,
                'name' => 'Taitung',
                'uuid' => $faker->uuid , 'abbr' => 'TTT',
                'country_id' => 229,
            ),

            array(
                'id' => 3976,
                'name' => 'Taichung Municipality',
                'uuid' => $faker->uuid , 'abbr' => 'TXG',
                'country_id' => 229,
            ),

            array(
                'id' => 3977,
                'name' => 'Taichung',
                'uuid' => $faker->uuid , 'abbr' => 'TXQ',
                'country_id' => 229,
            ),

            array(
                'id' => 3978,
                'name' => 'Yunlin',
                'uuid' => $faker->uuid , 'abbr' => 'YUN',
                'country_id' => 229,
            ),

            array(
                'id' => 3979,
                'name' => 'Arusha',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 230,
            ),

            array(
                'id' => 3980,
                'name' => 'Dar es Salaam',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 230,
            ),

            array(
                'id' => 3981,
                'name' => 'Dodoma',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 230,
            ),

            array(
                'id' => 3982,
                'name' => 'Iringa',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 230,
            ),

            array(
                'id' => 3983,
                'name' => 'Kagera',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 230,
            ),

            array(
                'id' => 3984,
                'name' => 'Kaskazini Pemba',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 230,
            ),

            array(
                'id' => 3985,
                'name' => 'Kaskazini Unguja',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 230,
            ),

            array(
                'id' => 3986,
                'name' => 'Kigoma',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 230,
            ),

            array(
                'id' => 3987,
                'name' => 'Kilimanjaro',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 230,
            ),

            array(
                'id' => 3988,
                'name' => 'Kusini Pemba',
                'uuid' => $faker->uuid , 'abbr' => 10,
                'country_id' => 230,
            ),

            array(
                'id' => 3989,
                'name' => 'Kusini Unguja',
                'uuid' => $faker->uuid , 'abbr' => 11,
                'country_id' => 230,
            ),

            array(
                'id' => 3990,
                'name' => 'Lindi',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 230,
            ),

            array(
                'id' => 3991,
                'name' => 'Mara',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 230,
            ),

            array(
                'id' => 3992,
                'name' => 'Mbeya',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 230,
            ),

            array(
                'id' => 3993,
                'name' => 'Mjini Magharibi',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 230,
            ),

            array(
                'id' => 3994,
                'name' => 'Morogoro',
                'uuid' => $faker->uuid , 'abbr' => 16,
                'country_id' => 230,
            ),

            array(
                'id' => 3995,
                'name' => 'Mtwara',
                'uuid' => $faker->uuid , 'abbr' => 17,
                'country_id' => 230,
            ),

            array(
                'id' => 3996,
                'name' => 'Mwanza',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 230,
            ),

            array(
                'id' => 3997,
                'name' => 'Pwani',
                'uuid' => $faker->uuid , 'abbr' => 19,
                'country_id' => 230,
            ),

            array(
                'id' => 3998,
                'name' => 'Rukwa',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 230,
            ),

            array(
                'id' => 3999,
                'name' => 'Ruvuma',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 230,
            ),

            array(
                'id' => 4000,
                'name' => 'Shinyanga',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 230,
            ),

            array(
                'id' => 4001,
                'name' => 'Singida',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 230,
            ),

            array(
                'id' => 4002,
                'name' => 'Tabora',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 230,
            ),

            array(
                'id' => 4003,
                'name' => 'Tanga',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 230,
            ),

            array(
                'id' => 4004,
                'name' => 'Manyara',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 230,
            ),

            array(
                'id' => 4005,
                'name' => 'Vinnyts\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 231,
            ),

            array(
                'id' => 4006,
                'name' => 'Volyns\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 231,
            ),

            array(
                'id' => 4007,
                'name' => 'Luhans\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 231,
            ),

            array(
                'id' => 4008,
                'name' => 'Dnipropetrovs\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 12,
                'country_id' => 231,
            ),

            array(
                'id' => 4009,
                'name' => 'Donets\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 231,
            ),

            array(
                'id' => 4010,
                'name' => 'Zhytomyrs\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 231,
            ),

            array(
                'id' => 4011,
                'name' => 'Zakarpats\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 231,
            ),

            array(
                'id' => 4012,
                'name' => 'Zaporiz\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 231,
            ),

            array(
                'id' => 4013,
                'name' => 'Ivano-Frankivs\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 231,
            ),

            array(
                'id' => 4014,
                'name' => 'Kyïv',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 231,
            ),

            array(
                'id' => 4015,
                'name' => 'Kyïvs\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 231,
            ),

            array(
                'id' => 4016,
                'name' => 'Kirovohrads\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 231,
            ),

            array(
                'id' => 4017,
                'name' => 'Sevastopol\'',
                'uuid' => $faker->uuid , 'abbr' => 40,
                'country_id' => 231,
            ),

            array(
                'id' => 4018,
                'name' => 'Respublika Krym',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 231,
            ),

            array(
                'id' => 4019,
                'name' => 'L\'vivs\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 231,
            ),

            array(
                'id' => 4020,
                'name' => 'Mykolaïvs\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 48,
                'country_id' => 231,
            ),

            array(
                'id' => 4021,
                'name' => 'Odes\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 231,
            ),

            array(
                'id' => 4022,
                'name' => 'Poltavs\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 231,
            ),

            array(
                'id' => 4023,
                'name' => 'Rivnens\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 56,
                'country_id' => 231,
            ),

            array(
                'id' => 4024,
                'name' => 'Sums\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 59,
                'country_id' => 231,
            ),

            array(
                'id' => 4025,
                'name' => 'Ternopil\'s\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 231,
            ),

            array(
                'id' => 4026,
                'name' => 'Kharkivs\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 63,
                'country_id' => 231,
            ),

            array(
                'id' => 4027,
                'name' => 'Khersons\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 65,
                'country_id' => 231,
            ),

            array(
                'id' => 4028,
                'name' => 'Khmel\'nyts\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 68,
                'country_id' => 231,
            ),

            array(
                'id' => 4029,
                'name' => 'Cherkas\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 231,
            ),

            array(
                'id' => 4030,
                'name' => 'Chernihivs\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 74,
                'country_id' => 231,
            ),

            array(
                'id' => 4031,
                'name' => 'Chernivets\'ka Oblast\'',
                'uuid' => $faker->uuid , 'abbr' => 77,
                'country_id' => 231,
            ),

            array(
                'id' => 4032,
                'name' => 'Kalangala',
                'uuid' => $faker->uuid , 'abbr' => 101,
                'country_id' => 232,
            ),

            array(
                'id' => 4033,
                'name' => 'Kampala',
                'uuid' => $faker->uuid , 'abbr' => 102,
                'country_id' => 232,
            ),

            array(
                'id' => 4034,
                'name' => 'Kiboga',
                'uuid' => $faker->uuid , 'abbr' => 103,
                'country_id' => 232,
            ),

            array(
                'id' => 4035,
                'name' => 'Luwero',
                'uuid' => $faker->uuid , 'abbr' => 104,
                'country_id' => 232,
            ),

            array(
                'id' => 4036,
                'name' => 'Masaka',
                'uuid' => $faker->uuid , 'abbr' => 105,
                'country_id' => 232,
            ),

            array(
                'id' => 4037,
                'name' => 'Mpigi',
                'uuid' => $faker->uuid , 'abbr' => 106,
                'country_id' => 232,
            ),

            array(
                'id' => 4038,
                'name' => 'Mubende',
                'uuid' => $faker->uuid , 'abbr' => 107,
                'country_id' => 232,
            ),

            array(
                'id' => 4039,
                'name' => 'Mukono',
                'uuid' => $faker->uuid , 'abbr' => 108,
                'country_id' => 232,
            ),

            array(
                'id' => 4040,
                'name' => 'Nakasongola',
                'uuid' => $faker->uuid , 'abbr' => 109,
                'country_id' => 232,
            ),

            array(
                'id' => 4041,
                'name' => 'Rakai',
                'uuid' => $faker->uuid , 'abbr' => 110,
                'country_id' => 232,
            ),

            array(
                'id' => 4042,
                'name' => 'Sembabule',
                'uuid' => $faker->uuid , 'abbr' => 111,
                'country_id' => 232,
            ),

            array(
                'id' => 4043,
                'name' => 'Kayunga',
                'uuid' => $faker->uuid , 'abbr' => 112,
                'country_id' => 232,
            ),

            array(
                'id' => 4044,
                'name' => 'Wakiso',
                'uuid' => $faker->uuid , 'abbr' => 113,
                'country_id' => 232,
            ),

            array(
                'id' => 4045,
                'name' => 'Mityana',
                'uuid' => $faker->uuid , 'abbr' => 114,
                'country_id' => 232,
            ),

            array(
                'id' => 4046,
                'name' => 'Nakaseke',
                'uuid' => $faker->uuid , 'abbr' => 115,
                'country_id' => 232,
            ),

            array(
                'id' => 4047,
                'name' => 'Lyantonde',
                'uuid' => $faker->uuid , 'abbr' => 116,
                'country_id' => 232,
            ),

            array(
                'id' => 4048,
                'name' => 'Bugiri',
                'uuid' => $faker->uuid , 'abbr' => 201,
                'country_id' => 232,
            ),

            array(
                'id' => 4049,
                'name' => 'Busia',
                'uuid' => $faker->uuid , 'abbr' => 202,
                'country_id' => 232,
            ),

            array(
                'id' => 4050,
                'name' => 'Iganga',
                'uuid' => $faker->uuid , 'abbr' => 203,
                'country_id' => 232,
            ),

            array(
                'id' => 4051,
                'name' => 'Jinja',
                'uuid' => $faker->uuid , 'abbr' => 204,
                'country_id' => 232,
            ),

            array(
                'id' => 4052,
                'name' => 'Kamuli',
                'uuid' => $faker->uuid , 'abbr' => 205,
                'country_id' => 232,
            ),

            array(
                'id' => 4053,
                'name' => 'Kapchorwa',
                'uuid' => $faker->uuid , 'abbr' => 206,
                'country_id' => 232,
            ),

            array(
                'id' => 4054,
                'name' => 'Katakwi',
                'uuid' => $faker->uuid , 'abbr' => 207,
                'country_id' => 232,
            ),

            array(
                'id' => 4055,
                'name' => 'Kumi',
                'uuid' => $faker->uuid , 'abbr' => 208,
                'country_id' => 232,
            ),

            array(
                'id' => 4056,
                'name' => 'Mbale',
                'uuid' => $faker->uuid , 'abbr' => 209,
                'country_id' => 232,
            ),

            array(
                'id' => 4057,
                'name' => 'Pallisa',
                'uuid' => $faker->uuid , 'abbr' => 210,
                'country_id' => 232,
            ),

            array(
                'id' => 4058,
                'name' => 'Soroti',
                'uuid' => $faker->uuid , 'abbr' => 211,
                'country_id' => 232,
            ),

            array(
                'id' => 4059,
                'name' => 'Tororo',
                'uuid' => $faker->uuid , 'abbr' => 212,
                'country_id' => 232,
            ),

            array(
                'id' => 4060,
                'name' => 'Kaberamaido',
                'uuid' => $faker->uuid , 'abbr' => 213,
                'country_id' => 232,
            ),

            array(
                'id' => 4061,
                'name' => 'Mayuge',
                'uuid' => $faker->uuid , 'abbr' => 214,
                'country_id' => 232,
            ),

            array(
                'id' => 4062,
                'name' => 'Sironko',
                'uuid' => $faker->uuid , 'abbr' => 215,
                'country_id' => 232,
            ),

            array(
                'id' => 4063,
                'name' => 'Amuria',
                'uuid' => $faker->uuid , 'abbr' => 216,
                'country_id' => 232,
            ),

            array(
                'id' => 4064,
                'name' => 'Budaka',
                'uuid' => $faker->uuid , 'abbr' => 217,
                'country_id' => 232,
            ),

            array(
                'id' => 4065,
                'name' => 'Bukwa',
                'uuid' => $faker->uuid , 'abbr' => 218,
                'country_id' => 232,
            ),

            array(
                'id' => 4066,
                'name' => 'Butaleja',
                'uuid' => $faker->uuid , 'abbr' => 219,
                'country_id' => 232,
            ),

            array(
                'id' => 4067,
                'name' => 'Kaliro',
                'uuid' => $faker->uuid , 'abbr' => 220,
                'country_id' => 232,
            ),

            array(
                'id' => 4068,
                'name' => 'Manafwa',
                'uuid' => $faker->uuid , 'abbr' => 221,
                'country_id' => 232,
            ),

            array(
                'id' => 4069,
                'name' => 'Namutumba',
                'uuid' => $faker->uuid , 'abbr' => 222,
                'country_id' => 232,
            ),

            array(
                'id' => 4070,
                'name' => 'Bududa',
                'uuid' => $faker->uuid , 'abbr' => 223,
                'country_id' => 232,
            ),

            array(
                'id' => 4071,
                'name' => 'Bukedea',
                'uuid' => $faker->uuid , 'abbr' => 224,
                'country_id' => 232,
            ),

            array(
                'id' => 4072,
                'name' => 'Adjumani',
                'uuid' => $faker->uuid , 'abbr' => 301,
                'country_id' => 232,
            ),

            array(
                'id' => 4073,
                'name' => 'Apac',
                'uuid' => $faker->uuid , 'abbr' => 302,
                'country_id' => 232,
            ),

            array(
                'id' => 4074,
                'name' => 'Arua',
                'uuid' => $faker->uuid , 'abbr' => 303,
                'country_id' => 232,
            ),

            array(
                'id' => 4075,
                'name' => 'Gulu',
                'uuid' => $faker->uuid , 'abbr' => 304,
                'country_id' => 232,
            ),

            array(
                'id' => 4076,
                'name' => 'Kitgum',
                'uuid' => $faker->uuid , 'abbr' => 305,
                'country_id' => 232,
            ),

            array(
                'id' => 4077,
                'name' => 'Kotido',
                'uuid' => $faker->uuid , 'abbr' => 306,
                'country_id' => 232,
            ),

            array(
                'id' => 4078,
                'name' => 'Lira',
                'uuid' => $faker->uuid , 'abbr' => 307,
                'country_id' => 232,
            ),

            array(
                'id' => 4079,
                'name' => 'Moroto',
                'uuid' => $faker->uuid , 'abbr' => 308,
                'country_id' => 232,
            ),

            array(
                'id' => 4080,
                'name' => 'Moyo',
                'uuid' => $faker->uuid , 'abbr' => 309,
                'country_id' => 232,
            ),

            array(
                'id' => 4081,
                'name' => 'Nebbi',
                'uuid' => $faker->uuid , 'abbr' => 310,
                'country_id' => 232,
            ),

            array(
                'id' => 4082,
                'name' => 'Nakapiripirit',
                'uuid' => $faker->uuid , 'abbr' => 311,
                'country_id' => 232,
            ),

            array(
                'id' => 4083,
                'name' => 'Pader',
                'uuid' => $faker->uuid , 'abbr' => 312,
                'country_id' => 232,
            ),

            array(
                'id' => 4084,
                'name' => 'Yumbe',
                'uuid' => $faker->uuid , 'abbr' => 313,
                'country_id' => 232,
            ),

            array(
                'id' => 4085,
                'name' => 'Amolatar',
                'uuid' => $faker->uuid , 'abbr' => 314,
                'country_id' => 232,
            ),

            array(
                'id' => 4086,
                'name' => 'Kaabong',
                'uuid' => $faker->uuid , 'abbr' => 315,
                'country_id' => 232,
            ),

            array(
                'id' => 4087,
                'name' => 'Koboko',
                'uuid' => $faker->uuid , 'abbr' => 316,
                'country_id' => 232,
            ),

            array(
                'id' => 4088,
                'name' => 'Abim',
                'uuid' => $faker->uuid , 'abbr' => 317,
                'country_id' => 232,
            ),

            array(
                'id' => 4089,
                'name' => 'Dokolo',
                'uuid' => $faker->uuid , 'abbr' => 318,
                'country_id' => 232,
            ),

            array(
                'id' => 4090,
                'name' => 'Amuru',
                'uuid' => $faker->uuid , 'abbr' => 319,
                'country_id' => 232,
            ),

            array(
                'id' => 4091,
                'name' => 'Maracha',
                'uuid' => $faker->uuid , 'abbr' => 320,
                'country_id' => 232,
            ),

            array(
                'id' => 4092,
                'name' => 'Oyam',
                'uuid' => $faker->uuid , 'abbr' => 321,
                'country_id' => 232,
            ),

            array(
                'id' => 4093,
                'name' => 'Bundibugyo',
                'uuid' => $faker->uuid , 'abbr' => 401,
                'country_id' => 232,
            ),

            array(
                'id' => 4094,
                'name' => 'Bushenyi',
                'uuid' => $faker->uuid , 'abbr' => 402,
                'country_id' => 232,
            ),

            array(
                'id' => 4095,
                'name' => 'Hoima',
                'uuid' => $faker->uuid , 'abbr' => 403,
                'country_id' => 232,
            ),

            array(
                'id' => 4096,
                'name' => 'Kabale',
                'uuid' => $faker->uuid , 'abbr' => 404,
                'country_id' => 232,
            ),

            array(
                'id' => 4097,
                'name' => 'Kabarole',
                'uuid' => $faker->uuid , 'abbr' => 405,
                'country_id' => 232,
            ),

            array(
                'id' => 4098,
                'name' => 'Kasese',
                'uuid' => $faker->uuid , 'abbr' => 406,
                'country_id' => 232,
            ),

            array(
                'id' => 4099,
                'name' => 'Kibaale',
                'uuid' => $faker->uuid , 'abbr' => 407,
                'country_id' => 232,
            ),

            array(
                'id' => 4100,
                'name' => 'Kisoro',
                'uuid' => $faker->uuid , 'abbr' => 408,
                'country_id' => 232,
            ),

            array(
                'id' => 4101,
                'name' => 'Masindi',
                'uuid' => $faker->uuid , 'abbr' => 409,
                'country_id' => 232,
            ),

            array(
                'id' => 4102,
                'name' => 'Mbarara',
                'uuid' => $faker->uuid , 'abbr' => 410,
                'country_id' => 232,
            ),

            array(
                'id' => 4103,
                'name' => 'Ntungamo',
                'uuid' => $faker->uuid , 'abbr' => 411,
                'country_id' => 232,
            ),

            array(
                'id' => 4104,
                'name' => 'Rukungiri',
                'uuid' => $faker->uuid , 'abbr' => 412,
                'country_id' => 232,
            ),

            array(
                'id' => 4105,
                'name' => 'Kamwenge',
                'uuid' => $faker->uuid , 'abbr' => 413,
                'country_id' => 232,
            ),

            array(
                'id' => 4106,
                'name' => 'Kanungu',
                'uuid' => $faker->uuid , 'abbr' => 414,
                'country_id' => 232,
            ),

            array(
                'id' => 4107,
                'name' => 'Kyenjojo',
                'uuid' => $faker->uuid , 'abbr' => 415,
                'country_id' => 232,
            ),

            array(
                'id' => 4108,
                'name' => 'Ibanda',
                'uuid' => $faker->uuid , 'abbr' => 416,
                'country_id' => 232,
            ),

            array(
                'id' => 4109,
                'name' => 'Isingiro',
                'uuid' => $faker->uuid , 'abbr' => 417,
                'country_id' => 232,
            ),

            array(
                'id' => 4110,
                'name' => 'Kiruhura',
                'uuid' => $faker->uuid , 'abbr' => 418,
                'country_id' => 232,
            ),

            array(
                'id' => 4111,
                'name' => 'Buliisa',
                'uuid' => $faker->uuid , 'abbr' => 419,
                'country_id' => 232,
            ),

            array(
                'id' => 4112,
                'name' => 'Johnston Atoll',
                'uuid' => $faker->uuid , 'abbr' => 67,
                'country_id' => 233,
            ),

            array(
                'id' => 4113,
                'name' => 'Midway Islands',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 233,
            ),

            array(
                'id' => 4114,
                'name' => 'Navassa Island',
                'uuid' => $faker->uuid , 'abbr' => 76,
                'country_id' => 233,
            ),

            array(
                'id' => 4115,
                'name' => 'Wake Island',
                'uuid' => $faker->uuid , 'abbr' => 79,
                'country_id' => 233,
            ),

            array(
                'id' => 4116,
                'name' => 'Baker Island',
                'uuid' => $faker->uuid , 'abbr' => 81,
                'country_id' => 233,
            ),

            array(
                'id' => 4117,
                'name' => 'Howland Island',
                'uuid' => $faker->uuid , 'abbr' => 84,
                'country_id' => 233,
            ),

            array(
                'id' => 4118,
                'name' => 'Jarvis Island',
                'uuid' => $faker->uuid , 'abbr' => 86,
                'country_id' => 233,
            ),

            array(
                'id' => 4119,
                'name' => 'Kingman Reef',
                'uuid' => $faker->uuid , 'abbr' => 89,
                'country_id' => 233,
            ),

            array(
                'id' => 4120,
                'name' => 'Palmyra Atoll',
                'uuid' => $faker->uuid , 'abbr' => 95,
                'country_id' => 233,
            ),

            array(
                'id' => 4121,
                'name' => 'Armed Forces Americas',
                'uuid' => $faker->uuid , 'abbr' => 'AA',
                'country_id' => 234,
            ),

            array(
                'id' => 4122,
                'name' => 'Armed Forces Europe',
                'uuid' => $faker->uuid , 'abbr' => 'AE',
                'country_id' => 234,
            ),

            array(
                'id' => 4123,
                'name' => 'Alaska',
                'uuid' => $faker->uuid , 'abbr' => 'AK',
                'country_id' => 234,
            ),

            array(
                'id' => 4124,
                'name' => 'Alabama',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 234,
            ),

            array(
                'id' => 4125,
                'name' => 'Armed Forces Pacific',
                'uuid' => $faker->uuid , 'abbr' => 'AP',
                'country_id' => 234,
            ),

            array(
                'id' => 4126,
                'name' => 'Arkansas',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 234,
            ),

            array(
                'id' => 4127,
                'name' => 'American Samoa',
                'uuid' => $faker->uuid , 'abbr' => 'AS',
                'country_id' => 234,
            ),

            array(
                'id' => 4128,
                'name' => 'Arizona',
                'uuid' => $faker->uuid , 'abbr' => 'AZ',
                'country_id' => 234,
            ),

            array(
                'id' => 4129,
                'name' => 'California',
                'uuid' => $faker->uuid , 'abbr' => 'CA',
                'country_id' => 234,
            ),

            array(
                'id' => 4130,
                'name' => 'Colorado',
                'uuid' => $faker->uuid , 'abbr' => 'CO',
                'country_id' => 234,
            ),

            array(
                'id' => 4131,
                'name' => 'Connecticut',
                'uuid' => $faker->uuid , 'abbr' => 'CT',
                'country_id' => 234,
            ),

            array(
                'id' => 4132,
                'name' => 'District of Columbia',
                'uuid' => $faker->uuid , 'abbr' => 'DC',
                'country_id' => 234,
            ),

            array(
                'id' => 4133,
                'name' => 'Delaware',
                'uuid' => $faker->uuid , 'abbr' => 'DE',
                'country_id' => 234,
            ),

            array(
                'id' => 4134,
                'name' => 'Florida',
                'uuid' => $faker->uuid , 'abbr' => 'FL',
                'country_id' => 234,
            ),

            array(
                'id' => 4135,
                'name' => 'Georgia',
                'uuid' => $faker->uuid , 'abbr' => 'GA',
                'country_id' => 234,
            ),

            array(
                'id' => 4136,
                'name' => 'Guam',
                'uuid' => $faker->uuid , 'abbr' => 'GU',
                'country_id' => 234,
            ),

            array(
                'id' => 4137,
                'name' => 'Hawaii',
                'uuid' => $faker->uuid , 'abbr' => 'HI',
                'country_id' => 234,
            ),

            array(
                'id' => 4138,
                'name' => 'Iowa',
                'uuid' => $faker->uuid , 'abbr' => 'IA',
                'country_id' => 234,
            ),

            array(
                'id' => 4139,
                'name' => 'Idaho',
                'uuid' => $faker->uuid , 'abbr' => 'ID',
                'country_id' => 234,
            ),

            array(
                'id' => 4140,
                'name' => 'Illinois',
                'uuid' => $faker->uuid , 'abbr' => 'IL',
                'country_id' => 234,
            ),

            array(
                'id' => 4141,
                'name' => 'Indiana',
                'uuid' => $faker->uuid , 'abbr' => 'IN',
                'country_id' => 234,
            ),

            array(
                'id' => 4142,
                'name' => 'Kansas',
                'uuid' => $faker->uuid , 'abbr' => 'KS',
                'country_id' => 234,
            ),

            array(
                'id' => 4143,
                'name' => 'Kentucky',
                'uuid' => $faker->uuid , 'abbr' => 'KY',
                'country_id' => 234,
            ),

            array(
                'id' => 4144,
                'name' => 'Louisiana',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 234,
            ),

            array(
                'id' => 4145,
                'name' => 'Massachusetts',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 234,
            ),

            array(
                'id' => 4146,
                'name' => 'Maryland',
                'uuid' => $faker->uuid , 'abbr' => 'MD',
                'country_id' => 234,
            ),

            array(
                'id' => 4147,
                'name' => 'Maine',
                'uuid' => $faker->uuid , 'abbr' => 'ME',
                'country_id' => 234,
            ),

            array(
                'id' => 4148,
                'name' => 'Michigan',
                'uuid' => $faker->uuid , 'abbr' => 'MI',
                'country_id' => 234,
            ),

            array(
                'id' => 4149,
                'name' => 'Minnesota',
                'uuid' => $faker->uuid , 'abbr' => 'MN',
                'country_id' => 234,
            ),

            array(
                'id' => 4150,
                'name' => 'Missouri',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 234,
            ),

            array(
                'id' => 4151,
                'name' => 'Northern Mariana Islands',
                'uuid' => $faker->uuid , 'abbr' => 'MP',
                'country_id' => 234,
            ),

            array(
                'id' => 4152,
                'name' => 'Mississippi',
                'uuid' => $faker->uuid , 'abbr' => 'MS',
                'country_id' => 234,
            ),

            array(
                'id' => 4153,
                'name' => 'Montana',
                'uuid' => $faker->uuid , 'abbr' => 'MT',
                'country_id' => 234,
            ),

            array(
                'id' => 4154,
                'name' => 'North Carolina',
                'uuid' => $faker->uuid , 'abbr' => 'NC',
                'country_id' => 234,
            ),

            array(
                'id' => 4155,
                'name' => 'North Dakota',
                'uuid' => $faker->uuid , 'abbr' => 'ND',
                'country_id' => 234,
            ),

            array(
                'id' => 4156,
                'name' => 'Nebraska',
                'uuid' => $faker->uuid , 'abbr' => 'NE',
                'country_id' => 234,
            ),

            array(
                'id' => 4157,
                'name' => 'New Hampshire',
                'uuid' => $faker->uuid , 'abbr' => 'NH',
                'country_id' => 234,
            ),

            array(
                'id' => 4158,
                'name' => 'New Jersey',
                'uuid' => $faker->uuid , 'abbr' => 'NJ',
                'country_id' => 234,
            ),

            array(
                'id' => 4159,
                'name' => 'New Mexico',
                'uuid' => $faker->uuid , 'abbr' => 'NM',
                'country_id' => 234,
            ),

            array(
                'id' => 4160,
                'name' => 'Nevada',
                'uuid' => $faker->uuid , 'abbr' => 'NV',
                'country_id' => 234,
            ),

            array(
                'id' => 4161,
                'name' => 'New York',
                'uuid' => $faker->uuid , 'abbr' => 'NY',
                'country_id' => 234,
            ),

            array(
                'id' => 4162,
                'name' => 'Ohio',
                'uuid' => $faker->uuid , 'abbr' => 'OH',
                'country_id' => 234,
            ),

            array(
                'id' => 4163,
                'name' => 'Oklahoma',
                'uuid' => $faker->uuid , 'abbr' => 'OK',
                'country_id' => 234,
            ),

            array(
                'id' => 4164,
                'name' => 'Oregon',
                'uuid' => $faker->uuid , 'abbr' => 'OR',
                'country_id' => 234,
            ),

            array(
                'id' => 4165,
                'name' => 'Pennsylvania',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 234,
            ),

            array(
                'id' => 4166,
                'name' => 'Puerto Rico',
                'uuid' => $faker->uuid , 'abbr' => 'PR',
                'country_id' => 234,
            ),

            array(
                'id' => 4167,
                'name' => 'Rhode Island',
                'uuid' => $faker->uuid , 'abbr' => 'RI',
                'country_id' => 234,
            ),

            array(
                'id' => 4168,
                'name' => 'South Carolina',
                'uuid' => $faker->uuid , 'abbr' => 'SC',
                'country_id' => 234,
            ),

            array(
                'id' => 4169,
                'name' => 'South Dakota',
                'uuid' => $faker->uuid , 'abbr' => 'SD',
                'country_id' => 234,
            ),

            array(
                'id' => 4170,
                'name' => 'Tennessee',
                'uuid' => $faker->uuid , 'abbr' => 'TN',
                'country_id' => 234,
            ),

            array(
                'id' => 4171,
                'name' => 'Texas',
                'uuid' => $faker->uuid , 'abbr' => 'TX',
                'country_id' => 234,
            ),

            array(
                'id' => 4172,
                'name' => 'United States Minor Outlying Islands',
                'uuid' => $faker->uuid , 'abbr' => 'UM',
                'country_id' => 234,
            ),

            array(
                'id' => 4173,
                'name' => 'Utah',
                'uuid' => $faker->uuid , 'abbr' => 'UT',
                'country_id' => 234,
            ),

            array(
                'id' => 4174,
                'name' => 'Virginia',
                'uuid' => $faker->uuid , 'abbr' => 'VA',
                'country_id' => 234,
            ),

            array(
                'id' => 4175,
                'name' => 'Virgin Islands, U.S.',
                'uuid' => $faker->uuid , 'abbr' => 'VI',
                'country_id' => 234,
            ),

            array(
                'id' => 4176,
                'name' => 'Vermont',
                'uuid' => $faker->uuid , 'abbr' => 'VT',
                'country_id' => 234,
            ),

            array(
                'id' => 4177,
                'name' => 'Washington',
                'uuid' => $faker->uuid , 'abbr' => 'WA',
                'country_id' => 234,
            ),

            array(
                'id' => 4178,
                'name' => 'Wisconsin',
                'uuid' => $faker->uuid , 'abbr' => 'WI',
                'country_id' => 234,
            ),

            array(
                'id' => 4179,
                'name' => 'West Virginia',
                'uuid' => $faker->uuid , 'abbr' => 'WV',
                'country_id' => 234,
            ),

            array(
                'id' => 4180,
                'name' => 'Wyoming',
                'uuid' => $faker->uuid , 'abbr' => 'WY',
                'country_id' => 234,
            ),

            array(
                'id' => 4181,
                'name' => 'Artigas',
                'uuid' => $faker->uuid , 'abbr' => 'AR',
                'country_id' => 235,
            ),

            array(
                'id' => 4182,
                'name' => 'Durazno',
                'uuid' => $faker->uuid , 'abbr' => 'DU',
                'country_id' => 235,
            ),

            array(
                'id' => 4183,
                'name' => 'Florida',
                'uuid' => $faker->uuid , 'abbr' => 'FD',
                'country_id' => 235,
            ),

            array(
                'id' => 4184,
                'name' => 'Flores',
                'uuid' => $faker->uuid , 'abbr' => 'FS',
                'country_id' => 235,
            ),

            array(
                'id' => 4185,
                'name' => 'Lavalleja',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 235,
            ),

            array(
                'id' => 4186,
                'name' => 'Maldonado',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 235,
            ),

            array(
                'id' => 4187,
                'name' => 'Montevideo',
                'uuid' => $faker->uuid , 'abbr' => 'MO',
                'country_id' => 235,
            ),

            array(
                'id' => 4188,
                'name' => 'Paysandú',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 235,
            ),

            array(
                'id' => 4189,
                'name' => 'Río Negro',
                'uuid' => $faker->uuid , 'abbr' => 'RN',
                'country_id' => 235,
            ),

            array(
                'id' => 4190,
                'name' => 'Rocha',
                'uuid' => $faker->uuid , 'abbr' => 'RO',
                'country_id' => 235,
            ),

            array(
                'id' => 4191,
                'name' => 'Rivera',
                'uuid' => $faker->uuid , 'abbr' => 'RV',
                'country_id' => 235,
            ),

            array(
                'id' => 4192,
                'name' => 'Salto',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 235,
            ),

            array(
                'id' => 4193,
                'name' => 'San José',
                'uuid' => $faker->uuid , 'abbr' => 'SJ',
                'country_id' => 235,
            ),

            array(
                'id' => 4194,
                'name' => 'Soriano',
                'uuid' => $faker->uuid , 'abbr' => 'SO',
                'country_id' => 235,
            ),

            array(
                'id' => 4195,
                'name' => 'Tacuarembó',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 235,
            ),

            array(
                'id' => 4196,
                'name' => 'Treinta y Tres',
                'uuid' => $faker->uuid , 'abbr' => 'TT',
                'country_id' => 235,
            ),

            array(
                'id' => 4197,
                'name' => 'Andijon',
                'uuid' => $faker->uuid , 'abbr' => 'AN',
                'country_id' => 236,
            ),

            array(
                'id' => 4198,
                'name' => 'Buxoro',
                'uuid' => $faker->uuid , 'abbr' => 'BU',
                'country_id' => 236,
            ),

            array(
                'id' => 4199,
                'name' => 'Farg‘ona',
                'uuid' => $faker->uuid , 'abbr' => 'FA',
                'country_id' => 236,
            ),

            array(
                'id' => 4200,
                'name' => 'Jizzax',
                'uuid' => $faker->uuid , 'abbr' => 'JI',
                'country_id' => 236,
            ),

            array(
                'id' => 4201,
                'name' => 'Namangan',
                'uuid' => $faker->uuid , 'abbr' => 'NG',
                'country_id' => 236,
            ),

            array(
                'id' => 4202,
                'name' => 'Navoiy',
                'uuid' => $faker->uuid , 'abbr' => 'NW',
                'country_id' => 236,
            ),

            array(
                'id' => 4203,
                'name' => 'Qashqadaryo',
                'uuid' => $faker->uuid , 'abbr' => 'QA',
                'country_id' => 236,
            ),

            array(
                'id' => 4204,
                'name' => 'Qoraqalpog‘iston Respublikasi',
                'uuid' => $faker->uuid , 'abbr' => 'QR',
                'country_id' => 236,
            ),

            array(
                'id' => 4205,
                'name' => 'Samarqand',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 236,
            ),

            array(
                'id' => 4206,
                'name' => 'Sirdaryo',
                'uuid' => $faker->uuid , 'abbr' => 'SI',
                'country_id' => 236,
            ),

            array(
                'id' => 4207,
                'name' => 'Surxondaryo',
                'uuid' => $faker->uuid , 'abbr' => 'SU',
                'country_id' => 236,
            ),

            array(
                'id' => 4208,
                'name' => 'Toshkent City',
                'uuid' => $faker->uuid , 'abbr' => 'TK',
                'country_id' => 236,
            ),

            array(
                'id' => 4209,
                'name' => 'Toshkent',
                'uuid' => $faker->uuid , 'abbr' => 'TO',
                'country_id' => 236,
            ),

            array(
                'id' => 4210,
                'name' => 'Xorazm',
                'uuid' => $faker->uuid , 'abbr' => 'XO',
                'country_id' => 236,
            ),

            array(
                'id' => 4211,
                'name' => 'Charlotte',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 238,
            ),

            array(
                'id' => 4212,
                'name' => 'Saint Andrew',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 238,
            ),

            array(
                'id' => 4213,
                'name' => 'Saint David',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 238,
            ),

            array(
                'id' => 4214,
                'name' => 'Saint George',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 238,
            ),

            array(
                'id' => 4215,
                'name' => 'Saint Patrick',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 238,
            ),

            array(
                'id' => 4216,
                'name' => 'Grenadines',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 238,
            ),

            array(
                'id' => 4217,
                'name' => 'Distrito Federal',
                'uuid' => $faker->uuid , 'abbr' => 'A',
                'country_id' => 239,
            ),

            array(
                'id' => 4218,
                'name' => 'Anzoátegui',
                'uuid' => $faker->uuid , 'abbr' => 'B',
                'country_id' => 239,
            ),

            array(
                'id' => 4219,
                'name' => 'Apure',
                'uuid' => $faker->uuid , 'abbr' => 'C',
                'country_id' => 239,
            ),

            array(
                'id' => 4220,
                'name' => 'Aragua',
                'uuid' => $faker->uuid , 'abbr' => 'D',
                'country_id' => 239,
            ),

            array(
                'id' => 4221,
                'name' => 'Barinas',
                'uuid' => $faker->uuid , 'abbr' => 'E',
                'country_id' => 239,
            ),

            array(
                'id' => 4222,
                'name' => 'Bolívar',
                'uuid' => $faker->uuid , 'abbr' => 'F',
                'country_id' => 239,
            ),

            array(
                'id' => 4223,
                'name' => 'Carabobo',
                'uuid' => $faker->uuid , 'abbr' => 'G',
                'country_id' => 239,
            ),

            array(
                'id' => 4224,
                'name' => 'Cojedes',
                'uuid' => $faker->uuid , 'abbr' => 'H',
                'country_id' => 239,
            ),

            array(
                'id' => 4225,
                'name' => 'Falcón',
                'uuid' => $faker->uuid , 'abbr' => 'I',
                'country_id' => 239,
            ),

            array(
                'id' => 4226,
                'name' => 'Guárico',
                'uuid' => $faker->uuid , 'abbr' => 'J',
                'country_id' => 239,
            ),

            array(
                'id' => 4227,
                'name' => 'Lara',
                'uuid' => $faker->uuid , 'abbr' => 'K',
                'country_id' => 239,
            ),

            array(
                'id' => 4228,
                'name' => 'Mérida',
                'uuid' => $faker->uuid , 'abbr' => 'L',
                'country_id' => 239,
            ),

            array(
                'id' => 4229,
                'name' => 'Miranda',
                'uuid' => $faker->uuid , 'abbr' => 'M',
                'country_id' => 239,
            ),

            array(
                'id' => 4230,
                'name' => 'Monagas',
                'uuid' => $faker->uuid , 'abbr' => 'N',
                'country_id' => 239,
            ),

            array(
                'id' => 4231,
                'name' => 'Nueva Esparta',
                'uuid' => $faker->uuid , 'abbr' => 'O',
                'country_id' => 239,
            ),

            array(
                'id' => 4232,
                'name' => 'Portuguesa',
                'uuid' => $faker->uuid , 'abbr' => 'P',
                'country_id' => 239,
            ),

            array(
                'id' => 4233,
                'name' => 'Sucre',
                'uuid' => $faker->uuid , 'abbr' => 'R',
                'country_id' => 239,
            ),

            array(
                'id' => 4234,
                'name' => 'Táchira',
                'uuid' => $faker->uuid , 'abbr' => 'S',
                'country_id' => 239,
            ),

            array(
                'id' => 4235,
                'name' => 'Trujillo',
                'uuid' => $faker->uuid , 'abbr' => 'T',
                'country_id' => 239,
            ),

            array(
                'id' => 4236,
                'name' => 'Yaracuy',
                'uuid' => $faker->uuid , 'abbr' => 'U',
                'country_id' => 239,
            ),

            array(
                'id' => 4237,
                'name' => 'Zulia',
                'uuid' => $faker->uuid , 'abbr' => 'V',
                'country_id' => 239,
            ),

            array(
                'id' => 4238,
                'name' => 'Dependencias Federales',
                'uuid' => $faker->uuid , 'abbr' => 'W',
                'country_id' => 239,
            ),

            array(
                'id' => 4239,
                'name' => 'Vargas',
                'uuid' => $faker->uuid , 'abbr' => 'X',
                'country_id' => 239,
            ),

            array(
                'id' => 4240,
                'name' => 'Delta Amacuro',
                'uuid' => $faker->uuid , 'abbr' => 'Y',
                'country_id' => 239,
            ),

            array(
                'id' => 4241,
                'name' => 'Amazonas',
                'uuid' => $faker->uuid , 'abbr' => 'Z',
                'country_id' => 239,
            ),

            array(
                'id' => 4242,
                'name' => 'Lai Chau',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 242,
            ),

            array(
                'id' => 4243,
                'name' => 'Lao Cai',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 242,
            ),

            array(
                'id' => 4244,
                'name' => 'Ha Giang',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 242,
            ),

            array(
                'id' => 4245,
                'name' => 'Cao Bang',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 242,
            ),

            array(
                'id' => 4246,
                'name' => 'Son La',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 242,
            ),

            array(
                'id' => 4247,
                'name' => 'Yen Bai',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 242,
            ),

            array(
                'id' => 4248,
                'name' => 'Tuyen Quang',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 242,
            ),

            array(
                'id' => 4249,
                'name' => 'Lang Son',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 242,
            ),

            array(
                'id' => 4250,
                'name' => 'Quang Ninh',
                'uuid' => $faker->uuid , 'abbr' => 13,
                'country_id' => 242,
            ),

            array(
                'id' => 4251,
                'name' => 'Hoa Binh',
                'uuid' => $faker->uuid , 'abbr' => 14,
                'country_id' => 242,
            ),

            array(
                'id' => 4252,
                'name' => 'Ha Tay',
                'uuid' => $faker->uuid , 'abbr' => 15,
                'country_id' => 242,
            ),

            array(
                'id' => 4253,
                'name' => 'Ninh Binh',
                'uuid' => $faker->uuid , 'abbr' => 18,
                'country_id' => 242,
            ),

            array(
                'id' => 4254,
                'name' => 'Thai Binh',
                'uuid' => $faker->uuid , 'abbr' => 20,
                'country_id' => 242,
            ),

            array(
                'id' => 4255,
                'name' => 'Thanh Hoa',
                'uuid' => $faker->uuid , 'abbr' => 21,
                'country_id' => 242,
            ),

            array(
                'id' => 4256,
                'name' => 'Nghe An',
                'uuid' => $faker->uuid , 'abbr' => 22,
                'country_id' => 242,
            ),

            array(
                'id' => 4257,
                'name' => 'Ha Tinh',
                'uuid' => $faker->uuid , 'abbr' => 23,
                'country_id' => 242,
            ),

            array(
                'id' => 4258,
                'name' => 'Quang Binh',
                'uuid' => $faker->uuid , 'abbr' => 24,
                'country_id' => 242,
            ),

            array(
                'id' => 4259,
                'name' => 'Quang Tri',
                'uuid' => $faker->uuid , 'abbr' => 25,
                'country_id' => 242,
            ),

            array(
                'id' => 4260,
                'name' => 'Thua Thien-Hue',
                'uuid' => $faker->uuid , 'abbr' => 26,
                'country_id' => 242,
            ),

            array(
                'id' => 4261,
                'name' => 'Quang Nam',
                'uuid' => $faker->uuid , 'abbr' => 27,
                'country_id' => 242,
            ),

            array(
                'id' => 4262,
                'name' => 'Kon Tum',
                'uuid' => $faker->uuid , 'abbr' => 28,
                'country_id' => 242,
            ),

            array(
                'id' => 4263,
                'name' => 'Quang Ngai',
                'uuid' => $faker->uuid , 'abbr' => 29,
                'country_id' => 242,
            ),

            array(
                'id' => 4264,
                'name' => 'Gia Lai',
                'uuid' => $faker->uuid , 'abbr' => 30,
                'country_id' => 242,
            ),

            array(
                'id' => 4265,
                'name' => 'Binh Dinh',
                'uuid' => $faker->uuid , 'abbr' => 31,
                'country_id' => 242,
            ),

            array(
                'id' => 4266,
                'name' => 'Phu Yen',
                'uuid' => $faker->uuid , 'abbr' => 32,
                'country_id' => 242,
            ),

            array(
                'id' => 4267,
                'name' => 'Dac Lac',
                'uuid' => $faker->uuid , 'abbr' => 33,
                'country_id' => 242,
            ),

            array(
                'id' => 4268,
                'name' => 'Khanh Hoa',
                'uuid' => $faker->uuid , 'abbr' => 34,
                'country_id' => 242,
            ),

            array(
                'id' => 4269,
                'name' => 'Lam Dong',
                'uuid' => $faker->uuid , 'abbr' => 35,
                'country_id' => 242,
            ),

            array(
                'id' => 4270,
                'name' => 'Ninh Thuan',
                'uuid' => $faker->uuid , 'abbr' => 36,
                'country_id' => 242,
            ),

            array(
                'id' => 4271,
                'name' => 'Tay Ninh',
                'uuid' => $faker->uuid , 'abbr' => 37,
                'country_id' => 242,
            ),

            array(
                'id' => 4272,
                'name' => 'Dong Nai',
                'uuid' => $faker->uuid , 'abbr' => 39,
                'country_id' => 242,
            ),

            array(
                'id' => 4273,
                'name' => 'Binh Thuan',
                'uuid' => $faker->uuid , 'abbr' => 40,
                'country_id' => 242,
            ),

            array(
                'id' => 4274,
                'name' => 'Long An',
                'uuid' => $faker->uuid , 'abbr' => 41,
                'country_id' => 242,
            ),

            array(
                'id' => 4275,
                'name' => 'Ba Ria - Vung Tau',
                'uuid' => $faker->uuid , 'abbr' => 43,
                'country_id' => 242,
            ),

            array(
                'id' => 4276,
                'name' => 'An Giang',
                'uuid' => $faker->uuid , 'abbr' => 44,
                'country_id' => 242,
            ),

            array(
                'id' => 4277,
                'name' => 'Dong Thap',
                'uuid' => $faker->uuid , 'abbr' => 45,
                'country_id' => 242,
            ),

            array(
                'id' => 4278,
                'name' => 'Tien Giang',
                'uuid' => $faker->uuid , 'abbr' => 46,
                'country_id' => 242,
            ),

            array(
                'id' => 4279,
                'name' => 'Kien Giang',
                'uuid' => $faker->uuid , 'abbr' => 47,
                'country_id' => 242,
            ),

            array(
                'id' => 4280,
                'name' => 'Can Tho',
                'uuid' => $faker->uuid , 'abbr' => 48,
                'country_id' => 242,
            ),

            array(
                'id' => 4281,
                'name' => 'Vinh Long',
                'uuid' => $faker->uuid , 'abbr' => 49,
                'country_id' => 242,
            ),

            array(
                'id' => 4282,
                'name' => 'Ben Tre',
                'uuid' => $faker->uuid , 'abbr' => 50,
                'country_id' => 242,
            ),

            array(
                'id' => 4283,
                'name' => 'Tra Vinh',
                'uuid' => $faker->uuid , 'abbr' => 51,
                'country_id' => 242,
            ),

            array(
                'id' => 4284,
                'name' => 'Soc Trang',
                'uuid' => $faker->uuid , 'abbr' => 52,
                'country_id' => 242,
            ),

            array(
                'id' => 4285,
                'name' => 'Bac Can',
                'uuid' => $faker->uuid , 'abbr' => 53,
                'country_id' => 242,
            ),

            array(
                'id' => 4286,
                'name' => 'Bac Giang',
                'uuid' => $faker->uuid , 'abbr' => 54,
                'country_id' => 242,
            ),

            array(
                'id' => 4287,
                'name' => 'Bac Lieu',
                'uuid' => $faker->uuid , 'abbr' => 55,
                'country_id' => 242,
            ),

            array(
                'id' => 4288,
                'name' => 'Bac Ninh',
                'uuid' => $faker->uuid , 'abbr' => 56,
                'country_id' => 242,
            ),

            array(
                'id' => 4289,
                'name' => 'Binh Duong',
                'uuid' => $faker->uuid , 'abbr' => 57,
                'country_id' => 242,
            ),

            array(
                'id' => 4290,
                'name' => 'Binh Phuoc',
                'uuid' => $faker->uuid , 'abbr' => 58,
                'country_id' => 242,
            ),

            array(
                'id' => 4291,
                'name' => 'Ca Mau',
                'uuid' => $faker->uuid , 'abbr' => 59,
                'country_id' => 242,
            ),

            array(
                'id' => 4292,
                'name' => 'Da Nang, thanh pho',
                'uuid' => $faker->uuid , 'abbr' => 60,
                'country_id' => 242,
            ),

            array(
                'id' => 4293,
                'name' => 'Hai Duong',
                'uuid' => $faker->uuid , 'abbr' => 61,
                'country_id' => 242,
            ),

            array(
                'id' => 4294,
                'name' => 'Hai Phong, thanh pho',
                'uuid' => $faker->uuid , 'abbr' => 62,
                'country_id' => 242,
            ),

            array(
                'id' => 4295,
                'name' => 'Ha Nam',
                'uuid' => $faker->uuid , 'abbr' => 63,
                'country_id' => 242,
            ),

            array(
                'id' => 4296,
                'name' => 'Ha Noi, thu do',
                'uuid' => $faker->uuid , 'abbr' => 64,
                'country_id' => 242,
            ),

            array(
                'id' => 4297,
                'name' => 'Ho Chi Minh, thanh pho [Sai Gon]',
                'uuid' => $faker->uuid , 'abbr' => 65,
                'country_id' => 242,
            ),

            array(
                'id' => 4298,
                'name' => 'Hung Yen',
                'uuid' => $faker->uuid , 'abbr' => 66,
                'country_id' => 242,
            ),

            array(
                'id' => 4299,
                'name' => 'Nam Dinh',
                'uuid' => $faker->uuid , 'abbr' => 67,
                'country_id' => 242,
            ),

            array(
                'id' => 4300,
                'name' => 'Phu Tho',
                'uuid' => $faker->uuid , 'abbr' => 68,
                'country_id' => 242,
            ),

            array(
                'id' => 4301,
                'name' => 'Thai Nguyen',
                'uuid' => $faker->uuid , 'abbr' => 69,
                'country_id' => 242,
            ),

            array(
                'id' => 4302,
                'name' => 'Vinh Phuc',
                'uuid' => $faker->uuid , 'abbr' => 70,
                'country_id' => 242,
            ),

            array(
                'id' => 4303,
                'name' => 'Dien Bien',
                'uuid' => $faker->uuid , 'abbr' => 71,
                'country_id' => 242,
            ),

            array(
                'id' => 4304,
                'name' => 'Dak Nong',
                'uuid' => $faker->uuid , 'abbr' => 72,
                'country_id' => 242,
            ),

            array(
                'id' => 4305,
                'name' => 'Hau Giang',
                'uuid' => $faker->uuid , 'abbr' => 73,
                'country_id' => 242,
            ),

            array(
                'id' => 4306,
                'name' => 'Malampa',
                'uuid' => $faker->uuid , 'abbr' => 'MAP',
                'country_id' => 243,
            ),

            array(
                'id' => 4307,
                'name' => 'Pénama',
                'uuid' => $faker->uuid , 'abbr' => 'PAM',
                'country_id' => 243,
            ),

            array(
                'id' => 4308,
                'name' => 'Sanma',
                'uuid' => $faker->uuid , 'abbr' => 'SAM',
                'country_id' => 243,
            ),

            array(
                'id' => 4309,
                'name' => 'Shéfa',
                'uuid' => $faker->uuid , 'abbr' => 'SEE',
                'country_id' => 243,
            ),

            array(
                'id' => 4310,
                'name' => 'Taféa',
                'uuid' => $faker->uuid , 'abbr' => 'TAE',
                'country_id' => 243,
            ),

            array(
                'id' => 4311,
                'name' => 'Torba',
                'uuid' => $faker->uuid , 'abbr' => 'TOB',
                'country_id' => 243,
            ),

            array(
                'id' => 4312,
                'name' => 'A\'ana',
                'uuid' => $faker->uuid , 'abbr' => 'AA',
                'country_id' => 245,
            ),

            array(
                'id' => 4313,
                'name' => 'Aiga-i-le-Tai',
                'uuid' => $faker->uuid , 'abbr' => 'AL',
                'country_id' => 245,
            ),

            array(
                'id' => 4314,
                'name' => 'Atua',
                'uuid' => $faker->uuid , 'abbr' => 'AT',
                'country_id' => 245,
            ),

            array(
                'id' => 4315,
                'name' => 'Fa\'asaleleaga',
                'uuid' => $faker->uuid , 'abbr' => 'FA',
                'country_id' => 245,
            ),

            array(
                'id' => 4316,
                'name' => 'Gaga\'emauga',
                'uuid' => $faker->uuid , 'abbr' => 'GE',
                'country_id' => 245,
            ),

            array(
                'id' => 4317,
                'name' => 'Gagaifomauga',
                'uuid' => $faker->uuid , 'abbr' => 'GI',
                'country_id' => 245,
            ),

            array(
                'id' => 4318,
                'name' => 'Palauli',
                'uuid' => $faker->uuid , 'abbr' => 'PA',
                'country_id' => 245,
            ),

            array(
                'id' => 4319,
                'name' => 'Satupa\'itea',
                'uuid' => $faker->uuid , 'abbr' => 'SA',
                'country_id' => 245,
            ),

            array(
                'id' => 4320,
                'name' => 'Tuamasaga',
                'uuid' => $faker->uuid , 'abbr' => 'TU',
                'country_id' => 245,
            ),

            array(
                'id' => 4321,
                'name' => 'Va\'a-o-Fonoti',
                'uuid' => $faker->uuid , 'abbr' => 'VF',
                'country_id' => 245,
            ),

            array(
                'id' => 4322,
                'name' => 'Vaisigano',
                'uuid' => $faker->uuid , 'abbr' => 'VS',
                'country_id' => 245,
            ),

            array(
                'id' => 4323,
                'name' => 'Abyan',
                'uuid' => $faker->uuid , 'abbr' => 'AB',
                'country_id' => 246,
            ),

            array(
                'id' => 4324,
                'name' => 'ʿAdan',
                'uuid' => $faker->uuid , 'abbr' => 'AD',
                'country_id' => 246,
            ),

            array(
                'id' => 4325,
                'name' => '\'Amran',
                'uuid' => $faker->uuid , 'abbr' => 'AM',
                'country_id' => 246,
            ),

            array(
                'id' => 4326,
                'name' => 'Al Bay?a\'',
                'uuid' => $faker->uuid , 'abbr' => 'BA',
                'country_id' => 246,
            ),

            array(
                'id' => 4327,
                'name' => 'Ad¸ D¸ali\'',
                'uuid' => $faker->uuid , 'abbr' => 'DA',
                'country_id' => 246,
            ),

            array(
                'id' => 4328,
                'name' => 'Dhamar',
                'uuid' => $faker->uuid , 'abbr' => 'DH',
                'country_id' => 246,
            ),

            array(
                'id' => 4329,
                'name' => 'Hadramawt',
                'uuid' => $faker->uuid , 'abbr' => 'HD',
                'country_id' => 246,
            ),

            array(
                'id' => 4330,
                'name' => 'Hajjah',
                'uuid' => $faker->uuid , 'abbr' => 'HJ',
                'country_id' => 246,
            ),

            array(
                'id' => 4331,
                'name' => 'Al ?udaydah',
                'uuid' => $faker->uuid , 'abbr' => 'HU',
                'country_id' => 246,
            ),

            array(
                'id' => 4332,
                'name' => 'Ibb',
                'uuid' => $faker->uuid , 'abbr' => 'IB',
                'country_id' => 246,
            ),

            array(
                'id' => 4333,
                'name' => 'Al Jawf',
                'uuid' => $faker->uuid , 'abbr' => 'JA',
                'country_id' => 246,
            ),

            array(
                'id' => 4334,
                'name' => 'La?ij',
                'uuid' => $faker->uuid , 'abbr' => 'LA',
                'country_id' => 246,
            ),

            array(
                'id' => 4335,
                'name' => 'Ma\'rib',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 246,
            ),

            array(
                'id' => 4336,
                'name' => 'Al Mahrah',
                'uuid' => $faker->uuid , 'abbr' => 'MR',
                'country_id' => 246,
            ),

            array(
                'id' => 4337,
                'name' => 'Al Mahwit',
                'uuid' => $faker->uuid , 'abbr' => 'MW',
                'country_id' => 246,
            ),

            array(
                'id' => 4338,
                'name' => 'Sa`dah',
                'uuid' => $faker->uuid , 'abbr' => 'SD',
                'country_id' => 246,
            ),

            array(
                'id' => 4339,
                'name' => 'Shabwah',
                'uuid' => $faker->uuid , 'abbr' => 'SH',
                'country_id' => 246,
            ),

            array(
                'id' => 4340,
                'name' => 'Sanʿā',
                'uuid' => $faker->uuid , 'abbr' => 'SN',
                'country_id' => 246,
            ),

            array(
                'id' => 4341,
                'name' => 'Taʿizz',
                'uuid' => $faker->uuid , 'abbr' => 'TA',
                'country_id' => 246,
            ),

            array(
                'id' => 4342,
                'name' => 'Eastern Cape',
                'uuid' => $faker->uuid , 'abbr' => 'EC',
                'country_id' => 248,
            ),

            array(
                'id' => 4343,
                'name' => 'Free State',
                'uuid' => $faker->uuid , 'abbr' => 'FS',
                'country_id' => 248,
            ),

            array(
                'id' => 4344,
                'name' => 'Gauteng',
                'uuid' => $faker->uuid , 'abbr' => 'GT',
                'country_id' => 248,
            ),

            array(
                'id' => 4345,
                'name' => 'Limpopo',
                'uuid' => $faker->uuid , 'abbr' => 'LP',
                'country_id' => 248,
            ),

            array(
                'id' => 4346,
                'name' => 'Mpumalanga',
                'uuid' => $faker->uuid , 'abbr' => 'MP',
                'country_id' => 248,
            ),

            array(
                'id' => 4347,
                'name' => 'Northern Cape',
                'uuid' => $faker->uuid , 'abbr' => 'NC',
                'country_id' => 248,
            ),

            array(
                'id' => 4348,
                'name' => 'Kwazulu-Natal',
                'uuid' => $faker->uuid , 'abbr' => 'NL',
                'country_id' => 248,
            ),

            array(
                'id' => 4349,
                'name' => 'North-West',
                'uuid' => $faker->uuid , 'abbr' => 'NW',
                'country_id' => 248,
            ),

            array(
                'id' => 4350,
                'name' => 'Western Cape',
                'uuid' => $faker->uuid , 'abbr' => 'WC',
                'country_id' => 248,
            ),

            array(
                'id' => 4351,
                'name' => 'Western',
                'uuid' => $faker->uuid , 'abbr' => 01,
                'country_id' => 249,
            ),

            array(
                'id' => 4352,
                'name' => 'Central',
                'uuid' => $faker->uuid , 'abbr' => 02,
                'country_id' => 249,
            ),

            array(
                'id' => 4353,
                'name' => 'Eastern',
                'uuid' => $faker->uuid , 'abbr' => 03,
                'country_id' => 249,
            ),

            array(
                'id' => 4354,
                'name' => 'Luapula',
                'uuid' => $faker->uuid , 'abbr' => 04,
                'country_id' => 249,
            ),

            array(
                'id' => 4355,
                'name' => 'Northern',
                'uuid' => $faker->uuid , 'abbr' => 05,
                'country_id' => 249,
            ),

            array(
                'id' => 4356,
                'name' => 'North-Western',
                'uuid' => $faker->uuid , 'abbr' => 06,
                'country_id' => 249,
            ),

            array(
                'id' => 4357,
                'name' => 'Southern',
                'uuid' => $faker->uuid , 'abbr' => 07,
                'country_id' => 249,
            ),

            array(
                'id' => 4358,
                'name' => 'Copperbelt',
                'uuid' => $faker->uuid , 'abbr' =>8,
                'country_id' => 249,
            ),

            array(
                'id' => 4359,
                'name' => 'Lusaka',
                'uuid' => $faker->uuid , 'abbr' =>9,
                'country_id' => 249,
            ),

            array(
                'id' => 4360,
                'name' => 'Bulawayo',
                'uuid' => $faker->uuid , 'abbr' => 'BU',
                'country_id' => 250,
            ),

            array(
                'id' => 4361,
                'name' => 'Harare',
                'uuid' => $faker->uuid , 'abbr' => 'HA',
                'country_id' => 250,
            ),

            array(
                'id' => 4362,
                'name' => 'Manicaland',
                'uuid' => $faker->uuid , 'abbr' => 'MA',
                'country_id' => 250,
            ),

            array(
                'id' => 4363,
                'name' => 'Mashonaland Central',
                'uuid' => $faker->uuid , 'abbr' => 'MC',
                'country_id' => 250,
            ),

            array(
                'id' => 4364,
                'name' => 'Mashonaland East',
                'uuid' => $faker->uuid , 'abbr' => 'ME',
                'country_id' => 250,
            ),

            array(
                'id' => 4365,
                'name' => 'Midlands',
                'uuid' => $faker->uuid , 'abbr' => 'MI',
                'country_id' => 250,
            ),

            array(
                'id' => 4366,
                'name' => 'Matabeleland North',
                'uuid' => $faker->uuid , 'abbr' => 'MN',
                'country_id' => 250,
            ),

            array(
                'id' => 4367,
                'name' => 'Matabeleland South',
                'uuid' => $faker->uuid , 'abbr' => 'MS',
                'country_id' => 250,
            ),

            array(
                'id' => 4368,
                'name' => 'Masvingo',
                'uuid' => $faker->uuid , 'abbr' => 'MV',
                'country_id' => 250,
            ),

            array(
                'id' => 4369,
                'name' => 'Mashonaland West',
                'uuid' => $faker->uuid , 'abbr' => 'MW',
                'country_id' => 250,
            ),

        ));

    }
}
