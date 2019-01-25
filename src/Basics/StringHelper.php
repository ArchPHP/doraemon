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

use ArchPHP\Doraemon\Basics\ArrayHelper;

class StringHelper
{
       
    public static function stringFilter(string $str):array
    {
        $result = [];
        $tmpStr = "";

        for($i = 0; $i < strlen($str); $i++){
            $char = $str[$i];
            if ($char >= 'a' && $char <= 'z'  ){
                $tmpStr .= $char;
            }
            else if ($char >= 'A' && $char <= 'Z'  ){
                $result[] = $tmpStr;
                $tmpStr = $char;
            }
            else{
                $result[] = $tmpStr;
                $tmpStr = "";
            }

            if( $i === strlen($str) - 1){
                $result[] = $tmpStr;
            }
        }
        return ArrayHelper::compact($result);
    }
  

    public static function camelCase(string $str): string
    {
        $filtedStringArray = self::stringFilter($str);

        if (!count($filtedStringArray)){
          return "";
        }

        $result = "";
        foreach($filtedStringArray as $key=>$word)
        {
          if ($key === 0) {
            $result .= strtolower($word);
          }
          else{
            $result .= ucfirst($word);
          }
        }
        return $result;
    }

    public static function pascalCase(string $str) : string
    {
        $filtedStringArray = self::stringFilter($str);

        if (!count($filtedStringArray)){
          return "";
        }

        $result = "";
        foreach($filtedStringArray as $word)
        {
            $result .= ucfirst($word);
        }
        return $result;
    }

    public static function kebabCase(string $str) : string
    {
        $filtedStringArray = self::stringFilter($str);

        if (!count($filtedStringArray)){
          return "";
        }

        $result = implode("-",$filtedStringArray);

        return strtolower($result);
    }

    public static function snakeCase(string $str) : string
    {
        $filtedStringArray = self::stringFilter($str);

        if (!count($filtedStringArray)){
          return "";
        }

        $result = implode("_",$filtedStringArray);

        return strtolower($result);
    }
    
}