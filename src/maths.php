<?php

class Maths
{
    public static function double($var)
    {
        return $var*2;
    }

    public static function triple($var)
    {
        return $var*3;
    }

    public static function sortArray($array)
    {
        sort($array);

        return $array;
    }

    public static function compareTwoNumber($a, $b)
    {
        return ($a != $b) ? false : true;
    }

    public static function multiplicateTwoNumber($a, $b)
    {
        return $a*$b;
    }

    public static function number($var)
    {
        return $var;
    }
}