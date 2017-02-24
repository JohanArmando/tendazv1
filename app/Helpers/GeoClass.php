<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 1/11/16
 * Time: 05:04 PM
 */

namespace Tendaz\Helpers;


use Illuminate\Support\Facades\Cache;

class GeoClass
{static $use_xcache = true;
    static $api = "http://ip-api.com/php/";

    public $status, $country, $countryCode, $region, $regionName, $city, $zip, $lat, $lon, $timezone, $isp, $org, $as, $reverse, $query, $message;

    public static function query() {
        $data = self::communicate();
        $result = new static;
        foreach($data as $key => $val) {
            $result->$key = $val;
        }
        return $result;
    }

    public static function communicate() {
        if(is_callable('curl_init')) {
            $c = curl_init();
            curl_setopt($c, CURLOPT_URL, self::$api);
            curl_setopt($c, CURLOPT_HEADER, false);
            curl_setopt($c, CURLOPT_TIMEOUT, 30);
            curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
            $result_array = unserialize(curl_exec($c));
            curl_close($c);
        } else {
            $result_array = unserialize(file_get_contents(self::$api));
        }
        return $result_array;
    }

}