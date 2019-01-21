<?php
/**
 * the ArchPHP Doraemon project
 *
 * @author      Yumin Gui <guiyumin@gmail.com>
 * @copyright   (c) Yumin Gui
 * @link        https://github.com/archphp/doraemon
 * @license     MIT
 */

namespace ArchPHP\Doraemon\Basics;

class ArrayHelper
{
    public static function chunk(array $arr, int $size, bool $preserve_keys = false) : array
    {
        $size = max($size, 0);
        $length = count($arr);
        if ($length == 0 || $size == 0) {
            return [];
        }
        $index = 0;
        $resIndex = 0;
        $result = [];
        $resultMaxLength = ceil($length / $size);

        while ($index < $length && $resIndex < $resultMaxLength) {
            $result[] = array_slice($arr, $index, ($index += $size), true);
            $resIndex++;
        }
        if (!$preserve_keys){
            $tempResult = [];
            foreach ($result as $resultElementArray)
            {
                $tempResult[] = self::values($resultElementArray);
            }
           $result = $tempResult;
        }
        return $result;
    }
    public static function compact(array $arr) : array
    {
        if (count($arr) === 0){
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

