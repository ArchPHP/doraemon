<?php

namespace Loong\Doraemon\Basics;

class ArrayHelper
{
    public static function compact(array $arr) : array
    {
        if (count($arr) == 0){
            return [];
        }
        $r = [];
        foreach ( $arr as $key => $value){
            if ($value){
                $r[$key] = $value;
            }
        }
        return $r;
    }

    public static function keys(array $arr) : array
    {
        return array_keys($arr);
    }

    public static function values(array $arr) : array
    {
        return array_values($arr);
    }
}

