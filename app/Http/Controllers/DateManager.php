<?php
/**
 * Created by PhpStorm.
 * User: bucalexis
 * Date: 3/12/17
 * Time: 9:15 PM
 */

namespace App\Http\Controllers;
use Carbon\Carbon;


class DateManager
{
    /**
     * Change the format of a mysql date
     * @param String A date in format Y-m-d H:i:s
     * @return String A date formatted to d/m/Y
     */
    public static function dateToDmy($date)
    {
        $formatted=Carbon::createFromFormat('Y-m-d H:i:s', $date);
        return $formatted->format('d/m/Y');
    }
}