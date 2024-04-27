<?php

use Illuminate\Support\Facades\Request;
use Morilog\Jalali\Jalalian;

/**
 *  active sidebar dynamically
 * @param $routeName
 * @return bool
 */

function isActiveRouteSidebar($routeName)
{
    return Request::routeIs($routeName);
}


/**
 * convert of the date to Jalali
 *
 * @param $date
 * @param $format
 * @return string
 */
function setDateToJalali($date, $format): string
{
    // TODO: set default format to arguments
    return Jalalian::forge($date)->format($format);
}

function toPersianNum($number)
    {
        $number = str_replace("1","۱",$number);
        $number = str_replace("2","۲",$number);
        $number = str_replace("3","۳",$number);
        $number = str_replace("4","۴",$number);
        $number = str_replace("5","۵",$number);
        $number = str_replace("6","۶",$number);
        $number = str_replace("7","۷",$number);
        $number = str_replace("8","۸",$number);
        $number = str_replace("9","۹",$number);
        $number = str_replace("0","۰",$number);
        return $number;
}
