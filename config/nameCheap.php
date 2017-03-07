<?php
/**
 * Created by PhpStorm.
 * User: johan
 * Date: 12/07/2016
 * Time: 9:58 AM
 */

return [
    'NAMECHEAP' => [
        'api_key' => env('name_cheap_api_key' , 'd746e92d21d24a46a194c6535a5d24a3'),
        'api_user' => env('name_cheap_api_user' , 'sectorstream'),
        'url' => env('url_name_cheap' , 'https://api.namecheap.com/xml.response'),
    ],
];