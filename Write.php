<?php
/**
 * Created by PhpStorm.
 * User: KGN
 * Date: 22.07.2016
 * Time: 09:22
 */

namespace Exchange;


class Write
{
    public static function Printer($data)
    {
        foreach($data as $value)
        {
            echo $value."<br />";
        }
    }
}