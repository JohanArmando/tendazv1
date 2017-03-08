<?php
/**
 * Created by PhpStorm.
 * User: johan
 * Date: 12/07/2016
 * Time: 9:58 AM
 */

return [
    'NAMECHEAP' => [
        'api_key' => env('name_cheap_api_key' , '42ca3f56ff21490986b58fc09f3c4c3b'),
        'api_user' => env('name_cheap_api_user' , 'sectorstream'),
        'url' => env('url_name_cheap' , 'https://api.namecheap.com/xml.response'),
    ],
];