<?php

namespace ArchPHP\Doraemon\Basics;

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
                $r[$key] = $element;
            }
        }
        return $r;
    }
}

