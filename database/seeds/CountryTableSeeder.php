<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('countries')->insert(array(

            array(
                'id' => 1,
                'name' => 'Andorra',
                 'uuid' => $faker->uuid,
                'abbr' => 'AD',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 2,
                'name' => 'United Arab Emirates',
                 'uuid' => $faker->uuid,
                'abbr'  => 'AE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 3,
                'name' => 'Afghanistan',
                 'uuid' => $faker->uuid, 'abbr'  => 'AF',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 4,
                'name' => 'Antigua and Barbuda',
                 'uuid' => $faker->uuid, 'abbr'  => 'AG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 5,
                'name' => 'Anguilla',
                 'uuid' => $faker->uuid, 'abbr'  => 'AI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 6,
                'name' => 'Albania',
                 'uuid' => $faker->uuid, 'abbr'  => 'AL',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 7,
                'name' => 'Armenia',
                 'uuid' => $faker->uuid, 'abbr'  => 'AM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 8,
                'name' => 'Netherlands Antilles',
                 'uuid' => $faker->uuid, 'abbr'  => 'AN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 9,
                'name' => 'Angola',
                 'uuid' => $faker->uuid, 'abbr'  => 'AO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 10,
                'name' => 'Antarctica',
                 'uuid' => $faker->uuid, 'abbr'  => 'AQ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 11,
                'name' => 'Argentina',
                 'uuid' => $faker->uuid, 'abbr'  => 'AR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 12,
                'name' => 'American Samoa',
                 'uuid' => $faker->uuid, 'abbr'  => 'AS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 13,
                'name' => 'Austria',
                 'uuid' => $faker->uuid, 'abbr'  => 'AT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 14,
                'name' => 'Australia',
                 'uuid' => $faker->uuid, 'abbr'  => 'AU',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 15,
                'name' => 'Aruba',
                 'uuid' => $faker->uuid, 'abbr'  => 'AW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 16,
                'name' => 'Åland Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'AX',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 17,
                'name' => 'Azerbaijan',
                 'uuid' => $faker->uuid, 'abbr'  => 'AZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 18,
                'name' => 'Bosnia and Herzegovina',
                 'uuid' => $faker->uuid, 'abbr'  => 'BA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 19,
                'name' => 'Barbados',
                 'uuid' => $faker->uuid, 'abbr'  => 'BB',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 20,
                'name' => 'Bangladesh',
                 'uuid' => $faker->uuid, 'abbr'  => 'BD',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 21,
                'name' => 'Belgium',
                 'uuid' => $faker->uuid, 'abbr'  => 'BE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 22,
                'name' => 'Burkina Faso',
                 'uuid' => $faker->uuid, 'abbr'  => 'BF',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 23,
                'name' => 'Bulgaria',
                 'uuid' => $faker->uuid, 'abbr'  => 'BG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 24,
                'name' => 'Bahrain',
                 'uuid' => $faker->uuid, 'abbr'  => 'BH',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 25,
                'name' => 'Burundi',
                 'uuid' => $faker->uuid, 'abbr'  => 'BI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 26,
                'name' => 'Benin',
                 'uuid' => $faker->uuid, 'abbr'  => 'BJ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 27,
                'name' => 'Saint Barthélemy',
                 'uuid' => $faker->uuid, 'abbr'  => 'BL',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 28,
                'name' => 'Bermuda',
                 'uuid' => $faker->uuid, 'abbr'  => 'BM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 29,
                'name' => 'Brunei Darussalam',
                 'uuid' => $faker->uuid, 'abbr'  => 'BN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 30,
                'name' => 'Bolivia',
                 'uuid' => $faker->uuid, 'abbr'  => 'BO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 31,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                 'uuid' => $faker->uuid, 'abbr'  => 'BQ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 32,
                'name' => 'Brazil',
                 'uuid' => $faker->uuid, 'abbr'  => 'BR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 33,
                'name' => 'Bahamas',
                 'uuid' => $faker->uuid, 'abbr'  => 'BS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 34,
                'name' => 'Bhutan',
                 'uuid' => $faker->uuid, 'abbr'  => 'BT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 35,
                'name' => 'Bouvet Island',
                 'uuid' => $faker->uuid, 'abbr'  => 'BV',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 36,
                'name' => 'Botswana',
                 'uuid' => $faker->uuid, 'abbr'  => 'BW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 37,
                'name' => 'Belarus',
                 'uuid' => $faker->uuid, 'abbr'  => 'BY',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 38,
                'name' => 'Belize',
                 'uuid' => $faker->uuid, 'abbr'  => 'BZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 39,
                'name' => 'Canada',
                 'uuid' => $faker->uuid, 'abbr'  => 'CA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 40,
                'name' => 'Cocos (Keeling) Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'CC',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 41,
                'name' => 'Congo, The Democratic Republic Of The',
                 'uuid' => $faker->uuid, 'abbr'  => 'CD',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 42,
                'name' => 'Central African Republic',
                 'uuid' => $faker->uuid, 'abbr'  => 'CF',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 43,
                'name' => 'Congo',
                 'uuid' => $faker->uuid, 'abbr'  => 'CG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 44,
                'name' => 'Switzerland',
                 'uuid' => $faker->uuid, 'abbr'  => 'CH',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 45,
                'name' => 'Côte D\'Ivoire',
                 'uuid' => $faker->uuid, 'abbr'  => 'CI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 46,
                'name' => 'Cook Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'CK',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 47,
                'name' => 'Chile',
                 'uuid' => $faker->uuid, 'abbr'  => 'CL',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 48,
                'name' => 'Cameroon',
                 'uuid' => $faker->uuid, 'abbr'  => 'CM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 49,
                'name' => 'China',
                 'uuid' => $faker->uuid, 'abbr'  => 'CN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 50,
                'name' => 'Colombia',
                 'uuid' => $faker->uuid, 'abbr'  => 'CO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 51,
                'name' => 'Costa Rica',
                 'uuid' => $faker->uuid, 'abbr'  => 'CR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 52,
                'name' => 'Cuba',
                 'uuid' => $faker->uuid, 'abbr'  => 'CU',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 53,
                'name' => 'Cape Verde',
                 'uuid' => $faker->uuid, 'abbr'  => 'CV',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 54,
                'name' => 'Curaçao',
                 'uuid' => $faker->uuid, 'abbr'  => 'CW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 55,
                'name' => 'Christmas Island',
                 'uuid' => $faker->uuid, 'abbr'  => 'CX',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 56,
                'name' => 'Cyprus',
                 'uuid' => $faker->uuid, 'abbr'  => 'CY',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 57,
                'name' => 'Czech Republic',
                 'uuid' => $faker->uuid, 'abbr'  => 'CZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 58,
                'name' => 'Germany',
                 'uuid' => $faker->uuid, 'abbr'  => 'DE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 59,
                'name' => 'Djibouti',
                 'uuid' => $faker->uuid, 'abbr'  => 'DJ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 60,
                'name' => 'Denmark',
                 'uuid' => $faker->uuid, 'abbr'  => 'DK',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 61,
                'name' => 'Dominica',
                 'uuid' => $faker->uuid, 'abbr'  => 'DM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 62,
                'name' => 'Dominican Republic',
                 'uuid' => $faker->uuid, 'abbr'  => 'DO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 63,
                'name' => 'Algeria',
                 'uuid' => $faker->uuid, 'abbr'  => 'DZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 64,
                'name' => 'Ecuador',
                 'uuid' => $faker->uuid, 'abbr'  => 'EC',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 65,
                'name' => 'Estonia',
                 'uuid' => $faker->uuid, 'abbr'  => 'EE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 66,
                'name' => 'Egypt',
                 'uuid' => $faker->uuid, 'abbr'  => 'EG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 67,
                'name' => 'Western Sahara',
                 'uuid' => $faker->uuid, 'abbr'  => 'EH',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 68,
                'name' => 'Eritrea',
                 'uuid' => $faker->uuid, 'abbr'  => 'ER',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 69,
                'name' => 'Spain',
                 'uuid' => $faker->uuid, 'abbr'  => 'ES',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 70,
                'name' => 'Ethiopia',
                 'uuid' => $faker->uuid, 'abbr'  => 'ET',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 71,
                'name' => 'Finland',
                 'uuid' => $faker->uuid, 'abbr'  => 'FI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 72,
                'name' => 'Fiji',
                 'uuid' => $faker->uuid, 'abbr'  => 'FJ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 73,
                'name' => 'Falkland Islands (Malvinas)',
                 'uuid' => $faker->uuid, 'abbr'  => 'FK',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 74,
                'name' => 'Micronesia, Federated States Of',
                 'uuid' => $faker->uuid, 'abbr'  => 'FM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 75,
                'name' => 'Faroe Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'FO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 76,
                'name' => 'France',
                 'uuid' => $faker->uuid, 'abbr'  => 'FR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 77,
                'name' => 'Gabon',
                 'uuid' => $faker->uuid, 'abbr'  => 'GA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 78,
                'name' => 'United Kingdom',
                 'uuid' => $faker->uuid, 'abbr'  => 'GB',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 79,
                'name' => 'Grenada',
                 'uuid' => $faker->uuid, 'abbr'  => 'GD',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 80,
                'name' => 'Georgia',
                 'uuid' => $faker->uuid, 'abbr'  => 'GE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 81,
                'name' => 'French Guiana',
                 'uuid' => $faker->uuid, 'abbr'  => 'GF',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 82,
                'name' => 'Guernsey',
                 'uuid' => $faker->uuid, 'abbr'  => 'GG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 83,
                'name' => 'Ghana',
                 'uuid' => $faker->uuid, 'abbr'  => 'GH',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 84,
                'name' => 'Gibraltar',
                 'uuid' => $faker->uuid, 'abbr'  => 'GI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 85,
                'name' => 'Greenland',
                 'uuid' => $faker->uuid, 'abbr'  => 'GL',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 86,
                'name' => 'Gambia',
                 'uuid' => $faker->uuid, 'abbr'  => 'GM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 87,
                'name' => 'Guinea',
                 'uuid' => $faker->uuid, 'abbr'  => 'GN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 88,
                'name' => 'Guadeloupe',
                 'uuid' => $faker->uuid, 'abbr'  => 'GP',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 89,
                'name' => 'Equatorial Guinea',
                 'uuid' => $faker->uuid, 'abbr'  => 'GQ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 90,
                'name' => 'Greece',
                 'uuid' => $faker->uuid, 'abbr'  => 'GR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 91,
                'name' => 'South Georgia and the South Sandwich Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'GS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 92,
                'name' => 'Guatemala',
                 'uuid' => $faker->uuid, 'abbr'  => 'GT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 93,
                'name' => 'Guam',
                 'uuid' => $faker->uuid, 'abbr'  => 'GU',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 94,
                'name' => 'Guinea-Bissau',
                 'uuid' => $faker->uuid, 'abbr'  => 'GW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 95,
                'name' => 'Guyana',
                 'uuid' => $faker->uuid, 'abbr'  => 'GY',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 96,
                'name' => 'Hong Kong',
                 'uuid' => $faker->uuid, 'abbr'  => 'HK',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 97,
                'name' => 'Heard and McDonald Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'HM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 98,
                'name' => 'Honduras',
                 'uuid' => $faker->uuid, 'abbr'  => 'HN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 99,
                'name' => 'Croatia',
                 'uuid' => $faker->uuid, 'abbr'  => 'HR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 100,
                'name' => 'Haiti',
                 'uuid' => $faker->uuid, 'abbr'  => 'HT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 101,
                'name' => 'Hungary',
                 'uuid' => $faker->uuid, 'abbr'  => 'HU',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 102,
                'name' => 'Indonesia',
                 'uuid' => $faker->uuid, 'abbr'  => 'ID',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 103,
                'name' => 'Ireland',
                 'uuid' => $faker->uuid, 'abbr'  => 'IE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 104,
                'name' => 'Israel',
                 'uuid' => $faker->uuid, 'abbr'  => 'IL',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 105,
                'name' => 'Isle of Man',
                 'uuid' => $faker->uuid, 'abbr'  => 'IM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 106,
                'name' => 'India',
                 'uuid' => $faker->uuid, 'abbr'  => 'IN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 107,
                'name' => 'British Indian Ocean Territory',
                 'uuid' => $faker->uuid, 'abbr'  => 'IO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 108,
                'name' => 'Iraq',
                 'uuid' => $faker->uuid, 'abbr'  => 'IQ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 109,
                'name' => 'Iran, Islamic Republic Of',
                 'uuid' => $faker->uuid, 'abbr'  => 'IR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 110,
                'name' => 'Iceland',
                 'uuid' => $faker->uuid, 'abbr'  => 'IS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 111,
                'name' => 'Italy',
                 'uuid' => $faker->uuid, 'abbr'  => 'IT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 112,
                'name' => 'Jersey',
                 'uuid' => $faker->uuid, 'abbr'  => 'JE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 113,
                'name' => 'Jamaica',
                 'uuid' => $faker->uuid, 'abbr'  => 'JM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 114,
                'name' => 'Jordan',
                 'uuid' => $faker->uuid, 'abbr'  => 'JO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 115,
                'name' => 'Japan',
                 'uuid' => $faker->uuid, 'abbr'  => 'JP',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 116,
                'name' => 'Kenya',
                 'uuid' => $faker->uuid, 'abbr'  => 'KE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 117,
                'name' => 'Kyrgyzstan',
                 'uuid' => $faker->uuid, 'abbr'  => 'KG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 118,
                'name' => 'Cambodia',
                 'uuid' => $faker->uuid, 'abbr'  => 'KH',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 119,
                'name' => 'Kiribati',
                 'uuid' => $faker->uuid, 'abbr'  => 'KI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 120,
                'name' => 'Comoros',
                 'uuid' => $faker->uuid, 'abbr'  => 'KM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 121,
                'name' => 'Saint Kitts And Nevis',
                 'uuid' => $faker->uuid, 'abbr'  => 'KN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 122,
                'name' => 'Korea, Democratic People\'s Republic Of',
                 'uuid' => $faker->uuid, 'abbr'  => 'KP',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 123,
                'name' => 'Korea, Republic of',
                 'uuid' => $faker->uuid, 'abbr'  => 'KR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 124,
                'name' => 'Kuwait',
                 'uuid' => $faker->uuid, 'abbr'  => 'KW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 125,
                'name' => 'Cayman Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'KY',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 126,
                'name' => 'Kazakhstan',
                 'uuid' => $faker->uuid, 'abbr'  => 'KZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 127,
                'name' => 'Lao People\'s Democratic Republic',
                 'uuid' => $faker->uuid, 'abbr'  => 'LA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 128,
                'name' => 'Lebanon',
                 'uuid' => $faker->uuid, 'abbr'  => 'LB',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 129,
                'name' => 'Saint Lucia',
                 'uuid' => $faker->uuid, 'abbr'  => 'LC',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 130,
                'name' => 'Liechtenstein',
                 'uuid' => $faker->uuid, 'abbr'  => 'LI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 131,
                'name' => 'Sri Lanka',
                 'uuid' => $faker->uuid, 'abbr'  => 'LK',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 132,
                'name' => 'Liberia',
                 'uuid' => $faker->uuid, 'abbr'  => 'LR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 133,
                'name' => 'Lesotho',
                 'uuid' => $faker->uuid, 'abbr'  => 'LS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 134,
                'name' => 'Lithuania',
                 'uuid' => $faker->uuid, 'abbr'  => 'LT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 135,
                'name' => 'Luxembourg',
                 'uuid' => $faker->uuid, 'abbr'  => 'LU',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 136,
                'name' => 'Latvia',
                 'uuid' => $faker->uuid, 'abbr'  => 'LV',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 137,
                'name' => 'Libya',
                 'uuid' => $faker->uuid, 'abbr'  => 'LY',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 138,
                'name' => 'Morocco',
                 'uuid' => $faker->uuid, 'abbr'  => 'MA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 139,
                'name' => 'Monaco',
                 'uuid' => $faker->uuid, 'abbr'  => 'MC',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 140,
                'name' => 'Moldova, Republic of',
                 'uuid' => $faker->uuid, 'abbr'  => 'MD',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 141,
                'name' => 'Montenegro',
                 'uuid' => $faker->uuid, 'abbr'  => 'ME',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 142,
                'name' => 'Saint Martin',
                 'uuid' => $faker->uuid, 'abbr'  => 'MF',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 143,
                'name' => 'Madagascar',
                 'uuid' => $faker->uuid, 'abbr'  => 'MG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 144,
                'name' => 'Marshall Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'MH',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 145,
                'name' => 'Macedonia, the Former Yugoslav Republic Of',
                 'uuid' => $faker->uuid, 'abbr'  => 'MK',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 146,
                'name' => 'Mali',
                 'uuid' => $faker->uuid, 'abbr'  => 'ML',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 147,
                'name' => 'Myanmar',
                 'uuid' => $faker->uuid, 'abbr'  => 'MM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 148,
                'name' => 'Mongolia',
                 'uuid' => $faker->uuid, 'abbr'  => 'MN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 149,
                'name' => 'Macao',
                 'uuid' => $faker->uuid, 'abbr'  => 'MO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 150,
                'name' => 'Northern Mariana Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'MP',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 151,
                'name' => 'Martinique',
                 'uuid' => $faker->uuid, 'abbr'  => 'MQ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 152,
                'name' => 'Mauritania',
                 'uuid' => $faker->uuid, 'abbr'  => 'MR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 153,
                'name' => 'Montserrat',
                 'uuid' => $faker->uuid, 'abbr'  => 'MS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 154,
                'name' => 'Malta',
                 'uuid' => $faker->uuid, 'abbr'  => 'MT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 155,
                'name' => 'Mauritius',
                 'uuid' => $faker->uuid, 'abbr'  => 'MU',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 156,
                'name' => 'Maldives',
                 'uuid' => $faker->uuid, 'abbr'  => 'MV',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 157,
                'name' => 'Malawi',
                 'uuid' => $faker->uuid, 'abbr'  => 'MW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 158,
                'name' => 'Mexico',
                 'uuid' => $faker->uuid, 'abbr'  => 'MX',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 159,
                'name' => 'Malaysia',
                 'uuid' => $faker->uuid, 'abbr'  => 'MY',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 160,
                'name' => 'Mozambique',
                 'uuid' => $faker->uuid, 'abbr'  => 'MZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 161,
                'name' => 'Namibia',
                 'uuid' => $faker->uuid, 'abbr'  => 'NA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 162,
                'name' => 'New Caledonia',
                 'uuid' => $faker->uuid, 'abbr'  => 'NC',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 163,
                'name' => 'Niger',
                 'uuid' => $faker->uuid, 'abbr'  => 'NE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 164,
                'name' => 'Norfolk Island',
                 'uuid' => $faker->uuid, 'abbr'  => 'NF',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 165,
                'name' => 'Nigeria',
                 'uuid' => $faker->uuid, 'abbr'  => 'NG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 166,
                'name' => 'Nicaragua',
                 'uuid' => $faker->uuid, 'abbr'  => 'NI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 167,
                'name' => 'Netherlands',
                 'uuid' => $faker->uuid, 'abbr'  => 'NL',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 168,
                'name' => 'Norway',
                 'uuid' => $faker->uuid, 'abbr'  => 'NO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 169,
                'name' => 'Nepal',
                 'uuid' => $faker->uuid, 'abbr'  => 'NP',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 170,
                'name' => 'Nauru',
                 'uuid' => $faker->uuid, 'abbr'  => 'NR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 171,
                'name' => 'Niue',
                 'uuid' => $faker->uuid, 'abbr'  => 'NU',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 172,
                'name' => 'New Zealand',
                 'uuid' => $faker->uuid, 'abbr'  => 'NZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 173,
                'name' => 'Oman',
                 'uuid' => $faker->uuid, 'abbr'  => 'OM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 174,
                'name' => 'Panama',
                 'uuid' => $faker->uuid, 'abbr'  => 'PA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 175,
                'name' => 'Peru',
                 'uuid' => $faker->uuid, 'abbr'  => 'PE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 176,
                'name' => 'French Polynesia',
                 'uuid' => $faker->uuid, 'abbr'  => 'PF',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 177,
                'name' => 'Papua New Guinea',
                 'uuid' => $faker->uuid, 'abbr'  => 'PG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 178,
                'name' => 'Philippines',
                 'uuid' => $faker->uuid, 'abbr'  => 'PH',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 179,
                'name' => 'Pakistan',
                 'uuid' => $faker->uuid, 'abbr'  => 'PK',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 180,
                'name' => 'Poland',
                 'uuid' => $faker->uuid, 'abbr'  => 'PL',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 181,
                'name' => 'Saint Pierre And Miquelon',
                 'uuid' => $faker->uuid, 'abbr'  => 'PM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 182,
                'name' => 'Pitcairn',
                 'uuid' => $faker->uuid, 'abbr'  => 'PN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 183,
                'name' => 'Puerto Rico',
                 'uuid' => $faker->uuid, 'abbr'  => 'PR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 184,
                'name' => 'Palestine, State of',
                 'uuid' => $faker->uuid, 'abbr'  => 'PS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 185,
                'name' => 'Portugal',
                 'uuid' => $faker->uuid, 'abbr'  => 'PT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 186,
                'name' => 'Palau',
                 'uuid' => $faker->uuid, 'abbr'  => 'PW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 187,
                'name' => 'Paraguay',
                 'uuid' => $faker->uuid, 'abbr'  => 'PY',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 188,
                'name' => 'Qatar',
                 'uuid' => $faker->uuid, 'abbr'  => 'QA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 189,
                'name' => 'Réunion',
                 'uuid' => $faker->uuid, 'abbr'  => 'RE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 190,
                'name' => 'Romania',
                 'uuid' => $faker->uuid, 'abbr'  => 'RO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 191,
                'name' => 'Serbia',
                 'uuid' => $faker->uuid, 'abbr'  => 'RS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 192,
                'name' => 'Russian Federation',
                 'uuid' => $faker->uuid, 'abbr'  => 'RU',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 193,
                'name' => 'Rwanda',
                 'uuid' => $faker->uuid, 'abbr'  => 'RW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 194,
                'name' => 'Saudi Arabia',
                 'uuid' => $faker->uuid, 'abbr'  => 'SA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 195,
                'name' => 'Solomon Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'SB',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 196,
                'name' => 'Seychelles',
                 'uuid' => $faker->uuid, 'abbr'  => 'SC',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 197,
                'name' => 'Sudan',
                 'uuid' => $faker->uuid, 'abbr'  => 'SD',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 198,
                'name' => 'Sweden',
                 'uuid' => $faker->uuid, 'abbr'  => 'SE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 199,
                'name' => 'Singapore',
                 'uuid' => $faker->uuid, 'abbr'  => 'SG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 200,
                'name' => 'Saint Helena',
                 'uuid' => $faker->uuid, 'abbr'  => 'SH',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 201,
                'name' => 'Slovenia',
                 'uuid' => $faker->uuid, 'abbr'  => 'SI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 202,
                'name' => 'Svalbard And Jan Mayen',
                 'uuid' => $faker->uuid, 'abbr'  => 'SJ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 203,
                'name' => 'Slovakia',
                 'uuid' => $faker->uuid, 'abbr'  => 'SK',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 204,
                'name' => 'Sierra Leone',
                 'uuid' => $faker->uuid, 'abbr'  => 'SL',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 205,
                'name' => 'San Marino',
                 'uuid' => $faker->uuid, 'abbr'  => 'SM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 206,
                'name' => 'Senegal',
                 'uuid' => $faker->uuid, 'abbr'  => 'SN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 207,
                'name' => 'Somalia',
                 'uuid' => $faker->uuid, 'abbr'  => 'SO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 208,
                'name' => 'Suriname',
                 'uuid' => $faker->uuid, 'abbr'  => 'SR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 209,
                'name' => 'South Sudan',
                 'uuid' => $faker->uuid, 'abbr'  => 'SS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 210,
                'name' => 'Sao Tome and Principe',
                 'uuid' => $faker->uuid, 'abbr'  => 'ST',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 211,
                'name' => 'El Salvador',
                 'uuid' => $faker->uuid, 'abbr'  => 'SV',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 212,
                'name' => 'Sint Maarten',
                 'uuid' => $faker->uuid, 'abbr'  => 'SX',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 213,
                'name' => 'Syrian Arab Republic',
                 'uuid' => $faker->uuid, 'abbr'  => 'SY',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 214,
                'name' => 'Swaziland',
                 'uuid' => $faker->uuid, 'abbr'  => 'SZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 215,
                'name' => 'Turks and Caicos Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'TC',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 216,
                'name' => 'Chad',
                 'uuid' => $faker->uuid, 'abbr'  => 'TD',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 217,
                'name' => 'French Southern Territories',
                 'uuid' => $faker->uuid, 'abbr'  => 'TF',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 218,
                'name' => 'Togo',
                 'uuid' => $faker->uuid, 'abbr'  => 'TG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 219,
                'name' => 'Thailand',
                 'uuid' => $faker->uuid, 'abbr'  => 'TH',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 220,
                'name' => 'Tajikistan',
                 'uuid' => $faker->uuid, 'abbr'  => 'TJ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 221,
                'name' => 'Tokelau',
                 'uuid' => $faker->uuid, 'abbr'  => 'TK',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 222,
                'name' => 'Timor-Leste',
                 'uuid' => $faker->uuid, 'abbr'  => 'TL',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 223,
                'name' => 'Turkmenistan',
                 'uuid' => $faker->uuid, 'abbr'  => 'TM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 224,
                'name' => 'Tunisia',
                 'uuid' => $faker->uuid, 'abbr'  => 'TN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 225,
                'name' => 'Tonga',
                 'uuid' => $faker->uuid, 'abbr'  => 'TO',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 226,
                'name' => 'Turkey',
                 'uuid' => $faker->uuid, 'abbr'  => 'TR',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 227,
                'name' => 'Trinidad and Tobago',
                 'uuid' => $faker->uuid, 'abbr'  => 'TT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 228,
                'name' => 'Tuvalu',
                 'uuid' => $faker->uuid, 'abbr'  => 'TV',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 229,
                'name' => 'Taiwan, Republic Of China',
                 'uuid' => $faker->uuid, 'abbr'  => 'TW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 230,
                'name' => 'Tanzania, United Republic of',
                 'uuid' => $faker->uuid, 'abbr'  => 'TZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 231,
                'name' => 'Ukraine',
                 'uuid' => $faker->uuid, 'abbr'  => 'UA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 232,
                'name' => 'Uganda',
                 'uuid' => $faker->uuid, 'abbr'  => 'UG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 233,
                'name' => 'United States Minor Outlying Islands',
                 'uuid' => $faker->uuid, 'abbr'  => 'UM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 234,
                'name' => 'United States',
                 'uuid' => $faker->uuid, 'abbr'  => 'US',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 235,
                'name' => 'Uruguay',
                 'uuid' => $faker->uuid, 'abbr'  => 'UY',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 236,
                'name' => 'Uzbekistan',
                 'uuid' => $faker->uuid, 'abbr'  => 'UZ',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 237,
                'name' => 'Holy See (Vatican City State)',
                 'uuid' => $faker->uuid, 'abbr'  => 'VA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 238,
                'name' => 'Saint Vincent And The Grenadines',
                 'uuid' => $faker->uuid, 'abbr'  => 'VC',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 239,
                'name' => 'Venezuela, Bolivarian Republic of',
                 'uuid' => $faker->uuid, 'abbr'  => 'VE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 240,
                'name' => 'Virgin Islands, British',
                 'uuid' => $faker->uuid, 'abbr'  => 'VG',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 241,
                'name' => 'Virgin Islands, U.S.',
                 'uuid' => $faker->uuid, 'abbr'  => 'VI',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 242,
                'name' => 'Vietnam',
                 'uuid' => $faker->uuid, 'abbr'  => 'VN',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 243,
                'name' => 'Vanuatu',
                 'uuid' => $faker->uuid, 'abbr'  => 'VU',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 244,
                'name' => 'Wallis and Futuna',
                 'uuid' => $faker->uuid, 'abbr'  => 'WF',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 245,
                'name' => 'Samoa',
                 'uuid' => $faker->uuid, 'abbr'  => 'WS',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 246,
                'name' => 'Yemen',
                 'uuid' => $faker->uuid, 'abbr'  => 'YE',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 247,
                'name' => 'Mayotte',
                 'uuid' => $faker->uuid, 'abbr'  => 'YT',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 248,
                'name' => 'South Africa',
                 'uuid' => $faker->uuid, 'abbr'  => 'ZA',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 249,
                'name' => 'Zambia',
                 'uuid' => $faker->uuid, 'abbr'  => 'ZM',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

            array(
                'id' => 250,
                'name' => 'Zimbabwe',
                 'uuid' => $faker->uuid, 'abbr'  => 'ZW',
                'active_shipping' => 0,
                'active_billing' => 0,
            ),

        ));
    }
}
