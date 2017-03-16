<?php
/**
 * Created by PhpStorm.
 * User: johan
 * Date: 8/07/2016
 * Time: 5:04 PM
 */

namespace Tendaz\components;


use Carbon\Carbon;

class DateGenerator
{
    public static function dateGenerate($date){
        $meses = array('Diciembre' , 'Enero' , 'Febrero' , 'Marzo' , 'Abril' , 'Mayo' ,'Junio', 'Julio' , 'Agosto' ,'Septiembre' ,'Octubre' ,'Noviembre');
        if(!is_null($date)){
            $dateTime = Carbon::parse($date);
            $year = $dateTime->year;
            $month = $meses[$dateTime->month-1];
            $day = $dateTime->day;
        }
        $of = ' de ';
        return $day.$of.$month.','.$year;
    }

    public static function dateGenerateHome($date){
        $meses = array('Diciembre','Enero' , 'Feberero' , 'Marzo' , 'Abril' , 'Mayo' ,'Junio', 'Julio' , 'Agosto' ,'Septiembre' ,'Octubre' ,'Noviembre' );
        $dayWeekend = array('Domingo','Lunes' , 'Martes' , 'Miercoles' , 'Jueves' , 'Viernes' , 'Sabado' );
        if(!is_null($date)){
            $dateTime = Carbon::parse($date);
            $dayOfWeekend = $dayWeekend[$dateTime->dayOfWeek];
            $month = $meses[$dateTime->month];
            $day = $dateTime->day;
        }
        $of = ' de ';
        return $dayOfWeekend.' '.$day.$of.$month;
    }
}